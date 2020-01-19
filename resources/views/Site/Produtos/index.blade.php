@extends('Site.Template.index')

@section('content')

@includeIf('Site.Produtos.Sessions.titulo')
@includeIf('Site.Produtos.Sessions.gridProdutos')

@endsection
