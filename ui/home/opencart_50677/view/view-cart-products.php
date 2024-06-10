<div id="cart">
    <div class="heading">
        <span class="link_a">
			<i class="fa fa-shopping-cart"></i>
			<b>Cart :</b>
			<span class="sc-button"></span>
		    <span id="cart-total2">2</span>
		    <span id="cart-total"><?php echo cartGetTextCountAndTotal(); ?></span>
		    <i class="fa fa-caret-down"></i>
		    <span class="clear"></span>
        </span>
    </div>
    <div class="content">
        <div class="content-scroll">
            <span class="latest-added">Latest added product(s):</span>
            <br><br>
            <div class="mini-cart-info">
                <table class="cart">
                    <tbody>
                        <?php foreach (cartGetProductsWithFormat() as $product) { ?>
                        <tr>
                            <td class="image"> <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="Ut labore et ut labore " title="Ut labore et ut labore "></a>
                            </td>
                            <td class="name">
                                <a href="<?php echo $product['href']; ?>">
                                    <?php echo $product['name']; ?> </a>
                                <div>
                                </div>
                                <span class="quantity">x&nbsp; <?php echo $product['quantity']; ?></span>
                                <span class="total"><?php echo $product['total']; ?></span>
                                <div class="remove"><span onclick="cart.remove('<?php echo $product['product_id']; ?>')"><i class="fa fa-times-circle"></i>Remove</span></div>
                            </td>


                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="total">
                    <tbody>
                        <tr>
                            <td class="text-right total-right"><b>Tổng giá trị đơn hàng:</b></td>
                            <td class="text-left total-left"><span class="t-price"><?php echo cartGetTotalWithFormat(); ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="checkout">
                <a class="button" href="/cart.php"><span>Xem Giỏ Hàng</span></a>
                <a class="button" href="/checkout.php"><span>Thanh Toán</span></a>
            </div>
        </div>
    </div>
</div>