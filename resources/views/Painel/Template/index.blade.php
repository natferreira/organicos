<!DOCTYPE html>
<html>
<head>
    @includeIf('Painel.Template.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @includeIf('Painel.Template.navbar')
    @includeIf('Painel.Template.sidebar')
    @includeIf('Painel.Template.content')
    @includeIf('Painel.Template.footer')
</div>
@includeIf('Painel.Template.scripts')
</body>