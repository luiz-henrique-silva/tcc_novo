<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = ['projeto_id', 'tipo', 'link', 'descricao'];

    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }
}
