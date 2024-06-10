<!DOCTYPE html><?php include_once $_SERVER["DOCUMENT_ROOT"].'/configs.php';?>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!-- 
		<title>Dashboard | KingAdmin - Admin Dashboard</title>
	-->
	<title><?php echo $web_title;?></title>
	<link href="<?php echo web_icon_url(); ?>" rel="icon">
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/ui/common-head-layout-admin.php";?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="/ui/admin/flat_011/layout-admin_files/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/ui/admin/flat_011/layout-admin_files/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/ui/admin/flat_011/layout-admin_files/main.css" rel="stylesheet" type="text/css">
	<link href="/ui/admin/flat_011/layout-admin_files/my-custom-styles.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<!-- CSS for demo style switcher. you can remove this -->
	<link href="/ui/admin/flat_011/layout-admin_files/style-switcher.css" rel="stylesheet" type="text/css">
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><link rel="stylesheet" href="/ui/admin/flat_011/layout-admin_files/slategray.css" type="text/css"></head>

<body class="dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- TOP BAR -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<!-- logo -->
					<div class="col-md-2 logo">
						<a href="/home.php"><img src="<?php echo web_logo_url();?>" alt="<?php echo web_name();?>" width="64" /></a>
						<h1 class="sr-only">KingAdmin Admin Dashboard</h1>
					</div>
					<!-- end logo -->
					<div class="col-md-10">
						<div class="row">
							<!-- 
							<div class="col-md-3">
								<div id="tour-searchbox" class="input-group searchbox">
									<input type="search" class="form-control" placeholder="enter keyword here...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</div>
							 -->
							 <div class="col-md-3">&nbsp;</div>
							<div class="col-md-9">
								<div class="top-bar-right">
									<!-- responsive menu bar icon -->
									<a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
									<!-- end responsive menu bar icon -->
									<!--
									<button type="button" id="start-tour" class="btn btn-link"><i class="fa fa-refresh"></i> Start Tour</button>
									
									<button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa fa-volume-up"></i></button>
									-->
									<div class="notifications">
										<ul>
											<!-- notification: inbox -->
											<li class="notification-item inbox">
											    <div class="btn-group">
											        <a href="/home.php" title="Trang Chủ" target="_blank" class="dropdown-toggle" data-toggle="dropdown">
												    	<i class="fa fa-home fa-lg"></i>
												    </a>
											    </div>
												<div class="btn-group">
												    
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-envelope"></i><span class="count">2</span>
														<span class="circle"></span>
													</a>
													<ul class="dropdown-menu" role="menu">
														<li class="notification-header">
															<em>You have 2 unread messages</em>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="media-left">
																		<img class="media-object" src="/ui/admin/flat_011/layout-admin_files/user1.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Antonius</h5>
																		<p class="text">The problem just happened this morning. I can't see ...</p>
																		<span class="timestamp">4 minutes ago</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item unread clearfix">
															<a href="#">
																<div class="media">
																	<div class="media-left">
																		<img class="media-object" src="/ui/admin/flat_011/layout-admin_files/user2.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Michael</h5>
																		<p class="text">Hey dude, cool theme!</p>
																		<span class="timestamp">2 hours ago</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item unread clearfix">
															<a href="#">
																<div class="media">
																	<div class="media-left">
																		<img class="media-object" src="/ui/admin/flat_011/layout-admin_files/user3.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Stella</h5>
																		<p class="text">Ok now I can see the status for each item. Thanks! :D</p>
																		<span class="timestamp">Oct 6</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="media-left">
																		<img class="media-object" src="/ui/admin/flat_011/layout-admin_files/user4.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Jane Doe</h5>
																		<p class="text"><i class="fa fa-reply"></i> Please check the status of your ...</p>
																		<span class="timestamp">Oct 2</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="media-left">
																		<img class="media-object" src="/ui/admin/flat_011/layout-admin_files/user5.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">John Simmons</h5>
																		<p class="text"><i class="fa fa-reply"></i> I've fixed the problem :)</p>
																		<span class="timestamp">Sep 12</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="notification-footer">
															<a href="#">View All Messages</a>
														</li>
													</ul>
												</div>
											</li>
											<!-- end notification: inbox -->
											<!-- notification: general -->
											<li class="notification-item general">
												<div class="btn-group">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-bell"></i><span class="count">8</span>
														<span class="circle"></span>
													</a>
													<ul class="dropdown-menu" role="menu">
														<li class="notification-header">
															<em>You have 8 notifications</em>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">1 minute ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-user green-font"></i>
																<span class="text">New registered user</span>
																<span class="timestamp">12 minutes ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">18 minutes ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-shopping-cart red-font"></i>
																<span class="text">4 new sales order</span>
																<span class="timestamp">4 hours ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-edit yellow-font"></i>
																<span class="text">3 product reviews awaiting moderation</span>
																<span class="timestamp">1 day ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">3 days ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">Oct 15</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-warning red-font"></i>
																<span class="text red-font">Low disk space!</span>
																<span class="timestamp">Oct 11</span>
															</a>
														</li>
														<li class="notification-footer">
															<a href="#">View All Notifications</a>
														</li>
													</ul>
												</div>
											</li>
											<!-- end notification: general -->
										</ul>
									</div>
									<!-- logged user and the menu -->
									<div class="logged-user">
										<div class="btn-group">
											<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
												<img src="<?php echo user_image();?>" alt="User Avatar">
												<span class="name"><?php echo user_fullname();?></span> <span class="caret"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<span class="text">Profile</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-cog"></i>
														<span class="text">Settings</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-power-off"></i>
														<span class="text">Logout</span>
													</a>
												</li>
											</ul>
										</div>
										
									</div>
									<div class="btn-group" style="margin-left: 5px;">
										<i class="fa fa-power-off"></i>
										<a class="btn btn-link dropdown-toggle" data-toggle="dropdown" href="/admin-logout.php"><span class="text">Logout</span></a>
									</div>
									<!-- end logged user and the menu -->
								</div>
								<!-- /top-bar-right -->
							</div>
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top -->
		<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					<!-- left sidebar -->
					<div class="col-md-2 left-sidebar">
						<!-- main-nav -->
						<nav class="main-nav">
							<ul class="main-menu">
								<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-tag fa-fw"></i><span class="text" style="opacity: 1;">Danh Mục</span>
									<i class="toggle-icon fa fa-angle-left"></i></a>
									<ul class="sub-menu " style="display: none; overflow: hidden;">
										<li><a href="/admin/category.php"><span class="text">Loại Sản Phẩm</span></a></li>
										<li><a href="/admin/product.php"><span class="text">Sản Phẩm</span></a></li>
										<li><a href="/admin/manufacturer.php"><span class="text">Nhà Sản Xuất</span></a></li>
									</ul>
								</li>
								<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-bar-chart-o fw"></i><span class="text" style="opacity: 1;">Doanh Số</span>
									<i class="toggle-icon fa fa-angle-left"></i></a>
									<ul class="sub-menu " style="display: none; overflow: hidden;">
										<li><a href="/admin/order.php"><span class="text">Đơn hàng</span></a></li>
										<li><a href="#"><span class="text">Khách hàng </span></a></li>
									</ul>
								</li>
								
								<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-gears fw"></i><span class="text" style="opacity: 1;">Hệ thống</span>
									<i class="toggle-icon fa fa-angle-left"></i></a>
									<ul class="sub-menu " style="display: none; overflow: hidden;">
										<li><a href="/admin/setting-edit.php"><span class="text">Settings</span></a></li>
										<li><a href="/admin/banner-image.php"><span class="text">Banner</span></a></li>
										<li><a href="/admin/user.php"><span class="text">Quản Trị Viên</span></a></li>
									</ul>
								</li>
							</ul>
						</nav>
						<!-- /main-nav -->
						<div class="sidebar-minified js-toggle-minified">
							<i class="fa fa-angle-left"></i>
						</div>
						<!-- end sidebar content -->
					</div>
					<!-- end left sidebar -->
					<!-- content-wrapper -->
					<div class="col-md-10 content-wrapper" style="min-height: 3091px;">
						<?php include_once $web_content;?>  
                    </div>
					<!-- /content-wrapper -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
	</div>
	<!-- /wrapper -->
	<!-- FOOTER -->
	<footer class="footer">
		© 2014-2015 The Develovers
	</footer>
	<!-- END FOOTER -->
	<!-- STYLE SWITCHER -->
<div class="del-style-switcher" style="right: -250px;">
	<div class="del-switcher-toggle toggle-hide"></div>
	<form>
		<section class="del-section del-section-skin">
			<h5 class="del-switcher-header">Choose Skins:</h5>

			<ul>
				<li><a href="#" title="Slate Gray" class="switch-skin slategray" data-skin="assets/css/skins/slategray.css">Slate Gray</a></li>
				<li><a href="#" title="Dark Blue" class="switch-skin darkblue" data-skin="assets/css/skins/darkblue.css">Dark Blue</a></li>
				<li><a href="#" title="Dark Brown" class="switch-skin darkbrown" data-skin="assets/css/skins/darkbrown.css">Dark Brown</a></li>
				<li><a href="#" title="Light Green" class="switch-skin lightgreen" data-skin="assets/css/skins/lightgreen.css">Light Green</a></li>
				<li><a href="#" title="Orange" class="switch-skin orange" data-skin="assets/css/skins/orange.css">Orange</a></li>
				<li><a href="#" title="Red" class="switch-skin red" data-skin="assets/css/skins/red.css">Red</a></li>
				<li><a href="#" title="Teal" class="switch-skin teal" data-skin="assets/css/skins/teal.css">Teal</a></li>
				<li><a href="#" title="Yellow" class="switch-skin yellow" data-skin="assets/css/skins/yellow.css">Yellow</a></li>
			</ul>
			<div id="transparent-control"><p><em>There is specific transparent version for this page, check <span class="important">← left</span> navigation menu</em></p><br></div>
			<button type="button" class="switch-skin-full fulldark" data-skin="assets/css/skins/fulldark.css">Full Dark</button>
			<button type="button" class="switch-skin-full fullbright" data-skin="assets/css/skins/fullbright.css">Full Bright</button>
		</section>
		<label class="fancy-checkbox"><input type="checkbox" id="fixed-top-nav"><span>Fixed Top Navigation</span></label>
		<p><a href="#" title="Reset Style" class="del-reset-style">Reset Style</a></p>
	</form>
	<script async src="/ui/admin/flat_011/layout-admin_files/analytics.js"></script><script type="text/javascript">
		var currentFilename = window.location.pathname.split('/').pop();
		if( currentFilename == '' ) currentFilename = 'index.html';

		var arrHasTransparent = ['index.html', 'index-dashboard-v2.html', 'charts-statistics-interactive.html', 'charts-statistics-real-time.html',
			'charts-statistics.html', 'components-maps.html', 'components-tree-view.html', 'page-file-manager.html'
		];

		var hasTransparent = false;

		arrHasTransparent.forEach(function(filename) {
			if( filename == currentFilename ) {
				hasTransparent = true;
				return;
			}
		});

		if( hasTransparent ) {
			document.getElementById("transparent-control").innerHTML = '<p><em>There is specific transparent version for this page, check <span class="important">&larr; left</span> navigation menu</em></p><br>';
		} else {
			document.getElementById("transparent-control").innerHTML = '<button type="button" class="switch-skin-full transparent" data-skin="assets/css/skins/transparent.css">Transparent</button>';
		}
	</script>
</div>
<!-- END STYLE SWITCHER -->
	<!-- Javascript -->
	<script src="/ui/admin/flat_011/layout-admin_files/jquery-2.1.0.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/bootstrap.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/modernizr.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/bootstrap-tour.custom.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/king-common.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/deliswitch.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.easypiechart.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/raphael-2.1.0.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.flot.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.flot.resize.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.flot.time.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.flot.pie.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.flot.tooltip.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.sparkline.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.dataTables.min.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/dataTables.bootstrap.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/jquery.mapael.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/usa_states.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/king-chart-stat.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/king-table.js"></script>
	<script src="/ui/admin/flat_011/layout-admin_files/king-components.js"></script>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-67690109-1', 'auto');
	  ga('send', 'pageview');
	
	</script>


<div id="flotTip" style="position: absolute; z-index: 100; padding: 0.4em 0.6em; border-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); display: none; white-space: nowrap; background: rgb(255, 255, 255);"></div></body></html>