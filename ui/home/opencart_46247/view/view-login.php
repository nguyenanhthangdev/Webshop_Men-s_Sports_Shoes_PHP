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
                            <h1>Đăng Nhập</h1>
                            <div class="box-container">
                                <div class="login-content row-fluid">
                                    <div class="span6">
                                        <div class="left">
                                            <div class="heading">
                                                <i class="icon-file-alt"></i>
                                                <div class="extra-wrap">
                                                    <h2>Khách Hàng Mới</h2>
                                                    <b>Đăng Kí Tài Khoản</b>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p>Tạo tài khoản để mua sắm nhanh hơn, cập nhật với trạng thái của đơn hàng, và theo dõi các đơn hàng bạn đã tạo trước đó.</p>
                                                <a href="/register.php" class="button-cont-right">Tiếp Tục<i class="icon-circle-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="right">
                                            <div class="heading">
                                                <i class="icon-key"></i>
                                                <div class="extra-wrap">
                                                    <h2>Đã có Tài Khoản</h2>
                                                    <b>Tôi là khách hàng cũ</b>
                                                </div>
                                            </div>
                                            <?php if ($_SESSION['ERROR_TEXT']) {?>
										      	<div class="alert alert-danger">
										        	<i class="fa fa-exclamation-circle"></i>&nbsp;<?php echo $_SESSION['ERROR_TEXT']?>
										            <button type="button" class="close" data-dismiss="alert">&times;</button>
										        </div>
										    <?php }?>
										    <?php unset($_SESSION['ERROR_TEXT']);?>
								            <form id="login" action="/login.php" method="post" enctype="multipart/form-data">
                                                <div class="content">
                                                    <div class="control-group">
                                                        <label class="padd-form control-label" for="email">E-Mail:</label>
                                                        <div class="controls">
                                                            <input class="q1 margen-bottom" name="email" value="<?php echo $_SESSION['FAILED_EMAIL'];?>" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="padd-form control-label" for="password">Mật Khẩu:</label>
                                                        <div class="controls">
                                                            <input class="q1 margen-bottom" name="password" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>" type="password">
                                                        </div>
                                                    </div>
                                                    <div class="login-buttons">
                                                        <a onclick="$('#login').submit();" class="button-cont-right">Đăng Nhập<i class="icon-circle-arrow-right"></i></a>
                                                        <input name="redirect" value="<?php echo $_GET['ru'];?>" type="hidden">
                                                        <a class="link-login" href="#">Quên mật khẩu</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <?php include_once "view-account-box.php";?>
                </aside>
                <script type="text/javascript">
                    <!--
                    $('#login input').keydown(function(e) {
                        if (e.keyCode == 13) {
                            $('#login').submit();
                        }
                    });
                    //-->
                </script>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>