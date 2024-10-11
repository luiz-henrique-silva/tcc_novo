<!-- resources/views/instituicoes/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Instituições</h1>
    <a href="{{ route('instituicoes.create') }}">Adicionar Nova Instituição</a>

    <ul>
        @foreach($instituicoes as $instituicao)
            <li>{{ $instituicao->nome }}
                <a href="{{ route('instituicoes.edit', $instituicao->id) }}">Editar</a>
                <form action="{{ route('instituicoes.destroy', $instituicao->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
