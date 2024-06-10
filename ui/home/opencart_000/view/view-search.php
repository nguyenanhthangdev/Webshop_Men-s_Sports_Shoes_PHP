<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <h1><?php echo $search_title; ?></h1>
      <label class="control-label" for="input-search">Tiêu chí tìm kiếm</label>
      <div class="row">
        <div class="col-sm-4">
          <input type="text" name="search" value="<?php echo $search; ?>" placeholder="Từ khóa tìm kiếm" id="input-search" class="form-control" />
        </div>
        <label class="checkbox-inline">
          <?php if ($description) { ?>
          <input type="checkbox" name="description" value="1" id="description" checked="checked" />
          <?php } else { ?>
          <input type="checkbox" name="description" value="1" id="description" />
          <?php } ?>
          <?php echo 'Tìm kiếm trong cả mô tả sản phẩm'; ?></label>
          <input type="button" value="Tìm kiếm" id="button-search" class="btn btn-primary" />
      </div>
      
      <h2><?php echo 'Sản phẩm tìm thấy'; ?></h2>
      <?php if ($productsSearched) { ?>
      <div class="row">
        <div class="col-sm-3 hidden-xs">
          <div class="btn-group">
            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
          </div>
        </div>
        <div class="col-sm-1 col-sm-offset-2 text-right">
          <label class="control-label" for="input-sort">Xếp theo</label>
        </div>
        <div class="col-sm-3 text-right">
          <select id="input-sort" class="form-control col-sm-3" onchange="location = this.value;">
            <?php foreach ($search_sorts as $sorts) { ?>
            <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
            <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
            <?php } else { ?>
            <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
            <?php } ?>
            <?php } ?>
          </select>
        </div>
        <div class="col-sm-1 text-right">
          <label class="control-label" for="input-limit">Hiện</label>
        </div>
        <div class="col-sm-2 text-right">
          <select id="input-limit" class="form-control" onchange="location = this.value;">
            <?php foreach ($search_limits as $limits) { ?>
            <?php if ($limits['value'] == $limit) { ?>
            <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
            <?php } else { ?>
            <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
            <?php } ?>
            <?php } ?>
          </select>
        </div>
      </div>
      <br />
      <div class="row">
        <?php foreach ($productsSearched as $product) { ?>
        <div class="col-lg-3 col-md-3 col-xl-4 col-sm-4 col-xs-6 product-layout-info">
          <div class="product-thumb">
            <div class="image">
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
              <img width="100%" height="100%" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" />
            </div>
            <div class="caption">
              <h4 style=" overflow: hidden; text-overflow: clip; height:38px; line-height: 19px;"><?php echo $product['name']; ?></h4>
              <div class="price">
                <?php if( (int)$product['size_or_nosize'] == 1) { ?>
                  <?php if($product['sale'] != 0) { ?>
                      <?php if(max($product['price']) == min($product['price'])) { ?>
                          <span><b></b></span>
                          <span class="price-new" style="font-size: 16px;"><del><?php echo currency_format( (int)$product['price'][0]); ?></del></span> 
                          <br>
                          <span><b></b></span>
                          <span class="price-new" style="color: orange; font-size: 16px;"><?php echo currency_format( (int)$product['price'][0] - ((int)$product['price'][0] * ((int)$product['sale']/100))); ?></span>
                      <?php } ?>
                      <?php if(max($product['price']) != min($product['price'])) { ?>
                          <span><b></b></span>
                          <span class="price-new" style="font-size: 16px;"><del><?php echo currency_format(min($product['price'])) ."-". currency_format(max($product['price'])); ?></del></span> 
                          <br>
                          <span><b></b></span>
                          <span class="price-new" style="color: orange; font-size: 16px;">
                          <?php echo currency_format((int)min($product['price']) - ((int)min($product['price']) * ((int)$product['sale']/100))) ."-". currency_format(max($product['price']) - ((int)max($product['price']) * ((int)$product['sale']/100))); ?></span>
                      <?php } ?>
                  <?php } ?>
                  <?php if($product['sale'] == 0) { ?>
                      <?php if(max($product['price']) == min($product['price'])) { ?>
                          <span><b></b></span>
                          <span class="price-new" style="font-size: 16px;"><?php echo currency_format( (int)$product['price'][0]); ?></span> 
                      <?php } ?>
                      <?php if(max($product['price']) != min($product['price'])) { ?>
                          <span><b></b></span>
                          <span class="price-new" style="font-size: 16px;"><?php echo currency_format(min($product['price'])) ."-". currency_format(max($product['price'])); ?></span> 
                      <?php } ?>
                  <?php } ?>
                <?php } ?>
                <?php if( (int)$product['size_or_nosize'] == 0) { ?>
                  <?php if($product['sale'] != 0) { ?>
                      <span><b></b></span>
                      <span class="price-new" style="font-size: 16px;"><del><?php echo currency_format((int)$product['price']); ?></del></span> 
                      <br>
                      <span><b></b></span>
                      <span class="price-new" style="color: orange; font-size: 16px;"><?php echo currency_format((int)$product['price'] - (int)$product['price']*((int)$product['sale']/100)); ?></span>
                  <?php } ?>
                  <?php if($product['sale'] == 0) { ?>
                      <span><b></b></span>
                      <span class="price-new" style="font-size: 16px;"><?php echo currency_format((int)$product['price']); ?></span> 
                  <?php } ?>
                <?php } ?>
              </div>
              <?php if ($product['rating']) { ?>
              <div class="rating">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <?php if ($product['rating'] < $i) { ?>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                <?php } else { ?>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                <?php } ?>
                <?php } ?>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="row">
      	<div class="col-sm-6 text-left"><?php echo $web_pagination_controls; ?></div>
          <div class="col-sm-6 text-right"><?php echo $web_pagination_results; ?></div>
      </div>
      <?php } else { ?>
      <p><?php echo 'Không tìm thấy kết quả nào phù hợp'; ?></p>
      <?php } ?>
      </div>
    </div>
</div>
<script type="text/javascript">
$('#button-search').bind('click', function() {
	url = '/search.php';
	
	var search = $('#content input[name=\'search\']').prop('value');
	
	if (search) {
		url += '?search=' + encodeURIComponent(search);
	}

	var category_id = $('#content select[name=\'category_id\']').prop('value');
	
	if (category_id > 0) {
		url += '&category_id=' + encodeURIComponent(category_id);
	}
	
	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');
	
	if (sub_category) {
		url += '&sub_category=true';
	}
		
	var filter_description = $('#content input[name=\'description\']:checked').prop('value');
	
	if (filter_description) {
		url += '&description=true';
	}

	location = url;
});

$('#content input[name=\'search\']').bind('keydown', function(e) {
	if (e.keyCode == 13) {
		$('#button-search').trigger('click');
	}
});

$('select[name=\'category_id\']').on('change', function() {
	if (this.value == '0') {
		$('input[name=\'sub_category\']').prop('disabled', true);
	} else {
		$('input[name=\'sub_category\']').prop('disabled', false);
	}
});

$('select[name=\'category_id\']').trigger('change');
</script> 
