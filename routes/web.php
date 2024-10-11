<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\OrientadorController;
use App\Http\Controllers\StatusProjetoController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\UsuarioController;

// Instituições
Route::get('instituicoes', [InstituicaoController::class, 'indexView'])->name('instituicoes.index');
Route::get('instituicoes/{id}', [InstituicaoController::class, 'show']);
Route::post('instituicoes', [InstituicaoController::class, 'store']);
Route::put('instituicoes/{id}', [InstituicaoController::class, 'update']);
Route::delete('instituicoes/{id}', [InstituicaoController::class, 'destroy']);

// Cursos
Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/{id}', [CursoController::class, 'show']);
Route::post('cursos', [CursoController::class, 'store']);
Route::put('cursos/{id}', [CursoController::class, 'update']);
Route::delete('cursos/{id}', [CursoController::class, 'destroy']);

// Orientadores
Route::get('orientadores', [OrientadorController::class, 'index']);
Route::get('orientadores/{id}', [OrientadorController::class, 'show']);
Route::post('orientadores', [OrientadorController::class, 'store']);
Route::put('orientadores/{id}', [OrientadorController::class, 'update']);
Route::delete('orientadores/{id}', [OrientadorController::class, 'destroy']);

// Status Projetos
Route::get('status-projetos', [StatusProjetoController::class, 'index']);
Route::get('status-projetos/{id}', [StatusProjetoController::class, 'show']);
Route::post('status-projetos', [StatusProjetoController::class, 'store']);
Route::put('status-projetos/{id}', [StatusProjetoController::class, 'update']);
Route::delete('status-projetos/{id}', [StatusProjetoController::class, 'destroy']);

// Projetos
Route::get('projetos', [ProjetoController::class, 'index']);
Route::get('projetos/{id}', [ProjetoController::class, 'show']);
Route::post('projetos', [ProjetoController::class, 'store']);
Route::put('projetos/{id}', [ProjetoController::class, 'update']);
Route::delete('projetos/{id}', [ProjetoController::class, 'destroy']);

// Documentos
Route::get('documentos', [DocumentoController::class, 'index']);
Route::get('documentos/{id}', [DocumentoController::class, 'show']);
Route::post('documentos', [DocumentoController::class, 'store']);
Route::put('documentos/{id}', [DocumentoController::class, 'update']);
Route::delete('documentos/{id}', [DocumentoController::class, 'destroy']);

// Usuários
Route::get('usuarios', [UsuarioController::class, 'index']);
Route::get('usuarios/{id}', [UsuarioController::class, 'show']);
Route::post('usuarios', [UsuarioController::class, 'store']);
Route::put('usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('usuarios/{id}', [UsuarioController::class, 'destroy']);