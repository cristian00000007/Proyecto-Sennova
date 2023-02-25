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
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">





</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
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

</body>
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
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
            </section>
            <!--/ Basic table -->


        </div>
    </div>
</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ms-25" href="{{ asset('https://investigacionctgi.com/') }}" target="_blank">GIAITEQ</a><span class="d-none d-sm-inline-block">, SENNOVA CTGI</span></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/jszip.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('js/core/app-menu.js') }}"></script>
<script src="{{ asset('js/core/app.js') }}"></script>
{{-- core/app Tiene un error --}}
<script src="{{ asset('js/scripts/forms/form-tooltip-valid.js') }}"></script>
<script src="{{ asset('js/alerta/sweetalert.min.js') }}"></script>
<script src="{{ asset('vendors/js/extensions/moment.min.js') }}"></script>
<script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('/js/scripts/forms/form-select2.js') }}"></script>
<script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
</html>
<script>
    function borrar(id){
                swal({
                    title: "¿Seguro que desea eliminar?",
                    text: "El registro eliminado no se podra recuperar",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        var url2='{{ route('EliminarRF','id') }}';
                            url2 = url2.replace('id',id);
                        location.href=url2;
                    } else {
                        swal("El registro no sera borrado");
                    }
                    });

            }
$(function () {
  'use strict';

  var dt_basic_table = $('.datatables-basic'),
    dt_date_table = $('.dt-date'),
    dt_complex_header_table = $('.dt-complex-header'),
    dt_row_grouping_table = $('.dt-row-grouping'),
    dt_multilingual_table = $('.dt-multilingual'),
    assetPath = 'app-assets/';

  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
  }

  if (dt_basic_table.length) {
    var dt_basic = dt_basic_table.DataTable({
        ajax: '{{ route('listRFj') }}',
      //ajax: 'http://localhost/Laravel%20Pro%20Amb/public/programas/listjson',
      columns: [
            { data: 'id' },
            { data: 'Ruta_Nombre' },
            { data: 'Ruta_Estado' },
            { data: 'Acciones' },
          ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          orderable: false,
          responsivePriority: 2,
          targets: 0
        },
        {
          // Actions
          targets: -1,
          orderable: false,
          render: function (data, type, full, meta) {
            var id = full['id'];
            var id2 = full['Programa_id'];
            var url3 = '{{ route('DetalleDeRuta',['id','id2']) }}';
            url3 = url3.replace('id',id);
            url3 = url3.replace('id2',id2);
            var url = '{{ route('actualizarRF','id') }}';
            url = url.replace('id',id);
            var url2='{{ route('EliminarRF','id') }}';
            url2 = url2.replace('id',id);
            return (
              '<div class="d-inline-flex">' +
              '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' +
              feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
              '</a>' +
              '<div class="dropdown-menu dropdown-menu-end">' +
              '<a href="'+url3+'" class="dropdown-item">' +
              feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
              'Detalle Ruta</a>' +
              '<a onclick="borrar('+id+');" class="dropdown-item">' +
              feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
              'Borrar</a>' +
              '</div>' +
              '</div>' +
              '<a href="'+url+'" class="item-edit">' +
              feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
              '</a>'
            );
          }
        }
      ],
      order: [[2, 'desc']],
      dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 7,
      lengthMenu: [7, 10, 25, 50, 75, 100],
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-outline-secondary dropdown-toggle me-2',
          text: feather.icons['share'].toSvg({ class: 'font-small-4 me-50' }) + 'Exportar',
          buttons: [
            {
              extend: 'print',
              text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            },
            {
              extend: 'csv',
              text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            },
            {
              extend: 'excel',
              text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            },
            {
              extend: 'pdf',
              text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            },
            {
              extend: 'copy',
              text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy',
              className: 'dropdown-item',
              exportOptions: { columns: [3, 4, 5, 6, 7] }
            }
          ],
        },
      ],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['full_name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== ''
                ? '<tr data-dt-row="' +
                    col.rowIdx +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
          }
        }
      },
      language: {
            "lengthMenu": "Mostrando _MENU_ registros por pagina",
            "zeroRecords": "No se encontraros registros",
            "info": "Mostrando page _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros con esos parametros",
            "infoFiltered": "(Filtrados de _MAX_ datos)",
            "search": "Buscar Datos",
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      }
    });
    $('div.head-label').html('<h6 class="mb-0">Listado de Ruta Formacion</h6>');
  }

  // Flat Date picker
  if (dt_date_table.length) {
    dt_date_table.flatpickr({
      monthSelectorType: 'static',
      dateFormat: 'm/d/Y'
    });
  }
  $('.datatables-basic tbody').on('click', '.delete-record', function () {
    dt_basic.row($(this).parents('tr')).remove().draw();
  });

});

</script>
