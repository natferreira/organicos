@extends('Site.Template.index')

@section('content')

@includeIf('Site.Encomenda.Endereco.Sessions.titulo')

<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <!-- Start Checkout Address -->
        <div class="col-lg-9">
            <div class="checkout-steps">
                <a href="checkout-review.html">4. Review</a>
                <a href="checkout-payment.html"><span class="angle"></span>3. Payment</a>
                <a href="checkout-shipping.html"><span class="angle"></span>2. Shipping</a>
                <a class="active" href="checkout-address.html"><span class="angle"></span>1. Address</a>
            </div>
            <h4>Billing Address</h4>
            <hr class="padding-bottom-1x">
            
            <form action="{{ route('endereco.store') }}" method_field="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-fn">Logradouro</label>
                            <input class="form-control" type="text" id="checkout-fn" name="rua">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-ln">Número</label>
                            <input class="form-control" type="text" id="checkout-ln" name="numero">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-email">Complemento</label>
                            <input class="form-control" type="text" id="checkout-email" name="complemento">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-country">Bairro</label>
                            <select class="form-control" id="checkout-country" name="bairro_id">
                                <option value="" selected>Selecione o Bairro</option>
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
                                <option value="" selected>Selecione a Cidade</option>
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
                
                <div class="checkout-footer">
                    <div class="column"><a class="btn btn-outline-secondary" href="cart.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back To Cart</span></a></div>
                    <div class="column"><button type="submit" class="btn btn-primary" href=""><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></button></div>
                </div>
            </form>
        </div>
        <!-- End Checkout Address -->
        <!-- Start Sidebar -->
        <div class="col-lg-3 order-sum">
            <aside class="sidebar">
                <div class="hidden-lg-up"></div>
                <!-- Start Order Summary Widget -->
                <section class="widget widget-order-summary">
                    <h3 class="widget-title">Order Summary</h3>
                    <table class="table">
                        <tr>
                            <td>Cart Subtotal:</td>
                            <td class="text-medium">$920.00</td>
                        </tr>
                        <tr>
                            <td>Shipping Tax:</td>
                            <td class="text-medium">$30.00</td>
                        </tr>
                        <tr>
                            <td>Estimated Tax:</td>
                            <td class="text-medium">$10.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-lg text-medium">$960.60</td>
                        </tr>
                    </table>
                </section>
                <!-- End Order Summary Widget -->
                <!-- Start Promo Banner -->
                <section class="promo-box hidden-md-down site-promo"><span class="overlay-dark site-promo-span"></span>
                    <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                        <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                        <h3 class="text-bold text-light text-shadow">Smartphones</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-1.html">Shop Now</a>
                    </div>
                </section>
                <!-- End Promo Banner -->
            </aside>
        </div>
    </div>
</div>
<!-- End Product Content -->

@endsection