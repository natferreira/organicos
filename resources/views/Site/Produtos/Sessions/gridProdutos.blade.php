<!-- End Page Title -->
<!-- Start Page Content -->
<div class="container padding-top-1x padding-bottom-3x">
    
    <!-- Start Products Grid -->
    <div class="isotope-grid cols-4">
        <div class="gutter-sizer"></div>
        <div class="grid-sizer"></div>
        @foreach($produtos as $produto)
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="#">
                        <img src="{{asset('SiteP/assets')}}/images/shop/products/{{$produto->imagem}}.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="#">{{$produto->nome}}</a></h3>
                    <h4 class="product-price">R${{$produto->preco}}</h4>
                    <div class="product-buttons">
                        <a href="{{route('add.cesta', $produto->id)}}">
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title=" " data-toast-message="Produto adicionado com sucesso!!">Adicionar à Cesta</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- End Products Grid -->
    <!-- Start Pagination -->

    {{$produtos->links()}}
    
</div>
<!-- End Page Content -->