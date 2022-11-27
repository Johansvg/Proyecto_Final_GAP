<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cargos</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body id="fondoEditar">
    <div class="container" >
        <div class="row">
        </div>
        <div class="row center ">
            <div class="col s2"></div>
            <div class="col s8">
                <h4>Editar cargos</h4>
                <div class="divider"></div>
                Ingrese todos los datos requeridos para editar un cargo.
                <form action="{{ route('cargos.update', $cargos->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nombre_cargo" id="nombre_cargo" value="{{ $cargos->nombre_cargo }}">
                            <label for="nombre_cargo">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="descripcion_cargo" id="descripcion_cargo" value="{{ $cargos->descripcion_cargo }}">
                            <label for="descripcion_cargo">Descripción</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="waves-effect cyan lighten-3 black-text btn "><i class="material-icons right">save</i>Guardar</button>
                            <a href="{{ route('cargos.index') }}" class="btn waves-effect black-text red lighten-1"><i class="material-icons right">cancel</i>Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s2"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
