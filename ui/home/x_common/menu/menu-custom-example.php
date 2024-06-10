<?php 
// CHÚ Ý:
// Xóa bỏ các css sau đây khi làm việc với menu:
// <li>: margin-top, opacity=0
// Nên quy nó về trường hợp tổng quát: display=block/none; fadeIn/fadeOut
// thay vì những cái lạ như opacity.
// Nên dùng hàm children() thay vì find()
// bởi vì hàm find() ảnh hưởng cả đến các thẻ cháu, trong khi mình cần
// xử lý mỗi menu con
?>
<!-- Ví Dụ 1: http://livedemo00.template-help.com/opencart_57976/ -->
<script>
$(document).ready(function() {
	// Xử lý menu cấp 2
	// Ngay sau khi di chuot vao the <li> tren menu thi 
	// doi trang thai no sang active, sau do hien thi menu con cua no
	$('#tm_menu > ul > li').on('mouseover', function() { 
		$(this).children('ul').css('display', 'block');
	});
			
	// Ngay sau khi di chuot ra ngoai the <li> tren menu thi 
	// go bo trang thai active, sau do giau di menu con cua no				
	$('#tm_menu > ul > li').on('mouseout', function() { 
		$(this).children('ul').css('display', 'none');
	});
	
	// Xu ly menu cấp 3
	$('#tm_menu > ul > li > ul > li').on('mouseover', function() { 
		$(this).children('ul').css('display', 'block');
	});
	$('#tm_menu > ul > li > ul > li').on('mouseout', function() { 
		$(this).children('ul').css('display', 'none');
	});
	
});
</script>

<!-- Ví Dụ 2: -->
<script>
$(document).ready(function() {
	// Xử lý menu cấp 2
	// Ngay sau khi di chuot vao the <li> tren menu thi 
	// doi trang thai no sang active, sau do hien thi menu con cua no
	$('#menu > ul > li').on('mouseover', function() { 
		$(this).children('.sf-mega').css('display', 'block');
	});
			
	// Ngay sau khi di chuot ra ngoai the <li> tren menu thi 
	// go bo trang thai active, sau do giau di menu con cua no				
	$('#menu > ul > li').on('mouseout', function() {
		$(this).children('.sf-mega').css('display', 'none');
		
	});	
	
	// Xu ly menu cấp 3
	$('.sf-mega-section > li').on('mouseover', function() { 
		$(this).children('ul').css('display', 'block');
	});
							
	$('.sf-mega-section > li').on('mouseout', function() {
		$(this).children('ul').css('display', 'none');
		
	});
});
</script>

<div id="menu">
<ul class="sf-menu">
	<li>
	<a href="">ACCESSORIES</a>
	</li>
	<li>
		<a href="" class="sf-with-ul">CAMERAPHONES <i class="fa fa-angle-down fa-fw"></i></a>
		<div class="sf-mega" style="display: none;">
		<ul class="sf-mega-section">
			<li>
			<a class="screenshot1" href="#route=product/category&amp;path=57_30">Ctetur adipisicing </a>
			</li>
			<li>
				<a class="screenshot1" href="#route=product/category&amp;path=57_29">Lorem ipsum dolor</a>
			</li>
			<li class="">
				<a class="screenshot1 sf-with-ul" href="#route=product/category&amp;path=57_28">Sit amet conse <i class="fa fa-angle-right fa-fw"></i></a>
				<ul style="display: none;">
					<li>
					<a href="#route=product/category&amp;path=57_28_36">Dolore magna aliqua</a>
					</li>
					<li>
					<a href="#route=product/category&amp;path=57_28_35">Ut labore et </a>
					</li>
				</ul>
			</li>
			<li>
			<a class="screenshot1" href="#route=product/category&amp;path=57_32">Tmpor incididunt </a>
			</li>
		</ul>
</div>
</li>
<li class="cat_3">
<a href="#">LUXURY PHONES</a>
</li>
</ul>