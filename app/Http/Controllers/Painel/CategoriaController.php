<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Gate;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    protected $categoria;

    public function __construct
    (
        Categoria           $categoria
    )
    {
        $this->middleware('auth');

        $this->categoria        = $categoria;
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
            $categorias = $this->categoria->all();
            $titulo = "Categorias";
            return view('Painel.Categorias.index', compact('categorias','titulo'));
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
            $titulo = "Nova Categoria";
            return view('Painel.Categorias.create', compact('titulo'));
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
            $insert = $this->categoria->create($dataForm);
            if($insert)
            {
                return redirect()->route('categorias.index');
            }
            else
            {
                return redirect()->route('categorias.create');
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
            $categoria = $this->categoria->find($id);
            $titulo = "Excluir Categoria";
            return view('Painel.Categorias.delete', compact('titulo','categoria'));
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
            $categoria = $this->categoria->find($id);
            $titulo = "Editar Categoria";
            return view('Painel.Categorias.update', compact('titulo','categoria'));
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
            $categoria = $this->categoria->find($id);
            $update = $categoria->update($dataForm);
            if($update)
            {
                return redirect()->route('categorias.index');
            }
            else
            {
                return redirect()->route('categorias.edit',$id);
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
        $categoria = $this->categoria->find($id);
        $delete = $categoria->delete();
        if($delete)
        {
            return redirect()->route('categorias.index');
        }
        else
        {
            return redirect()->route('categorias.show',$id);
        }
    }
}
