
$(function () {
  ('use strict');

  var assetsPath = '../../../app-assets/',
    registerMultiStepsWizard = document.querySelector('.register-multi-steps-wizard'),
    pageResetForm = $('.auth-register-form'),
    select = $('.select2'),
    creditCard = $('.credit-card-mask'),
    expiryDateMask = $('.expiry-date-mask'),
    cvvMask = $('.cvv-code-mask'),
    mobileNumberMask = $('.mobile-number-mask'),
    pinCodeMask = $('.pin-code-mask');

  if ($('body').attr('data-framework') === 'laravel') {
    assetsPath = $('body').attr('data-asset-path');
  }

  // jQuery Validation
  // --------------------------------------------------------------------
  if (pageResetForm.length) {
    pageResetForm.validate({
      /*
      * ? To enable validation onkeyup
      onkeyup: function (element) {
        $(element).valid();
      },*/
      /*
      * ? To enable validation on focusout
      onfocusout: function (element) {
        $(element).valid();
      }, */
      rules: {
        'register-username': {
          required: true
        },
        'register-email': {
          required: true,
          email: true
        },
        'register-password': {
          required: true
        }
      }
    });
  }

  // multi-steps registration
  // --------------------------------------------------------------------

  // Horizontal Wizard
  if (typeof registerMultiStepsWizard !== undefined && registerMultiStepsWizard !== null) {
    var numberedStepper = new Stepper(registerMultiStepsWizard),
      $form = $(registerMultiStepsWizard).find('form');
    $form.each(function () {
      var $this = $(this);
      $this.validate({
        rules: {
            nombre: {
            required: true
          },
          apellido: {
            required: true
          },
          email: {
            required: true
          },
          celular: {
            required: true
          },
          password: {
            required: true,
            minlength: 8
          },
          'confirm-password': {
            required: true,
            minlength: 8,
            equalTo: '#password'
          },
          cedula: {
            required : true
          },
          institucional: {
            required: true
          },
          area: {
            required: true
          },
          tipoVinculacion: {
            required: true
          },
        },
        messages: {
          cedula: {
            required: 'La Cedula es Requerida'
          },
          institucional: {
            required: 'El Correo es Requerido',
            email: 'Debe ser un Correo valido'
          },
          area: {
            required: 'La Area Tematica es Requerida'
          },
          tipoVinculacion: {
            required: 'El Tipo De Vinculacion es Requerida'
          },
          password: {
            required: 'Es Requerido una contraseña',
            minlength: 'La Contraseña debe tener un minimo 8 Caracteres'
          },
          nombre: {
            required: 'El Nombre es Requerido'
          },
          apellido: {
            required: 'El Apellido es Requerido'
          },
          email: {
            required: 'El Correo es Requerido',
            email: 'Debe ser un Correo valido'
          },
          celular: {
            required: 'El Numero es Requerido',
          },
          'confirm-password': {
            required: 'Por favor Confirme Contraseña',
            minlength: 'La Contraseña debe tener un minimo de 8 Caracteres',
            equalTo: 'Las Constraseñas no son Identicas'
          }
        }
      });
    });

    $(registerMultiStepsWizard)
      .find('.btn-next')
      .each(function () {
        $(this).on('click', function (e) {
          var isValid = $(this).parent().siblings('form').valid();
          if (isValid) {
            numberedStepper.next();
          } else {
            e.preventDefault();
          }
        });
      });

    $(registerMultiStepsWizard)
      .find('.btn-prev')
      .on('click', function () {
        numberedStepper.previous();
      });

    $(registerMultiStepsWizard)
      .find('.btn-submit')
      .on('click', function () {
        var isValid = $(this).parent().siblings('form').valid();
        if (isValid) {
          var cedula = document.getElementById('cedula').value;
          var institucional = document.getElementById('institucional').value;
          var area = document.getElementById('area').value;
          var tipoVinculacion = document.getElementById('tipoVinculacion').value;
          $('#datossegundoformulario').append('<input type="hidden" name="cedula" id="cedula" value="'+ cedula +'" />'+
          '<input type="hidden" name="institucional" id="institucional" value="'+ institucional +'" />'+
          '<input type="hidden" name="area" id="area" value="'+ area +'" />'+
          '<input type="hidden" name="tipoVinculacion" id="tipovinculacion" value="'+ tipoVinculacion +'" />');
          $('#formularioregistro').submit();
        }
      });
  }

  // select2
  select.each(function () {
    var $this = $(this);
    $this.wrap('<div class="position-relative"></div>');
    $this.select2({
      // the following code is used to disable x-scrollbar when click in select input and
      // take 100% width in responsive also
      dropdownAutoWidth: true,
      width: '100%',
      dropdownParent: $this.parent()
    });
  });

  // credit card

  // Credit Card
  if (creditCard.length) {
    creditCard.each(function () {
      new Cleave($(this), {
        creditCard: true,
        onCreditCardTypeChanged: function (type) {
          const elementNodeList = document.querySelectorAll('.card-type');
          if (type != '' && type != 'unknown') {
            //! we accept this approach for multiple credit card masking
            for (let i = 0; i < elementNodeList.length; i++) {
              elementNodeList[i].innerHTML =
                '<img src="' + assetsPath + 'images/icons/payments/' + type + '-cc.png" height="24"/>';
            }
          } else {
            for (let i = 0; i < elementNodeList.length; i++) {
              elementNodeList[i].innerHTML = '';
            }
          }
        }
      });
    });
  }

  // Expiry Date Mask
  if (expiryDateMask.length) {
    new Cleave(expiryDateMask, {
      date: true,
      delimiter: '/',
      datePattern: ['m', 'y']
    });
  }

  // CVV
  if (cvvMask.length) {
    new Cleave(cvvMask, {
      numeral: true,
      numeralPositiveOnly: true
    });
  }

  // phone number mask
  if (mobileNumberMask.length) {
    new Cleave(mobileNumberMask, {
      phone: true,
      phoneRegionCode: 'US'
    });
  }

  // Pincode
  if (pinCodeMask.length) {
    new Cleave(pinCodeMask, {
      delimiter: '',
      numeral: true
    });
  }

  // multi-steps registration
  // --------------------------------------------------------------------
});
