<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table = 'lista_estados';

    protected $fillable = [
        'id_estado',
        'nome_estado',
        'uf',
    ];
}
