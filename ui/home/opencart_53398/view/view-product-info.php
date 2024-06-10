<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12 product_page">
            <ul class="breadcrumb">
                <li>
                    <a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a>
                </li>
                <li>
                    <a href="/product-info.php?product_id=<?php echo $_GET['product_id']; ?>"><?php echo $product_info['name']; ?></a>
                </li>
            </ul>
            <div class="row product-content-columns">

                <div class="col-sm-5 col-lg-7 product_page-left">

                    <div id="default_gallery" class="product-gallery">
                        <div class="image-thumb">
                        	
                            <ul id="image-additional" style="width: auto; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                            <?php foreach ($product_info['product_images'] as $image) { ?>
                            	<li style="float: none; list-style: outside none none; position: relative; width: 88px; margin-bottom: 13px;">
                                	<a href="#" data-image="<?php echo $image['popup']; ?>" data-zoom-image="<?php echo $image['popup']; ?>">
                                    	<img src="<?php echo $image['thumb']; ?>" alt="">
                                    </a>
                                </li>
                            <?php }?>
                                        
                             </ul>
                            
                        </div>
                        <div class="image">
                            <div style="height:561px;width:561px;" class="zoomWrapper">
                            <img id="gallery_zoom" src="<?php echo $product_info['thumb'];?>" data-zoom-image="<?php echo $product_info['popup'];?>" alt="" style="position: absolute;">
                            </div>
                        </div>
                    </div>
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
                                <ul id="gallery" style="width: 615%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                <?php foreach ($product_info['product_images'] as $image) { ?>
                                	<li style="float: left; list-style: outside none none; position: relative; width: 100px;">
                                        <a href="<?php echo $image['popup']?>" data-something="something" data-another-thing="anotherthing"><img src="<?php echo $image['thumb']?>" title="<?php echo $product_info['name'];?>" alt="<?php echo $product_info['name'];?>"></a>
                                    </li>
                                <?php }?>
                                </ul>
                    </div>
                </div>

                <div class="col-sm-7 col-lg-5 product_page-right">
                    <div class="general_info product-info">
                        <h1 class="product-title"><?php echo $product_info['name']; ?></h1>

                        <!-- 
                        <div class="rating-section product-rating-status">
                            <div class="rating">
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> &nbsp; &nbsp;
                                <a onclick="document.getElementById('tab-review').scrollIntoView();">1 reviews</a> /
                                <a onclick="document.getElementById('tab-review').scrollIntoView();">Write a review</a>
                            </div>
                        </div>
                         -->
                        <div class="price-section">
                            <span class="price-new"><?php echo $product_info['price']; ?></span>
                            <!-- <span class="price-old">$310.00</span> 
                            <div class="reward-block">
                                <span class="reward">Price in reward points: 400</span>
                            </div>
                            -->
                        </div>
                        <ul class="list-unstyled product-section">
                            <li>Thương hiệu: <a href="<?php echo $product_info['manufacturer_href'];?>"><?php echo $product_info['manufacturer'];?></a>
                            </li>
                            <!-- 
                            <li>Product Code: <span>Premium</span></li>
                            <li>Reward Points: <span>300</span></li>
                             
                            <li>Tình trạng kho hàng: <span><?php echo $product_info['availability'];?></span></li>
                            -->
                        </ul>
                    </div>
                    <div id="product">

                        <!-- 
                        <div class="product-options form-horizontal">
                            <h3>Available Options</h3>
                            <div class="form-group required">
                                <label class="control-label col-sm-6" for="input-option33">Size</label>
                                <div class="col-sm-6">
                                    <select name="option[33]" id="input-option33" class="form-control">
<option value=""> --- Please Select --- </option>
<option value="75">Small (+$20.00 )
</option>
<option value="76">Medium (+$15.00 )
</option>
<option value="77">Large (+$10.00 )
</option>
</select>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="control-label col-sm-6">Color</label>
                                <div id="input-option34" class="col-sm-6">
                                    <div class="radio">
                                        <label>
<input name="option[34]" value="78" type="radio">
red (+$10.00 )
</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                         -->

                        <div class="product-reccurings">
                        </div>

                        <div class="form-group form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-6" for="input-quantity">Số lượng</label>
                                <div class="col-sm-2">
                                    <input name="quantity" value="1" size="2" id="input-quantity" class="form-control" type="text">
                                </div>
                            </div>
                            <input name="product_id" value="<?php echo $product_info['product_id'];?>" type="hidden">
                            <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-add">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-description" class="product-desc product-section">
                <h3 class="product-section_title">Mô Tả</h3>
                <?php echo $product_info['description'];?>
                <div class="clearfix"></div>
            </div>

            <div class="related-products product-section">
                <h3 class="product-section_title">Sản Phẩm Nổi Bật</h3>
                <!-- <div class="related-slider owl-carousel owl-theme owl-loaded"> -->
                <div class="related-slider">

                <?php foreach (productFeatureds() as $product) {?>
                <div class="owl-item active" style="width: 262.5px; margin-right: 30px;">
                                <div>
                                    <div class="product-thumb transition" data-equal-group="4">
                                        <div class="image">
                                            <a class="lazy lazy-loaded" style="padding-bottom: 100%" href="<?php echo $product['href']?>">
                                                <img alt="<?php echo $product['name'];?>" title="<?php echo $product['name'];?>" class="img-responsive" data-src="<?php echo $product['thumb'];?>" src="<?php echo $product['thumb'];?>"></a>
                                        </div>
                                        <div class="caption">
                                            <div class="price">
                                                <span class="price-new"><?php echo $product['price'];?></span> 
                                                <!-- <span class="price-old">$130.00</span> -->
                                            </div>
                                            <div class="name">
                                                <a href="<?php echo $product['href'];?>"><?php echo $product['name'];?></a>
                                            </div>
                                            <div class="description"><?php echo $product['description'];?></div>
                                            <div class="cart-button">
                                                <button class="btn product-btn product-btn-add" type="button" title="Thêm giỏ hàng" onclick="cart.add('<?php echo $product['product_id'];?>');"><i class="fa fa-shopping-cart"></i>
</button>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="cart-button2">
                                                <div>
                                                    <button class="" type="button" title="Add to Wish List" onclick="alert('đang xây dựng...');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span></button>
                                                </div>
                                                <div>
                                                    <button class="" type="button" title="So Sánh Sản Phẩm" onclick="compare.add('28');"><i class="fa fa-signal"></i><span>So Sánh Sản Phẩm</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                <?php }?>
                </div>
            </div>


        </div>
    </div>
</div>

<script type="text/javascript">
$('#button-cart').on('click', function () {
    $.ajax({
    	url: '/cart-add.php',
        type: 'post',
        data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
        dataType: 'json',
        beforeSend: function () {
            $('#button-cart').button('loading');
        },
        complete: function () {
            $('#button-cart').button('reset');
        },
        success: function (json) {
            $('.alert, .text-danger').remove();
            $('.form-group').removeClass('has-error');

            if (json['error']) {
                if (json['error']['option']) {
                    for (i in json['error']['option']) {
                        var element = $('#input-option' + i.replace('_', '-'));

                        if (element.parent().hasClass('input-group')) {
                            element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                        } else {
                            element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                        }
                    }
                }

                if (json['error']['recurring']) {
                    $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                }

                // Highlight any found errors
                $('.text-danger').parent().addClass('has-error');
            }

            if (json['success']) {
                $('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');


                <!--$('html, body').animate({ scrollTop: 0 }, 'slow');-->

                //$('#cart').load('index.php?route=common/cart/info #cart');
                
                // tải lại nội dung html của giỏ hàng bằng (ajax load) lấy từ nguồn: /common/cart-info.php
				// chỉ lấy phần nội dung bên trong phần tử html có id="cart" 
				// sau đó đắp phần html đó vào bên trong phần tử id="cart" của trang hiện tại.
				var urlCartInfo = $('#urlCartAjax').attr('href');
				$('#cart').load(urlCartInfo+' #cart > *');
                
                setTimeout(function () {
                    $('.alert').fadeOut(1000)
                }, 3000)
            }
        }
    });
});
</script>

<script>
    document.getElementById('input-quantity').onkeypress = function (e) {

        e = e || event;

        if (e.ctrlKey || e.altKey || e.metaKey) return;

        var chr = getChar(e);

        if (chr == null) return;

        if (chr < '0' || chr > '9') {
            return false;
        }

    }

    function getChar(event) {
        if (event.which == null) {
            if (event.keyCode < 32) return null;
            return String.fromCharCode(event.keyCode) // IE
        }

        if (event.which != 0 && event.charCode != 0) {
            if (event.which < 32) return null;
            return String.fromCharCode(event.which)
        }

        return null;
    }
    jQuery('#reviews_form_title').addClass('close-tab');
    jQuery('#reviews_form_title').on("click", function () {
        if (jQuery(this).hasClass('close-tab')) {
            jQuery(this).removeClass('close').parents('#tab-review').find('#reviews_form').slideToggle();
        }
        else {
            jQuery(this).addClass('close-tab').parents('#tab-review').find('#reviews_form').slideToggle();
        }
    })
</script>


<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'thtest123'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script');
        s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
