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
                                <a href="/home.php">Trang Chủ</a> » <a href="<?php echo $product_info['href'];?>" class="last"><?php echo $product_info['name'];?></a>
                            </div>
                            <div class="product-info">
                                <div class="row">
                                    <div class="span3">
                                        <h1 class="view"><?php echo $product_info['name']; ?></h1>
                                        <script type="text/javascript">
                                            jQuery(document).ready(function() {
                                                var myPhotoSwipe = $("#gallery a").photoSwipe({
                                                    enableMouseWheel: false,
                                                    enableKeyboard: false,
                                                    captionAndToolbarAutoHideDelay: 0
                                                });
                                            });
                                        </script>
                                        <div id="full_gallery">
                                            <div class="bx-wrapper" style="max-width: 100%;">
                                                    	<ul id="gallery" style="width: 645%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">                                                    
															<?php foreach ($product_info['product_images'] as $image) { ?>
																<li style="float: left; list-style: outside none none; position: relative; width: 100px;">
																	<a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" data-something="something" data-another-thing="anotherthing"> 
																		<img src="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" />
																	</a>
																</li>
															<?php } ?>                                                        
														</ul>
                                            </div>
                                        </div>
                                        <div id="default_gallery" class="left spacing">
                                        <?php foreach ($product_info['product_images'] as $image) {?>
                                        	<div class="zoom-top">
                                                <a href="<?php echo $image['popup'];?>" title="<?php echo $product_info['name']; ?>" data-gal="prettyPhoto[gallery1]">
                                                    <img src="<?php echo $image['thumb']?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>">
                                                </a>
                                            </div>
                                        <?php }?>
                                            <div class="image">
                                                <div id="wrap" style="top:0px;z-index:9999;position:relative;">
                                                    <a href="<?php echo $product_info['popup']?>" title="<?php echo $product_info['name']; ?>" class="cloud-zoom" id="zoom1" rel="position: 'right'" style="position: relative; display: block;">
                                                        <img src="<?php echo $product_info['thumb'];?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" style="display: block;">
                                                    </a>
                                                    <div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:270px;height:270px;left:0px;top:0px;"></div>
                                                </div>
                                                <a href="<?php echo $product_info['popup']?>" title="<?php echo $product_info['name']; ?>">

                                                </a>
                                            </div>
                                            
                                            <div class="image-additional">
                                                        <ul id="image-additional" style="width: 645%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <?php foreach ($product_info['product_images'] as $image) { ?>
						                                	<li style="float: left; list-style: outside none none; position: relative; width: 70px; margin-right: 10px;">
						                                    	<a href="#" data-image="<?php echo $image['popup']; ?>" data-zoom-image="<?php echo $image['popup']; ?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $image['popup']?>' "> 
								       								<img src="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" />
								      							</a>
						                                    </li>
						                                <?php } ?>
                                                        </ul>
                                                <div class="clear"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <h1><?php echo $product_info['name']; ?></h1>
                                        <div class="description">
                                            <div class="product-section">
                                                <span>Thương Hiệu:</span> <a href="<?php echo $product_info['manufacturer_href'];?>"><?php echo $product_info['manufacturer'];?></a><br>
                                                <span>Model:</span> <?php echo $product_info['model'];?><br>
                                                <!-- <span>Reward Points:</span> 600<br> 
                                                <span>Tình trạng kho hàng:</span>
                                                <div class="prod-stock"><?php echo $product_info['availability'];?></div>
                                                -->
                                            </div>
                                            <div class="price">
                                                <span class="text-price">Giá:</span>
                                                <span class="price-new"><?php echo $product_info['price'];?></span>
                                                <!-- 
                                                <span class="price-old">$589.50</span>
                                                <span class="price-tax">Ex Tax: $499.00</span>
                                                 -->
                                            </div>
                                            <div class="cart">
                                                <div class="prod-row">
                                                    <div class="cart-top">
                                                        <div class="cart-top-padd form-inline">
                                                            <label>Số lượng: <input class="q-mini" name="quantity" size="2" value="1" type="text">
																<input class="q-mini" name="product_id" size="2" value="<?php echo $product_info['product_id'];?>" type="hidden">
															</label>
                                                            <a id="button-cart" class="button-prod"><i class="icon-shopping-cart"></i>Thêm vào giỏ</a>
                                                        </div>
                                                        <!-- 
                                                        <div class="extra-button">
                                                            <div class="wishlist">
                                                                <a onclick="addToWishList('43');" title="Add to Wish List"><i class="icon-star"></i><span>Add to Wish List</span></a>
                                                            </div>
                                                            <div class="compare">
                                                                <a onclick="compare.add('<?php echo $product['product_id']?>');" title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So Sánh Sản Phẩm</span></a>
                                                            </div>
                                                        </div>
                                                         -->
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <!-- 
                                            <div class="review">
                                                <div>
                                                    <img src="catalog/view/theme/theme253/image/stars-0.png" alt="0 reviews">&nbsp;&nbsp;
                                                    <div class="btn-rew">
                                                        <a href="#tab-review">0 reviews</a>
                                                        <a href="#tab-review"><i class="icon-pencil"></i>Write a review</a>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                             -->
                                            <div class="clear"></div>
                                            <div class="share">

                                                <span class="st_facebook_hcount" displaytext="Facebook"></span>
                                                <span class="st_twitter_hcount" displaytext="Tweet"></span>
                                                <span class="st_googleplus_hcount" displaytext="Google +"></span>
                                                <span class="st_pinterest_hcount" displaytext="Pinterest"></span>
                                                <script type="text/javascript" src="https://w.sharethis.com/button/buttons.js"></script>
                                                <script type="text/javascript">
                                                    stLight.options({
                                                        publisher: "00fa5650-86c7-427f-b3c6-dfae37250d99",
                                                        doNotHash: false,
                                                        doNotCopy: false,
                                                        hashAddressBar: false
                                                    });
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs">
                                    <div class="tab-heading">Mô Tả </div>
                                    <div class="tab-content">
                                        <div class="std">
                                            <?php echo $product_info['description'];?>
                                        </div>
                                    </div>
                                </div>
                                <!-- 
                                <div class="tabs">
                                    <div class="tab-heading">
                                        Specification </div>
                                    <div class="tab-content">
                                        <table class="attribute table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td colspan="2">Attribute Groups 1</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>test 1</td>
                                                    <td>8gb</td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <td colspan="2">Attribute Groups 3</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Attribute 3</td>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tabs" id="tab-review">
                                    <div class="tab-heading">
                                        Reviews (0) </div>
                                    <div class="tab-content">
                                        <div id="review">
                                            <div class="content">There are no reviews for this product.</div>
                                        </div>
                                        <h2 id="review-title">Write a review</h2>
                                        <label>Your Name:</label>
                                        <input name="name" value="" type="text">
                                        <br>
                                        <br>
                                        <label>Your Review:</label>
                                        <textarea name="text" cols="40" rows="8" style="width: 93%;"></textarea>
                                        <div class="clear"></div>
                                        <span style="font-size: 11px;"><span style="color: #FF0000;">Note:</span> HTML is not translated!</span><br>
                                        <br>
                                        <label class="inline">Rating:</label>
                                        <div class="form-inline border">
                                            <span class="radio">Bad</span>&nbsp;
                                            <input name="rating" value="1" type="radio"> &nbsp;
                                            <input name="rating" value="2" type="radio"> &nbsp;
                                            <input name="rating" value="3" type="radio"> &nbsp;
                                            <input name="rating" value="4" type="radio"> &nbsp;
                                            <input name="rating" value="5" type="radio"> &nbsp; <span class="radio">Good</span><br>
                                        </div>
                                        <label>Enter the code in the box below:</label>
                                        <input name="captcha" value="" type="text">
                                        <img src="index.php?route=product/product/captcha" alt="" id="captcha">
                                        <br>
                                        <div class="buttons">
                                            <div><a id="button-review" class="button-cont-right">Continue<i class="icon-circle-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs">
                                    <div class="tab-heading">
                                        Tags: </div>
                                    <div class="tab-content">
                                        <div class="tags">
                                            <b>Tags:</b>
                                            <a href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/search&amp;tag=lorem">lorem</a>,
                                            <a href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/search&amp;tag=ipsum">ipsum</a>,
                                            <a href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/search&amp;tag=dolore">dolore</a>
                                        </div>
                                    </div>
                                </div>
                                 -->
                                
                            </div>
                            <h1 class="style-1 mt0">Sản Phẩm Nổi Bật</h1>
                            <div class="related">
                                <div class="box-product">
                                
                                            <ul class="related-slider" style="width: 860%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <?php foreach (productFeatureds() as $product) {?>
                                                <li class="related-info" style="float: left; list-style: outside none none; position: relative; width: 170px; margin-right: 30px;">
                                                    <div class="image">
                                                        <a href="<?php echo $product['href']?>"><img id="img_29" src="<?php echo $product['thumb'];?>" alt="<?php echo $product['name'];?>"></a>
                                                    </div>
                                                    <div class="name"><a href="<?php echo $product['href']?>"><?php echo $product['name'];?></a></div>
                                                    <div class="price"><?php echo $product['price']?></div>
                                                    <div class="cart-button">
                                                        <div class="cart">
                                                            <a title="Add to Cart" onclick="cart.add('<?php echo $product['product_id'];?>');" class="button ">

                                                                <span>Thêm vào giỏ</span>
                                                            </a>
                                                        </div>

                                                        <div class="wishlist"><a class="tooltip-2" title="" onclick="addToWishList('29');" data-original-title="Add to Wish List"><i class="icon-star"></i><span>Add to Wish List</span></a></div>
                                                        <div class="compare"><a class="tooltip-2" title="" onclick="addToCompare('29');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So Sánh Sản Phẩm</span></a></div>
                                                        <span class="clear"></span>
                                                    </div>
                                                    <div class="rating">
                                                    </div>
                                                </li>
                                             <?php }?>  
                                              
                                            </ul>
                                        
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <div class="box info" id="compare" style="display: none;">
                        <div class="box-heading">Product Comparison</div>
                        <div class="box-content">
                            <div class="product-compare"><a class="button" href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/compare"><span>Product Compare</span></a></div>
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
                                });
                            }
                        })(jQuery)
                        $(window).load(function() {
                            if ($(".maxheight-best").length) {
                                $(".maxheight-best").equalHeights()
                            }
                        })
                    </script>
                    <div class="box bestsellers">
                        <div class="box-heading">Sản Phẩm Bán Chạy</div>
                        <div class="box-content">
                            <div class="box-product">
                            
                                <ul class="row">
                                <?php foreach(productBestSellers() as $product){?>
                                    <li class="first-in-line last_line span2">
                                        <div class="image2">
                                            <a href="<?php echo $product['href'];?>"><img id="img_43" src="<?php echo $product['thumb'];?>" alt="<?php echo $product['name']; ?>"></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-best" style="height: 48px;"><a href="<?php echo $product['href'];?>"><?php echo $product['name']; ?></a></div>
                                                <div class="price">
                                                    <span class="price-new"><?php echo $product['price'];?></span>
                                                    <!-- <span class="price-old">$589.50</span> -->
                                                </div>

                                            </div>
                                            <div class="cart-button">
                                                <div class="cart"><a onclick="cart.add('<?php echo $product['product_id'];?>');" title="Add to Cart" data-id="<?php echo $product['product_id'];?>;" class="button addToCart"><i class="icon-shopping-cart"></i><span>Thêm vào giỏ</span></a></div>


                                                <span class="clear"></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="rating">
                                            </div>
                                        </div>
                                        <div class="clear"></div>
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
                                    <li class="first-in-line last_line span2 last">
                                        <div class="image2">
                                            <a href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/product&amp;product_id=49"><img src="https://livedemo00.template-help.com/opencart_45570/image/cache/data/MEAT GRINDER Avilla av-0304 1-206x206.png" alt="Set magna ipsum dolor sit amet "></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight" style="height: 24px;"><a href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/product&amp;product_id=49">Set magna ipsum dolor sit amet </a></div>
                                                <div class="price">
                                                    <span class="price-new">$225.25</span><span class="price-old">$236.99</span>
                                                </div>

                                            </div>
                                            <div class="cart-button">
                                                <div class="cart"><a title="Add to Cart" data-id="49;" class="button addToCart"><i class="icon-shopping-cart"></i><span>Add to Cart</span></a></div>


                                                <span class="clear"></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="rating">
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     -->
                    <script type="text/javascript">
                        if ($('.container').width() > 723) {
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
                                    <li class="first-in-line last_line span3">
                                        <div class="image2">
                                            <a href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/product&amp;product_id=43"><img id="img_43" src="https://livedemo00.template-help.com/opencart_45570/image/cache/data/Side-by-side ELECTROLUX Refrigerator 3-206x206.png" alt="<?php echo $product_info['name']; ?>"></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-spec" style="height: 48px;"><a href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/product&amp;product_id=43"><?php echo $product_info['name']; ?></a></div>
                                                <div class="price">
                                                    <span class="price-new">$588.33</span><span class="price-old">$589.50</span>
                                                </div>

                                            </div>
                                            <div class="cart-button">
                                                <div class="cart"><a title="Add to Cart" data-id="43;" class="button addToCart"><i class="icon-shopping-cart"></i><span>Add to Cart</span></a></div>


                                                <span class="clear"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     -->
                </aside>
                <script type="text/javascript">
                    $('#button-cart').bind('click', function() {
                        $.ajax({
                            //url: 'index.php?route=checkout/cart/add',
                            url: '/cart-add.php',
                            type: 'post',
                            data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
                            dataType: 'json',
                            success: function(json) {
                                $('.success, .warning, .attention, information, .error').remove();

                                if (json['error']) {
                                    if (json['error']['option']) {
                                        for (i in json['error']['option']) {
                                            $('#option-' + i).after('<span class="error">' + json['error']['option'][i] + '</span>');
                                        }
                                    }
                                }

                                if (json['success']) {
                                    $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<span><i class="icon-remove-sign"></i></span></div>');

                                    $('.success').fadeIn('slow');

                                    $('#cart-total').html(json['total']);
                                    $('#cart-total2').html(json['total']);
                                    
                                    //$('#cart').load('index.php?route=module/cart #cart > *');
                                 	// tải lại nội dung html của giỏ hàng bằng (ajax load) lấy từ nguồn: /common/cart-info.php
                    				// chỉ lấy phần nội dung bên trong phần tử html có id="cart" 
                    				// sau đó đắp phần html đó vào bên trong phần tử id="cart" của trang hiện tại.
                    				var urlCartInfo = $('#urlCartAjax').attr('href');
                    				$('#cart').load(urlCartInfo+' #cart > *');
                    				
                                    $('html, body').animate({
                                        scrollTop: 0
                                    }, 'slow');
                                }
                                setTimeout(function() {
                                    $('.success').fadeOut(1000)
                                }, 3000)
                            }
                        });
                    });
                </script>
                <script type="text/javascript">
                    <!--
                    $('#review .pagination a').live('click', function() {
                        $('#review').fadeOut('slow');

                        $('#review').load(this.href);

                        $('#review').fadeIn('slow');

                        return false;
                    });

                    $('#review').load('index.php?route=product/product/review&product_id=43');

                    $('#button-review').bind('click', function() {
                        $.ajax({
                            url: 'index.php?route=product/product/write&product_id=43',
                            type: 'post',
                            dataType: 'json',
                            data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : '') + '&captcha=' + encodeURIComponent($('input[name=\'captcha\']').val()),
                            beforeSend: function() {
                                $('.success, .warning').remove();
                                $('#button-review').attr('disabled', true);
                                $('#review-title').after('<div class="attention"><img src="catalog/view/theme/theme253/image/loading.gif" alt="" /> Please Wait!</div>');
                            },
                            complete: function() {
                                $('#button-review').attr('disabled', false);
                                $('.attention').remove();
                            },
                            success: function(data) {
                                if (data['error']) {
                                    $('#review-title').after('<div class="warning">' + data['error'] + '</div>');
                                }

                                if (data['success']) {
                                    $('#review-title').after('<div class="success">' + data['success'] + '</div>');

                                    $('input[name=\'name\']').val('');
                                    $('textarea[name=\'text\']').val('');
                                    $('input[name=\'rating\']:checked').attr('checked', '');
                                    $('input[name=\'captcha\']').val('');
                                }
                            }
                        });
                    });
                    //-->
                </script>
                <script type="text/javascript">
                    <!--
                    $('#tabs a').tabs();
                    //-->
                </script>
                <script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-timepicker-addon.js"></script>
                <script type="text/javascript">
                    <!--
                    $(document).ready(function() {
                        if ($.browser.msie && $.browser.version == 6) {
                            $('.date, .datetime, .time').bgIframe();
                        }

                        $('.date').datepicker({
                            dateFormat: 'yy-mm-dd'
                        });
                        $('.datetime').datetimepicker({
                            dateFormat: 'yy-mm-dd',
                            timeFormat: 'h:m'
                        });
                        $('.time').timepicker({
                            timeFormat: 'h:m'
                        });
                    });
                    //-->
                </script>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>