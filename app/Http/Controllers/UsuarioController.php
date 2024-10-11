<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::with(['instituicao', 'curso'])->get();
    }

    public function show($id)
    {
        return Usuario::with(['instituicao', 'curso'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255|unique:usuarios',
            'senha' => 'required|string',
            'usuario' => 'required|string|max:255|unique:usuarios',
            'instituicao_id' => 'nullable|exists:instituicoes,id',
            'rm' => 'nullable|string|max:50',
            'curso_id' => 'nullable|exists:cursos,id',
        ]);

        return Usuario::create($validated);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $validated = $request->validate([
            'email' => 'sometimes|required|string|email|max:255|unique:usuarios,email,' . $id,
            'senha' => 'sometimes|required|string',
            'usuario' => 'sometimes|required|string|max:255|unique:usuarios,usuario,' . $id,
            'instituicao_id' => 'nullable|exists:instituicoes,id',
            'rm' => 'nullable|string|max:50',
            'curso_id' => 'nullable|exists:cursos,id',
        ]);

        $usuario->update($validated);
        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return response()->json(null, 204);
    }
}
