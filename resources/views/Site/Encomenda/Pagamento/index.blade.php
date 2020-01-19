@extends('Site.Template.index')

@section('content')

@includeIf('Site.Encomenda.Pagamento.Sessions.titulo')
@includeIf('Site.Encomenda.Pagamento.Sessions.pagamento')

@endsection
