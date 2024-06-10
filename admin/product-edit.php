<?php
/**
 * Copyright C2009G
 *
 * Trang sửa sản phẩm
 * Không gộp chung add và edit giống như nhiều framework từng làm !!!
 * Chia ra để trị, quản lý cho dễ.
 */
// cấu hình hệ thống
include_once '../configs.php';
// thư viện hàm
include_once '../lib/table/table.product.php';

include_once 'product-validate.php';

// Nếu user gửi form lên
// toàn bộ dữ liệu thêm mới được lưu trong biến mảng $_POST
if ( $_SERVER['REQUEST_METHOD'] == "POST" && validateForm())  
{ //var_dump($_POST['sort_order']);die();
	// Sửa sản phẩm
	productEdit($_REQUEST['product_id'], $_POST);
	
	// Thông báo sửa thành công
	$_SESSION['SUCCESS_TEXT'] = "Đã sửa thành công sản phẩm.";
	
	// Điều hướng tới trang danh sách sản phẩm
	header ("location: /admin/product.php");
	die(); // thiếu dòng này dễ gây chết chương trình
}

// Thông tin riêng của trang
$web_title = 'Sản Phẩm';
$form_title = 'Sửa Thông Tin Sản Phẩm';

include_once 'product-form.php';