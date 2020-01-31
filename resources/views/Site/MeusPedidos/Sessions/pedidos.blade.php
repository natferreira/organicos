<div class="container">
@if($pedidoAgrupado == null)
<h4>Você ainda não fez uma encomenda!</h4>
@else
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
                <th>Produtos</th>
                <th>Valor Total</th>
                <th>Data/Hora</th>
                <th>Cancelar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pedidoAgrupado as $pedido)
                <tr>
                <td>{{$users[$pedido[0]["user_id"] - 1]->name}}</td>
                <td>{{$users[$pedido[0]["user_id"] - 1]->endereco->rua}}, 
                    {{$users[$pedido[0]["user_id"] - 1]->endereco->numero}}, <br>
                    {{$users[$pedido[0]["user_id"] - 1]->endereco->complemento}}, 
                    {{$bairros[$users[$pedido[0]["user_id"] - 1]->endereco->bairro_id -1]->nome}}, <br>
                    {{$cidades[$users[$pedido[0]["user_id"] - 1]->endereco->cidade_id -1]->nome}} 
                </td>
                <td>
                    @foreach($pedido as $ped)
                        {{$produtos[$ped["produto_id"] - 1]->nome}} - Qtd: {{$ped["quantidade"]}}<br>                 
                    @endforeach
                </td>
                <td>
                    @foreach($pedido as $ped)
                        @php
                            $total += $ped["preco"] * $ped["quantidade"]
                        @endphp
                    @endforeach
                    R${{number_format($total,2,',','.')}}
                    @php
                        $total = 0
                    @endphp
                </td>
                <td>{{date('d/m/Y', strtotime($pedido[0]["created_at"]))}}<br>{{date('H:i:s', strtotime($pedido[0]["created_at"]))}}</td>
                @if($pedido[0]["cancelado"] == "S")
                <td><p>Pedido Cancelado</p></td>
                @else
                <td><a href="{{route('meusPedidos.edit', $pedido[0]['created_at'])}}"> Cancelar </a></td>
                @endif
                </tr>
            @endforeach     
            </tbody>
            </table>
        </div>
    </div>
@endif
</div>