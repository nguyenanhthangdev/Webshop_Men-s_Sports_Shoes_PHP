<?php
/**
 * Copyright C2009G
 *
 * Trang quản lý ảnh. Không chạy được vì giao diện view content của nó
 * chỉ phù hợp cho Ajax
 */
// cấu hình hệ thống
include_once '../configs.php';
 
check_login(); // Phải đăng nhập và @todo phải có quyền

/* Gọi các thư viện cần thiết */
include_once '../lib/table/table.contact.php';

// Nội dung riêng của trang ...
$web_title = 'Quản Lý Ảnh';
$web_content = "filemanager.php";
$active_page_admin = ACTIVE_PAGE_ADMIN_FILEMANAGER;

check_file_layout($web_layout_admin, $web_content);

// ...được đặt vào bố cục chung của toàn website:
include_once $_SERVER["DOCUMENT_ROOT"]."/".$web_layout_admin;
