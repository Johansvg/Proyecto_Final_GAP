<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container grey lighten-5">
        <div class="row center">
            <div class="col s12">
                <h3>Productos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <table class="highlight">
                    <thead >
                        <tr>
                            <th>Nombre</th>
                            <th class="center">Descripción</th>
                            <th class="center">Precio</th>
                            <th class="center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->nombre_producto }}</td>
                                <td class="center">{{ $producto->descripcion_producto }}</td>
                                <td class="center">{{ $producto->precio_producto }}</td>
                                <td class="center"> 
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-small black-text cyan">Editar</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-small black-text red lighten-1">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{ route('productos.create') }}" class="waves-effect waves-light btn green accent-4"><i class="material-icons right">add</i>Crear</a>
            </div>
        </div>
        <div class="row center">
            <div class="col s12">
                <h3>Servicios</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <table class="highlight">
                    <thead >
                        <tr>
                            <th>Nombre</th>
                            <th class="center">Descripción</th>
                            <th class="center">Tiempo</th>
                            <th class="center">Precio</th>
                            <th class="center">Centro</th>
                            <th class="center">Empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicios as $servicio)
                            <tr>
                                <td>{{ $servicio->nombre_servicio }}</td>
                                <td class="center">{{ $servicio->descripcion_servicio }}</td>
                                <td class="center">{{ $servicio->tiempo_servicio }}</td>
                                <td class="center">{{ $servicio->precio_servicio }}</td>
                                <td class="center">
                                    @foreach ($centros as $centro)
                                        @if ($centro->id == $servicio->id)
                                            {{ $centro->nombre_centro }}
                                        @endif
                                    @endforeach
                                </td>
                                <td class="center">
                                    @foreach ($empleados as $empleado)
                                        @if ($empleado->id == $servicio->id)
                                            {{ $empleado->nombre_empleado }}
                                        @endif
                                    @endforeach
                                </td>
                                <td class="center"> 
                                    <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-small black-text cyan">Editar</a>
                                    <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-small black-text red lighten-1">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{ route('servicios.create') }}" class="waves-effect waves-light btn green accent-4"><i class="material-icons right">add</i>Crear</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>