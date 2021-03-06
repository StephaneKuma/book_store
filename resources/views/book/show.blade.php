@extends("layouts.master", ["title" => "Détails"])

@section('content')
    <div class="section" style="min-height: 81vh;">
        <div class="row">
            <div class="col s12 m3">
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header">
                            <img class="tooltipped circle" style="height: 10vh" data-position="right" data-tooltip="{{ $book->user->name }}" src="{{ asset("storage/" . $book->user->avatar) }}" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons circle tooltipped" data-position="right" data-tooltip="Laisser moi un message">message</i>
                        </div>
                        <div class="collapsible-body">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col s12 input-field">
                                        <input id="subject" type="text" data-length="30" class="{{ $errors->has('subject') ? ' invalid' : ' validate' }}" name="subject" value="{{ old('subject') }}" required autofocus>
                                        <label for="subject" class="">{{ __('Sujet') }}</label>
                                        <span class="helper-text" data-error="{{ $errors->has('subject') ? $errors->first('subject') : "Oups ! Ce champ ne peut-être vide ou dépasser la longueur maximale de 30 caractères" }}" data-success="Bien"></span>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="message" class="materialize-textarea {{ $errors->has('message') ? ' invalid' : ' validate' }}" name="message" data-length="300"></textarea>
                                        <label for="message">Tapez votre message ici</label>
                                        <span class="helper-text" data-error="{{ $errors->has('message') ? $errors->first('message') : "Oups ! Ce champ ne peut-être vide ou dépasser la longueur maximale de 300 caractères" }}" data-success="Bien"></span>
                                    </div>
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons circle tooltipped" data-position="right" data-tooltip="Envoyer moi un mail">mail</i>
                        </div>
                        <div class="collapsible-body">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" data-length="200"></textarea>
                                        <label for="textarea1">Tapez votre message ici</label>
                                    </div>
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons circle tooltipped" data-position="right" data-tooltip="Appeller moi">phone</i>
                        </div>
                        <div class="collapsible-body">
                            <a class="btn medium materialize-red" href="tel:+22890115116">+288 90 11 51 16</a>
                        </div>
                    </li>
                </ul>
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
                    <p></p>
                </div>
            </div>
        </div>
    </div>
@stop
