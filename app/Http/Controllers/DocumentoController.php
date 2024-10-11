<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        return Documento::all();
    }

    public function show($id)
    {
        return Documento::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'projeto_id' => 'required|exists:projetos,id',
            'tipo' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
        ]);

        return Documento::create($validated);
    }

    public function update(Request $request, $id)
    {
        $documento = Documento::findOrFail($id);

        $validated = $request->validate([
            'projeto_id' => 'sometimes|required|exists:projetos,id',
            'tipo' => 'sometimes|required|string|max:255',
            'link' => 'sometimes|required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
        ]);

        $documento->update($validated);
        return $documento;
    }

    public function destroy($id)
    {
        $documento = Documento::findOrFail($id);
        $documento->delete();
        return response()->json(null, 204);
    }
}
