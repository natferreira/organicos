<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;

class ProdutosSiteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Produto $produto)
    {
        $produtos = $produto->all();
        return view('Site.Produtos.index', compact('produtos'));
    }
}
