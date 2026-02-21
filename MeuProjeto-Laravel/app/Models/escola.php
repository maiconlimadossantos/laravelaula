<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class escola extends Model
{
    protected $table = 'escolas';

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'diretor',
            'CNPJ',
    ];
}
