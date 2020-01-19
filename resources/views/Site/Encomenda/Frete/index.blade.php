@extends('Site.Template.index')

@section('content')

@includeIf('Site.Encomenda.Frete.Sessions.titulo')
@includeIf('Site.Encomenda.Frete.Sessions.frete')

@endsection
