<div class="container">
    <div style="width:200px; margin-bottom:5px;">
        <a href="{{route('cidades.create')}}">
        <button type="button" class="btn btn-block btn-success">Nova Cidade</button>
        <a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cidades</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-striped">
            <thead>
                <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
                </tr>
            </thead>
            <tbody>

            @foreach($cidades as $cidade)
                <tr>
                <td>{{$cidade->id}}</td>
                <td>{{$cidade->nome}}</td>
                <td><a href="{{route('cidades.edit',$cidade->id)}}"><button type="button" class="btn btn-block btn-info" style="width:40px;"><i class="fas fa-edit"></i></i></button></a></td>
                <td><a href="{{route('cidades.show',$cidade->id)}}"><button type="button" class="btn btn-block btn-danger" style="width:40px;"><i class="fas fa-trash-alt"></i></button></a></td>
                <td>
                </tr>
            @endforeach
                
            </tbody>
            </table>
        </div>
    </div>
</div>

