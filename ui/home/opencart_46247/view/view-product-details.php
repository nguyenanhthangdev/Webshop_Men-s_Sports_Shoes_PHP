<section>
    <div id="container">
        <p id="back-top" style="display: block;"> <a href="#top"><span></span></a> </p>
        <div class="container">
            <div id="notification"> </div>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span9  " id="content">
                            <div class="breadcrumb">
                                <a href="/home.php">Home</a> » <a href="<?php echo $product_href; ?>" class="last"><?php echo $product_name;?></a>
                            </div>
                            <div class="product-info">
                                <div class="row">
                                    <div class="span3">
                                        <h1 class="view"><?php echo $product_name;?></h1>
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
                                        	<ul id="gallery" style="width: 645%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">                                                    
												<?php foreach ($product_images as $image) { ?>
													<li style="float: left; list-style: outside none none; position: relative; width: 100px;">
														<a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $product_name; ?>" data-something="something" data-another-thing="anotherthing"> 
															<img src="<?php echo $image['popup']; ?>" title="<?php echo $product_name; ?>" alt="<?php echo $product_name; ?>" />
														</a>
													</li>
												<?php } ?>                                                        
											</ul>
                                        </div>
                                        <div id="default_gallery" class="left spacing">
                                            <?php foreach ($product_images as $image) { ?>
                                            <div class="zoom-top">
                                                <a href="<?php echo $image['popup']?>" title="<?php echo $product_name;?>" data-gal="prettyPhoto[gallery1]">
                                                    <img src="" title="<?php echo $image['thumb'];?>" alt="<?php echo $product_name;?>">
                                                </a>
                                            </div>
                                            <?php }?>
                                            
                                            
                                            <div class="image">
                                                <div id="wrap" style="top:0px;z-index:9999;position:relative;">
                                                    <a href="<?php echo $product_popup;?>" title="<?php echo $product_name;?>" class="cloud-zoom" id="zoom1" rel="position: 'right'" style="position: relative; display: block;">
                                                        <img src="<?php echo $product_thumb;?>" title="<?php echo $product_name;?>" alt="<?php echo $product_name;?>" style="display: block;">
                                                    </a>
                                                    <div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:270px;height:270px;left:0px;top:0px;"></div>
                                                </div>
                                                <a href="<?php echo $product_popup;?>" title="<?php echo $product_name;?>">

                                                </a>
                                            </div>
                                            <div class="image-additional">
                                            	<ul id="image-additional" style="width: 1290%; position: relative; transition-duration: 0s; transform: translate3d(-240px, 0px, 0px);">
                                                	<?php foreach($product_images as $image) {?>
                                                    <li style="float: left; list-style: outside none none; position: relative; width: 70px; margin-right: 10px;">
                                                    	<a href="<?php echo $image['popup']?>" title="<?php echo $product_name;?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $image['popup']?>' ">
                                                        	<img src="<?php echo $image['thumb']?>" title="<?php echo $product_name;?>" alt="<?php echo $product_name;?>">
                                                        </a>
                                                    </li>
                                                    <?php }?>
                                                </ul>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <h1><?php echo $product_name;?></h1>
                                        <div class="description">
                                            <div class="product-section">
                                                <span>Thương hiệu:</span> <a href="<?php echo $product_manufacturer_href;?>"><?php echo $product_manufacturer;?></a><br>
                                                <span>Model:</span> <?php echo $product_model;?><br>
                                                <span>Tình Trạng Kho Hàng:</span>
                                                <div class="prod-stock"><?php echo $product_availability;?></div>
                                            </div>
                                            <div class="price">
                                                <span class="text-price">Giá:</span>
                                                <span class="price-new"><?php echo $product_price;?></span>
                                                <!-- <span class="price-tax">Ex Tax: $100.00</span> -->
                                            </div>
                                            <div class="cart">
                                                <div class="prod-row">
                                                    <div class="cart-top">
                                                        <div class="cart-top-padd form-inline">
                                                            <label>Số lượng: <input class="q-mini" name="quantity" size="2" value="1" type="text">
															<input class="q-mini" name="product_id" size="2" value="<?php echo $product_id?>" type="hidden">
</label>
                                                            <a id="button-cart" class="button-prod"><i class="icon-shopping-cart"></i>Thêm vào giỏ</a>
                                                        </div>
                                                        <!-- 
                                                        <div class="extra-button">
                                                            <div class="wishlist">
                                                                <a onclick="addToWishList('32');" title="Add to Wish List"><i class="icon-star"></i><span>Add to Wish List</span></a>
                                                            </div>
                                                            <div class="compare">
                                                                <a onclick="addToCompare('32');" title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So Sánh Sản Phẩm</span></a>
                                                            </div>
                                                        </div>
                                                         -->
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs">
                                    <div class="tab-heading">Mô Tả</div>
                                    <div class="tab-content">
                                        <?php echo $product_description;?>
                                    </div>
                                </div>
                                <div class="tabs" id="tab-review">
                                    <div class="tab-heading">Sản Phẩm Liên Quan</div>
                                    <div class="tab-content">
                                        <div class="box-product">
                                        	
                                            <ul class="related-slider" style="width: 645%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <?php foreach (productsRelated($_GET['product_id']) as $product) { ?>
                                                <li class="first-in-line last_line span2">
			                                        <div class="image2">
			                                            <a href="<?php echo $product['href'];?>"><img id="img_29" src="<?php echo $product['thumb']?>" alt="<?php echo $product['name'];?>"></a>
			                                        </div>
			                                        <div class="inner2">
			                                            <div class="f-left">
			                                                <div class="name maxheight-best" style="height: 21px;"><a href="<?php echo $product['href'];?>"><?php echo $product['name'];?></a></div>
			                                                <div class="price">
			                                                    <span style="font-sie:18px;"><?php echo $product['price']?></span>
			                                                    <!-- <span class="price-old">$330.99</span> -->
			                                                </div>
			                                                <div class="description">
			                                                    <?php echo $product['description']?>
			                                                </div>
			                                            </div>
			                                            <div class="inner">
			                                                <div class="cart-button">
			                                                    <div class="cart">
			                                                        <a onclick="cart.add('<?php echo $product['product_id'];?>');" title="Thêm vào giỏ" data-id="<?php echo $product['product_id'];?>;" class="button addToCart"><i class="icon-shopping-cart"></i><span>Thêm vào giỏ</span></a></div>
			                                                    <span class="clear"></span>
			                                                </div>
			                                                <div class="clear"></div>
			                                                <div class="rating">
			                                                </div>
			                                            </div>
			                                        </div>
			                                        <div class="clear"></div>
			                                    </li>
                                            <?php }?>   
                                               
                                            </ul>
                                            
                                		</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <div class="box info" id="compare" style="display: none;">
                        <div class="box-heading">Product Comparison</div>
                        <div class="box-content">
                            <div class="product-compare"><a class="button" href="https://livedemo00.template-help.com/opencart_46247/index.php?route=product/compare"><span>Product Compare</span></a></div>
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
                            if ($(".maxheight-best").length) {
                                $(".maxheight-best").equalHeights()
                            }
                        })
                    </script>
                    <div class="box bestsellers">
                        <div class="box-heading">Bestsellers</div>
                        <div class="box-content">
                            <div class="box-product">
                                <ul class="row">
                                    <?php foreach(productBestSellers() as $product){?>
                                    <li class="first-in-line last_line span2">
                                        <div class="image2">
                                            <a href="<?php echo $product['href'];?>"><img id="img_29" src="<?php echo $product['thumb']?>" alt="<?php echo $product['name'];?>"></a>
                                        </div>
                                        <div class="inner2">
                                            <div class="f-left">
                                                <div class="name maxheight-best" style="height: 21px;"><a href="<?php echo $product['href'];?>"><?php echo $product['name'];?></a></div>
                                                <div class="price">
                                                    <span class="price-new"><?php echo $product['price']?></span>
                                                    <!-- <span class="price-old">$330.99</span> -->
                                                </div>
                                                <div class="description">
                                                    <?php echo $product['description']?>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="cart-button">
                                                    <div class="cart">
                                                        <a onclick="compare.add('<?php echo $product['product_id']?>');" class="details tooltip-1" title="" data-original-title="So Sánh Sản Phẩm"> <i class="icon-bar-chart"></i></a>
                                                        <a onclick="cart.add('<?php echo $product['product_id'];?>');" title="Thêm vào giỏ" data-id="<?php echo $product['product_id'];?>;" class="button addToCart"><i class="icon-shopping-cart"></i><span>Thêm vào giỏ</span></a></div>


                                                    <span class="clear"></span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="rating">
                                                </div>
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
                                            <a href="https://livedemo00.template-help.com/opencart_46247/index.php?route=product/product&amp;product_id=50"><img src="https://livedemo00.template-help.com/opencart_46247/image/cache/data/Creative Announces Aurvana DJ Headphones 1 copy-160x160.png" alt="Esse cillum dolore"></a>
                                        </div>
                                        <div class="inner2">
                                            <div class="f-left">
                                                <div class="name maxheight" style="height: 21px;"><a href="https://livedemo00.template-help.com/opencart_46247/index.php?route=product/product&amp;product_id=50">Esse cillum dolore</a></div>
                                                <div class="price">
                                                    <span class="price-new">$588.33</span><span class="price-old">$589.50</span>
                                                </div>
                                                <div class="description">
                                                    Our store is one of the best among the variety of the com...</div>
                                            </div>
                                            <div class="inner">
                                                <div class="cart-button">
                                                    <div class="cart">
                                                        <a href="https://livedemo00.template-help.com/opencart_46247/index.php?route=product/product&amp;product_id=50" class="details tooltip-1" title="" data-original-title="Details"> <i class="icon-info-sign"></i></a>
                                                        <a title="Add to Cart" data-id="50;" class="button addToCart"><i class="icon-shopping-cart"></i><span>Add to Cart</span></a></div>


                                                    <span class="clear"></span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="rating">
                                                </div>
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
                                            <a href="https://livedemo00.template-help.com/opencart_46247/index.php?route=product/product&amp;product_id=43"><img id="img_43" src="https://livedemo00.template-help.com/opencart_46247/image/cache/data/ART HeadAmp4 - Four-Channel Stereo Headphone Amplifier 1 copy-160x160.png" alt="Acicte magna ipsum dolor"></a>
                                        </div>
                                        <div class="inner2">
                                            <div class="f-left">
                                                <div class="name maxheight-spec" style="height: 21px;"><a href="https://livedemo00.template-help.com/opencart_46247/index.php?route=product/product&amp;product_id=43">Acicte magna ipsum dolor</a></div>
                                                <div class="price">
                                                    <span class="price-new">$588.33</span><span class="price-old">$589.50</span>
                                                </div>
                                                <div class="description">
                                                    Our store is one of the best among the variety of the com...</div>
                                            </div>
                                            <div class="inner">
                                                <div class="cart-button">
                                                    <div class="cart">
                                                        <a href="https://livedemo00.template-help.com/opencart_46247/index.php?route=product/product&amp;product_id=43" class="details tooltip-1" title="" data-original-title="Details"> <i class="icon-info-sign"></i></a>
                                                        <a title="Add to Cart" data-id="43;" class="button addToCart">
                                                            <i class="icon-shopping-cart"></i>
                                                            <span>Add to Cart</span>
                                                        </a>
                                                    </div>

                                                    <span class="clear"></span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
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
                    <!--

                    $('select[name="profile_id"], input[name="quantity"]').change(function() {
                        $.ajax({
                            url: 'index.php?route=product/product/getRecurringDescription',
                            type: 'post',
                            data: $('input[name="product_id"], input[name="quantity"], select[name="profile_id"]'),
                            dataType: 'json',
                            beforeSend: function() {
                                $('#profile-description').html('');
                            },
                            success: function(json) {
                                $('.success, .warning, .attention, information, .error').remove();

                                if (json['success']) {
                                    $('#profile-description').html(json['success']);
                                }
                            }
                        });
                    });

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
                                    if (json['error']['profile']) {
                                        $('select[name="profile_id"]').after('<span class="error">' + json['error']['profile'] + '</span>');
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
                    //-->
                </script>
                <script type="text/javascript">
                    <!--
                    $('#review .pagination a').live('click', function() {
                        $('#review').fadeOut('slow');

                        $('#review').load(this.href);

                        $('#review').fadeIn('slow');

                        return false;
                    });

                    $('#review').load('index.php?route=product/product/review&product_id=32');

                    $('#button-review').bind('click', function() {
                        $.ajax({
                            url: 'index.php?route=product/product/write&product_id=32',
                            type: 'post',
                            dataType: 'json',
                            data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : '') + '&captcha=' + encodeURIComponent($('input[name=\'captcha\']').val()),
                            beforeSend: function() {
                                $('.success, .warning').remove();
                                $('#button-review').attr('disabled', true);
                                $('#review-title').after('<div class="attention"><img src="catalog/view/theme/theme270/image/loading.gif" alt="" /> Please Wait!</div>');
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