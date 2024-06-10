<?php

include_once '../configs.php';

// Thư viện hàm
include_once '../lib/tool.image.php';
include_once '../lib/table/table.product.php';

session_start();

// Nội dung riêng của trang:
$web_title = "Bảng số liệu";
$web_content = "../ui/admin/view/index.html";
$active_page_admin = ACTIVE_PAGE_ADMIN_CHARTS;

check_file_layout($web_layout_admin, $web_content);

// được đặt vào bố cục chung của toàn site:
include_once $_SERVER["DOCUMENT_ROOT"]."/".$web_layout_admin;