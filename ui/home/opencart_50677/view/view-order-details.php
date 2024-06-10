<section>
<div id="container">
<p id="back-top" style="display: block;"> <a href="#top"><span></span></a> </p>
<div class="container">
<div id="notification"></div>
<div class="row">
<div class="col-sm-9 col-sm-12   " id="content">
<div class="breadcrumb">
<a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a>
» <a href="/account.php">Tài Khoản</a>
» <a href="/order-history.php">Lịch Sử Đơn Hàng</a>
» <a href="/order-details.php?order_id<?php echo $_GET['order_id'];?>" class="last">Chi Tiết Đơn Hàng</a>
</div>
<!-- <h1>Tài Khoản Đăng Nhập</h1> -->
<div class="box-container">
  <div style="page-break-after: always;">
    <h1>Thông Tin Hóa Đơn</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td colspan="2">Chi tiết hóa đơn</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="width: 50%;"><address>
            <strong><?php echo $order['store_name']; ?></strong><br />
            <?php echo $order['store_address']; ?>
            </address>
            <b>Điện thoại:</b> <?php echo $order['store_telephone']; ?><br />
            <?php if ($order['store_fax']) { ?>
            <b>Fax:</b> <?php echo $order['store_fax']; ?><br />
            <?php } ?>
            <b>Email:</b> <?php echo $order['store_email']; ?><br />
            <b>Website:</b> <a href="<?php echo $order['store_url']; ?>"><?php echo $order['store_url']; ?></a></td>
          <td style="width: 50%;"><b>Ngày tạo:</b> <?php echo $order['date_added']; ?><br />
            <?php if ($order['invoice_no']) { ?>
            <b>Số hóa đơn:</b> <?php echo $order['invoice_no']; ?><br />
            <?php } ?>
            <b>ID Đơn hàng</b> <?php echo $order['order_id']; ?><br />
            <b>Phương thức thanh toán:</b> <?php echo $order['payment_method']; ?><br />
            <?php if ($order['shipping_method']) { ?>
            <b>Phương thức giao nhận:</b> <?php echo $order['shipping_method']; ?><br />
            <?php } ?></td>
        </tr>
      </tbody>
    </table>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td style="width: 50%;"><b>Nơi nhận hàng và thanh toán:</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            <?php echo $order['shipping_address']; ?>
            </address></td>
        </tr>
      </tbody>
    </table>
    <!-- Mỗi bảng responsive phải có một thẻ div riêng để chứa -->
    <!-- Không chứa nhiều bảng trong một thẻ -->
    <div class="table-responsive">
	    <table class="table table-bordered">
	      <thead>
	        <tr>
	          <td><b>Sản phẩm</b></td>
	          <td><b>Model</b></td>
	          <td class="text-right"><b>Số lượng</b></td>
	          <td class="text-right"><b>Giá</b></td>
	          <td class="text-right"><b>Tổng tiền</b></td>
	        </tr>
	      </thead>
	      <tbody>
	        <?php foreach ($order['product'] as $product) { ?>
	        <tr>
	          <td><?php echo $product['name']; ?>
	          <td><?php echo $product['model']; ?></td>
	          <td class="text-right"><?php echo $product['quantity']; ?></td>
	          <td class="text-right"><?php echo $product['price']; ?></td>
	          <td class="text-right"><?php echo $product['total']; ?></td>
	        </tr>
	        <?php } ?>
	      </tbody>
	      <tfoot>
	      	<tr>
	      		<td colspan="4" style="text-align:right"><b>Tổng giá trị đơn hàng:</b></td>
	      		<td style="text-align:right"><b><?php echo number_format($order_info['total'],0,'.',',').' ₫';?></b></td>
	      	</tr>
	      </tfoot>
	    </table>
    </div>
    <?php if ($order['comment']) { ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td><b>Ghi chú</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $order['comment']; ?></td>
        </tr>
      </tbody>
    </table>
    <?php } ?>
    <?php if ($order['histories'])?>
    <h3>Lịch Sử Đơn Hàng</h3>
    <table class="table table-bordered">
	  <thead>
	    <tr>
	      <th class="text-left">Ngày tạo</th>
	      <th class="text-left">Ghi chú</th>
	      <th class="text-left">Trạng thái</th>
	      <th class="text-left">Thông báo</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach ($order['histories'] as $history) { ?>
	    <tr>
	      <td class="text-left"><?php echo $history['date_added']; ?></td>
	      <td class="text-left"><?php echo $history['comment']; ?></td>
	      <td class="text-left"><?php echo $history['status']; ?></td>
	      <td class="text-left"><?php echo $history['notify']; ?></td>
	    </tr>
	    <?php } ?>
	  </tbody>
	</table>
    <?php ?>
  </div>
  
  <div class="buttons clearfix">
      <div class="pull-right"><a href="/account.php" class="btn btn-primary">Tiếp Tục</a></div>
     </div>
</div>
</div>
<aside class="col-sm-3" id="column-right">
	<?php include_once "view/view-account-box.php" ?>
</aside>
<script type="text/javascript"><!--
$('#login input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#login').submit();
	}
});
	//--></script>
	<div class="clear"></div>
	</div>
	</div>
	</div>
	<div class="clear"></div>
	</section>