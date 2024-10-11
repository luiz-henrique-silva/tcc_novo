<!-- resources/views/cursos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Cursos</h1>
    <a href="{{ route('cursos.create') }}">Adicionar Novo Curso</a>

    <ul>
        @foreach($cursos as $curso)
            <li>{{ $curso->nome }}
                <a href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
                <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
