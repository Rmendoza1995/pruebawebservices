<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioLicencia;
use App\Models\Usuario; 
class UsuarioController extends Controller
{
    // Método para mostrar la lista de usuarios
    public function index()
    {
        $usuarios = UsuarioLicencia::all();
        return view('usuarios.index', compact('usuarios'));
    }

    // Método para mostrar el formulario de edición de un usuario específico
    public function edit($id)
    {
        // Busca el usuario por ID
        $usuario = UsuarioLicencia::findOrFail($id);

        // Retorna la vista de edición con los datos del usuario
        return view('usuarios.edit', compact('usuario'));
    }

    // Método para actualizar los datos del usuario
    public function update(Request $request, $id)
    {
        $usuario = UsuarioLicencia::findOrFail($id);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function create()
    {
    return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'usuario' => 'required|string|max:30',
            'clave' => 'required|string|max:10',
            'levely' => 'required|string|max:50',
            'Num_folios' => 'required|integer',
        ]);
    
        $usuario = new Usuario([
            'nombre' => $request->get('nombre'),
            'usuario' => $request->get('usuario'),
            'clave' => $request->get('clave'),
            'levely' => $request->get('levely'),
            'Num_folios' => $request->get('Num_folios'),
        ]);
    
        $usuario->save();
    
        return redirect()->route('usuarios.index')->with('success', 'Usuario añadido con éxito.');
    }
    

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado con éxito.');
    }
    


}
