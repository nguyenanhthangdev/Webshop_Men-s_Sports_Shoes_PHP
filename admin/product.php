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

@version 2021.05.11 14h50
 */
// Cấu hình hệ thống
include_once '../configs.php';

// Thư viện hàm
include_once '../lib/tool.image.php';
include_once '../lib/table/table.product.php';

session_start();

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
// $filter_price    = isset($_GET['filter_price'])    ? $_GET['filter_price']    : null; // Tìm theo giá sản phẩm
$filter_status   = isset($_GET['filter_status'])   ? $_GET['filter_status']   : null; // Tìm theo trạng thái của sản phẩm (cho phép/không cho; kích hoạt / không kích; enable/disable; active/deactive)
$filter_featured = isset($_GET['filter_featured']) ? $_GET['filter_featured'] : null; // Tìm theo tính nổi bật của sản phẩm
$filter_best_seller = isset($_GET['filter_best_seller']) ? $_GET['filter_best_seller'] : null; // Tìm theo tính bán chạy của sản phẩm

//************************************************************************************************* *//
//***************************THÊM MỚI BIẾN KIỂM TRA TÍNH GIẢM GIÁ********************************** *//
$filter_sale    = isset($_GET['filter_sale']) ? $_GET['filter_sale'] : null; // Tìm theo tính giảm giá của sản phẩm
$filter_amount  = isset($_GET['filter_amount']) ? $_GET['filter_amount'] : null;
$filter_new     = isset($_GET['filter_new']) ? $_GET['filter_new'] : null;    // TÌm theo tính new
$filter_color    = isset($_GET['filter_color']) ? $_GET['filter_color'] : null;
//************************************************************************************************* *//

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
*/
$sort  = isset($_GET['sort'])  ? $_GET['sort']   : "name"; // Nếu phía máy khách không nói gì thì sắp xếp theo cột 'tên sản phẩm'
$order = isset($_GET['order']) ? $_GET['order']  : "ASC";  // Nếu phía máy khách không nói gì thì sắp xếp tăng dần

// Việc xác định giá trị $limit theo nhiều tầng, nhiều tình huống thế này bảo đảm không có lỗi xảy ra.
// (ví dụ: chưa có limit trong bảng setting, phía máy khách cũng không nói rõ)

// Nếu trong cấu hình hệ thống không nói rõ giới hạn số phần tử trên trang (5,10,15,20,25)
// thì lấy một giá trị mặc định (cố định): 5 bản ghi / trang
$limit = ( settings('config_limit_admin') !== null ) ? settings('config_limit_admin') : 5;
// Nếu phía máy khách yêu cầu giới hạn phân trang khác thì cập nhật.
$limit = isset($_GET['limit']) ? $_GET['limit']  : $limit;
    // như vậy, thứ tự bị ghi đè là: $_GET máy khách ghi đè lên settings() trong db, tiếp tục: db ghi đè lên giá trị cố định hard-code/fixed
    // nói cách khác: client ---viết đè ---> database ---viết đè---> hard code-fixed value

// Số thứ tự trang hiện tại
// Nếu phía máy khách không nói gì thì hiển thị các bản ghi trên trang đầu tiên ( thứ nhất: page 1)
$page  = isset($_GET['page'])  ? $_GET['page']   : 1;      

/* Lấy ra các bản ghi dữ liệu để đổ vào giao diện html table (đầu vào cho vòng lặp foreach) */

$products = array();	// Mảng rỗng chờ để đổ dữ liệu các sản phẩm vào

// Mảng các tham số / tiêu chí truy vấn (tìm kiếm, sắp xếp, phân trang)
$filter_data = array(
	// tìm kiếm:
	'filter_name'	  => $filter_name,
	'filter_model'	  => $filter_model,
	'filter_status'   => $filter_status,
	'filter_featured' => $filter_featured,
	'filter_best_seller' => $filter_best_seller,
//******************************************************************************************************* */
	'filter_sale'     => $filter_sale,
	'filter_color'    => $filter_color,
	'filter_amount'   => $filter_amount,
	'filter_new'      => $filter_new,
	'size_or_nosize'    => $filter_size_or_nosize,
//******************************************************************************************************* */
	// sắp xếp:
	'sort'            => $sort,
	'order'           => $order,
	// phân trang:
	'start'           => ($page - 1) * $limit,  
	'limit'           => $limit 
);

// Đếm tổng số bản ghi phù hợp tiêu chí truy vấn
// (table.product.php)
$product_total =  productGetTotal($filter_data);

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
	// Kích thước ảnh hiển thị trên danh sách quản trị. (nếu cấu hình hệ thống không có thì lấy một giá trị cụ thể)
	$img_w = ( settings('admin_list_image_width') !== null ) ? settings('admin_list_image_width') : 100;
	$img_h = ( settings('admin_list_image_height') !== null ) ? settings('admin_list_image_height') : 100;
	
	// Nếu ảnh đại diện sản phẩm tồn tại trên máy chủ web
	if (is_file(DIR_IMAGE . $result['image'])) 
	{
		$image = img_resize($result['image'], $img_w, $img_h);
	} 
	else 
	{
		// ngược lại không có thì dùng hình rỗng đã được đặt sẵn trong thư mục ảnh DIR_IMAGE
		$image = img_resize('no_image.png', $img_w, $img_h);
	}

	$bienKiemTraTinhSale = '<span class="badge badge-danger">' . $result['sale'] . '%';
	// Định dạng lại dữ liệu gốc và bổ sung thêm thông tin khác cho sản phẩm
	$products[] = array(
		// Thông tin từ dữ liệu gốc (được định dạng)
		'product_id' => $result['product_id'],
		'image'      => $image,
		'name'       => $result['name'],
		'model'      => $result['model'],
		'color'      => $result['color'],
		// 'price'      => $price = number_format($result['price'],0,'.',',').' đ',
		'status'     => ($result['status']) ? "Cho Phép" : "Không Cho Phép", // @deprecated since 2020.08.17
		'status_text'   => ($result['status']) ? "Cho Phép" : '<span class="badge badge-danger">Không cho phép</span>',
		'featured_text'   => $result['featured'] ? '<span class="badge badge-success">Nổi Bật</span>' : "Không nổi bật",
		'best_seller_text'   => $result['best_seller'] ? '<span class="badge badge-success">Bán chạy</span>' : "Không bán chạy",
//****************************************************************************************************************************** */
		'new_text'   => $result['new'] ? '<span class="badge badge-danger">New</span>' : "Không phải sản phẩm mới",
		'sale_text'   => $result['sale'] ? $bienKiemTraTinhSale : "Không giảm giá",
		'amount_text'   => $result['amount'] ? $result['amount'] : "Hết hàng",
		'size_or_nosize' => $result['size_or_nosize'],
//****************************************************************************************************************************** */
		'date_added_text' => date('d/m/Y', strtotime($result['date_added'])),
		// Thông tin thêm (phái sinh):
		'edit'       => '/admin/product-edit.php?product_id='.$result['product_id'],
		'delete'     => '/admin/product-delete.php?product_id='.$result['product_id']
	);
}

// ************************************************************************************************************

$size_amount = "
	SELECT 
		`size`,
		`amount`,
		`priceSize`,
		`product_id`
	FROM `size_amount`
";
$sizes = db_q($size_amount);

$amountPrice = "
	SELECT 
		`amount`,
		`price`,
		`product_id`
	FROM `amount_price`
";
$amount_price = db_q($amountPrice);

// $product_sizes = array();
// foreach ($sizes as $item) 
// {
// 		$size = $item['size'];
// 		$amount = $item['amount'];

// 	$product_sizes[] = array(
// 		'size'      => $size,
// 		'amount'      => $amount
// 	);
// }

// ************************************************************************************************************


	// Kết thúc việc gửi các bản ghi sang view html 	

/* 
 * Các bản ghi được chọn để xóa
 * Khi việc xóa gặp trục trặc (ví dụ: ko có quyền, v.v..), thì các
 * ô checkbox được giữ nguyên, người dùng không phải tích lại
 */
if ( isset($_POST['selected']) )  
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

if (isset($_GET['filter_featured'])) 
{
     $url .= '&filter_featured=' . $_GET['filter_featured'];
}

//****************************************************************************************************************************** */
if (isset($_GET['filter_new'])) 
{
     $url .= '&filter_new=' . $_GET['filter_new'];
}

if (isset($_GET['filter_sale']))
{
     $url .= '&filter_sale=' . $_GET['filter_sale'];
}

if (isset($_GET['filter_amount'])) 
{
     $url .= '&filter_amount=' . $_GET['filter_amount'];
}
//****************************************************************************************************************************** */

if (isset($_GET['filter_best_seller']))
{
    $url .= '&filter_best_seller=' . $_GET['filter_best_seller'];
}

// Duy trì các tham số: chiều sắp xếp (ngược lại so với chiều của danh sách đang hiển thị)
// (để khi bấm vào đường link thì danh sách bị đảo chiều sắp xếp)
$url .= ($order == 'ASC') ? '&order=DESC' : '&order=ASC';

// Duy trì các tham số phân trang trên url 
$url .= "&page={$page}";
$url .= "&limit={$limit}";

//  Các đường link gắn vào cột của bảng trên giao diện html
//  Bấm vào đường link nào thì sắp xếp theo cột đấy.
$sort_product_id = '/admin/product.php?sort=p.product_id' . $url; // link sắp xếp theo mã sản phẩm 
$sort_name       = '/admin/product.php?sort=p.name' . $url;	      // link sắp xếp theo tên sản phẩm
$sort_model      = '/admin/product.php?sort=p.model' . $url;	  // link sắp xếp theo mẫu sản phẩm
$sort_price      = '/admin/product.php?sort=p.price' . $url;	  // link sắp xếp theo giá sản phẩm
$sort_status     = '/admin/product.php?sort=p.status' . $url;	  // link sắp xếp theo trạng thái sản phẩm
$sort_featured   = '/admin/product.php?sort=p.featured' . $url;	  // link sắp xếp theo tính nổi bật sản phẩm
$sort_best_seller   = '/admin/product.php?sort=p.best_seller' . $url;	  // link sắp xếp theo tính nổi bật sản phẩm
$sort_order      = '/admin/product.php?sort=p.sort_order' . $url; // link sắp xếp theo thứ tự sản phẩm

//****************************************************************************************************************************** */
$sort_new  		 = '/admin/product.php?sort=p.new' . $url;	  // link sắp xếp theo tính new của sản phẩm
$sort_sale       = '/admin/product.php?sort=p.sort_sale' . $url; // link sắp xếp theo thứ tự sản phẩm giảm giá
$sort_amount     = '/admin/product.php?sort=p.sort_amonumt' . $url; 
//****************************************************************************************************************************** */

// Kết thúc việc gửi các đường link sắp xếp sang cho các cột của bảng bên giao diện html

/*
 * Khởi tạo giao diện phân trang
 * Trong đường link phân trang phải có tham số:
 * - page: trang hiện tại
 *  có thể có:
 *  - sort: sắp xếp theo cột nào (mặc định = name)
 *  - order: trật tự sắp xếp là gì (mặc định = ASC)
 * Nói cách khác: đường link phân trang vẫn duy trì trạng thái ứng dụng: các tham số sắp xếp, tìm kiếm, phân trang
*/
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

if (isset($_GET['filter_featured'])) 
{
     $url .= '&filter_featured=' . $_GET['filter_featured'];
}

//**************************************************************************************************** */
if (isset($_GET['filter_new'])) 
{
     $url .= '&filter_new=' . $_GET['filter_new'];
}

if (isset($_GET['filter_sale'])) 
{
     $url .= '&filter_sale=' . $_GET['filter_sale'];
}
if (isset($_GET['filter_amount'])) 
{
     $url .= '&filter_amount=' . $_GET['filter_amount'];
}
//**************************************************************************************************** */

// Duy trì các tham số sắp xếp (một cách tường minh chứ không ngầm định)
$url .= "&sort={$sort}";
$url .= "&order={$order}";

// Duy trì các tham số phân trang
$url .= "&limit={$limit}";
// Không lưu số thứ tự trang vào $url vì việc này
// được thực hiện bởi hàm phân trang paginate()

paginate($product_total, $page,$limit, "/admin/product.php".$url);
	// Kết thúc việc phân trang

// Nội dung riêng của trang:
$web_title = "Sản Phẩm";
$web_content = "../ui/admin/view/view-product-list.php";
$active_page_admin = ACTIVE_PAGE_ADMIN_PRODUCT;

check_file_layout($web_layout_admin, $web_content);

// được đặt vào bố cục chung của toàn site:
include_once $_SERVER["DOCUMENT_ROOT"]."/".$web_layout_admin;