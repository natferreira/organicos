<!-- Start Shop Category Menu -->
<div class="offcanvas-container" id="shop-categories">
    <a class="account-link" href="#">
        <div class="user-ava">
            <img src="{{asset('SiteP/assets')}}/images/logo.jpg" alt="Tony Stark">
        </div>
        <div class="user-info">
            <h6 class="user-name">Somos Orgânicos</h6>
        </div>
    </a>
    <nav class="offcanvas-menu">
        <ul class="menu">
            <li class="has-children">
                <span>
                    <a href="{{route('Site.Principal.index')}}">Home</a>
                </span>
            </li>
            <li class="has-children">
                <span>
                    <a href="{{route('Site.Produtos.index')}}">Nossos Produtos</a>
                </span>
            </li>
            <li class="has-children">
                <span>
                    <a href="{{route('Site.Cesta.index')}}">Sua Cesta</a>
                </span>
            </li>
            @if(auth()->check())
            <div class="offcanvas-header">
                <h3 class="offcanvas-title">{{auth()->user()->name}}</h3>
            </div>
            <li class="has-children">
                <span>
                    <a href="{{route('perfil.index')}}">Meu Perfil</a>
                </span>
            </li>
            <li class="has-children">
                <span>
                    <a href="{{ route('meusPedidos.index') }}">Meus Pedidos</a>
                </span>
            </li>
            <li class="has-children">
                <span>
                    <a href="{{ route('logout') }}">SAIR</a>
                </span>
            </li>
            @else
            <li class="has-children">
                <span>
                    <a href="{{ route('login') }}">ENTRAR</a>
                </span>
            </li>
            <li class="has-children">
                <span>
                    <a href="{{ route('register') }}">CADASTRE-SE</a>
                </span>
            </li>
            @endif
        </ul>
    </nav>
</div>
<!-- End Shop Category Menu -->