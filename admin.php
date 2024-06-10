<?php
/**
 * Copyright C2009G
 * 
 * Trang quản trị.
 * 
 * Các trang liên quan:
 * ~/admin/index.php
 * ~/admin-authenticate.php
 * ~/admin-login.php
 */
// Cấu hình hệ thống
include_once 'configs.php';

// Nếu như user đã đăng nhập vào rồi
// thì điều hướng vào phần quản trị
// (@todo: điều hướng vào url mà họ yêu cầu trước đó)
$url_redirect = isset ($_SESSION['USER_LOGGED']) ? "/admin/product.php" : "/admin-login.php"; 


// Nếu như đăng nhập vào rồi thì điều hướng
// sang trang dashboard
// còn không thì điều hướng sang
header ("location: ".$url_redirect);
die();