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
                                <a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a> » <a href="<?php echo $url_search;?>" class="last">Tìm Kiếm</a>
                            </div>
                            <h1><?php echo $search_title;?></h1>
                            <div class="box-container">
                                <b style=" padding-bottom:7px; display:block;">Tiêu Chí</b>
                                <div class="content">
                                    <p>Tìm: <input name="search" value="<?php echo $search;?>" type="text" placeholder="Từ khóa tìm kiếm">
                                        <!--
                                        <select name="category_id">
										<?php foreach ($search_sorts as $sorts) { ?>
							            <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
							            <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
							            <?php } else { ?>
							            <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
							            <?php } ?>
							            <?php } ?>
										</select> 
                                        <label for="sub_category">
<input class="checkbox" name="sub_category" value="1" id="sub_category" disabled="disabled" type="checkbox">
Search in subcategories</label>
                                         -->
                                    </p>
                                    <label class="checkbox" for="description">
										<?php if ($description) { ?>
								          <input type="checkbox" name="description" value="1" id="description" checked="checked" />
								          <?php } else { ?>
								          <input type="checkbox" name="description" value="1" id="description" />
								          <?php } ?>
										Tìm kiếm trong cả mô tả sản phẩm 
									</label>
                                </div>
                                <div class="buttons">
                                    <div class="right"><a id="button-search" class="button"><span>Tìm</span></a></div>
                                </div>
                            </div>
                            <h2>Kết Quả Tìm Kiếm</h2>
                            <div class="product-filter">
                                <div class="display"><b>Hiển thị:</b> <a id="list_a" onclick="display('list');"><i class="icon-list"></i></a>
                                    <div id="grid_b"><i class="icon-th"></i></div>
                                </div>
                                <div class="sort">Xếp theo: 
                                	<select onchange="location = this.value;">
									<?php foreach ($search_sorts as $sorts) { ?>
							            <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
							            <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
							            <?php } else { ?>
							            <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
							            <?php } ?>
							        <?php } ?>
									</select>
                                </div>
                                <div class="limit">Hiện: 
                                <select onchange="location = this.value;">
									<?php foreach ($search_limits as $limits) { ?>
									            <?php if ($limits['value'] == $limit) { ?>
									            <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
									            <?php } else { ?>
									            <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
									            <?php } ?>
									<?php } ?>
								</select>
                                </div>
                                <!-- 
                                <div class="product-compare"><a href="https://livedemo00.template-help.com/opencart_45557/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></div>
                                 -->
                            </div>
                            <div class="product-grid">
                                <ul class="row">
                                
                                <?php $row = 0;?>
                                <?php foreach ($productsSearched as $product) { ?>
                                    
                                    <li class="<?php if($row%3==0) echo 'first-in-line'; elseif($row%3==2) echo 'last-in-line'; $row++;?> span3">
                                        <div class="image">
                                            <a href="<?php echo $product['href']?>"><img id="img_<?php echo $product['product_id']?>" src="<?php echo $product['thumb']?>" title="<?php echo $product['name']?>" alt="<?php echo $product['name'];?>"></a>
                                        </div>
                                        <div class="left">
                                            <div class="name"><a href="<?php echo $product['href']?>"><?php echo $product['name']?></a></div>
                                            <div class="price">
                                                <span class="price-new"><?php echo $product['price'];?></span> <!-- <span class="price-old">$589.50</span> -->
                                                <br>
                                                <!-- <span class="price-tax">Ex Tax: $499.00</span> -->
                                            </div>
                                            <div class="description"><?php echo $product['description'];?></div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a onclick="cart.add('<?php echo $product['product_id']?>');" class="button" title="Thêm vào giỏ"> <span>Thêm vào giỏ</span></a>
                                                </div>
                                                <!-- 
                                                <div class="wishlist"><a class="tooltip-1 " title="" onclick="alert('Đang xây dựng...');//addToWishList('43');" data-original-title="Add to Wish List"><i class="icon-star"></i></a></div>
                                                -->
                                                <div class="compare"><a class="tooltip-1" title="" onclick="compare.add('<?php echo $product['product_id']?>');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i></a></div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="rating">
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="pagination">
                                <!-- <div class="results">Showing 1 to 6 of 6 (1 Pages)</div> -->
                                <div class="results">
                                	<div class="col-sm-6 text-left"><?php echo $web_pagination_controls; ?></div>
          						<div class="col-sm-6 text-right"><?php echo $web_pagination_results; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <?php include_once "/view/view-account-box.php";?>
                    <div class="box bestsellers">
                        <div class="box-heading">Sản Phẩm Bán Chạy</div>
                        <div class="box-content">
                            <div class="box-product">
                                <ul class="row">
                                    <?php foreach(productBestSellers() as $product) {?>
                                    <li class="first-in-line last_line span2">
                                        <div class="image2">
                                            <a href="<?php echo $product['href'];?>"><img id="img_<?php echo $product['product_id'];?>" src="<?php echo $product['thumb']?>" alt="<?php echo $product['name'];?>"></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-feat"><a href="<?php echo $product['href'];?>"><?php echo $product['name']?></a></div>
                                                <div class="description"><?php echo $product['description'];?></div>
                                                <div class="price"><?php echo $product['price'];?></div>
                                            </div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a onclick="cart.add('<?php echo $product['product_id'];?>');" title="Add to Cart" data-id="36;" class="button addToCart"> <span>Thêm vào giỏ</span></a>
                                                </div>

                                                <div class="compare"><a class="tooltip-1" title="" onclick="compare.add('<?php echo $product['product_id'];?>');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So Sánh Sản Phẩm</span></a></div>
                                                <!-- 
                                                <div class="wishlist"><a class="tooltip-1" title="" onclick="addToWishList('36');" data-original-title="Add to Wish List"><i class="icon-star"></i><span>Add to Wish List</span></a></div>
                                                 -->
                                                <span class="clear"></span>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="rating">
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
                                            <a href="https://livedemo00.template-help.com/opencart_45557/index.php?route=product/product&amp;product_id=50"><img src="https://livedemo00.template-help.com/opencart_45557/image/cache/data/Apple Mac OS X Server Software Support - Select 1 copy-180x180.png" alt="Esse cillum dolore tation ullamcorper"></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-feat"><a href="https://livedemo00.template-help.com/opencart_45557/index.php?route=product/product&amp;product_id=50">Esse cillum dolore tation...</a></div>
                                                <div class="description">We are living in the epoch of great technical progress and we are sure...</div>
                                                <div class="price">
                                                    <span class="price-new">$588.33</span><span class="price-old">$589.50</span>
                                                </div>
                                            </div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a title="Add to Cart" data-id="50;" class="button addToCart"> <span>Add to Cart</span></a>
                                                </div>

                                                <div class="compare"><a class="tooltip-1" title="" onclick="addToCompare('50');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So Sánh Sản Phẩm</span></a></div>
                                                <div class="wishlist"><a class="tooltip-1" title="" onclick="addToWishList('50');" data-original-title="Add to Wish List"><i class="icon-star"></i><span>Add to Wish List</span></a></div>
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
                     -->
                </aside>
                <script type="text/javascript">
                    <!--
                    $('#content input[name=\'search\']').keydown(function(e) {
                        if (e.keyCode == 13) {
                            $('#button-search').trigger('click');
                        }
                    });

                    $('select[name=\'category_id\']').bind('change', function() {
                        if (this.value == '0') {
                            $('input[name=\'sub_category\']').attr('disabled', 'disabled');
                            $('input[name=\'sub_category\']').removeAttr('checked');
                        } else {
                            $('input[name=\'sub_category\']').removeAttr('disabled');
                        }
                    });

                    $('select[name=\'category_id\']').trigger('change');

                    $('#button-search').bind('click', function() {
                    	url = '/search.php?';

                        var search = $('#content input[name=\'search\']').attr('value');

                        if (search) {
                            url += '&search=' + encodeURIComponent(search);
                        }

                        var category_id = $('#content select[name=\'category_id\']').attr('value');

                        if (category_id > 0) {
                            url += '&category_id=' + encodeURIComponent(category_id);
                        }

                        var sub_category = $('#content input[name=\'sub_category\']:checked').attr('value');

                        if (sub_category) {
                            url += '&sub_category=true';
                        }

                        var filter_description = $('#content input[name=\'description\']:checked').attr('value');

                        if (filter_description) {
                            url += '&description=true';
                        }

                        location = url;
                    });

                    function display(view) {
                        if (view == 'list') {
                            $('.product-grid ').attr('class', 'product-list');
                            $('.product-list ul').removeClass('row');
                            $('.product-list ul li').removeClass('span3');
                            $('.product-list ul li').each(function(index, element) {
                                html = '';
                                html += '<div class="row">';
                                var image = $(element).find('.image').html();

                                if (image != null) {
                                    html += '<div class="image span2">' + image + '</div>';
                                }
                                html += '<div class="left span7">';
                                html += '<div class="name">' + $(element).find('.name').html() + '</div>';
                                html += '<div class="description">' + $(element).find('.description').html() + '</div>';
                                var price = $(element).find('.price').html();
                                if (price != null) {
                                    html += '<div class="price">' + price + '</div>';
                                }
                                html += '<div class="cart-button">';
                                html += '<div class="cart">' + $(element).find('.cart').html() + '</div>';
                                html += '<div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
                                html += '<div class="compare">' + $(element).find('.compare').html() + '</div>';
                                html += '<div class="clear">' + $(element).find('.clear').html() + '</div>';
                                html += '</div>';
                                var rating = $(element).find('.rating').html();
                                if (rating != null) {
                                    html += '<div class="rating">' + rating + '</div>';
                                }
                                html += '</div>';
                                html += '</div>';



                                $(element).html(html);
                            });

                            $('.display').html('<b>Display:</b> <div id="list_b"><i class="icon-list"></i></div> <a id="grid_a" onclick="display(\'grid\');"><i class="icon-th"></i></a>');

                            $.totalStorage('display', 'list');
                        } else {
                            $('.product-list').attr('class', 'product-grid');
                            $('.product-grid ul').addClass('row');
                            $('.product-grid ul li').addClass('span3');
                            $('.product-grid ul li').each(function(index, element) {
                                html = '';

                                var image = $(element).find('.image').html();

                                if (image != null) {
                                    html += '<div class="image">' + image + '</div>';
                                }
                                html += '<div class="left">';




                                html += '<div class="name">' + $(element).find('.name').html() + '</div>';
                                var price = $(element).find('.price').html();

                                if (price != null) {
                                    html += '<div class="price">' + price + '</div>';
                                }
                                html += '<div class="description">' + $(element).find('.description').html() + '</div>';


                                html += '<div class="cart-button">';
                                html += '<div class="cart">' + $(element).find('.cart').html() + '</div>';
                                html += '<div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
                                html += '<div class="compare">' + $(element).find('.compare').html() + '</div>';
                                html += '<div class="clear">' + $(element).find('.clear').html() + '</div>';
                                html += '</div>';
                                var rating = $(element).find('.rating').html();

                                if (rating != null) {
                                    html += '<div class="rating">' + rating + '</div>';
                                }

                                html += '</div>';
                                $(element).html(html);
                            });

                            $('.display').html('<b>Display:</b> <a id="list_a" onclick="display(\'list\');"><i class="icon-list"></i></a>  <div id="grid_b"><i class="icon-th"></i></i></div>');

                            $.totalStorage('display', 'grid');
                        }
                        if ($('.container').width() > 800) {
                            // tooltip demo
                            $('.tooltip-toggle').tooltip({
                                selector: "a[data-toggle=tooltip]"
                            })
                            $('.tooltip-1').tooltip({
                                placement: 'bottom'
                            })
                            $('.tooltip-2').tooltip({
                                placement: 'top'
                            })
                        }

                    }

                    view = $.totalStorage('display');

                    if (view) {
                        display(view);
                    } else {
                        display('grid');
                    }
                    //-->
                </script>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>