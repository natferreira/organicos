<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    
    protected $fillable = ['user_id', 'rua', 'bairro_id', 'cidade_id', 'estado_id', 'numero', 'complemento',
    'telefone1','telefone2', 'created_at', 'updated_at'];

    public $rules = [
        'rua'                   => 'required|min:3|max:100',
        'bairro_id'             => 'required',
        'cidade_id'             => 'required',
        'estado_id'             => 'required',
        'numero'                => 'required|max:10',
        'complemento'           => 'max:100',
        'telefone1'             => 'required|numeric|min:8|max:15',
        'telefone2'             => 'max:15',
    ];

    public $rulesUpdate = [
        'rua'                   => 'max:100',
        'numero'                => 'max:10',
        'complemento'           => 'max:100',
        'telefone1'             => 'max:15',
        'telefone2'             => 'max:15',
    ];

    public $messages = [
        'bairro_id.required'        => 'O campo bairro é obrigatório.',
        'cidade_id.required'        => 'O campo cidade é obrigatório.',
        'estado_id.required'        => 'O campo estado é obrigatório.',
        'numero.required'           => 'O campo número é obrigatório.',

    ];

    public function user (){
        return $this->hasOne(\App\User::class);
    }

    public function bairro()
    {
        return $this->hasOne(\App\Models\Bairro::class);
    }

    public function cidade()
    {
        return $this->hasOne(\App\Models\Cidade::class);
    }

    public function estado()
    {
        return $this->hasOne(\App\Models\Estado::class);
    }

}
