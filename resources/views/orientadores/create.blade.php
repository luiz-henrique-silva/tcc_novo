<!-- resources/views/orientadores/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Criar Novo Orientador</h1>
    <form action="{{ route('orientadores.store') }}" method="POST">
        @csrf
        <label for="nome">Nome do Orientador:</label>
        <input type="text" name="nome" id="nome">
        <button type="submit">Salvar</button>
    </form>
@endsection
