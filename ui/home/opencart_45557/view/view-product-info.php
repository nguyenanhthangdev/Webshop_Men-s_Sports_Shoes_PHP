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
                                <a href="/home.php">Trang Chủ</a> » <a href="/product-info.php?product_id=<?php echo $product_info['product_id']?>" class="last"><?php echo $product_info['name'];?></a>
                            </div>
                            <div class="product-info">
                                <div class="row">
                                    <div class="span3">
                                        <h1 class="view"><?php echo $product_info['name'];?></h1>
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
                                        	<ul id="gallery">
                                            <?php foreach ($product_info['product_images'] as $image) { ?>
				                            	<li>
				                                 	<a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" data-something="something" data-another-thing="anotherthing"> 
				       								<img src="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" />
				      								</a>
				                                </li>
				                            <?php } ?>
                                        	</ul>
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
                                                    <a href="<?php echo $product_info['popup'];?>" title="<?php echo $product_info['name']; ?>" class="cloud-zoom" id="zoom1" rel="position: 'right'" style="position: relative; display: block;">
                                                        <img src="<?php echo $product_info['thumb'];?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" style="display: block;">
                                                    </a>
                                                    <div class="mousetrap" style="background-image: url(&quot;.&quot;); z-index: 999; position: absolute; width: 270px; height: 270px; left: 0px; top: 0px; cursor: move;"></div>
                                                </div>
                                                <a href="<?php echo $product_info['popup'];?>" title="<?php echo $product_info['name']; ?>">

                                                </a>
                                            </div>
                                            <div class="image-additional">
                                            	<ul id="image-additional" style="width: 645%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                	<?php foreach ($product_info['product_images'] as $image) { ?>
					                                	<li style="float: left; list-style: outside none none; position: relative; width: 70px; margin-right: 10px;">
					                                    	<a href="<?php echo $image['popup']?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $image['popup']?>' "> 
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
                                                <span>Thương hiệu:</span> <a href="<?php echo $product_info['href']?>"><?php echo $product_info['name'];?></a><br>
                                                <span>Model:</span> <?php echo $product_info['model'];?><br>
                                                <!-- <span>Reward Points:</span> 700<br> 
                                                <span>Tình Trạng Kho Hàng:</span>
                                                <div class="prod-stock"><?php echo $product_info['availability'];?></div>
                                                -->
                                                
                                            </div>
                                            <div class="price">
                                                <span class="text-price">Giá:</span>
                                                <span class="price-new"><?php echo $product_info['price'];?></span>
                                                <!-- <span class="price-tax">Ex Tax: $1,000.00</span> -->
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
                                                        
                                                        <div class="extra-button">
                                                           <!-- 
                                                            <div class="wishlist">
                                                                <a onclick="addToWishList('44');" title="Add to Wish List"><i class="icon-star"></i><span>Add to Wish List</span></a>
                                                            </div>
                                                            -->
                                                            <div class="compare">
                                                                <a onclick="compare.add('<?php echo $product_info['product_id'];?>');" title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So Sánh Sản Phẩm</span></a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <!-- 
                                            <div class="review">
                                                <div>
                                                    <img src="catalog/view/theme/theme252/image/stars-0.png" alt="0 reviews">&nbsp;&nbsp;
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
                                            <!-- 
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
                                             -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs">
                                    <div class="tab-heading">Mô Tả</div>
                                    <div class="tab-content">
                                        <?php echo $product_info['description'];?>
                                    </div>
                                </div>
                            </div>
                            <h1 class="style-1 mt0">Sản Phẩm Nổi Bật</h1>
                            <div class="related">
                                <div class="box-product">
                                        	
                                            <ul class="related-slider" style="width: 645%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <?php foreach (productFeatureds() as $product) { ?>
                                                <li class="related-info" style="float: left; list-style: outside none none; position: relative; width: 170px; margin-right: 30px;">
                                                    <div class="image">
                                                        <a href="<?php echo $product['href'];?>"><img id="img_30" src="<?php echo $product['thumb']?>"></a>
                                                        <div class="price">
                                                            <span class="price-new"><?php echo $product['price']?></span><!-- <span class="price-old">$119.50</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="name"><a href="<?php echo $product['href']?>"><?php echo $product['name']?></a></div>
                                                    <div class="cart-button">
                                                        <div class="cart">
                                                            <a title="Add to Cart" onclick="cart.add('<?php echo $product_info['product_id'];?>');" class="button ">

                                                                <span>Thêm vào giỏ</span>
                                                            </a>
                                                        </div>

                                                        <div class="wishlist"><a class="tooltip-2" title="" onclick="addToWishList('30');" data-original-title="Add to Wish List"><i class="icon-star"></i><span>Add to Wish List</span></a></div>
                                                        <div class="compare"><a class="tooltip-2" title="" onclick="compare.add('<?php echo $product_info['product_id'];?>');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So Sánh Sản Phẩm</span></a></div>
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
                            <div class="product-compare"><a class="button" href="#product/compare"><span>Product Compare</span></a></div>
                        </div>
                    </div>
                    <div class="box bestsellers">
                        <div class="box-heading">Sản Phẩm Bán Chạy</div>
                        <div class="box-content">
                            <div class="box-product">
                                <ul class="row">
                                <?php foreach(productBestSellers() as $product)?>
                                    <li class="first-in-line last_line span2">
                                        <div class="image2">
                                            <a href="<?php echo $product['href']?>"><img id="img_36" src="<?php echo $product['thumb']?>" alt="<?php echo $product['name']?>"></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-feat"><a href="<?php echo $product['href']?>"><?php echo $product['name']?></a></div>
                                                <div class="description"><?php echo $product['description']?></div>
                                                <div class="price"><?php echo $product['price']?></div>
                                            </div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a onclick="cart.add('<?php echo $product['product_id'];?>');" title="Thêm vào giỏ" data-id="36;" class="button addToCart"> <span>Thêm vào giỏ</span></a>
                                                </div>

                                                <div class="compare"><a class="tooltip-1" title="" onclick="compare.add('<?php echo $product['product_id'];?>');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So sánh sản phẩm</span></a></div>
                                                <div class="wishlist"><a class="tooltip-1" title="" onclick="addToWishList('36');" data-original-title="Add to Wish List"><i class="icon-star"></i><span>Wish List</span></a></div>
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
                </aside>
                <script type="text/javascript">
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
                                }

                                if (json['success']) {
                                    $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<span><i class="icon-remove-sign"></i></span></div>');

                                    $('.success').fadeIn('slow');

                                    $('#cart-total').html(json['total']);
                                    //$('#cart-total2').html(json['total']);

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
                    //$('#tabs a').tabs();
                    //-->
                </script>
                
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>