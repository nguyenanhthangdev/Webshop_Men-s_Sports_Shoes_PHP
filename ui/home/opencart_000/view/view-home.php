<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12">
            <div id="slideshow0" class="flexslider">
             	<ul class="slides" style="width: 400%; transition-duration: 0.6s; transform: translate3d(-px, 0px, 0px);">
                <?php foreach (banner_imageActives() as $banner) { ?>
					<li style="width: 1132px; float: left; display: block;">
						<?php if ($banner['link']) { ?>
						<a href="<?php echo $banner['link']; ?>">
							<img src="<?php echo $banner['url_image_resized']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
						</a>
						<?php } else { ?>
						<img src="" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
						<?php } ?>
					
					</li>
				<?php } ?>
            	</ul>
            </div>
            <script type="text/javascript">
                $('#slideshow0').flexslider({
                    animation: 'slide',
                    animationLoop: true,
                    itemWidth: 1140
                });
            </script>
            
            <!-- START LOẠI SẢN PHẨM NỔI BẬT -->
            <h2>Danh Mục Nổi Bật</h2>
		    <div class="row"  style="border-bottom: #ddd solid 1px; background-color: white;">
		    	<?php foreach (categoryFeatureds( ['width'=>200,'height'=>160, 'limit'=>settings('categories_featured_limit')] ) as $category) { ?>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="text-align: center;">
					<a href="<?php echo $category['href']; ?>">
					<img src="<?php echo $category['url_image_resized']; ?>" alt="banner-3" title="banner-3" width="<?php echo $category['width']?>" height="<?php echo $category['height']?>" style="transition: all 0.5s ease;z-index: -100">
					<div class="s-desc">
						<h1><?php /*echo $category['name'];*/ ?></h1>
					</div>
					</a>
				</div>
				<?php } ?>
		    </div>
		    <!-- END LOẠI SẢN PHẨM GIỚI THIỆU -->

<!-- **************************************Hàm dùng để định dạng lại tiền********************* -->
   
<!-- *****************************************************************************************		     -->
		   
        <!-- START SẢN PHẨM NỔI BẬT -->
		    <h2>Sản Phẩm Nổi Bật</h2>
            <div class="row product-layout">
			    <?php foreach (productFeatureds(['width'=>261, 'height'=>261, 'limit'=>settings('products_featured_limit')]) as $product) { ?>                
                <div class="col-lg-3 col-md-3 col-xl-4 col-sm-4 col-xs-6 product-layout-info">
                    <a href="<?php echo $product['href']; ?>">
                    <div class="product-thumb transition">
                        <div class="image">

<!-- ***************************************************************************************************** -->
                                <?php if($product['new'] != 0) { ?>
                                    <div class="product-new">
                                        <span>New</span>
                                    </div>
                                <?php } ?>

                                
                                <?php if($product['sale'] != 0) { ?>
                                    <div class="product-sale">
                                        <span class="wdp-ribbon wdp-ribbon-six"><span class="wdp-ribbon-inner-wrap"><span class="wdp-ribbon-border"></span><span class="wdp-ribbon-text">
                                            <?php echo "-". $product['sale'] . "%" ; ?>
                                        </span></span>
                                    </div>
                                <?php } ?>
                        
<!-- ***************************************************************************************************** -->
                            
                            	<img width="100%" height="100%" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive">
                            
                        </div>
                        
                        <div class="caption">
                            <h4 style=" overflow: hidden; text-overflow: clip; height:38px; line-height: 19px;"><?php echo $product['name']; ?></h4>
                            <div class="price">
                                <?php if( (int)$product['size_or_nosize'] == 1) { ?>
                                    <?php if($product['sale'] != 0) { ?>
                                        <?php if(max($product['price']) == min($product['price'])) { ?>
                                            <span class="price-new" style="font-size: 16px;"><del><?php echo currency_format( (int)$product['price'][0]); ?></del></span> 
                                            <br>
                                            <span class="price-new" style="color: orange; font-size: 16px;"><?php echo currency_format( (int)$product['price'][0] - ((int)$product['price'][0] * ((int)$product['sale']/100))); ?></span>
                                        <?php } ?>
                                        <?php if(max($product['price']) != min($product['price'])) { ?>
                                            <span class="price-new" style="font-size: 16px;"><del><?php echo currency_format(min($product['price'])) ."-". currency_format(max($product['price'])); ?></del></span> 
                                            <br>
                                            <span class="price-new" style="color: orange; font-size: 16px;"><?php echo currency_format(min($product['price']) - ((int)min($product['price']) * ((int)$product['sale']/100))) ."-". currency_format(max($product['price']) - ((int)max($product['price']) * ((int)$product['sale']/100))) ?></span>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php if($product['sale'] == 0) { ?>
                                        <?php if(max($product['price']) == min($product['price'])) { ?>
                                            <span class="price-new" style="color: orange; font-size: 16px;"><?php echo currency_format( (int)$product['price'][0]); ?></span> 
                                        <?php } ?>
                                        <?php if(max($product['price']) != min($product['price'])) { ?>
                                            <span class="price-new" style="color: orange; font-size: 16px;"><?php echo currency_format(min($product['price'])) ."-". currency_format(max($product['price'])); ?></span> 
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                                <?php if( (int)$product['size_or_nosize'] == 0) { ?>
                                    <?php if($product['sale'] != 0) { ?>
                                        <span class="price-new" style="font-size: 16px;"><del><?php echo currency_format((int)$product['price']); ?></del></span> 
                                        <br>
                                        <span class="price-new" style="color: orange; font-size: 16px;"><?php echo currency_format((int)$product['price'] - (int)$product['price']*((int)$product['sale']/100)); ?></span>
                                    <?php } ?>
                                    <?php if($product['sale'] == 0) { ?>
                                        <span class="price-new" style="color: orange; font-size: 16px;"><?php echo currency_format((int)$product['price']); ?></span> 
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php }  ?>
            </div>
			
			<h2>Nhãn Hàng Nổi Bật</h2>
             <!-- SLIDE SHOW ẢNH LOGO CÁC HÃNG SẢN XUẤT -->
             <div id="carousel0" class="flexslider carousel">
                    <ul class="slides" style="width: 100%; transition-duration: 0.6s; transform: translate3d(-1540px, 0px, 0px);">
                        
                        <?php foreach (manufacturerFeatureds(['width'=>120, 'height'=>120, 'limit'=>settings('manufacturers_featured_limit')]) as $manufacturer) { ?>
                        <li style="width: 208px; float: left; display: block;">
						    <a href="<?php echo $manufacturer['href']; ?>">
						    	<img src="<?php echo $manufacturer['thumb']; ?>" alt="<?php echo $manufacturer['name']; ?>" class="img-responsive" draggable="false" />
						    </a>
						 </li>
						 <?php } ?>
                    </ul>
            </div>
            
            <script type="text/javascript">
                $(window).load(function() {
                    $('#carousel0').flexslider({
                        animation: 'slide',
                        itemWidth: 130,
                        itemMargin: 100,
                        minItems: 3,
                        maxItems: 4
                    });
                });
            </script>
            
            <!-- Google Map 
			<div style="height: 450px;position: relative; background-color: rgb(229, 227, 223); overflow: hidden;" id="google-map" class="col-sm-12">
			</div>
			-->
			<!-- Tham khảo cách nhúng bản đồ Google Map vào html
			https://support.google.com/maps/answer/144361?hl=vi&co=GENIE.Platform%3DDesktop
			 -->
        </div>
    </div>
</div>
