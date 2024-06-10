<?php
/**
 * Copyright C2009G
 *
 * Trang quản lý nhà sản xuất
 */
// cấu hình hệ thống
include_once '../configs.php';
// thư viện hàm
include_once '../lib/table/table.manufacturer.php';

check_login();

/*
 Bắt các tham số lọc kết quả tìm kiếm yêu cầu từ phía trình duyệt,
 các tham số này có thể nằm trong url hoặc form gửi lên.
 Dùng $_GET cho ngắn gọn, dùng $_REQUEST cho tổng quát
 */
$filter_name     = isset($_REQUEST['filter_name'])     ? $_REQUEST['filter_name']     : null;
$filter_featured = isset($_REQUEST['filter_featured']) ? $_REQUEST['filter_featured'] : null;

/*
 Bắt các tham số phân trang và thứ tự sắp xếp yêu cầu từ phía trình duyệt,
 các tham số này có thể nằm trong url hoặc form gửi lên. 
 Ví dụ:
  		http://localhost:82/admin/catalog/category?sort=sort_order&order=DESC&page=2
  Mặc định, nếu không bắt được thì:
  Sắp xếp theo cột sort = name
  Trật tự sắp xếp order = ASC (tăng dần)
  Trang hiện thời = 1 (trang đầu tiên trong phân trang)
 */
$sort  = isset($_GET['sort'])  ? $_GET['sort']  : "name";
$order = isset($_GET['order']) ? $_GET['order'] : "ASC";

// Giới hạn phân trang, mặc định: 5; ngầm định bởi hệ thống: bảng `setting` cột `config_limit_admin`
$limit = ( settings('config_limit_admin') !== null ) ? settings('config_limit_admin') : 5;
// Giới hạn phân trang chỉ định bởi phía máy khách:
$limit = isset($_GET['limit']) ? $_GET['limit']  : $limit;

// Số thứ tự trang hiện tại, mặc định: 1
$page  = isset($_GET['page'])  ? $_GET['page']   : 1;   

			/* Lấy ra các bản ghi dữ liệu để đổ vào giao diện html table (đầu vào cho vòng lặp foreach) */

$manufacturers = array();	// Mảng rỗng chờ để đổ dữ liệu các nhà sản xuất vào

// tiêu chí truy vấn
$filter_data = array(
	// tìm kiếm:
	'filter_name' => $filter_name,
	'filter_featured' => $filter_featured,
	// sắp xếp:
	'sort'        => $sort,
	'order'       => $order,
	// phân trang:
	'start'       => ($page - 1) * $limit,
	'limit'       => $limit 
);

$manufacturer_total = manufacturerGetTotal($filter_data);

$results = manufacturerGetAll($filter_data);

foreach ($results as $result) 
{
    if (is_file(DIR_IMAGE . $result['image']))
    {
        // Nếu nhà sản xuất không có hình đại diện...
        $image = img_resize($result['image'], 40, 40);
    }
    else
    {
        // ...thì dùng hình rỗng đã được đặt sẵn trong thư mục ảnh DIR_IMAGE
        $image = img_resize('no_image.png', 40, 40);
    }
    
    // Nhà sản xuất không cần thông tin ngày tạo (date_added)
	$manufacturers[] = array(
	    // Thông tin từ dữ liệu gốc (được định dạng)
		'manufacturer_id' => $result['manufacturer_id'],
		'image'           => $image,
		'name'            => $result['name'],
		'featured_text'   => $result['featured'] ? '<span class="badge badge-success">Nổi Bật</span>' : "Không nổi bật",
		'sort_order'      => $result['sort_order'],
		// Thông tin thêm (phái sinh)
		'edit'            => '/admin/manufacturer-edit.php?manufacturer_id=' . $result['manufacturer_id']
	);
}

// Các mục được chọn để xóa
// Khi việc xóa gặp trục trặc (ví dụ: ko có quyền, v.v..), thì các
// ô checkbox được giữ nguyên, người dùng không phải tích lại
if ( isset($_POST['selected']))  
{ 
	$selected = (array)$_POST['selected'];
}
else 
{
	$selected = array();
}

/*
 Tạo đường link sắp xếp cho các cột kết quả ở phía giao diện html
 Mỗi đường link chứa tham số về trật tự và lọc khi truy vấn,
 vì vậy khi user bấm vào tên cột, kiểu sắp xếp khác sẽ được thực hiện
 Nếu url mà user đang xem là ASC(tăng) thì sẽ bị đổi lại thành DESC (giảm)
 và ngược lại.
 */
$url = '';	// duy trì tham số tìm kiếm, chiều sắp xếp

if (isset($_GET['filter_name'])) 
{
     $url .= '&filter_name=' . urlencode(html_entity_decode($_GET['filter_name'], ENT_QUOTES, 'UTF-8'));
}
if (isset($_GET['filter_featured']))
{
	$url .= '&filter_featured=' . $_GET['filter_featured'];
}

// Duy trì các tham số: chiều sắp xếp (ngược lại so với chiều của danh sách đang hiển thị)
// (để khi bấm vào đường link thì danh sách bị đảo chiều sắp xếp)
$url .= ($order == 'ASC') ? '&order=DESC' : '&order=ASC';

// Duy trì các tham số phân trang trên url
$url .= "&page={$page}";
$url .= "&limit={$limit}";

/*
 Bấm vào đường link nào thì sắp xếp theo cột đấy.
 Ví dụ: sắp xếp theo name, model, price, ...
 */
$sort_name       = '/admin/manufacturer.php?sort=name' . $url;
$sort_featured   = '/admin/manufacturer.php?sort=featured' . $url;
$sort_sort_order = '/admin/manufacturer.php?sort=sort_order' . $url;

/*
 Khởi tạo giao diện phân trang (Pagination UI Controls)
 Trong đường link phân trang phải có tham số:
 - page: trang hiện tại
 có thể có:
 - sort: sắp xếp theo cột nào (mặc định = name)
 - order: trật tự sắp xếp là gì (mặc định = ASC)
 Exam:
 */
$url = '?';

if (isset($_GET['filter_name'])) 
{
     $url .= '&filter_name=' . urlencode(html_entity_decode($_GET['filter_name'], ENT_QUOTES, 'UTF-8'));
}
if (isset($_GET['filter_featured']))
{
	$url .= '&filter_featured=' . $_GET['filter_featured'];
}

$url .= "&sort={$sort}";
$url .= "&order={$order}";
// Duy trì các tham số phân trang
$url .= "&limit={$limit}";
// Không lưu số thứ tự trang vào $url vì việc này 
// được thực hiện bởi đối tượng thuộc lớp Pagination

paginate($manufacturer_total, $page,$limit, "/admin/manufacturer.php".$url);

// Nội dung riêng của trang...
$web_title = "Nhà Sản Xuất";
$web_content = "../ui/admin/view/view-manufacturer-list.php";
$active_page_admin = ACTIVE_PAGE_ADMIN_MANUFACTURER; 

check_file_layout($web_layout_admin, $web_content);

// ...được đặt vào bố cục chung của toàn site:
include_once $_SERVER["DOCUMENT_ROOT"]."/".$web_layout_admin;
