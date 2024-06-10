<style>
#jssor_1 
{
	background: linear-gradient(to bottom,#ffffff 0%,#f2f2f2 100%);
	border-top: 1px solid #efeeee;
	border-left: 1px solid #e9e8e8;
	border-right: 1px solid #bfbebe;
	border-bottom: 1px solid #a9a8a8;
	margin-top: 15px;
	margin-bottom: 15px;	
	box-sizing: border-box;
}
</style>

<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
<!-- Loading Screen -->
<div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
<div style="position:absolute;display:block;background:url('/ui/src/js/jquery/plugins/jssor/22.2.8/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
<?php foreach (homeSlideshowBanners() as $banner) { ?>
			  <div class="item">
			    <?php if ($banner['link']) { ?>
			    <a href="<?php echo $banner['link']; ?>">
			     <img data-u="image" src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
			    </a>
			    <?php } else { ?>
			    <img data-u="image" src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
			    <?php } ?>
			  </div>
<?php } ?>
</div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator color: rgba(0,0,0,0.8); -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2">
        	<i class="fa fa-chevron-left"></i>
        </span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2">
        	<i class="fa fa-chevron-right"></i>
        </span>
</div>
<!-- #endregion Jssor Slider End -->
