<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
      'cat_id',
      'super_cat_id',
      'cat_nome',
      'tem_subcat',
    ];
}
