<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'instituicao_id', 'email', 'senha', 'registro_matricula', 'onde_leciona', 'telefone'];

    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class);
    }

    public function projetos()
    {
        return $this->hasMany(Projeto::class, 'professor_orientador_id');
    }
}
