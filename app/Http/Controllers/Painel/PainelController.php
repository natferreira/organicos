<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Gate;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Gate::allows("View-Painel"))
        {
            return view('Painel.Principal.index');
        }
        return back()->with('error', 'Acesso Negado!');
    }
}
