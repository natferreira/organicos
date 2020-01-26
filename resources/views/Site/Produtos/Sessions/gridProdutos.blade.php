<!-- End Page Title -->
<!-- Start Page Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <!-- Start Toolbar -->
    <div class="shop-toolbar mb-30">
        <div class="column">
            <div class="shop-sorting">
                <label for="sorting">Sort by:</label>
                <select class="form-control" id="sorting">
                    <option>Item Popularity</option>
                    <option>Avarage Rating</option>
                    <option>Low - High Price</option>
                    <option>High - Low Price</option>
                    <option>Name A - Z Order</option>
                    <option>Name Z - A Order</option>
                </select><span class="text-muted">Show: </span><span> 1 - 12 items</span>
            </div>
        </div>
        <div class="column">
            <div class="shop-view">
                <a class="grid-view active" href="shop-grid-1.html">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <a class="list-view" href="shop-list-1.html">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Toolbar -->
    <!-- Start Products Grid -->
    <div class="isotope-grid cols-4">
        <div class="gutter-sizer"></div>
        <div class="grid-sizer"></div>

        <!-- Start Product #1 
        <div class="grid-item">
            <div class="product-card">
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/01.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">iPhone x</a></h3>
                <h4 class="product-price">
                    <del>$799.99</del>$649.99
                </h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #1 -->
        @foreach($produtos as $produto)
        <!-- Start Product #2 -->
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
    <nav class="pagination">
        <div class="column">
            <ul class="pages">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
            </ul>
        </div>
        <div class="column text-right hidden-xs-down">
            <a class="btn btn-outline-secondary btn-sm" href="#">Próximo <i class="icon-arrow-right"></i></a>
        </div>
    </nav>
    <!-- End Pagination -->
    
</div>
<!-- End Page Content -->