@extends('Site.Template.index')

@section('content')
<!-- Start Page Title -->
<div class="page-title">
    <div class="container">
        <div class="column">
            <h1>Registre-se</h1>
        </div>
        <div class="column">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="separator">&nbsp;</li>
                <li>Registre-se</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title -->
<!-- Start Account Access -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <div class="col-md-6">
            <div class="padding-top-3x hidden-md-up"></div>
            <h3 class="margin-bottom-1x padding-top-1x">Não possui uma conta? Registre-se aqui!</h3>
            <p>É rápido, simples e fácil!</p>
            <br>
            <form class="row" action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-fn">Nome</label>
                        <input class="form-control" type="text" id="reg-fn" name="name" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-email">Email</label>
                        <input class="form-control" type="email" id="reg-email" name="email" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-pass">Senha</label>
                        <input class="form-control" type="password" id="reg-pass" name="password" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="reg-pass-confirm">Confirme a senha</label>
                        <input class="form-control" type="password" id="reg-pass-confirm" required>
                    </div>
                </div>
                <div class="col-12 text-center text-sm-right">
                    <button class="btn btn-primary margin-bottom-none" type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
