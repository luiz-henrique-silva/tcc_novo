<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;

    // Define explicitamente o nome correto da tabela
    protected $table = 'instituicoes'; 

    protected $fillable = ['nome', 'endereco', 'telefone'];

    public function orientadores()
    {
        return $this->hasMany(Orientador::class);
    }

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
