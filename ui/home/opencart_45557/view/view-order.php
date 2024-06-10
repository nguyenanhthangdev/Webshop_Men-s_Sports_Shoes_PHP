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
                                <a href="/home.php">Trang Chủ</a> » <a href="/account.php">Tài Khoản</a> » <a href="/order-history.php">Lịch sử đơn hàng</a>
                            </div>
                            <h1>Lịch Sử Đơn Hàng</h1> 
						      <div class="table-responsive">
						        <table class="table table-bordered table-hover">
						          <thead>
						            <tr>
						              <th class="text-right">ID</th>
						              <th class="text-left">Trạng Thái</th>
						              <th class="text-left">Ngày Tạo</th>
						              <th class="text-right">Số Sản Phẩm</th>
						              <th class="text-left">Khách Hàng</th>
						              <th class="text-right">Tổng Giá Trị</th>
						              <th class="text-center">Chi Tiết</th>
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
						              <td class="text-center"><a data-original-title="Chi Tiết" href="<?php echo $order['view'];?>" data-toggle="tooltip" title="" class="btn btn-info"><i class="fa fa-eye"></i>Xem</a></td>
						            </tr>
						            <?php } ?>
						          </tbody>
						        </table>
						    </div>
						      <div class="buttons clearfix">
						       <div class="pull-right"><a class="button" href="/home.php" class="btn btn-primary"><span>Tiếp Tục</span></a></div>
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
