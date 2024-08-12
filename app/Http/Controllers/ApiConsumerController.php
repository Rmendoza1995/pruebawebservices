<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioLicencia; // Asegúrate de que este modelo esté correctamente configurado

class ApiConsumerController extends Controller
{
    public function consume(Request $request)
    {
        // Obtener los parámetros de la URL
        $id = $request->query('param1');
        $nombre = $request->query('param2');

        // Buscar en la base de datos usando los parámetros
        $query = UsuarioLicencia::query();

        if ($id) {
            $query->where('id', $id);
        }

        if ($nombre) {
            $query->where('nombre', $nombre);
        }

        $result = $query->get();

        // Verificar si se encontraron resultados
        if ($result->isEmpty()) {
            return response()->json(['message' => 'No se encontraron registros'], 404);
        }

        // Retornar los resultados encontrados
        return response()->json($result);
    }
}




