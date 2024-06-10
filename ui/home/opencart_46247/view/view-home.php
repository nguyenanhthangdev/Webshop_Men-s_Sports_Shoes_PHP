<SECTION>
                    <DIV class="header-modules">
                        <DIV class="container">
                            <DIV class="row">
                                <SCRIPT>
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
                                            height: '30%',    //'59.885%',
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
                                </SCRIPT>

                                <DIV class="fluid_container span9" style="width: 100%;">
                                    <DIV id="camera_wrap_0">
                                    	
                                    	<?php foreach (banner_imageActives() as $banner) { ?>
		                                <DIV title="" data-src="<?php echo $banner['url_image_resized']; ?>" data-thumb="<?php echo $banner['url_image_resized']; ?>">
                                            <!-- chữ nghĩa thêm vào trên nền slides
                                            <DIV class="camera_caption fadeIn">
                                                <H1><?php echo $banner['title'];?></H1>
                                                <H2><?php echo $banner['sub_title'];?></H2>
                                                <P>
                                                    <B>Specification:</B><?php echo $banner['description'];?></P>
                                                <H3>New price:
                                                    <SPAN><?php echo $banner['price'];?></SPAN>
                                                </H3>
                                                <A href="<?php echo $banner['link'];?>">Shop now</A> 
                                            </DIV>
                                            -->
                                        </DIV>
		                                <?php } ?>
                                    
                                        
                                       
                                        
                                    </DIV>
                                    <DIV class="clear"></DIV>
                                </DIV>
                                <!-- 
                                <DIV class="banner row" id="banner1">
                                    <DIV class="span3">
                                        <A href="#"><IMG title="" alt="" src="/ui/home/46247/template_files/banner-top-270x521.jpg">
										<DIV class="s-desc">Testing</DIV>
										</A>
                                    </DIV>
                                    <DIV class="clear"></DIV>
                                </DIV>
                                -->
                                <DIV class="clear"></DIV>
                            </DIV>
                        </DIV>
                    </DIV>
                    <DIV class="clear"></DIV>
                    <DIV id="container">
                        <P id="back-top">
                            <A href="#/#top"><SPAN></SPAN></A>
                        </P>
                        <DIV class="container">
                            <DIV id="notification"></DIV>
                            <DIV class="row">
                                <DIV class="span12">
                                    <DIV class="row">
                                        <DIV class="  span12 " id="content">
                                            <DIV class="banner row" id="banner0">
                                            	<?php foreach (categoryFeatureds() as $category) { ?>
												<DIV class="span3">
                                                    <A href="#"><IMG title="" alt="" src="<?php echo $category['thumb']?>">
													<DIV class="s-desc">
													<H1><?php echo $category['name']?></H1>
													<SPAN>Shop now!<I class="icon-chevron-right "></I></SPAN>
													</DIV>
													</A>
												</DIV>
												<?php } ?>
                                                <!-- 
                                                <DIV class="span3">
                                                    <A href="#product/product&amp;product_id=28"><IMG title="" alt="" src="/ui/home/<?php echo $home_themes;?>/template_files/banner-1-270x191.jpg">
													<DIV class="s-desc">
													<H1>DJ's</H1>
													<H2>equipment</H2><SPAN>Shop now!<I 
													class="icon-chevron-right "></I></SPAN></DIV></A>
												</DIV>
												<DIV class="span3">
													                                                    <A href="#product/product&amp;product_id=32"><IMG 
													title="" alt="" src="/ui/home/<?php echo $home_themes;?>/template_files/banner-3-270x191.jpg">
													<DIV class="s-desc">
													<H1>Guitar</H1>
													<H2>equipment</H2><SPAN>Shop now!<I 
													class="icon-chevron-right "></I></SPAN></DIV></A>
												</DIV>
												<DIV class="span3">
													                                                    <A href="#product/product&amp;product_id=29"><IMG 
													title="" alt="" src="/ui/home/<?php echo $home_themes;?>/template_files/banner-2-270x191.jpg">
													<DIV class="s-desc">
													<H1>Studio</H1>
													<H2>equipment</H2><SPAN>Shop now!<I 
													class="icon-chevron-right "></I></SPAN></DIV></A>
												</DIV>
												<DIV class="span3">
													                                                    <A href="#product/category&amp;path=24"><IMG 
													title="" alt="" src="/ui/home/<?php echo $home_themes;?>/template_files/banner-4-270x191.jpg">
													<DIV class="s-desc">
													<H1>Drum</H1>
													<H2>equipment</H2><SPAN>Shop now!<I 
													class="icon-chevron-right "></I></SPAN></DIV></A>
                                                </DIV>
                                                 -->
                                                <DIV class="clear"></DIV>
                                            </DIV>
                                            <SCRIPT type="text/javascript">
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
                                            </SCRIPT>

                                            <DIV class="box featured">
                                                <DIV class="box-heading">Sản Phẩm Nổi Bật</DIV>
                                                <DIV class="box-content">
                                                    <DIV class="box-product">
                                                        <UL class="row">
                                                        	<?php $i=0;?>
                                                            <?php foreach(productFeatureds() as $product ) {?>
                                                               
                                                            <LI class="<?php echo ($i%4==0) ? "first-in-line" : "last-in-line"; $i++;?> span3">
                                                                <SCRIPT type="text/javascript">
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
                                                                </SCRIPT>

                                                                <DIV class="image2">
                                                                    <A href="<?php echo $product['href'];?>"><IMG 
  id="img_<?php echo $product['product_id'];?>" alt="<?php echo $product['product_name'];?>" src="<?php echo $product['thumb'];?>"></A>
                                                                </DIV>
                                                                <DIV style="display: none;">
                                                                    <DIV class="quick-view<?php echo $product['product_id'];?> preview">
                                                                        <DIV class="wrapper marg row-fluid">
                                                                            <DIV class="left span4">
                                                                                <DIV class="image<?php echo $product['product_id'];?>">
                                                                                    <A href="<?php echo $product['href'];?>"><IMG alt="<?php echo $product['product_name'];?>" src="<?php echo $product['thumb'];?>"></A>
                                                                                </DIV>
                                                                            </DIV>
                                                                            <DIV class="right span8">
                                                                                <H2><?php echo $product['product_name'];?></H2>
                                                                                <DIV class="inf">
                                                                                    <SPAN class="manufacture">Brand: <A href="/manufacturer-info.php?manufacturer_id=<?php echo $product['manufacturer_id']?>"><?php echo $product['manufacturer']?> </A></SPAN>
                                                                                    <SPAN class="model">Model:<?php echo $product['model']?></SPAN>
                                                                                    <SPAN class="prod-stock-2">Tình Trạng Kho Hàng:</SPAN>
                                                                                    <SPAN class="prod-stock"><?php echo $product['availability']?></SPAN>
                                                                                    <DIV class="price">
                                                                                        <SPAN class="text-price">Giá: </SPAN>
                                                                                        <SPAN class="price-new"><?php echo $product['price']?></SPAN>
                                                                                        <!-- <SPAN class="price-old">$589.50</SPAN> -->
                                                                                    </DIV>
                                                                                </DIV>
                                                                                <DIV class="cart-button">
                                                                                    <DIV class="cart">
                                                                                        <A onclick="cart.add('<?php echo $product['product_id'];?>')" title="Thêm Vào Giỏ" class="button addToCart-1 " data-id="43;"><SPAN>Thêm vào giỏ</SPAN> </A> </DIV>
                                                                                    <DIV class="wishlist">
                                                                                        <A title="Add to Wish List" class="tooltip-1" onclick="alert('Đang xây dựng...');//addToWishList('43');"><I class="icon-star"></I> <SPAN>Add to Wish List</SPAN> </A>
                                                                                    </DIV>
                                                                                    <DIV class="compare">
                                                                                        <A title="So Sánh Sản Phẩm" class="tooltip-1" onclick="compare.add('<?php echo $product['product_id']?>');"><I class="icon-bar-chart"></I> <SPAN>So Sánh Sản Phẩm</SPAN> </A>
                                                                                    </DIV>
                                                                                    <SPAN class="clear"></SPAN>
                                                                                </DIV>
                                                                                <DIV class="clear"></DIV>
                                                                                <!-- 
                                                                                <DIV class="rating">
                                                                                    <IMG height="18" alt="0" src="/ui/home/<?php echo $home_themes;?>/template_files/stars-0.png">
                                                                                </DIV>
                                                                                 -->
                                                                            </DIV>
                                                                        </DIV>
                                                                        <DIV class="description">
                                                                            <?php echo $product['desc_short'];?>
                                                                        </DIV>
                                                                    </DIV>
                                                                </DIV>
                                                                <A class="colorbox<?php echo $product['product_id'];?> quick-view-button" href="<?php echo $product['product_href'];?>" rel="colorbox"><I class=" icon-search "></I></A>
                                                                <DIV class="inner2">
                                                                    <DIV class="f-left">
                                                                        <DIV class="name maxheight-feat">
                                                                            <A href="<?php echo $product['href'];?>"><?php echo $product['name'];?></A>
                                                                        </DIV>
                                                                        <DIV class="price">
                                                                            <SPAN class="price-new"><?php echo $product['price'];?></SPAN> </DIV>
                                                                        <DIV class="description"><?php echo $product['desc_short'];?></DIV>
                                                                    </DIV>
                                                                    <DIV class="inner">
                                                                        <DIV class="cart-button">
                                                                            <DIV class="cart">
                                                                                
                                                                                <A onclick="compare.add('<?php echo $product['product_id']?>');" title="So Sánh Sản Phẩm" class="details tooltip-1" ><I class="icon-bar-chart"></I></A>
                                                                                
                                                                                <A onclick="cart.add('<?php echo $product['product_id'];?>')" title="Add to cart" class="button addToCart" data-id="43;"><I class="icon-shopping-cart"></I><SPAN>Thêm vào giỏ</SPAN></A>
                                                                                
                                                                                
                                                                            </DIV>
                                                                            <SPAN class="clear"></SPAN>
                                                                        </DIV>
                                                                        <DIV class="clear"></DIV>
                                                                    </DIV>
                                                                </DIV>
                                                                <DIV class="clear"></DIV>
                                                            </LI>
                                                            <?php } ?>
                                                        </UL>
                                                    </DIV>
                                                    <DIV class="clear"></DIV>
                                                </DIV>
                                            </DIV>
                                            <H1 style="display: none;">Audio store</H1>
                                        </DIV>
                                    </DIV>
                                </DIV>
                                <DIV class="clear"></DIV>
                            </DIV>
                        </DIV>
                    </DIV>
                    <DIV class="clear"></DIV>
                </SECTION>