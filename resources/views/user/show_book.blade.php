@extends("layouts.master", ["title" => "Annonces de $user->name"])

@section('content')
    <div class="section">
        <div class="row">
            <div class="col s12 m3">
                @include("shared._sidebar")
            </div>
            <div class="col s12 m9">
                <div class="row container">
                    <img src="{{ asset("storage/" . $book->image) }}" alt="">
                    <h4>Informations générales</h4>
                    <div class="divider"></div>
                    <p class="">Titre : {{ $book->title }}</p>
                    <p class="">Description : {{ $book->description }}</p>
                    <p>Prix : {{ $book->price }} F CFA</p>
                    <p>Niveau : {{ $book->sub_level->level->name }}</p>
                    <p>Classe : {{  $book->sub_level->name }}</p>
                    <p>Type : {{ $book->sub_category->category->name }} - {{ $book->sub_category->name }}</p>
                </div>
            </div>
        </div>
    </div>
@stop
