<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Cesta;
use Session;

class CestaSiteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $cesta = new Cesta;
        $produtos = $cesta->getItens();
        if($cesta->total()<50){
            $valorInsuficiente = 'S';
        }
        else{
            $valorInsuficiente = 'N';
        }
        return view('Site.Cesta.index', compact('cesta','produtos','valorInsuficiente'));
    }

    public function limpar(Cesta $cesta)
    {
        $cesta->limparCesta();

        return redirect()->route('Site.Cesta.index');
    }

  
}
