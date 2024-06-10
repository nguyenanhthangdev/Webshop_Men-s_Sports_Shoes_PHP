<div class="box account info">
<div class="box-heading">Tài Khoản</div>
<div class="box-content">
<ul class="acount">
<li class="first"><a class="active" href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a></li>
<!-- <li><a class=" wishlist-total" href="#"><i class="fa fa-star"></i>Wish List (0)</a></li> -->
<li><a class="" href="/account.php"><i class="fa fa-user"></i>Tài Khoản</a></li>
<li><a class="" href="/cart.php"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a></li>
<li><a class="" href="/checkout.php"><i class="fa fa-check"></i>Checkout</a></li>

<?php if (isset ($_SESSION['CUS_LOGGED'])) { ?>
		<li class=""><a href="/logout.php"><i class="fa fa-sign-out"></i>Đăng Thoát</a></li>
		<li class=""><a href="/order-history.php"><i class="fa fa-list"></i>Lịch Sử Đơn Hàng</a></li>  
		<?php } else {?>
		<li class="login_h"><a href="/login.php"><i class="fa fa-sign-in"></i>Đăng Nhập</a></li> 
		<li class=""><a href="/register.php"><i class="fa fa-file-text"></i>Đăng Kí</a></li>
		<li class=""><a href="#"><i class="fa fa-question"></i>Quên Mật Khẩu</a></li>
		<?php } ?>
</ul>
</div>
</div>