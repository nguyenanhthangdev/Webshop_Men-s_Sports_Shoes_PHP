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
                                <a href="/home.php">Trang Chủ</a> » <a href="<?php echo $category_href;?>" class="last"><?php echo $category_name;?></a>
                            </div>
                            <h1 class="style-1"><?php echo $category_name;?></h1>
                            <div class="category-info">
								<?php if ($category_thumb || $category_description) { ?>
							      <div class="row">
							        <?php if ($category_thumb) { ?>
							        <div class="col-sm-2"><img src="<?php echo $category_thumb; ?>" alt="<?php echo $category_name; ?>" title="<?php echo $category_name; ?>" class="img-thumbnail" /></div>
							        <?php } ?>
							        <?php if ($category_description) { ?>
							        <div class="col-sm-10"><?php echo $category_description; ?></div>
							        <?php } ?>
							      </div>
							      <?php } ?>
                                
                            </div>
                            <div class="product-filter">
                                <div class="sort"><b>Sort By:</b>
                                    <select onchange="location = this.value;">
                                    	<?php foreach ($product_sorts as $sorts) { ?>
							            <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
							            <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
							            <?php } else { ?>
							            <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
							            <?php } ?>
							            <?php } ?>
									</select>
                                </div>
                                <div class="limit"><b>Show:</b>
                                    <select onchange="location = this.value;">
                                    <?php foreach ($limits as $limits) { ?>
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
                                <div class="display"><b>Display:</b> <a id="list_a" onclick="display('list');"><i class="icon-list"></i></a>
                                    <div id="grid_b"><i class="icon-th"></i></div>
                                </div>
                            </div>
                            <div class="product-grid">
                                <ul class="row">
                                <?php $i = 0;?>
                                <?php foreach ($productsByCategory as $product) {?>
                                    <li class="span3 <?php if($i%3==0) echo 'first-in-line'; elseif($i%3==2) echo 'last-in-line';?>>">
                                        <div class="image">
                                            <a href="<?php echo $product['href'];?>"><img id="img_<?php echo $product['product_id']?>" src="<?php echo $product['thumb']?>" title="<?php echo $product['name']?>" alt="<?php echo $product['name']?>"></a>
                                        </div>
                                        <div class="left">
                                            <div class="name"><a href="<?php echo $product['href'];?>"><?php echo $product['name']?></a></div>
                                            <div class="price">
                                                <!-- 
                                                <span class="price-tax">Ex Tax: $499.00</span>
                                                <span class="price-new">$588.33</span>
                                                <span class="price-old">$589.50</span>
                                                 -->
                                                 <span class="price-new">Giá: <?php echo $product['price']?></span>
                                            </div>
                                            <div class="description"><?php echo $product['description'];?></div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a onclick="cart.add('<?php echo $product['product_id']?>');" class="button" title="Thêm vào giỏ"> <span>Thêm vào giỏ</span></a>
                                                </div>
                                                <div class="wishlist"><a class="tooltip-1 " title="" onclick="addToWishList('43');" data-original-title="Add to Wish List"><i class="icon-star"></i></a></div>
                                                <div class="compare"><a class="tooltip-1" title="" onclick="compare.add('<?php echo $product['product_id']?>');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i></a></div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="rating">
                                            </div>
                                        </div>
                                    </li>
                                 <?php }?>   
                                   
                                   
                                   
                                    
                                </ul>
                            </div>
                            <div class="pagination">
                                <div class="links"> <?php echo $web_pagination_controls; ?></div>
                                <div class="results"><?php echo $web_pagination_results; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <div class="box box-filter">
                        <div class="box-heading">Tìm Kiếm Sâu Hơn</div>
                        <div class="box-content">
                            <ul class="box-filter ">
                                <li><span id="filter-group1"><?php echo $category_name;?></span>
                                    <ul>
                                    	<?php foreach ($sub_categories as $category) { ?>
							            <li>
							            <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
							            <!-- tạm bỏ checkbox này đi, chưa cần thiết phải tìm theo nhiều loại cùng lúc như vậy.
							            <input value="<?php echo $category['category_id']?>" id="filter<?php echo $category['category_id']?>" type="checkbox">
							             -->
							            </li>
							            <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Tạm thời chưa cần tính năng hay ho này
                            <a id="button-filter" class="button"><span>Refine Search</span></a>
                             -->
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('#button-filter').bind('click', function() {
                            filter = [];

                            $('.box-filter input[type=\'checkbox\']:checked').each(function(element) {
                                filter.push(this.value);
                            });

                            // đường link đến các sản phẩm thuộc một trong các loại
                            // path=25,37,85
                            //location = 'https://livedemo00.template-help.com/opencart_45557/index.php?route=product/category&path=25&filter=' + filter.join(',');
                        });
                    </script>
                    <div class="box info" id="compare" style="display: none;">
                        <div class="box-heading">Product Comparison</div>
                        <div class="box-content">
                            <div class="product-compare"><a class="button" href="https://livedemo00.template-help.com/opencart_45557/index.php?route=product/compare"><span>Product Compare</span></a></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function() {
                            $('.info-list li').last().addClass('last');
                        });
                    </script>
                    <div class="box info">
                        <div class="box-heading">Thông tin</div>
                        <div class="box-content">
                            <ul class="info-list">
                                <li><a href="#">Giới Thiệu</a></li>
                                <li><a href="#">Giao Nhận Hàng</a></li>
                                <li><a href="#">Chính Sách</a></li>
                                <li><a href="#">Điều Khoản</a></li>
                                <li><a href="#">Liên Hệ</a></li>
                                <li class="last"><a href="#">Bản Đồ Site</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box bestsellers">
                        <div class="box-heading">Bestsellers</div>
                        <div class="box-content">
                            <div class="box-product">
                                <ul class="row">
                                    <?php foreach(productBestSellers() as $product) {?>
                                    <li class="first-in-line last_line span2">
                                        <div class="image2">
                                            <a href="<?php echo $product['href'];?>"><img id="img_29" src="<?php echo $product['thumb'];?>" alt="<?php echo $product['name']?>"></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-feat"><a href="<?php echo $product['href']?>"><?php echo $product['name'];?></a></div>
                                                <div class="description"><?php echo $product['description'];?></div>
                                                <div class="price">
                                                    <span class="price-new"><?php echo $product['price'];?></span><!-- <span class="price-old">$330.99</span> -->
                                                </div>
                                            </div>
                                            <div class="cart-button">
                                                <div class="cart">
                                                    <a onclick="cart.add('<?php echo $product['product_id'];?>');" title="Add to Cart" data-id="29;" class="button addToCart"> <span>Thêm Vào Giỏ</span></a>
                                                </div>

                                                <div class="compare"><a class="tooltip-1" title="" onclick="addToCompare('29');" data-original-title="So Sánh Sản Phẩm"><i class="icon-bar-chart"></i><span>So Sánh Sản Phẩm</span></a></div>
                                                <div class="wishlist"><a class="tooltip-1" title="" onclick="addToWishList('29');" data-original-title="Add to Wish List"><i class="icon-star"></i><span>Add to Wish List</span></a></div>
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
                        if ($('body').width() > 940) {
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