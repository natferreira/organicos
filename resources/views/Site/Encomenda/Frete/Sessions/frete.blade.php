<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <!-- Start Checkout Shipping -->
        <div class="col-lg-9">
            <div class="checkout-steps">
                <a href="checkout-review.html">4. Review</a>
                <a href="checkout-payment.html"><span class="angle"></span>3. Payment</a>
                <a class="active" href="checkout-shipping.html"><span class="angle"></span>2. Shipping</a>
                <a class="completed" href="checkout-address.html"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>1. Address</a>
            </div>
            <h4>Choose Shipping Method</h4>
            <hr class="padding-bottom-1x">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-default">
                    <tr>
                        <th></th>
                        <th>Shipping Method</th>
                        <th>Delivery Time</th>
                        <th>Handling Fee</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-radio mb-0">
                                <input class="custom-control-input" type="radio" id="courier" name="shipping-method" checked>
                                <label class="custom-control-label" for="courier"></label>
                            </div>
                        </td>
                        <td class="align-middle"><span class="text-medium">Courier</span><br><span class="text-muted text-sm">All Addresses</span></td>
                        <td class="align-middle">7 - 9 Days</td>
                        <td class="align-middle">$22.00</td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-radio mb-0">
                                <input class="custom-control-input" type="radio" id="local" name="shipping-method">
                                <label class="custom-control-label" for="local"></label>
                            </div>
                        </td>
                        <td class="align-middle"><span class="text-medium">Local Shipping</span><br><span class="text-muted text-sm">All Addresses</span></td>
                        <td class="align-middle">6 - 7 Days</td>
                        <td class="align-middle">$10.00</td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-radio mb-0">
                                <input class="custom-control-input" type="radio" id="ups" name="shipping-method">
                                <label class="custom-control-label" for="ups"></label>
                            </div>
                        </td>
                        <td class="align-middle"><span class="text-medium">Ground Shipping</span><br><span class="text-muted text-sm">All Addresses</span></td>
                        <td class="align-middle">2 - 4 Days</td>
                        <td class="align-middle">$18.00</td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-radio mb-0">
                                <input class="custom-control-input" type="radio" id="global" name="shipping-method">
                                <label class="custom-control-label" for="global"></label>
                            </div>
                        </td>
                        <td class="align-middle"><span class="text-medium">Inspina Global</span><br><span class="text-muted text-sm">All Addresses</span></td>
                        <td class="align-middle">3 - 4 days</td>
                        <td class="align-middle">$25.00</td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-radio mb-0">
                                <input class="custom-control-input" type="radio" id="locker" name="shipping-method">
                                <label class="custom-control-label" for="locker"></label>
                            </div>
                        </td>
                        <td class="align-middle"><span class="text-medium">Inspina Locker</span><br><span class="text-muted text-sm">All Addresses</span></td>
                        <td class="align-middle">2 - 5 days</td>
                        <td class="align-middle">$10.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="checkout-footer margin-top-1x">
                <div class="column"><a class="btn btn-outline-secondary" href="checkout-address.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a></div>
                <div class="column"><a class="btn btn-primary" href="{{ route('Site.Encomenda.Pagamento.index') }}"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
            </div>
        </div>
        <!-- End Checkout Shipping -->
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