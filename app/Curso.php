<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'curso', 'descricao', 'valor', 'imagem', 'publicado'
    ];
}
