@extends("layouts.master", ["title" => "Home"])

@section('content')
    <div class="section">
        <div class="row container">
            @foreach($books as $book)
                <div class="col s12 m3">
                    <div class="card medium hoverable">
                        <div class="card-image">
                            <img src="{{ __("storage") . "/" . $book->image }}">
                            <span class="card-title">{{ $book->title }}</span>
                        </div>
                        <div class="card-content">
                            <p>Niveau : {{ $book->sub_level->name }}</p>
                            <p>Prix : {{ $book->price . __('F CFA') }}</p>
                            <p>{{ $book->description }}</p>
                        </div>
                        <div class="card-action">
                            <a class="btn waves-effect red darken-4 right" href="{{ route('books.show', $book->id) }}">{{ __('Détails') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="center">{{ $links }}</div>
    </div>
@stop
