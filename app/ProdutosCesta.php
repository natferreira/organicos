<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutosCesta extends Model
{
    protected $fillable = ['nome', 'preco', 'quantidade'];
}

