<?php

namespace App\Http\Controllers;

use App\Models\Orientador;
use Illuminate\Http\Request;

class OrientadorController extends Controller
{
    public function index()
    {
        return Orientador::all();
    }

    public function show($id)
    {
        return Orientador::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'instituicao_id' => 'nullable|exists:instituicoes,id',
            'email' => 'required|string|email|max:255|unique:orientadores',
            'senha' => 'required|string',
            'registro_matricula' => 'nullable|string|max:50',
            'onde_leciona' => 'nullable|string|max:255',
            'telefone' => 'nullable|string|max:50',
        ]);

        return Orientador::create($validated);
    }

    public function update(Request $request, $id)
    {
        $orientador = Orientador::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'instituicao_id' => 'nullable|exists:instituicoes,id',
            'email' => 'sometimes|required|string|email|max:255|unique:orientadores,email,' . $id,
            'senha' => 'sometimes|required|string',
            'registro_matricula' => 'nullable|string|max:50',
            'onde_leciona' => 'nullable|string|max:255',
            'telefone' => 'nullable|string|max:50',
        ]);

        $orientador->update($validated);
        return $orientador;
    }

    public function destroy($id)
    {
        $orientador = Orientador::findOrFail($id);
        $orientador->delete();
        return response()->json(null, 204);
    }
}
