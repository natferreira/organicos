<!-- Start NavBar -->
<header class="navbar navbar-sticky">
    <!-- Start Search -->
    <form class="site-search" action="{{route('resultado.pesquisa')}}" method="get">
        <input type="text" name="site_search" placeholder="Pesquisar produto.">
        <div class="search-tools">
            <span class="clear-search">Clear</span>
            <span class="close-search"><i class="icon-cross"></i></span>
        </div>
    </form>
    <!-- End Search -->
    <!-- Start Logo -->
    <div class="site-branding">
        <div class="inner">
            <a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
            <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <a class="site-logo" href="{{ route('Site.Principal.index') }}"><img src="{{asset('SiteP/assets')}}/images/logo/logo.jpg" alt="Inspina"></a>
        </div>
    </div>
    <!-- End Logo -->
    <!-- Start Nav Menu -->
    <nav class="site-menu">
        <ul>
            <li class="active">
                <a href="{{ route('Site.Principal.index') }}"><span>Home</span></a>
            </li>
            <li>
                <a href="{{ route('Site.Produtos.index') }}"><span>Nossos Produtos</span></a>
            </li>
            <li>
                <a href="{{ route('Site.Cesta.index') }}"><span>Sua cesta</span></a>
            </li>
        @if(auth()->check())
            @if(auth()->user()->name == "Administrador")
            <li>
            <a  href="{{route('Painel.Principal.index')}}"><span>PAINEL</span></a>
            </li>
            @endif
        @endif
        </ul>
    </nav>
    <!-- End Nav Menu -->
    <!-- Start Toolbar -->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search"></i></div>
                <!-- Start Account -->
                <div class="account">
                    <i class="icon-head"></i>
                    @if(auth()->check())
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-info">
                                <h6 class="user-name">{{auth()->user()->name}}</h6>
                            </div>
                        </li>
                        <li><a href="{{ route('perfil.index') }}">Meu Perfil</a></li>
                        <li><a href="{{ route('meusPedidos.index') }}">Meus Pedidos</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="{{ route('logout') }}"><i class="fa fa-lock"></i> SAIR</a></li>
                    </ul>
                    @else
                    <ul class="toolbar-dropdown">
                        <li><a href="{{ route('login') }}">ENTRAR</a></li>
                        <li><a href="{{ route('register') }}">CADASTRE-SE</a></li>
                    </ul>
                    @endif
                </div>
                <!-- End Account -->
            </div>
        </div>
    </div>
    <!-- End Toolbar -->
</header>
<!-- End NavBar -->