<section>
    <div id="container">
        <p id="back-top" style="display: none;"> <a href="#top"><span></span></a> </p>
        <div class="container">
            <div id="notification"></div>
            <div class="row">
                <div class="col-sm-9 col-sm-12   " id="content">
                    <div class="breadcrumb">
                        <a href="/home.php">Trang Chủ</a> » <a href="<?php echo $category_href;?>" class="last"><?php echo $category_name;?></a>
                    </div>
                    <h1 class="style-1"><?php echo $category_name;?></h1>
                    <div class="category-info">

                        <?php echo $category_description;?>
                    </div>
                    <div class="box subcat">
                        <!-- <div class="box-heading">Refine Search</div> -->
                        <div class="box-content">
                            <div class="box-product box-subcat">
                                <ul class="row">
                                <?php foreach($sub_categories as $category){ ?>
                                    <li class="cat-height  col-sm-3">
                                        <div class="image">
                                            <a href="<?php echo $category['href']?>"><img src="<?php echo $category_thumb;?>" alt="Ctetur adipisicing  (3)"></a>
                                        </div>
                                        <div class="name subcatname"><a href="<?php echo $category['href']?>"><?php echo $category['name'];?></a></div>
                                    </li>
                                <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-filter">
                        <div class="sort"><b>Xếp theo:</b>
                            <select onchange="location = this.value;">
							<?php foreach ($product_sorts as $sorts) { ?>
							            <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
							            <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
							            <?php } else { ?>
							            <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
							            <?php } ?>
							<?php } ?>
							</select>
                        </div>
                        <div class="limit"><b>Hiển thị:</b>
                            <select onchange="location = this.value;">
							<?php foreach ($limits as $limits) { ?>
							            <?php if ($limits['value'] == $limit) { ?>
							            <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
							            <?php } else { ?>
							            <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
							            <?php } ?>
							            <?php } ?>
							</select>
                        </div>
                        <div class="product-compare"><a href="#" id="compare-total">&nbsp;</a></div>
                        <div class="display"><b>Display:</b> <a id="list_a" onclick="display('list');"><i class="fa fa-list"></i></a>
                            <div id="grid_b"><i class="fa fa-th"></i></div>
                        </div>
                    </div>
                    <div class="product-grid">
                        <ul class="row">
                        <?php $i=0;?>
                        <?php foreach ($productsByCategory as $product) { ?>
                        <li class="col-sm-4 <?php if($i%3==0) echo 'first-in-line'; elseif($i%3==2) echo 'last-in-line';$i++;?>">
                                <div class="padding">
                                    <div class="image">
                                        <a href="<?php echo $product['href'];?>"><img id="img_<?php echo $product['product_id'];?>" src="<?php echo $product['thumb'];?>" title="<?php echo $product['name'];?>" alt="<?php echo $product['name'];?>"></a>
                                    </div>
                                    <div class="left">
                                        <div class="name"><a href="<?php echo $product['href'];?>"><?php echo $product['name'];?></a></div>
                                        <div class="price">
                                            
                                            <span class="price-new"><?php echo $product['price'];?></span>
                                            <!-- 
                                            <span class="price-tax">Ex Tax: $190.00</span>
                                            <span class="price-old">$236.99</span>
                                             -->
                                        </div>
                                        <div class="description"><?php echo $product['description'];?></div>
                                        <div class="cart-button">
                                            <div class="cart">
                                                <a onclick="cart.add('<?php echo $product['product_id'];?>');" class="button" title="Thêm giỏ hàng"> <span>Thêm giỏ hàng</span></a>
                                            </div>
                                            <div class="wishlist"><a class="tooltip-1 " title="" onclick="addToWishList('49');" data-original-title="Add to Wish List"><i class="fa fa-star"></i></a></div>
                                            <div class="compare"><a class="tooltip-1" title="" onclick="addToCompare('49');" data-original-title="So Sánh Sản Phẩm"><i class="fa fa-bar-chart-o"></i></a></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <?php }?>
                        </ul>
                    </div>
                    <div class="pagination">
                        <div class="col-sm-6 text-left"><?php echo $web_pagination_controls; ?></div>
						<div class="col-sm-6 text-right"><?php echo $web_pagination_results; ?></div>
                    </div>
                </div>
                <aside class="col-sm-3" id="column-right">
                    <div class="box info" id="compare" style="display: none;">
                        <div class="box-heading">Product Comparison</div>
                        <div class="box-content">
                            <div class="product-compare"><a class="button" href="https://livedemo00.template-help.com/opencart_50677/index.php?route=product/compare"><span>Product Compare</span></a></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function() {
                            $('.info-list li').last().addClass('last');
                        });
                    </script>
                    <div class="box info">
                        
                        <!--
                        <div class="box-heading">Tài Khoản</div> 
                        <div class="box-content">
                            <ul class="info-list">
                                <li><a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=information/information&amp;information_id=4"><i class="fa fa-angle-right "></i>About Us</a></li>
                                <li><a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=information/information&amp;information_id=6"><i class="fa fa-angle-right "></i>Delivery Information</a></li>
                                <li><a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=information/information&amp;information_id=3"><i class="fa fa-angle-right "></i>Privacy Policy</a></li>
                                <li><a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=information/information&amp;information_id=5"><i class="fa fa-angle-right "></i>Terms &amp; Conditions</a></li>
                                <li><a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=information/contact"><i class="fa fa-angle-right "></i>Contact Us</a></li>
                                <li class="last"><a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=information/sitemap"><i class="fa fa-angle-right "></i>Site Map</a></li>
                            </ul>
                        </div>
                         -->
                         <?php include_once "view-account-box.php";?>
                    </div>
                    <script type="text/javascript">
                        (function($) {
                            $.fn.equalHeights = function(minHeight, maxHeight) {
                                tallest = (minHeight) ? minHeight : 0;
                                this.each(function() {
                                    if ($(this).height() > tallest) {
                                        tallest = $(this).height()
                                    }
                                });
                                if ((maxHeight) && tallest > maxHeight) tallest = maxHeight;
                                return this.each(function() {
                                    $(this).height(tallest)
                                })
                            }
                        })(jQuery)
                        $(window).load(function() {
                            if ($(".maxheight-best").length) {
                                $(".maxheight-best").equalHeights()
                            }
                        })
                    </script>
                    <div class="box bestsellers">
                        <div class="box-heading">SP Bán Chạy</div>
                        <div class="box-content">
                            <div class="box-product">
                                <ul class="row">
                                <?php foreach(productBestSellers() as $product) {?>
                                <li class="first-in-line last_line col-sm-3">
                                        <div class="padding">
                                            <div class="image2">
                                                <a href="<?php echo $product['href'];?>"><img id="img_<?php echo $product['product_id'];?>" src="<?php echo $product['thumb'];?>" alt="<?php echo $product['name'];?>"></a>
                                            </div>
                                            <div class="inner">
                                                <div class="f-left">
                                                    <div class="name maxheight-best" style="height: 19px;"><a href="<?php echo $product['href'];?>"><?php echo $product['name'];?></a></div>
                                                    <div class="description"><?php echo $product['description'];?></div>
                                                    <div class="price"><?php echo $product['price'];?></div>
                                                </div>
                                                <div class="cart-button">
                                                    <div class="cart">
                                                        <a onclick="cart.add('<?php echo $product['product_id'];?>');" title="Thêm vào giỏ" data-id="32;" class="button addToCart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Thêm vào giỏ</span>
                                                        </a>
                                                    </div>
                                                    <span class="clear"></span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="rating">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        (function($) {
                            $.fn.equalHeights = function(minHeight, maxHeight) {
                                tallest = (minHeight) ? minHeight : 0;
                                this.each(function() {
                                    if ($(this).height() > tallest) {
                                        tallest = $(this).height()
                                    }
                                });
                                if ((maxHeight) && tallest > maxHeight) tallest = maxHeight;
                                return this.each(function() {
                                    $(this).height(tallest)
                                })
                            }
                        })(jQuery)
                        $(window).load(function() {
                            if ($(".maxheight").length) {
                                $(".maxheight").equalHeights()
                            }
                        })
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(function() {
                                $('.new-products  li ').last().addClass('last');
                            });
                        });
                    </script>
                    <!-- 
                    <div class="box new-products">
                        <div class="box-heading">Latest</div>
                        <div class="box-content">
                            <div class="box-product">
                                <ul class="row">
                                    <li class="first-in-line last_line col-sm-3 last">
                                        <div class="padding">
                                            <div class="image2">
                                                <a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=product/product&amp;product_id=49"><img src="https://livedemo00.template-help.com/opencart_50677/image/cache/data/product-52-180x180.png" alt="<?php echo $product['name'];?>"></a>
                                            </div>
                                            <div class="inner">
                                                <div class="f-left">
                                                    <div class="name maxheight" style="height: 19px;"><a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=product/product&amp;product_id=49"><?php echo $product['name'];?></a></div>
                                                    <div class="description">We are proud to offer you our hi-tech original goods. The products of ...</div>
                                                    <div class="price">
                                                        <span class="price-new">$225.25</span><span class="price-old">$236.99</span>
                                                    </div>
                                                </div>
                                                <div class="cart-button">
                                                    <div class="cart">
                                                        <a title="Add to Cart" data-id="49;" class="button addToCart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </a>
                                                    </div>
                                                    <span class="clear"></span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="rating">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     -->
                    <script type="text/javascript">
                        if ($('body').width() > 767) {
                            (function($) {
                                $.fn.equalHeights = function(minHeight, maxHeight) {
                                    tallest = (minHeight) ? minHeight : 0;
                                    this.each(function() {
                                        if ($(this).height() > tallest) {
                                            tallest = $(this).height()
                                        }
                                    });
                                    if ((maxHeight) && tallest > maxHeight) tallest = maxHeight;
                                    return this.each(function() {
                                        $(this).height(tallest)
                                    })
                                }
                            })(jQuery)
                            $(window).load(function() {
                                if ($(".maxheight-spec").length) {
                                    $(".maxheight-spec").equalHeights()
                                }
                            });
                        };
                    </script>
                    <!-- 
                    <div class="box specials">
                        <div class="box-heading special-heading">Specials</div>
                        <div class="box-content">
                            <div class="box-product">
                                <ul class="row">
                                    <li class="first-in-line last_line col-sm-3">
                                        <div class="padding">
                                            <div class="image2">
                                                <a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=product/product&amp;product_id=43"><img id="img_43" src="https://livedemo00.template-help.com/opencart_50677/image/cache/data/product-01-180x180.png" alt="Acicte magna ipsum dolor"></a>
                                            </div>
                                            <div class="inner">
                                                <div class="f-left">
                                                    <div class="name maxheight-spec" style="height: 37px;"><a href="https://livedemo00.template-help.com/opencart_50677/index.php?route=product/product&amp;product_id=43">Acicte magna ipsum dolor</a></div>
                                                    <div class="description">We are proud to offer you our hi-tech original goods. The products of ...</div>
                                                    <div class="price">
                                                        <span class="price-new">$588.33</span><span class="price-old">$589.50</span>
                                                    </div>
                                                </div>
                                                <div class="cart-button">
                                                    <div class="cart">
                                                        <a title="Add to cart" data-id="43;" class="button addToCart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </div>
                                                    <span class="clear"></span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     -->
                </aside>
                <script type="text/javascript">
                    <!--
                    function display(view) {
                        if (view == 'list') {
                            $('.product-grid ').attr('class', 'product-list');
                            $('.product-list ul').removeClass('row');
                            $('.product-list ul li').removeClass('col-sm-4');
                            $('.product-list ul li').each(function(index, element) {
                                html = '';
                                html += '<div class="row">';
                                var image = $(element).find('.image').html();

                                if (image != null) {
                                    html += '<div class="image col-sm-3">' + image + '</div>';
                                }
                                html += '<div class="left col-sm-9">';
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

                            $('.display').html('<b>Display:</b> <div id="list_b"><i class="fa fa-list"></i></div> <a id="grid_a" onclick="display(\'grid\');"><i class="fa fa-th"></i></a>');

                            $.totalStorage('display', 'list');
                        } else {
                            $('.product-list').attr('class', 'product-grid');
                            $('.product-grid ul').addClass('row');
                            $('.product-grid ul li').addClass('col-sm-4');
                            $('.product-grid ul li').each(function(index, element) {
                                html = '';

                                var image = $(element).find('.image').html();

                                if (image != null) {
                                    html += '<div class="padding">';
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

                                html += '</div></div>';
                                $(element).html(html);
                            });

                            $('.display').html('<b>Display:</b> <a id="list_a" onclick="display(\'list\');"><i class="fa fa-list"></i></a>  <div id="grid_b"><i class="fa fa-th"></i></i></div>');

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