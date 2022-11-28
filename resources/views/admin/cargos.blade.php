@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row center">
        <div class="col s2"></div>
        <div class="col s8">
            <h4>Crear cargo</h4>
            <div class="divider"></div>
            Ingrese todos los datos requeridos para crear un cargo.
            <form action="{{ route('cargos.store') }}" method="POST">
                @csrf
                <div class="input-field col s12">
                    <input id="nombre_cargo" type="text" name="nombre_cargo" class="validate">
                    <label id="labels" for="nombre_cargo">Nombre</label>
                </div>
                <div class="input-field col s12">
                    <input id="descripcion_cargo" type="text" name="descripcion_cargo" class="validate">
                    <label id="labels" for="descripcion_cargo">Descripción</label>
                </div>
                <div class="row"></div>
                <div class="col s12">
                    <button type="submit" class="waves-effect cyan lighten-3  black-text btn  "><i class="material-icons right">save</i>Guardar</button>
                    <a  class="btn waves-effect black-text red lighten-1"><i class="material-icons right">backspace</i>Limpiar</a>
                </div>
            </form>
        </div>
        <div class="col s2"></div>
    </div>
    <div class="divider"></div>
    <div class="row center">
        <div class="col s12">
            <h3>Cargos</h3>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <table class="responsive-table highlight">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cargos as $cargo)
                        <tr>
                            <td>{{ $cargo->nombre_cargo }}</td>
                            <td>{{ $cargo->descripcion_cargo }}</td>
                            <td>
                                <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn waves-effect cyan lighten-3 black-text"><i class="material-icons">edit</i></a>
                                <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn waves-effect red lighten-1 black-text"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
