<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function show($id)
    {
        return Curso::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255|unique:cursos',
            'descricao' => 'nullable|string|max:1000',
        ]);

        return Curso::create($validated);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255|unique:cursos,nome,' . $id,
            'descricao' => 'nullable|string|max:1000',
        ]);

        $curso->update($validated);
        return $curso;
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return response()->json(null, 204);
    }
}
