<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Editar productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nombre_producto" id="nombre_producto" value="{{ $producto->nombre_producto }}">
                            <label for="nombre_producto">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="descripcion_producto" id="descripcion_producto" value="{{ $producto->descripcion_producto }}">
                            <label for="descripcion_producto">Descripción</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="precio_producto" id="precio_producto" value="{{ $producto->precio_producto }}">
                            <label for="precio_producto">Precio</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="btn">Guardar</button>
                            <a href="{{ route('productos.index') }}" class="btn">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>