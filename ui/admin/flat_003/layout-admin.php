<!DOCTYPE html><?php '../../../configs.php'; ?>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <title><?php echo $web_title;?></title>
	<link href="<?php echo web_icon_url(); ?>" rel="icon">
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/ui/common-head-layout-admin.php";?>
     
    <!-- Bootstrap 3.3.4 -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/bootstrap.css" rel="stylesheet" type="text/css">    
    <!-- FontAwesome 4.3.0 -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Ionicons 2.0.0 -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/ionicons.css" rel="stylesheet" type="text/css">    
    <!-- Theme style -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/AdminLTE.css" rel="stylesheet" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/_all-skins.css" rel="stylesheet" type="text/css">
    <!-- iCheck -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/blue.css" rel="stylesheet" type="text/css">
    <!-- Morris chart -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/morris.css" rel="stylesheet" type="text/css">
    <!-- jvectormap -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery-jvectormap-1.css" rel="stylesheet" type="text/css">
    <!-- Date Picker -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/datepicker3.css" rel="stylesheet" type="text/css">
    <!-- Daterange picker -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/bootstrap3-wysihtml5.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
  <body class="skin-blue sidebar-mini wysihtml5-supported">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="https://almsaeedstudio.com/themes/AdminLTE/index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- 
          <span class="logo-mini"><b>A</b>LT</span>
          -->
          <span class="logo-mini"><img src="<?php echo web_logo_url(); ?>" height="32" width="32"/></span>
          <!-- logo for regular state and mobile devices -->
<!--           <span class="logo-lg"><b>Admin</b></span> -->
		  <span class="logo-lg"><img src="<?php echo web_logo_url(); ?>" height="32" width="32"/></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <div style="position: relative; overflow: hidden; width: auto; height: 200px;" class="slimScrollDiv"><ul style="overflow: hidden; width: 100%; height: 200px;" class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/user3-128x128.jpg" class="img-circle" alt="user image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/user4-128x128.jpg" class="img-circle" alt="user image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/user3-128x128.jpg" class="img-circle" alt="user image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/user4-128x128.jpg" class="img-circle" alt="user image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <div style="position: relative; overflow: hidden; width: auto; height: 200px;" class="slimScrollDiv"><ul style="overflow: hidden; width: 100%; height: 200px;" class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="/home.php" title="Trang Chủ" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-home"></i>
<!--                   <span class="label label-danger">9</span> -->
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <div style="position: relative; overflow: hidden; width: auto; height: 200px;" class="slimScrollDiv"><ul style="overflow: hidden; width: 100%; height: 200px;" class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
			  <!--
              <li class="dropdown user user-menu">
                <a href="/admin-logout.php" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-sign-out fa-lg"></i>
                  <span class="hidden-xs">Đăng Thoát</span>
                </a>
              </li>
			  -->
              <!-- Control Sidebar Toggle Button -->
			  <li>
                <a href="/admin-logout.php">
					<i class="fa fa-sign-out fa-lg"></i><span class="hidden-xs">Đăng Thoát</span>
				</a>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section style="height: auto;" class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo user_image(); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo user_fullname(); ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input name="q" class="form-control" placeholder="Search..." type="text">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!-- 
            <li class="active treeview">
              <a href="/admin/dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            -->
            
                    <li class="<?php if($active_page_admin == ACTIVE_PAGE_ADMIN_PRODUCT) echo "active";?>">
      					<a href="/admin/product.php">
      						<i class="fa fa-puzzle-piece fa-fw"></i><span>Sản phẩm</span>
      					</a>
      				</li>
      				<li class="<?php if($active_page_admin == ACTIVE_PAGE_ADMIN_MANUFACTURER) echo "active";?>">
      					<a href="/admin/manufacturer.php">
      						 <i class="fa fa-copyright fa-fw"></i><span>Nhà Sản Xuất</span>
      					</a>
      				</li>
      				<li class="<?php if($active_page_admin == ACTIVE_PAGE_ADMIN_CATEGORY) echo "active";?>">
						<a href="/admin/category.php">
						     <i class="fa fa-tags"></i><span>Loại sản phẩm</span>
						</a>
					</li>
					
					<li style="padding: 8 20"><hr></li><!-- dải phân cách -->
					
					<li class="<?php if($active_page_admin == ACTIVE_PAGE_ADMIN_ORDER) echo "active";?>">
						<a href="/admin/order.php" title="Đơn Hàng">
							<i class="fa fa-shopping-cart fa-fw"></i><span>Đơn Hàng</span>
					    </a>
					</li>
					
					<li class="<?php if($active_page_admin == ACTIVE_PAGE_ADMIN_CUSTOMER) echo "active";?>">
      				 <a href="/admin/customer.php" title="Khách Hàng">
      				  <i class="fa fa-users fa-fw"></i><span>Khách hàng</span>
      				 </a>
					</li>
					
					<li class="<?php if($active_page_admin == ACTIVE_PAGE_ADMIN_CONTACT) echo "active";?>">
      				 <a href="/admin/contact.php" title="Góp Ý, Phản Hồi, Khiếu Nại từ Khách Hàng">
      				  <i class="fa fa-envelope fa-fw"></i><span>Phản Hồi</span>
      				 </a>
					</li>	
					<li><hr></li> <!-- dải phân cách -->
					
					
					
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs fa-fw"></i>
                <span>Hệ Thống</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($active_page_admin == ACTIVE_PAGE_ADMIN_USER) echo "active";?>">
				     <a href="/admin/user.php" title="Nhân Viên">
				      <i class="fa fa-user fa-fw"></i><span>Nhân Viên</span>
				     </a>
					</li>
              	<li><a href="/admin/setting-edit.php"><i class="fa fa-cog fa-fw"></i><span>Settings</span></a></li>
      
			      <li><a href="/admin/banner-image.php"><i class="fa fa-picture-o fa-fw"></i><span>Ảnh Banners</span></a>
			      </li>
              </ul>
            </li>
            <!--
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div style="min-height: 916px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- 
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        -->

        <!-- Main content -->
        <?php include_once $web_content;?>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright © 2014-2015 <a href="http://almsaeedstudio.com/"><?php echo settings('config_name');?></a>.</strong> All rights reserved.
      </footer>
      
      <!-- Control Sidebar -->      
      <aside class="control-sidebar control-sidebar-dark">                
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-theme-demo-options-tab" data-toggle="tab"><i class="fa fa-wrench"></i></a></li><li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3> 
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">               
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>                                    
                </a>
              </li> 
              <li>
                <a href="javascript::;">               
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>                                    
                </a>
              </li> 
              <li>
                <a href="javascript::;">               
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>                                    
                </a>
              </li> 
              <li>
                <a href="javascript::;">               
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>                                    
                </a>
              </li>               
            </ul><!-- /.control-sidebar-menu -->         

          </div><div class="tab-pane active" id="control-sidebar-theme-demo-options-tab"><div><h4 class="control-sidebar-heading">Layout Options</h4><div class="form-group"><label class="control-sidebar-subheading"><input data-layout="fixed" class="pull-right" type="checkbox"> Fixed layout</label><p>Activate the fixed layout. You can't use fixed and boxed layouts together</p></div><div class="form-group"><label class="control-sidebar-subheading"><input data-layout="layout-boxed" class="pull-right" type="checkbox"> Boxed Layout</label><p>Activate the boxed layout</p></div><div class="form-group"><label class="control-sidebar-subheading"><input data-layout="sidebar-collapse" class="pull-right" type="checkbox"> Toggle Sidebar</label><p>Toggle the left sidebar's state (open or collapse)</p></div><div class="form-group"><label class="control-sidebar-subheading"><input data-enable="expandOnHover" class="pull-right" type="checkbox"> Sidebar Expand on Hover</label><p>Let the sidebar mini expand on hover</p></div><div class="form-group"><label class="control-sidebar-subheading"><input data-controlsidebar="control-sidebar-open" class="pull-right" type="checkbox"> Toggle Right Sidebar Slide</label><p>Toggle between slide over content and push content effects</p></div><div class="form-group"><label class="control-sidebar-subheading"><input data-sidebarskin="toggle" class="pull-right" type="checkbox"> Toggle Right Sidebar Skin</label><p>Toggle between dark and light skins for the right sidebar</p></div><h4 class="control-sidebar-heading">Skins</h4><ul class="list-unstyled clearfix"><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Blue</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Black</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Purple</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Green</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Red</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Yellow</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Blue Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Black Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Purple Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Green Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Red Light</p></li><li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px;">Yellow Light</p></li></ul></div></div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">            
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input class="pull-right" checked="checked" type="checkbox">
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input class="pull-right" checked="checked" type="checkbox">
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input class="pull-right" checked="checked" type="checkbox">
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input class="pull-right" checked="checked" type="checkbox">
                </label>                
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input class="pull-right" type="checkbox">
                </label>                
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>                
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div style="position: fixed; height: auto;" class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jQuery-2.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery-ui.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/bootstrap.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/raphael-min.js"></script>
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/morris.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery-jvectormap-1.js" type="text/javascript"></script>
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery_003.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/moment.js" type="text/javascript"></script>
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/bootstrap3-wysihtml5.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery_002.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/app.js" type="text/javascript"></script>    
    
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/dashboard.js" type="text/javascript"></script>    
    
    <!-- AdminLTE for demo purposes -->
    <script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/demo.js" type="text/javascript"></script>
  

<div class="daterangepicker dropdown-menu opensleft"><div class="calendar first left"><div class="calendar-date"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th><th colspan="5" class="month">May 2015</th><th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="available off" data-title="r0c0">26</td><td class="available off" data-title="r0c1">27</td><td class="available off" data-title="r0c2">28</td><td class="available off" data-title="r0c3">29</td><td class="available off" data-title="r0c4">30</td><td class="available" data-title="r0c5">1</td><td class="available" data-title="r0c6">2</td></tr><tr><td class="available" data-title="r1c0">3</td><td class="available" data-title="r1c1">4</td><td class="available" data-title="r1c2">5</td><td class="available" data-title="r1c3">6</td><td class="available" data-title="r1c4">7</td><td class="available" data-title="r1c5">8</td><td class="available" data-title="r1c6">9</td></tr><tr><td class="available" data-title="r2c0">10</td><td class="available" data-title="r2c1">11</td><td class="available" data-title="r2c2">12</td><td class="available" data-title="r2c3">13</td><td class="available" data-title="r2c4">14</td><td class="available" data-title="r2c5">15</td><td class="available" data-title="r2c6">16</td></tr><tr><td class="available" data-title="r3c0">17</td><td class="available" data-title="r3c1">18</td><td class="available" data-title="r3c2">19</td><td class="available active start-date" data-title="r3c3">20</td><td class="available in-range" data-title="r3c4">21</td><td class="available in-range" data-title="r3c5">22</td><td class="available in-range" data-title="r3c6">23</td></tr><tr><td class="available in-range" data-title="r4c0">24</td><td class="available in-range" data-title="r4c1">25</td><td class="available in-range" data-title="r4c2">26</td><td class="available in-range" data-title="r4c3">27</td><td class="available in-range" data-title="r4c4">28</td><td class="available in-range" data-title="r4c5">29</td><td class="available in-range" data-title="r4c6">30</td></tr><tr><td class="available in-range" data-title="r5c0">31</td><td class="available off in-range" data-title="r5c1">1</td><td class="available off in-range" data-title="r5c2">2</td><td class="available off in-range" data-title="r5c3">3</td><td class="available off in-range" data-title="r5c4">4</td><td class="available off in-range" data-title="r5c5">5</td><td class="available off in-range" data-title="r5c6">6</td></tr></tbody></table></div></div><div class="calendar second right"><div class="calendar-date"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th><th colspan="5" class="month">Jun 2015</th><th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="available off in-range" data-title="r0c0">31</td><td class="available in-range" data-title="r0c1">1</td><td class="available in-range" data-title="r0c2">2</td><td class="available in-range" data-title="r0c3">3</td><td class="available in-range" data-title="r0c4">4</td><td class="available in-range" data-title="r0c5">5</td><td class="available in-range" data-title="r0c6">6</td></tr><tr><td class="available in-range" data-title="r1c0">7</td><td class="available in-range" data-title="r1c1">8</td><td class="available in-range" data-title="r1c2">9</td><td class="available in-range" data-title="r1c3">10</td><td class="available in-range" data-title="r1c4">11</td><td class="available in-range" data-title="r1c5">12</td><td class="available in-range" data-title="r1c6">13</td></tr><tr><td class="available in-range" data-title="r2c0">14</td><td class="available in-range" data-title="r2c1">15</td><td class="available in-range" data-title="r2c2">16</td><td class="available in-range" data-title="r2c3">17</td><td class="available active end-date" data-title="r2c4">18</td><td class="available" data-title="r2c5">19</td><td class="available" data-title="r2c6">20</td></tr><tr><td class="available" data-title="r3c0">21</td><td class="available" data-title="r3c1">22</td><td class="available" data-title="r3c2">23</td><td class="available" data-title="r3c3">24</td><td class="available" data-title="r3c4">25</td><td class="available" data-title="r3c5">26</td><td class="available" data-title="r3c6">27</td></tr><tr><td class="available" data-title="r4c0">28</td><td class="available" data-title="r4c1">29</td><td class="available" data-title="r4c2">30</td><td class="available off" data-title="r4c3">1</td><td class="available off" data-title="r4c4">2</td><td class="available off" data-title="r4c5">3</td><td class="available off" data-title="r4c6">4</td></tr><tr><td class="available off" data-title="r5c0">5</td><td class="available off" data-title="r5c1">6</td><td class="available off" data-title="r5c2">7</td><td class="available off" data-title="r5c3">8</td><td class="available off" data-title="r5c4">9</td><td class="available off" data-title="r5c5">10</td><td class="available off" data-title="r5c6">11</td></tr></tbody></table></div></div><div class="ranges"><ul><li>Today</li><li>Yesterday</li><li>Last 7 Days</li><li class="active">Last 30 Days</li><li>This Month</li><li>Last Month</li><li>Custom Range</li></ul><div class="range_inputs"><div class="daterangepicker_start_input"><label for="daterangepicker_start">From</label><input class="input-mini" name="daterangepicker_start" value="05/20/2015" type="text"></div><div class="daterangepicker_end_input"><label for="daterangepicker_end">To</label><input class="input-mini" name="daterangepicker_end" value="06/18/2015" type="text"></div><button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;<button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button></div></div></div><div class="jvectormap-label"></div></body></html>