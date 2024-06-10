<!-- START SLIDESHOW ẢNH SẢN PHẨM -->
    <div id="slideshow0" class="owl-carousel" style="opacity: 1;">
	  <?php foreach (homeSlideshowBanners() as $banner) { ?>
	  <div class="item">
	    <?php if ($banner['link']) { ?>
	    <a href="<?php echo $banner['link']; ?>"><img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" /></a>
	    <?php } else { ?>
	    <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
	    <?php } ?>
	  </div>
	  <?php } ?>
	</div>
	<script type="text/javascript"><!--
	$('#slideshow0').owlCarousel({
		items: 6,
		autoPlay: 3000,
		singleItem: true,
		navigation: true,
		navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
		pagination: true
	});
	--></script>
    <!-- END SLIDESHOW ẢNH SẢN PHẨM -->