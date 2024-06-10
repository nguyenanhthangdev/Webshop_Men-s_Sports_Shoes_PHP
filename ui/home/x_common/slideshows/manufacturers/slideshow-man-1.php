<ul id="slideshow-man">
	<?php foreach (array_slice(bannerGetDetailsByModule('carousel'), 0,5) as $banner) { ?>
	<?php //foreach (homeCarouselBanners() as $banner) { ?>
	<li class="item"><a href=""><img src="<?php echo $banner['image']?>" alt="Dolore sit amet"></a>
	</li>
	<?php }?>

</ul>