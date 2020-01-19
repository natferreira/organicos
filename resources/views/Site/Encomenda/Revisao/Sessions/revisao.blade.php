<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <!-- Start Checkout Review -->
        <div class="col-lg-9">
            <div class="checkout-steps"><a class="active" href="checkout-review.html">4. Review</a>
                <a class="completed" href="checkout-payment.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>3. Payment</a>
                <a class="completed" href="checkout-shipping.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>2. Shipping</a>
                <a class="completed" href="checkout-address.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. Address</a>
            </div>
            <h4>Review Your Order</h4>
            <hr class="padding-bottom-1x">
            <div class="table-responsive shopping-cart">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th class="text-center">Subtotal</th>
                        <th class="text-center">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="product-item">
                                <a class="product-thumb" href="shop-single-1.html"><img src="assets/images/shop/cart/01.jpg" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title">
                                        <a href="shop-single-1.html">iPhone X Black<small>x 1</small></a>
                                    </h4>
                                    <span><em>Size:</em> 64GB</span><span><em>Color:</em> Gold</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-center text-lg text-medium">$649.99</td>
                        <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-item">
                                <a class="product-thumb" href="shop-single-1.html"><img src="assets/images/shop/cart/02.jpg" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title">
                                        <a href="shop-single-1.html">Panasonic TX-32<small>x 1</small></a>
                                    </h4>
                                    <span><em>Size:</em> 180SM</span><span><em>Color:</em> Silver</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-center text-lg text-medium">$800.00</td>
                        <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-item">
                                <a class="product-thumb" href="shop-single-1.html"><img src="assets/images/shop/cart/03.jpg" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title">
                                        <a href="shop-single-1.html">Sony HDR-AS50R<small>x 1</small></a>
                                    </h4>
                                    <span><em>Size:</em> 20MP</span><span><em>Color:</em> Black</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-center text-lg text-medium">$549.00</td>
                        <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="shopping-cart-footer">
                <div class="column"></div>
                <div class="column text-lg">Total: <span class="text-medium">$1998.99</span></div>
            </div>
            <div class="row padding-top-1x mt-3">
                <div class="col-sm-6">
                    <h5>Shipping to:</h5>
                    <ul class="list-unstyled">
                        <li><span class="text-muted">Client:</span>Tony Stark</li>
                        <li><span class="text-muted">Address:</span>221B Baker Street, London, UK</li>
                        <li><span class="text-muted">Phone:</span>+1 888 888 8888</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h5>Payment Method:</h5>
                    <ul class="list-unstyled">
                        <li><span class="text-muted">Credit Card:</span>**** **** **** 5216</li>
                    </ul>
                </div>
            </div>
            <div class="checkout-footer margin-top-1x">
                <div class="column hidden-xs-down"><a class="btn btn-outline-secondary" href="checkout-payment.html"><i class="icon-arrow-left"></i>&nbsp;Back</a></div>
                <div class="column"><a class="btn btn-primary" href="{{ route('Site.Encomenda.Conclusao.index') }}">Complete Order</a></div>
            </div>
        </div>
        <!-- End Checkout Review -->
        <!-- Start Sidebar -->
        <div class="col-lg-3 order-sum">
            <aside class="sidebar">
                <div class="hidden-lg-up"></div>
                <!-- Start Order Summary Widget -->
                <section class="widget widget-order-summary">
                    <h3 class="widget-title">Order Summary</h3>
                    <table class="table">
                        <tr>
                            <td>Cart Subtotal:</td>
                            <td class="text-medium">$920.00</td>
                        </tr>
                        <tr>
                            <td>Shipping Tax:</td>
                            <td class="text-medium">$30.00</td>
                        </tr>
                        <tr>
                            <td>Estimated Tax:</td>
                            <td class="text-medium">$10.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-lg text-medium">$960.60</td>
                        </tr>
                    </table>
                </section>
                <!-- End Order Summary Widget -->
                <!-- Start Recently Viewed Widget -->
                <section class="widget widget-featured-products hidden-md-down">
                    <h3 class="widget-title">Recently Viewed</h3>
                    <div class="entry">
                        <div class="entry-thumb">
                            <a href="shop-single-1.html">
                                <img src="{{asset('SiteP/assets')}}/images/shop/widget/01.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single-1.html">iPhone X 64GB</a></h4><span class="entry-meta">$749.00</span>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="entry-thumb">
                            <a href="shop-single-1.html">
                                <img src="{{asset('SiteP/assets')}}/images/shop/widget/02.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single-1.html">Panasonic TX-32</a></h4><span class="entry-meta">$800.00</span>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single-1.html">
                            <img src="{{asset('SiteP/assets')}}/images/shop/widget/03.jpg" alt="Product"></a>
                        </div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single-1.html">Sony HDR-AS50R</a></h4><span class="entry-meta">$549.00</span>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single-1.html">
                            <img src="{{asset('SiteP/assets')}}/images/shop/widget/04.jpg" alt="Product"></a>
                        </div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single-1.html">HP LaserJet Pro 200</a></h4><span class="entry-meta">$249.00</span>
                        </div>
                    </div>
                </section>
                <!-- End Recently Viewed Widget -->
                <!-- Start Promo Banner -->
                <section class="promo-box hidden-md-down site-promo"><span class="overlay-dark site-promo-span"></span>
                    <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                        <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                        <h3 class="text-bold text-light text-shadow">Smartphones</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-1.html">Shop Now</a>
                    </div>
                </section>
                <!-- End Promo Banner -->
            </aside>
        </div>
    </div>
</div>
<!-- End Product Content -->