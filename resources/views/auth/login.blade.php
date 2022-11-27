@extends('layouts.app')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col s4"> </div>
            <div class="col s4 ">
                <div class="row">
                    <div class="section">
                    </div>
                    <div class="center">
                        <img src="{{asset("img/user.png") }}" height="100" width="100">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <label id="labels" for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span  role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <label id="labels" for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="section">
                            <div class="col s7"></div>
                            <div>
                                <label >
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <span id="labels">{{ __('Recuérdame') }}</span>
                                </label>
                            </div>                            
                        </div>
                        <div class="section ">
                            <div>
                                <div class="col s1"></div>
                                <div class="col s6">
                                    <button type="submit" class="btn waves-effect black-text cyan lighten-3">
                                        {{ __('Iniciar') }}
                                    </button>
                                </div>
                                <div class="col s5">
                                    <a href="{{route("register")}}" class="btn waves-effect black-text teal lighten-2">
                                        {{ __('Registrar') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="section"></div>
                        <br>
                        <div class="col s12">
                            @if (Route::has('password.request'))
                                <a class="teal-text " href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste la contraseña?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            <div class="col s4"></div>
        </div>
    </div>
@endsection
