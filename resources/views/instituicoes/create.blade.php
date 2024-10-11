<!-- resources/views/instituicoes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Criar Nova Instituição</h1>
    <form action="{{ route('instituicoes.store') }}" method="POST">
        @csrf
        <label for="nome">Nome da Instituição:</label>
        <input type="text" name="nome" id="nome">
        <button type="submit">Salvar</button>
    </form>
@endsection
