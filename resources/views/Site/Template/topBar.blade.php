<!-- Start TopBar -->
<div class="topbar">
    <div class="topbar-column">
        <a class="hidden-md-down" href="#"><i class="fa fa-phone"></i>&nbsp;+55 (21) 99888 8888</a>
        <a class="hidden-md-down" href="#"><i class="fa fa-envelope-o"></i>&nbsp;contato@somosorganicos.com</a>
    </div>
    <div class="topbar-column">
    @if(auth()->check())
        <a class="hidden-md-down" href="#"></i>&nbsp;{{auth()->user()->name}}</a>
        <a class="hidden-md-down" href="#"></i>&nbsp;MEU PERFIL</a>
        <a class="hidden-md-down" href="#"></i>&nbsp;MEUS PEDIDOS</a>
        
        <a class="hidden-md-down" href="{{route('logout')}}"></i>&nbsp;SAIR&nbsp;&nbsp;&nbsp;&nbsp;</a>
        
    @else
        <a class="hidden-md-down" href="{{route('login')}}"></i>&nbsp;ENTRAR</a>
        <a class="hidden-md-down" href="{{route('register')}}"></i>&nbsp;CADASTRE-SE&nbsp;&nbsp;&nbsp;&nbsp;</a>
    @endif
        <a class="social-button sb-facebook shape-none sb-dark soc-border" href="#" target="_blank"><i class="socicon-facebook"></i></a>
        <a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a>
    </div>
</div>
<!-- End TopBar -->