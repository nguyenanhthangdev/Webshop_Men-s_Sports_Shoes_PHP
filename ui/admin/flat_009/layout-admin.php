<!DOCTYPE html><?php include_once $_SERVER["DOCUMENT_ROOT"].'/configs.php'; ?>
<!-- saved from url=(0046)http://www.themeon.net/nifty/v2.2.3/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $web_title;?></title>
		<link href="<?php echo web_icon_url(); ?>" rel="icon">
		<?php include_once $_SERVER['DOCUMENT_ROOT']."/ui/common-head-layout-admin.php";?>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ] -->
     <link href="/ui/admin/flat_009/layout-admin_files/css" rel="stylesheet">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/nifty.min.css" rel="stylesheet">

    
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/font-awesome.min.css" rel="stylesheet">


    <!--Animate.css [ OPTIONAL ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/animate.min.css" rel="stylesheet">


    <!--Morris.js [ OPTIONAL ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/morris.min.css" rel="stylesheet">


    <!--Switchery [ OPTIONAL ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/switchery.min.css" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/bootstrap-select.min.css" rel="stylesheet">


    <!--Demo script [ DEMONSTRATION ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/nifty-demo.min.css" rel="stylesheet">




    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="/ui/admin/flat_009/layout-admin_files/pace.min.css" rel="stylesheet">
    <script src="/ui/admin/flat_009/layout-admin_files/pace.min.js"></script>


    
	<!--

	REQUIRED
	You must include this in your project.

	RECOMMENDED
	This category must be included but you may modify which plugins or components which should be included in your project.

	OPTIONAL
	Optional plugins. You may choose whether to include it in your project or not.

	DEMONSTRATION
	This is to be removed, used for demonstration purposes only. This category must not be included in your project.

	SAMPLE
	Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


	Detailed information and more samples can be found in the document.

	-->
		

<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background-color: #3a3f44;border-radius: 2px;color: white;text-align: right;white-space: nowrap;padding: 7px 14px;z-index: 10000;}.jqsfield { color: white;font-size: 14;text-align: right;}</style><link id="theme" href="/ui/admin/flat_009/layout-admin_files/theme-navy.min.css" rel="stylesheet"></head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body class="nifty-ready  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
	<div id="container" class="effect mainnav-lg">
		
		<!--NAVBAR-->
		<!--===================================================-->
		<header id="navbar" class="">
			<div id="navbar-container" class="boxed">

				<!--Brand logo & name-->
				<!--================================-->
				<div class="navbar-header">
					<a href="http://www.themeon.net/nifty/v2.2.3/index.html" class="navbar-brand">
						<img src="<?php echo web_logo_url(); ?>" alt="Nifty Logo" class="brand-icon">
						<div class="brand-title">
							<span class="brand-text">Admin Panel</span>
						</div>
					</a>
				</div>
				<!--================================-->
				<!--End brand logo & name-->


				<!--Navbar Dropdown-->
				<!--================================-->
				<div class="navbar-content clearfix">
					<ul class="nav navbar-top-links pull-left">

						<!--Navigation toogle button-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="tgl-menu-btn">
							<a class="mainnav-toggle" href="http://www.themeon.net/nifty/v2.2.3/index.html#">
								<i class="fa fa-navicon fa-lg"></i>
							</a>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End Navigation toogle button-->


						<!--Messages Dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="dropdown">
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" data-toggle="dropdown" class="dropdown-toggle">
								<i class="fa fa-envelope fa-lg"></i>
								<span class="badge badge-header badge-warning">9</span>
							</a>

							<!--Message dropdown menu-->
							<div class="dropdown-menu dropdown-menu-md with-arrow">
								<div class="pad-all bord-btm">
									<p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
								</div>
								<div class="nano scrollable has-scrollbar" style="height: 0px;">
									<div class="nano-content" tabindex="0" style="right: -17px;">
										<ul class="head-list">
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<img src="/ui/admin/flat_009/layout-admin_files/av2.png" alt="Profile Picture" class="img-circle img-sm">
													</div>
													<div class="media-body">
														<div class="text-nowrap">Andy sent you a message</div>
														<small class="text-muted">15 minutes ago</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<img src="/ui/admin/flat_009/layout-admin_files/av4.png" alt="Profile Picture" class="img-circle img-sm">
													</div>
													<div class="media-body">
														<div class="text-nowrap">Lucy sent you a message</div>
														<small class="text-muted">30 minutes ago</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<img src="/ui/admin/flat_009/layout-admin_files/av3.png" alt="Profile Picture" class="img-circle img-sm">
													</div>
													<div class="media-body">
														<div class="text-nowrap">Jackson sent you a message</div>
														<small class="text-muted">40 minutes ago</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<img src="/ui/admin/flat_009/layout-admin_files/av6.png" alt="Profile Picture" class="img-circle img-sm">
													</div>
													<div class="media-body">
														<div class="text-nowrap">Donna sent you a message</div>
														<small class="text-muted">5 hours ago</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<img src="/ui/admin/flat_009/layout-admin_files/av4.png" alt="Profile Picture" class="img-circle img-sm">
													</div>
													<div class="media-body">
														<div class="text-nowrap">Lucy sent you a message</div>
														<small class="text-muted">Yesterday</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<img src="/ui/admin/flat_009/layout-admin_files/av3.png" alt="Profile Picture" class="img-circle img-sm">
													</div>
													<div class="media-body">
														<div class="text-nowrap">Jackson sent you a message</div>
														<small class="text-muted">Yesterday</small>
													</div>
												</a>
											</li>
										</ul>
									</div>
								<div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);"></div></div></div>

								<!--Dropdown footer-->
								<div class="pad-all bord-top">
									<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="btn-link text-dark box-block">
										<i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages
									</a>
								</div>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End message dropdown-->




						<!--Notification dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="dropdown">
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" data-toggle="dropdown" class="dropdown-toggle">
								<i class="fa fa-bell fa-lg"></i>
								<span class="badge badge-header badge-danger">5</span>
							</a>

							<!--Notification dropdown menu-->
							<div class="dropdown-menu dropdown-menu-md with-arrow">
								<div class="pad-all bord-btm">
									<p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
								</div>
								<div class="nano scrollable has-scrollbar" style="height: 0px;">
									<div class="nano-content" tabindex="0" style="right: -17px;">
										<ul class="head-list">

											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#">
													<div class="clearfix">
														<p class="pull-left">Database Repair</p>
														<p class="pull-right">70%</p>
													</div>
													<div class="progress progress-sm">
														<div style="width: 70%;" class="progress-bar">
															<span class="sr-only">70% Complete</span>
														</div>
													</div>
												</a>
											</li>

											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#">
													<div class="clearfix">
														<p class="pull-left">Upgrade Progress</p>
														<p class="pull-right">10%</p>
													</div>
													<div class="progress progress-sm">
														<div style="width: 10%;" class="progress-bar progress-bar-warning">
															<span class="sr-only">10% Complete</span>
														</div>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<span class="icon-wrap icon-circle bg-primary">
															<i class="fa fa-comment fa-lg"></i>
														</span>
													</div>
													<div class="media-body">
														<div class="text-nowrap">New comments waiting approval</div>
														<small class="text-muted">15 minutes ago</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
											<span class="badge badge-success pull-right">90%</span>
													<div class="media-left">
														<span class="icon-wrap icon-circle bg-danger">
															<i class="fa fa-hdd-o fa-lg"></i>
														</span>
													</div>
													<div class="media-body">
														<div class="text-nowrap">HDD is full</div>
														<small class="text-muted">50 minutes ago</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<span class="icon-wrap bg-info">
															<i class="fa fa-file-word-o fa-lg"></i>
														</span>
													</div>
													<div class="media-body">
														<div class="text-nowrap">Write a news article</div>
														<small class="text-muted">Last Update 8 hours ago</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
											<span class="label label-danger pull-right">New</span>
													<div class="media-left">
														<span class="icon-wrap bg-purple">
															<i class="fa fa-comment fa-lg"></i>
														</span>
													</div>
													<div class="media-body">
														<div class="text-nowrap">Comment Sorting</div>
														<small class="text-muted">Last Update 8 hours ago</small>
													</div>
												</a>
											</li>
									
											<!-- Dropdown list-->
											<li>
												<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="media">
													<div class="media-left">
														<span class="icon-wrap bg-success">
															<i class="fa fa-user fa-lg"></i>
														</span>
													</div>
													<div class="media-body">
														<div class="text-nowrap">New User Registered</div>
														<small class="text-muted">4 minutes ago</small>
													</div>
												</a>
											</li>
										</ul>
									</div>
								<div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);"></div></div></div>

								<!--Dropdown footer-->
								<div class="pad-all bord-top">
									<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="btn-link text-dark box-block">
										<i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
									</a>
								</div>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End notifications dropdown-->



						<!--Mega dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="mega-dropdown">
							<a href="/home.php" title="Trang Chủ" class="mega-dropdown-toggle">
<!-- 								<i class="fa fa-th-large fa-lg"></i> -->
									<i class="fa fa-home fa-lg"></i>
							</a>
							<div class="dropdown-menu mega-dropdown-menu">
								<div class="clearfix">
									<div class="col-sm-12 col-md-3">

										<!--Mega menu widget-->
										<div class="text-center bg-purple pad-all">
											<h3 class="text-thin mar-no">Weekend shopping</h3>
											<div class="pad-ver box-inline">
												<span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
													<i class="fa fa-shopping-cart fa-4x"></i>
												</span>
											</div>
											<p class="pad-btm">
												Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
											</p>
											<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="btn btn-purple">Learn More...</a>
										</div>

									</div>
									<div class="col-sm-4 col-md-3">

										<!--Mega menu list-->
										<ul class="list-unstyled">
											<li class="dropdown-header">Pages</li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Profile</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Search Result</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">FAQ</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Sreen Lock</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="disabled">Disabled</a></li>
											<li class="divider"></li>
											<li class="dropdown-header">Icons</li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Skycons</a></li>
										</ul>

									</div>
									<div class="col-sm-4 col-md-3">

										<!--Mega menu list-->
										<ul class="list-unstyled">
											<li class="dropdown-header">Mailbox</li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Read Message</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Compose</a></li>
											<li class="divider"></li>
											<li class="dropdown-header">Featured</li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Smart navigation</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Lot of themes</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Transition effects</a></li>
										</ul>

									</div>
									<div class="col-sm-4 col-md-3">

										<!--Mega menu list-->
										<ul class="list-unstyled">
											<li class="dropdown-header">Components</li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Tables</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Charts</a></li>
											<li><a href="http://www.themeon.net/nifty/v2.2.3/index.html#">Forms</a></li>
											<li class="divider"></li>
											<li>
												<form role="form" class="form">
													<div class="form-group">
														<label class="dropdown-header" for="demo-megamenu-input">Newsletter</label>
														<input id="demo-megamenu-input" type="email" placeholder="Enter email" class="form-control">
													</div>
													<button class="btn btn-primary btn-block" type="submit">Submit</button>
												</form>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End mega dropdown-->

					</ul>
					<ul class="nav navbar-top-links pull-right">
					
						<!--User dropdown-->
						<li id="dropdown-user" class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
								<span class="pull-right">
									<img class="img-circle img-user media-object" src="<?php echo user_image(); ?>" alt="<?php echo user_fullname();?>">
								</span>
								<div class="username hidden-xs"><?php echo user_fullname();?></div>
							</a>
						</li>

						<li>
							<a id="" class="" href="/admin-logout.php">
								<span class="lang-name">Đăng thoát &nbsp;<i class="fa fa-sign-out fa-lg"></i></span>
							</a>

						</li>
					</ul>
				</div>
				<!--================================-->
				<!--End Navbar Dropdown-->

			</div>
		</header>
		<!--===================================================-->
		<!--END NAVBAR-->

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
					<?php include_once $web_content;?>    
			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->


			
			<!--MAIN NAVIGATION-->
			<!--===================================================-->
			<nav id="mainnav-container">
				<div id="mainnav">

					<!--Shortcut buttons-->
					<!--================================-->
					<div id="mainnav-shortcut">
						<ul class="list-unstyled">
							<li class="col-xs-4" data-content="Additional Sidebar" data-original-title="" title="">
								<a id="demo-toggle-aside" class="shortcut-grid" href="http://www.themeon.net/nifty/v2.2.3/index.html#">
									<i class="fa fa-magic"></i>
								</a>
							</li>
							<li class="col-xs-4" data-content="Notification" data-original-title="" title="">
								<a id="demo-alert" class="shortcut-grid" href="http://www.themeon.net/nifty/v2.2.3/index.html#">
									<i class="fa fa-bullhorn"></i>
								</a>
							</li>
							<li class="col-xs-4" data-content="Page Alerts" data-original-title="" title="">
								<a id="demo-page-alert" class="shortcut-grid" href="http://www.themeon.net/nifty/v2.2.3/index.html#">
									<i class="fa fa-bell"></i>
								</a>
							</li>
						</ul>
					</div>
					<!--================================-->
					<!--End shortcut buttons-->


					<!--Menu-->
					<!--================================-->
					<div id="mainnav-menu-wrap">
						<div class="nano has-scrollbar">
							<div class="nano-content" tabindex="0" style="right: -17px;">
								<ul id="mainnav-menu" class="list-group">
						
									<!--Category name-->
									<li class="list-header">Danh Mục</li>
						
									
						
									<!--Menu list item-->
									<li class="<?php if($active_page_admin == ACTIVE_PAGE_ADMIN_PRODUCT) echo "active-link";?>">
										<a href="/admin/product.php" data-original-title="" title="">
											<i class="fa fa-puzzle-piece fa-fw"></i>
											<span class="menu-title">
												<strong>Sản Phẩm</strong>
											</span>
										</a>
										
									</li>
									
									<!--Menu list item-->
									<li>
										<a href="/admin/category.php" data-original-title="" title="">
											<i class="fa fa-tags fa-fw"></i>
											<span class="menu-title">
												<strong>Loại Sản Phẩm</strong>
											</span>
										</a>
						
									</li>
									
									<!--Menu list item-->
									<li>
										<a href="/admin/manufacturer.php" data-original-title="" title="">
											<i class="fa fa-copyright fa-fw"></i>
											<span class="menu-title">
												<strong>Nhà Sản Xuất</strong>
											</span>
										</a>
						
									</li>
									
									<li class="list-divider"></li>
						
									<!--Category name-->
									<li class="list-header">Doanh Số</li>
									
									<!--Menu list item-->
									<li>
										<a href="/admin/order.php" data-original-title="" title="">
											<i class="fa fa-shopping-cart fa-fw"></i>
											<span class="menu-title">
												<strong>Đơn Hàng</strong>
											</span>
										</a>
						
									</li>
									
									<!--Menu list item-->
									<li>
										<a href="/admin/order.php" data-original-title="" title="">
											<i class="fa fa-users fa-fw"></i>
											<span class="menu-title">
												<strong>Khách Hàng</strong>
											</span>
										</a>
						
									</li>
									<!-- 
									<li class="active-link">
										<a href="/admin/dashboard.php" data-original-title="" title="">
											<i class="fa fa-dashboard"></i>
											<span class="menu-title">
												<strong>Dashboard</strong>
												<span class="label label-success pull-right">Top</span>
											</span>
										</a>
									</li>
									<li>
										<a href="/admin/module.php" data-original-title="" title="">
											<i class="fa fa-puzzle-piece fa-fw"></i>
											<span class="menu-title">Modules</span>
										</a>
									</li>
									-->
									<li class="list-divider"></li>
						
									<!--Category name-->
									<li class="list-header">Extra</li>
						
									<li>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" data-original-title="" title="">
											<i class="fa fa-cogs fa-fw"></i>
											<span class="menu-title">Hệ Thống</span>
											<i class="arrow"></i>
										</a>
						
										<!--Submenu-->
										
									<ul class="collapse">
											<li><a href="/admin/setting-edit.php"><i class="fa fa-cog fa-fw"></i><span>Settings</span></a></li>
      
									      <li><a href="/admin/banner-image.php"><i class="fa fa-picture-o fa-fw"></i><span>Banners</span></a>
									      </li>
									      
									      <li><a href="/admin/user.php"><i class="fa fa-user fa-fw"></i><span>Quản Trị Viên</span></a>
									      </li>
											
										</ul></li>

									

								</ul>


								<!--Widget-->
								<!--================================-->
								<div class="mainnav-widget">

									<!-- Show the button on collapsed navigation -->
									<!-- 
									<div class="show-small">
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" data-toggle="menu-widget" data-target="#demo-wg-server" data-original-title="" title="">
											<i class="fa fa-desktop"></i>
										</a>
									</div>
									-->

									<!-- Hide the content on collapsed navigation -->
									<!-- 
								<div id="demo-wg-server" class="hide-small mainnav-widget-content">
										<ul class="list-group">
											<li class="list-header pad-no pad-ver">Server Status</li>
											<li class="mar-btm">
												<span class="label label-primary pull-right">15%</span>
												<p>CPU Usage</p>
												<div class="progress progress-sm">
													<div class="progress-bar progress-bar-primary" style="width: 15%;">
														<span class="sr-only">15%</span>
													</div>
												</div>
											</li>
											<li class="mar-btm">
												<span class="label label-purple pull-right">75%</span>
												<p>Bandwidth</p>
												<div class="progress progress-sm">
													<div class="progress-bar progress-bar-purple" style="width: 75%;">
														<span class="sr-only">75%</span>
													</div>
												</div>
											</li>
											<li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
										</ul>
									</div></div>
									-->
								<!--================================-->
								<!--End widget-->

							</div>
						<div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);"></div></div></div>
					</div>
					<!--================================-->
					<!--End menu-->

				</div>
			</nav>
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->
			
			<!--ASIDE-->
			<!--===================================================-->
			<aside id="aside-container">
				<div id="aside">
					<div class="nano has-scrollbar">
						<div class="nano-content" tabindex="0" style="right: -17px;">
							
							<!--Nav tabs-->
							<!--================================-->
							<ul class="nav nav-tabs nav-justified">
								<li class="active">
									<a href="http://www.themeon.net/nifty/v2.2.3/index.html#demo-asd-tab-1" data-toggle="tab">
										<i class="fa fa-comments"></i>
										<span class="badge badge-purple">7</span>
									</a>
								</li>
								<li>
									<a href="http://www.themeon.net/nifty/v2.2.3/index.html#demo-asd-tab-2" data-toggle="tab">
										<i class="fa fa-info-circle"></i>
									</a>
								</li>
								<li>
									<a href="http://www.themeon.net/nifty/v2.2.3/index.html#demo-asd-tab-3" data-toggle="tab">
										<i class="fa fa-wrench"></i>
									</a>
								</li>
							</ul>
							<!--================================-->
							<!--End nav tabs-->



							<!-- Tabs Content -->
							<!--================================-->
							<div class="tab-content">

								<!--First tab (Contact list)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade in active" id="demo-asd-tab-1">
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-warning">3</span> Family
									</h4>

									<!--Family-->
									<div class="list-group bg-trans">
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="/ui/admin/flat_009/layout-admin_files/av2.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Stephen Tran</div>
												<span class="text-muted">Availabe</span>
											</div>
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="/ui/admin/flat_009/layout-admin_files/av4.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Brittany Meyer</div>
												<span class="text-muted">I think so</span>
											</div>
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="/ui/admin/flat_009/layout-admin_files/av3.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Donald Brown</div>
												<span class="text-muted">Lorem ipsum dolor sit amet.</span>
											</div>
										</a>
									</div>


									<hr>
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-info">4</span> Friends
									</h4>

									<!--Friends-->
									<div class="list-group bg-trans">
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="/ui/admin/flat_009/layout-admin_files/av5.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Betty Murphy</div>
												<span class="text-muted">Bye</span>
											</div>
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="/ui/admin/flat_009/layout-admin_files/av6.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Olivia Spencer</div>
												<span class="text-muted">Thank you!</span>
											</div>
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="/ui/admin/flat_009/layout-admin_files/av4.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Sarah Ruiz</div>
												<span class="text-muted">2 hours ago</span>
											</div>
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="/ui/admin/flat_009/layout-admin_files/av3.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Paul Aguilar</div>
												<span class="text-muted">2 hours ago</span>
											</div>
										</a>
									</div>


									<hr>
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-success">Offline</span> Works
									</h4>

									<!--Works-->
									<div class="list-group bg-trans">
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<span class="badge badge-pink badge-icon badge-fw pull-left"></span> Lucy Moon
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
										</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">
											<span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
										</a>
									</div>

								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--End first tab (Contact list)-->


								<!--Second tab (Custom layout)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade" id="demo-asd-tab-2">

									<!--Monthly billing-->
									<div class="pad-all">
										<h4 class="text-lg mar-no">Monthly Billing</h4>
										<p class="text-sm">January 2015</p>
										<button class="btn btn-block btn-success mar-top">Pay Now</button>
									</div>


									<hr>

									<!--Information-->
									<div class="text-center clearfix pad-top">
										<div class="col-xs-6">
											<span class="h4">4,327</span>
											<p class="text-muted text-uppercase"><small>Sales</small></p>
										</div>
										<div class="col-xs-6">
											<span class="h4">$ 1,252</span>
											<p class="text-muted text-uppercase"><small>Earning</small></p>
										</div>
									</div>


									<hr>

									<!--Simple Menu-->
									<div class="list-group bg-trans">
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item"><span class="label label-danger pull-right">Featured</span>Edit Password</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">Email</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item"><span class="label label-success pull-right">New</span>Chat</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">Reports</a>
										<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="list-group-item">Transfer Funds</a>
									</div>


									<hr>

									<div class="text-center">Questions?
										<p class="text-lg text-semibold"> (415) 234-53454 </p>
										<small><em>We are here 24/7</em></small>
									</div>
								</div>
								<!--End second tab (Custom layout)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


								<!--Third tab (Settings)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade" id="demo-asd-tab-3">
									<ul class="list-group bg-trans">
										<li class="list-header">
											<h4 class="text-thin">Account Settings</h4>
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 189, 99);"><small style="left: 17px; transition: left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
											</div>
											<p>Show my personal status</p>
											<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 189, 99);"><small style="left: 17px; transition: left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
											</div>
											<p>Show offline contact</p>
											<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); transition: border 0.4s, box-shadow 0.4s; background-color: rgb(255, 255, 255);"><small style="left: 0px; transition: left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
											</div>
											<p>Invisible mode </p>
											<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
										</li>
									</ul>


									<hr>

									<ul class="list-group bg-trans">
										<li class="list-header"><h4 class="text-thin">Public Settings</h4></li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 189, 99);"><small style="left: 17px; transition: left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
											</div>
											Online status
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 189, 99);"><small style="left: 17px; transition: left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
											</div>
											Show offline contact
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); transition: border 0.4s, box-shadow 0.4s; background-color: rgb(255, 255, 255);"><small style="left: 0px; transition: left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
											</div>
											Show my device icon
										</li>
									</ul>



									<hr>

									<h4 class="pad-hor text-thin">Task Progress</h4>
									<div class="pad-all">
										<p>Upgrade Progress</p>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
										</div>
										<small class="text-muted">15% Completed</small>
									</div>
									<div class="pad-hor">
										<p>Database</p>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
										</div>
										<small class="text-muted">17/23 Database</small>
									</div>

								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--Third tab (Settings)-->

							</div>
						</div>
					<div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);"></div></div></div>
				</div>
			</aside>
			<!--===================================================-->
			<!--END ASIDE-->

		</div>

		

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

           <!-- 
            <div class="show-fixed pull-right">
                <ul class="footer-list list-inline">
                    <li>
                        <p class="text-sm">SEO Proggres</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                        </div>
                    </li>

                    <li>
                        <p class="text-sm">Online Tutorial</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                    </li>
                </ul>
            </div>



            <div class="hide-fixed pull-right pad-rgt">Currently v2.2.3</div>

            <p class="pad-lft">© 2015 Your Company</p>
            -->



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->



	<div id="floating-top-right" class="floating-container"></div></div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->


	
	
	<!-- SETTINGS - DEMO PURPOSE ONLY -->
	<!--===================================================-->
	<div id="demo-set" class="demo-set">
		<div class="demo-set-body bg-dark">
			<div id="demo-set-alert"></div>
			<div class="demo-set-content clearfix">
				<div class="col-xs-6 col-md-4">
					<h4 class="text-lg mar-btm">Animations</h4>
					<div id="demo-anim" class="mar-btm">
						<label class="form-checkbox form-icon active form-text">
							<input type="checkbox" checked=""> Enable Animations
						</label>
					</div>
					<p>Transition effects</p>
					<select id="demo-ease" style="display: none;">
						<option value="effect" selected="">ease (Default)</option>
						<option value="easeInQuart">easeInQuart</option>
						<option value="easeOutQuart">easeOutQuart</option>
						<option value="easeInBack">easeInBack</option>
						<option value="easeOutBack">easeOutBack</option>
						<option value="easeInOutBack">easeInOutBack</option>
						<option value="steps">Steps</option>
						<option value="jumping">Jumping</option>
						<option value="rubber">Rubber</option>
					</select><div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="demo-ease" title="ease (Default)"><span class="filter-option pull-left">ease (Default)</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="ease (Default)"><span class="text">ease (Default)</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="easeInQuart"><span class="text">easeInQuart</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="easeOutQuart"><span class="text">easeOutQuart</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="easeInBack"><span class="text">easeInBack</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="easeOutBack"><span class="text">easeOutBack</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="easeInOutBack"><span class="text">easeInOutBack</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-normalized-text="Steps"><span class="text">Steps</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-normalized-text="Jumping"><span class="text">Jumping</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-normalized-text="Rubber"><span class="text">Rubber</span><span class="fa fa-check check-mark"></span></a></li></ul></div></div>
					<hr class="bord-no">
					<br>
					<h4 class="text-lg mar-btm">Navigation</h4>
					<div class="mar-btm">
						<label id="demo-nav-fixed" class="form-checkbox form-icon form-text">
							<input type="checkbox"> Fixed
						</label>
					</div>
					<label id="demo-nav-coll" class="form-checkbox form-icon form-text">
						<input type="checkbox"> Collapsed
					</label>
					<hr class="bord-no">
					<br>
					<h4 class="text-lg mar-btm">Off Canvas Navigation</h4>
					<select id="demo-nav-offcanvas" style="display: none;">
						<option value="none" selected="" disabled="disabled">-- Select Mode --</option>
						<option value="push">Push</option>
						<option value="slide">Slide in on top</option>
						<option value="reveal">Reveal</option>
					</select><div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="demo-nav-offcanvas" title="-- Select Mode --"><span class="filter-option pull-left">-- Select Mode --</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" data-normalized-text="-- Select Mode --" href="http://www.themeon.net/nifty/v2.2.3/index.html#"><span class="text">-- Select Mode --</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="Push"><span class="text">Push</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="Slide in on top"><span class="text">Slide in on top</span><span class="fa fa-check check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="Reveal"><span class="text">Reveal</span><span class="fa fa-check check-mark"></span></a></li></ul></div></div>
				</div>
				<div class="col-xs-6 col-md-3">
					<h4 class="text-lg mar-btm">Aside</h4>
					<div class="form-block">
						<label id="demo-asd-vis" class="form-checkbox form-icon form-text">
							<input type="checkbox"> Visible
						</label>
						<label id="demo-asd-fixed" class="form-checkbox form-icon form-text">
							<input type="checkbox"> Fixed
						</label>
						<label id="demo-asd-align" class="form-checkbox form-icon form-text">
							<input type="checkbox"> Aside on the left side
						</label>
						<label id="demo-asd-themes" class="form-checkbox form-icon form-text">
							<input type="checkbox"> Bright Theme
						</label>
					</div>
					<hr class="bord-no">
					<br>
					<h4 class="text-lg mar-btm">Header / Navbar</h4>
					<label id="demo-navbar-fixed" class="form-checkbox form-icon form-text">
						<input type="checkbox"> Fixed
					</label>
					<hr class="bord-no">
					<br>
					<h4 class="text-lg mar-btm">Footer</h4>
					<label id="demo-footer-fixed" class="form-checkbox form-icon form-text">
						<input type="checkbox"> Fixed
					</label>
				</div>
				<div class="col-xs-12 col-md-5">
					<div id="demo-theme">
						<h4 class="text-lg mar-btm">Color Themes</h4>
						<div class="demo-theme-btn">
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-light add-tooltip" data-theme="theme-light" data-type="a" data-title="(A). Light" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-navy add-tooltip disabled" data-theme="theme-navy" data-type="a" data-title="(A). Navy Blue" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-ocean add-tooltip" data-theme="theme-ocean" data-type="a" data-title="(A). Ocean" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-lime add-tooltip" data-theme="theme-lime" data-type="a" data-title="(A). Lime" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-purple add-tooltip" data-theme="theme-purple" data-type="a" data-title="(A). Purple" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-dust add-tooltip" data-theme="theme-dust" data-type="a" data-title="(A). Dust" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-mint add-tooltip" data-theme="theme-mint" data-type="a" data-title="(A). Mint" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-yellow add-tooltip" data-theme="theme-yellow" data-type="a" data-title="(A). Yellow" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-well-red add-tooltip" data-theme="theme-well-red" data-type="a" data-title="(A). Well Red" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-coffee add-tooltip" data-theme="theme-coffee" data-type="a" data-title="(A). Coffee" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="a" data-title="(A). Prickly pear" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-a-dark add-tooltip" data-theme="theme-dark" data-type="a" data-title="(A). Dark" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
						</div>
						<div class="demo-theme-btn">
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-light add-tooltip" data-theme="theme-light" data-type="b" data-title="(B). Light" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-navy add-tooltip" data-theme="theme-navy" data-type="b" data-title="(B). Navy Blue" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-ocean add-tooltip" data-theme="theme-ocean" data-type="b" data-title="(B). Ocean" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-lime add-tooltip" data-theme="theme-lime" data-type="b" data-title="(B). Lime" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-purple add-tooltip" data-theme="theme-purple" data-type="b" data-title="(B). Purple" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-dust add-tooltip" data-theme="theme-dust" data-type="b" data-title="(B). Dust" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-mint add-tooltip" data-theme="theme-mint" data-type="b" data-title="(B). Mint" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-yellow add-tooltip" data-theme="theme-yellow" data-type="b" data-title="(B). Yellow" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-well-red add-tooltip" data-theme="theme-well-red" data-type="b" data-title="(B). Well red" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-coffee add-tooltip" data-theme="theme-coffee" data-type="b" data-title="(B). Coofee" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="b" data-title="(B). Prickly pear" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-b-dark add-tooltip" data-theme="theme-dark" data-type="b" data-title="(B). Dark" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
						</div>
						<div class="demo-theme-btn">
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-light add-tooltip" data-theme="theme-light" data-type="c" data-title="(C). Light" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-navy add-tooltip" data-theme="theme-navy" data-type="c" data-title="(C). Navy Blue" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-ocean add-tooltip" data-theme="theme-ocean" data-type="c" data-title="(C). Ocean" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-lime add-tooltip" data-theme="theme-lime" data-type="c" data-title="(C). Lime" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-purple add-tooltip" data-theme="theme-purple" data-type="c" data-title="(C). Purple" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-dust add-tooltip" data-theme="theme-dust" data-type="c" data-title="(C). Dust" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-mint add-tooltip" data-theme="theme-mint" data-type="c" data-title="(C). Mint" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-yellow add-tooltip" data-theme="theme-yellow" data-type="c" data-title="(C). Yellow" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-well-red add-tooltip" data-theme="theme-well-red" data-type="c" data-title="(C). Well Red" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-coffee add-tooltip" data-theme="theme-coffee" data-type="c" data-title="(C). Coffee" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="c" data-title="(C). Prickly pear" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
							<a href="http://www.themeon.net/nifty/v2.2.3/index.html#" class="demo-theme demo-c-dark add-tooltip" data-theme="theme-dark" data-type="c" data-title="(C). Dark" data-original-title="" title="">
								<div class="demo-theme-brand"></div>
								<div class="demo-theme-head"></div>
								<div class="demo-theme-nav"></div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="pad-all text-left">
				<hr class="hr-sm">
				<p class="demo-set-save-text">* All settings will be saved automatically.</p>
				<button id="demo-reset-settings" class="btn btn-primary btn-labeled fa fa-refresh mar-btm">Restore Default Settings</button>
			</div>
		</div>
		<button id="demo-set-btn" class="btn btn-sm"><i class="fa fa-cog fa-2x"></i></button>
	</div>
	<!--===================================================-->
	<!-- END SETTINGS -->

	
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/jquery-2.1.1.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/bootstrap.min.js"></script>


    <!--Fast Click [ OPTIONAL ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/fastclick.min.js"></script>

    
    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/nifty.min.js"></script>


    <!--Morris.js [ OPTIONAL ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/morris.min.js"></script>
	<script src="/ui/admin/flat_009/layout-admin_files/raphael.min.js"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/jquery.sparkline.min.js"></script>


    <!--Skycons [ OPTIONAL ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/skycons.min.js"></script>


    <!--Switchery [ OPTIONAL ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/switchery.min.js"></script>


    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/bootstrap-select.min.js"></script>


    <!--Demo script [ DEMONSTRATION ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/nifty-demo.min.js"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="/ui/admin/flat_009/layout-admin_files/dashboard.js"></script>

    
	<!--

	REQUIRED
	You must include this in your project.

	RECOMMENDED
	This category must be included but you may modify which plugins or components which should be included in your project.

	OPTIONAL
	Optional plugins. You may choose whether to include it in your project or not.

	DEMONSTRATION
	This is to be removed, used for demonstration purposes only. This category must not be included in your project.

	SAMPLE
	Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


	Detailed information and more samples can be found in the document.

	-->
		



<i title="Raphaël Colour Picker" style="display: none; color: transparent;"></i></body></html>