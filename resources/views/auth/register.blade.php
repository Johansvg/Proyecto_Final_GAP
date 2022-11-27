@extends('layouts.app')

@section('title', 'Register')

@section('content')
{{-- formulario de registro--}}
<div class="container">
    <div class="row">
        <div class="col s3"> </div>
        <div class="col s6 ">
            <div class="row">
                <div class="section">           
                </div>
                <div class="center">
                    <img src="{{asset("img/user.png") }}" height="100" width="100">
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <label id="labels" for="name">{{ __('Nombre') }}</label>
                        <input id="name" type="text" class="validate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <label id="labels" for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                        <input id="password-confirm" type="password" class="validate" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="section"> 
                        <div class="col s1"></div>  
                        <div class="col s8 ">
                            <a class="teal-text" href="{{ route('login') }}">
                                {{ __('Iniciar Sesión') }}
                            </a>
                        </div>
                        <div class="col s2">
                            <button type="submit" class="btn waves-effect cyan lighten-3 black-text">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </form>
    </div>
@endsection