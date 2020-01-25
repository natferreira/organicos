@extends('Site.Template.index')

@section('content')
<!-- Start Page Title -->
<div class="page-title">
    <div class="container">
        <div class="column">
            <h1>Login </h1>
        </div>
        <div class="column">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="separator">&nbsp;</li>
                <li>Login</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title -->
<!-- Start Account Access -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <div class="col-md-6">
            <form class="login-box" action="{{ route('login') }}" method="post">
                {{ csrf_field() }}

                <h4 class="margin-bottom-1x">Login</h4>
                <div class="form-group input-group">
                    <input class="form-control" type="email" placeholder="e-mail" name="email" required><span class="input-group-addon"><i class="icon-mail"></i></span>
                </div>
                <div class="form-group input-group">
                    <input class="form-control" type="password" placeholder="Senha" name="password" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                </div>
                <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="remember_me" checked>
                        <label class="custom-control-label" for="remember_me">Remember Me</label>
                    </div><a class="navi-link" href="account-password-recovery.html">Esqueceu a senha?</a>
                </div>
                <div class="text-center text-sm-right">
                    <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Account Access -->
@endsection
