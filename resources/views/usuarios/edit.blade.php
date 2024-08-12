@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>

        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="{{ $usuario->usuario }}" required>
        </div>

        <div>
            <label for="clave">Clave:</label>
            <input type="text" id="clave" name="clave" value="{{ $usuario->clave }}" required>
        </div>

        <div>
            <label for="levely">Levely:</label>
            <input type="text" id="levely" name="levely" value="{{ $usuario->levely }}" required>
        </div>

        <div>
            <label for="Num_folios">Num Folios:</label>
            <input type="text" id="Num_folios" name="Num_folios" value="{{ $usuario->Num_folios }}" required>
        </div>

        <button type="submit">Actualizar</button>
    </form>
@endsection
