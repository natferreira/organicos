<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return redirect('/Repositorio'); // Assim que baixar o repositório pode excluir essa linha e descomentar a de baixo.
        //return view('Home.Principal.index');
    }
}
