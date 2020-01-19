
<div class="container padding-top-1x padding-bottom-3x">
    
    <div class="alert alert-info alert-dismissible fade show text-center margin-bottom-1x"><span class="alert-close" data-dismiss="alert"></span>
        <p><i class="fa fa-bell"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the ...</p>
    </div>        
    <div class="table-responsive shopping-cart">
        <table class="table">
            <thead>
            <tr>
                <th>Nome do Produto</th>
                <th class="text-center">Quantidade</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">
                    Remover
                    <!--<a class="btn btn-sm btn-outline-danger" href="">Empty Cart</a>-->
                </th>
            </tr>
            </thead>
            <tbody>

            @forelse($produtos as $produto)
            <tr>
                <td>
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-1.html">
                            <img src="{{asset('SiteP/assets')}}/images/shop/products/{{$produto['item']->imagem}}.jpg" alt="Product">
                        </a>
                        <div class="product-info">
                            <h4 class="product-title"><a href="shop-single-1.html">{{$produto['item']->nome}}</a></h4>
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <a class="btn btn-sm btn-danger" href="{{route('remove.cesta', $produto['item']->id)}}" ><p style="font-size: 1.8em;">-</p></a>
                    <a class="btn btn-sm btn-link-secondary" href="#"><p style="font-size: 1.5em;">{{$produto['qtd']}}</p></a>
                    <a class="btn btn-sm btn-info" href="{{route('add.cesta', $produto['item']->id)}}"><p style="font-size: 1.8em;">+</p></a>
                </td>
                <td class="text-center text-lg text-medium">R${{number_format($produto['item']->preco * $produto['qtd'],2,',','.')}}</td>
                <td class="text-center">
                    <a class="remove-from-cart" href="{{route('remove.produto', $produto['item']->id)}}" data-toggle="tooltip" title="Remover item"><i class="icon-cross"></i></a>
                </td>
            </tr>
            @empty
                <p>Nenhum item no carrinho!</p>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="shopping-cart-footer">
        <div class="column text-lg">Total: <span class="text-medium">R${{number_format($cesta->total(),2,',','.')}}</span></div>
    </div>
    <div class="shopping-cart-footer">
        <div class="column">
            <a class="btn btn-outline-secondary" href="{{route('Site.Produtos.index')}}"><i class="icon-arrow-left"></i>&nbsp;Voltar para a lista de produtos!</a>
        </div>
        <div class="column">
            <a class="btn btn-success" href="{{ route('Site.Encomenda.Endereco.index') }}">Finalizar Encomenda!</a>
        </div>
    </div>
    
</div>
