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
» <a href="/login.php" class="last">Đăng Nhập</a>
</div>
<h1>Tài Khoản Đăng Nhập</h1>
<div class="box-container">
<div class="login-content row">
<div class="col-sm-6">
<div class="left">
<div class="heading">
<i class="fa fa-file-text-o"></i>
<div class="extra-wrap">
<h2>Khách Hàng Mới</h2>
<b>Đăng Kí Tài Khoản</b>
</div>
</div>
<div class="content">
<p>Tạo tài khoản để mua sắm nhanh hơn, cập nhật với trạng thái của đơn hàng, và theo dõi các đơn hàng bạn đã tạo trước đó.</p>
<a href="/register.php" class="button-cont-right">Tiếp Tục<i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="right">
<div class="heading">
<i class="fa fa-key"></i>
<div class="extra-wrap">
<h2>Khách Hàng Cũ</h2>
<!-- <b>I am a returning customer</b> -->
</div>
</div>
<?php if ($_SESSION['ERROR_TEXT']) {?>
		      	<div class="alert alert-danger">
		        	<i class="fa fa-exclamation-circle"></i>&nbsp;<?php echo $_SESSION['ERROR_TEXT']?>
		            <button type="button" class="close" data-dismiss="alert">&times;</button>
		        </div>
		    <?php }?>
		    <?php unset($_SESSION['ERROR_TEXT']);?>
<form class="form-horizontal" action="/login.php" method="post" enctype="multipart/form-data" id="login">
<div class="content">
<div class="form-group">
<label class="padd-form control-label col-sm-5">E-Mail:</label>
<div class="controls col-sm-7">
<input class="q1 margen-bottom" name="email" value="<?php echo $_SESSION['FAILED_EMAIL'];?>" type="text">
</div>
</div>
<div class="form-group">
<label class="padd-form control-label col-sm-5">Mật Khẩu:</label>
<div class="controls col-sm-7">
<input class="q1 margen-bottom" name="password" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>" type="password">
</div>
</div>
<div class="login-buttons">
<a onclick="$('#login').submit();" class="button-cont-right">Đăng Nhập<i class="fa fa-arrow-circle-right"></i></a>
<a class="link-login" href="#">Quên Mật Khẩu</a>
</div>
</div>
<input type="hidden" name="ru" value="<?php echo $_GET['ru'];?>">
<input type="hidden" name="token" value="<?php echo isset($_GET['token']) ? $_GET['token'] : "";?>">
</form>
</div>
</div>
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