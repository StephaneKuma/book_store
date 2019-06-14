<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title . ' - Book Shop' ?? 'Book Shop' }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-icons.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar-fixed">
        <nav class="indigo darken-4">
            <a class="brand-logo" href="{{ url('/') }}">
                {{ __('Book Shop') }}
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!-- Authentication Links -->
                @guest
                    <li>
                        <a href="{{ route('login') }}"><i class="material-icons left">input</i>{{ __('Se Connecter') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}"><i class="material-icons left">mode_edit</i>{{ __("S'inscrire") }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a data-target="user-drop" class="dropdown-trigger" href="">
                            {{ Auth::user()->name }}
                        </a>

                        <ul id="user-drop" class="dropdown-content">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Se déconnecter') }}
                                </a>
                            </li>

                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>

    @if(session('success'))
        <div class="container">
            <div class="card-panel green">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="container">
            <div class="card-panel red">
                {{ session('error') }}
            </div>
        </div>
    @endif

    @yield('content')

    @include('layouts.partials._footer')

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('js/materialize.min.js') }}" defer></script>

    <script>
        $('.dropdown-trigger').dropdown({
            constrainWidth: false,
            coverTrigger: false,
            hover: true,
            inDuration: 300,
            outDuration: 200
        });
    </script>

    @yield('scripts')
</body>
</html>
