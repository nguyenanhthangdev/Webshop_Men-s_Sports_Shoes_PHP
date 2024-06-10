<?php
/**
 * Copyright C2009G
 *
 * Các hàm quản lý sản phẩm.
 * Bên cạnh phân loại sản phẩm trong bảng `category` thì còn có một số cột trong
 * bảng `product` giúp phân loại: 
 * - `featured`: sản phẩm nổi bật
 * - `best_seller`: bán chạy
 * - `date_added`: sản phẩm mới
 * 
 * Sự phân loại này giúp tăng sự phong phú giao diện phía trang chủ, 
 * lấp đi nhiều khoảng trống vốn dĩ không có ở thiết kế html gốc.
 * 
 * @see table.category.php để thấy cách viết mã cho quá trình phân trang: được chuẩn hóa
 * cho nhiều bảng khác.
 * 
 * @version 2021.05.11 14h54
 */

// Thư viện hàm
include_once 'tool.image.php';
session_start();
	
/**
 * @param array $data Mảng chứa dữ liệu của sản phẩm mới
 * @return int Mã sản phẩm
 * 
 * @abstract Thêm mới sản phẩm. Quá trình này thêm cả dữ liệu vào
 * các bảng liên quan như ảnh sản phẩm (product_image), loại sản phẩm (category)
 */
function productAdd($data,$n)
{
			
	// Dữ liệu sản phẩm cần được tinh chỉnh
	// trước khi nhúng vào câu lệnh sql
	$name            = db_escape($data['name']);	// Tên
	$description     = db_escape($data['description']); // Mô tả
	$tag             = db_escape($data['tag']);     // từ khóa liên quan
	$model           = db_escape($data['model']);   // mẫu sản phẩm
	$price           = (float)$data['price'];		// giá bán (vnd)

//****************************************************************************************************/
	$sale            = (int)$data['sale'];        // giảm giá(%)
	$amount          = (int)$data['amount'];        // số lượng
	$new             = (int)$data['new'];		// tính chất new (có/không)
	$size_or_nosize  = (int)$data['size_or_nosize'];
//****************************************************************************************************/

	$featured        = (int)$data['featured'];		// tính chất nổi bật (có/không)
	$best_seller     = (int)$data['best_seller'];   // tính chất bán chạy (có/không)
	$status          = (int)$data['status'];	    // trạng thái cho phép/không cho phép
	$sort_order      = (int)$data['sort_order'];	// thứ tự sắp xếp
	
	// Khóa ngoại
	$manufacturer_id = (int)$data['manufacturer_id']; // mã nhà sản xuất

	// Chèn dữ liệu của bản ghi mới vào bảng sản phẩm
	$sql = " 
		INSERT INTO `product`
		SET model = '{$model}',
			manufacturer_id = '{$manufacturer_id}',

			status = '{$status}',
			best_seller = '{$best_seller}',
			featured = '{$featured}',

			sale = '{$sale}',
			
			new = '{$new}',
			size_or_nosize = '{$size_or_nosize}',

			sort_order = '{$sort_order}',
			date_added = NOW(),
            date_modified = NOW(),
			name = '{$name}', 
			description = '{$description}',
			tag = '{$tag}' 
	";
	//echo $sql;die();
	
	db_q($sql);
			
	// Lấy lại khóa chính của bản ghi vừa chèn
	$product_id = (int)db_lastId();
			
	// Cập nhật ảnh đại diện (nếu có) / Product Image Thumbnail
	if (isset($data['image'])) 
	{
		$img = db_escape($data['image']);
		db_q("UPDATE `product` SET `image` = '{$img}' WHERE `product_id` = '{$product_id}'");
	}
			
			// Cách mà PHP xử lý một mảng các thẻ input phía giao diện html gửi lên
			// https://stackoverflow.com/questions/1010941/html-input-arrays
			// <input name="product_image[0][image]" value="apple" />
			// <input name="product_image[0][sort_order]" value="1" />
			
            // <input name="product_image[1][image]" value="pear" />
			// <input name="product_image[1][sort_order]" value="3" />
			
			// <input name="product_image[2][image]" value="bannana" />
			// <input name="product_image[2][sort_order]" value="5" />
			
			// Khi mảng các thẻ <input> đ ó gửi lên thì PHP sẽ hứng : $_POST['product_image']
			// và biến $_POST này được truyền như là đối số cho tham số $data của hàm này productAdd($data)
			
	// Bộ sưu tập ảnh của riêng sản phẩm này (Product Image Collection/Gallery)
	if (isset($data['product_image'])) 
	{
		foreach ($data['product_image'] as $product_image) 
		{
			$image = db_escape($product_image['image']);
			$sort_order = (int)$product_image['sort_order'];
					
			// Nếu ảnh này đã được liên kết với sản phẩm rồi thì thôi, bỏ qua
			// và chuyển sang ảnh tiếp theo của sản phẩm.
			if(in_array($image, productImages($product_id)))
				continue;
					
					
			db_q("
				INSERT INTO `product_image` 
				SET `product_id` = '{$product_id}', 
				    `image` = '{$image}', 
				    `sort_order` = {$sort_order}
			");
		}
	}
// **********************************************************************************************
if($size_or_nosize == 1){
	if (isset($data['product_size'])) 
	{
		foreach ($data['product_size'] as $product_size) 
		{
			$size   = (int)$product_size['size'];
			$amount = (int)$product_size['amount'];
			$priceSize = (float)$product_size['priceSize'];
			db_q("
				INSERT INTO `size_amount` 
				SET `product_id` = '{$product_id}', 
					`size` = '{$size}', 
					`amount` = '{$amount}',
					`priceSize` = '{$priceSize}'
			");
		}
	}
}
else{
	db_q("
		INSERT INTO `amount_price` 
		SET `product_id` = '{$product_id}', 
			`amount` = '{$amount}', 
			`price` = '{$price}'
	");	
}

// if (isset($data['product_size_or_nosize'])) 
// {
// 	foreach ($data['product_size_or_nosize'] as $item) 
// 	{
// 		// $amount   = (int)$item['amount'];
// 		// $price = (float)$item['price'];
// 		db_q("
// 			INSERT INTO `amount_price` 
// 			SET `product_id` = '{$product_id}', 
// 				`amount` = '{$amount}', 
// 				`price` = '{$price}'
// 		");	
// 	}
// }
// *****************************************************************************************************	
	// Loại sản phẩm (Product Category)
	// Một sản phẩm thuộc về/liên kết với nhiều loại
	if (isset($data['product_category'])) 
	{
		foreach ($data['product_category'] as $category_id) 
		{
			db_q("
				INSERT INTO `product_to_category` 
				SET `product_id` = '{$product_id}', 
				`category_id` = '{$category_id}'"
			);
		}
	}
			
	return $product_id;

} // kết thúc hàm productAdd($data)
	
/**
 * @param int $product_id Mã sản phẩm
 * @param array $data Mảng chứa dữ liệu của sản phẩm cần sửa
 * @return int Mã sản phẩm bị chỉnh sửa
 * 
 * @abstract Hàm sửa thông tin sản phẩm.
 */
function productEdit($product_id, $data)
{
	// Dữ liệu của sản phẩm cần được tinh chỉnh lại (tương đối đồng bộ với lúc thêm mới)
	// trước khi nhúng vào câu lệnh sql
	$name            = db_escape($data['name']);	// Tên
	$description     = db_escape($data['description']); // Mô tả
	$tag             = db_escape($data['tag']);     // từ khóa liên quan
	$model           = db_escape($data['model']);   // mẫu sản phẩm
	$color           = $data['color'];
	// $price        = (float)$data['price'];		// giá bán (vnd)
	$featured        = (int)$data['featured'];		// tính chất nổi bật (có/không)
	$new             = (int)$data['new'];		    // tính chất new (có/không)
	$best_seller     = (int)$data['best_seller'];   // tính chất bán chạy (có/không)
	$status          = (int)$data['status'];	    // trạng thái cho phép/không cho phép
	$sort_order      = (int)$data['sort_order'];	// thứ tự sắp xếp
	$sale            = (int)$data['sale'];		    // giảm giá
	$size_or_nosize  = (int)$data['size_or_nosize'];

	// Khóa ngoại
	$manufacturer_id = (int)$data['manufacturer_id']; // mã nhà sản xuất
	
	// Cập nhật dữ liệu của bản ghi cũ
	$sql = " 
		UPDATE product
		SET model = '{$model}',
			manufacturer_id = '{$manufacturer_id}',
			status = '{$status}',
			best_seller = '{$best_seller}',
			featured = '{$featured}',
			new      = '{$new}',
			color    = '{$color}',
			sort_order = '{$sort_order}',
			date_modified = NOW(),
			name = '{$name}', 
			description = '{$description}',
			tag = '{$tag}',
			sale = '{$sale}',
			size_or_nosize = '{$size_or_nosize}'
		WHERE product_id = '{$product_id}'
    ";
			
	db_q($sql);
			
	// Cập nhật ảnh đại diện (nếu có) / Product Image Thumbnail
	if (isset($data['image'])) 
	{
		$image = db_escape($data['image']);
				
		$sql = "UPDATE `product` SET `image` = '{$image}' WHERE `product_id` = '{$product_id}'";
		db_q($sql);
	}
			
	// Xóa đi các ảnh cũ của sản phẩm trong gallery
	db_q("DELETE FROM `product_image` WHERE `product_id` = '{$product_id}'");

	// Bộ sưu tập ảnh sản phẩm này được cập nhật lại / Product Image Collection
	if (isset($data['product_image'])) 
	{
		foreach ($data['product_image'] as $product_image) 
		{
			$image = db_escape($product_image['image']);
			$sort_order = (int)$product_image['sort_order']; // (int) để tránh lỗi Incorrect integer value: '' for column 'sort_order' at row 1
					
			// Nếu ảnh này đã được liên kết với sản phẩm rồi thì thôi, bỏ qua
			// và chuyển sang ảnh tiếp theo của sản phẩm.
			if(in_array($image, productImages($product_id)))
				continue;
					
					
			db_q("
				INSERT INTO `product_image` 
				SET `product_id` = '{$product_id}',
				    `image` = '{$image}', 
				    `sort_order` = '{$sort_order}'
			");
		}
	}

// **************************************************************************************
	db_q("DELETE FROM `size_amount` WHERE `product_id` = '{$product_id}'");
	db_q("DELETE FROM `amount_price` WHERE `product_id` = '{$product_id}'");

if($size_or_nosize == 1){
	if (isset($data['product_size'])) 
		{
			foreach ($data['product_size'] as $product_size) 
			{
				$size   = (int)($product_size['size']);
				$amount = (int)$product_size['amount']; // (int) để tránh lỗi Incorrect integer value: '' for column 'sort_order' at row 1
				$priceSize = (float)$product_size['priceSize'];		
				
				db_q("
				INSERT INTO `size_amount` 
				SET `product_id` = '{$product_id}', 
					`size` = '{$size}', 
					`amount` = '{$amount}', 
					`priceSize` = '{$priceSize}'
				");
			}
		}
}
else{
	$amount   = (int)($data['amount']);
	$price    = (int)$data['price'];	
	
	db_q("
	INSERT INTO `amount_price` 
	SET `product_id` = '{$product_id}', 
		`amount` = '{$amount}', 
		`price` = '{$price}'
	");
}
// ****************************************************************************************
			
	// Xóa đi mối liên quan giữa sản phẩm với các loại cũ
	db_q("DELETE FROM `product_to_category` WHERE `product_id` = '{$product_id}'");

	// Những loại sản phẩm liên quan cần được cập nhật lại / Product To Categories
	if (isset($data['product_category'])) 
	{
		foreach ($data['product_category'] as $category_id) 
		{
			db_q("INSERT INTO `product_to_category` SET `product_id` = '{$product_id}', `category_id` = '{$category_id}'");
		}
	}
			
	return $product_id;
}
	
/**
 * @param int $product_id Mã sản phẩm
 * @return int Mã sản phẩm vừa được sao chép mới
 * 
 * @abstract Sao chép thông tin sản phẩm sang một bản ghi mới.
 * Tiện cho việc thêm mới một sản phẩm có nhiều thông tin trùng với một sản phẩm đã có sẵn.
 */
function productCopy($product_id)
{
	// Lấy ra dữ liệu của bản ghi gốc
	$sql = " 
		SELECT DISTINCT * 
		FROM `product`
		WHERE `product_id` = '{$product_id}'
	";
	$rs = db_row($sql);
		
	$copied_id = NULL;	
	if ( is_array($rs) && !empty($rs) ) 
	{
		$data = array();

		$data = $rs;
				
		// Tinh chỉnh một vài điểm
		$data['status'] = '0'; // chưa cho phép sản phẩm sao chép hiện lên phía trang chủ
	
		$data = array_merge($data, array('product_image' => productGetImages($product_id)));
		$data = array_merge($data, array('product_category' => productCategories($product_id)));
				
		// Tiến hành copy (thêm mới bản ghi với nội dung giống bản ghi gốc)
		$copied_id = productAdd($data);
	}

	return $copied_id;
}	// end function
	
/**
 * @return int Mã sản phẩm bị xóa
 * 
 * @abstract Xóa sản phẩm dựa trên mã
 */
function productDelete($product_id)
{
	// Đếm xem có bao nhiêu đơn hàng đặt sản phẩm này
	$count = (int)db_one("SELECT COUNT(product_id) FROM `order_details` WHERE `product_id`='{$product_id}'");
	$_SESSION['ERROR_TEXT'] = null;
	
	// Nếu như có đơn hàng đặt sản phẩm này thì không thể xóa nó đi khỏi
	// bảng `product` được !!!
	if ($count > 0) 
	{
		$_SESSION['ERROR_TEXT'] = "Không thể xóa sản phẩm id={$product_id} vì tồn tại trong đơn hàng!";
		return false;
	}
	
	// Xóa dữ liệu ở các bảng liên quan đến sản phẩm
	db_q("DELETE FROM `product_image` WHERE `product_id` = '{$product_id}'");
	db_q("DELETE FROM `product_to_category` WHERE `product_id` = '{$product_id}'");
			
	// sau đó xóa bản ghi sản phẩm cần xóa.
	db_q("DELETE FROM `product` WHERE `product_id` = '{$product_id}'");
	
	return $product_id;
	
} // kết thúc hàm productDelete()
	
/**
 * @deprecated Không khuyến khích sử dụng nữa. Chưa loại bỏ hoàn toàn. Chưa cấm sử dụng.
 * @param int $product_id
 */
function productGetById($product_id)
{
	return productById($product_id);
}

/**
 * @param int $product_id Mã sản phẩm
 * @return array Mảng kết hợp chứa dữ liệu 1 sản phẩm lấy ra từ bảng `product`
 * @abstract Lấy ra thông tin một sản phẩm dựa trên mã.
 */
function productById($product_id)
{
	$sql = " 
		SELECT DISTINCT *
		FROM `product` AS p 
		WHERE p.product_id = {$product_id}  
	";
		
	$rs = db_row($sql);
		
	if ( is_array($rs) && !empty($rs) ) 
	{
		return $rs;
	}

	return NULL;
	
} // kết thúc hàm productById()
	
/**
 * @deprecated Không khuyến khích sử dụng nữa. Chưa loại bỏ hoàn toàn. Chưa cấm sử dụng.
 * @param int $product_id
 */
function productGetCategories($product_id)
{
	return productCategories($product_id);
}

/**
 * @param int $product_id Mã sản phẩm
 * @return array Một mảng đánh chỉ số, mỗi phần tử là một mã loại
 * 
 * @abstract Lấy ra các loại liên quan đến 1 sản phẩm 
 */
function productCategories($product_id)
{
	$product_category_data = array();
		
	$sql = " 
		SELECT *
		FROM `product_to_category`
		WHERE product_id = {$product_id}
	";

	$rs = db_q($sql);
	if ( is_array($rs) && !empty($rs) ) 
	{
		foreach ($rs as $result) 
		{
			$product_category_data[] = $result['category_id'];
		}
		
		return $product_category_data;
	}

	return NULL;
	
} // kết thúc hàm productCategories()
	
	
/**
 * Lấy ra các ảnh của một sản phẩm
 * @returns an indexed array of associative arrays
 */
function productGetImages($product_id)
{
	$sql = " 
		SELECT *
		FROM `product_image`
		WHERE product_id = {$product_id}
		ORDER BY sort_order ASC
	";
		
	$rs = db_q($sql);
	if ( is_array($rs) && !empty($rs) )
	{
		return $rs;
	}

	return false;
} // kết thúc hàm productGetImages()

// ************************************************************************************************
function productGetSizes($product_id)
{
	$sql = " 
		SELECT *
		FROM `size_amount`
		WHERE product_id = {$product_id}

	";
		
	$rs = db_q($sql);
	if ( is_array($rs) && !empty($rs) )
	{
		return $rs;
	}

	return false;
} // kết thúc hàm productGetImages()

function productGetAmountPrice($product_id)
{
	$sql = " 
		SELECT *
		FROM `amount_price`
		WHERE product_id = {$product_id}

	";
		
	$rs = db_q($sql);
	if ( is_array($rs) && !empty($rs) )
	{
		return $rs;
	}

	return false;
}

function reduceAmountProduct($data){
	if (isset($data['products'])){
		foreach($data['products'] as $product){
			if($product['size_or_nosize'] == 1){
				$sql = "
					SELECT
						`amount`,
						`priceSize`
					FROM `size_amount`
					WHERE `product_id` = '{$product['product_id']}' AND `size` = '{$product['size']}'
				";
				$amount_price = db_row($sql);
				$amount = (int)$amount_price['amount'] - (int)$product['quantity'];

				$sql_1 = "
					DELETE  FROM `size_amount`
					WHERE `product_id` = '{$product['product_id']}' AND `size` = '{$product['size']}'
				";
				db_q($sql_1);

				$sql_2 = "
					INSERT INTO `size_amount`
					SET	`product_id` = '{$product['product_id']}',
						`size`       = '{$product['size']}',
						`amount`     = '{$amount}',
						`priceSize`  = '{$amount_price['priceSize']}'
				";
				db_q($sql_2);

			}
			if($product['size_or_nosize'] == 0){
				$sql = "
					SELECT
						`amount`,
						`price`
					FROM `amount_price`
					WHERE `product_id` = '{$product['product_id']}'
				";
				$amount_price = db_row($sql);
				$amount = (int)$amount_price['amount'] - (int)$product['quantity'];

				$sql_1 = "
					DELETE  FROM `amount_price`
					WHERE `product_id` = '{$product['product_id']}'
				";
				db_q($sql_1);
				
				$sql_2 = "
					INSERT INTO `amount_price`
					SET	`product_id` = '{$product['product_id']}',
						`amount`     = '{$amount}',
						`price`  = '{$amount_price['price']}'
				";
				db_q($sql_2);
			}
		}
	}
}
// ************************************************************************************************

//function productGetRelatedProducts($product_id)

/**
 * @param $product_id mã sản phẩm
 * @return an associative array
 * @abstract Lấy ra dữ liệu chi tiết(dạng thô) của một sản phẩm (có tính cả các thông tin nằm trong các bảng khác).
 *           Hàm này chạy nhanh hơn hàm productInfo() do nó không phải xử lý ảnh nhiều.
 *           ĐỪNG bắt hàm này phải xử lý ảnh, nếu không nó sẽ gây chậm giống như hàm productInfo().
 *           Xử lý ảnh (thumb, popup, images) là việc của chương trình khách. 
 */

function productDetails($product_id)
{
// câu truy vấn không tường minh, tắt (implicit sql), không liệt kê rõ các cột
// 	$sql = " 
// 		SELECT DISTINCT *, 
// 				p.name AS name, 
// 				p.image, 
// 				m.name AS manufacturer, 
// 				p.sort_order 
// 		FROM product p
// 		LEFT JOIN manufacturer m ON (p.manufacturer_id = m.manufacturer_id) 
// 		WHERE p.product_id = '$product_id' AND p.status = '1'
// 	";
	
    // câu truy vấn tường minh, đầy đủ, rõ ràng, không viết tắt
	$sql = "
		SELECT 
            p.product_id, p.model, p.name, p.image, p.manufacturer_id, p.price, p.sort_order, p.status, p.date_added, p.description, p.best_seller, p.featured, p.tag,
			m.name AS manufacturer,
		FROM `product` AS p
		LEFT JOIN `manufacturer` AS m ON (p.manufacturer_id = m.manufacturer_id)
		WHERE p.product_id = '{$product_id}' AND p.status = '1'
	";
	
	$rs = db_row($sql);

	return $rs;
	
}// kết thúc hàm productDetails()

/**
 * @param int $product_id Mã sản phẩm
 * @return array Mảng kết hợp chứa thông tin sản phẩm lấy ra từ các bảng `product`, `manufacturer`
 * @abstract Lấy ra thông tin một sản phẩm dựa trên mã. Chú ý là chỉ nên gọi hàm này ở trang product-info.php
 *           Đừng gọi hàm này khi duyệt một mảng các sản phẩm vì nó sẽ gây chậm hệ thống, do bản 
 *           thân hàm này có rất nhiều đoạn mã xử lý dữ liệu thô bên trong (xử lý ảnh)
 */
function productInfo($product_id)
{
	// Câu truy vấn
// 	$sql = "
// 		SELECT DISTINCT *,
// 	  		p.name AS name, 
// 	  		p.image,
// 	  		m.name AS manufacturer,
// 	  		p.sort_order
// 	 	FROM product AS p
// 	 	LEFT JOIN manufacturer m ON (p.manufacturer_id = m.manufacturer_id)
// 	 	WHERE p.product_id = '$product_id' AND p.status = '1'
// 	";
	
	// câu truy vấn tường minh, đầy đủ, rõ ràng, không viết tắt
	$sql = "
		SELECT
            p.product_id, p.model, p.name, p.image, p.manufacturer_id, p.sale, p.color, p.sort_order, p.status, p.date_added, p.description, p.best_seller, p.featured, p.tag,  p.size_or_nosize,
			m.name AS manufacturer
		FROM `product` AS p
		LEFT JOIN `manufacturer` AS m ON (p.manufacturer_id = m.manufacturer_id)
		WHERE p.product_id = '{$product_id}' AND p.status = '1'
	";
	
	// Thực thi truy vấn
	$rs = db_row($sql);

	if((int)$rs['size_or_nosize'] == 1){
		$sizes = "
			SELECT
				`size`,
				`amount`,
				`priceSize`
			FROM `size_amount`
			WHERE `product_id` = '{$product_id}'
		";
		$rs1 = db_q($sizes);
	}
	else{
		$noSize = "
			SELECT
				`amount`,
				`price`
			FROM `amount_price`
			WHERE `product_id` = '{$product_id}'
		";
		$rs1 = db_row($noSize);
	}

	// Nếu kết quả truy vấn là mảng không rỗng
	if ( is_array($rs) && !empty($rs) )
	{
		// Ảnh sản phẩm
		if (is_file(DIR_IMAGE . $rs['image'])) // Nếu ảnh sản phẩm này có tồn tại trên máy chủ web  
		{
			$image = img_resize($rs['image'], $settings['width'], $setting['height']);
		} 
		else	// Nếu ảnh sản phẩm này không tồn tại trên ổ cứng web server thì lấy ảnh chờ để thay thế 
		{
			$image = img_resize('placeholder.png', $setting['width'], $setting['height']);
		}
		
		// Hình đại diện sản phẩm trên gallery ảnh sản phẩm (xem /product-info.php)
		if (is_file(DIR_IMAGE . $rs['image']))
		{
			$thumb = img_resize($rs['image'], settings('config_image_popup_width'), settings('config_image_popup_height'));
		}
		else
		{
			$thumb = img_resize('placeholder.png', settings('config_image_popup_width'), settings('config_image_popup_height'));
		}
		
		// Hình ảnh phóng to (zoom-in) sản phẩm trên gallery ảnh sản phẩm (xem /product-info.php)
		
		if (is_file(DIR_IMAGE . $rs['image']))
		{
			$popup = img_resize($rs['image'], settings('config_image_popup_width'), settings('config_image_popup_height'));
		}
		else
		{
			$popup = img_resize('placeholder.png', settings('config_image_popup_width'), settings('config_image_popup_height'));
		}
		
		// Các ảnh sản phẩm
		$product_images = array();
		
		$results = productGetImages($product_id);
		
		foreach ($results as $result)
		{
			if (is_file(DIR_IMAGE . $result['image']))
			{
				$product_images[] = array(
						'popup' => img_resize($result['image'], settings('config_image_popup_width'), settings('config_image_popup_height')),
						'thumb' => img_resize($result['image'], settings('config_image_additional_width'), settings('config_image_additional_height'))
				);
			}
			else
			{
				$product_images[] = array(
						'popup' => img_resize('placeholder.png', settings('config_image_popup_width'), settings('config_image_popup_height')),
						'thumb' => img_resize('placeholder.png', settings('config_image_additional_width'), settings('config_image_additional_height'))
				);
			}
		
		
		}
		
		// Thông Tin Sản Phẩm = Dữ Liệu Gốc của Sản Phẩm nhưng được định dạng lại
		// để trở nên dễ hiểu, dễ đọc với người dùng cuối phía giao diện.
		// Ví dụ: Giá sản phẩm được thêm dấu phẩy ngăn cách phần nghìn và đơn vị ' ₫' (việt nam đồng)
		return array(
			'product_id'        => $rs['product_id'],
			'name'              => $rs['name'],
			'color'             => $rs['color'],
			'description'       => html_entity_decode($rs['description'], ENT_QUOTES, 'UTF-8'),
			'description_short' => utf8_substr(strip_tags(html_entity_decode($rs['description'], ENT_QUOTES, 'UTF-8')), 0, settings('config_product_description_length')) . '..',
			'tag'               => $rs['tag'],
			'model'             => ($rs['model'] == "") ? '...' : $rs['model'],
			'thumb'		        => $thumb,
			'image'             => $image,
		    'popup'             => $popup,
			'product_images'    => $product_images,
			'href'              => "/product-info.php?product_id={$rs['product_id']}",
			'link'              => "/product-info.php?product_id={$rs['product_id']}",
			'manufacturer'      => $rs['manufacturer'],
			'manufacturer_id'   => $rs['manufacturer_id'],
			'manufacturer_href' => '/manufacturer-info.php?manufacturer_id=' . $rs['manufacturer_id'],
			'sale'              => $rs['sale'],
			'rating'            => settings('config_review_status') ? $rs['rating'] : false,
			'sort_order'        => $rs['sort_order'],
			'status'            => $rs['status'],
			'availability'      => ((int)$rs['status'] == 1) ? 'Còn hàng' : 'Hết hàng',
			'date_added'        => $rs['date_added'],
			'date_modified'     => $rs['date_modified'],
			'price'             => $rs1,
			'size_or_nosize'    => $rs['size_or_nosize']
		);
	}
		
	return $rs;
}


/**
 * @param array $data Mảng các tiêu chí
 * @return string
 *
 * @abstract Đếm tổng số sản phẩm dựa theo một tập các tiêu chí nhất định.
 *           Đồng bộ với hàm getProducts()
 *           Ví dụ:
 SELECT COUNT(DISTINCT p.product_id) AS total
 FROM `product` AS p
 WHERE p.name LIKE '%từ khóa%' AND p.model LIKE '%mẫu nào%' AND p.price LIKE '%giá tiền%' ;
 *
 */
function productGetTotal($data=array())
{
	// Các tiêu chí lọc/tìm kiếm yêu cầu bởi phía chương trình khách (giao diện html)
	// thông thường là tên sản phẩm, mẫu sản phẩm, đơn giá 1 sản phẩm
	$filter_name  = "%".db_escape($data['filter_name']) . "%";
	$filter_model = "%".db_escape($data['filter_model']) . "%";
	// $filter_price = "%".db_escape($data['filter_price']) . "%";

	// Nhúng các tiêu chí tìm kiếm vào câu sql đếm thống kê
	$sql = "
		SELECT COUNT(DISTINCT `product_id`) AS total
	 	FROM `product` AS p
	 	WHERE `name`  LIKE '{$filter_name}'
	  	  AND `model` LIKE '{$filter_model}'
	     
	";

	// Nếu yêu cầu tìm theo trạng thái của sản phẩm (cho phép/không cho phép hiện trên giao diện)
	// thì bổ sung yêu cầu này vào câu sql
	if (isset($data['filter_status']) && !is_null($data['filter_status'])) 
	{
		$sql .= " AND `status` = '" . (int)$data['filter_status'] . "'";
	}
	
	// Nếu yêu cầu tìm các sản phẩm nổi bật
	if (isset($data['filter_featured']) && !is_null($data['filter_featured']))
	{
		$sql .= " AND `featured` = '" . (int)$data['filter_featured'] . "'";
	}
	
	// Nếu yêu cầu tìm các sản phẩm bán chạy
	if (isset($data['filter_best_seller']) && !is_null($data['filter_best_seller']))
	{
	    $sql .= " AND `best_seller` = '" . (int)$data['filter_best_seller'] . "'";
	}

//********************************************************************************************** */
	//Nếu yêu cầu tìm các sản phẩm giảm giá
	$bienSale = (int)$data['filter_sale'];
	if (isset($data['filter_sale']) && !is_null($data['filter_sale']) && ($bienSale==0))
	{
	    $sql .= " AND `sale` = 0";
	}
	else if (isset($data['filter_sale']) && !is_null($data['filter_sale']) && ($bienSale!=0))
	{
		$sql .= " AND `sale` != 0";
	}

	// $bienAmount = (int)$data['filter_amount'];
	// if (isset($data['filter_amount']) && !is_null($data['filter_amount']) && ($bienAmount==0))
	// {
	//     $sql .= " AND `amount` = 0";
	// }
	// else if (isset($data['filter_amount']) && !is_null($data['filter_amount']) && ($bienAmount!=0))
	// {
	// 	$sql .= " AND `amount` != 0";
	// }

	// Nếu yêu cầu tìm các sản phẩm new
	if (isset($data['filter_new']) && !is_null($data['filter_new']))
	{
		$sql .= " AND `new` = '" . (int)$data['filter_new'] . "'";
	}

	// Nếu yêu cầu tìm các sản phẩm có size or ko có size
	if (isset($data['filter_size_or_nosize']) && !is_null($data['filter_size_or_nosize']))
	{
		$sql .= " AND `size_or_nosize` = '" . (int)$data['filter_size_or_nosize'] . "'";
	}
//*********************************************************************************************** */

	// Khi đếm tổng số sản phẩm thì không cần quan tâm đến thứ tự sắp xếp

	$rs = db_one($sql);
	if ( !is_null($rs) )
	{
		return $rs;
	}

	return false;
	
}

function getPriceOfProductWithSize($product_id){
	$sizes = "
		SELECT
			`priceSize`
		FROM `size_amount`
		WHERE `product_id` = '{$product_id}'
	";
	
	$rs = db_q($sizes);

	if ( is_array($rs) && !empty($rs) )
	{
		return $rs;
	}

	return false;
}

function getPriceOfProductWithNoSize($product_id){
	$noSize = "
		SELECT
			`price`
		FROM `amount_price`
		WHERE `product_id` = '{$product_id}'
	";
	$rs = db_one($noSize);
	if ( !is_null($rs) )
	{
		return $rs;
	}

	return false;
}

// **********************************************BIỂU ĐỒ*************************************
function productCharts(){
	$sql = "
		SELECT 
			`name`
		FROM `manufacturer`
	";

	$rs = db_q($sql);
	if ( is_array($rs) && !empty($rs) )
	{
		return $rs;
	}

	return false;
}

/**
 * Lấy ra tất cả các sản phẩm dựa trên một tập các tiêu chí nhất định,
 * đồng bộ với hàm: getTotalProducts()
 *
 * Ví dụ:
 SELECT * FROM `product`
 WHERE `name` LIKE '%tên sp%'
 AND `model` LIKE '%mẫu sp%' AND `price` LIKE '%giá tiền%'
 ORDER BY `name` ASC
 LIMIT 0,20;

 * @param array $data Mảng các tiêu chí truy vấn sản phẩm
 * @return array an indexed array of associative arrays
 * @todo Học tập cách lọc theo khoảng giá:
 * http://localhost/manufacturer-info.php?manufacturer_id=8&sort=p.price&order=RANGE&price_min=3000000&price_max=20000000
 * 
 * @desc Đừng bắt hàm này đọc cấu hình mặc định của hệ thống từ database.
 *       Ví dụ: $limit = 20, chứ đừng viết là $limit = $settings['config_admin_limit'].
 *       Nhường việc đọc dữ liệu db cho chương trình khách, cụ thể ở đây là tầng logic.
 */

function currency_format($number, $suffix = 'đ') {
	if (!empty($number)) {
		return number_format($number, 0, ',', '.') . "{$suffix}";
	}
}

function productGetAll($data = array())
{
	// Các tiêu chí lọc/tìm kiếm yêu cầu bởi phía chương trình khách (giao diện html)
	// thông thường là tên sản phẩm, mẫu sản phẩm, đơn giá 1 sản phẩm
	$filter_name  = "%".db_escape($data['filter_name']) . "%";
	$filter_model = "%".db_escape($data['filter_model']) . "%";
	// $filter_price = "%".db_escape($data['filter_price']) . "%";

	// Nhúng các tiêu chí tìm kiếm vào câu sql đếm thống kê
	$sql = "
		SELECT *
		FROM `product` AS p
		WHERE   `name`  LIKE '{$filter_name}'
	 		AND `model` LIKE '{$filter_model}'
	";

	// Nếu yêu cầu tìm theo trạng thái của sản phẩm (cho phép/không cho phép hiện trên giao diện)
	// thì bổ sung yêu cầu này vào câu sql
	if (isset($data['filter_status']) && !is_null($data['filter_status'])) 
	{
		$sql .= " AND `status` = '" . (int)$data['filter_status'] . "'";
	}
	
	// Nếu yêu cầu tìm các sản phẩm nổi bật
	if (isset($data['filter_featured']) && !is_null($data['filter_featured']))
	{
		$sql .= " AND `featured` = '" . (int)$data['filter_featured'] . "'";
	}
	
	// Nếu yêu cầu tìm các sản phẩm bán chạy
	if (isset($data['filter_best_seller']) && !is_null($data['filter_best_seller']))
	{
	    $sql .= " AND `best_seller` = '" . (int)$data['filter_best_seller'] . "'";
	}

// *******************************************************************************************
	// Nếu yêu cầu tìm các sản phẩm new
	if (isset($data['filter_new']) && !is_null($data['filter_new']))
	{
		$sql .= " AND `new` = '" . (int)$data['filter_new'] . "'";
	}

	if (isset($data['filter_color']) && !is_null($data['filter_color']))
	{
		$sql .= " AND `color` = '" . (int)$data['filter_color'] . "'";
	}

	// Nếu yêu cầu tìm các sản phẩm giảm giá
	if (isset($data['filter_sale']) && !is_null($data['filter_sale']))
	{
		if((int)$data['filter_sale'] == 0)
		{
			$sql .= " AND `sale` = 0";
		}
	    else if((int)$data['filter_sale'] != 0)
		{
			$sql .= " AND `sale` != 0";
		}
	}

	// Nếu yêu cầu tìm các sản phẩm còn hàng
	// if (isset($data['filter_amount']) && !is_null($data['filter_amount']))
	// {
	// 	if((int)$data['filter_amount'] == 0)
	// 	{
	// 		$sql .= " AND `amount` = 0";
	// 	}
	//     else if((int)$data['filter_amount'] != 0)
	// 	{
	// 		$sql .= " AND `amount` != 0";
	// 	}
	// }
// ********************************************************************************************
	//$sql .= " GROUP BY p.product_id";

	// Các cột được phép sắp xếp (tăng/giảm).
	$sort_data = array(
		'p.product_id',
		'p.name',
		'p.model',

		'p.status',
		'p.sort_order'
	);

	// Nếu phía giao diện yêu cầu sắp xếp theo một trong các cột được phép
	// liệt kê ở trên ...
	if (isset($data['sort']) && in_array($data['sort'], $sort_data)) 
	{
		$sql .= " ORDER BY " . $data['sort'];
	} 
	else // ... còn không nói gì thì sắp xếp theo cột tên sản phẩm `name`
	{
		$sql .= " ORDER BY `name`";
	}

	// Nếu phía giao diện yêu cầu sắp xếp giảm
	if (isset($data['order']) && ($data['order'] == 'DESC')) 
	{
		$sql .= " DESC";
	} 
	else // còn không nói gì thì sắp xếp tăng 
	{
		$sql .= " ASC";
	}

	// Nhúng thông tin phân trang (nếu có) vào trong $sql
	if (isset($data['start']) || isset($data['limit'])) 
	{
		// tinh chỉnh chỉ số của bản ghi bắt đầu
		if ((int)$data['start'] < 0) 
		{
			$data['start'] = 0;
		}

		// tinh chỉnh chỉ số của bản ghi kết thúc
		// nếu phía khách không chỉ rõ giới hạn phân trang thì ấn định / chỉ định 1 giá trị cụ thể 
		// đừng lấy thông tin này ra từ database, vì đó là việc của phía khách: settings('config_limit_admin');
		if ((int)$data['limit'] < 1) 
		{
			$data['limit'] = 5; //settings('config_limit_admin');
		}

		$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
	}

	$rs = db_q($sql);
	if ( is_array($rs) && !empty($rs) )
	{
		return $rs;
	}

	return false;

} // end function

/**
 * @abstract Đếm tổng số sản phẩm dựa theo tiêu chí tìm kiếm.
 * Phục vụ tìm kiếm sản phẩm trên trang chủ home.
 * 
 * @todo Đồng nhất hàm này với hàm productGetAllForSearch()
 * @todo Khi tìm theo description thì total hiển thị không đúng lắm.
 */
function productGetTotalForSearch($data = array())
{
	$sql = " 
		SELECT COUNT(DISTINCT p.product_id) AS total
		FROM `product` p
		WHERE p.status = '1'
	";
			
			
	if (!empty($data['filter_name']) || !empty($data['filter_tag'])) 
// 	if ( !empty($data['filter_name']) ) // cách làm sai !!! 
	{
		$sql .= " AND (";
	
		if (!empty($data['filter_name'])) 
		{
			$implode = array();
					
			// Bẻ nhỏ các từ khóa trong chuỗi kí tự tìm kiếm
			$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));
					
			// so sánh mỗi từ đó với tên sản phẩm
			foreach ($words as $word) 
			{
				$implode[] = "p.name LIKE '%" . db_escape($word) . "%'";
			}
	
			if ($implode) 
			{
				$sql .= " " . implode(" AND ", $implode) . "";
			}
					
			// Nếu như tìm kiếm cả trong phần mô tả sản phẩm
// 			if (!empty($data['filter_description'])) {
// 				$sql .= " OR p.description LIKE '%" . db_escape($data['filter_name']) . "%'";
// 			}
					
			$sql .= " OR ";
					
			// Nâng cấp tìm trong cả mô tả sản phẩm: bẻ nhỏ từ khóa tìm kiếm
			$implode_desc = array();
			foreach ($words as $word) 
			{
				$implode[] = "p.description LIKE '%" . db_escape($word) . "%'";
			}
					
			if ($implode_desc) 
			{
				$sql .= " " . implode(" AND ", $implode_desc) . "";
			}
					
		}
	
		if (!empty($data['filter_name']) && !empty($data['filter_tag'])) 
		{
			$sql .= " OR ";
		}
	
		if (!empty($data['filter_tag'])) 
		{
			$sql .= "p.tag LIKE '%" . db_escape(utf8_strtolower($data['filter_tag'])) . "%'";
		}
	
		if (!empty($data['filter_name'])) 
		{
			$sql .= " OR LCASE(p.model) = '" . db_escape(utf8_strtolower($data['filter_name'])) . "'";
		}
	
		$sql .= ")";
	}
			
	$rs = db_one($sql);
	
	return $rs;
}	

/**
 * @abstract Lấy ra tất cả các sản phẩm phù hợp với tiêu chí tìm kiếm.
 * Phải tìm kiếm sao cho ngay cả khi người dùng gõ nhiều từ khóa vào Search Box thì vẫn ra.
 * Thuật toán: bẻ vụn từ khóa tìm kiếm ra thành nhiều từ rồi lần lượt so sánh nó với `name`, `description`, `model`
 * Tìm theo tên, mô tả, tag (từ khóa)
 * 
 * @synchronized Đồng nhất hàm này với hàm productGetTotalForSearch()
ví dụ: search: mobile new
SELECT * 
FROM `product` p 
WHERE p.status = '1' AND ( 
      p.name LIKE '%mobile%' AND 
      p.name LIKE '%new%' OR 
      p.description LIKE '%mobile%' AND 
      p.description LIKE '%new%' OR 
      p.tag LIKE '%mobile new%' OR 
      LCASE(p.model) = 'mobile new') 
ORDER BY p.sort_order ASC, LCASE(p.name) 
ASC LIMIT 0,15﻿

Phục vụ tìm kiếm sản phẩm trên trang chủ home.
@todo hiện các tags sản phẩm trên trang chủ
 */
function productGetAllForSearch($data = array())
{
	$sql = " 
		SELECT *
		FROM `product` p
		WHERE p.status = '1' 
	";
			
			
	if (!empty($data['filter_name']) || !empty($data['filter_tag'])) 
	{
		$sql .= " AND (";
	
		if (!empty($data['filter_name'])) 
		{
			$implode = array();
					
			// Bẻ nhỏ các từ khóa trong chuỗi kí tự tìm kiếm
			$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));
					
			// so sánh mỗi từ đó với tên sản phẩm
			foreach ($words as $word) 
			{
				$implode[] = "p.name LIKE '%" . db_escape($word) . "%'";
			}
	
			if ($implode) 
			{
				$sql .= " " . implode(" AND ", $implode) . "";
			}
					
			// Nếu như tìm kiếm cả trong phần mô tả sản phẩm
			if (!empty($data['filter_description'])) 
			{
				// $sql .= " OR p.description LIKE '%" . db_escape($data['filter_name']) . "%'"; // cách làm cũ
						
				$sql .= " OR ";
						// Nâng cấp tìm trong cả mô tả sản phẩm: bẻ nhỏ từ khóa tìm kiếm
				$implode_desc = array();
				foreach ($words as $word)
				{
					$implode_desc[] = "p.description LIKE '%" . db_escape($word) . "%'";
				}
						
				if ($implode_desc)
				{
						$sql .= " " . implode(" AND ", $implode_desc) . "";
				}
			}

		}
	
		// Nếu tìm kiếm theo cả tên sản phẩm và tag sản phẩm thì bổ sung từ khóa OR
		if (!empty($data['filter_name']) && !empty($data['filter_tag']))
		{
			$sql .= " OR ";
		}
		
		// Nếu tìm kiếm theo tag sản phẩm:
		// thông thường, ở phía chương trình khách mà không nhận được tag thì người ta gán
		// search_key_word vào tag hay: filter_tag = filter_name = search
		if (!empty($data['filter_tag']))
		{
			$sql .= "p.tag LIKE '%" . db_escape(utf8_strtolower($data['filter_tag'])) . "%'";
		}
		
		if (!empty($data['filter_name']))
		{
			$sql .= " OR LCASE(p.model) = '" . db_escape(utf8_strtolower($data['filter_name'])) . "'";
		}
	
		$sql .= ")";
	}
	
	// Các cột được phép sắp xếp
	$sort_data = array(
		'p.name',
		'p.model',
		'p.sort_order',
		'p.date_added'
	);

	// Nếu chỉ định rõ cột sắp xếp và cột này nằm trong danh sách cho phép
	if (isset($data['sort']) && in_array($data['sort'], $sort_data)) 
	{
			if ($data['sort'] == 'p.name' || $data['sort'] == 'p.model') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} elseif ($data['sort'] == 'p.price') {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY " . $data['sort'];
			}
	} 
	else // còn nếu không nói gì thì sắp xếp theo cột `sort_order`
	{
		$sql .= " ORDER BY p.sort_order";
	}

	// Nếu chỉ định chiều sắp xếp là tăng
	if (isset($data['order']) && ($data['order'] == 'DESC')) 
	{
			$sql .= " DESC, LCASE(p.name) DESC";
	} 
	else // còn không nói gì thì sắp xếp giảm
	{
			$sql .= " ASC, LCASE(p.name) ASC";
	}
	
	// Phân trang
	if (isset($data['start']) || isset($data['limit'])) 
	{
		if ($data['start'] < 0) 
		{
			$data['start'] = 0;
		}

		if ($data['limit'] < 1) 
		{
			$data['limit'] = settings('config_limit_admin');
		}

		$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
	}
	
	//		echo $sql;
	$rs = db_q($sql);
	
	return $rs;
}	

/**
 * @param array $data
 * @abstract Đếm tất cả các sản phẩm thuộc về cùng một nhà sản xuất.
 */
function productGetTotalForManufacturer($data = array())
{
	$sql = " 
		SELECT COUNT(DISTINCT p.product_id) AS total
		FROM `product` p
		WHERE p.status = '1' 
		
	";
			
	if (!empty($data['filter_manufacturer_id'])) 
	{
		$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
	}
	
	// Nếu phía giao diện yêu cầu lọc sản phẩm theo khoảng giá
	if (!empty($data['price_min']) && !empty($data['price_max']))
	{
		$sql .= " AND p.price BETWEEN " . (int)$data['price_min'] . " AND ".(int)$data['price_max'];
	}
	
	$rs = db_one($sql);
	
	return $rs;
}

/**
 * @param array $data
 * @return array();
 * @abstract Lấy ra tất cả các sản phẩm thuộc về cùng một nhà sản xuất.
 */
function productGetAllForManufacturer($data = array())
{
	$sql = " 
		SELECT *
		FROM `product` p
		WHERE p.status = '1' 
	";
	
	if (!empty($data['filter_manufacturer_id'])) 
	{
		$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
	}

    // Nếu phía giao diện yêu cầu lọc sản phẩm theo khoảng giá
    if (!empty($data['price_min']) && !empty($data['price_max'])) 
	{
		$sql .= " AND p.price BETWEEN " . (int)$data['price_min'] . " AND ".(int)$data['price_max'];
	}
			
	// Các cột được phép sắp xếp
	$sort_data = array(
			'p.name',
			'p.model',
			'p.price',
			'p.sort_order',
			'p.date_added'
	);

	// Nếu chỉ định cột sắp xếp
	if (isset($data['sort']) && in_array($data['sort'], $sort_data)) 
	{
		if ($data['sort'] == 'p.name' || $data['sort'] == 'p.model') 
		{
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
		} 
		elseif ($data['sort'] == 'p.price') 
		{
				$sql .= " ORDER BY " . $data['sort'];
		} 
		else {
				$sql .= " ORDER BY " . $data['sort'];
		}
	} 
	else // còn không nói gì thì sắp xếp theo cột `sort_order`
	{
			$sql .= " ORDER BY p.sort_order";
	}

	// Nếu chỉ định chiều sắp xếp giảm dần
	if (isset($data['order']) && ($data['order'] == 'DESC')) 
	{
			$sql .= " DESC, LCASE(p.name) DESC";
	} 
	else // còn không nói gì thì sắp xếp tăng dần 
	{
			$sql .= " ASC, LCASE(p.name) ASC";
	}
	
	// Phân trang
	if (isset($data['start']) || isset($data['limit'])) 
	{
		if ($data['start'] < 0) 
		{
			$data['start'] = 0;
		}

		if ($data['limit'] < 1) 
		{
			$data['limit'] = 20;
		}

		$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
	}
			
	$rs = db_q($sql);
	
	return $rs;
}	

function getThePriceOfOutstandingProduct($size_or_nosize, $product_id){
	if($size_or_nosize == 1){
		$sizes = "
			SELECT
				`priceSize`
			FROM `size_amount`
			WHERE `product_id` = '{$product_id}'
		";
		$results = db_q($sizes);
		$x = 0;
		foreach($results as $item){
			$result[$x] = $item['priceSize'];
			$x++;
		}
	}
	else{
		$noSize = "
			SELECT
				`price`
			FROM `amount_price`
			WHERE `product_id` = '{$product_id}'
		";
		$result = db_row($noSize);
	}

	return $result;
}

/**
 @description Tính tổng số sản phẩm thuộc về loại sản phẩm này
 
 @param $category_id int Id loại sản phẩm
 @return int tổng số sản phẩm
 */
function productGetTotalForCategory($category_id)
{
	$sql = " 
		SELECT COUNT(DISTINCT p.product_id) AS total
		FROM `product_to_category` AS p2c
		LEFT JOIN `product` AS p ON (p2c.product_id = p.product_id)
		WHERE p.status = '1' 
			AND p2c.category_id = '{$category_id}'
    ";
			
	return (int)db_one($sql);
	
}

/**
 @description Lấy ra toàn bộ các bản ghi sản phẩm (có phân trang) của loại sản phẩm truyền vào
 @return array Mảng chỉ số, mỗi phần tử là mảng kết hợp biểu diễn một bản ghi sản phẩm
 $filter_data = array(
				'filter_category_id' => $category_id,
				'filter_filter'      => $filter,
				'sort'               => $sort,
				'order'              => $order,
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit
			);
 */
function productGetAllForCategory($data = array()) 
{
	$category_id = (int)$data['filter_category_id'];
	$sql = " 
		SELECT *
		FROM `product_to_category` AS p2c
		LEFT JOIN `product` AS p ON (p2c.product_id = p.product_id)
		WHERE p.status = '1' 
			AND p2c.category_id = '{$category_id}'
		GROUP BY p.product_id
	";

	$sort_data = array(
		'p.name',
		'p.model',
		'p.sort_order',
		'p.date_added',
		'p.sale',
		'p.new',
		'p.size_or_nosize'
	);
	
	// Sắp xếp theo cột nào ?
	if (isset($data['sort']) && in_array($data['sort'], $sort_data)) 
	{
			if ($data['sort'] == 'p.name' || $data['sort'] == 'p.model') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} elseif ($data['sort'] == 'p.price') {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY " . $data['sort'];
			}
	} else {
			$sql .= " ORDER BY p.sort_order";
	}

	// Sắp xếp tăng hay giảm ?
	if (isset($data['order']) && ($data['order'] == 'DESC')) 
	{
			$sql .= " DESC, LCASE(p.name) DESC";
	} else {
			$sql .= " ASC, LCASE(p.name) ASC";
	}
	
	// Phân trang
	if (isset($data['start']) || isset($data['limit'])) 
	{
		if ($data['start'] < 0) 
		{
			$data['start'] = 0;
		}

		if ($data['limit'] < 1) 
		{
			$data['limit'] = 20;
		}

		$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
	}
	
	return db_q($sql);
}


/**
 * 
 * @return array Mảng chỉ số. Mỗi phần tử là một mảng kết hợp biểu diễn sản phẩm nổi bật.
 * @abstract Lấy ra danh sách các sản phẩm nổi bật. Danh sách này được ấn định một cách
 			tùy ý từ màn hình quản trị.
 			ĐỪNG dùng hàm productInfo() ở đây vì nó sẽ gây chậm, do hàm này có nhiều
 			tác vụ con bên trong. hàm productDetails() chạy nhanh hơn.
 			
 	Hàm kiểu này không nặng nề chuyện lọc/tìm kiếm, sắp xếp, phân trang.
 	Chỉ đơn giản là lấy ra vài bản ghi và hiện lên cho có.
 	
 	@version 2021.04.28 14h40
 	
 	@todo Bổ sung tham số dạng mảng cho hàm này với các key:
 	'limit': giới hạn số bản ghi.
 	'img_w': độ rộng ảnh sản phẩm nổi bật trên trang chủ (product_box_image_width)
 	'img_h': độ dài ảnh sản phẩm nổi bật trên trang chủ (product_box_image_height)
 	'desc_lenth': độ dài mô tả sản phẩm.
 	tóm lại là phải xây dựng cơ chế tùy chỉnh linh hoạt, để mỗi khi thay giao diện khác thì
 	admin có thể chỉnh được kích thước và nội dung cho phù hợp giao diện mới đó.
 	Hoặc ít nhất coder có thể tùy chỉnh trong mã nguồn php, html.
 */
function productFeatureds( $data=array() )
{
    // Nếu giá trị của các tham số đầu vào có vấn đề, không hợp lệ thì thay thế bằng giá trị mặc định
    $limit = ( isset($data['limit']) && (int)$data['limit'] > 0 ) ? (int)$data['limit'] : 3;
    $width = ( isset($data['width']) && (int)$data['width'] > 0 ) ? (int)$data['width'] : 160;
    $height = ( isset($data['height']) && (int)$data['height'] > 0 ) ? (int)$data['height'] : 90;
    
    if(isset($data['text_length']) && (int)$data['text_length'] > 0)
    {
        $text_length = (int)$data['text_length'];
    } else {
        $text_length = 120;
    }
	
    // Câu truy vấn tường minh, liệt kê rõ các cột cần lấy dữ liệu,
    // không nên viết kiểu ngầm định: SELECT DISCTINCT *
	$sql = "
		SELECT
         p.product_id,
		 p.name,
		 p.image,
         p.description,
         p.model,
		 p.sale,
		 p.new,
         p.sort_order,
		 p.size_or_nosize,
         p.manufacturer_id,
		 m.name AS manufacturer
		FROM `product` AS p
		LEFT JOIN `manufacturer` m ON (p.manufacturer_id = m.manufacturer_id)
		WHERE p.status = '1' AND p.featured = '1'
	";
	
	// Lấy ra dữ liệu thô: danh sách các sản phẩm nổi bật
	// và giới hạn số lượng hiển thị trên html.
	$rs = db_q($sql);

	$sql1 = "
		SELECT *
		FROM `amount_price`
	";
	$rs1 = db_q($sql1);

	$sql2 = "
		SELECT *
		FROM `size_amount`
	";
	$rs2 = db_q($sql2);

	// bổ sung dữ liệu phái sinh, có định dạng dễ hiểu với người dùng cuối.
	// Duyệt mảng dữ liệu thô theo kiểu tham chiếu (&) thì mới can thiệp, chỉnh sửa, bổ sung
	// dữ liệu gốc của mỗi dòng bản ghi truy vấn được.
	// Định dạng lại dữ liệu của mỗi bản ghi để dễ hiểu hơn với người dùng cuối
	foreach ($rs as &$row) 
	{
	    // Địa chỉ web http dẫn tới ảnh gốc
	   $row['img_src'] = URL_IMAGE.$row['image'];
	   $row['url_image'] = URL_IMAGE.$row['image'];
	   
	   // Địa chỉ web http dẫn tới ảnh bị chỉnh kích thước
	   $row['thumb'] = url_image_resized($row['image'], $width, $height);
	   $row['url_image_resized'] = url_image_resized($row['image'], $width, $height);

	   // Tên sản phẩm
	   $row['name'] = $row['name'];
	   
	   // Mô tả sản phẩm
	   $row['description_short'] = text_short($row['description'], $text_length);
	   $row['desc_short'] = text_short($row['description'], $text_length);
	   
	   
	   $row['href'] = "/product-info.php?product_id=" . $row['product_id'];
	   $row['href_man'] = '/manufacturer-info.php?manufacturer_id=' . $row['manufacturer_id'];
	   $row['manufacturer_href'] = '/manufacturer-info.php?manufacturer_id=' . $row['manufacturer_id'];

	   $row['sale'] = $row['sale'];
	   $row['new'] = $row['new'];
	   $row['size_or_nosize'] = $row['size_or_nosize'];

	   if($row['size_or_nosize']==1){
			$x = 0;
			foreach($rs2 as $item){
				if($row['product_id'] == $item['product_id']){
					$row['price'][$x] = $item['priceSize'];
					$x++;
				}
			}
	   }
	   else{
			foreach($rs1 as $item){
				if( (int)$row['product_id'] == (int)$item['product_id'] ){
					$row['price'] = $item['price'];
				}
			}
	   }
	}
	
	// Cắt bớt mảng theo giới hạn mà phía chương trình khách yêu cầu.
	$rs = array_slice($rs, 0, 20);
	
	return $rs;
}// end function productFeatureds()


/**
 *
 * @return array Mảng chỉ số. Mỗi phần tử là một mảng kết hợp biểu diễn sản phẩm bán chạy.
 * @abstract Lấy ra danh sách các sản phẩm nổi bật. Danh sách này được ấn định một cách
 tùy ý từ màn hình quản trị.
 ĐỪNG dùng hàm productInfo() ở đây vì nó sẽ gây chậm, do hàm này có nhiều
 tác vụ con bên trong. hàm productDetails() chạy nhanh hơn.
 
 Hàm kiểu này không nặng nề chuyện lọc/tìm kiếm, sắp xếp, phân trang.
 	Chỉ đơn giản là lấy ra vài bản ghi và hiện lên cho có.
 */
function productBestSellers($data=array())
{
    // Nếu giá trị của các tham số đầu vào có vấn đề, không hợp lệ thì thay thế bằng giá trị mặc định
    $limit = ( isset($data['limit']) && (int)$data['limit'] > 0 ) ? (int)$data['limit'] : 3;
    $width = ( isset($data['width']) && (int)$data['width'] > 0 ) ? (int)$data['width'] : 160;
    $height = ( isset($data['height']) && (int)$data['height'] > 0 ) ? (int)$data['width'] : 90;
    
    if(isset($data['text_length']) && (int)$data['text_length'] > 0)
    {
        $text_length = (int)$data['text_length'];
    } else {
        $text_length = 100;
    }
    
    // Câu truy vấn tường minh, liệt kê rõ các cột cần lấy dữ liệu,
    // không nên viết kiểu ngầm định: SELECT DISCTINCT *
    $sql = "
		SELECT
         p.product_id,
		 p.name,
		 p.image,
         p.description,
         p.price,
         p.model,
         p.sort_order,
         p.manufacturer_id,
		 m.name AS manufacturer
        FROM `product` AS p
		LEFT JOIN `manufacturer` m ON (p.manufacturer_id = m.manufacturer_id)
		WHERE p.status = '1' AND p.best_seller = '1'
	";
    
    // Lấy ra danh sách các sản phẩm bán chạy
    // và giới hạn số lượng hiển thị trên html.
    // Lấy ra dữ liệu thô: danh sách các sản phẩm nổi bật
    // và giới hạn số lượng hiển thị trên html.
    $rs = db_q($sql);
    
    // bổ sung dữ liệu phái sinh, có định dạng dễ hiểu với người dùng cuối.
    // Duyệt mảng dữ liệu thô theo kiểu tham chiếu (&) thì mới can thiệp, chỉnh sửa, bổ sung
    // dữ liệu gốc của mỗi dòng bản ghi truy vấn được.
    // Định dạng lại dữ liệu của mỗi bản ghi để dễ hiểu hơn với người dùng cuối
    foreach ($rs as &$row)
    {
        // Địa chỉ web http dẫn tới ảnh gốc
        $row['img_src'] = URL_IMAGE.$row['image'];
        $row['url_image'] = URL_IMAGE.$row['image'];
        
        // Địa chỉ web http dẫn tới ảnh bị chỉnh kích thước
        $row['thumb'] = url_image_resized($row['image'], $width, $height);
        $row['url_image_resized'] = url_image_resized($row['image'], $width, $height);
        
        // Mô tả sản phẩm
        $row['description_short'] = text_short($row['description'], $text_length);
        $row['desc_short'] = text_short($row['description'], $text_length);
        
        // Đơn giá theo việt nam đồng, có dấu phảy ngăn cách phần nghìn
        $row['price_text']  = price_text_vnd($row['price']);
        
        $row['href'] = "/product-info.php?product_id=" . $row['product_id'];
        $row['href_man'] = '/manufacturer-info.php?manufacturer_id=' . $row['manufacturer_id'];
        $row['manufacturer_href']    = '/manufacturer-info.php?manufacturer_id=' . $row['manufacturer_id'];
    }
    
    // Cắt bớt mảng theo giới hạn mà phía chương trình khách yêu cầu.
    $rs = array_slice($rs, 0, $limit);
    
    return $rs;
}// end function


/**
 * @return array
 * @abstract Lấy ra danh sách các đường dẫn ảnh của một sản phẩm
 */
function productImages($product_id)
{
	// Nhặt ra các bản ghi trong bảng
	$temp = db_q("SELECT `image` FROM `product_image` WHERE `product_id`='{$product_id}'");
	
	// sau đó copy các đường dẫn ảnh vào trong một mảng:
	$images = array();
	
	if(is_array($temp) && !empty($temp))
	{
		foreach($temp as $img)
		{
			$images[] = $img['image'];
		}
	}
	
	return $images;
}