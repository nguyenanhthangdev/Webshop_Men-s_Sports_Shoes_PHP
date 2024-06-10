
<div id="cart" class="cart">
    <div id="cart" class="cart open">
        <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle" aria-expanded="true">
<i class="fa fa-shopping-cart"></i>
<strong>Giỏ Hàng:</strong>
<span id="cart-total" class="cart-total"><?php echo cartGetTextCountAndTotal(); ?></span>
<span id="cart-total2" class="cart-total2"><?php echo cartCountProducts(); ?></span> <span id="cart-total3" class="cart-total3"><?php echo cartCountProducts(); ?> sản phẩm</span> </button>
        <ul class="dropdown-menu pull-right">
            <li>
                <div>
                    <table class="table">
                        <tbody>
                            <?php foreach (cartGetProductsWithFormat() as $product) { ?>
                            <tr>
                                <td class="text-center">
                                    <div class="image">
                                        <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-thumbnail"></a>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
                                    - <small>Size Small</small> - <small>Color black</small>
                                    <div> x &nbsp; <?php echo $product['quantity']; ?> <span class="price-cart"><?php echo $product['total']; ?></span></div>
                                </td>
                                <td class="text-right"></td>
                                <td class="text-center"><button type="button" onclick="cart.remove('<?php echo $product['product_id']; ?>');" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </li>
            <li>
                <div>
                    <table class="table total">
                        <tbody>
                            <!-- 
                            <tr>
                                <td class="text-right"><strong>Sub-Total</strong></td>
                                <td class="text-right">$466.00</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                <td class="text-right">$4.00</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>VAT (20%)</strong></td>
                                <td class="text-right">$93.20</td>
                            </tr>
                             -->
                            <tr>
                                <td class="text-right"><strong>Tổng giá trị đơn hàng:</strong></td>
                                <td class="text-right"><?php echo cartGetTotalWithFormat(); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-right">
                        <a class="btn btn-primary" href="/cart.php">Xem Giỏ Hàng</a>
                        <a class="btn btn-primary" href="/checkout.php">Thanh Toán</a></p>
                </div>
            </li>
        </ul>
    </div>
</div>