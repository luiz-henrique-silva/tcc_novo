<?php

namespace App\Http\Controllers;

use App\Models\StatusProjeto;
use Illuminate\Http\Request;

class StatusProjetoController extends Controller
{
    public function index()
    {
        return StatusProjeto::all();
    }

    public function show($id)
    {
        return StatusProjeto::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255|unique:status_projetos',
            'descricao' => 'nullable|string|max:1000',
        ]);

        return StatusProjeto::create($validated);
    }

    public function update(Request $request, $id)
    {
        $statusProjeto = StatusProjeto::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255|unique:status_projetos,nome,' . $id,
            'descricao' => 'nullable|string|max:1000',
        ]);

        $statusProjeto->update($validated);
        return $statusProjeto;
    }

    public function destroy($id)
    {
        $statusProjeto = StatusProjeto::findOrFail($id);
        $statusProjeto->delete();
        return response()->json(null, 204);
    }
}
