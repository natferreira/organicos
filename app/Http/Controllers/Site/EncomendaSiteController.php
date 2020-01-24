<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cesta;
use App\User;
use App\Models\Endereco;
use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Estado;

class EncomendaSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function frete()
    {
        return view('Site.Encomenda.Frete.index');
    }

    public function pagamento()
    {
        return view('Site.Encomenda.Pagamento.index');
    }

    public function revisao()
    {
        return view('Site.Encomenda.Revisao.index');
    }

    public function conclusao()
    {
        return view('Site.Encomenda.Conclusao.index');
    }

}
