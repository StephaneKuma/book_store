@extends("layouts.master", ["title" => "Accueil"])

@section('content')
    <div class="section" style="min-height: 81vh;">
        <div class="row container">
            @foreach($books as $book)
                <div class="col s12 m3">
                    <div class="card hoverable indigo lighten-2">
                        <div class="card-image">
                            <img src="{{ asset("storage/" . $book->image) }}">
                            <span class="card-title black-text">{{ $book->title }}</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ route('book.show', $book->id) }}">
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
        <div class="center">{{ $links }}</div>
    </div>
@stop
