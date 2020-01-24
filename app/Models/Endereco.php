<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    
    protected $fillable = ['user_id', 'rua', 'bairro_id', 'cidade_id', 'estado_id', 'numero', 'complemento', 'created_at', 'updated_at'];

    public function user (){
        return $this->hasOne(\App\User::class);
    }

}
