<!-- resources/views/orientadores/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Orientadores</h1>
    <a href="{{ route('orientadores.create') }}">Adicionar Novo Orientador</a>

    <ul>
        @foreach($orientadores as $orientador)
            <li>{{ $orientador->nome }}
                <a href="{{ route('orientadores.edit', $orientador->id) }}">Editar</a>
                <form action="{{ route('orientadores.destroy', $orientador->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
