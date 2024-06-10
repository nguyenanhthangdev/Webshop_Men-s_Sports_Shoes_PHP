<div id="cart" class="">
    <div class="heading">
        <a href="#">
            <i class="icon-shopping-cart"></i>


            <span id="cart-total2"><?php echo cartCountProducts();?></span>


            <span class="clear"></span>
        </a>
    </div>
    <div class="content">
        <div class="content-scroll">
            <span class="latest-added">Sản Phẩm Thêm Vào:</span>
            <br>
            <br>
            <div class="mini-cart-info">
                <table class="cart">
                    <tbody>
                    	<?php foreach (cartGetProductsWithFormat() as $product) { ?>
                        <tr>
                            <td class="image">
                                <a href="41"><img src="<?php echo $product['thumb']?>"></a>
                            </td>
                            <td class="name"><a href="41"><?php echo $product['name']?></a>
                                <div>
                                </div>
                                <span class="quantity">x&nbsp;<?php echo $product['quantity']?></span>
                                <span class="total"><?php echo $product['total']?></span>
                                <div class="remove"><span><a alt="Remove" title="Remove" onclick="cart.remove('<?php echo $product['product_id'];?>');" href="#"><i class="icon-remove-sign"></i>Xóa</a></span></div>
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
                            <td class="total-right" align="right"><b>Total:</b></td>
                            <td class="total-left" align="left"><span class="t-price"><?php echo cartGetTotalWithFormat(); ?></span></td>
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