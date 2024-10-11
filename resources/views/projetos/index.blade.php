<!-- resources/views/projetos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Projetos</h1>
    <a href="{{ route('projetos.create') }}">Adicionar Novo Projeto</a>

    <ul>
        @foreach($projetos as $projeto)
            <li>{{ $projeto->nome }}
                <a href="{{ route('projetos.edit', $projeto->id) }}">Editar</a>
                <form action="{{ route('projetos.destroy', $projeto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
