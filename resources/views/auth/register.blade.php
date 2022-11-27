@extends('layouts.app')

@section('content')
{{-- formulario de registro--}}
<div class="container">
<<<<<<< HEAD
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre_usuario" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telefono_usuario" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono_usuario" type="number" class="form-control @error('telefono_usuario') is-invalid @enderror" name="telefono_usuario" value="{{ old('telefono_usuario') }}" required autocomplete="" autofocus>

                                @error('telefono_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email_usuario" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email_usuario" type="email" class="form-control @error('email_usuario') is-invalid @enderror" name="email_usuario" value="{{ old('email') }}" required autocomplete="email">

                                @error('email_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password_usuario" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password_usuario" type="password" class="form-control @error('password') is-invalid @enderror" name="password_usuario" required autocomplete="new-password">

                                @error('password_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}

                        <div class="row mb-3">
                            <label for="rol_usuario" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="rol_usuario" type="text" class="form-control @error('name') is-invalid @enderror" name="rol" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('rol_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
=======
    <div class="row">
        <div class="col s3"> </div>
        <div class="col s6 ">
            <div class="row">
                <div class="section">           
>>>>>>> 1b0ab00b864b732d1513418598128c2ab660f976
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
        </div>
        <div class="col s3"> </div>
    </div>
</div>
@endsection

