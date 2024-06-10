<section>
                    <div class="header-modules">
                        <script>
                            jQuery(function() {
                                jQuery('#camera_wrap_0').camera({
                                    fx: 'stampede',
                                    navigation: false,
                                    playPause: false,
                                    thumbnails: false,
                                    navigationHover: false,
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
                                    height: '36.46%',
                                    minHeight: '90px',
                                    hover: true,
                                    pagination: true,
                                    loaderColor: '#1f1f1f',
                                    loaderBgColor: 'transparent',
                                    loaderOpacity: 1,
                                    loaderPadding: 0,
                                    loaderStroke: 3
                                });
                            });
                        </script>

                        <div class="container">
                            <div id="camera_wrap_0" class="camera_wrap" style="display: block;">

								<?php foreach (banner_imageActives() as $banner) { ?>
                                <div title="slide-no" data-src="<?php echo $banner['url_image_resized']; ?>" 
                                     data-link="<?php echo $banner['link']; ?>" 
                                     data-thumb="<?php echo $banner['url_image_resized']; ?>">
                                     <!-- 
                                	<div class="camera_caption">
                                		<h1><?php echo $banner['title'];?></h1>
                                		<h2><?php echo $banner['sub_title'];?></h2>
                                		<p><?php echo $banner['description']?></p>
                                		<h3>Giá:  <span><?php echo $banner['price'];?></span></h3>
                                		<a href="<?php echo $banner['link'];?>"><span>Mua Hàng</span><i class="fa fa-shopping-cart"></i></a>
                                	</div>
                                	-->
                                </div>
                                <?php } ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div id="container">
                        <p id="back-top" style="display: block;">
                            <a href="#top"><span></span></a>
                        </p>
                        <div class="container">
                            <div id="notification"></div>
                            <div class="row">
                                <div class=" col-sm-12   " id="content">
                                    <div class="banner row" id="banner0">
                                    	<?php foreach (categoryFeatureds() as $category) { ?>
										<div class="col-sm-4">
											<a href="<?php echo $category['href']; ?>">
												<img src="<?php echo $category['thumb']; ?>" alt="banner-3" title="banner-3" width="<?php echo $category['width']?>" height="<?php echo $category['height']?>" style="transition: all 0.5s ease;z-index: -100">
												<div class="s-desc" style="">
													<h1><?php echo $category['name']; ?></h1>
												</div>
											</a>
										</div>
										<?php } ?>
                                        <!-- 
                                        <div class="col-sm-4">
                                            <a href="http://livedemo00.template-help.com/opencart_50677/index.php?route=product/product&amp;product_id=28">
                                                <img title="banner-3" alt="banner-3" src="/web/themes/home/opencart/50677/layout_files/banner-1-370x240.jpg">
                                                <div class="s-desc">
                                                    <h1>Smartphones</h1>
                                                    <h2>dolore ipsum</h2>
                                                    <i class="fa fa-search"></i>
                                                </div>
                                            </a>
                                        </div>
                                         -->
                                        <span class="clear"></span>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="box man">
                                        <div class="box-man">
                                            <ul class="bxslider-man">
                                            	<?php foreach (manufacturerFeatureds() as $manufacturer) { ?>
												<li>
												    <?php if ($manufacturer['link']) { ?>
												    <a href="<?php echo $manufacturer['link'];?>">
												    	<img src="<?php echo $manufacturer['thumb']; ?>" alt="<?php echo $manufacturer['title']; ?>" class="img-responsive" />
												    </a>
												    <?php } else { ?>
												    	<img src="<?php echo $manufacturer['thumb']; ?>" alt="<?php echo $manufacturer['title']; ?>" class="img-responsive" />
												    <?php } ?>
												  </li>
												  <?php } ?>
                                                <!-- 
                                                <li>
                                                    <a href="http://livedemo00.template-help.com/opencart_50677/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">
                                                        <img alt="Dolore sit amet" src="/web/themes/home/opencart/50677/layout_files/man-1.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://livedemo00.template-help.com/opencart_50677/index.php?route=product/manufacturer/info&amp;manufacturer_id=6">
                                                        <img alt="Donec a dolor" src="/web/themes/home/opencart/50677/layout_files/man-2.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://livedemo00.template-help.com/opencart_50677/index.php?route=product/manufacturer/info&amp;manufacturer_id=9">
                                                        <img alt="Labore et dolore" src="/web/themes/home/opencart/50677/layout_files/man-3.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://livedemo00.template-help.com/opencart_50677/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">
                                                        <img alt="Magna lorem ipsum" src="/web/themes/home/opencart/50677/layout_files/man-4.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://livedemo00.template-help.com/opencart_50677/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">
                                                        <img alt="Nulla sit amet justo turpis" src="/web/themes/home/opencart/50677/layout_files/man-5.png">
                                                    </a>
                                                </li>
                                                 -->
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
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
                                                	<!-- 
                                                    	<li class="first-in-line col-sm-3">
                                                    	<li class=" col-sm-3">
                                                        <li class=" col-sm-3">
                                                        <li class="last-in-line col-sm-3">
                                                        
                                                        <li class="first-in-line last_line col-sm-3">
                                                        <li class=" last_line col-sm-3">
                                                        <li class=" last_line col-sm-3">
                                                        <li class="last-in-line last_line col-sm-3">
                                                        @todo: làm thế nào để móc nối chỉ số index với tên lớp.
                                                        chú ý so sánh: $i%4==0, $i%4==3
                                                        
                                                        nó phân biệt ra dòng đầu tiên, dòng cuối cùng,
                                                        phần tử đầu tiên trong mỗi dòng.
                                                        
                                                     -->
                                                    <?php foreach(productFeatureds() as $product ) { ?>
                                                    <li class=" col-sm-3">
                                                        <script type="text/javascript">
                                                            // với mỗi phần tử <a> thuộc lớp colorboxMãSảnPhẩm
                                                            // thì khi bấm vào nó sẽ tương ứng với preview trỏ đến div#quick-viewMãSảnPhẩm
                                                            // Nếu để cho các thẻ <a> này thuộc cùng tên lớp colorbox không thôi
                                                            // thì nó sẽ bị lỗi khi màn hình preview trỏ hết vào cùng một nội dung.
                                                            // tham khảo: http://www.jacklmoore.com/colorbox/
                
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
                                                                                <span class="manufacture">Thương hiệu: <a href="/manufacturer-info.php?manufacturer_id=<?php echo $product['manufacturer_id']?>"><?php echo $product['manufacturer']?></a></span>
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
                                                                                <img height="18" src="/ui/home/<?php echo $home_themes;?>/template_files/stars-0.png" alt="0">
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
                                                                        <a title="Add to cart" data-id="48;" class="button addToCart" onClick="cart.add(<?php echo $product['product_id'];?>)">
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
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </ul>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <h1 style="display: none;">Mobile store</h1>
                                    <div class="content_bottom"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
<script type="text/javascript">
	// chạy slide các nhà sản xuất
	$(document).ready(function(){

		$('.bxslider-man').bxSlider({
			controls: true,
			pager: true
			
		});
// 		$('.bxslider-man').bxSlider({
// 			pager: false,
// 	        controls: true,
// 	        slideMargin: 30,
// 	        minSlides: 4,
// 	        maxSlides: 4,
// 	        slideWidth: 170,
// 	        infiniteLoop: false,
// 	        moveSlides: 1
// 		});
	});
</script>                