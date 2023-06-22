<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function GetAllProducts()
    {
        return Product::join('categorias', 'produtos.cat_produto', '=', 'categorias.cat_id')->join('fabricantes', 'produtos.cat_fabricante', '=', 'fabricantes.id') ->select('produtos.*', 'categorias.*', 'fabricantes.*')->get();
    }
}
