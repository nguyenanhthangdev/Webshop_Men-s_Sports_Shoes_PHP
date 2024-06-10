<div class="container">
  <ul class="breadcrumb">
    <li><a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a></li>
    <li><a href="/manufacturer-list.php">Thương Hiệu</a></li>
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
      <h2><?php echo $manufacturer_name; ?></h2>
      <?php if ($manu_products) { ?>
      <p><a href="<?php echo $view->compare; ?>" id="compare-total"> <?php echo $view->text_compare; ?></a></p>
      <div class="row">
        <div class="col-sm-3">
          <div class="btn-group hidden-xs">
            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
          </div>
        </div>
        <div class="col-sm-1 col-sm-offset-2 text-right">
          <label class="control-label" for="input-sort">Xếp theo</label>
        </div>
        <div class="col-sm-3 text-right">
          <select id="input-sort" class="form-control col-sm-3" onchange="location = this.value;">
            <?php foreach ($manu_sorts as $sorts) { ?>
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
            <?php foreach ($manu_limits as $limits) { ?>
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
        <?php foreach ($manu_products as $product) { ?>
        <div class="col-lg-3 col-md-3 col-xl-4 col-sm-4 col-xs-6 product-layout-info">
          <a href="<?php echo $product['href']; ?>">
          <div class="product-thumb transition">

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
              <img width="100%" height="100%" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name'];?> title="<?php echo $product['name']; ?>" class="img-responsive" />
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
        <?php } ?>
      </div>
      <div class="row">
      	<div class="col-sm-6 text-left"><?php echo $web_pagination_controls; ?></div>
          <div class="col-sm-6 text-right"><?php echo $web_pagination_results; ?></div>
      </div>
      <?php } else { ?>
      <p>Không tìm thấy kết quả nào</p>
      <div class="buttons">
        <div class="pull-right"><a href="/home.php" class="btn btn-primary">Tiếp tục</a></div>
      </div>
      <?php } ?>
      </div>
    </div>
</div>
