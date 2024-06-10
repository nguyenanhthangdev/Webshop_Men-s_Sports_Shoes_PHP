<?php
/**
 * Copyright C2009G
 *
 * Trang sao chép thông tin sản phẩm cũ sang sản phẩm mới.
 * Ví dụ: khi thêm mới thông tin sản phẩm iPhone 6 Plus thì có thể sao chép từ iPhone 6
 */
// cấu hình hệ thống
include_once '../configs.php';
// thư viện hàm
include_once '../lib/table/table.product.php';

include_once "product-validate.php";

if ( isset($_POST['selected']) && validateCopy())  
{
	// Copy sản phẩm
	foreach ($_POST['selected'] as $product_id) 
	{
		productCopy($product_id);
	}
	
	// Thông báo sao chép thành công
	$_SESSION['SUCCESS_TEXT'] = 'Đã sao chép sản phẩm thành công !';
	
	// Điều hướng tới trang danh sách sản phẩm
     
	header ("location: /admin/product.php");
	die(); // thiếu dòng này dễ gây chết chương trình
}


include_once 'product.php';
