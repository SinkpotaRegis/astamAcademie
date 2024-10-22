<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('admin/images/logo.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title> Admin As-Tam </title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="{{route('getadminindex')}}" class="flex mr-auto">
                    <img alt="ASTAM" class="w-6" src="{{asset('admin/images/logo.svg')}}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Joueurs et Entraineurs  <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('getaddjoueur')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Ajout de joueurs (euses) </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getaddentraineur')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Ajout des entraineurs </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getlistejoueur')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Liste des joueurs</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getlisteentraineur')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Liste des entraineurs</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Divers  <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('getactualite')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Actualité </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getaddstaff')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Ajout membre Staff </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getinfosstage')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Infos stage </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getaddgalerie')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Galerie </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getaddcalendrier')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Calendrier </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('getindex')}}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                        <div class="menu__title"> Déconnexion </div>
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="{{route('getadminindex')}}" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="{{route('getadminindex')}}" class="w-6" src="{{asset('admin/images/logo.svg')}}">
                    <span class="hidden xl:block text-white text-lg ml-3"> As<span class="font-medium">Tam</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    {{-- <li>
                        <a href="{{route('getadminindex')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="side-menu__title"> Tableau de bord </div>
                        </a>
                    </li>  --}}
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Joueurs et Entraineurs  <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('getaddjoueur')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Ajout des joueurs(euses) </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('getaddentraineur')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Ajout des entraineurs </div>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('getlistejoueur')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Liste des joueurs </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('getlisteentraineur')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Liste des entraineurs </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Divers  <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('getactualite')}}" class="menu">
                                    <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="menu__title"> Actualité </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('getaddstaff')}}" class="menu">
                                    <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="menu__title"> Ajout membre Staff </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('getinfosstage')}}" class="menu">
                                    <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="menu__title"> Infos stage </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('getaddgalerie')}}" class="menu">
                                    <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="menu__title"> Galerie </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('getaddcalendrier')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Calendrier </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('getindex')}}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                            <div class="side-menu__title"> Déconnexion </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->

    @yield('entete')

<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
<script src="{{asset('admin/js/app.js')}}"></script>
<!-- END: JS Assets-->