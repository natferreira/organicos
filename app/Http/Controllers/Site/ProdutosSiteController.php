<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutosSiteController extends Controller
{
    protected $produto;
    protected $categoria;

    public function __construct
    (
        Produto             $produto,
        Categoria           $categoria
    )
    {
        //$this->middleware('auth');
        $this->produto          = $produto;
        $this->categoria        = $categoria;
    }

    public function index(Produto $produto, Categoria $categoria)
    {
        $produtos = $produto->paginate(20);
        $categorias = $categoria->all();
        return view('Site.Produtos.index', compact('produtos','categorias'));
    }

    public function filtroCategoria($id)
    {
        $produtos = $this->produto->where("categoria_id", $id)->paginate(20);
        $categorias = $this->categoria->all();
        return view('Site.Produtos.filtroCategoria', compact('produtos','categorias'));

    }
}
