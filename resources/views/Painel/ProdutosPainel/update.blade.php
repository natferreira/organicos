@extends('Painel.Template.index')

@section('content')

<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Editar Produto</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    @if(isset($errors) && count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    <form role="form" action="{{route('produtosPainel.update', $produto->id)}}" method="POST" enctype="multipart/form-data">
    {{method_field('PUT')}}
    {{ csrf_field() }}
    <div class="card-body">
        <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{$produto->nome}}">
        </div>
        <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" rows="3" placeholder="Faça uma rápida e objetiva descrição..." name="descricao">{{$produto->descricao}}</textarea>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Preço</label>
        <input type="text" class="form-control" placeholder="Preço" name="preco" value="{{$produto->preco}}">
        </div>
        
        <div class="form-group">
        <label for="exampleFormControlFile1">Trocar Imagem</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem">
        <br><label>Imagem Atual</label><br>
        <img src="{{asset('SiteP/assets')}}/images/shop/products/{{$produto->imagem}}">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Quantidade</label>
        <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" value="{{$produto->quantidade}}">
        </div>        

        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="categoria_id">
            <option selected="selected" value="{{$produto->categoria_id}}">{{$categorias[$produto->categoria_id - 1]->nome}}</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
            @endforeach
            </select>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    </form>
</div>

@endsection