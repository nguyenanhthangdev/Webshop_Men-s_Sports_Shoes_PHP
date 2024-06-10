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
                                <a href="/home.php">Trang Chủ</a> » <a href="/account.php" class="last">Tài Khoản</a>
                            </div>
                            <h1>Tài Khoản Của Tôi (<a href="/account-edit.php?cid=<?php $_SESSION['CUS_LOGGED']; ?>" >sửa</a>)</h1> 
						       <form action="/cart-edit.php" method="post" enctype="multipart/form-data">
						        <div class="table-responsive">
						          <table class="table table-bordered table-hover">
                                        <tr>
                                          <th class="text-right">Họ và Tên</th>
                                          <td class="text-left"><?php echo $_SESSION['CUS_FULLNAME']; ?></td>
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
                                          <th class="text-right">Địa Chỉ</th>
                                          <td class="text-left"><?php echo $address; ?></td>
                                        </tr>
                                    </table>
						        </div>
						      </form>
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
