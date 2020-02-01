<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Gate;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class ProdutosPainelController extends Controller
{
    protected $produto;
    protected $categoria;

    public function __construct
    (
        Produto             $produto,
        Categoria           $categoria
    )
    {
        $this->middleware('auth');

        $this->produto          = $produto;
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
            $produtos = $this->produto->all();
            $categorias = $this->categoria->all();
            $titulo = "Produtos";
            return view('Painel.ProdutosPainel.index', compact('produtos','titulo','categorias'));
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
            $titulo = "Novo Produto";
            $categorias = $this->categoria->all();
            return view('Painel.ProdutosPainel.create', compact('titulo', 'categorias'));
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

            if($request->hasFile('imagem')){
                $avatar = $request->file('imagem');
                $filenameAvatar = time() . '.' . $avatar->getClientOriginalExtension();
                if($avatar->getClientOriginalExtension() != 'jpg' && $avatar->getClientOriginalExtension() != 'jpeg' && $avatar->getClientOriginalExtension() != 'png'){
                    $error = "true";
                    //return back()->with('error', 'Só é aceito imagens em JPG, JPGE ou PNG!');
                    $filenameAvatar = 'default.jpg';
                }else{
                    Image::make($avatar)->resize(200, 200)->save('SiteP/assets/images/shop/products/'.$filenameAvatar);
                }
            }
            else{
                $filenameAvatar = 'default.jpg';
            }

            $this->validate($request, $this->produto->rules, $this->produto->messages);

            $insert = $this->produto->create([
                'nome' => $dataForm['nome'],
                'descricao' => $dataForm['descricao'],
                'preco' => $dataForm['preco'],
                'quantidade' => $dataForm['quantidade'],
                'categoria_id' => $dataForm['categoria_id'],
                'imagem' => $filenameAvatar
            ]);
            if($insert)
            {
                return redirect()->route('produtosPainel.index');
            }
            else
            {
                return redirect()->route('produtosPainel.create');
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
            $produto = $this->produto->find($id);
            $categorias = $this->categoria->all();
            $titulo = "Excluir Produto";
            return view('Painel.ProdutosPainel.delete', compact('titulo','produto','categorias'));
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
            $produto = $this->produto->find($id);
            $categorias = $this->categoria->all();
            $titulo = "Editar Produto";
            return view('Painel.ProdutosPainel.update', compact('titulo','produto','categorias'));
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

            if($request->hasFile('imagem')){
                $avatar = $request->file('imagem');
                $filenameAvatar = time() . '.' . $avatar->getClientOriginalExtension();
                if($avatar->getClientOriginalExtension() != 'jpg' && $avatar->getClientOriginalExtension() != 'jpeg' && $avatar->getClientOriginalExtension() != 'png'){
                    $error = "true";
                    //return back()->with('error', 'Só é aceito imagens em JPG, JPGE ou PNG!');
                    $filenameAvatar = 'default.jpg';
                }else{
                    Image::make($avatar)->resize(200, 200)->save('SiteP/assets/images/shop/products/'.$filenameAvatar);
                }
            }
            else{
                $filenameAvatar = 'default.jpg';
            }

            $this->validate($request, $this->produto->rulesUpdate, $this->produto->messages);

            $produto = $this->produto->find($id);
            $update = $produto->update([
                'nome' => $dataForm['nome'],
                'descricao' => $dataForm['descricao'],
                'preco' => $dataForm['preco'],
                'quantidade' => $dataForm['quantidade'],
                'categoria_id' => $dataForm['categoria_id'],
                'imagem' => $filenameAvatar
            ]);
            if($update)
            {
                return redirect()->route('produtosPainel.index');
            }
            else
            {
                return redirect()->route('produtosPainel.edit', $id);
            }
        }
        return redirect()->route('Site.Principal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        $delete = $produto->delete();
        if($delete)
        {
            return redirect()->route('produtosPainel.index');
        }
        else
        {
            return redirect()->route('produtosPainel.show',$id);
        }
    }
}
