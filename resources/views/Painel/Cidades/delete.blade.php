@extends('Painel.Template.index')

@section('content')

<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Excluir Cidade</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('cidades.destroy',$cidade->id)}}" method="POST">
    {{method_field('DELETE')}}
    {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome da cidade" value="{{$cidade->nome}}" disabled>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Excluir</button>
        </div>
    </form>
</div>

@endsection