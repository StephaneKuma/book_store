@extends("layouts.master", ["title" => "Annonces de $user->name"])

@section('content')
    <div class="section">
        <div class="row">
            <div class="col s12 m3">
                @include("shared._sidebar")
            </div>
            <div class="col s12 m9">
                @foreach($books as $book)
                    <div class="col s12 m3">
                        <div class="card hoverable indigo lighten-2">
                            <div class="card-image">
                                <img src="{{ asset("storage/" . $book->image) }}">
                                <span class="card-title black-text">{{ $book->title }}</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ route('profile.show_book', [$user->id, $book->id]) }}">
                                    <i class="material-icons medium">info</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <p>Niveau : {{ $book->sub_level->name }}</p>
                                <p>Prix : {{ $book->price . __(' F CFA') }}</p>
                                <p class="truncate">{{ $book->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
