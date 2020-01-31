@extends('Site.Template.index')

@section('content')

@includeIf('Site.MeusPedidos.Sessions.titulo')
@includeIf('Site.MeusPedidos.Sessions.pedidos')

@endsection
