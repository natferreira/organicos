<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'produto_id', 'quantidade', 'preco', 'user_id', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->hasOne(\App\User::class);
    }

    public function produtos()
    {
        return $this->hasMany(\App\Models\Produto::class, 'pedido_id', 'id');
    }
}
