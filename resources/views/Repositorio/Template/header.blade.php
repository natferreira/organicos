<header>
    <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">{{ env('APP_NAME') or 'Shieldforce' }}</h4>
                    <p class="text-muted">
                        Página de Instruções para início de projetos da Shieldforce, aqui estará sempre disponível tudo referente a início de projetos.
                    </p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">GitHub da Equipe</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://getbootstrap.com/docs/4.3/examples/album/#" class="text-white">Alexandre Ferreira</a></li>
                        <li><a href="https://getbootstrap.com/docs/4.3/examples/album/#" class="text-white">Natália Ferreira Lima</a></li>
                        <li><a href="https://getbootstrap.com/docs/4.3/examples/album/#" class="text-white">Vinicios Rocha Corrêa</a></li>
                        <li><a href="https://getbootstrap.com/docs/4.3/examples/album/#" class="text-white">Welington Andrade</a></li>
                        <li><a href="https://getbootstrap.com/docs/4.3/examples/album/#" class="text-white">Raniele Oliveira Peixoto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="{{ route('Home.Principal.index') }}" class="navbar-brand d-flex align-items-center">
                <strong>{{ env('APP_NAME') or 'Shieldforce' }}</strong>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>