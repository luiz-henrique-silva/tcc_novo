<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'descricao', 'data_inicio', 'data_final', 'integrantes', 'curso_id', 'professor_orientador_id', 'link_github', 'status_id'
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function professorOrientador()
    {
        return $this->belongsTo(Orientador::class, 'professor_orientador_id');
    }

    public function status()
    {
        return $this->belongsTo(StatusProjeto::class, 'status_id');
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }
}
