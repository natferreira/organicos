<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use Session;

class Cesta extends Model
{
    private $itens = [];

    public function __construct()
    {
        if( Session::has('cesta')){
            $cesta = Session::get('cesta');

            $this->itens = $cesta->itens;
        }
    }

    public function add(Produto $produto)
    {
        if( isset($this->itens[$produto->id]) ) 
            $this->itens[$produto->id] = [
                'item' => $produto,
                'qtd' => $this->itens[$produto->id]['qtd'] + 1,
            ];
        else
            $this->itens[$produto->id] = [
                'item' => $produto,
                'qtd' => 1,
            ];
    }

    public function remove(Produto $produto)
    {
        if( isset($this->itens[$produto->id]) && $this->itens[$produto->id]['qtd'] > 1 ) 
            $this->itens[$produto->id] = [
                'item' => $produto,
                'qtd' => $this->itens[$produto->id]['qtd'] - 1,
            ];
        elseif( isset($this->itens[$produto->id]) )
            unset($this->itens[$produto->id]);
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function total()
    {
        $total = 0;

        foreach($this->itens as $item)
        {
            $subTotal = $item['item']->preco * $item['qtd'];

            $total += $subTotal;
        }

        return $total;
    }

    public function totalItens()
    {
        return count($this->itens);
    }

    public function limparCesta()
    {
        //if( Session::has('cesta'))
            //Session::forget('cesta');
        
    }

    public function removeProduto(Produto $produto)
    {
        unset($this->itens[$produto->id]);
    }
}
