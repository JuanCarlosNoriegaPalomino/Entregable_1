<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Perfil;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::with('perfil')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create', compact('paises'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido1' => 'required|string|unique:usuarios',
            'apellido2' => 'required|string|unique:usuarios',
            'edad' => 'required|string|unique:usuarios',
            'email' => 'required|email|unique:usuarios',
        ]);

        $usuario = Usuario::create([
            'nombre' => $request->input('nombre'),
            'apellido1' => $request->input('apellido1'),
            'apellido2' => $request->input('apellido2'),
            'edad' => $request->input('edad'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Persona creado exitosamente');
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $paises = Pais::all();
        return view('usuarios.edit', compact('usuario', 'paises'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        $usuario->perfil()->update($request->only('bio'));
        return redirect()->route('usuarios.index')->with('success', 'Persona actualizado exitosamente');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->perfil()->delete();
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Persona eliminado exitosamente');
    }
}
