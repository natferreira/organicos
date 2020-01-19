@extends('Site.Template.index')

@section('content')

@includeIf('Site.Encomenda.Endereco.Sessions.titulo')
@includeIf('Site.Encomenda.Endereco.Sessions.endereco')

@endsection
