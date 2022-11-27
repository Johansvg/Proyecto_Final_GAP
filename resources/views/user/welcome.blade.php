@extends('layouts.user')

@section('content')

<div class="parallax-container">
    <div class="parallax"><img src="{{asset("img/centro_estetica2.jpg")}}"></div>
</div>
<div class="section" id="borderDemo">
    <div class="container " >
        <div class="row ">
            <div class="col s12">
                <h3>
                    <div class="center-align">
                        <span class="card-title">Bienvenidos</span>
                    </div>
                </h3>
            </div>
            <div class="col s6 center" >
                <a class=" btn waves-effect btn-large waves-green  black-text" id="btn">Reservar</a>            
            </div>
            <div class="col s6 center" >
                <a class=" btn waves-effect btn-large waves-teal black-text" id="btn">Mis citas</a>            
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="{{asset("img/centro_estetica2.jpg")}}"></div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
@endsection