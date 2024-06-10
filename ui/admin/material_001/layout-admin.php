<!DOCTYPE html><?php include_once '../../..configs.php'; ?>
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<head><!-- original design:http://coderthemes.com/velonic/admin_2/profile.html -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
		
		<title><?php echo $web_title;?></title>
		<link href="<?php echo web_icon_url(); ?>" rel="icon">
		<?php include_once $_SERVER['DOCUMENT_ROOT']."/ui/common-head-layout-admin.php";?>
        <!-- Bootstrap core CSS -->
        <link href="/ui/admin/material_001/layout-admin_files/bootstrap.css" rel="stylesheet">
        <link href="/ui/admin/material_001/layout-admin_files/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="/ui/admin/material_001/layout-admin_files/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="/ui/admin/material_001/layout-admin_files/font-awesome.css" rel="stylesheet">
        <link href="/ui/admin/material_001/layout-admin_files/ionicons.css" rel="stylesheet">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="/ui/admin/material_001/layout-admin_files/morris.css">

        <!-- sweet alerts -->
        <link href="/ui/admin/material_001/layout-admin_files/sweet-alert.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/ui/admin/material_001/layout-admin_files/style.css" rel="stylesheet">
        <link href="/ui/admin/material_001/layout-admin_files/helper.css" rel="stylesheet">

<script src="/ui/admin/material_001/layout-admin_files/analytics.js" async=""></script><script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-62751496-1', 'auto');
          ga('send', 'pageview');

        </script>

        


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>


    <body class="  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

        <!-- Aside Start-->
        <aside tabindex="5001" style="overflow: hidden;" class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="/admin/product.php" class="logo-expanded">
<!--                     <i class="fa icon-social-buffer"></i> -->
				   <img src="<?php echo web_logo_url();?>" width="32"/>
                    <span class="nav-label">Admin Panel</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                	<!-- 
                    <li class="active">
                    	<a href="/admin/dashboard.php"><i class="fa fa-dashboard fa-fw"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    -->
                    <li class="has-submenu"><a href="#"><i class="fa fa-tags fa-fw"></i> <span class="nav-label">Danh Mục</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/category.php">Loại sản phẩm</a></li>
      						<li><a href="/admin/product.php">Sản phẩm</a></li>
      						<li><a href="/admin/manufacturer.php">Nhà Sản Xuất</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="fa fa-shopping-cart fa-fw"></i> <span class="nav-label">Doanh Số</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/order.php">Đơn Hàng</a></li>
      						<li><a href="#">Khách hàng</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="fa fa-cogs fa-fw"></i> <span class="nav-label">Hệ Thống</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/setting-edit.php"><i class="fa fa-cog fa-fw"></i><span>Settings</span></a></li>
      
						      <li><a href="/admin/banner-image.php"><i class="fa fa-picture-o fa-fw"></i><span>Banners</span></a>
						      </li>
						      
						      <li><a href="/admin/user.php"><i class="fa fa-user fa-fw"></i><span>Quản Trị Viên</span></a>
						      </li>
                        </ul>
                    </li>
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input placeholder="Search..." class="form-control" type="text">
                  <a href=""><i class="fa fa-search"></i></a>
                </form>
                
                <!-- Left navbar -->
                <!-- 
                <nav class=" navbar-default hidden-xs" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-globe"></i>&nbsp;English <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">German</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-file"></i>&nbsp;Files</a></li>
                    </ul>
                </nav>
                -->
                
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- mesages -->  
                    <!-- 
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o "></i>
                            <span class="badge badge-sm up bg-purple count">4</span>
                        </a>
                        <ul style="overflow: hidden;" class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                            <li>
                                <p>Messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="/ui/admin/material_001/layout-admin_files/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="/ui/admin/material_001/layout-admin_files/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="/ui/admin/material_001/layout-admin_files/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <p><a href="" class="text-right">See all Messages</a></p>
                            </li>
                        </ul>
                    </li>
                    -->
                    <!-- /messages -->
                    <!-- Notification -->
                    <li class="dropdown">
                    	<a href="/home.php" title="Trang Chủ">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                        </a>
                        <a href="/admin-logout.php" title="Đăng Xuất">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                        </a>
                        <ul style="overflow: hidden;" class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                            <li class="noti-header">
                                <p>Notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                    <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                    <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                    <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                </a>
                            </li>
                            
                            <li>
                                <p><a href="#" class="text-right">See all notifications</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /Notification -->

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?php echo user_image(); ?>" class="img-circle profile-img thumb-sm">
                            <span class="username"><?php echo user_fullname(); ?> </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="/admin/user-edit.php?user_id=<?php echo user_id();?>"><i class="fa fa-briefcase"></i>Profile</a></li>
                            <li><a href="/admin/setting-edit.php"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                            <li><a href="/admin-logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->
            <div class="wraper container-fluid">
            	<?php require $web_content; ?>
            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer>
                2015 © <?php echo settings('config_name'); ?>.
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->
        


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/ui/admin/material_001/layout-admin_files/jquery_002.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/bootstrap.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/modernizr.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/pace.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/wow.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/jquery_006.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/jquery_003.js" type="text/javascript"></script>
        <script src="/ui/admin/material_001/layout-admin_files/moment-2.js"></script>

        <!-- Counter-up -->
        <script src="/ui/admin/material_001/layout-admin_files/waypoints.js" type="text/javascript"></script>
        <script src="/ui/admin/material_001/layout-admin_files/jquery_004.js" type="text/javascript"></script>

        <!-- EASY PIE CHART JS -->
        <script src="/ui/admin/material_001/layout-admin_files/easypiechart.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/jquery_007.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/example.js"></script>


        <!--C3 Chart-->
        <script src="/ui/admin/material_001/layout-admin_files/d3.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/c3.js"></script>

        <!--Morris Chart-->
        <script src="/ui/admin/material_001/layout-admin_files/morris.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/raphael.js"></script>

        <!-- sparkline --> 
        <script src="/ui/admin/material_001/layout-admin_files/jquery.js" type="text/javascript"></script>
        <script src="/ui/admin/material_001/layout-admin_files/chart-sparkline.js" type="text/javascript"></script> 

        <!-- sweet alerts -->
        <script src="/ui/admin/material_001/layout-admin_files/sweet-alert.js"></script>
        <script src="/ui/admin/material_001/layout-admin_files/sweet-alert_002.js"></script>

        <script src="/ui/admin/material_001/layout-admin_files/jquery_008.js"></script><div style="width: 7px; z-index: 3; cursor: default; position: absolute; top: 0px; left: 273px; height: 327px; display: none;" class="nicescroll-rails" id="ascrail2000"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="height: 7px; z-index: 3; top: 320px; left: 0px; position: absolute; cursor: default; display: none;" class="nicescroll-rails" id="ascrail2000-hr"><div style="position: relative; top: 0px; height: 5px; width: 0px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="width: 7px; z-index: 3; cursor: default; position: absolute; top: 0px; left: 273px; height: 267px; display: none;" class="nicescroll-rails" id="ascrail2001"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="height: 7px; z-index: 3; top: 260px; left: 0px; position: absolute; cursor: default; display: none;" class="nicescroll-rails" id="ascrail2001-hr"><div style="position: relative; top: 0px; height: 5px; width: 0px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="width: 7px; z-index: auto; cursor: default; position: absolute; top: 928.183px; left: 596px; height: 275px; opacity: 0;" class="nicescroll-rails" id="ascrail2002"><div style="position: relative; top: 0px; float: right; width: 5px; height: 241px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="height: 7px; z-index: auto; top: 1196.18px; left: 301px; position: absolute; cursor: default; display: none; width: 295px; opacity: 0;" class="nicescroll-rails" id="ascrail2002-hr"><div style="position: relative; top: 0px; height: 5px; width: 302px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="width: 5px; z-index: auto; cursor: default; position: fixed; top: 0px; left: 245px; height: 789px; display: none; opacity: 0;" class="nicescroll-rails" id="ascrail2003"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(142, 144, 154); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="height: 5px; z-index: auto; top: 784px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0;" class="nicescroll-rails" id="ascrail2003-hr"><div style="position: relative; top: 0px; height: 5px; width: 0px; background-color: rgb(142, 144, 154); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div>
        <!-- Chat -->
        <script src="/ui/admin/material_001/layout-admin_files/jquery_005.js"></script>
        <!-- Dashboard -->
        <script src="/ui/admin/material_001/layout-admin_files/jquery_009.js"></script>

        <!-- Todo -->
        <script src="/ui/admin/material_001/layout-admin_files/jquery_010.js"></script>


        <script type="text/javascript">
        /* ==============================================
             Counter Up
             =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    

    

</body></html>