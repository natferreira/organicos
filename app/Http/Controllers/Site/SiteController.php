<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Produto;

class SiteController extends Controller
{
    protected $produto;

    public function __construct
    (
        Produto             $produto
    )
    {
        //$this->middleware('auth');
        $this->produto          = $produto;
    }

    public function logout()
    {
        Auth::logout();
        return view('Site.Principal.index');
    }


    public function index()
    {
        return view('Site.Principal.index');
    }

    public function pesquisa(Request $request)
    {
        $search = $request->all();
        $produtos = $this->produto->where('nome', 'LIKE', '%'.$search["site_search"].'%')->paginate(20);
        if($produtos->total()>0)
        {
            return view('Site.Pesquisa.index', compact('produtos'));
        }
        else{
            $produtos = null;
            return view('Site.Pesquisa.index', compact('produtos'));
        }
    }
}
