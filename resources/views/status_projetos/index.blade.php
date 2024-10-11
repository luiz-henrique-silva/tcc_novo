<!-- resources/views/status_projetos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Status de Projetos</h1>
    <a href="{{ route('status-projetos.create') }}">Adicionar Novo Status</a>

    <ul>
        @foreach($statusProjetos as $status)
            <li>{{ $status->nome }}
                <a href="{{ route('status-projetos.edit', $status->id) }}">Editar</a>
                <form action="{{ route('status-projetos.destroy', $status->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
