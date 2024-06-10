<?php
/**
 * Copyright C2009G
 *
 * Trang giỏ hàng
 */
// Cấu hình hệ thống
include_once 'configs.php';

// Thư viện hàm
include_once 'cart-session.php';
include_once 'lib/tool.image.php';

// Nội dung riêng của trang...
$web_title = "Xem Giỏ Hàng";
$web_content = "view/view-checkout-cart.php";

// ...được đặt vào bố cục chung của toàn site:
include_once $web_layout;
