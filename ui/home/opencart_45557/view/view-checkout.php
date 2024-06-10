<section>
    <div id="container">
        <p id="back-top" style="display: none;"> <a href="#top"><span></span></a> </p>
        <!-- <div class="container"> -->
            <div id="notification"> </div>
            <!-- <div class="row"> -->
                <!-- <div class=""> -->
                    <!-- <div class="row"> -->
                        <div style="width: 80%; margin: 0 auto;">
                            <div class="breadcrumb">
                                <a href="/home.php">Trang Chủ</a> » <a href="/cart.php">Giỏ Hàng</a> » <a href="/checkout.php" class="last">Thanh Toán</a>
                            </div>
                            <h1>Thanh Toán</h1>
                            <div class="checkout">
                            	<div>
                                    <div class="checkout-heading">
                                        <div class="marker-chekout">Xác Nhận Thông Tin Đơn Hàng & Thanh Toán</div>
                                    </div>
                                    <div class="checkout-content" id="xac-nhan-don-hang" style="display: block">
                                    
                                    <form action="/checkout.php" method="post" enctype="multipart/form-data">
						            	<!-- START GUEST FORM -->
						            	<?php if ($_SESSION['ERROR_TEXT']) {?>
						            	<div class="alert alert-danger">
						            		<i class="fa fa-exclamation-circle"></i>&nbsp;<?php echo $_SESSION['ERROR_TEXT']?>
						            		<button type="button" class="close" data-dismiss="alert">&times;</button>
						            	</div>
						            	<?php }?>
						            	<?php unset($_SESSION['ERROR_TEXT']);?>
						            	<table style="width: 100%;">
						            		<tr>
						            			<th>Thông tin cá nhân</th><th>Địa chỉ</th>
						            		</tr>
						            		<tr>
						            			<td>
							            			<div class="form-group required">
											        <label class="control-label" for="input-payment-firstname">Họ và Tên</label>
											        <input type="text" name="fullname" value="<?php echo $guest_fullname; ?>" placeholder="Tên" id="input-payment-firstname" class="form-control" <?php if(isset($_SESSION['CUS_LOGGED'])) echo "readonly";?>/>
											      </div>
											      <div class="form-group required">
												        <label class="control-label" for="input-payment-address-1">Địa chỉ</label>
												        <input type="text" name="address" value="<?php echo $guest_address; ?>" placeholder="Địa chỉ" id="input-payment-address" class="form-control" <?php if(isset($_SESSION['CUS_LOGGED'])) echo "readonly";?>/>
												      </div>
												      
											      
											      
						            			</td>
						            			<td>
												     
												      <div class="form-group required">
											        <label class="control-label" for="input-payment-email">Email</label>
											        <input type="text" name="email" value="<?php echo $guest_email; ?>" placeholder="Email" id="input-payment-email" class="form-control" <?php if(isset($_SESSION['CUS_LOGGED'])) echo "readonly";?>/>
											      </div>
											      <div class="form-group required">
											        <label class="control-label" for="input-payment-telephone">Điện thoại</label>
											        <input type="text" name="telephone" value="<?php echo $guest_telephone; ?>" placeholder="Điện thoại" id="input-payment-telephone" class="form-control" <?php if(isset($_SESSION['CUS_LOGGED'])) echo "readonly";?>/>
											      </div>
												     
												      
						            			</td>
						            		</tr>
						            	</table>
										
						            	<!-- END GUEST FORM -->
						            	
						            	 <!-- START SHIPPING METHOD -->
										<h4>Ghi chú về đơn hàng</h4>
										  <textarea name="comment" rows="8" class="form-control" style="width: 100%;"><?php echo $guest_comment; ?></textarea>
										
							            <!-- END SHIPPING METHOD -->
							            
							            <!-- START CONFIRM CHECKOUT -->
										<div class="table-responsive">
										  <table class="table table-bordered table-hover">
										    <thead>
										      <tr>
										      	<th class="text-left">Ảnh</th>
										        <th class="text-left">Tên sản phẩm</th>
										        <th class="text-left">Model</th>
										        <th class="text-right">Số lượng</th>
										        <th class="text-right">Giá một đơn vị</th>
										        <th class="text-right">Tổng giá</th>
										      </tr>
										    </thead>
										    <tbody>
										      <?php foreach (cartGetProductsWithFormat() as $product) { ?>
										      <tr>
										      	<td class="text-left"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-thumbnail" /></a></td>
										        <td class="text-left"><?php echo $product['name']; ?></td>
										        <td class="text-left"><?php echo $product['model']; ?></td>
										        <td class="text-right"><?php echo $product['quantity']; ?></td>
										        <td class="text-right"><?php echo $product['price']; ?></td>
										        <td class="text-right"><?php echo $product['total']; ?></td>
										      </tr>
										      <?php } ?>
										    </tbody>
										    <tfoot>
										      <tr>
										        <td colspan="5" class="text-right"><strong>Tổng giá trị đơn hàng:</strong></td>
										        <td class="text-right"><?php echo cartGetTotalWithFormat(); ?></td>
										      </tr>
										      <!-- 
										      <tr>
										        <td colspan="5" class="text-right"><strong>Phí giao hàng:</strong></td>
										        <td class="text-right"></td>
										      </tr>
										      -->
										    </tfoot>
										  </table>
										</div>
							            
							            <!-- END CONFIRM CHECKOUT -->
							            <div class="buttons">
							            <div class="pull-left">
                        	                <a href="/cart.php" class="btn btn-default">Cập Nhật Giỏ Hàng</a>
                        	              </div>
										  <div class="pull-right">
										    <input type="submit" value="Xác nhận đơn hàng" id="button-confirm" data-loading-text="Đang tải" class="btn button" />
										  </div>
										</div>
									 </form>
                                    
                                    
                                    </div><!--  -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
                <!-- 
                <aside class="span3" id="column-right">
                </aside>
                 -->
                <script type="text/javascript">
                    <!--
                    //-->
                </script>
                <div class="clear"></div>
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
    <div class="clear"></div>
</section>