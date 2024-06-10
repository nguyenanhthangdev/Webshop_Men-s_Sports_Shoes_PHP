<div class="" id="cart">
    <div class="heading">
        <span class="link_a">
<i class="icon-shopping-cart"></i>
<b>Cart: </b>
<span class="sc-button"></span>
        <span id="cart-total2"><?php echo cartCountProducts(); ?></span>
        <span id="cart-total"><?php echo cartGetTextCountAndTotal(); ?></span>
        <i class="icon-caret-down"></i>
        <span class="clear"></span>
        </span>
    </div>
    <div class="content">
        <div class="content-scroll">
            <span class="latest-added">Sản Phẩm Trong Giỏ:</span>
            <br>
            <br>
            <div class="mini-cart-info">
                <table class="cart">
                    <tbody>
                    	<?php foreach (cartGetProductsWithFormat() as $product) { ?>
                        <tr>
                            <td class="image">
                                <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="Ecco enswom sucaal" title="<?php echo $product['name']; ?>"></a>
                            </td>
                            <td class="name"><a href="<?php echo $product['thumb']?>"><?php echo $product['name']; ?></a>
                                <div>
                                </div>
                                <span class="quantity">x&nbsp;<?php echo $product['quantity']; ?></span>
                                <span class="total"><?php echo $product['total']; ?></span>
                                <div class="remove"><span onclick="cart.remove('<?php echo $product['product_id'];?>');"><i class="icon-remove-sign"></i>Bỏ</span></div>
                            </td>


                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="total">
                    <tbody>
                        <!-- 
                        <tr>
                            <td class="total-right" align="right"><b>Sub-Total:</b></td>
                            <td class="total-left" align="left"><span class="t-price">$599.00</span></td>
                        </tr>
                        <tr>
                            <td class="total-right" align="right"><b>Eco Tax (-2.00):</b></td>
                            <td class="total-left" align="left"><span class="t-price">$4.00</span></td>
                        </tr>
                        <tr>
                            <td class="total-right" align="right"><b>VAT (17.5%):</b></td>
                            <td class="total-left" align="left"><span class="t-price">$104.83</span></td>
                        </tr>
                        <tr>
                            <td class="total-right" align="right"><b>Total:</b></td>
                            <td class="total-left" align="left"><span class="t-price">$707.83</span></td>
                        </tr>
                         -->
                         <tr>
                            <td class="total-right" align="right"><b>Tổng:</b></td>
                            <td class="total-left" align="left"><span class="t-price"><?php echo cartGetTotalWithFormat();?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="checkout">
                <a class="button" href="/cart.php"><span>Giỏ Hàng</span></a>
                <a class="button" href="/checkout.php"><span>Thanh Toán</span></a>
            </div>
        </div>
    </div>
</div>                             
