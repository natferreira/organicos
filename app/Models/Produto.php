<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome','descricao', 'preco', 'imagem', 'quantidade', 'categoria_id'];

    public function categoria()
    {
        return $this->hasOne(\App\Models\Categoria::class);
    }
}

