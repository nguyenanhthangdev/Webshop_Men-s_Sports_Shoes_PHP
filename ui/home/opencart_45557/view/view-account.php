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
                                <a href="/home.php">Trang Chủ</a> » <a href="/account.php">Tài Khoản</a> » <a href="/login.php" class="last">Đăng Nhập</a>
                            </div>
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
<!-- ---------------------- -->

