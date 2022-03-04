<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dashbord/assets/plugins/bootstrap/dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('dashbord/assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">



        <title>RentCars</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <header>
            <nav>
                <div class="tite"><i class="fa fa-car"></i>Rent</div>
                @if (Auth::guest())
                <div>
                    <ul>
                        <li><a href="{{route('welcome')}}">Accueil</a></li>
                        <li><a href="{{route('userMenu.about')}}">A propos</a></li>
                        <li><a href="{{route('userMenu.contact')}}">Contactez-nous</a></li>
                        <li><a href="{{ route('Uvoiture.index')}}">Nos voitures</a></li>
                    </ul>
                </div>

                <div class="">
                    <ul>
                        <li><a href="{{route('login')}}"> <button>Connexion</button></a> </li>
                        <li><a href="{{route('register')}}"> <button>Inscription</button></a> </li>
                    </ul>
                </div>
                @else
                <div>
                    <ul>
                        <li><a href="{{route('welcome')}}">Accueil</a></li>
                        <li><a href="{{route('userMenu.about')}}">A propos</a></li>
                        <li><a href="{{route('userMenu.contact')}}">Contactez-nous</a></li>
                        <li><a href="{{ route('Uvoiture.index')}}">Nos voitures</a></li>
                        <li><a href="{{ route('Ulocation.index')}}">Mes locations</a></li>
                    </ul>
                </div>
                @can('manage-users')

                <div class="">
                    <ul>
                        <li><a href="{{route('dashboard')}}"> <button>Dashboard</button></a> </li>

                    </ul>
                </div>
                @endcan

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
                                                <button style="border: none; background:none;"
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


                @endif

            </nav>
             @yield('imageHome')
        </header>

         @yield('contenuutilisatteur')

        <footer>
            <div class="follow">
                <h3>Suivez-nous :</h3>
                <div class="icones">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-whatsapp"></i>
                    <i class="fa fa-youtube"></i>
                </div>
            </div>
            <h3 style="margin: auto; text-align:center; margin-top:30px;margin-bottom:20px; ">NOS AGENCES DE LOCATION SUR LE SOL BÉNINOIS</h3>
            <div class="cont">
                <ul>
                    <li>Cilé concorde</li>
                    <li>MTN Director</li>
                    <li>Stade GMK</li>
                    <li>Temple de Pythons</li>
                    <li>Porte du non-retour</li>
                </ul>
                <ul>
                    <li>Marché DANTOKPA</li>
                    <li>Place Etoile Rouge</li>
                    <li>Echangeur Godomey</li>
                    <li>Aéroport Cardinal GANTIN</li>
                    <li>Port Autonome de Ctn</li>
                </ul>
                <ul>
                    <li>Stade Charles de Gaulles</li>
                    <li>Place Bio-Guera de Parakou</li>
                    <li>Maison Blanche à Porto-Novo</li>
                    <li>Omnisport dans l'Alibori</li>
                    <li>Place des Chasseurs de Tchaourou</li>
                </ul>
            </div>
            <hr>
            <div class="prod">
                Copyright 2022 by Fernando Anani & Arnaud Fifonsi
            </div>
        </footer>
        <script src="{{ asset('dashbord/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
