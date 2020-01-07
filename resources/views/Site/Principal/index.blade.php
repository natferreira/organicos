@extends('Site.Template.index')

@section('content')

@includeIf('Site.Principal.Sessions.slider')
@includeIf('Site.Principal.Sessions.featuredProducts')
@includeIf('Site.Principal.Sessions.topCategories')

@endsection
