<nav>
    <div class="nav-wrapper indigo darken-3">
        <a href="{{ route('index') }}" class="brand-logo">
            <i class="material-icons medium left">book</i>
            Book Shop
        </a>
        <ul class="right hide-on-med-and-down">
            @foreach($levels as $level)
                <li>
                    <a class="dropdown-trigger" href="#" data-target="{{ __('dropdown') . $level->id }}">
                        {{ $level->name }}
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            @endforeach
            <li>
                <a href="{{ route("book.create") }}">
                    <i class="material-icons left">add</i>
                    Déposer une annonce
                </a>
            </li>
            @auth
                <li>
                    <a data-target="user-drop" class="dropdown-trigger" href="">
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="" class="responsive-img circle center" style="height: 2.5rem; padding-top: 1rem">
                    </a>

                    <ul id="user-drop" class="dropdown-content">
                        <li>
                            <a href="{{ route('profile.index', Auth::user()->id) }}">
                                <i class="material-icons left">dashboard</i>
                                Tableau de bord
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('index') }}">
                                <i class="material-icons left">home</i>
                                Accueil
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{-- route('profile.index') --}}">
                                <i class="material-icons left">settings_applications</i>
                                Paramètres
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="material-icons left">power_settings_new</i>
                                {{ __('Déconnection') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
            @endauth
            @guest
                <li>
                    <a class="btn waves-effect deep-orange tooltipped" data-tooltip="Voir votre profile" href="{{route('login')}}">
                        <i class="material-icons left">input</i>
                        {{ __("Se connecter") }}</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>

@foreach($levels as $level)
    <ul id="{{ __('dropdown') . $level->id }}" class="dropdown-content">
        @foreach($level->sub_levels as $sub_level)
            <li><a href="{{ url("book/" . $level->name . "/" . $sub_level->name) }}">{{ $sub_level->name }}</a></li>
            <li class="divider"></li>
        @endforeach
    </ul>
@endforeach
