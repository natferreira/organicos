@extends('Site.Template.index')

@section('content')

@includeIf('Site.Perfil.Sessions.titulo')

<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
            <form action="{{ route('perfil.update', $endereco->id) }}" method="post">
            {{method_field('PUT')}}
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-fn">Nome</label>
                            <input class="form-control" type="text" id="checkout-fn" name="name" value="{{$usuario->name}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="checkout-ln">Email</label>
                            <input class="form-control" type="text" id="checkout-ln" name="email" value="{{$usuario->email}}">
                        </div>
                    </div>
                </div>
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
                    <div class="column"><button type="submit" class="btn btn-primary" href=""><span class="hidden-xs-down">Enviar&nbsp;</span><i class="icon-arrow-right"></i></button></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Product Content -->

@endsection