@extends('layouts.app')
    
@section('content')
    <div class="container ">
        <div class=row>
            <div class="col s4"> </div>
            <div class="col s5">
                <div class="row">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-field ">
                            <i class="material-icons prefix">account_circle</i>
                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span  role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col 12"></div>
                            <div>
                                <label >
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <span>{{ __('Recuérdame') }} </span>
                                </label>

                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <button type="submit" class="btn waves-effect black-text">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col s6">
                                @if (Route::has('password.request'))
                                    <a class="teal-text" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste la contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col s3"></div>
        </div>
    </div>
@endsection
