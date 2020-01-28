<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{{route('Site.Principal.index')}}" class="brand-link">
    <img src="{{asset('PainelP/dist')}}/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Somos Orgânicos</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{asset('PainelP/dist')}}/img/Admin.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="{{route('Painel.Principal.index')}}" class="nav-link">
            <i class="fas fa-box-open"></i>
            <p>
            Encomendas
            </p>
        </a>
        </li>    
        <li class="nav-item">
        <a href="{{route('produtosPainel.index')}}" class="nav-link">
            <i class="fas fa-shopping-basket"></i>
            <p>
            Cadastrar Produtos
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{route('categorias.index')}}" class="nav-link">
            <i class="fas fa-tags"></i>
            <p>
            Cadastrar Categorias
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{route('usuarios.index')}}" class="nav-link">
            <i class="fas fa-users"></i>
            <p>
            Usuários
            </p>
        </a>
        </li>
        
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>