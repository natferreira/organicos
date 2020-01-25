<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
        <div class="row">
            <!-- Start Checkout Payment -->
            <div class="col-lg-12">
                <div class="checkout-steps">
                    <a href="checkout-review.html">4. Revisão</a>
                    <a class="active" href="checkout-payment.html"><span class="angle"></span>3. Pagamento</a>
                    <a class="completed" href="checkout-shipping.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>2. Frete</a>
                    <a class="completed" href="checkout-address.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. Endereço</a>
                </div>
                <h4>Pagamento</h4>
                <hr class="padding-bottom-1x">
                <div class="accordion" id="accordion" role="tablist">
                    <p> A ideia aqui é colocar uma imagem que explique melhor que o pagamento é feito somente no ato da entrega</p>
                </div>
                <div class="checkout-footer margin-top-1x">
                    <div class="column"><a class="btn btn-outline-secondary" href="{{ route('Site.Encomenda.Frete.index') }}"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Frete</span></a></div>
                    <div class="column"><a class="btn btn-primary" href="{{ route('Site.Encomenda.Revisao.index') }}"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
                </div>
            </div>
            <!-- End Checkout Payment -->

        </div>
    </div>
    <!-- End Product Content -->