<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
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
}
