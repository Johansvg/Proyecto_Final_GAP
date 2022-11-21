@extends('layouts.app')

@section('content')
    <div class=row>
        <div class="col s6">
            <div class="col s6">
                <div >{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-field ">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <p>
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                <span>{{ __('Remember Me') }} </span>
                            </label>
                          </p>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-ligth" type="submit" name="action">
                            <i class="material-icons right">{{ __('Login') }}</i>
                        </button>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="btn waves-effect waves-teal">{{ __('Forgot Your Password?') }}</a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
