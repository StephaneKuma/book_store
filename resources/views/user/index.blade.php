@extends("layouts.master", ["title" => "Tableau de bord"])

@section('content')
    <div class="section" style="min-height: 81vh">
        <div class="row">
            <div class="col s12 m3">
                @include("shared._sidebar")
            </div>
            <div class="col s12 m9">
                <div class="row">
                    <div class="card col s12 m6 hoverable">
                        <div class="card-image">
                            <img src="{{ asset('storage/books/default.png') }}">
                            <span class="card-title red-text">{{ $book_numb }} Livres</span>
                        </div>
                        <div class="card-content indigo lighten-4">
                            <p class="center">Vous avez {{ $book_numb }} livres enregistrés. Cliquez sur le bouton ci-dessous pour afficher tous les livres.</p>
                        </div>
                        <div class="card-action center">
                            <a href="{{ route('profile.show_books', $user->id) }}" class="btn blue-grey">Voir tous les livres</a>
                        </div>
                    </div>
                    <div class="card col s12 m6 hoverable">
                        <div class="card-image">
                            <img src="{{ asset('storage/messages/default.png') }}" style="height: 226px">
                            <span class="card-title red-text">Card Title</span>
                        </div>
                        <div class="card-content indigo lighten-4">
                            <p class="center">I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action center">
                            <a href="#" class="btn blue-grey">Voir tous les messages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
