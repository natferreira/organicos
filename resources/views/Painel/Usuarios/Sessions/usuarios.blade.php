<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Usuários</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-striped">
            <thead>
                <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefones</th>
            </thead>
            <tbody>

            @foreach($usuarios as $usuario)
                <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                @if(isset($usuario->endereco->telefone1))
                <td>{{$usuario->endereco->telefone1}}<br>{{$usuario->endereco->telefone2}}</td>    
                @else
                <td></td>
                @endif
                </tr>
            @endforeach
                
            </tbody>
            </table>
        </div>
    </div>
</div>

