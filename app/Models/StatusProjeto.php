<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusProjeto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao'];

    public function projetos()
    {
        return $this->hasMany(Projeto::class);
    }
}
