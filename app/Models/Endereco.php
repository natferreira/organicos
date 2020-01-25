<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    
    protected $fillable = ['user_id', 'rua', 'bairro_id', 'cidade_id', 'estado_id', 'numero', 'complemento',
    'telefone1','telefone2', 'created_at', 'updated_at'];

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
