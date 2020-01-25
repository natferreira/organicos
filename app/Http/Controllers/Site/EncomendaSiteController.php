<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cesta;
use App\User;
use App\Models\Pedido;
use App\Models\Endereco;
use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Estado;

class EncomendaSiteController extends Controller
{
    protected $pedido;
    protected $endereco;
    protected $bairro;
    protected $cidade;
    protected $estado;

    public function __construct
    (
        Pedido              $pedido,
        Endereco            $endereco,
        Bairro              $bairro,
        Cidade              $cidade,
        Estado              $estado
    )
    {
        $this->middleware('auth');

        $this->pedido       = $pedido;
        $this->endereco     = $endereco;
        $this->bairro       = $bairro;
        $this->cidade       = $cidade;
        $this->estado       = $estado;
    }

    public function frete()
    {
        return view('Site.Encomenda.Frete.index');
    }

    public function pagamento()
    {
        return view('Site.Encomenda.Pagamento.index');
    }

    public function revisao(Cesta $cesta)
    {
        $produtos = $cesta->getItens();
        $endereco = $this->endereco->where('user_id',auth()->user()->id)->first();
        if( isset($endereco) )
        {
            $bairro = $this->bairro->find($endereco->bairro_id);
            $cidade = $this->cidade->find($endereco->cidade_id);
            $estado = $this->estado->find($endereco->estado_id);
        }
        return view('Site.Encomenda.Revisao.index', compact('produtos','endereco','cesta','bairro','cidade','estado'));
    }

    public function conclusao(Cesta $cesta)
    {
        $produtos = $cesta->getItens();
        $dados = [];
        
        foreach($produtos as $produto)
        {
            array_push($dados, array("produto_id" => $produto["item"]->id,
                                     "quantidade" => $produto["qtd"],
                                     "preco"      => $produto["item"]->preco,
                                     "user_id"    => auth()->user()->id));
        }
        
        foreach($dados as $dado)
        {
            
            $this->pedido->create($dado);
        
        }
        $cesta->limparCesta();
        return view('Site.Encomenda.Conclusao.index');
    }

}
