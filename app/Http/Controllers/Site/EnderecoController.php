<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\User;
use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Estado;

class EnderecoController extends Controller
{
    
    protected $user;
    protected $endereco;
    protected $bairro;
    protected $cidade;
    protected $estado;

    public function __construct
    (
        User            $user,
        Endereco        $endereco,
        Bairro          $bairro,
        Cidade          $cidade,
        Estado          $estado
    )
    {
        $this->middleware('auth');

        $this->user             = $user;
        $this->endereco         = $endereco;
        $this->bairro           = $bairro;
        $this->cidade           = $cidade;
        $this->estado           = $estado;


    }

    public function index()
    {
        $user = $this->user->find(auth()->user()->id);
        $endereco = $this->endereco->where('user_id',auth()->user()->id)->first();
        $bairros = $this->bairro->all();
        $cidades = $this->cidade->all();
        $estados = $this->estado->all();
        if( isset($endereco) )
        {
            $bairro = $this->bairro->find($endereco->bairro_id);
            $cidade = $this->cidade->find($endereco->cidade_id);
            $estado = $this->estado->find($endereco->estado_id);
            return view('Site.Encomenda.Endereco.index', compact('endereco', 'bairro', 'cidade', 'estado'));
        }
        else
        {
            $endereco = '0';
            return view('Site.Encomenda.Endereco.index', compact('endereco', 'bairros', 'cidades', 'estados'));
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bairros = $this->bairro->all();
        $cidades = $this->cidade->all();
        $estados = $this->estado->all();
        return view('Site.Encomenda.Endereco.create', compact('bairros', 'cidades', 'estados'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->all();
        $dataForm["user_id"] = auth()->user()->id;
        $insert = $this->endereco->create($dataForm);
        if($insert)
        {
           return redirect()->route('Site.Encomenda.Frete.index');
        }
        else
        {
            return redirect()->route('endereco.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $endereco = $this->endereco->find($id);
        $bairros = $this->bairro->all();
        $cidades = $this->cidade->all();
        $estados = $this->estado->all();
        $bairro = $this->bairro->find($endereco->bairro_id);
        $cidade = $this->cidade->find($endereco->cidade_id);
        $estado = $this->estado->find($endereco->estado_id);
        return view('Site.Encomenda.Endereco.update', compact('endereco','bairros', 'cidades', 'estados',
                                                              'bairro', 'cidade', 'estado'));
        
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
        $dataForm = $request->all();
        $dataForm["user_id"] = auth()->user()->id;
        $endereco = $this->endereco->find($id);
        $update = $endereco->update($dataForm);
        if($update)
        {
            return redirect()->route('Site.Encomenda.Frete.index');
        }
        else
        {
            return redirect()->route('endereco.edit', $id);
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
        //
    }
}
