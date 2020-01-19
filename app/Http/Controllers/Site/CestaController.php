<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Cesta;
use Session;

class CestaController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function add($id)
    {
        $produto = Produto::find($id);
        if(!$produto)
            return redirect()->back();
        
        $cesta = new Cesta;
        $cesta->add($produto);

        Session::put('cesta', $cesta);
        return redirect()->route('Site.Cesta.index');
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        if(!$produto)
            return redirect()->back();

        $cesta = new Cesta;
        $cesta->remove($produto);

        Session::put('cesta', $cesta);

        return redirect()->route('Site.Cesta.index');
    }


    public function removeProduto($id)
    {
        $produto = Produto::find($id);
        $cesta = new Cesta;
        $cesta->removeProduto($produto);

        Session::put('cesta', $cesta);

        return redirect()->route('Site.Cesta.index');
    }
}
