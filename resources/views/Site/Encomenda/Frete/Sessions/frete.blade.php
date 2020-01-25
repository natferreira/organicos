<!-- Start Checkout Content -->
<div class="container padding-top-1x padding-bottom-3x">
    <div class="row">
        <!-- Start Checkout Shipping -->
        <div class="col-lg-12">
            <div class="checkout-steps">
                <a href="checkout-review.html">4. Revisão</a>
                <a href="checkout-payment.html"><span class="angle"></span>3. Pagamento</a>
                <a class="active" href="checkout-shipping.html"><span class="angle"></span>2. Frete</a>
                <a class="completed" href="checkout-address.html"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>1. Endereço</a>
            </div>
            <h4>Frete</h4>
            <hr class="padding-bottom-1x">
            <div class="table-responsive">
                <p> A ideia aqui é colocar uma imagem que explique melhor a entrega somente as tercas-feiras e que reforce que o frete é grátis</p>
            </div>
            <div class="checkout-footer margin-top-1x">
                <div class="column"><a class="btn btn-outline-secondary" href="{{ route('endereco.index') }}"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Endereço</span></a></div>
                <div class="column"><a class="btn btn-primary" href="{{ route('Site.Encomenda.Pagamento.index') }}"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>
            </div>
        </div>
        <!-- End Checkout Shipping -->
        
    </div>
</div>
<!-- End Product Content -->