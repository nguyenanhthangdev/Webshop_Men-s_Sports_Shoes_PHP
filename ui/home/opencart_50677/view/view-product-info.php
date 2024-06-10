<div id="container">
    <p id="back-top" style="display: block;"> <a href="#top"><span></span></a> </p>
    <div class="container">
        <div id="notification"></div>
        <div class="row">
            <div class="col-sm-9 col-sm-12   " id="content">
                <div class="breadcrumb">
                    <a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a> »
                    <a href="/product-info.php?product_id=<?php echo $_GET['product_id']; ?>">
                        <?php echo $product_info['name'];?>
                    </a>
                </div>
                <div class="product-info">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="view">
                                <?php echo $product_info['name'];?>
                            </h1>
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
                                <!-- gallery cho di động -->
                                        <ul id="gallery" style="width: 860%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">

                                            <?php if ($product_info['product_images']) { ?>
                                            <?php foreach ($product_info['product_images'] as $image) { ?>
                                            <li style="float: left; list-style: outside none none; position: relative; width: 100px;">
                                                <a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" data-something="something" data-another-thing="anotherthing"> 
											       <img src="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" />
											      </a>
                                            </li>
                                            <?php } ?>
                                            <?php } ?>

                                        </ul>
                            </div>

                            <!-- gallery cho desktop -->
                            <div id="default_gallery" class="left spacing">
                                <div class="image">
                                    <div style="height:270px;width:270px;" class="zoomWrapper">
                                        <img id="zoom_01" data-zoom-image="<?php echo $product_info['thumb']; ?>" src="<?php echo $product_info['thumb']; ?>" alt="<?php echo $product_info['name'];?>" style="position: absolute;">
                                    </div>
                                </div>
                                <div class="image-additional">
                                    <ul id="image-additional" style="width: 860%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">

                                                <?php if ($product_info['product_images']) { ?>
                                                <?php foreach ($product_info['product_images'] as $image) { ?>
                                                <li style="float: left; list-style: outside none none; position: relative; width: 70px; margin-right: 10px;">
                                                    <a href="#" data-image="<?php echo $image['popup']; ?>" data-zoom-image="<?php echo $image['popup']; ?>"> 
		       <img src="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" />
		      </a>
                                                </li>
                                                <?php } ?>
                                                <?php } ?>
                                            </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h1>
                                <?php echo $product_info['name'];?>
                            </h1>
                            <div class="description">
                                <div class="product-section">
                                    <span>Model:</span>
                                    <?php echo $product_info['model'];?><br>
                                    <!-- <span>Reward Points:</span> 1000<br> 
                                    <span>Tình Trạng:</span>
                                    <div class="prod-stock">
                                        <?php echo $stock;?>
                                    </div>
                                    -->
                                </div>
                                <div class="price">
                                    <span class="text-price">Giá:</span>
                                    <span class="price-new"><?php echo $product_info['price']; ?></span>
                                    <!-- <span class="price-old">$236.99</span> -->
                                    <!-- <span class="price-tax">Ex Tax: $190.00</span> -->
                                </div>
                                <div class="cart">
                                    <div class="prod-row">
                                        <div class="cart-top">
                                            <div class="cart-top-padd form-inline">
                                                <label>Số Lượng: <input class="q-mini" name="quantity" value="1" type="text">
													<input class="q-mini" name="product_id" value="<?php echo $product_info['product_id'];?>" type="hidden">
												</label>
                                                <a id="button-cart" class="button-prod"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a>
                                            </div>
                                            <div class="extra-button">
                                               <!-- 
                                                <div class="wishlist">
                                                    <a onclick="alert('Đang xây dựng...')" title="Add to Wish List"><i class="fa fa-star"></i><span>Add to Wish List</span></a>
                                                </div>
                                                -->
                                                <div class="compare">
                                                    <a onclick="compare.add(<?php echo $product_info['product_id'];?>)" title="So Sánh Sản Phẩm"><i class="fa fa-bar-chart-o"></i><span>So Sánh Sản Phẩm</span></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                                <div class="share">

                                    <span class="st_facebook_hcount" displaytext="Facebook" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stMainServices st-facebook-counter" style="background-image: url(&quot;http://w.sharethis.com/images/facebook_counter.png&quot;);">&nbsp;</span><span class="stArrow"><span class="stButton_gradient stHBubble"><span class="stBubble_hcount"></span></span>
                                    </span>
                                    </span>
                                    </span>
                                    </span>
                                    <span class="st_twitter_hcount" displaytext="Tweet" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stMainServices st-twitter-counter" style="background-image: url(&quot;http://w.sharethis.com/images/twitter_counter.png&quot;);">&nbsp;</span><span class="stArrow"><span class="stButton_gradient stHBubble"><span class="stBubble_hcount"></span></span>
                                    </span>
                                    </span>
                                    </span>
                                    </span>
                                    <span class="st_googleplus_hcount" displaytext="Google +" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stButton_gradient"><span class="chicklets googleplus">Google +</span></span><span class="stArrow"><span class="stButton_gradient stHBubble"><span class="stBubble_hcount"></span></span>
                                    </span>
                                    </span>
                                    </span>
                                    </span>
                                    <span class="st_pinterest_hcount" displaytext="Pinterest" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stMainServices st-pinterest-counter" style="background-image: url(&quot;http://w.sharethis.com/images/pinterest_counter.png&quot;);">&nbsp;</span><span class="stArrow"><span class="stButton_gradient stHBubble"><span class="stBubble_hcount"></span></span>
                                    </span>
                                    </span>
                                    </span>
                                    </span>
                                    <!--
									<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                                    <script type="text/javascript">
                                        stLight.options({
                                            publisher: "00fa5650-86c7-427f-b3c6-dfae37250d99",
                                            doNotHash: false,
                                            doNotCopy: false,
                                            hashAddressBar: false
                                        });
                                    </script>
									-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs">
                        <div class="tab-heading">Mô Tả </div>
                        <div class="tab-content">
                            <?php echo $product_info['description'];?>
                        </div>
                    </div>

                    <?php if (productFeatureds()) { ?>
                    <div class="tabs">
                        <div class="tab-heading">Sản Phẩm Nổi Bật</div>

                        <div class="box-product">
                            <ul class="row related-slider">
                                <?php foreach (productFeatureds() as $product) { ?>
                                <li class=" col-sm-3">
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $("a.colorbox<?php echo $product['product_id'];?>").colorbox({
                                                rel: 'colorbox',
                                                inline: true,
                                                html: true,
                                                width: '58%',
                                                maxWidth: '780px',
                                                height: '70%',
                                                open: false,
                                                returnFocus: false,
                                                fixed: true,
                                                title: false,
                                                href: '#quick-view<?php echo $product['product_id'];?>',
                                                current: 'Product {current} of {total} '
                                            });
                                        });
                                    </script>
                                    <div class="padding">
                                        <div class="image2">
                                            <a href="<?php echo $product['href'];?>"><img id="img_48" src="<?php echo $product['thumb'];?>" alt="<?php echo $product['name'];?>"></a>
                                        </div>
                                        <div style="display:none;">
                                            <div class="quick-view preview" id="quick-view<?php echo $product['product_id'];?>">
                                                <div class="wrapper marg row">
                                                    <div class="left col-sm-4">
                                                        <div class="image3">
                                                            <a href="<?php echo $product['href'];?>"><img src="<?php echo $product['thumb'];?>" alt="<?php echo $product['name'];?>"></a>
                                                        </div>
                                                    </div>
                                                    <div class="right col-sm-8">
                                                        <h2>
                                                            <?php echo $product['name']; ?>
                                                        </h2>
                                                        <div class="inf">
                                                            <span class="manufacture">Thương hiệu: <a href="/manufacturer-info.php?manufacturer_id='.<?php echo $product['manufacturer_id'];?>"><?php echo $product['manufacturer']?></a></span>
                                                            <span class="model">Model:<?php echo $product['model']?></span>
                                                            <span class="prod-stock-2">Tình Trạng:</span>
                                                            <span class="prod-stock"><?php echo $product['availability']?></span>
                                                            <div class="price">
                                                                <span class="text-price">Giá: </span>
                                                                <?php echo $product['price'];?>
                                                            </div>
                                                        </div>
                                                        <div class="cart-button">
                                                            <div class="cart">
                                                                <a title="Add to cart" data-id="48;" class="button addToCart-1 " onClick="cart.add('<?php echo $product['product_id']?>');">

                                                                    <span>Thêm vào giỏ hàng</span>
                                                                </a>
                                                            </div>
                                                            <div class="wishlist">
                                                                <a class="tooltip-1" title="" onclick="addToWishList(&#39;48&#39;);" data-original-title="Add to Wish List">
                                                                    <i class="fa fa-star"></i>
                                                                    <span>Add to Wish List</span>
                                                                </a>
                                                            </div>
                                                            <div class="compare">
                                                                <a class="tooltip-1" title="" onclick="addToCompare(&#39;48&#39;);" data-original-title="So Sánh Sản Phẩm">
                                                                    <i class="fa fa-bar-chart-o"></i>
                                                                    <span>So Sánh Sản Phẩm</span>
                                                                </a>
                                                            </div>
                                                            <span class="clear"></span>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="rating">
                                                            <img height="18" src="/ui/home/opencart_50677/layout-home_files/stars-0.png" alt="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <?php echo $product['description'];?>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo $product['href'];?>" class="colorbox<?php echo $product['product_id'];?> quick-view-button cboxElement"><i class=" fa fa-search "></i></a>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-feat" style="height: 38px;">
                                                    <a href="<?php echo $product['href'];?>">
                                                        <?php echo $product['name'];?> </a>
                                                </div>
                                                <div class="description" style="max-height:54px;overflow:hidden">
                                                    <?php echo $product['description']; ?>
                                                </div>
                                                <div class="price">
                                                    <?php echo $product['price']; ?> </div>
                                            </div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a title="Add to cart" data-id="48;" class="button addToCart" onClick="cart.add('<?php echo $product['product_id'];?>')">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Thêm vào giỏ hàng</span>
                                                    </a>
                                                </div>
                                                <span class="clear"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <?php }?>
                                <!-- San Pham Mau -->
                            </ul>
                        </div>

                    </div>
                    <?php }?>


                </div>
            </div>
            <aside class="col-sm-3" id="column-right">
                <div class="box info" id="compare" style="display: none;">
                    <div class="box-heading">Product Comparison</div>
                    <div class="box-content">
                        <div class="product-compare"><a class="button" href="#product/compare"><span>Product Compare</span></a></div>
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
                    <div class="box-heading">Bán Chạy Nhất</div>
                    <div class="box-content">
                        <div class="box-product">
                            <ul class="row">
                                <?php foreach (productBestSellers() as $product) { ?>
                                <li class="first-in-line last_line col-sm-3">
                                    <div class="padding">
                                        <div class="image2">
                                            <a href="<?php echo $product['href']?>"><img id="img_32" src="<?php echo $product['thumb']?>" alt=""></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-best" style="height: 19px;">
                                                    <a href="<?php echo $product['href'];?>">
                                                        <?php echo $product['name'];?>
                                                    </a>
                                                </div>
                                                <div class="description">
                                                    <?php echo $product['description']?>
                                                </div>
                                                <div class="price">
                                                    <?php echo $product['price']?> </div>
                                            </div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a title="Add to Cart" data-id="32;" class="button addToCart" onclick="cart.add('<?php echo $product['product_id']; ?>')">
                                                        <i class="fa fa-shopping-cart"></i><span>Thêm Vào Giỏ Hàng</span>
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
                                <?php } ?>
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
                
            </aside>
            <script type="text/javascript">
                <!--
                $(document).ready(function() {
                    $('.colorbox').colorbox({
                        overlayClose: true,
                        opacity: 0.5,
                        rel: "colorbox"
                    });
                });
                //-->
            </script>
            <script type="text/javascript">
                <!--

                $('#button-cart').bind('click', function() {
                    $.ajax({
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
                                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<span><i class="fa fa-times-circle"></i></span></div>');

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
                //$('#tabs a').tabs();
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

