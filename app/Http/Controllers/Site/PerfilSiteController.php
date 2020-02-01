<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Endereco;
use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Estado;

class PerfilSiteController extends Controller
{
    protected $user;
    protected $endereco;
    protected $bairro;
    protected $cidade;
    protected $estado;

    public function __construct
    (
        Endereco            $endereco,
        User                $user,
        Bairro              $bairro,
        Cidade              $cidade,
        Estado              $estado
    )
    {
        $this->middleware('auth');

        $this->endereco         = $endereco;
        $this->user             = $user;
        $this->bairro           = $bairro;
        $this->cidade           = $cidade;
        $this->estado           = $estado;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = $this->user->find(auth()->user()->id);
        $endereco = $this->endereco->where('user_id', auth()->user()->id)->first();
        $bairros = $this->bairro->all();
        $cidades = $this->cidade->all();
        $estados = $this->estado->all();
        if( isset($endereco) )
        {
            $bairro = $this->bairro->find($endereco->bairro_id);
            $cidade = $this->cidade->find($endereco->cidade_id);
            $estado = $this->estado->find($endereco->estado_id);
            return view('Site.Perfil.index', compact('usuario','endereco', 'bairro', 'cidade', 'estado'));
        }
        else
        {
            $endereco = '0';
            return view('Site.Perfil.index', compact('usuario','endereco', 'bairros', 'cidades', 'estados'));
        } 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->user->find(auth()->user()->id);
        $endereco = $this->endereco->find($id);
        $bairros = $this->bairro->all();
        $cidades = $this->cidade->all();
        $estados = $this->estado->all();
        $bairro = $this->bairro->find($endereco->bairro_id);
        $cidade = $this->cidade->find($endereco->cidade_id);
        $estado = $this->estado->find($endereco->estado_id);
        return view('Site.Perfil.update', compact('usuario','endereco','bairros', 'cidades', 'estados',
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

        $dadosUser = [];
        $dadosEndereco = [];

        array_push($dadosUser, array("name" => $dataForm["name"],
                                     "email" => $dataForm["email"]));
        array_push($dadosEndereco, array( "user_id" => auth()->user()->id,
                                          "rua" => $dataForm["rua"],
                                          "bairro_id" => $dataForm["bairro_id"],
                                          "cidade_id" => $dataForm["cidade_id"],
                                          "estado_id" => $dataForm["estado_id"],
                                          "numero" => $dataForm["numero"],
                                          "complemento" => $dataForm["complemento"],
                                          "telefone1" => $dataForm["telefone1"],
                                          "telefone2" => $dataForm["telefone2"]));

        $this->validate($request, $this->endereco->rulesUpdate, $this->endereco->messages);
        $this->validate($request, $this->user->rules);

        $endereco = $this->endereco->find($id);
        $update = $endereco->update($dadosEndereco[0]);
        $usuario = $this->user->find(auth()->user()->id);
        $update2 = $usuario->update($dadosUser[0]);
        if($update && $update2)
        {
            return redirect()->route('perfil.index');
        }
        else
        {
            return redirect()->route('perfil.edit', $id);
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
