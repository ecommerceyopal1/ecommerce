<?php include "Views/template/header.php"; ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?php echo BASE_URL; ?>public/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>DETALLES</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo BASE_URL; ?>">Inicio</a>
                        <span>DETALLES</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Producto</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody id="tblCarrito">
                            <?php foreach ($producto as $producto): ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <a href="<?php echo BASE_URL . 'principal/detalles.php?id=' . $producto['id']; ?>">
                                            <?php echo $producto['nombre']; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $producto['detalles']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn cart-btn cart-btn-right" id="botonVaciar">
                        <span class="icon_loading"></span> Vaciar carrito
                    </a>
                </div>
            </div>
            <div class="shoping__checkout">
                <h5>Cart Total</h5>
                <ul>
                    <li>Total <span id="total">$454.98</span></li>
                </ul>
                <a href="<?php echo BASE_URL . 'principal/order'; ?>" class="primary-btn mb-2">CHECKOUT</a>
                <input type="hidden" id="whatsapp-negocio" value="<?php echo $data['negocio']['whatsapp']; ?>">
                <a href="#" class="btn btn-success btn-block" id="carrito-whatsapp">WHATSAPP</a>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php include "Views/template/footer.php"; ?>

</body>

</html>
