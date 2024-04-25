<?php include "Views/template/header.php"; ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?php echo BASE_URL; ?>public/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Carrito</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo BASE_URL; ?>">Inicio</a>
                        <span>Carrito</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="tblCarrito">
                        </tbody>
                    </table>
                </div>
                <div class="shoping__cart__btns">
                    < <a href="./productos" class="primary-btn cart-btn">CONTINUE COMPRANDO</a> 
                    <a href="#" class="primary-btn cart-btn cart-btn-right" id="botonVaciar"><span class="icon_loading"></span>
                        Vaciar carrito</a>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div> -->
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <!-- <li>Subtotal <span>$454.98</span></li> -->
                        <li>Total <span id="total">$454.98</span></li>
                    </ul>
                    <a href="<?php echo BASE_URL . 'principal/order'; ?>" class="primary-btn mb-2">CHECKOUT</a>
                    <input type="hidden" id="whatsapp-negocio" value="<?php echo $data['negocio']['whatsapp']; ?>">
                    <form>
                    <script type="text/javascript" src="https://maf.pagosonline.net/ws/fp/tags.js?id=${deviceSessionId}80200"></script>
<noscript>
   <iframe style="width: 100px; height: 100px; border: 0; position: absolute; top: -5000px;" src="https://maf.pagosonline.net/ws/fp/tags.js?id=${deviceSessionId}80200"></iframe>
</noscript>
  <script
    src="https://checkout.wompi.co/widget.js"
    data-render="button"
    data-public-key="pub_test_X0zDA9xoKdePzhd8a0x9HAez7HgGO2fH"
    data-currency="COP"
    data-amount-in-cents="4950000"
    data-reference="4XMPGKWWPKWQTO"
    data-signature:integrity="37c8407747e595535433ef8f6a811d853cd943046624a0ec04662b17bbf33bf5"
  ></script>
</form>
<form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
  <input name="merchantId"      type="hidden"  value="1007305"   >
  <input name="accountId"       type="hidden"  value="1016083 " >
  <input name="description"     type="hidden"  value="VENTA EN LINEA ECOMMERCE-YOPAL"  >
  <input name="referenceCode"   type="hidden"  value="pago0001" >
  <input name="amount"          type="hidden"  value="5.00"   >
  <input name="tax"             type="hidden"  value="0"  >
  <input name="taxReturnBase"   type="hidden"  value="0" >
  <input name="currency"        type="hidden"  value="USD" >
  <input name="signature"       type="hidden"  value="PK7jZf899269B49RxE9F5W146e"  >
  <input name="test"            type="hidden"  value="0" >
  <input name="buyerEmail"      type="hidden"  value="cliente1@test.com" >
  <input name="responseUrl"     type="hidden"  value="http://localhost/ecommerce/principal/carrito/response" >
  <input name="confirmationUrl" type="hidden"  value="http://localhost/ecommerce/principal/carrito/confirmation" >
  <input name="Submit"          type="submit"  value="pago con PAYU" >
</form>
                    <a href="#" class="btn btn-success btn-block" id="carrito-whatsapp">WHATSAPP</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php include "Views/template/footer.php"; ?>

<script src="<?php echo BASE_URL; ?>public/js/carrito.js"></script>
<script
  type="text/javascript"
  src="https://checkout.wompi.co/widget.js"
></script>

</body>

</html>