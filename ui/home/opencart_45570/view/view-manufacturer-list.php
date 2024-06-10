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
                                <a href="/home.php">Trang Chủ</a> » <a href="/admin/manufacturer.php" class="last">Thương Hiệu</a>
                            </div>
                            <h1>Tìm Thương Hiệu Bạn Yêu Thích</h1>
                            <div class="box-container">
                                <p class="manuf-p"><b>Brand Index:</b> &nbsp;&nbsp;&nbsp;
                                    <?php foreach ($manufacturers as $brand) { ?>
										&nbsp;&nbsp;&nbsp;<a href="/manufacturer-list.php#<?php echo $brand['name'];?>"><b><?php echo $brand['name']; ?></b></a>
									<?php } ?>
                                </p>
                                
                                <?php foreach ($manufacturers as $brand) { ?>
                                <div class="manufacturer-list">
                                    <div class="manufacturer-heading"><span><?php echo $brand['name']; ?></span>
                                        <a id="<?php echo $brand['name']; ?>"></a>
                                    </div>
                                    
                                    
                                    <?php if ($brand['manufacturer']) { ?>
									    <?php foreach (array_chunk($brand['manufacturer'], 4) as $manufacturers) { ?>
									<div class="manufacturer-content">
                                        <div class="row-fluid">
										<?php foreach ($manufacturers as $manufacturer) { ?>
									        <ul class="col-sm-4">
											 <li><a href="<?php echo $manufacturer['href']; ?>"><?php echo $manufacturer['name']; ?></a></li>
											</ul>
									    <?php } ?>
										</div>
                                    </div>
										<?php } ?>
									<?php } ?>
                                    
                                    
                                </div>
                                <?php }?>
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