<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
        <div class="row">
            <!-- Start Checkout Payment -->
            <div class="col-lg-9">
                <div class="checkout-steps">
                    <a href="checkout-review.html">4. Review</a>
                    <a class="active" href="checkout-payment.html"><span class="angle"></span>3. Payment</a>
                    <a class="completed" href="checkout-shipping.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>2. Shipping</a>
                    <a class="completed" href="checkout-address.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. Address</a>
                </div>
                <h4>Choose Payment Method</h4>
                <hr class="padding-bottom-1x">
                <div class="accordion" id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h6><a href="#card" data-toggle="collapse" data-parent="#accordion"><i class="icon-columns"></i>Pay With Credit Card</a></h6>
                        </div>
                        <div class="collapse show" id="card" role="tabpanel">
                            <div class="card-body">
                                <div class="card-wrapper"></div>
                                <form class="interactive-credit-card row">
                                    <div class="form-group col-sm-6">
                                        <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-outline-primary btn-block margin-top-none" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h6><a class="collapsed" href="#paypal" data-toggle="collapse" data-parent="#accordion"><i class="socicon-paypal"></i>Pay With PayPal</a></h6>
                        </div>
                        <div class="collapse" id="paypal" role="tabpanel">
                            <div class="card-body">
                                <form class="row" method="post">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="E-Mail" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center"><a class="navi-link" href="#">Forgot password?</a>
                                            <button class="btn btn-outline-primary margin-top-none" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h6><a class="collapsed" href="#points" data-toggle="collapse" data-parent="#accordion"><i class="icon-medal"></i>Pay With Reward Points</a></h6>
                        </div>
                        <div class="collapse" id="points" role="tabpanel">
                            <div class="card-body">
                                <p>You currently have<span class="text-medium"> 530</span> Reward Points to spend.</p>
                                <div class="custom-control custom-checkbox d-block">
                                    <input class="custom-control-input" type="checkbox" id="use_points">
                                    <label class="custom-control-label" for="use_points">Use my Reward Points to pay for this order.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout-footer margin-top-1x">
                    <div class="column"><a class="btn btn-outline-secondary" href="checkout-shipping.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a></div>
                    <div class="column"><a class="btn btn-primary" href="{{ route('Site.Encomenda.Revisao.index') }}"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
                </div>
            </div>
            <!-- End Checkout Payment -->
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