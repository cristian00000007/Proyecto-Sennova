<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Proyecto para el manejo de ambientes de formacion">
    <meta name="keywords" content="Proyecto Ambientes CTGI - GIAITEQ">
    <meta name="author" content="SENNOVA CTGI">
    <title>Sistema Gestion de Ambientes de Formacion y Programacion Instructores - CTGI - GIAITEQ</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600') }}"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/calendars/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/semi-dark-layout.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/app-calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/form-validation.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/semi-dark-layout.css') }}">



</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
            </ul>

        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge rounded-pill bg-danger badge-up">3</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto">Notificaciones</h4>
                            <div class="badge rounded-pill badge-light-primary">3 Nuevas</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar"><img src="{{ asset('images/portrait/small/avatar-s-15.jpg') }}" alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">Congratulation Sam </span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar"><img src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">MD</div>
                                    </div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">Revised Order</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all notifications</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ auth()->user()->name }}</span><span class="user-status">{{ auth()->user()->rol }}</span></div><span class="avatar">@if(auth()->user()->rol == 'Instructor')
                        @foreach ($ver as $info)<img id="foto" class="round" src="{{ asset('storage/'.$info->Instruct_Foto) }}" alt="avatar" height="40" width="40">
                         @endforeach
                    @endif
                    @if(auth()->user()->rol == 'Aprendiz')
                        @foreach ($ver as $info)<img id="foto" class="round" src="{{ asset('storage/'.$info->Aprend_Foto) }}" alt="avatar" height="40" width="40">
                         @endforeach
                    @endif
                    @if(auth()->user()->rol == 'Administrador')
                        @foreach ($ver as $info)<img id="foto" class="round" src="{{ asset('storage/'.$info->Instruct_Foto) }}" alt="avatar" height="40" width="40">
                         @endforeach
                    @endif<span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user" onclick="ver()">

                    <div id="perfil">
                        <input hidden type="button" value="{{ auth()->user()->id }}" id="ij">
                        @if(auth()->user()->rol == 'Aprendiz')<a id="perfil" class="dropdown-item" href="{{ route('perfilA') }}"><i class="me-50" data-feather="user"></i> Profile</a>@endif
                        @if(auth()->user()->rol == 'Instructor')<a id="perfil" class="dropdown-item" href="{{ route('perfilIn') }}"><i class="me-50" data-feather="user"></i> Profile</a>@endif
                    </div>
                    <a class="dropdown-item" href="#"><i class="me-50" data-feather="mail"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="me-50" data-feather="settings"></i> Settings</a>
                    <div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="me-50" data-feather="power"></i>
                        {{ __('Salir') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
@if (auth()->check())

    @if (auth()->user()->rol == 'Administrador')

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="">
                            </span>
                            <h2 style="color:rgb(57, 169, 0);" class="brand-text">GAFP - CTGI</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div ></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Programa Formacion</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="clipboard"></i><span class="menu-title text-truncate" data-i18n="Pages">Ficha Formacion</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='trending-up'></i><span class="menu-title text-truncate" data-i18n="Pages">Ruta de formacion</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route('indexFormacion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('ListaRF') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='clipboard'></i><span class="menu-title text-truncate" data-i18n="Pages">Fichas</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{ route('getProgramas') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('listaF') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Pages">Aprendices</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{ route('irAprendiz') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('gLAprendiz') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span class="menu-title text-truncate" data-i18n="Pages">Programacion Fichas</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='layout'></i><span class="menu-title text-truncate" data-i18n="Pages">Programacion</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route('indexPcion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('IndexLPcion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Pages">Instructores CTGI</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Pages">Instructor</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{ route('getInstructor') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('listaI') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='clipboard'></i><span class="menu-title text-truncate" data-i18n="Pages">Tipo de Vinculacion</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route('indexV') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('ListaTV') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='list'></i><span class="menu-title text-truncate" data-i18n="Pages">Area Tematica</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route('IndexArea') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('ListaAT') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="clipboard"></i><span class="menu-title text-truncate" data-i18n="Pages">Programa Formacion</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='clipboard'></i><span class="menu-title text-truncate" data-i18n="Pages">Programa</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route('programas.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('programas.lista') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='columns'></i><span class="menu-title text-truncate" data-i18n="Pages">Tipos de Programa</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route('VerTiposProgramas') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('ListTP') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='book'></i><span class="menu-title text-truncate" data-i18n="Pages">Competencias</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{ route('vercompetencias') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('competencia.lista') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='book-open'></i><span class="menu-title text-truncate" data-i18n="Pages">Resultados De Aprendizaje</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{ route('getCompetencia') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('resultado.lista') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="codepen"></i><span class="menu-title text-truncate" data-i18n="Pages">Ambiente Formacion</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='codepen'></i><span class="menu-title text-truncate" data-i18n="Pages">Ambientes</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route('IndexAmbiente') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('ListAm') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='trello'></i><span class="menu-title text-truncate" data-i18n="Pages">Categoria de ambientes</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="{{route('indexCategoria') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="{{ route('ListCAm') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Competencia Ruta</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('indexCompRuta') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ListCDR') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </div>
    </div>

    @endif
    @if (auth()->user()->rol == 'Instructor')

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="">
                            </span>
                            <h2 style="color:rgb(57, 169, 0);" class="brand-text">GAFP - CTGI</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Programa Formacion</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Fichas de Formación</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('indexFormacion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Ruta de Formación</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('verFichas') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Fichas</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('irAprendiz') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Aprendiz</span></a>
                        </li>
                        {{-- <li><a class="d-flex align-items-center" href="{{ route('programas.lista') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                        </li> --}}
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Programación Fichas</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('indexPcion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Mi Programación</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('Pficha') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Programación Fichas</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Programas de Formación</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('listaProgramas') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Programa de Formación</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Ambientes de Formación</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ListAm') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Ambientes</span></a>
                        </li>
                    </ul>
                </li>

                {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Programa</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('programas.lista') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Ambientes</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ListAm') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado</span></a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
    @endif
    @if (auth()->user()->rol == 'Aprendiz')

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="">
                            </span>
                            <h2 style="color:rgb(57, 169, 0);" class="brand-text">GAFP - CTGI</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Programa Formacion</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Programación Fichas</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('indexPcion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Mi Programación</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    @endif
    @endif

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Full calendar start -->
                <section>
                    <div class="app-calendar overflow-hidden border">
                        <div class="row g-0">
                            <!-- Sidebar -->
                            <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column"
                                id="app-calendar-sidebar">
                                <div class="sidebar-wrapper">
                                    <div class="card-body d-flex justify-content-center">
                                        <form method="POST" action="{{ route('GPcion') }}" id="RegisPro">
                                            @csrf
                                            <div id="RegistrarPrograma">
                                                @foreach ($ficha as $info)
                                                <input name="FichaId" type="hidden" value="{{ $info->id}}">
                                                @endforeach
                                                <input name="Program_Trimestre" type="hidden" value="{{ $NumeroTrimestre }}">
                                                <div>
                                                    <label for="FechaInicio">Fecha De inicio</label>
                                                    <input id="FechaInicio" name="FechaInicio" type="date" class="form-control">
                                                </div>
                                                <br>
                                                <div>
                                                    <label for="FechaFin">Fecha De Fin</label>
                                                    <input id="FechaFin" name="FechaFin" type="date" class="form-control">
                                                </div>
                                                <br>
                                                <div>
                                                    <input id="validarFormPro" name="validarFormPro" type="hidden" value="0">
                                                </div>

                                            </div>

                                            <button class="btn btn-primary btn-toggle-sidebar w-100">
                                                <span class="align-middle">Registrar Programacion</span>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="card-body pb-0">
                                        <h5 class="section-label mb-1">
                                            @foreach ($ficha as $ficha)
                                            <span class="align-middle">Programacion Ficha {{ $ficha->Ficha_Numero}}</span>
                                            @endforeach
                                        </h5>
                                        <div class="calendar-events-filter">
                                            <div class="form-check form-check-primary mb-1">
                                                <input type="checkbox" class="form-check-input input-filter"
                                                    id="business" data-value="business" checked />
                                                <label class="form-check-label" for="business">Business</label>
                                            </div>
                                            <div id='external-events-list'>

                                                {{-- <div id="event1"
                                                    class="ObjetoRuta fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-start fc-event-end fc-event-today bg-light-primary"
                                                    data-datos="03 :00">
                                                    <div class="fc-daygrid-event-dot"></div>
                                                    <div class="fc-event-time">6 Horas</div>&nbsp;
                                                    <div class="fc-event-title">PHP</div>
                                                </div> --}}


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-auto">
                                    <img src="{{ asset('images/pages/calendar-illustration.png') }}"
                                        alt="Calendar illustration" class="img-fluid" />
                                </div>
                            </div>
                            <!-- /Sidebar -->

                            <!-- Calendar -->
                            <div class="col position-relative">
                                <div class="card shadow-none border-0 mb-0 rounded-0">
                                    <div class="card-body pb-0">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Calendar -->
                            <div class="body-content-overlay"></div>
                        </div>
                    </div>
                    <!-- Calendar Add/Update/Delete event modal-->
                    <div class="modal modal-slide-in event-sidebar fade" id="add-new-sidebar">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 id="titulomodal" class="modal-title">Actualizar Programación</h5>
                                </div>
                                <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                    <form class="event-form needs-validation" name="formselectPro" data-ajax="false" enctype="multipart/form-data" novalidate>
                                        <div class="mb-1">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Event Title" required />
                                        </div>

                                        <div class="mb-1 select2-primary" id="instructorver">
                                            <label for="InstructorSelect" class="form-label">Asignar Instructor</label>
                                            <select class="select2 select-add-guests form-select w-100" id="InstructorSelect" name="InstructorSelect" onchange="listaInstructor(this.value)">
                                                <option selected disabled value="0">-- Seleccionar --</option>
                                                @foreach ($inst as $it)
                                                <option value="{{ $it->id }}">{{ $it->Instruct_Nombres }}</option>
                                                @endforeach
                                            </select>
                                            <span id="mensaje" style="color:rgb(233, 44, 44); display:none;">El Instructor Ya Esta Programado Este Dia</span>
                                            <div id="ruta" hidden>{{ route('PrograInstructor','id') }}</div>
                                        </div>
                                        <div class="mb-1 select2-primary" id="ambientever">
                                            <label for="AmbienteSelect" class="form-label">Asignar Ambiente</label>
                                            <select class="select2 select-add-guests form-select w-100"
                                                id="AmbienteSelect" onchange="ListaAmbiente(this.value)">
                                                <option selected disabled value="0">-- Seleccionar --</option>
                                                @foreach ($ambi as $am)
                                                <option value="{{ $am->id }}">{{ $am->Ambien_Nombres }}</option>
                                                @endforeach
                                            </select>
                                            <span id="mensajea" style="color:rgb(233, 44, 44); display:none;">El Ambiente Esta Ocupado en Este Horario</span>
                                            <div id="rutaAmbiente" hidden>{{ route('PrograAmbiente','id') }}</div>
                                        </div>
                                        <span id="NoDisponible">No Disponible hasta que se selecione Un Instructor y Ambiente</span>
                                        <div class="mb-1 d-flex">
                                            <button id="bton" type="submit" class="btn btn-primary update-event-btn d-none me-1" disabled>Actualizar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Calendar Add/Update/Delete event modal-->
                </section>
                <!-- Full calendar end -->

            </div>
        </div>
    </div>


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a
                    class="ms-25" href="{{ asset('https://investigacionctgi.com/') }}" target="_blank">GIAITEQ</a><span
                    class="d-none d-sm-inline-block">, SENNOVA CTGI</span></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('vendors/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/forms/form-select2.js') }}"></script>
    <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/core/app-menu.js') }}"></script>
    <script src="{{ asset('js/core/app.js') }}"></script>
    <script src="{{ asset('js/scripts/pages/app-calendar-events.js') }}"></script>
    <script src="{{ asset('js/scripts/pages/app-calendar.js') }}"></script>
    <script src="{{ asset('js/es.js') }}"></script>
    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

</body>
<!-- END: Body-->

</html>
<script>
    var nn = 0;
    @foreach ($detalleruta as $info)
    @if($info->Detalle_Ruta_Trimestre == $NumeroTrimestre)
    nn++;
    var le = ("<div id='event"+nn+"'\
    class='ObjetoRuta fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-start fc-event-end fc-event-today bg-light-primary' data-datos='{{ $info->Detalle_Ruta_Horas }}:00'>\
    <div class='fc-daygrid-event-dot'></div>\
    <div class='fc-event-time'>{{ $info->Detalle_Ruta_Horas }}Horas </div>&nbsp\
    <div class='fc-event-title'>{{ $info->Detalle_Ruta_TemaPrincipal }}</div>\
    </div>");

    $('#external-events-list').append(le);
    @endif
    @endforeach
</script>
<script>
    var aler = '<h4 style="color:red">Necesita llenar la programación</h4>';
    $('#RegisPro').validate({
        ignore: "",
        rules: {
            FechaInicio:{
                required: true,
                date: true
            },

            FechaFin:{
                required: true,
                date: true
            },
            validarFormPro:{
                required: true,
                min: 1
            }
        },
        messages: {
            FechaInicio:{
                required: 'Se Necesita Fecha'
            },
            FechaFin:{
                required: 'Se Necesita Fecha'
            },
            validarFormPro:{
                min: aler
            }
        }
    })


</script>

