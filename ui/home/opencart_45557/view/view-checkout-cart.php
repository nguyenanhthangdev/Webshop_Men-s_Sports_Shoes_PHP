<section>
    <div id="container">
        <p id="back-top" style="display: block;"> <a href="#top"><span></span></a> </p>
        <div class="container">
            <div id="notification"> </div>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span9  " id="content">
                            <div class="breadcrumb">
                                <a href="/home.php">Trang Chủ</a> » <a href="/account.php">Tài Khoản</a> » <a href="/cart.php" class="last">Giỏ Hàng</a>
                            </div>
                            <h1>Xem Giỏ Hàng</h1> 
						       <form action="/cart-edit.php" method="post" enctype="multipart/form-data">
						        <div class="table-responsive">
						          <table class="table table-bordered">
						            <thead>
						              <tr>
						                <th class="text-center">Ảnh</th>
						                <th class="text-left">Tên Sản Phẩm</th>
						                <th class="text-left">Model</th>
						                <th class="text-left">Số Lượng</th>
						                <th class="text-right">Giá Mỗi Sản Phẩm</th>
						                <th class="text-right">Tổng Tiền</th>
						              </tr>
						            </thead>
						            <tbody>
						              <?php foreach (cartGetProductsWithFormat() as $product) { ?>
						              <tr>
						                <td class="text-center"><?php if ($product['thumb']) { ?>
						                  <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-thumbnail" /></a>
						                  <?php } ?></td>
						                <td class="text-left"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
						                  
						                  </td>
						                <td class="text-left"><?php echo $product['model']; ?></td>
						                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
						                    <input type="text" name="quantity[<?php echo $product['product_id']; ?>]" value="<?php echo $product['quantity']; ?>" size="1" class="form-control" />
						                    <span class="input-group-btn">
						                    <button type="submit" data-toggle="tooltip" title="Cập Nhật" class="btn btn-primary"><i class="fa fa-refresh"></i>Cập Nhật</button>
						                    <button type="button" data-toggle="tooltip" title="Xóa Bỏ" class="btn btn-danger" onclick="cart.remove('<?php echo $product['product_id']; ?>');"><i class="fa fa-times-circle"></i>Xóa</button></span></div></td>
						                <td class="text-right"><?php echo $product['price']; ?></td>
						                <td class="text-right"><?php echo $product['total']; ?></td>
						              </tr>
						              <?php } ?>
						            </tbody>
						            <tfoot>
								     <tr>
										<td colspan="5" class="text-right"><strong>Tổng giá trị đơn hàng:</strong></td>
										<td class="text-right"><?php echo cartGetTotalWithFormat(); ?></td>
										</tr>
									</tfoot>
						          </table>
						        </div>
						      </form>
						      <div class="buttons clearfix">
						       <div class="pull-right"><a class="button" href="/checkout.php" class="btn btn-primary"><span>Tiếp Tục</span></a></div>
						      </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <?php include_once "view-account-box.php";?>
                </aside>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>
<!-- ---------------------- -->

