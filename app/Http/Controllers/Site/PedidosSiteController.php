<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Endereco;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\Bairro;
use App\Models\Cidade;

class PedidosSiteController extends Controller
{
    protected $endereco;
    protected $pedido;
    protected $produto;
    protected $user;
    protected $bairro;
    protected $cidade;

    public function __construct
    (
        Endereco            $endereco,
        Pedido              $pedido,
        Produto             $produto,
        User                $user,
        Bairro              $bairro,
        Cidade              $cidade
    )
    {
        $this->middleware('auth');

        $this->endereco         = $endereco;
        $this->pedido           = $pedido;
        $this->produto          = $produto;
        $this->user             = $user;
        $this->bairro           = $bairro;
        $this->cidade           = $cidade;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = $this->pedido->all();
        $pedidoAgrupadoUser = $pedidos->groupBy("user_id");
        
        if(isset($pedidoAgrupadoUser[auth()->user()->id]))
        {
            $pedidoAgrupado = $pedidoAgrupadoUser[auth()->user()->id]->groupBy(function($val) {
            return $val->created_at->format('Y-m-d H:i:s');})->toArray();
            krsort($pedidoAgrupado);
        }
        else{
            $pedidoAgrupado = null;
        }
        $enderecos = $this->endereco->all();
        $produtos = $this->produto->all();
        $users = $this->user->all();
        $bairros = $this->bairro->all();
        $cidades = $this->cidade->all();
        $total = 0;
        $titulo = "Painel de Controle";
        return view('Site.MeusPedidos.index', compact('pedidoAgrupado','enderecos','produtos','users','bairros','cidades','total','titulo'));
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
        $pedidos = $this->pedido->all();
        $pedidoAgrupadoUser = $pedidos->groupBy("user_id");
        $pedidoAgrupado = $pedidoAgrupadoUser[auth()->user()->id]->groupBy(function($val) {
            return $val->created_at->format('Y-m-d H:i:s');})->toArray();
        $pedido = $pedidoAgrupado[$id];
        foreach($pedido as $ped)
        {
            $this->pedido->find($ped["id"])->update(["cancelado" => "S"]);
        }
        return redirect()->route('meusPedidos.index');
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
