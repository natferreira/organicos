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
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- End Product #2 -->
        <!-- Start Product #3 
        <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                </div>
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/09.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">Sony HDR-AS50R</a></h3>
                <h4 class="product-price">$549.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #3 -->
        <!-- Start Product #4 
        <div class="grid-item">
            <div class="product-card">
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/13.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">HP LaserJet Pro 200</a></h3>
                <h4 class="product-price">
                    <del>$249.99</del>$189.99
                </h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #4 -->
        <!-- Start Product #5 
        <div class="grid-item">
            <div class="product-card">
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/17.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">Apple Watch 3</a></h3>
                <h4 class="product-price">$299.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #5 -->
        <!-- Start Product #6 
        <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star"></i>
                </div>
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/21.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">Acer Aspire 15.6 i3</a></h3>
                <h4 class="product-price">$649.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #6 -->
        <!-- Start Product #7 
        <div class="grid-item">
            <div class="product-card">
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/25.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">Playstation 4</a></h3>
                <h4 class="product-price">
                    <del>$499.99</del>$349.99
                </h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #7 -->
        <!-- Start Product #8 
        <div class="grid-item">
            <div class="product-card">
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/02.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">Samsung Galaxy S8</a></h3>
                <h4 class="product-price">$700.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #8 -->
        <!-- Start Product #9 
        <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star"></i>
                </div>
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/06.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">Sony VAIO Z8</a></h3>
                <h4 class="product-price">$749.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #9 -->
        <!-- Start Product #10 
        <div class="grid-item">
            <div class="product-card">
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/10.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">JVC Camcorder X5</a></h3>
                <h4 class="product-price">
                    <del>$899.99</del>$749.99
                </h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #10 -->
        <!-- Start Product #11 
        <div class="grid-item">
            <div class="product-card">
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/14.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">Canon LaserJet X6</a></h3>
                <h4 class="product-price">$200.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #11 -->
        <!-- Start Product #12 
        <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star"></i>
                </div>
                <a class="product-thumb" href="#">
                    <img src="{{asset('SiteP/assets')}}/images/shop/products/18.jpg" alt="Product">
                </a>
                <h3 class="product-title"><a href="#">Android Watch X8</a></h3>
                <h4 class="product-price">$255.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
         End Product #12 -->
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
            <a class="btn btn-outline-secondary btn-sm" href="#">Next <i class="icon-arrow-right"></i></a>
        </div>
    </nav>
    <!-- End Pagination -->
    
</div>
<!-- End Page Content -->