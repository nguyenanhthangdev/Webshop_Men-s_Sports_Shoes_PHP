<?php
/**
 * Copyright C2009G
 *
 * Trang thêm mới sản phẩm.
 * Không gộp chung add và edit giống như nhiều framework từng làm !!!
 * Chia ra để trị, quản lý cho dễ.
 */
// cấu hình hệ thống
include_once '../configs.php';
// thư viện hàm
include_once '../lib/table/table.product.php';

include_once 'product-validate.php';

session_start();

// Nếu user gửi form lên
// toàn bộ dữ liệu thêm mới được lưu trong biến mảng $_POST
if ( $_SERVER['REQUEST_METHOD'] == "POST" && validateForm())  
{
	if(isset($_POST['size_or_nosize'])){
		$_SESSION['check'] = $_POST['size_or_nosize'];
	}
	else{
		$_SESSION['check'] = 'hellli';
	}
		

		// Thêm mới sản phẩm
		productAdd($_POST,$n);
		
		// Thông báo thêm mới thành công
		$_SESSION['SUCCESS_TEXT'] = 'Đã thêm mới sản phẩm thành công !';
		
		// Điều hướng tới trang danh sách sản phẩm
		header ("location: /admin/product.php");
		die(); // thiếu dòng này dễ gây chết chương trình
}

$web_title = 'Sản Phẩm';
$form_title = 'Thêm Mới Sản Phẩm';

include_once 'product-form.php';