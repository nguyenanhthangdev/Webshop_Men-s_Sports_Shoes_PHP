<div id="cart" class="">
    <div class="heading">
        <a href="#">
            <i class="icon-shopping-cart"></i>
            <b>Cart: </b>
            <span class="sc-button"></span>
            <span id="cart-total2"><?php echo cartGetTotal();?></span>
		    <span id="cart-total"><?php echo cartGetTextCountAndTotal(); ?></span>
            <i class="icon-chevron-sign-down"></i>
            <span class="clear"></span>
        </a>
    </div>
    <div class="content">
        <div class="content-scroll">
            <span class="latest-added">Sản Phẩm Mới Thêm:</span>
            <br>
            <br>
            <div class="mini-cart-info">
                <table class="cart">
                    <tbody>
                    	<?php foreach (cartGetProductsWithFormat() as $product) { ?>
                        <tr>
                            <td class="image">
                                <a href="<?php echo $product['href'];?>"><img src="<?php echo $product['thumb'];?>" alt="Lorem ipsum dolor sit" title="Lorem ipsum dolor sit"></a>
                            </td>
                            <td class="name"><a href="<?php echo $product['href']?>"><?php echo $product['name'];?></a>
                                <!-- 
                                <div>
                                    - <small>Select Red</small><br>
                                </div>
                                 -->
                                <span class="quantity">x&nbsp;<?php echo $product['quantity']; ?></span>
                                <span class="total"><?php echo $product['total'];?></span>
                                <div class="remove"><span><a alt="Remove" title="Remove" onclick="cart.remove('<?php echo $product['product_id'];?>')" href="#"><i class="icon-remove-sign"></i>Bỏ đi</a></span></div>
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
                            <td class="total-left" align="left"><span class="t-price">$261.00</span></td>
                        </tr>
                        <tr>
                            <td class="total-right" align="right"><b>Eco Tax (-2.00):</b></td>
                            <td class="total-left" align="left"><span class="t-price">$6.00</span></td>
                        </tr>
                        <tr>
                            <td class="total-right" align="right"><b>VAT (17.5%):</b></td>
                            <td class="total-left" align="left"><span class="t-price">$45.68</span></td>
                        </tr>
                         -->
                        <tr>
                            <td class="total-right" align="right"><b>Tổng Giá Trị Đơn Hàng:</b></td>
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
