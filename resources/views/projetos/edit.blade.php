<!-- resources/views/projetos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Projeto</h1>
    <form action="{{ route('projetos.update', $projeto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome do Projeto:</label>
        <input type="text" name="nome" id="
