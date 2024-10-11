<!-- resources/views/instituicoes/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Instituição</h1>
    <form action="{{ route('instituicoes.update', $instituicao->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome da Instituição:</label>
        <input type="text" name="nome" id="nome" value="{{ $instituicao->nome }}">
        <button type="submit">Atualizar</button>
    </form>
@endsection
