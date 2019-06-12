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
        </ul>
    </div>
</nav>

@foreach($levels as $level)
    <ul id="{{ __('dropdown') . $level->id }}" class="dropdown-content">
        @foreach($level->sub_levels as $sub_level)
            <li><a href="">{{ $sub_level->name }}</a></li>
            <li class="divider"></li>
        @endforeach
    </ul>
@endforeach
