<?php
/**
 * Copyright C2009G
 *
 * Các hàm quản lý ảnh banner.
 * @version 2021.04.25 22h33
 */

/**
 * Hàm thêm mới ảnh banner
 * 
 * @param array $data (Mảng kết hợp chứa dữ liệu của một ảnh banner mới)
 * 
 * @return int Banner Image Identifier (Mã định danh của ảnh banner)
 */
function banner_imageAdd($data) 
{

	// Xử lý dữ liệu thô gửi lên từ form
	$title       = db_escape($data['title']);
	$sub_title   = db_escape($data['sub_title']);
	$description = db_escape($data['description']);
	$link        = db_escape($data['link']);
	$price       = (float)$data['price'];
	$sort_order  = (int)$data['sort_order'];
	$status      = (int)$data['status'];
	
	// Thêm mới bản ghi vào cơ sở dữ liệu
	$sql = "
		INSERT INTO `banner_image` 
	 	SET `title` = '{$title}',
	 	    `sub_title` = '{$sub_title}',
	 	    `description` = '{$description}',
	 	    `link` = '{$link}',
	 	    `price` = '{$price}',
	 	    `sort_order` = '{$sort_order}', 
	 	    `status`='{$status}'
	";
	db_q($sql);

	$banner_id = (int)db_lastId();
	
	// Ảnh banner
	if (isset($data['image'])) 
	{
		$image = db_escape($data['image']);
		db_q("UPDATE `banner_image` SET `image` = '{$image}' WHERE `banner_id` = '{$banner_id}'");
	}

	return $banner_id;
	
} // kết thúc hàm thêm mới

/**
 * Hàm sửa ảnh banner 
 * 
 * @param int $banner_id (Mã định danh của ảnh banner)
 * @param array $data (Mảng kết hợp chứa dữ liệu cập nhật của ảnh banner)
 *
 * @return void
 */
function banner_imageEdit($banner_id, $data) 
{ 
	// Xử lý dữ liệu thô gửi lên từ form
	$title       = db_escape($data['title']);
	$sub_title   = db_escape($data['sub_title']);
	$description = db_escape($data['description']);
	$link        = db_escape($data['link']);
	$price       = (float)$data['price'];
	$sort_order  = (int)$data['sort_order'];
	$status      = (int)$data['status'];
	
	// Cập nhật bản ghi trong cơ sở dữ liệu
	$sql = "
		UPDATE `banner_image` 
		SET `title` = '{$title}',
	 	    `sub_title` = '{$sub_title}',
	 	    `description` = '{$description}',
	 	    `link` = '{$link}',
	 	    `price` = '{$price}',
	 	    `sort_order` = '{$sort_order}', 
	 	    `status`='{$status}'
		WHERE `banner_id` = '{$banner_id}'		
	";
	
	db_q($sql);

	// Ảnh banner
	if (isset($data['image'])) 
	{
		$image = db_escape($data['image']);
		db_q("UPDATE `banner_image` SET `image` = '{$image}' WHERE `banner_id` = '{$banner_id}'");
			
	}
} // kết thúc hàm sửa banner


/**
 * Hàm xóa ảnh banner
 * 
 * @param int $banner_id (Mã định danh của ảnh banner)
 * 
 * @return void
 */
function banner_imageDelete($banner_id) 
{
	db_q("DELETE FROM `banner_image` WHERE `banner_id` = '" . (int)$banner_id . "'");
}

/**
 * Hàm lấy ra thông tin của một bản ghi ảnh banner
 * 
 * @param array $data (Mảng kết hợp chứa các tiêu chí lọc và sắp xếp)
 * @param int $banner_id (Mã định danh của ảnh banner)
 *
 * @return array (Mảng kết hợp chứa thông tin của một ảnh banner)
 */
function banner_imageById($banner_id)
{
    // Nếu lấy dữ liệu từ một bảng thì dùng toán tử * để chọn hết các cột.
    // Nếu nối nhiều bảng thì phải liệt kê rõ ràng tường minh các cột với bí danh của bảng.
	$sql = " 
		SELECT DISTINCT * 
		FROM `banner_image` 
		WHERE `banner_id` = {$banner_id}
	";
	
	$rs = db_row($sql);
	
	if ( is_array($rs) && !empty($rs) ) 
	{
		return $rs;
	}

	return null;
	
} // kết thúc hàm

/**
 * Hàm đếm tổng số bản ghi trong bảng `banner_image`.
 * Mệnh đề sql trong hàm này cần được đồng bộ với hàm banner_imageGetAll($data = array())
 * 
 * @return int|null
 */
function banner_imageGetTotal($data = array())
{
	$filter_title = "%".db_escape($data['filter_title']) . "%";
	
	$sql = "
	 SELECT COUNT(`banner_id`) AS total
	 FROM `banner_image`
	 WHERE `title` LIKE '{$filter_title}'
	";
	
	$rs = db_one($sql);
		
	if ( !is_null($rs) ) 
	{
		return $rs;
	}

	return null;
}

/**
 * Lấy ra các bản ghi để phân trang.
 * Mệnh đề sql trong hàm này cần được đồng bộ với hàm banner_imageGetTotal($data = array())
 * 
 * @param array $data (Mảng kết hợp chứa các tiêu chí lọc và sắp xếp)
 * 
 * @returns an indexed array of associative arrays
 * @returns false if failed to query
 * @notice sort_data must work closely with html view form, url parameters
 * 
 */
function banner_imageGetAll($data = array())
{
		
		$filter_title = "%".db_escape($data['filter_title']) . "%";
		
		$sql = "
			SELECT *
			FROM `banner_image` AS b
			WHERE `title` LIKE '{$filter_title}'
		";
		
		// Trật tự sắp xếp và giới hạn phân trang mặc định.
		// Mặc định thì sắp xếp theo cột 'sort_order', sắp xếp tăng,
		// bắt đầu từ bản ghi đầu tiên (index=0=$start), kết thúc ở bản ghi thứ 20 (index=19)
		$sort = "sort_order";
		$order = "ASC";
		$start = 0;
		$limit = 20;
		
       // @notice sort_data must work closely with html view form, url parameters
       // Tinh chỉnh trật tự sắp xếp và giới hạn phân trang
		// dựa theo truy vấn gửi đến từ phía máy khách.
		// Vì sao lại phải có bí danh 'b' trước tên các cột, để đề phòng về sau nâng cấp nó lên thành phép nối bảng !!!
		// Mà khi nối bảng thì 2 bảng hay có các cột giống tên nhau, dễ gây lỗi Ambiguous.
		$sort_data = array(
			'banner_id',
			'title',
			'sort_order'	
		);        // các cột được phép sắp xếp
		
		// Nếu phía khách yêu cầu cột sắp xếp khác
		if (isset($data['sort']) && in_array($data['sort'], $sort_data))
		{
		    $sort = $data['sort'];
		}
		// Nếu phía khách yêu cầu trật tự sắp xếp khác
		if (isset($data['order']) && ($data['order'] == 'DESC'))
		{
		    $order = "DESC";
		}
		// Nếu phía khách chỉ định giá trị khác cho chỉ số của trang hiện tại
		if (isset($data['start']) && (int)$data['start'] >= 0)
		{
		    $start = (int)$data['start'];
		}
		// Nếu phía khách chỉ định giá trị khác cho kích thước phân trang
		if (isset($data['limit']) && (int)$data['limit'] >= 1)
		{
		    $limit = (int)$data['limit'];
		}
		
		// Cập nhật câu truy vấn theo yêu cầu phía khách
		$sql .= " ORDER BY {$sort} {$order}"; // ví dụ: ORDER BY name ASC
		$sql .= " LIMIT {$start},{$limit}";
		
		$rs = db_q($sql);
			
		if ( is_array($rs) && !empty($rs) ) 
		{
				return $rs;
		}

		return false;
		
} // kết thúc hàm

/**
 * @version 2020.08.14 10h21
 * @abstract Lấy ra các ảnh banner (để chạy trên slide show trang chủ)
 * @return array
 * 
 * @todo 1140,380 nên thay bằng setting width, height
 * @todo Bổ sung mảng tham số đầu vào cho hàm này: $data = array()
 * với các tham số: 'limit', 'width', 'height'.
 * Bên trong hàm này độ ưu tiên như sau:
 * - gán giá trị hardcode, ví dụ: $width = 1140.
 * - cập nhật giá trị nếu có trong config: $width = settings('config_banner_image_width').
 * - Nếu phía chương trình khách chỉ định giá trị khác thì tiếp tục cập nhật: $width = $data['width']
 * 
 * Như vậy mới vừa có được sự linh hoạt mà lại đảm bảo không bị lỗi.
 * 
 * Đôi khi mã css (min-width, max-width) gây ảnh hưởng lên độ rộng của ảnh banner lúc chạy,
 * lúc đó phải kiểm tra kĩ trên trình duyệt (inspect), sau đó sửa lỗi.
 * 
 * Active = có cho phép hoạt động
 * Deactive = ngừng hoạt động
 * 
 */
// function banner_imageActives( $data=array('limit'=>3, 'width'=>1140, 'height'=>380) )
function banner_imageActives($data=array())
{
    // Tiền xử lý dữ liệu của các tham số đầu vào. Việc này độc lập với việc khai báo tham số $data của hàm.
    // Ngay cả khi $data không được khai báo trong nguyên mẫu hàm thì hàm này vẫn hoạt động tốt và ổn định.
    // ví dụ: categoryFeatureds( $data=array() ) hoặc categoryFeatureds()
    
    // Nếu giá trị của các tham số đầu vào có vấn đề, không hợp lệ thì thay thế bằng giá trị mặc định
    $limit = ( isset($data['limit']) && (int)$data['limit'] > 0 ) ? (int)$data['limit'] : 3;
    $width = ( isset($data['width']) && (int)$data['width'] > 0 ) ? (int)$data['width'] : 900;
    $height = ( isset($data['height']) && (int)$data['height'] > 0 ) ? (int)$data['height'] : 440;
    
    //$text_length = ( isset($data['text_length']) && (int)$data['text_length'] > 0 ) ? (int)$data['text_length'] : 100;
    
	// câu truy vấn ở mức cơ bản( chưa lọc, chưa sắp xếp, chưa phân trang)
	// Câu truy vấn tường minh, liệt kê rõ các cột cần lấy dữ liệu,
    // không nên viết kiểu ngầm định: SELECT DISCTINCT *
    // Truy vấn các ảnh banner cho phép hiện lên phía home/front-end
	$sql = "SELECT * FROM `banner_image` WHERE `status` = 1";
	
	// truy vấn dữ liệu thô (raw result set)
	$rs = db_q($sql); 
	
    // Duyệt mảng dữ liệu thô theo kiểu tham chiếu (&) thì mới can thiệp, chỉnh sửa, bổ sung
    // dữ liệu gốc của mỗi dòng bản ghi truy vấn được.
    foreach ($rs as &$row)
    {
        $row['url_image'] = URL_IMAGE.$row['image']; // ảnh gốc quá to sẽ có thể không vừa với mẫu slide show 
        $row['url_image_resized'] = url_image_resized($row['image'], $width, $height);
        $row['price_text'] = price_text_vnd($row['price']); // giá tiền được định dạng theo kiểu Việt Nam
    }
    
    // Cắt bớt mảng theo giới hạn mà phía chương trình khách yêu cầu.
    $rs = array_slice($rs, 0, $limit); 
    
    return $rs;
}// end function banner_imageActives()