<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar empleados</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body id="fondoEditar">
    <div class="container">
        <div class="row">
        </div>
        <div class="row center ">
            <div class="col s2"></div>
            <div class="col s8">
                <h4>Editar empleado</h4>
                <div class="divider"></div>
                Ingrese todos los datos requeridos para editar un empleado.
                <form action="{{ route('empleados.update', $empleados->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nombre_empleado" type="text" name="nombre_empleado" value="{{ $empleados->nombre_empleado }}">
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="telefono_empleado" type="text" name="telefono_empleado" value="{{ $empleados->telefono_empleado }}">
                            <label for="telefono">Teléfono</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select class="input-field" name="centro">
                                @foreach ($centros as $centro)
                                    @if ($centro->id == $empleados->id_centro)
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
                            <select class="input-field" name="cargo">
                                @foreach ($cargos as $cargo)
                                    @if ($cargo->id == $empleados->id_cargo)
                                        <option value="{{ $cargo->id }}" name="cargo" selected>{{ $cargo->nombre_cargo }}</option>
                                    @else
                                        <option value=" " name="cargo" disabled selected>Seleccione un cargo</option>
                                        <option value="{{ $cargo->id }}" name="cargo">{{ $cargo->nombre_cargo }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="waves-effect cyan lighten-3 black-text btn "><i class="material-icons right">save</i>Guardar</button>
                            <a href="{{ route('empleados.index') }}" class="btn waves-effect black-text red lighten-1"><i class="material-icons right">cancel</i>Cancelar</a>
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
    
