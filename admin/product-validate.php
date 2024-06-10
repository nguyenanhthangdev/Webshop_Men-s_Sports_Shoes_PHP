<?php
/**
 * Copyright C2009G
 *
 * Trang xác thực tính hợp lệ của dữ liệu sản phẩm.
 */
// cấu hình hệ thống
include_once '../configs.php';
include_once '../lib/db.php';

function validateForm()
{
	if (empty($_POST['name']) || trim($_POST['name']) == "")
	{
		$_SESSION['ERROR_TEXT'] = 'Bạn vui lòng nhập tên sản phẩm !';
		return false;
	}
	
	
	if (empty($_POST['manufacturer']) || trim($_POST['manufacturer']) == "")
	{ 
		$_SESSION['ERROR_TEXT'] = 'Bạn vui lòng chọn nhà sản xuất cho sản phẩm !';
		return false;
	}

	return true;
}

function validateDelete()
{
	return true;
}

function validateCopy()
{
	return true;
}