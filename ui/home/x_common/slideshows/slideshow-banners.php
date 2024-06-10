<!--  
Banner chung chung, không cụ thể. Lấy ví dụ: 3 banner nằm liên tiếp nhau
mỗi cái cố một ảnh nền, một link, một title. 
-->
<?php foreach (bannerGetDetailsByModule('banner') as $banner) { ?>

<div class="col-sm-4"><a href="<?php echo $banner['link'] ?>"><img src="<?php echo $banner['image'] ?>" alt="banner-3" title="banner-3"><div class="s-desc"><h1><?php echo $banner['title'] ?></h1>
<h2>dolore ipsum</h2>
<i class="fa fa-search"></i></div></a></div>

<?php } ?>