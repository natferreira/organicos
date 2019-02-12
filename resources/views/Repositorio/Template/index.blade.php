<!DOCTYPE html>
<html lang="pt-BR">
    @includeIf('Repositorio.Template.head')
    <body>
        @includeIf('Repositorio.Template.header')
            @yield('content')
        @includeIf('Repositorio.Template.footer')
        @includeIf('Repositorio.Template.javascript')
    </body>
</html>
