<!-- resources/views/orientadores/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Orientador</h1>
    <form action="{{ route('orientadores.update', $orientador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome do Orientador:</label>
        <input type="text" name="nome" id="nome" value="{{ $orientador->nome }}">
        <button type="submit">Atualizar</button>
    </form>
@endsection
