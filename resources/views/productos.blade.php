<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($producto as $producto)
                            <tr>
                                <td>{{ $producto->nombre_producto }}</td>
                                <td>{{ $producto->descripcion_producto }}</td>
                                <td>{{ $producto->precio_producto }}</td>
                                <td>
                                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-small">Ver</a>
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-small">Editar</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-small red">Eliminar</button>
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
                <a href="{{ route('productos.create') }}" class="btn">Crear</a>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>