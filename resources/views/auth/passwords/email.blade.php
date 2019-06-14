@extends("layouts.log", ["title" => "Réinitialisation du mot de passe"])

@section('content')
    <div class="row">
        <div class="card indigo darken-2 col s12 m6 offset-m3">
            <div class="card-action indigo darken-1 white-text">
                <h3>Réinitialiser le mot de passe</h3>
            </div>

            <div class="card-content">
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col s12 input-field">
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' invalid' : ' validate' }}" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email" class="">{{ __('E-Mail') }}</label>
                            <span class="helper-text" data-error="{{ $errors->has('email') ? $errors->first('email') : "Oups ! L'email n'est pas bien formaté" }}" data-success="Bien"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s4 offset-s4 input-field">
                            <button class="btn waves-effect waves-light blue" type="submit" name="action"> {{ __("Réinitialiser") }}
                                <i class="material-icons left">refresh</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
