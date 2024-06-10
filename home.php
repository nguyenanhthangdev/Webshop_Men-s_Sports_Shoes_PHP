<?php 
/**
 * Copyright C2009G
 *
 * Trang chủ web bán hàng.
 * Chú ý xem index.php có gọi đến file này không.
 */
// Cấu hình hệ thống
include_once 'configs.php';

// Thư viện hàm
include_once 'lib/table/table.product.php';
include_once 'lib/table/table.manufacturer.php';
include_once 'lib/table/table.banner_image.php';

// Nội dung riêng của trang...
$web_title   = "Trang Chủ";
$web_content = "view/view-home.php";

// ...được đặt vào bố cục chung của toàn site.
include_once $web_layout;