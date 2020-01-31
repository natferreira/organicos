<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Gate;
use App\Models\Bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
    protected $bairro;

    public function __construct
    (
        Bairro           $bairro
    )
    {
        $this->middleware('auth');

        $this->bairro        = $bairro;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows("View-Painel"))
        {
            $bairros = $this->bairro->all();
            $titulo = "Bairros";
            return view('Painel.Bairros.index', compact('bairros','titulo'));
        }
        return redirect()->route('Site.Principal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows("View-Painel"))
        {
            $titulo = "Novo Bairro";
            return view('Painel.Bairros.create', compact('titulo'));
        }
        return redirect()->route('Site.Principal.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows("View-Painel"))
        {
            $dataForm = $request->all();
            $insert = $this->bairro->create($dataForm);
            if($insert)
            {
                return redirect()->route('bairros.index');
            }
            else
            {
                return redirect()->route('bairros.create');
            }
        }
        return redirect()->route('Site.Principal.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Gate::allows("View-Painel"))
        {
            $bairro = $this->bairro->find($id);
            $titulo = "Excluir Bairro";
            return view('Painel.Bairros.delete', compact('titulo','bairro'));
        }
        return redirect()->route('Site.Principal.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows("View-Painel"))
        {
            $bairro = $this->bairro->find($id);
            $titulo = "Editar Bairro";
            return view('Painel.Bairros.update', compact('titulo','bairros'));
        }
        return redirect()->route('Site.Principal.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Gate::allows("View-Painel"))
        {
            $dataForm = $request->all();
            $bairro = $this->categoria->find($id);
            $update = $bairro->update($dataForm);
            if($update)
            {
                return redirect()->route('bairros.index');
            }
            else
            {
                return redirect()->route('bairros.edit',$id);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bairro = $this->bairro->find($id);
        $delete = $bairro->delete();
        if($delete)
        {
            return redirect()->route('bairros.index');
        }
        else
        {
            return redirect()->route('bairros.show',$id);
        }
    }
}
