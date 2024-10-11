<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        return Projeto::with(['curso', 'professorOrientador', 'status', 'documentos'])->where(function ($query) {
            $query->whereNull('data_final')
                  ->orWhere('data_final', '>=', now());
        })->get();
    }

    public function show($id)
    {
        return Projeto::with(['curso', 'professorOrientador', 'status', 'documentos'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
            'data_inicio' => 'nullable|date',
            'data_final' => 'nullable|date',
            'integrantes' => 'nullable|string|max:1000',
            'curso_id' => 'nullable|exists:cursos,id',
            'professor_orientador_id' => 'nullable|exists:orientadores,id',
            'link_github' => 'nullable|string|max:255',
            'status_id' => 'nullable|exists:status_projetos,id',
        ]);

        return Projeto::create($validated);
    }

    public function update(Request $request, $id)
    {
        $projeto = Projeto::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
            'data_inicio' => 'nullable|date',
            'data_final' => 'nullable|date',
            'integrantes' => 'nullable|string|max:1000',
            'curso_id' => 'nullable|exists:cursos,id',
            'professor_orientador_id' => 'nullable|exists:orientadores,id',
            'link_github' => 'nullable|string|max:255',
            'status_id' => 'nullable|exists:status_projetos,id',
        ]);

        $projeto->update($validated);
        return $projeto;
    }

    public function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();
        return response()->json(null, 204);
    }
}
