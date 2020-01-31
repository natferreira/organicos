<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Gate;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    protected $cidade;

    public function __construct
    (
        Cidade           $cidade
    )
    {
        $this->middleware('auth');

        $this->cidade        = $cidade;
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
            $cidades = $this->cidade->all();
            $titulo = "Cidades";
            return view('Painel.Cidades.index', compact('cidades','titulo'));
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
            $titulo = "Nova Cidade";
            return view('Painel.Cidades.create', compact('titulo'));
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
            $insert = $this->cidade->create($dataForm);
            if($insert)
            {
                return redirect()->route('cidades.index');
            }
            else
            {
                return redirect()->route('cidades.create');
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
            $cidade = $this->cidade->find($id);
            $titulo = "Excluir Cidade";
            return view('Painel.Cidades.delete', compact('titulo','cidade'));
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
            $cidade = $this->cidade->find($id);
            $titulo = "Editar Cidade";
            return view('Painel.Cidades.update', compact('titulo','cidade'));
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
            $cidade = $this->cidade->find($id);
            $update = $cidade->update($dataForm);
            if($update)
            {
                return redirect()->route('cidades.index');
            }
            else
            {
                return redirect()->route('cidades.edit',$id);
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
        $cidade = $this->cidade->find($id);
        $delete = $cidade->delete();
        if($delete)
        {
            return redirect()->route('cidades.index');
        }
        else
        {
            return redirect()->route('cidades.show',$id);
        }
    }
}
