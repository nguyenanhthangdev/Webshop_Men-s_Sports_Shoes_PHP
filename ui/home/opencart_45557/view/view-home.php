<SECTION>
                    <DIV class="header-modules">
                        <DIV class="container">
                            <DIV class="row">
                                <DIV class="span12">
                                    <SCRIPT>
                                        jQuery(function() {
                                            jQuery('#camera_wrap_0').camera({
                                                fx: 'stampede',
                                                navigation: false,
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
                                                height: '28.29%',
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
                                    <DIV class="fluid_container">
                                        <DIV id="camera_wrap_0">
                                        	<?php foreach (banner_imageActives() as $banner) { ?>
                                            <DIV title="" data-src="<?php echo $banner['url_image_resized']?>" data-thumb="<?php echo $banner['url_image_resized']?>">
                                                
                                                
                                                <DIV class="camera_caption fadeIn">
                                                    <H1><?php echo $banner['title']?></H1>
                                                    <P><?php echo $banner['description'];?></P>
                                                    <A href="<?php echo $banner['link'];?>">Shop now!<I class="icon-chevron-sign-right"></I></A> 
                                                </DIV>
                                                
                                                
                                            </DIV>
                                            <?php } ?>
                                        </DIV>
                                        <DIV class="clear"></DIV>
                                    </DIV>
                                    <DIV class="banner row" id="banner0">
                                    
                                    <?php foreach (categoryFeatureds() as $category) { ?>
										<DIV class="span4">
                                            <IMG title="" alt="" src="<?php echo $category['thumb']; ?>">
                                            <DIV class="s-desc">
                                                <!-- 
                                                <H1>01</H1>
                                                <H2>Bronze
                                                    <SPAN><?php echo $category['name']; ?></SPAN>
                                                </H2>
                                                 -->
                                                 
                                                <H2><span><?php echo $category['name']; ?></span></H2>
                                                <P>
                                                	<?php echo $category['description']?>
                                                </P>
                                                <A href="<?php echo $category['href']; ?>">Shopping!</A>
                                            </DIV>
                                        </DIV>
										<?php } ?>
                                    
                                        
                                        
                                    </DIV>
                                </DIV>
                                <DIV class="clear"></DIV>
                            </DIV>
                        </DIV>
                    </DIV>
                    <DIV class="clear"></DIV>
                    <DIV id="container">
                        <P id="back-top">
                            <A href="https://livedemo00.template-help.com/opencart_45557/#top"><SPAN></SPAN></A>
                        </P>
                        <DIV class="container">
                            <DIV id="notification"></DIV>
                            <DIV class="row">
                                <DIV class="span12">
                                    <DIV class="row">
                                        <DIV class="  span12 " id="content">
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
                                                            })
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
                                                <DIV class="box-heading">Featured Products</DIV>
                                                <DIV class="box-content">
                                                    <DIV class="box-product">
                                                        <UL class="row">
                                                        	<?php $i=0;?>
                                                            <?php foreach(productFeatureds() as $product ) {?> 	
															<LI class="<?php if($i%4==0) echo 'first-inline'; elseif($i%4==3) echo 'last-in-line'?> span3">
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
                                                                    <A href="<?php echo $product['href']?>">
                                                                        <IMG id="img_44" alt="<?php echo $product['name']?>" src="<?php echo $product['thumb']?>">
                                                                    </A>
                                                                </DIV>
                                                                <DIV style="display: none;">
                                                                    <DIV class="quick-view<?php echo $product['product_id'];?> preview">
                                                                        <DIV class="wrapper marg row-fluid">
                                                                            <DIV class="left span4">
                                                                                <DIV class="image3">
                                                                                    <A href="<?php echo $product['href'] ?>">
                                                                                        <IMG alt="<?php echo $product['name']?>" src="<?php echo $product['thumb']?>">
                                                                                    </A>
                                                                                </DIV>
                                                                            </DIV>
                                                                            <DIV class="right span8">
                                                                                <H2><?php echo $product['name']?></H2>
                                                                                <DIV class="inf">
                                                                                    <SPAN class="manufacture">Brand: <A href="<?php echo $product['href_man']?>"><?php echo $product['manufacturer']?></A></SPAN>
                                                                                    <SPAN class="model">Model:<?php echo $product['model'];?></SPAN>
                                                                                    <SPAN class="prod-stock-2">Tình trạng kho hàng:</SPAN>
                                                                                    <SPAN class="prod-stock"><?php echo $product['availability']?></SPAN>
                                                                                    <DIV class="price">
                                                                                        <SPAN class="text-price">Giá: </SPAN><?php echo $product['price']?>
                                                                                    </DIV>
                                                                                </DIV>
                                                                                <DIV class="cart-button">
                                                                                    <DIV class="cart">
                                                                                        <A onclick="cart.add('<?php echo $product['product_id']?>');" title="Add to cart" class="button addToCart-1 " data-id="44;"><SPAN>Thêm vào giỏ</SPAN> </A> </DIV>
                                                                                    <DIV class="wishlist">
                                                                                        <A title="Add to Wish List" class="tooltip-1" onclick="addToWishList('44');"><I class="icon-star"></I> <SPAN>Add to Wish List</SPAN> </A>
                                                                                    </DIV>
                                                                                    <DIV class="compare">
                                                                                        <A title="So Sánh Sản Phẩm" class="tooltip-1" onclick="compare.add('<?php echo $product['product_id']?>');"><I class="icon-bar-chart"></I> <SPAN>So Sánh Sản Phẩm</SPAN> </A>
                                                                                    </DIV>
                                                                                    <SPAN class="clear"></SPAN>
                                                                                </DIV>
                                                                                <DIV class="clear"></DIV>
                                                                                <DIV class="rating">
                                                                                    <IMG height="18" alt="0" src="/ui/home/<?php echo $home_themes;?>/template_files/stars-0.png">
                                                                                </DIV>
                                                                            </DIV>
                                                                        </DIV>
                                                                        <DIV class="description">
                                                                            <?php echo $product['desc_short'];?>
                                                                        </DIV>
                                                                    </DIV>
                                                                </DIV>
                                                                <A class="colorbox1 quick-view-button" href="<?php echo $product['href'] ?>" rel="colorbox"><I class=" icon-search "></I></A>
                                                                <DIV class="inner">
                                                                    <DIV class="f-left">
                                                                        <DIV class="name maxheight-feat">
                                                                            <A href="<?php echo $product['href'] ?>"><?php echo $product['name'];?></A>
                                                                        </DIV>
                                                                        <DIV class="description"><?php echo $product['desc_short'];?></DIV>
                                                                        <DIV class="price"><?php echo $product['price'];?></DIV>
                                                                    </DIV>
                                                                    <DIV class="cart-button">
                                                                        <DIV class="cart">
                                                                            <A onclick="cart.add('<?php echo $product['product_id'];?>');" title="Add to cart" class="button addToCart" data-id="44;"><SPAN><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</SPAN></A>
                                                                        </DIV>
                                                                        <SPAN class="clear"></SPAN>
                                                                    </DIV>
                                                                    <DIV class="clear"></DIV>
                                                                </DIV>
                                                                <DIV class="clear"></DIV>
                                                            </LI>
															<?php } //đóng for ?>
                                                        </UL>
                                                    </DIV>
                                                    <DIV class="clear"></DIV>
                                                </DIV>
                                            </DIV>
                                            <DIV class="clear"></DIV>
                                            <DIV class="wrapper">
                                                <DIV id="carousel0">
                                                    <UL class="jcarousel-skin-opencart"></UL>
                                                </DIV>
                                            </DIV>
                                            <SCRIPT type="text/javascript">
                                                <!--
                                                $('#carousel0 ul').jcarousel({
                                                    vertical: false,
                                                    visible: 5,
                                                    scroll: 3
                                                });
                                                //-->
                                            </SCRIPT>

                                            <H1 style="display: none;">Hosting</H1>
                                        </DIV>
                                    </DIV>
                                </DIV>
                                <DIV class="clear"></DIV>
                            </DIV>
                        </DIV>
                    </DIV>
                    <DIV class="clear"></DIV>
                </SECTION>