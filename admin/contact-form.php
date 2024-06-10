<?php
/**
 * Copyright C2009G
 *
 * Form sửa/thêm mới phản hồi khách hàng
 */
// Cấu hình hệ thống
include_once '../configs.php';
// Thư viện hàm
include_once '../lib/table/table.contact.php';
include_once '../lib/table/table.department.php';
include_once '../lib/table/table.user.php';

$url = '?';

if (isset($_GET['sort'])) {
     $url .= '&sort=' . $_GET['sort'];
}

if (isset($_GET['order'])) {
     $url .= '&order=' . $_GET['order'];
}

if (isset($_GET['page'])) {
     $url .= '&page=' . $_GET['page'];
}

// Form Action
if (!isset($_GET['contact_id'])) 
{
	$url_action = "/admin/contact-add.php";
	$disabled = "";
	$readonly = "";
} 
else 
{
	$url_action = "/admin/contact-edit.php?contact_id=".$_GET['contact_id'];
	
    // Cho phép sửa liên hệ khách hàng ở một vài chỗ như: nơi nhận, người nhận
    $disabled = ""; //"disabled";
	$readonly = "readonly";
}

$url_cancel = "/admin/contact.php";


if (isset($_GET['contact_id']) && $_SERVER['REQUEST_METHOD'] != "POST") 
{
	$contact_info = contactGetById($_GET['contact_id']);
}

// Tên khách hàng liên hệ
if (isset($_POST['name'])) {
     $name = $_POST['name'];
} elseif (!empty($contact_info)) {
     $name = $contact_info['name'];
} else {
     $name = '';
}

// Email khách hàng liên hệ
if (isset($_POST['email'])) {
     $email = $_POST['email'];
} elseif (!empty($contact_info)) {
     $email = $contact_info['email'];
} else {
     $email = '';
}

// Điện thoại khách hàng liên hệ
if (isset($_POST['phone'])) {
     $phone = $_POST['phone'];
} elseif (!empty($contact_info)) {
     $phone = $contact_info['phone'];
} else {
     $phone = '';
}


// Ngày,tháng,năm hẹn gặp, tiếp nhận
if (isset($_POST['date'])) {
     $date = $_POST['date'];
} elseif (!empty($contact_info)) { 
     //$date = $contact_info['date']; // not work, it is: 2012-10-19 18:19:56
     $timestamp = $contact_info['date']; 
     $splitTimeStamp = explode(" ",$timestamp);
     $date = $splitTimeStamp[0];
     //$time = $splitTimeStamp[1];
} else {
     $date = '';
}

// Giờ,phút hẹn gặp, tiếp nhận
if (isset($_POST['time'])) {
     $time = $_POST['time'];
} elseif (!empty($contact_info)) { 
     $timestamp = $contact_info['date']; 
     $splitTimeStamp = explode(" ",$timestamp);
     $time = $splitTimeStamp[1];
} else {
     $time = '';
}

// Chủ đề liên hệ (bình thường (contact), bình luận (comment), phản hồi (feedback), khiếu nại (complaint), hẹn gặp (appointment))
if (isset($_POST['subject'])) {
	$subject = $_POST['subject'];
} elseif (!empty($contact_info)) {
	$subject = $contact_info['subject'];
} else {
	$subject = '';
}

// Nội dung liên hệ 
if (isset($_POST['message'])) {
	$message = $_POST['message'];
} elseif (!empty($contact_info)) {
	$message = $contact_info['message'];
} else {
	$message = '';
}

if (isset($_POST['website'])) {
     $website = $_POST['website'];
} elseif (!empty($contact_info)) {
     $website = $contact_info['website'];
} else {
     $website = '';
}

if (isset($_POST['address'])) {
	$address = $_POST['address'];
} elseif (!empty($contact_info)) {
	$address = $contact_info['address'];
} else {
	$address = '';
}

// Nội dung riêng của trang:
$web_title = "Phản Hồi Khách Hàng";
$web_content = "../ui/admin/view/view-contact-form.php";

check_file_layout($web_layout_admin, $web_content);

// được đặt vào bố cục chung của toàn site:
include_once $_SERVER["DOCUMENT_ROOT"]."/".$web_layout_admin;
