<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioLicenciaController;
Route::get('/consumir-api', [ApiConsumerController::class, 'consume']);

// Define your API routes here
Route::get('/usuarioslicencias', [UsuarioLicenciaController::class, 'index']);
Route::get('/usuarioslicencias/{id}', [UsuarioLicenciaController::class, 'show']);
Route::post('/usuarioslicencias', [UsuarioLicenciaController::class, 'store']);
Route::put('/usuarioslicencias/{id}', [UsuarioLicenciaController::class, 'update']);
Route::delete('/usuarioslicencias/{id}', [UsuarioLicenciaController::class, 'destroy']);
