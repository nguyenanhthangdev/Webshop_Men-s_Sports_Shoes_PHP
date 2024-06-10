<?php  include_once($_SERVER["DOCUMENT_ROOT"].'/configs.php'); ?>
<!DOCTYPE html>
<!-- saved from url=(0051)http://livedemo00.template-help.com/opencart_50677/ -->
<html dir="ltr" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">

<!-- 
	Chú ý: tốt nhất là copy bản menu mẫu trong /web/themes/home/opencart/2.0.1.1/layout-home.php
	để đỡ phải viết lại nhiều mã php.
-->
<style>
/* Màu của đường link trên menu */
#menu ul li a, 
li.sfHover .dropdown-menu a
{
	color: white;
}

/* Màu của đường link trên menu khi di chuột vào */
#menu ul li a:hover 
{
	color: #54BF83;
}

/*
Khi di chuột vào thẻ li thì thường nó sẽ bị thêm vào một lớp,
ví dụ: sfHover. Do vậy chỉ cần viết thêm css cho lớp này là xong.
Logic: khi di chuột vào thẻ <li> cha thì .dropdown-menu con phải hiện ra.
*/
#menu ul li.sfHover .dropdown-menu 
{
	display: block;
	background: #31353D;
}


</style>
<script>
// Có thể viết các đoạn mã javascript để thêm lớp vào thẻ trên menu nếu cần
$(document).ready(function() {
	$('#menu > ul > li.dropdown').bind('mouseover', function() { 
		$(this).addClass('active');
	});
					
	$('#menu > ul > li.dropdown').bind('mouseout', function() {
		$(this).removeClass('active'); 
	});	
});
	
</script>
</head>
<body>
	<nav id="menu" class="navbar">
	    <div class="navbar-header"><span id="category" class="visible-xs">Loại sản phẩm</span>
	      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
	    </div>
	    <div class="collapse navbar-collapse navbar-ex1-collapse">
	      <ul class="nav navbar-nav">
	      <?php foreach (categoryGetAllForMenuHomePage() as $category) { ?>
	        <?php if ($category['children']) { ?>
	        <li class="dropdown"><a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?></a>
	          <div class="dropdown-menu">
	            <div class="dropdown-inner">
	              <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
	              <ul class="list-unstyled">
	                <?php foreach ($children as $child) { ?>
	                <li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
	                <?php } ?>
	              </ul>
	              <?php } ?>
	            </div>
	            <a href="<?php echo $category['href']; ?>" class="see-all">Xem tất <?php echo $category['name']; ?></a> </div>
	        </li>
	        <?php } else { ?>
	        <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
	        <?php } ?>
	      <?php } ?>
	      </ul>
	    </div>
	</nav>
</body>
</html>