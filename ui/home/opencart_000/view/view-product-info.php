<div class="container">
  <ul class="breadcrumb">
    <li><a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a></li>
    <li><a href="/product-info.php?product_id=<?php echo $_GET['product_id']; ?>"><?php echo $product_info['name'];?></a></li>
  </ul>

  <?php
    $allPriceProduct = 0;
    foreach($product_info['price'] as $item){
      $allPriceProduct = $allPriceProduct + $item['amount'];
    }
  ?>

  <div class="row">
    <div id="content" class="col-sm-12">
      <div class="row">
        <div class="col-sm-6">
          <?php if ($product_info['thumb'] || $product_info['product_images']) { ?>
          <ul class="thumbnails">
            <?php if ($product_info['thumb']) { ?>
            <li><a class="thumbnail thumbnailBig" href="<?php echo $product_info['popup']; ?>" title="<?php echo $product_info['name'];?>"><img src="<?php echo $product_info['thumb']; ?>" width="100%" height="100%" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" /></a></li>
            <?php } ?>

            <?php if ($product_info['product_images']) { ?>
            <?php foreach ($product_info['product_images'] as $image) { ?>
            <li class="image-additional">
            	<a class="thumbnail" rel="fancybox" href="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>"> <img src="<?php echo $image['thumb']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" /></a>
            </li>
            <?php } ?>
            <?php } ?>
          </ul>
          <?php } ?>
        </div>
        <div class="col-sm-6 infoProduct">
          <div class="btn-group">
            <button type="button" data-toggle="tooltip" class="btn btn-default" title="Wishlist" onclick="wishlist.add('<?php echo $product_info['product_id']; ?>');"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" class="btn btn-default" title="So sánh sản phẩm" onclick="compare.add('<?php echo $product_info['product_id']; ?>');"><i class="fa fa-exchange"></i></button>
          </div>
          <h2 class="infoNameProduct"><?php echo $product_info['name']; ?></h2>
          <div class="infoRelated" style="background-color: white;">
            <div class="rowDetailProduct row">
              <div class="col-sm-3"><span class="infoDetailProduct" >Nhà Sản Xuất</span></div>
              <div class="col-sm-9"><span class="infoDetailProduct"><a href="<?php echo $product_info['manufacturer_href']; ?>"><?php echo $product_info['manufacturer']; ?></a></span></div>
            </div>
            <div class="rowDetailProduct row">
              <div class="col-sm-3"><span class="infoDetailProduct">Model</span></div>
              <div class="col-sm-9"><span class="infoDetailProduct"><?php echo $product_info['model']; ?></span></div>
            </div>
            <div class="rowDetailProduct row">
              <div class="col-sm-3"><span class="infoDetailProduct">Tình Trạng</span></div>
              <div class="col-sm-9"><span class="infoDetailProduct"><?php echo $product_info['availability']; ?></span></div>
            </div>
            <div class="rowDetailProduct row">
              <div class="col-sm-3"><span class="infoDetailProduct">Màu Sắc</span></div>
              <div class="col-sm-9"><p class="infoDetailProduct" style="border: 2px solid black; width: 100px; height: 20px; background-color: <?php echo  $product_info['color']; ?>;"></p></div>
            </div>
            <?php if((int)$product_info['sale'] != 0) { ?>
              <div class="rowDetailProduct row">
                <div class="col-sm-3"><span class="infoDetailProduct">Giảm Giá</span></div>
                <div class="col-sm-9"><span class="infoDetailProduct" style="color: red; font-size: 17px;"><?php echo $product_info['sale']. '%'; ?></span></div>
              </div>
            <?php } ?>
          </div>
          <?php if((int)$product_info['sale'] != 0) { ?>
            <?php if((int)$product_info['size_or_nosize'] == 1) { ?>
              <?php 
                $minPrice = $product_info['price'][0]['priceSize'];
                $maxPrice = $product_info['price'][0]['priceSize'];

                foreach($product_info['price'] as $item){
                  if($minPrice > (int)$item['priceSize']){
                    $minPrice = (int)$item['priceSize'];
                  }
                  if($maxPrice < (int)$item['priceSize']){
                    $maxPrice = (int)$item['priceSize'];
                  }
                }
              ?>
              <!-- TH1: Có giảm giá - Giày - Giá min == max -->
              <?php if((int)$minPrice == (int)$maxPrice) { ?>
                <div class="rowDetailProduct row">
                  <div class="col-sm-3"><span class="infoDetailProduct">Giá Tiền</span></div>
                  <div class="col-sm-9"><span id="priceProduct" class="infoDetailProduct" style='font-size: 17px; color: orange;'><?php echo currency_format($minPrice); ?></span></div>
                </div>
              <!-- TH2: Có giảm giá - Giày - Giá min != max -->
              <?php } else { ?> 
                <div class="rowDetailProduct row">
                  <div class="col-sm-3"><span class="infoDetailProduct">Giá Cũ</span></div>
                  <div class="col-sm-9"><span class="infoDetailProduct"><del id="priceProductOld" style='font-size: 17px;'><?php echo currency_format($minPrice) ."-". currency_format($maxPrice); ?></del></span></div>
                </div>
                <div class="rowDetailProduct row">
                  <div class="col-sm-3"><span class="infoDetailProduct">Giá Mới</span></div>
                  <div class="col-sm-9"><span class="infoDetailProduct"><p id="priceProductNew" style='font-size: 17px; color: orange;'><?php echo currency_format($minPrice - ($minPrice*($product_info['sale']/100))) ."-". currency_format($maxPrice - ($maxPrice*($product_info['sale']/100))); ?></p></span></div>
                </div>
              <?php } ?>
            <?php } ?>
              
            <!-- TH2: Có giảm giá - Không phải giày -->
            <?php if((int)$product_info['size_or_nosize'] == 0) { ?>
              <div class="rowDetailProduct row">
                <div class="col-sm-3"><span class="infoDetailProduct">Giá Cũ</span></div>
                <div class="col-sm-9"><span class="infoDetailProduct"><del id="priceProductOld" style='font-size: 17px;'><?php echo currency_format($product_info['price']['price']); ?></del></span></div>
              </div>
              <div class="rowDetailProduct row">
                <div class="col-sm-3"><span class="infoDetailProduct">Giá Mới</span></div>
                <div class="col-sm-9"><span id="priceProductNew" class="infoDetailProduct" style="font-size: 17px; color: orange;"><?php echo currency_format($product_info['price']['price'] - ($product_info['price']['price']*($product_info['sale']/100))); ?></span></div>
              </div>
            <?php } ?>
          <?php } ?>

          <?php if((int)$product_info['sale'] == 0) { ?> 
            <?php if((int)$product_info['size_or_nosize'] == 1) { ?>
              <?php 
                $minPrice = $product_info['price'][0]['priceSize'];
                $maxPrice = $product_info['price'][0]['priceSize'];

                foreach($product_info['price'] as $item){
                  if($minPrice > (int)$item['priceSize']){
                    $minPrice = (int)$item['priceSize'];
                  }
                  if($maxPrice < (int)$item['priceSize']){
                    $maxPrice = (int)$item['priceSize'];
                  }
                } 
              ?>
              <!-- TH3: Không giảm giá - Giày - Giá min != Giá max -->
              <?php if((int)$minPrice != (int)$maxPrice) { ?>
                <div class="rowDetailProduct row">
                  <div class="col-sm-3"><span class="infoDetailProduct">Giá Tiền</span></div>
                  <div class="col-sm-9"><span id="priceProduct" class="infoDetailProduct" style="font-size: 17px; color: orange;"><?php echo currency_format($minPrice) ."-". currency_format($maxPrice); ?></span></div>
                </div>
              <!-- TH4: Không giảm giá - Giày - Giá min == Giá max -->
              <?php } else {?>
                <div class="rowDetailProduct row">
                  <div class="col-sm-3"><span class="infoDetailProduct">Giá Tiền</span></div>
                  <div class="col-sm-9"><span id="priceProduct" class="infoDetailProduct" style="font-size: 17px; color: orange;"><?php echo currency_format($minPrice); ?></span></div>
                </div>
              <?php } ?>
            <?php } ?>
            <!-- TH4: Không giảm giá - Không phải giày -->
            <?php if((int)$product_info['size_or_nosize'] == 0) { ?>
              <div class="rowDetailProduct row">
                <div class="col-sm-3"><span class="infoDetailProduct">Giá Tiền</span></div>
                <div class="col-sm-9"><span id="priceProduct" class="infoDetailProduct" style="font-size: 17px; color: orange;"><?php echo currency_format($product_info['price']['price']); ?></span></div>
              </div>
            <?php } ?>
          <?php } ?>
          
          <?php if($product_info['size_or_nosize'] == 1) { ?>
            <div id="productSize" class="rowDetailProduct">
              <div class="row">
                  <div class="col-sm-3"><span class="infoDetailProduct">Size</span></div>
                  <div class="col-sm-9">
                    <?php foreach($product_info['price'] as $item) { ?>
                      <?php if($item['amount']==0) { ?>
                          <div class="grid">
                            <label class="noCard">
                              <input name="size" class="radio" type="radio" value="<?php echo $item['size']; ?>" disabled>
                              <span class="plan-details" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">
                                <span style="font-size: 15px; font-weight: 500;"><?php echo $item['size']; ?></span>
                              </span>
                            </label>
                          </div>
                      <?php } ?>
                      <?php if($item['amount']>0) { ?>
                          <div class="grid">
                            <label class="card">
                              <?php $priceOldSize = currency_format($item['priceSize']); ?>
                              <?php $priceNewSize = currency_format($item['priceSize'] - ($item['priceSize']*($product_info['sale']/100))); ?>
                              <?php if($product_info['sale'] != 0) { ?>
                                <input onclick="checkNumberAmount(<?php echo $item['amount']; ?>,'<?php echo $priceOldSize; ?>','<?php echo $priceNewSize; ?>',<?php echo $item['amount']; ?>)" name="size" class="radio" type="radio" value="<?php echo $item['size']; ?>">
                              <?php } ?>
                              <?php if($product_info['sale'] == 0) {  ?>
                                <input onclick="checkNumberAmount2(<?php echo $item['amount']; ?>,'<?php echo $priceOldSize; ?>',<?php echo $item['amount']; ?>)" name="size" class="radio" type="radio" value="<?php echo $item['size']; ?>">
                              <?php } ?>
                              <span class="plan-details" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">
                                <span style="font-size: 15px; font-weight: 500;"><?php echo $item['size']; ?></span>
                              </span>
                            </label>
                          </div>
                      <?php } ?>
                    <?php } ?>         
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if($product_info['size_or_nosize'] == 0) { ?>
            <?php $allPriceProduct = $product_info['price'][0]; ?>
          <?php } ?>
          
          <?php if($product_info['size_or_nosize'] == 1) { ?>
            <div id="product" class="divInputAmountSize">
              <div class="row">
                <label class="col-sm-3" class="control-label" for="input-quantity"><span class="infoDetailProduct">Số Lượng</span></label>
                <div class="col-sm-9">
                  <div class="boxInputAmount">
                    <div class="buttonAmount buttonAmount1" id="increasing" onclick="increasing()"><ion-icon name="remove-outline"></ion-icon></div>
                    <input type="number" name="quantity" id="input-quantity" value="1" min="1" max="1" readonly>
                    <input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>" />
                    <div class="buttonAmount buttonAmount2" id="reduce" onclick="reduce()"><ion-icon name="add-outline"></ion-icon></div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if($product_info['size_or_nosize'] == 0) { ?>
            <div id="product" class="divInputAmountSize">
              <div class="row">
                <label class="col-sm-3" class="control-label" for="input-quantity"><span class="infoDetailProduct">Số Lượng</span></label>
                <div class="col-sm-9">
                  <div class="boxInputAmount">
                    <div class="buttonAmount buttonAmount1" id="increasing" onclick="increasing()"><ion-icon name="remove-outline"></ion-icon></div>
                    <input type="number" name="quantity" id="input-quantity" value="1" min="1" max="<?php echo $product_info['price']['amount']; ?>" readonly>
                    <input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>" />
                    <div class="buttonAmount buttonAmount2" id="reduce" onclick="reduce()"><ion-icon name="add-outline"></ion-icon></div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

          <div>
            <p id="allAmountProduct" class="infoDetailProduct">Hiện Còn 
              <?php echo $allPriceProduct; ?>
              Sản Phẩm
            </p>
          </div>

          <div style="display: none;" class="alert alert-danger" id="error-choose-size"><i class="fa fa-check-x"></i>Vui Lòng Size Cho Sản Phẩm Mà Bạn Chọn
            <button type="button" class="close" onclick="offErrorChoseSize();">&times;</button>
          </div>
          
          <?php if($product_info['size_or_nosize'] == 1) { ?>
            <button style="display: block; margin: 0;" onclick="buttonCartTest();" type="button" id="button-cart-test" class="btn btn-lg btn-block"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
            <button style="display: none; margin: 0;" onclick="" type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-lg btn-block"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
          <?php } ?>
          <?php if($product_info['size_or_nosize'] == 0) { ?>
            <button style="margin: 0;" onclick="" type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-lg btn-block"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
          <?php } ?>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-description" data-toggle="tab">Mô tả</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-description"><?php echo $product_info['description']; ?></div>
          </div>
        </div>
      </div>
      
      <!--  trước đây là sản phẩm nổi bật, có thể xem lại code trong view-product-info.php -->  

      <?php if ($tags) { ?>
      <p><?php echo $text_tags; ?>
        <?php for ($i = 0; $i < count($tags); $i++) { ?>
        <?php if ($i < (count($tags) - 1)) { ?>
        <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>,
        <?php } else { ?>
        <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
        <?php } ?>
        <?php } ?>
      
      <?php } ?>
      </div>
    </div>
</div>

<!-- ********************************************************************************************** -->
<script>
  function buttonCartTest(){
    document.getElementById('error-choose-size').style.display = "block";
  }

  function offErrorChoseSize(){
    document.getElementById('error-choose-size').style.display = "none";
  }
</script>

<script>
  function checkNumberAmount($x,$y,$z,$u){
    let m = '<del>' + $y + '</del>' + '<span>' + $z + '</span>';
    document.getElementById('input-quantity').setAttribute('max',$x);
    document.getElementById("priceProductOld").innerHTML = $y;
    document.getElementById("priceProductNew").innerHTML = $z;
    document.getElementById('button-cart-test').style.display = "none";
    document.getElementById('button-cart').style.display = "block";
    document.getElementById('input-quantity').value = 1;
    document.getElementById("allAmountProduct").innerHTML = 'Hiện Còn ' + $u + ' Sản Phẩm';
  }

  function checkNumberAmount2($x,$y,$u){
    let m = '<span>' + $y + '</span>';
    document.getElementById('input-quantity').setAttribute('max',$x);
    document.getElementById("priceProduct").innerHTML = m;
    document.getElementById('button-cart-test').style.display = "none";
    document.getElementById('button-cart').style.display = "block";
    document.getElementById('input-quantity').value = 1;
    document.getElementById("allAmountProduct").innerHTML = 'Hiện Còn ' + $u + ' Sản Phẩm';
  }
</script>
      
<!-- ********************************************************************************************** -->

<script type="text/javascript">

$('#button-cart').on('click', function() {
	$.ajax({
		url: '/cart-add.php',
		type: 'post',
		data: $('#product input[type=\'text\'], #product input[type=\'number\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea, #productSize input[type=\'text\'], #productSize input[type=\'hidden\'], #productSize input[type=\'radio\']:checked, #productSize input[type=\'checkbox\']:checked, #productSize select, #productSize textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
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
				
				$('#cart-total').html(json['total']);
				
				$('html, body').animate({ scrollTop: 0 }, 'slow');
				
				//$('#cart > ul').load('index.php?route=common/cart/info ul li');
				// tải lại nội dung html của giỏ hàng bằng (ajax load) lấy từ nguồn: /common/cart-info.php
				// chỉ lấy phần nội dung bên trong phần tử html có id="cart" 
				// sau đó đắp phần html đó vào bên trong phần tử id="cart" của trang hiện tại.
				$('#cart').load('/cart-ajax.php#cart > *');
			}
		}
	});
});
</script>

<script type="text/javascript">

$(function(){
	$('.date').datetimepicker({
		pickTime: false
	});

	$('.datetime').datetimepicker({
		pickDate: true,
		pickTime: true
	});

	$('.time').datetimepicker({
		pickDate: false
	});
});


</script> 

<script type="text/javascript">
//Slideshow ảnh sản phẩm
// đừng có cố đưa bxslider, elevatezoom vào đây
// vì mã html/css không tương thích tí nào.
// nếu thích thì tích hợp thêm một bản horizontal slide vào themes mẫu
// một bản vertical slide (khó) vào nữa.
// $(document).ready(function() { // không chạy !!!

// 	$('.thumbnails').magnificPopup({
// 		type:'image',
// 		delegate: 'li > a',
// 		gallery: {
// 			enabled:true
// 		}
// 	});
	
// });

	$('.thumbnails').magnificPopup({ // chạy ngon (: >
		type:'image',
		delegate: 'li > a',
		gallery: {
			enabled:true
		}
	});
	
</script>

<script>
  function increasing(){
    var valueInputAmount = document.getElementById('input-quantity').value;
    if(Number(valueInputAmount) > 1){
      console.log(valueInputAmount);
      document.getElementById('input-quantity').value = Number(valueInputAmount) - 1;
    }
  }

  function reduce(){
    var valueInputAmount = document.getElementById('input-quantity').value;
    var maxValueInputAmount = document.getElementById('input-quantity').max;
    if(Number(valueInputAmount) < Number(maxValueInputAmount)){
      console.log(valueInputAmount);
      document.getElementById('input-quantity').value = Number(valueInputAmount) + 1;
    }
  }
</script>