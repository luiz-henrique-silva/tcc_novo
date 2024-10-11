<!-- resources/views/status_projetos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Criar Novo Status de Projeto</h1>
    <form action="{{ route('status-projetos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome do Status:</label>
        <input type="text" name="nome" id="nome">
        <button type="submit">Salvar</button>
    </form>
@endsection
