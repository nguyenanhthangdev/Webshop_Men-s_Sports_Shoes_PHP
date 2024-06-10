<DIV id="container">
    <DIV class="container">
        <DIV class="row">
            <DIV class="col-sm-12" id="content">
                <SCRIPT>
                    jQuery(function() {
                        jQuery('#camera_wrap_0').camera({
                            navigation: true,
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
                            height: '42.63%',
                            minHeight: '90px',
                            hover: true,
                            pagination: false,
                            loaderColor: '#1f1f1f',
                            loaderBgColor: 'transparent',
                            loaderOpacity: 1,
                            loaderPadding: 0,
                            loaderStroke: 3,
                        });
                    });
                </SCRIPT>

                <DIV class="fluid_container">
                    <DIV class="camera_container">
                        <DIV id="camera_wrap_0">
                            <?php foreach (banner_imageActives() as $banner) { ?>
                                <div title="slide-no" data-src="<?php echo $banner['url_image_resized']; ?>" data-link="<?php echo $banner['link']; ?>" data-thumb="<?php echo $banner['url_image_resized']; ?>">
                                </div>
                                <DIV title="slide-1" data-src="<?php echo $banner['url_image_resized']; ?>" data-thumb="<?php echo $banner['url_image_resized']; ?>">

                                    <DIV class="camera_caption fadeIn">
                                        <H2><?php echo $banner['title']; ?></H2>
                                        <p><?php echo $banner['description']; ?></p>
                                        <!-- 
                                            <P>Retina HD display
                                                <BR>1920 x 1080
                                                <BR>Resolution: 326 PPI
                                            </P>
                                            -->
                                        <P class="slide-price">Giá <?php echo $banner['price']; ?></P>
                                        <A class="btn" href="<?php echo $banner['link']; ?>">Mua ngay!</A>
                                    </DIV>

                                </DIV>
                            <?php } ?>



                        </DIV>
                    </DIV>
                    <DIV class="clear"></DIV>
                </DIV>
                <DIV class="banners row" id="banner0">

                    <!-- for start-->
                    <?php foreach (categoryFeatureds() as $category) { ?>
                        <DIV class="col-sm-4 banner-1">
                            <DIV class="banner-box" style="min-height: 250px;">
                                <IMG class="img-responsive" alt="banner-1" src="<?php echo $category['thumb']; ?>">
                                <DIV class="s-desc">
                                    <H3><?php echo $category['name']; ?></H3>
                                    <P><?php echo $category['description']; ?></P>
                                    <A class="btn btn-home" href="<?php echo $category['href']; ?>">Shop now!</A>
                                </DIV>
                                <br style="clear:both"/>
                            </DIV>
                            
                        </DIV>
                    <?php } ?>
                    <!-- for end -->

                </DIV>
                
                <DIV class="box featured">
                    <DIV class="box-heading">
                        <H3>Sản Phẩm Nổi Bật</H3> <!-- <H3>Featured</H3> -->
                    </DIV>
                    <DIV class="box-content">
                        <DIV class="row ">
                            <!-- foreach start -->
                            <?php foreach (productFeatureds() as $product) { //mở for 
                            ?>
                                <DIV class="product-layout col-sm-3 col-lg-3 col-md-3">
                                    <DIV class="product-thumb transition">
                                        <DIV class="quick_info">
                                            <DIV class="quickview-style" id="quickview_featured_<?php echo $product['product_id']; ?>">
                                                <DIV>
                                                    <DIV class="left col-sm-4">
                                                        <DIV class="quickview_image image">
                                                            <A href="<?php echo $product['href']; ?>"><IMG title="<?php echo $product['name'] ?>" class="img-responsive" alt="<?php echo $product['name'] ?>" src="<?php echo $product['thumb'] ?>"></A>
                                                        </DIV>
                                                    </DIV>
                                                    <DIV class="right col-sm-8">
                                                        <H2><?php echo $product['name'] ?></H2>
                                                        <DIV class="inf">
                                                            <P class="quickview_manufacture manufacture manufacture">Brand:
                                                                <A href="<?php echo $product['manufacturer'] ?>">Apple</A>
                                                            </P>
                                                            <P class="product_model model">Model: <?php echo $product['model'] ?></P>
                                                            <DIV class="price"><?php echo $product['price']; ?></DIV>
                                                        </DIV>
                                                        <DIV class="cart-button">
                                                            <BUTTON title="Thêm vào giỏ" class="btn btn-add" onclick="cart.add('<?php echo $product['product_id']; ?>');" type="button" data-toggle="tooltip">
                                                                <I class="fa fa-shopping-cart"></I>
                                                            </BUTTON>
                                                            <!-- 
	                                                                <BUTTON title="Add to Wish List" class="btn btn-icon" onclick="wishlist.add('35');" type="button" data-toggle="tooltip">
	                                                                    <I class="fa fa-heart"></I>
	                                                                </BUTTON>
	                                                                -->
                                                            <BUTTON title="So Sánh Sản Phẩm" class="btn btn-icon" onclick="compare.add('35');" type="button" data-toggle="tooltip">
                                                                <I class="fa fa-exchange"></I>
                                                            </BUTTON>
                                                        </DIV>
                                                        <DIV class="clear"></DIV>
                                                        <DIV class="rating">
                                                            <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I><I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                            <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I><I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                            <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I><I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                            <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I><I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                            <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I><I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                        </DIV>
                                                    </DIV>
                                                    <DIV class="col-sm-12">
                                                        <DIV class="quickview_description description">
                                                            <?php echo $product['description']; ?>
                                                        </DIV>
                                                    </DIV>
                                                </DIV>
                                            </DIV>
                                        </DIV>
                                        <DIV class="image">
                                            <A class="lazy" style="padding-bottom: 77.27%;" href="<?php echo $product['href']; ?>"><IMG title="<?php echo $product['name'] ?>" class="img-responsive" alt="<?php echo $product['name'] ?>" src="<?php echo $product['thumb']; ?>" data-src="<?php echo $product['thumb']; ?>"></A>
                                        </DIV>
                                        <DIV class="caption">
                                            <DIV class="price"><?php echo $product['price']; ?></DIV>
                                            <DIV class="name">
                                                <A href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></A>
                                            </DIV>
                                            <DIV class="description"><?php echo $product['desc_short']; ?></DIV>
                                            <DIV class="cart-button">
                                                <BUTTON title="Thêm vào giỏ" class="btn product-btn product-btn-add" onclick="cart.add('<?php echo $product['product_id']; ?>');" type="button">
                                                    <I class="fa fa-shopping-cart"></I>
                                                </BUTTON>
                                                <A title="Xem Nhanh" class="quickview quickview-latest btn" href="#quickview_featured_<?php echo $product['product_id']; ?>" rel="group"><I class="fa fa-search hidden-lg"></I> <SPAN class="visible-lg">
                                                        Xem Nhanh</SPAN></A>
                                            </DIV>
                                            <DIV class="rating">
                                                <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I> <I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I>
                                                    <I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I> <I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I>
                                                    <I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                                <SPAN class="fa fa-stack"><I class="fa fa-star fa-stack-2x"></I> <I class="fa fa-star-o fa-stack-2x"></I></SPAN>
                                            </DIV>
                                            <DIV class="hover-buttons">
                                                <!-- 
	                                                    <DIV>
	                                                        <BUTTON title="Add to Wish List" onclick="wishlist.add('35');" type="button">
	                                                            <I class="fa fa-heart-o"></I>
	                                                            <SPAN>Add to Wish List</SPAN>
	                                                        </BUTTON>
	                                                    </DIV>
	                                                    -->
                                                <DIV>
                                                    <BUTTON title="So Sánh Sản Phẩm" onclick="compare.add('35');" type="button">
                                                        <I class="fa fa-signal"></I>
                                                        <SPAN>So Sánh Sản Phẩm</SPAN>
                                                    </BUTTON>
                                                </DIV>
                                            </DIV>
                                        </DIV>
                                    </DIV>
                                </DIV>
                            <?php } //đóng for 
                            ?>
                            <!-- foreach end -->
                        </DIV>
                    </DIV>
                </DIV>
                <DIV class="box_html terms">
                    <DIV class="row">
                        <DIV class="col-sm-4">
                            <DIV class="box-bg">
                                <H4>Đổi Trả Hàng</H4>
                                <P>Trong vòng 14 ngày</P>
                                <A class="btn btn-home" href="#">Chi tiết... </A>
                            </DIV>
                        </DIV>
                        <DIV class="col-sm-4">
                            <DIV class="box-bg">
                                <H4>Miễn Phí Ship</H4>
                                <P>với đơn hàng trên 2 tr</P>
                                <A class="btn btn-home" href="#">Chi tiết...</A>
                            </DIV>
                        </DIV>
                        <DIV class="col-sm-4">
                            <DIV class="box-bg">
                                <H4>Thanh Toán</H4>
                                <P>Giao hàng nhận tiền</P>
                                <A class="btn btn-home" href="#">Chi tiết...</A>
                            </DIV>
                        </DIV>
                    </DIV>
                </DIV>
            </DIV>
        </DIV>
    </DIV>
</DIV>

<DIV class="container">
    <DIV class="content_bottom">
        <DIV class="map">
            <DIV class="map_model" id="google-map" style="width: 100%; height: 349px;" data-draggable="true" data-scrollwheel="false" data-disable-ui="false" data-x=" -73.9400" data-y="40.6700" data-zoom="11"></DIV>
            <UL class="map_locations">
                <LI data-x=" -73.9400" data-y="40.6700">
                    <P> 4578 Marmora Road,Glasgow D04 89GR</P>
                </LI>
            </UL>
        </DIV>
        <SCRIPT>
            var tmp = 1;
            var marker_path = 'http://livedemo00.template-help.com/opencart_53398/image/cache/catalog/marker-54x56.png';
            var marker_active_path = 'http://livedemo00.template-help.com/opencart_53398/image/cache/catalog/marker-54x56.png';
            var styles = [{
                "featureType": "landscape",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 65
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 51
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.highway",
                "stylers": [{
                    "saturation": -100
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.arterial",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 30
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "road.local",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 40
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "transit",
                "stylers": [{
                    "saturation": -100
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "administrative.province",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "lightness": -25
                }, {
                    "saturation": -100
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "hue": "#ffff00"
                }, {
                    "lightness": -25
                }, {
                    "saturation": -97
                }]
            }];
            var type;
            switch (tmp) {
                case 1:
                    type = google.maps.MapTypeId.ROADMAP;
                    break;
                case 2:
                    type = google.maps.MapTypeId.TERRAIN;
                    break;
                case 3:
                    type = google.maps.MapTypeId.HYBRID;
                    break;
                case 4:
                    type = google.maps.MapTypeId.SATELLITE;
                    break;
                default:
                    type = google.maps.MapTypeId.ROADMAP;
            }
            jQuery(document).ready(function($) {
                var o = $('#google-map');
                o.googleMap({
                    marker: {
                        basic: marker_path,
                        active: marker_active_path
                    },
                    type: type,
                    styles: styles
                });
            });
        </SCRIPT>
    </DIV>
</DIV>