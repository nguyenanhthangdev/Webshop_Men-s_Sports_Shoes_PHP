<?php
/**
 * Copyright C2009G
 *
 * Trang quản lý sản phẩm.
 * Hiển Thị Danh Sách Sản Phẩm. (làm mẫu cho các trang quản lý danh sách khác)
- Kiểm tra đăng nhập và quyền
- Tạo điều hướng ruột bánh mỳ.
- Tạo các đường link liên quan đến các hành động Add, Delete, Copy, Repair.
- Truy vấn các bản ghi trong tầng cơ sở dữ liệu để gửi sang tầng giao diện html table.
 (Có thể tinh chỉnh dữ liệu thô, thêm bớt các cột của bản ghi)
 (Có thể thêm đường link Edit/Delete để khi bấm vào thì chỉnh sửa/xóa bản ghi theo id.)
- Tạo các đường link sắp xếp theo các cột khác nhau.
- Phân Trang.
- Gửi dữ liệu sang tầng giao diện.
- Hiển thị toàn trang (tựa đề, nội dung riêng, menu hiện thời, bố cục toàn trang).

Nói ngắn gọn thì trang này có các tính năng: tìm kiếm/lọc, sắp xếp, phân trang.
(comment at file level)
 */
// Cấu hình hệ thống
include_once '../configs.php';

// Thư viện hàm
include_once '../lib/tool.image.php';
include_once '../lib/table/table.product.php';

// Xác thực danh tính nhân viên quản trị (Phải đăng nhập)
check_login();


/* 
 * Bắt các tham số phục vụ quá trình lọc/tìm kiếm được yêu cầu từ phía giao diện html,
 * các tham số này thường nằm trong địa chỉ web url (hoặc cũng có thể form gửi lên theo phương thức GET).
 * $_REQUEST có thể bắt các tham số theo cả 2 phương thức GET và POST, 
 * cho nên dùng $_REQUEST là hợp lý nhất đề phòng có lúc hộp tìm kiếm được Enter theo phương thức POST,
 * chứ không phải lúc nào cũng là dùng JavaScript gắn tham số vào url rồi thay đổi location như OpenCart.
 * Chú ý: hàm isset() cũng kiểm tra tính NULL rồi nên không cần so sánh != NULL nữa
 * (comment at code block level)
 */
$filter_name     = isset($_GET['filter_name'])     ? $_GET['filter_name']     : null; // Tìm theo tên sản phẩm
$filter_model    = isset($_GET['filter_model'])    ? $_GET['filter_model']    : null; // Tìm theo mẫu sản phẩm (ví dụ: iphone 2g, iphone 3g, iphone 5s)
$filter_price    = isset($_GET['filter_price'])    ? $_GET['filter_price']    : null; // Tìm theo giá sản phẩm
$filter_status   = isset($_GET['filter_status'])   ? $_GET['filter_status']   : null; // Tìm theo trạng thái của sản phẩm (cho phép/không cho; kích hoạt / không kích; enable/disable; active/deactive)
$filter_featured = isset($_GET['filter_featured']) ? $_GET['filter_featured'] : null; // Tìm theo tính nổi bật của sản phẩm

//$filter_limit    = isset($_GET['filter_limit'])  ? $_GET['filter_limit']  : null;   // cái này là giới hạn phân trang, không nên nằm đây !!!

/*
 * (Bắt)Tiếp nhận các tham số 'cột sắp xếp', 'thứ tự sắp xếp', 'phân trang' được yêu cầu từ phía giao diện html,
 * các tham số này có thể nằm trong địa chỉ web url hoặc form gửi lên.
 * Các tham số này sẽ được dùng để nhúng vào các câu sql truy vấn,
 * đồng thời cũng được gửi ngược sang view html để làm một số việc như là so sánh hoặc gán đường link vào tên cột của bảng.
 *  Ví dụ:
 *   		http://localhost:81/admin/product?sort=name&order=DESC&page=2&limit=5
 * Nếu phía trình duyệt không chỉ định rõ thì gán giá trị mặc định cho các tham số đó:
 * ví dụ:
 * sort = name (sắp xếp theo cột: 'tên sản phẩm')
 * order = ASC (thứ tự sắp xếp: tăng dần)
 * page = 1 (Trang hiện thời, trang đầu tiên trong phân trang)
 * đoạn mã test cũ:
//$limit = settings('config_limit_adminXXX');// test only: 
//var_dump($limit);die(); // test only: NULL
//if (isset($limit)) echo 'hura'; else echo 'fuck off';die();
//$limit = 5; // Mặc định giới hạn 5 phần tử trên trang
*/
$sort  = isset($_GET['sort'])  ? $_GET['sort']   : "name"; // Nếu phía máy khách không nói gì thì sắp xếp theo cột 'tên sản phẩm'
$order = isset($_GET['order']) ? $_GET['order']  : "ASC";  // Nếu phía máy khách không nói gì thì sắp xếp tăng dần

// Việc xác định giá trị $limit theo nhiều tầng, nhiều tình huống thế này bảo đảm không có lỗi xảy ra.
// (ví dụ: chưa có limit trong bảng setting, phía máy khách cũng không nói rõ)

// Cách 1:
// Nếu trong cấu hình hệ thống không nói rõ giới hạn số phần tử trên trang 
// thì lấy một giá trị mặc định (cố định): 5 bản ghi / trang
// $limit_default = isset( settings('config_limit_admin')) ? settings('config_limit_admin'): 5; // gây lỗi !!! vì hàm isset() chỉ chạy trên biến.
$limit_default = ( settings('config_limit_admin') !== null ) ? settings('config_limit_admin') : 5;
// Nếu phía máy khách yêu cầu giới hạn phân trang khác thì cập nhật.
$limit = isset($_GET['limit']) ? $_GET['limit']  : $limit_default;

// Cách 2:
// Nếu phía máy khách chỉ định giới hạn phân trang:
// if ( isset($_GET['limit']) ) 
// {
// 	$limit = $_GET['limit'];
// }
// else // Ngược lại thì sử dụng giá trị mặc định trong cài đặt hệ thống hoặc một giá trị cố định khác.
// {
// 	// dòng này gây lỗi:
// 	// Fatal error: Cannot use isset() on the result of an expression (you can use "null !== expression" instead) in C:\xampp\htdocs\web_epj1\admin\product.php on line 85
// 	//$limit = isset( settings('config_limit_admin') ) ? settings('config_limit_admin'): 5;
// 	$limit = ( settings('config_limit_admin') !== null ) ? settings('config_limit_admin') : 5;
	
// 	//$limit_default = settings('config_limit_admin');
// 	//$limit = isset( $limit_default ) ? $limit_default : 5;
// }


// Số thứ tự trang hiện tại
// Nếu phía máy khách không nói gì thì hiển thị các bản ghi trên trang đầu tiên ( thứ nhất: page 1)
$page  = isset($_GET['page'])  ? $_GET['page']   : 1;      

/* Tạm thời bỏ qua, không đưa trạng thái ứng dụng (filter/search, sort, pagination)
 vào các đường link delete, copy, repair */
// $url = '?';

// if (isset($_GET['filter_name'])) 
// {
// 	// Giải mã thực thể html,
// 	// tiếp tục mã hóa lại lần nữa theo lược đồ mã hóa
// 	// giành cho địa chỉ web url, tránh vi phạm từ khóa của
// 	// một url
// 	$url .= '&filter_name=' . urlencode(html_entity_decode($_GET['filter_name'], ENT_QUOTES, 'UTF-8'));
// }

// if (isset($_GET['filter_model'])) 
// {
// 	$url .= '&filter_model=' . urlencode(html_entity_decode($_GET['filter_model'], ENT_QUOTES, 'UTF-8'));
// }

// if (isset($_GET['filter_price'])) 
// {
// 	$url .= '&filter_price=' . $_GET['filter_price'];
// }

// if (isset($_GET['filter_status'])) 
// {
// 	$url .= '&filter_status=' . $_GET['filter_status'];
// }

// $url .= isset($_GET['sort'])  ? '&sort=' . $_GET['sort']   : "";
// $url .= isset($_GET['order']) ? '&order=' . $_GET['order'] : "";
// $url .= isset($_GET['page'])  ? '&page=' . $_GET['page']   : "";

// if($url=='?') $url = '';
// có gửi các tham số sort, order, page vào các đường link delete, copy (thông qua url ở trên) ?


		/* Lấy ra các bản ghi dữ liệu để đổ vào giao diện html table (đầu vào cho vòng lặp foreach) */
$products = array();

// Tiêu chí truy vấn (tìm kiếm, sắp xếp, phân trang)
$filter_data = array(
	'filter_name'	  => $filter_name,
	'filter_model'	  => $filter_model,
	'filter_price'	  => $filter_price,
	'filter_status'   => $filter_status,
	'filter_featured' => $filter_featured,
		
	'sort'            => $sort,
	'order'           => $order,
		
	'start'           => ($page - 1) * $limit, //settings('config_limit_admin'), 
	'limit'           => $limit //settings('config_limit_admin')	// 5,10,15,20 sản phẩm trên một trang
);

// Đếm tổng số bản ghi phù hợp tiêu chí truy vấn
$product_total = productGetTotal($filter_data);

// Lấy ra dữ liệu của tất cả các bản ghi phù hợp tiêu chí tìm kiếm
$results       = productGetAll($filter_data);

// Thêm các thông tin cần thiết khác vào kết quả truy vấn.
// (Các đường link vào các nút edit, delete
// để khi bấm vào thì thao tác/can thiệp đúng item theo id)
// Định dạng dữ liệu gốc để dể đọc và dễ hiểu với người dùng cuối khi nhìn trên giao diện html
// (ví dụ: đơn giá sản phẩm cần thêm dấu phẩy ngăn cách phần nghìn)
// @todo: thay số 40 bằng cái gì đó có nghĩa hơn, ví dụ settings('product_thumb_width_on_admin_list')
foreach ($results as $result) 
{
	// Nếu ảnh đại diện sản phẩm tồn tại trên máy chủ web
	if (is_file(DIR_IMAGE . $result['image'])) 
	{
		$image = img_resize($result['image'], 40, 40);
	} 
	else 
	{
		// ngược lại không có thì dùng hình rỗng đã được đặt sẵn trong thư mục ảnh DIR_IMAGE
		$image = img_resize('no_image.png', 40, 40);
	}

	// Định dạng lại dữ liệu gốc và bổ sung thêm thông tin khác cho sản phẩm
	$products[] = array(
		'product_id' => $result['product_id'],
		'image'      => $image,
		'name'       => $result['name'],
		'model'      => $result['model'],
		'price'      => $price = number_format($result['price'],0,'.',',').' đ',
		'status'     => ($result['status']) ? "Cho Phép" : "Không Cho Phép",
		'featured_text'   => $result['featured'] ? "Nổi bật" : "Không nổi bật",
		'edit'       => '/admin/product-edit.php?product_id='.$result['product_id'],
		'delete'     => '/admin/product-delete.php?product_id='.$result['product_id']
	);
}

	// Kết thúc việc gửi các bản ghi sang view html 	

/* 
 * Các mục được chọn để xóa
 * Khi việc xóa gặp trục trặc (ví dụ: ko có quyền, v.v..), thì các
 * ô checkbox được giữ nguyên, người dùng không phải tích lại
 */
if ( isset($_POST['selected']))  
{ 
	$selected = (array)$_POST['selected'];
}
else 
{
	$selected = array();
}

/*
 * Duy trì trạng thái ứng dụng trên các đường link sắp xếp cột
 * Tạo đường link gắn vào các cột của bảng kết quả trên giao diện html
 * Mỗi đường link vẫn duy trì trạng thái ứng dụng: chứa tham số về sắp xếp, tìm kiếm, phân trang,
 * vì vậy khi user bấm vào tên cột, kiểu sắp xếp khác sẽ được thực hiện
 * Nếu url mà user đang xem là ASC(tăng) thì sẽ bị đổi lại thành DESC (giảm)
 * và ngược lại.
 */
$url = '';

// Duy trì các tham số tìm kiếm trên địa chỉ web url sắp xếp
if (isset($_GET['filter_name'])) 
{
     $url .= '&filter_name=' . urlencode(html_entity_decode($_GET['filter_name'], ENT_QUOTES, 'UTF-8'));
}

if (isset($_GET['filter_model'])) 
{
     $url .= '&filter_model=' . urlencode(html_entity_decode($_GET['filter_model'], ENT_QUOTES, 'UTF-8'));
}

if (isset($_GET['filter_price'])) 
{
     $url .= '&filter_price=' . $_GET['filter_price'];
}

if (isset($_GET['filter_status'])) 
{
     $url .= '&filter_status=' . $_GET['filter_status'];
}

// Duy trì các tham số sắp xếp (chiều sắp xếp)
$url .= ($order == 'ASC') ? '&order=DESC' : '&order=ASC';

// Duy trì các tham số phân trang trên url 
//$url .= isset($_GET['page']) ? '&page=' . $_GET['page'] : '';
$url .= "&page={$page}";
$url .= "&limit={$limit}";

//  Các đường link gắn vào cột của bảng trên giao diện html
//  Bấm vào đường link nào thì sắp xếp theo cột đấy.
//  Ví dụ: sắp xếp theo name, model, price, ...
$sort_product_id = '/admin/product.php?sort=p.product_id' . $url;
$sort_name       = '/admin/product.php?sort=p.name' . $url;
$sort_model      = '/admin/product.php?sort=p.model' . $url;
$sort_price      = '/admin/product.php?sort=p.price' . $url;
$sort_status     = '/admin/product.php?sort=p.status' . $url;
$sort_order      = '/admin/product.php?sort=p.sort_order' . $url;
	// Kết thúc việc gửi các đường link sắp xếp sang cho các cột của bảng bên giao diện html

/*
 *   Khởi tạo giao diện phân trang
 * Trong đường link phân trang phải có tham số:
 * - page: trang hiện tại
 *  có thể có:
 *  - sort: sắp xếp theo cột nào (mặc định = name)
 *  - order: trật tự sắp xếp là gì (mặc định = ASC)
 * Nói cách khác: đường link phân trang vẫn duy trì trạng thái ứng dụng: các tham số sắp xếp, tìm kiếm, phân trang
*/
//  Exam:
$url = '?';

// Duy trì các tham số lọc/tìm kiếm trên url phân trang
if (isset($_GET['filter_name'])) 
{
     $url .= '&filter_name=' . urlencode(html_entity_decode($_GET['filter_name'], ENT_QUOTES, 'UTF-8'));
}

if (isset($_GET['filter_model'])) 
{
     $url .= '&filter_model=' . urlencode(html_entity_decode($_GET['filter_model'], ENT_QUOTES, 'UTF-8'));
}

if (isset($_GET['filter_price'])) 
{
     $url .= '&filter_price=' . $_GET['filter_price'];
}

if (isset($_GET['filter_status'])) 
{
     $url .= '&filter_status=' . $_GET['filter_status'];
}

// Duy trì các tham số sắp xếp ...
$url .= isset($_GET['sort'])  ? '&sort='  . $_GET['sort']  : "";
$url .= isset($_GET['order']) ? '&order=' . $_GET['order'] : "";
// ...và phân trang
$url .= "&limit={$limit}";
// Không thêm số thứ tự trang vào $url vì việc này
// được thực hiện bởi hàm phân trang paginate()

//paginate($product_total, $page,settings('config_limit_admin'), "/admin/product.php".$url);
paginate($product_total, $page,$limit, "/admin/product.php".$url);
	// Kết thúc việc phân trang

// Nội dung riêng của trang:
$web_title = "Sản Phẩm";
$web_content = "../ui/admin/view/view-product-list.php";
$active_page_admin = ACTIVE_PAGE_ADMIN_PRODUCT;


check_file_layout($web_layout_admin, $web_content);

// được đặt vào bố cục chung của toàn site:
include_once $_SERVER["DOCUMENT_ROOT"]."/".$web_layout_admin;
