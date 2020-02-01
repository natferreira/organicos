@extends('Site.Template.index')

@section('content')

@includeIf('Site.Encomenda.Endereco.Sessions.titulo')

<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <!-- Start Checkout Address -->
        <div class="col-lg-9">
            <div class="checkout-steps">
                <a href="checkout-review.html">4. Revisão</a>
                <a href="checkout-payment.html"><span class="angle"></span>3. Pagamento</a>
                <a href="checkout-shipping.html"><span class="angle"></span>2. Frete</a>
                <a class="active" href="checkout-address.html"><span class="angle"></span>1. Endereço</a>
            </div>
            <h4>Endereço de entrega</h4>
            <hr class="padding-bottom-1x">

            @if(isset($errors) && count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            
            <form action="{{ route('endereco.update',$endereco->id) }}" method="post">
            {{method_field('PUT')}}
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-fn">Logradouro</label>
                            <input class="form-control" type="text" id="checkout-fn" name="rua" value="{{$endereco->rua}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-ln">Número</label>
                            <input class="form-control" type="text" id="checkout-ln" name="numero" value="{{$endereco->numero}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-email">Complemento</label>
                            <input class="form-control" type="text" id="checkout-email" name="complemento" value="{{$endereco->complemento}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-country">Bairro</label>
                            <select class="form-control" id="checkout-country" name="bairro_id">
                                <option value="{{$bairro->id}}" selected>{{$bairro->nome}}</option>
                                @foreach($bairros as $bairro)
                                    <option value="{{$bairro->id}}">{{$bairro->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-city">Cidade</label>
                            <select class="form-control" id="checkout-city" name="cidade_id">
                                <option value="{{$cidade->id}}" selected>{{$cidade->nome}}</option>
                                @foreach($cidades as $cidade)
                                    <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-country">Estado</label>
                            <select class="form-control" id="checkout-country" name="estado_id">
                            @foreach($estados as $estado)
                                <option value="{{$estado->id}}" selected>{{$estado->nome}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-fn">Telefone 1</label>
                            <input class="form-control" type="text" id="checkout-fn" name="telefone1" value="{{$endereco->telefone1}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-ln">Telefone 2</label>
                            <input class="form-control" type="text" id="checkout-ln" name="telefone2" value="{{$endereco->telefone2}}">
                        </div>
                    </div>
                </div>
                
                <div class="checkout-footer">
                    <div class="column"><a class="btn btn-outline-secondary" href="cart.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Sua cesta</span></a></div>
                    <div class="column"><button type="submit" class="btn btn-primary" href=""><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></button></div>
                </div>
            </form>
        </div>
        <!-- End Checkout Address -->
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

@endsection