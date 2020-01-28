<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Encomendas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-striped">
            <thead>
                <tr>
                <th>Cliente</th>
                <th>Endereço</th>
                <th>Telefones</th>
                <th>Produtos</th>
                <th>Valor Total</th>
                <th>Data/Hora</th>
                <th style="width: 10px">Entregue</th>
                </tr>
            </thead>
            <tbody>

            @foreach($pedidoAgrupado as $pedido)
                <tr>
                <td>{{$users[$pedido[0]->user_id - 1]->name}}</td>
                <td>{{$users[$pedido[0]->user_id - 1]->endereco->rua}}, 
                    {{$users[$pedido[0]->user_id - 1]->endereco->numero}}, <br>
                    {{$users[$pedido[0]->user_id - 1]->endereco->complemento}}, 
                    {{$bairros[$users[$pedido[0]->user_id - 1]->endereco->bairro_id -1]->nome}}, <br>
                    {{$cidades[$users[$pedido[0]->user_id - 1]->endereco->cidade_id -1]->nome}} 
                </td>
                <td> {{$users[$pedido[0]->user_id - 1]->endereco->telefone1}}<br>{{$users[$pedido[0]->user_id - 1]->endereco->telefone2}}
                </td>
                <td>
                    @foreach($pedido as $ped)
                        {{$produtos[$ped->produto_id - 1]->nome}} - Qtd: {{$ped->quantidade}}<br>                 
                    @endforeach
                </td>
                <td>
                    @foreach($pedido as $ped)
                        @php
                            $total += $ped->preco * $ped->quantidade 
                        @endphp
                    @endforeach
                   R${{number_format($total,2,',','.')}}
                </td>
                <td>{{$pedido[0]->created_at->format('d/m/Y')}}<br>{{$pedido[0]->created_at->format('H:i:s')}}</td>
                <td><div class="text-center"><input id="s_item{{$pedido[0]->id}}" type="checkbox" style="width:20px; height:20px;"></div></td>
                </tr>
            @endforeach
                
            </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.11.1.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function(){

   var checkbox = document.querySelectorAll("input[type='checkbox']");

   for(var item of checkbox){
      item.addEventListener("click", function(){
         localStorage.s_item ? // verifico se existe localStorage
            localStorage.s_item = localStorage.s_item.indexOf(this.id+",") == -1 // verifico de localStorage contém o id
            ? localStorage.s_item+this.id+"," // não existe. Adiciono a id no loaclStorage
            : localStorage.s_item.replace(this.id+",","") : // já existe, apago do localStorage
         localStorage.s_item = this.id+",";  // não existe. Crio com o id do checkbox
      });
   }

   if(localStorage.s_item){ // verifico se existe localStorage
      for(var item of checkbox){ // existe, percorro as checkbox
         item.checked = localStorage.s_item.indexOf(item.id+",") != -1 ? true : false; // marco true nas ids que existem no localStorage
      }
   }
});
</script>