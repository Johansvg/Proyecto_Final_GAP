@extends('layouts.user')

@section('content')

<div class="parallax-container">
    <div class="parallax"><img src="{{asset("img/centro_estetica2.jpg")}}"></div>
</div>
<div class="section" id="borderDemo">
    <div class="divider" id="agenda"></div>
    <div class="col s12 center teal darken-2" id="textDemo">CITAS</div>
    <div class="container" >
        <div class="row" >
            
            <div class="col s6 center">
                <a class=" btn waves-effect btn-large waves-yellow  black-text" id="btn">Reservar</a>            
            </div>
            <div class="col s6 center" >
                <a class=" btn waves-effect btn-large waves-teal black-text" id="btn">Mis citas</a>            
            </div>

        </div>
    </div>
    <div class="divider" id="productos"></div>
    <div class="col s12 center teal accent-4" id="textDemo">PRODUCTOS</div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset("img/productos/base.jpg")}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset("img/productos/crema.jpg")}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset("img/productos/tinte.jpg")}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset("img/productos/mask.jpg")}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset("img/productos/labial.jpg")}}"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="{{asset("img/centros_estetica.png")}}"></div>
</div>
<div class="section">
    <div class="divider" id="tips"></div>
    <div class="col s12 center teal darken-2" id="textDemo">CITAS</div>
    <div class="container" >
        <div class="row" >
        </div>
    </div>
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