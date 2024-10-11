<!-- resources/views/status_projetos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Status de Projeto</h1>
    <form action="{{ route('status-projetos.update', $statusProjeto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome do Status:</label>
        <input type="text" name="nome" id="nome" value="{{ $statusProjeto->nome }}">
        <button type="submit">Atualizar</button>
    </form>
@endsection
