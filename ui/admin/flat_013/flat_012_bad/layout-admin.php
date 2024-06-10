<!DOCTYPE html><?php include_once $_SERVER["DOCUMENT_ROOT"].'/configs.php'; ?>
<!-- saved from url=(0041)# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    
    <title><?php echo $web_title;?></title>
		<link href="<?php echo web_icon_url(); ?>" rel="icon">
		<?php include_once $_SERVER['DOCUMENT_ROOT']."/ui/common-head-layout-admin.php";?>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/font-awesome.css">
    <link rel="stylesheet" href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/metisMenu.css">
    <link rel="stylesheet" href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/animate.css">
    <link rel="stylesheet" href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/bootstrap.css">

    <!-- App styles -->
    <link rel="stylesheet" href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/helper.css">
    <link rel="stylesheet" href="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/style.css">

<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body>

<!-- Simple splash screen-->
<div class="splash" style="display: none;"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special AngularJS Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/loading-bars.svg" width="64" height="64"> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
    	<img width="32" src="<?php echo web_logo_url()?>" alt="<?php echo web_name() ;?>" title="<?php echo web_name() ;?>">
        <!--
        <span>
            Homer Theme
        </span>
        -->
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">WEB APP</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="##">
            <div class="form-group">
            	<!--
                <input type="text" placeholder="Search something special" class="form-control" name="search">
                -->
            </div>
        </form>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="#">Login</a>
                    </li>
                    <li>
                        <a class="" href="/admin-logout.php">Logout</a>
                    </li>
                    <li>
                        <a class="" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-speaker"></i>
                    </a>
                    <ul class="dropdown-menu hdropdown notification animated flipInX">
                        <li>
                            <a>
                                <span class="label label-success">NEW</span> It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-warning">WAR</span> There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-danger">ERR</span> Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See all notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">
                                        <i class="pe pe-7s-portfolio text-info"></i>
                                        <h5>Projects</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="#mailbox.html">
                                        <i class="pe pe-7s-mail text-warning"></i>
                                        <h5>Email</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="#contacts.html">
                                        <i class="pe pe-7s-users text-success"></i>
                                        <h5>Contacts</h5>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#forum.html">
                                        <i class="pe pe-7s-comment text-info"></i>
                                        <h5>Forum</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="#analytics.html">
                                        <i class="pe pe-7s-graph1 text-danger"></i>
                                        <h5>Analytics</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="#file_manager.html">
                                        <i class="pe pe-7s-box1 text-success"></i>
                                        <h5>Files</h5>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated flipInX">
                        <div class="title">
                            You have 4 new messages
                        </div>
                        <li>
                            <a>
                                It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                Lorem Ipsum is simply dummy.
                            </a>
                        </li>
                        <li>
                            <a>
                                Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/home.php" id="sidebar" class="right-sidebar-toggle" target="_blank" title="Tranh Chủ">
<!--                         <i class="pe-7s-upload pe-7s-news-paper"></i> -->
						<i class="fa fa-home"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="/admin-logout.php">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="#index.html">
                <img src="<?php echo user_image();?>" class="img-circle m-b" alt="<?php echo user_fullname()?>" title="<?php echo user_username()?>">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase"><?php echo user_username(); ?></span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="" data-toggle="dropdown">
                        <small class="text-muted"><?php echo user_fullname()?> <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#contacts.html">Contacts</a></li>
                        <li><a href="#profile.html">Profile</a></li>
                        <li><a href="#analytics.html">Analytics</a></li>
                        <li class="divider"></li>
                        <li><a href="#login.html">Logout</a></li>
                    </ul>
                </div>

				<!--
                <div id="sparkline1" class="small-chart m-t-sm"><canvas width="119" height="30" style="display: inline-block; width: 119px; height: 30px; vertical-align: top;"></canvas></div>
                
                <div>
                    <h4 class="font-extra-bold m-b-xs">
                        $260 104,200
                    </h4>
                    <small class="text-muted">Your income from the last year in sales product X.</small>
                </div>
                -->
            </div>
        </div>

        <ul class="nav" id="side-menu">
        	<!-- 
            <li class="active">
                <a href="/admin/dashboard.php"> <span class="nav-label"><i class="fa fa-dashboard fa-fw"></i>Dashboard</span></a>
            </li>
            -->
            <li>
                <a href="#"><span class="nav-label"><i class="fa fa-tags fa-fw"></i>Danh Mục</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="/admin/category.php">Loại sản phẩm</a></li>
      				<li><a href="/admin/product.php">Sản phẩm</a></li>
      				<li><a href="/admin/manufacturer.php">Nhà Sản Xuất</a></li>
                </ul>
            </li>
            <!-- 
            <li>
                <a href="/admin/module.php"> <span class="nav-label"><i class="fa fa-puzzle-piece fa-fw"></i>Modules</span></a>
            </li>
            -->
            <li>
                <a href="#"><span class="nav-label"><i class="fa fa-shopping-cart fa-fw"></i>Doanh Số</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="/admin/order.php">Đơn Hàng</a></li>
      				<li><a href="#">Khách hàng</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label"><i class="fa fa-cogs fa-fw"></i>Hệ Thống</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="/admin/setting-edit.php"><i class="fa fa-cog fa-fw"></i><span>Settings</span></a></li>
      
				      <li><a href="/admin/banner-image.php"><i class="fa fa-picture-o fa-fw"></i><span>Banners</span></a>
				      </li>
				      
				      <li><a href="/admin/user.php"><i class="fa fa-user fa-fw"></i><span>Quản Trị Viên</span></a>
				      </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">

	 
	<div class="content animate-panel">
		<?php include_once $web_content;?>
	</div>
	 
    

    <!-- Right sidebar -->
    <div id="right-sidebar" class="animated fadeInRight">

        <div class="p-m">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
            </button>
            <div>
                <span class="font-bold no-margins"> Analytics </span>
                <br>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            </div>
            <div class="row m-t-sm m-b-sm">
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
            </div>
            <div class="progress m-t-xs full progress-small">
                <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class=" progress-bar progress-bar-success">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
            </div>
        </div>
        <div class="p-m bg-light border-bottom border-top">
            <span class="font-bold no-margins"> Social talks </span>
            <br>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            <div class="m-t-md">
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/a1.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">John Novak</span>
                            <small class="text-muted">21.03.2015</small>
                            <div class="social-content small">
                                Injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/a3.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Mark Smith</span>
                            <small class="text-muted">14.04.2015</small>
                            <div class="social-content">
                                Many desktop publishing packages and web page editors.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/a4.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Marica Morgan</span>
                            <small class="text-muted">21.03.2015</small>

                            <div class="social-content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-m">
            <span class="font-bold no-margins"> Sales in last week </span>
            <div class="m-t-xs">
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
            </div>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                Many desktop publishing packages and web page editors.
            </small>
        </div>

    </div>

    <!-- Footer-->
    <footer class="footer" style="float: right;position: relative;">
        
			Copyright © <?php echo date('Y')?> <?php echo web_name() ;?>. All Rights Reserved.
		
    </footer>

</div>

<!-- Vendor scripts -->
<script async src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/analytics.js"></script><script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery.min.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery-ui.min.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery.slimscroll.min.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/bootstrap.min.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery.flot.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery.flot.resize.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery.flot.pie.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/curvedLines.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/index.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/metisMenu.min.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/icheck.min.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/jquery.peity.min.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/index(1).js"></script>

<!-- App scripts -->
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/homer.js"></script>
<script src="/ui/admin/<?php echo $admin_themes;?>/layout-admin_files/charts.js"></script>

<script>

    $(function () {

        /**
         * Flot charts data and options
         */
        var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
        var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: [ "#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);



    });

</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>


</body></html>