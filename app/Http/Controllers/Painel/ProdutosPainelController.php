<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Gate;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutosPainelController extends Controller
{
    protected $produto;
    protected $categoria;

    public function __construct
    (
        Produto             $produto,
        Categoria           $categoria
    )
    {
        $this->middleware('auth');

        $this->produto          = $produto;
        $this->categoria        = $categoria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows("View-Painel"))
        {
            $produtos = $this->produto->all();
            $categorias = $this->categoria->all();
            $titulo = "Produtos";
            return view('Painel.ProdutosPainel.index', compact('produtos','titulo','categorias'));
        }
        return redirect()->route('Site.Principal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
