<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <!-- Start Checkout Review -->
        <div class="col-lg-9">
            <div class="checkout-steps"><a class="active" href="checkout-review.html">4. Revisão</a>
                <a class="completed" href="checkout-payment.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>3. Pagamento</a>
                <a class="completed" href="checkout-shipping.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>2. Frete</a>
                <a class="completed" href="checkout-address.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. Endereço</a>
            </div>
            <h4>Revisão da Encomenda</h4>
            <hr class="padding-bottom-1x">
            <div class="table-responsive shopping-cart">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nome do Produto</th>
                        <th class="text-center">Quantidade</th>
                        <th class="text-center">Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $produto)
                    <tr>
                        <td>
                            <div class="product-item">
                                <a class="product-thumb" href="shop-single-1.html"><img src="{{asset('SiteP/assets')}}/images/shop/products/{{$produto['item']->imagem}}.jpg" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title">
                                        <a href="shop-single-1.html">{{$produto['item']->nome}}</a>
                                    </h4>
                                    <span></span>
                                </div>
                            </div>
                        </td>
                        <td class="text-center text-lg text-medium">{{$produto['qtd']}}</td>
                        <td class="text-center text-lg text-medium">R${{number_format($produto['item']->preco * $produto['qtd'],2,',','.')}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="shopping-cart-footer">
                <div class="column"></div>
                <div class="column text-lg">Total: <span class="text-medium">R${{number_format($cesta->total(),2,',','.')}}</span></div>
            </div>
            <div class="row padding-top-1x mt-3">
                <div class="col-sm-6">
                    <h5>Entrega para:</h5>
                    <ul class="list-unstyled">
                        <li><span class="text-muted">Cliente:</span> {{auth()->user()->name}}</li>
                        <li><span class="text-muted">Endereço:</span> {{$endereco->numero}} {{$endereco->rua}}, {{$bairro->nome}},</li>
                        <li>{{$cidade->nome}} - {{$estado->nome}}</li>
                        <li><span class="text-muted">Telefone:</span>{{$endereco->telefone1}}</li>
                        <li>{{$endereco->telefone2}}</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h5>Pagamento:</h5>
                    <ul class="list-unstyled">
                        <li>O pagamento será efetuado no ato da entrega.</li>
                    </ul>
                </div>
            </div>
            <div class="checkout-footer margin-top-1x">
                <div class="column hidden-xs-down"><a class="btn btn-outline-secondary" href="checkout-payment.html"><i class="icon-arrow-left"></i>&nbsp;Back</a></div>
                <div class="column"><a class="btn btn-primary" href="{{ route('Site.Encomenda.Conclusao.index') }}">Finalizar</a></div>
            </div>
        </div>
        <!-- End Checkout Review -->
        <!-- Start Sidebar -->
        <div class="col-lg-3 order-sum">
            <aside class="sidebar">
                <div class="hidden-lg-up"></div>
                <!-- Start Promo Banner -->
                <section class="promo-box hidden-md-down site-promo"><span class="overlay-dark site-promo-span"></span>
                    <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                        <h4 class="text-light text-thin text-shadow">Só aceitamos encomendas acima de R$50,00</h4>
                        <br>
                        <h4 class="text-light text-thin text-shadow">FRETE GRÁTIS</h4>
                        <br>
                        <h4 class="text-light text-thin text-shadow">Entrega somente às terças-feiras!</h4>
                        <br>
                    </div>
                </section>
                <!-- End Promo Banner -->
            </aside>
        </div>
    </div>
</div>
<!-- End Product Content -->