<section>
    <div class="header-modules">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <script>
                        jQuery(function() {
                            jQuery('#camera_wrap_0').camera({
                                fx: 'stampede',
                                navigation: true,
                                navigationHover: false,
                                playPause: false,
                                thumbnails: false,
                                barPosition: 'top',
                                loader: false,
                                time: 3000,
                                transPeriod: 800,
                                alignment: 'center',
                                autoAdvance: true,
                                mobileAutoAdvance: true,
                                barDirection: 'leftToRight',
                                barPosition: 'bottom',
                                easing: 'easeInOutExpo',
                                fx: 'simpleFade',
                                height: '32.13%',
                                minHeight: '90px',
                                hover: true,
                                pagination: false,
                                loaderColor: '#1f1f1f',
                                loaderBgColor: 'transparent',
                                loaderOpacity: 1,
                                loaderPadding: 0,
                                loaderStroke: 3
                            });
                        });
                    </script>

                    <!-- slide show o day-->
                    <div class="fluid_container">
                            <div id="camera_wrap_0" class="camera_wrap" style="display: block; height: 519px;">

								<?php foreach (banner_imageActives() as $banner) { ?>
                                <div title="slide-no" data-src="<?php echo $banner['url_image_resized']; ?>" 
                                     data-link="<?php echo $banner['link']; ?>" 
                                     data-thumb="<?php echo $banner['url_image_resized']; ?>">
                                </div>
                                <?php } ?>
                            </div>
                            <div class="clear"></div>
                    </div>
                    
                    <div class="banner" id="banner0">
                        <div>
                            <a href="#">
                                <img title="" alt="" src="/ui/home/<?php echo $home_themes;?>/template_files/banner-1-389x136.jpg">
                                <div class="s-desc">
                                    <h1>Giao Hàng Free</h1>
                                    <h2>cho đơn hàng trên $99 </h2>This offer is valid on all our store items.
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img title="" alt="" src="/ui/home/<?php echo $home_themes;?>/template_files/banner-3-389x136.jpg">
                                <div class="s-desc">
                                    <h1 class="top-1">Gửi <span>quà</span></h1>Chọn một trong các sản phẩm của chúng tôi</div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img title="" alt="" src="/ui/home/<?php echo $home_themes;?>/template_files/banner-2-389x136.jpg">
                                <div class="s-desc">
                                    <h1>Giảm Giá</h1>
                                    <h2>Lên đến 50%</h2>Miến phí giao hàng</div>
                            </a>
                        </div>
                    </div>
                     
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="container">
        <p style="display: none;" id="back-top">
            <a href="https://livedemo00.template-help.com/opencart_45570/#top"><span></span></a>
        </p>
        <div class="container">
            <div id="notification"></div>
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="  span12 " id="content">
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
                                            });
                                        }
                                    })(jQuery)
                                    $(window).load(function() {
                                        if ($(".maxheight-feat").length) {
                                            $(".maxheight-feat").equalHeights()
                                        }
                                    });
                                };
                            </script>

                            <div class="box featured">
                                <div class="box-heading">Sản Phẩm Nổi Bật</div>
                                <div class="box-content">
                                    <div class="box-product">
                                        <ul class="row">
                                        
                                        <!-- for mo' -->
                                        <?php foreach(productFeatureds() as $product ) { // mở for ?>
                                            <li class="first-in-line span3">
                                                <script type="text/javascript">
                                                    $(document).ready(function() {
                                                        $("a.colorbox<?php echo $product['product_id'];?>").colorbox({
                                                            rel: 'colorbox',
                                                            inline: true,
                                                            html: true,
                                                            width: '58%',
                                                            maxWidth: '780px',
                                                            height: '70%',
                                                            opacity: 0.6,
                                                            open: false,
                                                            returnFocus: false,
                                                            fixed: false,
                                                            title: false,
                                                            href: '.quick-view<?php echo $product['product_id'];?>',
                                                            current: 'Product {current} of {total}'
                                                        });
                                                    });
                                                </script>

                                                <div class="image2">
                                                    <a href="<?php echo $product['href'];?>">
                                                        <img id="img_43" alt="<?php echo $product['name'];?>" src="<?php echo $product['thumb'];?>">
                                                    </a>
                                                </div>
                                                <div style="display: none;">
                                                    <div class="quick-view<?php echo $product['product_id'];?> preview">
                                                        <div class="wrapper marg row-fluid">
                                                            <div class="left span4">
                                                                <div class="image3">
                                                                    <a href="<?php echo $product['href']?>">
                                                                        <img alt="<?php echo $product['name'];?>" src="<?php echo $product['thumb']?>">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="right span8">
                                                                <h2><?php echo $product['name'];?></h2>
                                                                <div class="inf">
                                                                    <span class="manufacture">Thương hiệu: <a href="<?php echo $product['manufacturer_href']?> "><?php echo $product['manufacturer']?> 
  enim ad minim</a></span>
                                                                    <span class="model">Model:<?php echo $product['model'];?></span>
                                                                    <span class="prod-stock-2">Tình trạng kho hàng:</span>
                                                                    <span class="prod-stock"><?php echo $product['availability']?>
  Stock</span>
                                                                    <div class="price">
                                                                        <span class="text-price">Giá: </span>
                                                                        <span class="price-new"><?php echo $product['price'];?></span>
                                                                        <!-- <span class="price-old">$589.50</span> -->
                                                                    </div>
                                                                </div>
                                                                <div class="cart-button">
                                                                    <div class="cart">
                                                                        <a onclick="cart.add('<?php echo $product['product_id'];?>')" title="Add to cart" class="button addToCart-1 " data-id="43;"><span>Thêm vào giỏ</span> </a> 
                                                                    </div>
                                                                    <div class="wishlist">
                                                                        <a data-original-title="Add to Wish List" title="" class="tooltip-1" onclick="addToWishList('43');"><i class="icon-star"></i> <span>Add to Wish List</span> </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a data-original-title="So Sánh Sản Phẩm" title="" class="tooltip-1" onclick="compare.add('<?php echo $product['product_id']?>');"><i class="icon-bar-chart"></i> <span>So Sánh</span> </a>
                                                                    </div>
                                                                    <span class="clear"></span>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="rating">
                                                                    <img alt="0" src="/ui/home/<?php echo $home_themes;?>/template_files/stars-0.png" height="18">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="description">
                                                            <div class="std">
                                                                <?php echo $product['description'];?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="colorbox<?php echo $product['product_id'];?> quick-view-button cboxElement" href="<?php echo $product['product_id']?>" rel="colorbox"><i class=" icon-search "></i></a>
                                                <div class="inner">
                                                    <div class="f-left">
                                                        <div style="height: 48px;" class="name maxheight-feat">
                                                            <a href="<?php echo $product['href']?>"><?php echo $product['name'];?></a>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new"><?php echo $product['price'];?></span>
                                                            <!-- <span class="price-old">$589.50</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="cart-button">
                                                        <div class="cart">
                                                            <a onclick="cart.add(<?php echo $product['product_id'];?>);" title="Add to cart" class="button addToCart" data-id="<?php echo $product['product_id'];?>;"><i class="icon-shopping-cart"></i><span>Thêm vào giỏ</span></a>
                                                        </div>
                                                        <div class="compare">
                                                                        <a data-original-title="So Sánh Sản Phẩm" title="" class="tooltip-1" onclick="compare.add('<?php echo $product['product_id']?>');"><i class="icon-bar-chart"></i> <span>So Sánh</span> </a>
                                                        </div>
                                                        <span class="clear"></span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </li>
                                            <!-- ket thuc san pham dau tien --->
                                            
                                            <!-- for dong -->
                                            <?php } // đóng for ?>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="wrapper">
                                <div id="carousel0">
                                    <div class=" jcarousel-skin-opencart">
                                        <div style="position: relative; display: block;" class="jcarousel-container jcarousel-container-horizontal">
                                            <div style="position: relative;" class="jcarousel-clip jcarousel-clip-horizontal">
                                                <ul style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 13888px;" class="jcarousel-list jcarousel-list-horizontal">
                                                    <li jcarouselindex="1" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="2" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="3" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="4" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="5" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-5-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="6" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-6 jcarousel-item-6-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="7" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-7 jcarousel-item-7-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="8" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-8 jcarousel-item-8-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="9" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-9 jcarousel-item-9-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="10" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-10 jcarousel-item-10-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="11" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-11 jcarousel-item-11-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="12" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-12 jcarousel-item-12-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="13" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-13 jcarousel-item-13-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="14" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-14 jcarousel-item-14-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="15" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-15 jcarousel-item-15-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="16" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-16 jcarousel-item-16-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="17" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-17 jcarousel-item-17-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="18" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-18 jcarousel-item-18-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="19" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-19 jcarousel-item-19-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="20" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-20 jcarousel-item-20-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="21" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-21 jcarousel-item-21-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="22" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-22 jcarousel-item-22-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="23" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-23 jcarousel-item-23-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="24" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-24 jcarousel-item-24-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="25" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-25 jcarousel-item-25-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="26" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-26 jcarousel-item-26-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="27" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-27 jcarousel-item-27-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="28" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-28 jcarousel-item-28-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="29" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-29 jcarousel-item-29-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="30" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-30 jcarousel-item-30-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="31" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-31 jcarousel-item-31-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="32" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-32 jcarousel-item-32-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="33" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-33 jcarousel-item-33-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="34" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-34 jcarousel-item-34-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="35" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-35 jcarousel-item-35-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="36" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-36 jcarousel-item-36-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="37" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-37 jcarousel-item-37-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="38" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-38 jcarousel-item-38-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="39" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-39 jcarousel-item-39-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="40" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-40 jcarousel-item-40-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="41" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-41 jcarousel-item-41-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="42" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-42 jcarousel-item-42-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="43" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-43 jcarousel-item-43-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="44" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-44 jcarousel-item-44-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="45" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-45 jcarousel-item-45-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="46" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-46 jcarousel-item-46-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="47" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-47 jcarousel-item-47-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="48" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-48 jcarousel-item-48-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="49" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-49 jcarousel-item-49-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="50" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-50 jcarousel-item-50-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="51" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-51 jcarousel-item-51-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="52" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-52 jcarousel-item-52-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="53" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-53 jcarousel-item-53-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="54" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-54 jcarousel-item-54-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="55" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-55 jcarousel-item-55-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="56" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-56 jcarousel-item-56-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="57" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-57 jcarousel-item-57-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="58" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-58 jcarousel-item-58-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="59" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-59 jcarousel-item-59-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="60" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-60 jcarousel-item-60-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="61" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-61 jcarousel-item-61-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="62" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-62 jcarousel-item-62-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="63" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-63 jcarousel-item-63-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                    <li jcarouselindex="64" style="float: left; list-style: none outside none; width: 200px;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-64 jcarousel-item-64-horizontal jcarousel-item-placeholder jcarousel-item-placeholder-horizontal"></li>
                                                </ul>
                                            </div>
                                            <div disabled="disabled" style="display: block;" class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal"></div>
                                            <div style="display: block;" class="jcarousel-next jcarousel-next-horizontal"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                <!--
                                $('#carousel0 ul').jcarousel({
                                    vertical: false,
                                    visible: 5,
                                    scroll: 3
                                });
                                //-->
                            </script>

                            <h1 style="display: none;">Electro </h1>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>