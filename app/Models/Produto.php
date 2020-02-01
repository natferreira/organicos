<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome','descricao', 'preco', 'imagem', 'quantidade', 'categoria_id'];

    public $rules = [
        'nome'              => 'required|min:3|max:100',
        'descricao'         => 'min:5|max:240',
        'preco'             => 'required|numeric|between:0,999.99',
        'imagem'            => 'required',
        'quantidade'        => 'required',
        'categoria_id'      => 'required',
    ];

    public $rulesUpdate = [
        'nome'              => 'max:100',
        'descricao'         => 'max:240',
        'preco'             => 'numeric|between:0,999.99',
    ];

    public $messages = [
        'categoria_id.required'     => 'O campo categoria é obrigatório.',
        'preco.required'            => 'O campo preço é obrigatório.',
        'descricao.min'             => 'O campo descriçao deve conter no mínimo 5 caracteres.',
        'descricao.max'             => 'O campo descriçao deve conter no máximo 240 caracteres.',
        'preco.numeric'             => 'O campo preço deve conter um valor numérico e usar "." ao invés de "," para separar casas decimais.',

    ];
    
    public function categoria()
    {
        return $this->hasOne(\App\Models\Categoria::class);
    }
}

