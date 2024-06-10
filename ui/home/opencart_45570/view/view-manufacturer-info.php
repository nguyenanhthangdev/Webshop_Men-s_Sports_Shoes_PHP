<section>
    <div id="container">
        <p id="back-top" style="display: none;"> <a href="#top"><span></span></a> </p>
        <div class="container">
            <div id="notification"> </div>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span9  " id="content">
                            <div class="breadcrumb">
                                <a href="/home.php">Trang Chủ</a> » 
                                <a href="/manufacturer-list.php">Thương Hiệu</a>
                            </div>
                            <h1><?php echo $manufacturer_name;?></h1>
                            <div class="product-filter">
                                <div class="display"><b>Display:</b> <a id="list_a" onclick="display('list');"><i class="icon-list"></i></a>
                                    <div id="grid_b"><i class="icon-th"></i></div>
                                </div>
                                <div class="sort">Xếp theo: 
                                <select onchange="location = this.value;">
                                <?php foreach ($manu_sorts as $sorts) { ?>
					            <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
					            <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
					            <?php } else { ?>
					            <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
					            <?php } ?>
					            <?php } ?>
								</select>
                                </div>
                                <div class="limit">Hiển thị: 
                                <select onchange="location = this.value;">
                                <?php foreach ($manu_limits as $limits) { ?>
					            <?php if ($limits['value'] == $limit) { ?>
					            <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
					            <?php } else { ?>
					            <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
					            <?php } ?>
					            <?php } ?>
								</select>
                                </div>
                                <!-- <div class="product-compare"><a href="https://livedemo00.template-help.com/opencart_45557/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></div> -->
                            </div>
                            <div class="product-grid">
                                <ul class="row">
                                	<?php $i=0;?>
                                	<?php foreach ($manu_products as $product) { ?>
                                    <li class="span3 <?php if($i%3==0) echo 'first-in-line'; elseif($i%3==2) echo 'last-in-line';$i++?>">
                                        <div class="image">
                                            <a href="<?php echo $product['href']?>"><img id="img_<?php echo $product['product_id']?>" src="<?php echo $product['thumb']?>" title="<?php echo $product['name']?>" alt="<?php echo $product['name'];?>"></a>
                                        </div>
                                        <div class="left">
                                            <div class="name"><a href="<?php echo $product['href'];?>"><?php echo $product['name'];?></a></div>
                                            <div class="price">
                                                <span class="price-new"><?php echo $product['price']?></span> <!-- <span class="price-old">$589.50</span> -->
                                                <br>
                                                <!-- <span class="price-tax">Ex Tax: $499.00</span> -->
                                            </div>
                                            <div class="description"><?php echo $product['description'];?></div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a onclick="cart.add('<?php echo $product['product_id']?>');" class="button" title="Add to Cart"> <span>Thêm vào giỏ</span></a>
                                                </div>
                                                <div class="wishlist"><a class="tooltip-1 " title="" onclick="addToWishList('43');" data-original-title="Add to Wish List"><i class="icon-star"></i></a></div>
                                                <div class="compare"><a class="tooltip-1" title="" onclick="compare.add('<?php echo $product['product_id']?>');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i></a></div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="rating">
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="pagination">
                                <div class="col-sm-6 text-left"><?php echo $web_pagination_controls; ?></div>
          						<div class="col-sm-6 text-right"><?php echo $web_pagination_results; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <?php include_once "view-account-box.php";?>
                </aside>
                <script type="text/javascript">
                    <!--
                    function display(view) {
                        if (view == 'list') {
                            $('.product-grid ').attr('class', 'product-list');
                            $('.product-list ul').removeClass('row');
                            $('.product-list ul li').removeClass('span3');
                            $('.product-list ul li').each(function(index, element) {
                                html = '';
                                html += '<div class="row">';
                                var image = $(element).find('.image').html();

                                if (image != null) {
                                    html += '<div class="image span2">' + image + '</div>';
                                }
                                html += '<div class="left span7">';
                                html += '<div class="name">' + $(element).find('.name').html() + '</div>';
                                html += '<div class="description">' + $(element).find('.description').html() + '</div>';
                                var price = $(element).find('.price').html();
                                if (price != null) {
                                    html += '<div class="price">' + price + '</div>';
                                }
                                html += '<div class="cart-button">';
                                html += '<div class="cart">' + $(element).find('.cart').html() + '</div>';
                                html += '<div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
                                html += '<div class="compare">' + $(element).find('.compare').html() + '</div>';
                                html += '<div class="clear">' + $(element).find('.clear').html() + '</div>';
                                html += '</div>';
                                var rating = $(element).find('.rating').html();
                                if (rating != null) {
                                    html += '<div class="rating">' + rating + '</div>';
                                }
                                html += '</div>';
                                html += '</div>';



                                $(element).html(html);
                            });

                            $('.display').html('<b>Display:</b> <div id="list_b"><i class="icon-list"></i></div> <a id="grid_a" onclick="display(\'grid\');"><i class="icon-th"></i></a>');

                            $.totalStorage('display', 'list');
                        } else {
                            $('.product-list').attr('class', 'product-grid');
                            $('.product-grid ul').addClass('row');
                            $('.product-grid ul li').addClass('span3');
                            $('.product-grid ul li').each(function(index, element) {
                                html = '';

                                var image = $(element).find('.image').html();

                                if (image != null) {
                                    html += '<div class="image">' + image + '</div>';
                                }
                                html += '<div class="left">';




                                html += '<div class="name">' + $(element).find('.name').html() + '</div>';
                                var price = $(element).find('.price').html();

                                if (price != null) {
                                    html += '<div class="price">' + price + '</div>';
                                }
                                html += '<div class="description">' + $(element).find('.description').html() + '</div>';


                                html += '<div class="cart-button">';
                                html += '<div class="cart">' + $(element).find('.cart').html() + '</div>';
                                html += '<div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
                                html += '<div class="compare">' + $(element).find('.compare').html() + '</div>';
                                html += '<div class="clear">' + $(element).find('.clear').html() + '</div>';
                                html += '</div>';
                                var rating = $(element).find('.rating').html();

                                if (rating != null) {
                                    html += '<div class="rating">' + rating + '</div>';
                                }

                                html += '</div>';
                                $(element).html(html);
                            });

                            $('.display').html('<b>Display:</b> <a id="list_a" onclick="display(\'list\');"><i class="icon-list"></i></a>  <div id="grid_b"><i class="icon-th"></i></i></div>');

                            $.totalStorage('display', 'grid');
                        }
                        if ($('body').width() > 940) {
                            // tooltip demo
                            $('.tooltip-toggle').tooltip({
                                selector: "a[data-toggle=tooltip]"
                            })
                            $('.tooltip-1').tooltip({
                                placement: 'bottom'
                            })
                            $('.tooltip-2').tooltip({
                                placement: 'top'
                            })
                        }

                    }

                    view = $.totalStorage('display');

                    if (view) {
                        display(view);
                    } else {
                        display('grid');
                    }
                    //-->
                </script>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>