<section>
<div id="container">
<p id="back-top" style="display: block;"> <a href="#top"><span></span></a> </p>
<div class="container">
<div id="notification"></div>
<div class="row">
<div class="col-sm-9 col-sm-12   " id="content"> 
<div class="breadcrumb">
<a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a>
» <a href="/account.php" class="last">Tài Khoản</a>
</div>
<!-- <h1>Tài Khoản Đăng Nhập</h1> -->
<div class="box-container">

	  <h2>Tài Khoản Của Tôi (<a href="/account-edit.php?cid=<?php $_SESSION['CUS_LOGGED']; ?>" >sửa</a>)</h2> 
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
              <th class="text-right">Họ và Tên</th>
              <td class="text-left"><?php echo $fullname; ?></td>
            </tr>
            <tr>
              <th class="text-right">Email</th>
              <td class="text-left"><?php echo $email; ?></td>
            </tr>
            <tr>
              <th class="text-right">Điện Thoại</th>
              <td class="text-left"><?php echo $telephone; ?></td>
            </tr>
            <tr>
              <th class="text-right">Fax</th>
              <td class="text-left"><?php echo $fax; ?></td>
            </tr>
            
            <tr>
              <th class="text-right">Địa Chỉ</th>
              <td class="text-left"><?php echo $address; ?></td>
            </tr>
            <tr>
              <th class="text-right">Thành Phố</th>
              <td class="text-left"><?php echo $city; ?></td>
            </tr>
            <tr>
              <th class="text-right">Mã Bưu Điện</th>
              <td class="text-left"><?php echo $postcode; ?></td>
            </tr>
            
            <tr>
              <th class="text-right">Mật Khẩu</th>
              <td class="text-left">*******</td>
            </tr>
            <tr>
              
            </tr>
        </table>
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