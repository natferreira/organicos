@extends('Site.Template.index')

@section('content')

@includeIf('Site.Pesquisa.Sessions.titulo')
@includeIf('Site.Pesquisa.Sessions.gridProdutos')

@endsection
