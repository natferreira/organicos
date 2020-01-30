<div class="container">
    <div style="width:200px; margin-bottom:5px;">
        <a href="{{route('produtosPainel.create')}}">
        <button type="button" class="btn btn-block btn-success">Novo Produto</button>
        <a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produtos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-striped">
            <thead>
                <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Excluir</th>
                </tr>
            </thead>
            <tbody>

            @foreach($produtos as $produto)
                <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->imagem}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$categorias[$produto->categoria_id - 1]->nome}}</td>
                <td><a href="{{route('produtosPainel.edit',$produto->id)}}"><button type="button" class="btn btn-block btn-info" style="width:40px;"><i class="fas fa-edit"></i></i></button></a></td>
                <td><a href="{{route('produtosPainel.show',$produto->id)}}"><button type="button" class="btn btn-block btn-danger" style="width:40px;"><i class="fas fa-trash-alt"></i></button></a></td>
                <td>
                </tr>
            @endforeach
                
            </tbody>
            </table>
        </div>
    </div>
</div>

