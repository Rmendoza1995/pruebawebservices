@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="h3 mb-4">Añadir Nuevo Usuario</h1>

        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="clave" class="form-label">Clave</label>
                <input type="password" class="form-control" id="clave" name="clave" required>
            </div>

            <div class="mb-3">
                <label for="levely" class="form-label">Nivel</label>
                <input type="text" class="form-control" id="levely" name="levely" required>
            </div>

            <div class="mb-3">
                <label for="Num_folios" class="form-label">Número de Folios</label>
                <input type="number" class="form-control" id="Num_folios" name="Num_folios" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
