<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Gate;
use App\User;
use App\Models\Endereco;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\Bairro;
use App\Models\Cidade;


class PainelController extends Controller
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

    public function index()
    {
        if(Gate::allows("View-Painel"))
        {
            $pedidos = $this->pedido->all();
            $pedidoAgrupado = $pedidos->groupBy(function($val) {
                return $val->created_at->format('Y-m-d H:i:s');
            })->toArray();
            krsort($pedidoAgrupado);
            $enderecos = $this->endereco->all();
            $produtos = $this->produto->all();
            $users = $this->user->all();
            $bairros = $this->bairro->all();
            $cidades = $this->cidade->all();
            $total = 0;
            $titulo = "Painel de Controle";
            return view('Painel.Principal.index', compact('pedidoAgrupado','enderecos','produtos','users','bairros','cidades','total','titulo'));
        }
        return redirect()->route('Site.Principal.index');
    }

}


