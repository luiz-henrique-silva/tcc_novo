<!-- resources/views/cursos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Curso</h1>
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome do Curso:</label>
        <input type="text" name="nome" id="nome" value="{{ $curso->nome }}">
        <button type="submit">Atualizar</button>
    </form>
@endsection
