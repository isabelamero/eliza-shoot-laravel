<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $table = 'imagens'; // Certifique-se de que o nome da tabela está correto

    protected $fillable = [
        'imagem',
        'titulo',
        'categoria',
    ];
}
