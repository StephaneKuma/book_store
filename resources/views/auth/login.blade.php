@extends("layouts.log", ['title' => 'Connectez vous'])

@section('content')
    <div class="row" style="padding-top: 4vh">
        <div class="card indigo darken-2 col s12 m6 offset-m3">
            <div class="card-action indigo darken-1 white-text">
                <h3>Connexion</h3>
            </div>

            <div class="card-content">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col s12 input-field">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' invalid' : ' validate' }}" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email" class="">{{ __('E-Mail') }}</label>
                            <span class="helper-text" data-error="{{ $errors->has('email') ? $errors->first('email') : "Oups ! L'email n'est pas bien formaté" }}" data-success="Bien"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 input-field">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" class="{{ $errors->has('password') ? ' invalid' : ' validate' }}" name="password" value="{{ old('password') }}" required>
                            <label for="password" class="">{{ __('Mot de passe') }}</label>
                            <span class="helper-text" data-error="{{ $errors->has('password') ? $errors->first('password') : "Le mot de passe n'est pas correcte" }}" data-success="Bien"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 input-field">
                            <label for="remember">
                                <input id="remember" type="checkbox" class="filled-in" checked="checked" name="remember" value="{{ old('remember') }}" required/>
                                <span class="deep-orange-text">{{ __('Se souvenir de moi') }}</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 input-field">
                            <button class="btn waves-effect waves-light green" type="submit" name="action"> {{ __("Se connecter") }}
                                <i class="material-icons left">input</i>
                            </button>
                        </div>
                        @if(Route::has('password.request'))
                            <div class="col s6 input-field">
                                <a class="btn orange" href="{{ route('password.request') }}">
                                    <i class="material-icons left">build</i>
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
