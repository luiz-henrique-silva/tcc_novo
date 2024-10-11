<!-- resources/views/cursos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Criar Novo Curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome do Curso:</label>
        <input type="text" name="nome" id="nome">
        <button type="submit">Salvar</button>
    </form>
@endsection
