<!-- resources/views/projetos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Criar Novo Projeto</h1>
    <form action="{{ route('projetos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome do Projeto:</label>
        <input type="text" name="nome" id="nome">
        <button type="submit">Salvar</button>
    </form>
@endsection
