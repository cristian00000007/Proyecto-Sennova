/**
 * App Calendar
 */

 var infoenviar;
 var ambiense ;

'use-strict';

var direction = 'ltr',
  assetPath = '../../../app-assets/';
if ($('html').data('textdirection') == 'rtl') {
  direction = 'rtl';
}

if ($('body').attr('data-framework') === 'laravel') {
  assetPath = $('body').attr('data-asset-path');
}

$(document).on('click', '.fc-sidebarToggle-button', function (e) {
  $('.app-calendar-sidebar, .body-content-overlay').addClass('show');
});

$(document).on('click', '.body-content-overlay', function (e) {
  $('.app-calendar-sidebar, .body-content-overlay').removeClass('show');
});


document.addEventListener('DOMContentLoaded', function () {

  var calendarEl = document.getElementById('calendar'),
    eventToUpdate,
    sidebar = $('.event-sidebar'),
    calendarsColor = {
      Business: 'primary',
      Holiday: 'success',
      Personal: 'danger',
      Family: 'warning',
      ETC: 'info'
    },

     eventForm = $('.event-form'),
    addEventBtn = $('.add-event-btn'),
    cancelBtn = $('.btn-cancel'),
    updateEventBtn = $('.update-event-btn'),
     toggleSidebarBtn = $('.btn-toggle-sidebar'),
    eventTitle = $('#title'),
     eventLabel = $('#select-label'),
     startDate = $('#start-date'),
     endDate = $('#end-date'),
    eventUrl = $('#event-url'),
     eventGuests = $('#event-guests'),
    eventLocation = $('#event-location'),
    allDaySwitch = $('.allDay-switch'),
    selectAll = $('.select-all'),
    calEventFilter = $('.calendar-events-filter'),
    filterInput = $('.input-filter'),
    btnDeleteEvent = $('.btn-delete-event'),
    calendarEditor = $('#event-description-editor');


    var con = 1
    // Variable inicia con el conteo de los eventos en el Full Calendar
    var evencon = 2
    var containerEl = document.getElementById('external-events-list');
    var eventEls = Array.prototype.slice.call(
      containerEl.querySelectorAll('.ObjetoRuta')
    );
    eventEls.forEach(function(eventEl) {
    var test = document.getElementById("event"+con)
    //Datos Consultados desde el Div y la informacion
    // console.log(test.dataset['datos']);
    con++
    evencon++
      new FullCalendar.Draggable(eventEl, {
        eventData: {
          id: evencon,
          title: eventEl.innerText.trim(),
          duration: test.dataset['datos'],
          allDay: false,
          durationEditable: false,
          start: '2022-08-01',
          end: '2022-08-28',
          extendedProps: {
            calendar: 'Business',
            instructor: "",
            ambiente: "",
          }
        }
      });
    });


    // Valores de funcion de los eeventos traidos de la ruta
    // console.log(eventEls);


  // --------------------------------------------
  // On add new item, clear sidebar-right field fields
  // --------------------------------------------
  $('.add-event button').on('click', function (e) {
    $('.event-sidebar').addClass('show');
    $('.sidebar-left').removeClass('show');
    $('.app-calendar .body-content-overlay').addClass('show');
  });

  // Label  select
  if (eventLabel.length) {
    function renderBullets(option) {
      if (!option.id) {
        return option.text;
      }
      var $bullet =
        "<span class='bullet bullet-" +
        $(option.element).data('label') +
        " bullet-sm me-50'> " +
        '</span>' +
        option.text;

      return $bullet;
    }
    eventLabel.wrap('<div class="position-relative"></div>').select2({
      placeholder: 'Select value',
      dropdownParent: eventLabel.parent(),
      templateResult: renderBullets,
      templateSelection: renderBullets,
      minimumResultsForSearch: -1,
      escapeMarkup: function (es) {
        return es;
      }
    });
  }

  // Start date picker
  if (startDate.length) {
    var start = startDate.flatpickr({
      enableTime: true,
      altFormat: 'Y-m-dTH:i:S',
      onReady: function (selectedDates, dateStr, instance) {
        if (instance.isMobile) {
          $(instance.mobileInput).attr('step', null);
        }
      }
    });
  }

  // End date picker
  if (endDate.length) {
    var end = endDate.flatpickr({
      enableTime: true,
      altFormat: 'Y-m-dTH:i:S',
      onReady: function (selectedDates, dateStr, instance) {
        if (instance.isMobile) {
          $(instance.mobileInput).attr('step', null);
        }
      }
    });
  }

  // Event click function
  function eventClick(info) {


    infoenviar = info;
    // document.ready = document.getElementById('InstructorSelect').value = 0;
    $('#InstructorSelect').val(0);
    if(document.getElementById('InstructorSelect').value == 0 && document.getElementById('AmbienteSelect').value == 0 ){
      document.getElementById('bton').setAttribute("hidden","");
      document.getElementById('NoDisponible').style.display = 'block';
    }
    $('#InstructorSelect').change();

    $('#AmbienteSelect').val(0);
    if(document.getElementById('InstructorSelect').value == 0 && document.getElementById('AmbienteSelect').value == 0 ){
      document.getElementById('bton').setAttribute("hidden","");
      document.getElementById('NoDisponible').style.display = 'block';
    }
    $('#AmbienteSelect').change();





    eventToUpdate = info.event;
    if (eventToUpdate.url) {
      info.jsEvent.preventDefault();
      window.open(eventToUpdate.url, '_blank');
    }
    sidebar.modal('show');
    addEventBtn.addClass('d-none');
    cancelBtn.addClass('d-none');
    updateEventBtn.removeClass('d-none');
    btnDeleteEvent.removeClass('d-none');
    eventTitle.val((eventToUpdate.title).split(' ',1));
    // console.log(info.event['_def'].extendedProps.instructor);

    // console.log(eventToUpdate.extendedProps);
    // console.log(eventTitle.val());
    // console.log(eventToUpdate.title);

    // var division = eventToUpdate.title.split('\n',1);
    // console.log(division);a
    // console.log(calEventFilter);


    //  Delete Event
    btnDeleteEvent.on('click', function () {
      eventToUpdate.remove();
      // removeEvent(eventToUpdate.id);
      sidebar.modal('hide');
      $('.event-sidebar').removeClass('show');
      $('.app-calendar .body-content-overlay').removeClass('show');
    });
  }





  // Modify sidebar toggler
  function modifyToggler() {
    $('.fc-sidebarToggle-button')
      .empty()
      .append(feather.icons['menu'].toSvg({ class: 'ficon' }));
  }

  // Selected Checkboxes
  function selectedCalendars() {
    var selected = [];
    $('.calendar-events-filter input:checked').each(function () {
      selected.push($(this).attr('data-value'));
    });
    return selected;
  }

  // --------------------------------------------------------------------------------------------------
  // AXIOS: fetchEvents
  // * cargue de eventos esde La ruta al Calendario sin Modificar
  // --------------------------------------------------------------------------------------------------
  // function fetchEvents(info, successCallback) {
  //   Fetch Events from API endpoint reference
  //   /* $.ajax(
  //     {
  //       url: '../../../app-assets/data/app-calendar-events.js',
  //       type: 'GET',
  //       success: function (result) {
  //         Get requested calendars as Array
  //         var calendars = selectedCalendars();

  //         return [result.events.filter(event => calendars.includes(event.extendedProps.calendar))];
  //       },
  //       error: function (error) {
  //         console.log(error);
  //       }
  //     }
  //   ); */

  //   var calendars = selectedCalendars();
  //   selectedEvents = events.filter(function (event) {
  //     Valor del Grupo de filtro Ej Bussines
  //     console.log(event.extendedProps.calendar.toLowerCase())
  //     return calendars.includes(event.extendedProps.calendar.toLowerCase());
  //   });
  //   selectedEvents = events.filter(function (event) {
  //     console.log(event.extendedProps.calendar.toLowerCase())
  //     return calendars.includes(event.extendedProps.calendar.toLowerCase());
  //   });

  //   if (selectedEvents.length > 0) {
  //   successCallback(selectedEvents);
  //   }
  // }

  // Calendar plugins
  let nm = 0;
  var calendar = new FullCalendar.Calendar(calendarEl, {
    locale: 'es',
    initialView: 'timeGridWeek',
    allDaySlot: false,
    hiddenDays: [ 0 ],
    slotMinTime: '06:00:00',
    slotMaxTime: '22:00:00',
    slotLabelFormat:{
      hour: '2-digit',
      minute: '2-digit',
      hour12: true,
      meridiem: 'short',
    },
    // Cuando cargue eventos los traemos por ajax de un JSON en el metodo FetchEven
    // events: fetchEvents,
    editable: true,
    drop: function (arg) {
      arg.draggedEl.parentNode.removeChild(arg.draggedEl);
    //   document.querySelector('.fc-event').setAttribute('id','ev'+nm);
    //   console.log(event.start);
    //   document.getElementsByClassName('fc-day').setAttribute("id");
    // var nameeven = document.querySelectorAll('.fc-timegrid-col');
    // arg.setAttribute('id','eve');
    // $('td').addClass('id','eve');
    // console.log($('td')[0].innerHTML);
      nm++;
    },
    dragScroll: true,
    dayMaxEvents: 4,
    eventResizableFromStart: true,
    customButtons: {
      sidebarToggle: {
        text: 'Sidebar'
      }
    },
    headerToolbar: {
      start: 'sidebarToggle, prev,next, title',
      end: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    direction: direction,
    initialDate: new Date(),
    navLinks: true, // can click day/week names to navigate views
    eventClassNames: function ({ event: calendarEvent }) {
      const colorName = calendarsColor[calendarEvent._def.extendedProps.calendar];



      return [
        // Background Color
        'bg-light-' + colorName
      ];
    },
    eventClick: function (info) {
      eventClick(info);
    },
    datesSet: function () {
      modifyToggler();
    },
    viewDidMount: function () {
      modifyToggler();
    }
  });

  // Render calendar
  calendar.render();
  // Modify sidebar toggler
  modifyToggler();
  // updateEventClass();

  // Validate add new and update form
  if (eventForm.length) {
    eventForm.validate({
      submitHandler: function (form, event) {
        event.preventDefault();
        if (eventForm.valid()) {
          sidebar.modal('hide');
        }
      },
      title: {
        required: true
      },
      rules: {
        'start-date': { required: true },
        'end-date': { required: true }
      },
      messages: {
        'start-date': { required: 'Start Date is required' },
        'end-date': { required: 'End Date is required' }
      }
    });
  }

  // Sidebar Toggle Btn
  if (toggleSidebarBtn.length) {
    toggleSidebarBtn.on('click', function () {
      cancelBtn.removeClass('d-none');
    });
  }

  // ------------------------------------------------
  // addEvent
  // // ------------------------------------------------
  // function addEvent(eventData) {
  //   calendar.addEvent(eventData);
  //   calendar.refetchEvents();
  // }

  // ------------------------------------------------
  // updateEvent
  // ------------------------------------------------
  function updateEvent(eventData) {

    var propsToUpdate = ['id', 'title'];
    var extendedPropsToUpdate = ['instructor','ambiente'];
    updateEventInCalendar(eventData, propsToUpdate, extendedPropsToUpdate);

    var extenpro = (eventData.extendedProps);
    var ambientesIdAmbientes = extenpro.ambiente;
    var InstructorId = extenpro.instructor;
    // var idEvento = $('.fc-event-main-frame')[0].innerText.split('\n',1);
    // console.log(idEvento);
    // console.log($('.fc-event-main-frame'));


    var hevent = infoenviar.event.start;
    hevent = String(hevent);
    hevent = hevent.split(' ');

    var fcevent = hevent[4];
    // console.log(fcevent);

    var heventfin = infoenviar.event.end;
    heventfin = String(heventfin);
    heventfin = heventfin.split(' ');

    heventfin = heventfin[4];
    // console.log(heventfin);
    // var fecha = ($('.fc-timegrid-col.fc-day.fc-day-mon.fc-day-past')[0]['dataset']['date']);
    // console.log($('.fc')[0].innerHTML);
    // console.log($('.fc-timegrid-now-indicator-container'));
    // console.log($('.fc-event-main-frame'));
    // console.log($('.fc-timegrid-cols')[0].innerHTML);
    // console.log($('.fc-timegrid-now-indicator-container'));
    // console.log($('.fc-timegrid-col-frame'));
    // console.log($('.fc-daygrid-day'));

    // console.log($('.fc-event-main'));
    // console.log(infoenviar.el.fcSeg.start);
    var diaEvento = infoenviar.el.fcSeg.start;
    var diaEv = JSON.stringify(diaEvento).split('T')[0].replace('"','');
    diaEvento = String(diaEvento);
    diaEvento = diaEvento.split(' ',1);
    if(diaEvento == 'Mon'){
      diaEvento = 'Lunes';
    }
    else if(diaEvento == 'Tue'){
      diaEvento = 'Martes';
    }
    else if(diaEvento == 'Wed'){
      diaEvento = 'Miercoles';
    }
    else if(diaEvento == 'Thu'){
      diaEvento = 'Jueves';
    }
    else if(diaEvento == 'Fri'){
      diaEvento = 'Viernes';
    }
    else if(diaEvento == 'Sat'){
      diaEvento = 'Sabado';
    }else{
        diaEvento = 'N/N';
    }



    // console.log((eventToUpdate)._context);

    // console.log($('.fc-timegrid-cols')[0].innerHTML);
    // console.log($('.fc-timegrid-event-harness.fc-timegrid-event-harness-inset')[0].innerHTML);

        var horario = fcevent;
        // var horarioFranja =horario[0].split(' - ',1)[0];
        if(horario == '06:00:00'){
            $('#RegistrarPrograma').append('<input name="Program_Franja[]" type="hidden" value="Mañana">');
        }
        else if(horario == '12:00:00'){
            $('#RegistrarPrograma').append('<input name="Program_Franja[]" type="hidden" value="Tarde">');
        }
        else if(horario == '18:00:00'){
            $('#RegistrarPrograma').append('<input name="Program_Franja[]" type="hidden" value="Noche">');
        }else{
            $('#RegistrarPrograma').append('<input name="Program_Franja[]" type="hidden" value="1">');
        }

        // console.log(horario);
        // horario = horario[0].split('-');


        var horaioInicio = horario;
        // var horaioInicio1 = horaioInicio.split('')[0];
        // if(horaioInicio1 < 10 && horaioInicio1 > 5){
        //   horaioInicio = '0'+horaioInicio;
        // }

        var horaioFin = heventfin;
        // var horaioFin1 = horaioFin.split('')[0];
        // if(horaioFin1 < 10 && horaioFin1 > 5){
        //   horaioFin = '0'+horaioFin;
        // }
        // console.log('inicio'+horaioInicio);
        // console.log('Fin'+horaioFin);
        // console.log(diaEvento);

    // console.log($('.event-sidebar'));

    console.log(horaioInicio +':'+ horaioFin);
    $('#RegistrarPrograma').append('<input name="ambientesIdAmbientes[]" id="ambienteid" type="hidden" value="'+ambientesIdAmbientes+'">'+
    '<input name="InstructorId[]" type="hidden" value="'+InstructorId+'">'+
    '<input name="HoraInicion[]" type="hidden" value="'+horaioInicio+'">'+
    '<input name="HoraFin[]" type="hidden" value="'+horaioFin+'">'+
    '<input name="DiaProgramacion[]" type="hidden" value="'+diaEvento+'">');
    document.getElementById('validarFormPro').value = 1;
    // console.log(extenpro.ambiente, extenpro.instructor);
    // console.log(eventData);
  }

  // // ------------------------------------------------
  // // removeEvent
  // // ------------------------------------------------
  // function removeEvent(eventId) {
  //   removeEventInCalendar(eventId);
  // }

  // ------------------------------------------------
  // (UI) updateEventInCalendar
  // ------------------------------------------------
  const updateEventInCalendar = (updatedEventData, propsToUpdate, extendedPropsToUpdate) => {
    const existingEvent = calendar.getEventById(updatedEventData.id);
    console.log(existingEvent);

    // --- Set event properties except date related ----- //
    // ? Docs: https://fullcalendar.io/docs/Event-setProp
    // dateRelatedProps => ['start', 'end', 'allDay']
    // eslint-disable-next-line no-plusplus
    for (var index = 0; index < propsToUpdate.length; index++) {
      var propName = propsToUpdate[index];
      existingEvent.setProp(propName, updatedEventData[propName]);
    }

    // --- Set date related props ----- //
    // ? Docs: https://fullcalendar.io/docs/Event-setDates
   existingEvent.setDates(updatedEventData.start, updatedEventData.end, { allDay: updatedEventData.allDay });


    // --- Set event's extendedProps ----- //
    // ? Docs: https://fullcalendar.io/docs/Event-setExtendedProp
    // eslint-disable-next-line no-plusplus
    for (var index = 0; index < extendedPropsToUpdate.length; index++) {
      var propName = extendedPropsToUpdate[index];
      existingEvent.setExtendedProp(propName, updatedEventData.extendedProps[propName]);
    }
  };

  // ------------------------------------------------
  // (UI) removeEventInCalendar
  // ------------------------------------------------
  // function removeEventInCalendar(eventId) {
  //   calendar.getEventById(eventId).remove();
  // }

  // Add new event
  // $(addEventBtn).on('click', function () {
  //   if (eventForm.valid()) {
  //     var newEvent = {
  //       id: calendar.getEvents().length + 1,
  //       title: eventTitle.val(),
  //       start: startDate.val(),
  //       end: endDate.val(),
  //       startStr: startDate.val(),
  //       endStr: endDate.val(),
  //       display: 'block',
  //       extendedProps: {
  //         location: eventLocation.val(),
  //         guests: eventGuests.val(),
  //         calendar: eventLabel.val(),
  //         description: calendarEditor.val()
  //       }
  //     };
  //     if (eventUrl.val().length) {
  //       newEvent.url = eventUrl.val();
  //     }
  //     // if (allDaySwitch.prop('checked')) {
  //     //   newEvent.allDay = true;
  //     // }
  //     addEvent(newEvent);
  //   }
  // });

  // Valores para Actualizar en el Evento En el calendario

    updateEventBtn.on('click', function () {
        if (eventForm.valid()) {
          var eventData = {
            id: eventToUpdate.id,
            title: sidebar.find(eventTitle).val() + "\n Instructor:" + "\n" + sidebar.find('#InstructorSelect option:selected').html() + "\n Ambiente:\n" + sidebar.find('#AmbienteSelect option:selected').html(),
            display: 'block',
            extendedProps: {
              instructor: sidebar.find(InstructorSelect).val(),
              ambiente: sidebar.find(AmbienteSelect).val(),
            },
            allDay: false
          };
          updateEvent(eventData);
          sidebar.modal('hide');

        }

        // console.log(eventForm);

       });



  // Reset sidebar input values
  // function resetValues() {
  //   endDate.val('');
  //   eventUrl.val('');
  //   startDate.val('');
  //   eventTitle.val('');
  //   eventLocation.val('');
  //   allDaySwitch.prop('checked', false);
  //   eventGuests.val('').trigger('change');
  //   calendarEditor.val('');
  // }

  // When modal hides reset input values
  // sidebar.on('hidden.bs.modal', function () {
  //   resetValues();
  // });

  // Hide left sidebar if the right sidebar is open
  $('.btn-toggle-sidebar').on('click', function () {
    btnDeleteEvent.addClass('d-none');
    updateEventBtn.addClass('d-none');
    addEventBtn.removeClass('d-none');
    $('.app-calendar-sidebar, .body-content-overlay').removeClass('show');
  });

  // Select all & filter functionality
  if (selectAll.length) {
    selectAll.on('change', function () {
      var $this = $(this);

      if ($this.prop('checked')) {
        calEventFilter.find('input').prop('checked', true);
      } else {
        calEventFilter.find('input').prop('checked', false);
      }
      calendar.refetchEvents();
    });
  }

  if (filterInput.length) {
    filterInput.on('change', function () {
      $('.input-filter:checked').length < calEventFilter.find('input').length
        ? selectAll.prop('checked', false)
        : selectAll.prop('checked', true);
      calendar.refetchEvents();
    });
  }
});

var vers1;
var vers2;
function listaInstructor(){

    document.getElementById('mensaje').style.display = 'none';
    vers1 = 0;
    var value = $('#InstructorSelect option:selected').val();
    var ruta = document.getElementById('ruta').innerHTML;

    if(document.getElementById('InstructorSelect').value > 0 && document.getElementById('AmbienteSelect').value > 0){
        document.getElementById('bton').removeAttribute("hidden");
        document.getElementById('NoDisponible').style.display = 'none';
      }

    ruta = ruta.replace('id',value);
    fetch(ruta)
    .then(response => response.json() )
    .then(data => {


      var diaver = infoenviar.el.fcSeg.end;
      // console.log(infoenviar.el.fcSeg.end);
      var fecha = JSON.stringify(diaver);
      fecha = fecha.split('T',1);
      fecha = fecha[0].replace('"','');


        // diaver = diaver.split()
        // console.log(diaver);
        // console.log(data.length)
        // console.log(data);
        if (data.length > 0){

        //   document.getElementById('bton').removeAttribute("hidden");
          let i;
            for(i = 0; i<data.length; i++){
                diaver = String(diaver);
                diaver = diaver.split(' ',1);

                if(diaver[0] == 'Mon'){
                    diaver[0] = 'Lunes';
                }
                else if(diaver[0] == 'Tue'){
                    diaver[0] = 'Martes';
                }
                else if(diaver[0] == 'Wed'){
                    diaver[0] = 'Miercoles';
                }
                else if(diaver[0] == 'Thu'){
                    diaver[0] = 'Jueves';
                }
                else if(diaver[0] == 'Fri'){
                    diaver[0] = 'Viernes';
                }
                else if(diaver[0] == 'Sat'){
                    diaver[0] = 'Sabado';
                }else{
            diaver[0] = 'N/N';
            }


            diaver = diaver[0];

            var hora = $('.fc-event-main-frame')[0].innerText.split('\n',1)[0];
            var horai = hora.split(' - ')[0];
            horai = horai+':00';
            if(horai[0] < 10){
                horai = '0'+horai;
            }
            var horaf = hora.split(' - ')[1];
            horaf = horaf+':00';
            hora = horai+' - '+horaf;

                // console.log(data[i].Program_Dia +' = '+ fecha);
                // console.log(data[i].Program_HoraInicio + ' - ' + data[i].Program_HoraFinal);

                var horario = data[i].Program_HoraInicio + ' - ' + data[i].Program_HoraFinal;
                // console.log(horario);
                // console.log(hora);
                compa = data[i].Program_Dia;
                if(data[i].Program_Dia == diaver && horario == hora){
                  document.getElementById('bton').setAttribute("disabled", "");
                  document.getElementById('mensaje').style.display = 'block';

                  vers1 = 1;
                }
            }
        }
    })
    .catch(err=>console.log(err));

    if(vers1 == 0 && vers2 == 0){
      document.getElementById('bton').removeAttribute("disabled");
    }

}

function ListaAmbiente(){
    document.getElementById('mensajea').style.display = 'none';
    vers2 = 0;
    var ambiente = $('#AmbienteSelect option:selected').val();
    var rutaAmbiente = document.getElementById('rutaAmbiente').innerHTML;
    rutaAmbiente = rutaAmbiente.replace('id',ambiente);

    if(document.getElementById('InstructorSelect').value > 0 && document.getElementById('AmbienteSelect').value > 0){
        document.getElementById('bton').removeAttribute("hidden");
        document.getElementById('NoDisponible').style.display = 'none';
      }

    fetch(rutaAmbiente)
    .then(response => response.json() )
    .then(data => {
        if(data.length > 0){

            for(let i = 0; i<data.length; i++){

                var diaver = infoenviar.el.fcSeg.end;

                var fecha = JSON.stringify(diaver);
                fecha = fecha.split('T',1);
                fecha = fecha[0].replace('"','');

                diaver = String(diaver);
                diaver = diaver.split(' ',1);

                if(diaver[0] == 'Mon'){
                    diaver[0] = 'Lunes';
                }
                else if(diaver[0] == 'Tue'){
                    diaver[0] = 'Martes';
                }
                else if(diaver[0] == 'Wed'){
                    diaver[0] = 'Miercoles';
                }
                else if(diaver[0] == 'Thu'){
                    diaver[0] = 'Jueves';
                }
                else if(diaver[0] == 'Fri'){
                    diaver[0] = 'Viernes';
                }
                else if(diaver[0] == 'Sat'){
                    diaver[0] = 'Sabado';
                }else{
            diaver[0] = 'N/N';
            }


            diaver = diaver[0];
            var hora = $('.fc-event-main-frame')[0].innerText.split('\n',1)[0];
            var horai = hora.split(' - ')[0];
            horai = horai+':00';
            if(horai[0] < 10){
                horai = '0'+horai;
            }
            var horaf = hora.split(' - ')[1];
            horaf = horaf+':00';
            hora = horai+' - '+horaf;


            var horario = data[i].Program_HoraInicio + ' - ' + data[i].Program_HoraFinal;
            if(data[i].Program_Dia == diaver && horario == hora){

                // console.log('Ya Programado');
                document.getElementById('bton').setAttribute("disabled", "");
                document.getElementById('mensajea').style.display = 'block';

                vers2 = 1;
            }

        }

        }


    })
    .catch(err=>console.log(err));

    if(vers1 == 0 && vers2 == 0){
      document.getElementById('bton').removeAttribute("disabled");
    }
}





