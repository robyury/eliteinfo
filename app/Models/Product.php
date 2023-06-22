<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'id',
        'cat_produto',
        'cat_fabricante',
        'nome_produto',
        'url_imagem',
        'total_vendas',
        'total_visitas',
        'valor_produto',
    ];

}
