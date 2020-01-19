<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EncomendaSiteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function endereco()
    {
        return view('Site.Encomenda.Endereco.index');
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
