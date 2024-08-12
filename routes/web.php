<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiConsumerController;
use App\Http\Controllers\UsuarioController;

// Ruta para la vista de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para consumir la API
Route::get('/consumir-api', [ApiConsumerController::class, 'consume'])->name('api.consume');

// Ruta para listar usuarios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

// Ruta para mostrar el formulario de edición
Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');

// Ruta para actualizar los datos del usuario
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');

// Ruta para mostrar el formulario de creación
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

// Ruta para almacenar un nuevo usuario
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

// Ruta para eliminar un usuario
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.delete');


