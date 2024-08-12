<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UsuarioLicencia;
use Illuminate\Http\Request;

class UsuarioLicenciaController extends Controller
{
    public function index()
    {
        return UsuarioLicencia::all();
    }
    

    public function show($id)
    {
        return UsuarioLicencia::findOrFail($id);
    }

    public function store(Request $request)
    {
        return UsuarioLicencia::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $usuarioLicencia = UsuarioLicencia::findOrFail($id);
        $usuarioLicencia->update($request->all());
        return $usuarioLicencia;
    }

    public function destroy($id)
    {
        UsuarioLicencia::destroy($id);
        return response()->json(['message' => 'Registro eliminado con éxito']);
    }
}


