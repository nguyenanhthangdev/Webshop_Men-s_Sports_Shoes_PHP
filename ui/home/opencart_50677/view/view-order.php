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
» <a href="/order-details.php" class="last">Lịch Sử Đơn Hàng</a>
</div>
<!-- <h1>Tài Khoản Đăng Nhập</h1> -->
<div class="box-container">

	<div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-center">ID</td>
              <td class="text-center">Trạng Thái</td>
              <td class="text-center">Ngày Tạo</td>
              <td class="text-center">Số sản phẩm</td>
              <td class="text-center">Khách hàng</td>
              <td class="text-center">Tổng giá trị</td>
              <td class="text-center">Chi Tiết</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach($orders as $order) { ?>
            <tr>
              <td class="text-right"><?php echo $order['order_id']; ?></td>
              <td class="text-left"><?php echo $order['status']; ?></td>
              <td class="text-left"><?php echo $order['date_added']; ?></td>
              <td class="text-right"><?php echo $order['quantity']; ?></td>
              <td class="text-left"><?php echo $order['customer']; ?></td>
              <td class="text-right"><?php echo $order['total']; ?></td>
              <td class="text-right"><a data-original-title="Chi Tiết" href="<?php echo $order['view'];?>" data-toggle="tooltip" title="" class="btn btn-info"><i class="fa fa-list"></i></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
    <div class="text-right"></div>
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