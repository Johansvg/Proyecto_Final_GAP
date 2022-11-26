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
        <div class="row center ">
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
                            <select class="input-field" name="centro">
                                @foreach ($centros as $centro)
                                    @if ($centro->id == $servicios->id_centro)
                                        <option value="{{ $centro->id }}" name="centro" selected>{{ $centro->nombre_centro }}</option>
                                    @else
                                        <option value=" " name="centro" disabled selected>Seleccione un centro</option>
                                        <option value="{{ $centro->id }}" name="centro">{{ $centro->nombre_centro }}</option>
                                    @endif
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select class="input-field" name="empleado">
                                @foreach ($empleados as $empleado)
                                    @if ($empleado->id == $servicios->id_empleado)
                                        <option value="{{ $empleado->id }}" name="empleado" selected>{{ $empleado->nombre_empleado }}</option>
                                    @else
                                        <option value="" name="empleado" disabled selected>Seleccione un empleado</option>
                                        <option value="{{ $empleado->id }}" name="empleado">{{ $empleado->nombre_empleado }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="waves-effect  black-text btn "><i class="material-icons right">save</i>Guardar</button>
                            <a href="{{ route('servicios.index') }}" class="btn waves-effect black-text red lighten-1"><i class="material-icons right">cancel</i>Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s2"></div>
        </div>
    </div>
    <script src="{{ asset('js/mtz.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>




                
                
