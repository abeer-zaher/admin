<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/warsaw-logo.png') }}" type="image/png" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
        integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    {{-- import styles from child pages --}}
    @yield('style')

    <!--Data Tables -->
    <link href="{{ asset('assets/admin/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/admin/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">

    <!--plugins-->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/notifications/css/lobibox.min.css') }}" />
    <link href="{{ asset('assets/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />

    <!-- loader-->
    <link href="{{ asset('assets/admin/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/admin/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@800;1000&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;800;1000&display=swap');
    </style>

    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dark-sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dark-theme.css') }}" />

    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"
        integrity="sha512-Izh34nqeeR7/nwthfeE0SI3c8uhFSnqxV0sI9TvTcXiFJkMd6fB644O64BRq2P/LA/+7eRvCw4GmLsXksyTHBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <style>
        li {
            margin-top: 10px !important;
        }
    </style>
</head>


<body>

    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="'App Logo'" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text">{{ __('App Name') }}</h4>
                </div>
                <a href="javascript:;" id="toggle-btn" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">

                {{-- Main --}}

                <li>
                    <a href="{{ route('admin.index') }}">
                        <div class="parent-icon icon-color-11"><i class="font-30 lni lni-dashboard"></i>
                        </div>
                        <div class="menu-title">{{ __('Dashboard') }}</div>
                    </a>
                </li>


                {{-- Films --}}

                <li>
                    <a href="{{ route('admin.film.index') }}">
                        <div class="parent-icon icon-color-10"><i class="fa-solid fa-folder-tree"></i>
                        </div>
                        <div class="menu-title">{{ __('Films') }}</div>
                    </a>
                </li>

                {{-- Geners --}}
                <li>
                    <a href="{{ route('admin.gener.index') }}">
                        <div class="parent-icon icon-color-10"><i class="fa-solid fa-folder-tree"></i>
                        </div>
                        <div class="menu-title">{{ __('Geners') }}</div>
                    </a>
                </li>



                <li class="menu-label">{{ __('التطبيقات') }}</li>


                {{-- Messages --}}

                <li>
                    <a href="$messages-route">
                        <div class="parent-icon icon-color-3"><i class="fadeIn animated bx bx-md bx-chat"></i>
                        </div>
                        <div class="menu-title">{{ __('الرسائل') }}</div>

                        <span class="badge bg-info rounded-pill">
                            <span id="unseen_conversations_count_badge_main" class="msg-time float-end">0</span>
                        </span>
                    </a>

                </li>


                {{-- System --}}

                <li class="menu-label">{{ __('النظام') }}</li>

                <li>
                    <a href="#settings-route">
                        <div class="parent-icon icon-color-7"><i class="fa-solid fa-lg fa-gear"></i>
                        </div>
                        <div class="menu-title">{{ __('الإعدادات') }}</div>
                    </a>
                </li>

            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar-wrapper-->

        <!--header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="left-topbar d-flex align-items-center">
                    <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
                    </a>
                </div>

                <div class="right-topbar ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item search-btn-mobile">
                            <a class="nav-link position-relative" href="javascript:;"> <i
                                    class="bx bx-search vertical-align-middle"></i>
                            </a>
                        </li>

                        {{-- profile --}}
                        <li class="nav-item dropdown dropdown-user-profile">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="d-flex user-box align-items-center">
                                    <div class="user-info">
                                        <p class="user-name mb-0">{{Auth::user()->name}}</p>
                                        {{-- <p class="designattion mb-0">Available</p> --}}
                                    </div>
                                    {{-- <img src="" class="user-img" alt="user avatar"> --}}
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a hidden class="dropdown-item" href=""><i
                                        class="bx bx-user"></i><span>{{ __('الملف الشخصي') }}</span></a>


                                <div class="dropdown-divider mb-0"></div>

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bx bx-power-off"></i>
                                        <span>{{ __('Logout') }}</span></button>
                                </form>

                            </div>
                        </li>


                    </ul>
                </div>
            </nav>
        </header>
        <!--end header-->

        @yield('content')

        <!--footer -->
        <div class="footer">
            <p class="mb-0">Warsaw @2023 | Developed By : <a href="https://dr-social.com/" target="_blank">Dr
                    Social</a>
            </p>

        </div>
        <!-- end footer -->

    </div>
    <!-- end wrapper -->

    <!-- JavaScript -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

    <!--notification js -->
    <script src="{{ asset('assets/admin/plugins/notifications/js/lobibox.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/notifications/js/notifications.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/notifications/js/notification-custom-script.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/admin/js/fcm-notifications.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>


    {{-- import scripts from child pages --}}
    @yield('script')

</body>
