<ul class="collapsible popout">
    <li>
        <div class="collapsible-header">
            <img class="tooltipped circle" style="height: 10vh" data-position="right" data-tooltip="{{ $user->name }}" src="{{ asset("storage/" . $user->avatar) }}" alt="">
            <span class="flow-text valign-wrapper">{{ $user->name }}</span>
        </div>
    </li>
    <li>
        <div class="collapsible-header">
            <a href="{{ route('profile.show_books', $user->id) }}" class="tooltipped black-text" data-position="right" data-tooltip="Voir mes annonces">
                <i class="material-icons left">book</i>
                Livres
            </a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">
            <i class="material-icons tooltipped" data-position="right" data-tooltip="Voir mes messages">message</i>
            Messages
            <span class="new badge">4</span>
        </div>
    </li>
    <li>
        <div class="collapsible-header">
            <i class="material-icons tooltipped" data-position="right" data-tooltip="Mes paramètres">settings_applications</i>
            Paramètres
        </div>
    </li>
</ul>
