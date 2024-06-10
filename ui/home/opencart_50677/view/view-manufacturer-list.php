<div id="container">
<p id="back-top" style="display: block;"> <a href="#top"><span></span></a> </p>
<div class="container">
<div id="notification"></div>
<div class="row">
<div class="col-sm-9 col-sm-12   " id="content"> 
<div class="breadcrumb">
	<a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a> » 
	<a href="/manufacturer-list.php" class="last">Thương Hiệu</a>
</div>
<h1>Tìm Thương Hiệu Bạn Yêu Thích</h1>
<div class="box-container">
<p class="manuf-p"><b>Danh mục thương hiệu:</b>
<?php foreach ($manufacturers as $brand) { ?>
	&nbsp;&nbsp;&nbsp;<a href="/manufacturer-list.php#<?php echo $brand['name'];?>"><b><?php echo $brand['name']; ?></b></a>
<?php } ?>
</p>



<?php foreach ($manufacturers as $brand) { ?>
<div class="manufacturer-list">	
    <div class="manufacturer-heading"><span><?php echo $brand['name']; ?></span><a id="<?php echo $brand['name']; ?>"></a></div>
	<div class="manufacturer-content">
	
	<?php if ($brand['manufacturer']) { ?>
	    <?php foreach (array_chunk($brand['manufacturer'], 4) as $manufacturers) { ?>
	<div class="row">
		<?php foreach ($manufacturers as $manufacturer) { ?>
	        <ul class="col-sm-4">
			 <li><a href="<?php echo $manufacturer['href']; ?>"><?php echo $manufacturer['name']; ?></a></li>
			</ul>
	    <?php } ?>
	</div>
		<?php } ?>
	<?php } ?>
	</div>
</div>	
<?php }?>




</div>
</div>
<aside class="col-sm-3" id="column-right">
 <?php include_once "view/view-account-box.php" ?>
</aside>
<div class="clear"></div>
</div>
</div>
</div>
<div class="clear"></div>
