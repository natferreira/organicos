<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <!-- Start Checkout Address -->
        <div class="col-lg-12">
            <h4>Suas Informações:</h4>
            <hr class="padding-bottom-1x">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-fn">Nome</label>
                        <input class="form-control" type="text" id="checkout-fn" name="name" value="{{$usuario->name}}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-ln">Email</label>
                        <input class="form-control" type="text" id="checkout-ln" name="email" value="{{$usuario->email}}" disabled>
                    </div>
                </div>
            </div>

            @if($endereco != '0')
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-fn">Logradouro</label>
                        <input class="form-control" type="text" id="checkout-fn" name="rua" value="{{$endereco->rua}}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-ln">Número</label>
                        <input class="form-control" type="text" id="checkout-ln" name="numero" value="{{$endereco->numero}}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-email">Complemento</label>
                        <input class="form-control" type="text" id="checkout-email" name="complemento" value="{{$endereco->complemento}}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-country">Bairro</label>
                        <select class="form-control" id="checkout-country" name="bairro_id" disabled>
                            <option value="{{$bairro->id}}" selected>{{$bairro->nome}}</option>
                            
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-city">Cidade</label>
                        <select class="form-control" id="checkout-city" name="cidade_id" disabled>
                            <option value="{{$cidade->id}}" selected>{{$cidade->nome}}</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-country">Estado</label>
                        <select class="form-control" id="checkout-country" name="estado_id" disabled>
                            <option value="{{$estado->id}}" selected>{{$estado->nome}}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-fn">Telefone 1</label>
                        <input class="form-control" type="text" id="checkout-fn" name="telefone1" value="{{$endereco->telefone1}}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-ln">Telefone 2</label>
                        <input class="form-control" type="text" id="checkout-ln" name="telefone2" value="{{$endereco->telefone2}}" disabled>
                    </div>
                </div>
            </div>
            
            <div class="checkout-footer">
                <div class="column"><a class="btn btn-primary" href="{{route('perfil.edit', $endereco->id)}}"><span class="hidden-xs-down">Editar&nbsp;</span></a></div>
            </div>
        
            @else
            <h4 class="text-center">Você ainda não tem um endereço de entrega cadastrado!</h4>
            @endif
        </div>
        <!-- End Checkout Address -->
    </div>
</div>
<!-- End Product Content -->