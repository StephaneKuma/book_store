@extends("layouts.log", ["title" =>"Inscrivez vous"])

@section('content')
    <div class="row" style="padding-top: 4vh">
        <div class="card indigo darken-2 col s12 m6 offset-m3">
            <div class="card-action indigo darken-1 white-text">
                <h3>Inscription</h3>
            </div>

            <div class="card-content">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col s12 input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" type="text" class="{{ $errors->has('name') ? ' invalid' : ' validate' }}" name="name" value="{{ old('name') }}" required autofocus>
                            <label for="name" class="">{{ __('Nom') }}</label>
                            <span class="helper-text" data-error="{{ $errors->has('name') ? $errors->first('name') : "Oups ! Vous n'avez rien insérer" }}" data-success="Bien"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 input-field">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' invalid' : ' validate' }}" name="email" value="{{ old('email') }}" required>
                            <label for="email" class="">{{ __('E-Mail') }}</label>
                            <span class="helper-text" data-error="{{ $errors->has('email') ? $errors->first('email') : "Oups ! L'email n'est pas bien formaté" }}" data-success="Bien"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 input-field">
                            <i class="material-icons prefix">lock_open</i>
                            <input id="password" type="password" class="{{ $errors->has('password') ? ' invalid' : ' validate' }}" name="password" value="{{ old('password') }}" required>
                            <label for="password" class="">{{ __('Mot de passe') }}</label>
                            <span class="helper-text" data-error="{{ $errors->has('password') ? $errors->first('password') : "Ce champ ne doit pas être vide" }}" data-success="Bien"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 input-field">
                            <i class="material-icons prefix">lock</i>
                            <input id="password-confirm" type="password" class="{{ $errors->has('password') ? ' invalid' : ' validate' }}" name="password_confirmation" required>
                            <label for="password-confirm" class="">{{ __('Confirmer mot de passe') }}</label>
                            <span class="helper-text" data-error="{{ $errors->has('password') ? $errors->first('password') : "Ce champ doit être conforme au champ 'Mot de passe'" }}" data-success="Bien"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s4 push-s4 input-field">
                            <button class="btn waves-effect waves-light green" type="submit" name="action"> {{ __("S'inscrire") }}
                                <i class="material-icons left">mode_edit</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
