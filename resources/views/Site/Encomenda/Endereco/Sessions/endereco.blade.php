<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <!-- Start Checkout Address -->
        <div class="col-lg-9">
            <div class="checkout-steps">
                <a href="checkout-review.html">4. Review</a>
                <a href="checkout-payment.html"><span class="angle"></span>3. Payment</a>
                <a href="checkout-shipping.html"><span class="angle"></span>2. Shipping</a>
                <a class="active" href="checkout-address.html"><span class="angle"></span>1. Address</a>
            </div>
            <h4>Billing Address</h4>
            <hr class="padding-bottom-1x">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-fn">First Name</label>
                        <input class="form-control" type="text" id="checkout-fn">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-ln">Last Name</label>
                        <input class="form-control" type="text" id="checkout-ln">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-email">E-Mail Address</label>
                        <input class="form-control" type="email" id="checkout-email">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-phone">Phone Number</label>
                        <input class="form-control" type="text" id="checkout-phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-company">Company</label>
                        <input class="form-control" type="text" id="checkout-company">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-country">Country</label>
                        <select class="form-control" id="checkout-country">
                            <option>Choose country</option>
                            <option>Russia</option>
                            <option>Canada</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Armenia</option>
                            <option>USA</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-city">City</label>
                        <select class="form-control" id="checkout-city">
                            <option>Choose city</option>
                            <option>Moscow</option>
                            <option>Berlin</option>
                            <option>Geneve</option>
                            <option>New York</option>
                            <option>Paris</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-zip">ZIP Code</label>
                        <input class="form-control" type="text" id="checkout-zip">
                    </div>
                </div>
            </div>
            <div class="row padding-bottom-1x">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-address1">Address 1</label>
                        <input class="form-control" type="text" id="checkout-address1">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-address2">Address 2</label>
                        <input class="form-control" type="text" id="checkout-address2">
                    </div>
                </div>
            </div>
            <h4>Shipping Address</h4>
            <hr class="padding-bottom-1x">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="same_address" checked>
                    <label class="custom-control-label" for="same_address">Same as billing address</label>
                </div>
            </div>
            <div class="checkout-footer">
                <div class="column"><a class="btn btn-outline-secondary" href="cart.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back To Cart</span></a></div>
                <div class="column"><a class="btn btn-primary" href="{{ route('Site.Encomenda.Frete.index') }}"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
            </div>
        </div>
        <!-- End Checkout Address -->
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