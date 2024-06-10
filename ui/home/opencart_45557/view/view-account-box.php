                    <div class="box account">
                        <div class="box-heading">Tài Khoản</div>
                        <div class="box-content">
                            <ul class="acount">
                                <li><a href="/home.php" class="list-group-item active"><i class="fa fa-home"></i>&nbsp;Trang Chủ</a></li>
							    <li><a href="/cart.php" class="list-group-item"><i class="fa fa-shopping-cart"></i>&nbsp;Giỏ Hàng</a></li>
							    <li><a href="/cart.php" class="list-group-item"><i class="fa fa-check"></i>&nbsp;Checkout</a></li>
							    
							    <?php if (isset ($_SESSION['CUS_LOGGED'])) { ?>
							    <li><a href="/logout.php" class="list-group-item"><i class="fa fa-sign-out"></i>&nbsp;Đăng Thoát</a></li>
							    <li><a href="/account.php" class="list-group-item"><i class="fa fa-user"></i>&nbsp;Tài Khoản Của Tôi</a></li>
							    <li><a href="/account-edit.php?cid=<?php $_SESSION['CUS_LOGGED']; ?>"  class="list-group-item"><i class="fa fa-edit"></i>&nbsp;Sửa thông tin tài khoản</a></li>
							    <li><a href="/order-history.php" class="list-group-item"><i class="fa fa-list"></i>&nbsp;Lịch Sử Đơn Hàng</a></li>
							    <li><?php } else {?>
							    <li><a href="/login.php" class="list-group-item"><i class="fa fa-sign-in"></i>&nbsp;Đăng Nhập</a></li>
							    <li><a href="/register.php" class="list-group-item"><i class="fa fa-file-text"></i>&nbsp;Đăng Kí</a></li>
							    <li><a href="#forgotten" class="list-group-item" onclick="alert('Đang xây dựng, bạn vui lòng quay lại sau !')"><i class="fa fa-question"></i>&nbsp;Quên Mật Khẩu</a></li>
							    
							    <?php }?> 
                            </ul>
                        </div>
                    </div>
                    
                    