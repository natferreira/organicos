@extends('Painel.Template.index')

@section('content')

<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Editar Bairro</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('bairros.update',$bairro->id)}}" method="POST">
    {{method_field('PUT')}}
    {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome do bairro" value="{{$bairro->nome}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
</div>

@endsection