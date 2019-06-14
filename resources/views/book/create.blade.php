@extends("layouts.master", ["title" => "Créer une annonce"])

@section('content')
    <div class="section">
        <div class="row indigo lighten-4">
            <div class="col s12">
                <h3 class="center">{{ __('Déposer une annonce') }}</h3>
                <p>
                <h5 class="orange-text center">
                    Vous avez un livre, anale, roman ... Voulez-vous les vendre ? <br>
                </h5>
                </p>
            </div>
        </div>
        <div class="row container">
            <form action="{{ route("book.store") }}" method="post">
                @csrf
                <div class="row">
                    <div class="col s6 input-field">
                        <input id="title" type="text" data-length="30" class="{{ $errors->has('title') ? ' invalid' : ' validate' }}" name="title" value="{{ old('title') }}" required autofocus>
                        <label for="title" class="">{{ __('Titre') }}</label>
                        <span class="helper-text" data-error="{{ $errors->has('title') ? $errors->first('title') : "Oups ! Ce champ ne peut-être vide ou dépasser la longueur maximale de 30 caractères" }}" data-success="Bien"></span>
                    </div>
                    <div class="col s6 input-field">
                        <select>
                            <option value="" disabled selected>{{ __('Catégorie') }}</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 input-field">
                        <select>
                            <option value="" disabled selected>{{ __('Sous catégorie') }}</option>
                            @foreach($sub_categories as $sub_category)
                                <option value="{{ $sub_category->name }}">{{ $sub_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s6 input-field">
                        <select>
                            <option value="" disabled selected>{{ __('Niveau') }}</option>
                            @foreach($levels as $level)
                                <option value="{{ $level->name }}">{{ $level->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 input-field">
                        <select>
                            <option value="" disabled selected>{{ __('Sous Niveau') }}</option>
                            @foreach($sub_levels as $sub_level)
                                <option value="{{ $sub_level->name }}">{{ $sub_level->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s6 file-field input-field">
                        <div class="btn">
                            <span>Image</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 input-field">
                        <input id="price" type="text" class="{{ $errors->has('price') ? ' invalid' : ' validate' }}" name="title" value="{{ old('price') }}" required>
                        <label for="price" class="">{{ __('Prix') }}</label>
                        <span class="helper-text" data-error="{{ $errors->has('price') ? $errors->first('price') : "Oups ! Ce champ ne peut-être vide" }}" data-success="Bien"></span>
                    </div>
                    <div class="input-field col s6">
                        <textarea type="text" id="description" name="description" data-length="200" class="materialize-textarea{{ $errors->has('description') ? ' invalid' : ' validate' }}" data-length="200"></textarea>
                        <label for="description">{{ __("Description") }}</label>
                        <span class="helper-text" data-error="{{ $errors->has('first_name') ? $errors->first('description') : "Oups !'" }}" data-success="Bien"></span>
                    </div>
                </div>
                <div class="row container">
                    <button class="col s4 push-s4 btn waves-effect waves-light btn-large blue-grey" type="submit" name="action">Enregistrer
                        <i class="material-icons right">save</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
@stop
