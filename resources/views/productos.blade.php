<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row center">
            <div class="col s2"></div>
            <div class="col s8">
                <h4>Crear productos</h4>
                <div class="divider"></div>
                Ingrese todos los datos requeridos para crear un nuevo producto.
                <form action="{{ route('productos.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nombre_producto" type="text" name="nombre_producto" class="validate">
                            <label for="nombre_producto">Nombre</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="descripcion_producto" type="text" name="descripcion_producto" class="validate">
                            <label for="descripcion_producto">Descripción</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="precio_producto" type="text" name="precio_producto" class="validate">
                            <label for="precio_producto">Precio</label>
                        </div>
                        <div class="col s12">
                            <button type="submit" class="waves-effect waves-light btn btn-small green accent-4"><i class="material-icons right">save</i>Guardar</button>
                            <a href="{{ route('productos.index') }}" class="btn btn-small black-text red lighten-1"><i class="material-icons right">cancel</i>Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row center">
            <div class="col s12">
                <h4>Productos</h4>
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
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>