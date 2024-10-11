<?php

namespace App\Http\Controllers;

use App\Models\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function index()
    {
        return Instituicao::all();
    }

    public function show($id)
    {
        return Instituicao::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255|unique:instituicoes',
            'endereco' => 'nullable|string|max:1000',
            'telefone' => 'nullable|string|max:50',
        ]);

        return Instituicao::create($validated);
    }

    public function update(Request $request, $id)
    {
        $instituicao = Instituicao::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255|unique:instituicoes,nome,' . $id,
            'endereco' => 'nullable|string|max:1000',
            'telefone' => 'nullable|string|max:50',
        ]);

        $instituicao->update($validated);
        return $instituicao;
    }

    public function destroy($id)
    {
        $instituicao = Instituicao::findOrFail($id);
        $instituicao->delete();
        return response()->json(null, 204);
    }
    public function indexView()
{
    $instituicoes = Instituicao::all();
    return view('instituicoes.index', compact('instituicoes'));
}

}
