<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right"><a href="/admin/manufacturer-add.php" data-toggle="tooltip" title="Thêm mới" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <button type="button" data-toggle="tooltip" title="Xóa" class="btn btn-danger" onclick="confirm('Bạn có chắc muốn xóa') ? $('#form-manufacturer').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <ul class="breadcrumb">
        <li><a href="/admin.php">Quản Trị</a></li>
        <li><a href="/admin/manufacturer.php">Nhà Sản Xuất</a></li>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($_SESSION['ERROR_TEXT']) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION['ERROR_TEXT']; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php $_SESSION['ERROR_TEXT']=NULL ?>
    <?php if ($_SESSION['SUCCESS_TEXT']) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $_SESSION['SUCCESS_TEXT']; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php $_SESSION['SUCCESS_TEXT']=NULL;?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i>Danh Mục Nhà Sản Xuất</h3>
      </div>
      <div class="panel-body">
        
        <div class="well">	<!-- Phần giao diện filter này tác động đến location.href, location.url chứ không phải là form, xem javascript ở cuối -->
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="input-name">Tên Nhà Sản Xuất</label>
                <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" placeholder="Tên nhà sản xuất" id="input-name" class="form-control" />
              </div>
              <!--
              <div class="form-group">
                <label class="control-label" for="input-model"><?php echo 'Model'; ?></label>
                <input type="text" name="filter_model" value="<?php echo $filter_model; ?>" placeholder="Model" id="input-model" class="form-control" />
              </div>
              -->
              <div class="form-group">
	                <label class="control-label" for="input-limit">Phân Trang</label>
	                <select name="filter_limit" id="input-limit" class="form-control">
	                  <option value="*">--Không chọn--</option>
	                  <option value="5"  <?php if ($limit==5)  echo 'selected="selected"';?>>05</option>
	                  <option value="10" <?php if ($limit==10) echo 'selected="selected"';?>>10</option>
	                  <option value="15" <?php if ($limit==15) echo 'selected="selected"';?>>15</option>
	                  <option value="20" <?php if ($limit==20) echo 'selected="selected"';?>>20</option>
	                  <option value="25" <?php if ($limit==25) echo 'selected="selected"';?>>25</option>
	                </select>
	           </div>
            </div>
            <div class="col-sm-4">
              <!--
              <div class="form-group">
                <label class="control-label" for="input-price"><?php echo "Giá"; ?></label>
                <input type="text" name="filter_price" value="<?php echo $filter_price; ?>" placeholder="<?php echo 'Giá'; ?>" id="input-price" class="form-control" />
              </div>
              -->

              <div class="form-group">
                <label class="control-label" for="input-featured">Tính Nổi Bật</label>
                <select name="filter_featured" id="input-featured" class="form-control">
                  <option value="*">--Không chọn--</option>
                  <?php if ($filter_featured) { ?>
                  <option value="1" selected="selected">Nổi Bật</option>
                  <?php } else { ?>
                  <option value="1">Nổi Bật</option>
                  <?php } ?>
                  <?php if (!$filter_featured && !is_null($filter_featured)) { ?>
                  <option value="0" selected="selected">Không nổi bật</option>
                  <?php } else { ?>
                  <option value="0">Không nổi bật</option>
                  <?php } ?>
                </select>
            	<div class="form-group">&nbsp;</div>
              <button type="button" id="button-filter" class="btn btn-primary pull-left"><i class="fa fa-search"></i> Lọc</button>
                
              </div>
            </div>
            
            <!-- 
            <div class="col-sm-4">
            	<div class="form-group">&nbsp;</div>
            	<div class="form-group">&nbsp;</div>
            	<div class="form-group">&nbsp;</div>
              <button type="button" id="button-filter" class="btn btn-primary pull-left"><i class="fa fa-search"></i> Lọc</button>
            </div>
            -->
          </div>
        </div>
      
      
        <form action="/admin/manufacturer-delete.php" method="post" enctype="multipart/form-data" id="form-manufacturer">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-center">
                  	<a href="<?php echo $sort_manufacturer_id;?>" class="<?php if ($sort == 'manufacturer_id') {echo strtolower($order);} ?>">Id</a>
                  </td>
                  <td class="text-center"><?php echo 'Ảnh'; ?></td>
                  <td class="text-left">
                    <a href="<?php echo $sort_name; ?>" class="<?php if ($sort == 'name') echo strtolower($order); ?>">Tên Nhà Sản Xuất</a>
                  </td>
                  <td class="text-left">
                    <a href="<?php echo $sort_featured; ?>" class="<?php if ($sort == 'featured') echo strtolower($order); ?>">Tính Nổi Bật</a>
                  </td>
                  <td class="text-right">
                    <a href="<?php echo $sort_sort_order; ?>" class="<?php if ($sort == 'sort_order') echo strtolower($order); ?>">Thứ Tự</a>
                  </td>
                  <td class="text-right">Hành động</td>
                </tr>
              </thead>
              <tbody>
                <?php if ($manufacturers) { ?>
                <?php foreach ($manufacturers as $manufacturer) { ?>
                <tr>
                  <td class="text-center"><?php if (in_array($manufacturer['manufacturer_id'], $selected)) { ?>
                    <input type="checkbox" name="selected[]" value="<?php echo $manufacturer['manufacturer_id']; ?>" checked="checked" />
                    <?php } else { ?>
                    <input type="checkbox" name="selected[]" value="<?php echo $manufacturer['manufacturer_id']; ?>" />
                    <?php } ?>
                  </td>
                  <td>
                  	<?php echo $manufacturer['manufacturer_id']; ?>
                  </td>
                  <td class="text-center"><?php if ($manufacturer['image']) { ?>
                    <img src="<?php echo $manufacturer['image']; ?>" alt="<?php echo $manufacturer['name']; ?>" class="img-thumbnail" />
                    <?php } else { ?>
                    <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span>
                    <?php } ?>
                  </td>
                  <td class="text-left"><?php echo $manufacturer['name']; ?></td>
                  <td class="text-left"><?php echo $manufacturer['featured_text']; ?></td>
                  <td class="text-right"><?php echo $manufacturer['sort_order']; ?></td>
                  <!-- Nhà sản xuất không cần thông tin ngày tạo (date_added) -->
                  <td class="text-right">
                  	<a href="<?php echo $manufacturer['edit']; ?>" data-toggle="tooltip" title="Sửa" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                  	<button type="button" data-toggle="tooltip" title="Xóa" class="btn btn-danger" onclick="$('input[name*=\'selected\'][value=\'<?php echo $manufacturer['manufacturer_id'];?>\']').prop('checked', true); confirm('Bạn có chắc muốn xóa') ? $('#form-manufacturer').submit() : false;$('input[name*=\'selected\']').prop('checked', false);"><i class="fa fa-trash-o"></i></button>
                  </td>
                </tr>
                <?php } ?>
                <?php } else { ?>
                <tr>
                  <td class="text-center" colspan="4">Không tìm thấy kết quả nào</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </form>
        <div class="row"><!-- Phân Trang, xem class.Paginator.php, sys.functions.php - paginate() -->
          <div class="col-sm-6 text-left"><?php echo $web_pagination_controls; ?></div>
          <div class="col-sm-6 text-right"><?php echo $web_pagination_results; ?></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$('#button-filter').on('click', function() { 
	var url = '/admin/manufacturer.php?';

	// Lấy ra từ khóa tìm kiếm gõ vào input text
	var filter_name = $('input[name=\'filter_name\']').val();
	
	// Gắn từ khóa đó vào url
	if (filter_name) 
	{
		url += '&filter_name=' + encodeURIComponent(filter_name);
	}

	// Tính nổi bật (có/không) trên thẻ select
	var filter_featured = $('select[name=\'filter_featured\']').val();

	// Nếu người dùng không chọn thẻ select thì thôi, còn nếu chọn Nổi bật/Không nổi bật
	// thì gắn vào url
	if (filter_featured != '*') 
	{
		url += '&filter_featured=' + encodeURIComponent(filter_featured);
	}

	// Nếu chỉ định giới hạn phân trang khác so với mặc định (config_limit_admin)
	//var filter_limit = $('select[name=\'filter_limit\']').val();
	var limit = $('select[name=\'filter_limit\']').val();

	if (limit != '*') 
	{
		url += '&limit=' + encodeURIComponent(limit);
	}	

	// Không duy trì số thứ tự trang ở đây vì limit thay đổi thì tổng số trang sẽ không còn như cũ !!!

	// Duy trì các tham số sắp xếp trên url
	url += '&sort=<?php echo $sort; ?>';
	url += '&order=<?php echo $order; ?>';

	// Điều hướng sang trang có các tham số lọc
	location = url;
});

// Gợi ý người dùng gõ vào từ khóa khớp với tên nhà sản xuất
$('input[name=\'filter_name\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: '/admin/manufacturer-autocomplete.php?filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['manufacturer_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'filter_name\']').val(item['label']);
	}
});


//input-name, input-model, input-price, input-quantity
// Sau khi người dùng nhập dữ liệu lọc trên form và ấn
// Enter thì kích hoạt sự kiện 'click' trên nút #button-filter
$("[id^='input-']").on('keydown', function(e) {
	if (e.keyCode == 13) {
		$('#button-filter').trigger('click');
	}
});
</script>