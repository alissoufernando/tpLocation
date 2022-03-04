<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Laravel</title>

    <!-- Custom CSS -->
    <link href="{{ asset('dashbord/assets/plugins/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dashbord/assets/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    {{-- <x-application-logo /> --}}
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Recherche..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <nav x-data="{ open: false }">
                                <!-- Primary Navigation Menu -->
                                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                    <div class="flex justify-between h-16">


                                        <!-- Settings Dropdown -->
                                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    <button
                                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                        <div>{{ Auth::user()->name }}</div>

                                                        <div class="ml-1">
                                                            <svg class="fill-current h-4 w-4"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </x-slot>

                                                <x-slot name="content">
                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                            {{ __('Déconnexion') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </x-slot>
                                            </x-dropdown>
                                        </div>

                                        <!-- Hamburger -->
                                        <div class="-mr-2 flex items-center sm:hidden">
                                            <button @click="open = ! open"
                                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                                <svg class="h-6 w-6" stroke="currentColor" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path :class="{'hidden': open, 'inline-flex': ! open }"
                                                        class="inline-flex" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M4 6h16M4 12h16M4 18h16" />
                                                    <path :class="{'hidden': ! open, 'inline-flex': open }"
                                                        class="hidden" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Responsive Navigation Menu -->
                                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                                    <div class="pt-2 pb-3 space-y-1">
                                        <x-responsive-nav-link :href="route('dashboard')"
                                            :active="request()->routeIs('dashboard')">
                                            {{ __('Dashboard') }}
                                        </x-responsive-nav-link>
                                    </div>

                                    <!-- Responsive Settings Options -->
                                    <div class="pt-4 pb-1 border-t border-gray-200">
                                        <div class="px-4">
                                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}
                                            </div>
                                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}
                                            </div>
                                        </div>

                                        <div class="mt-3 space-y-1">
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-responsive-nav-link>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </nav>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('dashboard')}}" aria-expanded="false"><i class="me-3  fas fa-clock"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                                </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('welcome')}}" aria-expanded="false">
                            <i class="me-3  fa fa-home" aria-hidden="true"></i><span
                                class="hide-menu">Home</span></a>
                    </li>
                </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('voiture.index')}}" aria-expanded="false">
                            <i class="me-3  fa fa-car" aria-hidden="true"></i><span
                                class="hide-menu">cars</span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('location.index')}}" aria-expanded="false">
                        <i class="me-3 fa fa-tasks" aria-hidden="true"></i><span
                            class="hide-menu">Les Location</span></a>
                </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('user.index')}}" aria-expanded="false"><i class="me-3 fas fa-user-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Users</span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{route('role.index')}}" aria-expanded="false"><i class="me-3 fas fa-key"
                                        aria-hidden="true"></i><span class="hide-menu">Rôles</span></a>
                                    </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="icon-fontawesome.html" aria-expanded="false"><i class="me-3 fa fa-font"
                                    aria-hidden="true"></i><span class="hide-menu">Icon</span></a></li>


                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('pageserror404.index')}}" aria-expanded="false"><i class="me-3 fa fa-info-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Error 404</span></a></li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">


                @yield('contenu')



        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset('dashbord/assets/plugins/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('dashbord/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dashbord/assets/js/app-style-switcher.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('dashbord/assets/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('dashbord/assets/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('dashbord/assets/js/custom.js') }}"></script>
        <!--This page JavaScript -->
        <!--flot chart-->
        <script src="{{ asset('dashbord/assets/plugins/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('dashbord/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('dashbord/assets/js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>
