<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar servicios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
        </div>
        <div class="row z-depth-4 center grey lighten-5">
            <div class="col s2"></div>
            <div class="col s8">
                <h4>Editar productos</h4>
                <div class="divider"></div>
                Ingrese todos los datos requeridos para editar servicio.
                <form action="{{ route('servicios.update', $servicios->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nombre_servicio" type="text" name="nombre_servicio" value="{{ $servicios->nombre_servicio }}">
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="descripcion_servicio" type="text" name="descripcion_servicio" value="{{ $servicios->descripcion_servicio }}">
                            <label for="descripcion">Descripción</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="tiempo_servicio" type="text" name="tiempo_servicio" value="{{ $servicios->tiempo_servicio }}">
                            <label for="precio">Tiempo</label>
                        </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="precio_servicio" type="text" name="precio_servicio" value="{{ $servicios->precio_servicio }}">
                            <label for="precio">Precio</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nombre_centro" type="text" name="nombre_centro" value="{{ $centros->nombre_centro }}">
                            <label for="nombre">Nombre del centro</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nombre_empleado" type="text" name="nombre_empleado" value="{{ $empleados->nombre_empleado}}">
                            <label for="direccion">Nombre del empleado</label>
                        </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="waves-effect waves-light btn green accent-4"><i class="material-icons right">save</i>Guardar</button>
                            <a href="{{ route('servicios.index') }}" class="waves-effect waves-light btn red lighten-1"><i class="material-icons right">cancel</i>Cancelar</a>
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




                
                
