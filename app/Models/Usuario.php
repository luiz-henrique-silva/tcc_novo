<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'senha', 'usuario', 'instituicao_id', 'rm', 'curso_id'];

    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
