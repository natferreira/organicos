<!-- Start NavBar -->
<header class="navbar navbar-sticky">
    <!-- Start Search -->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools">
            <span class="clear-search">Clear</span>
            <span class="close-search"><i class="icon-cross"></i></span>
        </div>
    </form>
    <!-- End Search -->
    <!-- Start Logo -->
    <div class="site-branding">
        <div class="inner">
            <a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
            <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <a class="site-logo" href="index.html"><img src="{{asset('SiteP/assets')}}/images/logo/logo.jpg" alt="Inspina"></a>
        </div>
    </div>
    <!-- End Logo -->
    <!-- Start Nav Menu -->
    <nav class="site-menu">
        <ul>
            <li class="active">
                <a href="#"><span>Home</span></a>
            </li>
            <li>
                <a href="#"><span>Nossos Produtos</span></a>
                <ul class="sub-menu">
                    <li class="has-children">
                        <a href="#"><span>Shop Categories</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-categories-1.html">Categories Left Sidebar</a></li>
                            <li><a href="shop-categories-2.html">Categories Right Sidebar</a></li>
                            <li><a href="shop-categories-3.html">Categories No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#"><span>Nossas Cestas</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-grid-1.html">Shop Grid Left Sidebar</a></li>
                            <li><a href="shop-grid-2.html">Shop Grid Right Sidebar</a></li>
                            <li><a href="shop-grid-3.html">Shop Grid No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#"><span>Shop List</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-list-1.html">Shop List Left Sidebar</a></li>
                            <li><a href="shop-list-2.html">Shop List Right Sidebar</a></li>
                            <li><a href="shop-list-3.html">Shop List No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#"><span>Single Product</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-single-1.html">Single Product Left Sidebar</a></li>
                            <li><a href="shop-single-2.html">Single Product Right Sidebar</a></li>
                            <li><a href="shop-single-3.html">Single Product No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#"><span>Checkout</span></a>
                        <ul class="sub-menu">
                            <li><a href="checkout-address.html">Checkout Address</a></li>
                            <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                            <li><a href="checkout-payment.html">Checkout Payment</a></li>
                            <li><a href="checkout-review.html">Checkout Review</a></li>
                            <li><a href="checkout-complete.html">Checkout Complete</a></li>
                        </ul>
                    </li>
                    <li><a href="cart.html">Shopping Cart</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span>OFERTAS</span></a>
            </li>
            <li>
                <a href="#"><span>Sua cesta</span></a>
            </li>
        </ul>
    </nav>
    <!-- End Nav Menu -->
    <!-- Start Toolbar -->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search"></i></div>
                <!-- Start Account -->
                <div class="account">
                    <a href="#"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava">
                                <img src="{{asset('SiteP/assets')}}/images/account/user-ava-sm.jpg" alt="Tony Stark">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">Tony Stark</h6>
                                <span class="text-xs text-muted">530 Reward Points</span>
                            </div>
                        </li>
                        <li><a href="account-profile.html">My Profile</a></li>
                        <li><a href="account-orders.html">My Orders</a></li>
                        <li><a href="account-wishlist.html">My Wishlist</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="#"><i class="fa fa-lock"></i> Sign Out</a></li>
                    </ul>
                </div>
                <!-- End Account -->
            </div>
        </div>
    </div>
    <!-- End Toolbar -->
</header>
<!-- End NavBar -->