<!DOCTYPE HTML><?php include_once $_SERVER["DOCUMENT_ROOT"].'/configs.php'; ?>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<HTML lang="en" dir="ltr"><!-- HTML Design Template: http://livedemo00.template-help.com/opencart_53398/index.php -->
<!--<![endif]-->

<HEAD>
    <META content="IE=11.0000" http-equiv="X-UA-Compatible">

    <META charset="UTF-8">
    <META name="viewport" content="width=device-width, initial-scale=1">
	<TITLE><?php echo $web_title;?></TITLE>
	
    <META name="description" content="Mobile Store">
    <META http-equiv="X-UA-Compatible" content="IE=edge">
    <SCRIPT type="text/javascript">
        //<![CDATA[
        try {
            if (!window.CloudFlare) {
                var CloudFlare = [{
                    verbose: 0,
                    p: 0,
                    byc: 0,
                    owlid: "cf",
                    bag2: 1,
                    mirage2: 0,
                    oracle: 0,
                    paths: {
                        cloudflare: "/cdn-cgi/nexp/dok3v=1613a3a185/"
                    },
                    atok: "797e505a6c088297a219492b767c8791",
                    petok: "d1008965f830a08d21cc414aabfd91b9ebfa75e0-1487839400-1800",
                    zone: "template-help.com",
                    rocket: "0",
                    apps: {
                        "abetterbrowser": {
                            "ie": "7"
                        }
                    }
                }];
                ! function(a, b) {
                    a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=f2befc48d1/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                }()
            }
        } catch (e) {};
        //]]>
    </SCRIPT>
    <LINK href="http://livedemo00.template-help.com/opencart_53398/" rel="canonical">
    
	<LINK href="<?php echo web_icon_url();?>" rel="icon">
    
    <LINK href="/ui/home/opencart_53398/template_files/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <LINK href="/ui/home/opencart_53398/template_files/owl.transitions.css" rel="stylesheet" type="text/css" media="screen">
    <LINK href="/ui/home/opencart_53398/template_files/tmgooglemap.css" rel="stylesheet" type="text/css" media="screen">
    <LINK href="/ui/home/opencart_53398/template_files/bootstrap.min.css" rel="stylesheet" media="screen">
    <LINK href="/ui/home/opencart_53398/template_files/jquery.fancybox.css" rel="stylesheet" media="screen">
    <LINK href="/ui/home/opencart_53398/template_files/owl-carousel.css" rel="stylesheet">
    <LINK href="/ui/home/opencart_53398/template_files/photoswipe.css" rel="stylesheet">
    <LINK href="/ui/home/opencart_53398/template_files/jquery.bxslider.css" rel="stylesheet">
    <LINK href="/ui/home/opencart_53398/template_files/stylesheet.css" rel="stylesheet">
    <LINK href="/ui/home/opencart_53398/template_files/material-design.css" rel="stylesheet">
    <link href="/ui/src/css/common-home.css" rel="stylesheet" type="text/css" media="screen">
    
    <!-- Không hiểu sao khi IE sao chép mẫu thiết kế này thì nó lại đặt jQuery bên dưới common.js khiến cho 
    các chức năng liên quan đến common.js bị chết, ví dụ: tính năng tìm kiếm.
     -->
    <SCRIPT src="/ui/home/opencart_53398/template_files/jquery-2.1.1.min.js" type="text/javascript"></SCRIPT>
    <SCRIPT src="/ui/home/opencart_53398/template_files/common.js" type="text/javascript"></SCRIPT>
    <SCRIPT src="/ui/home/opencart_53398/view/cart.js" type="text/javascript"></SCRIPT><!-- viết đè chức năng giỏ hàng -->
    <!--[if lt IE 9]>
    <div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
                src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div><![endif]-->
    
    
	<SCRIPT src="/ui/home/opencart_53398/template_files/bootstrap.min.js" type="text/javascript"></SCRIPT>
	
    <SCRIPT src="/ui/home/opencart_53398/template_files/camera.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/ui/home/opencart_53398/template_files/owl.carousel.min.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/ui/home/opencart_53398/template_files/js.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/ui/home/opencart_53398/template_files/jquery.rd-google-map.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/ui/home/opencart_53398/template_files/superfish.min.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/ui/home/opencart_53398/template_files/jquery.rd-navbar.min.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/ui/home/opencart_53398/template_files/device.min.js" type="text/javascript"></SCRIPT>
    
    <!-- không hiểu sao vừa phải gọi các tệp này, lại vừa phải bổ sung thêm gl_path động -->
    <SCRIPT src="/ui/src/js/jquery/plugins/jquery.bxslider/jquery.bxslider.js"></SCRIPT>
    <SCRIPT src="/ui/src/js/jquery/plugins/elevatezoom/jquery.elevatezoom.js"></SCRIPT>
    <SCRIPT src="/ui/src/js/jquery/plugins/photo-swipe/code.photoswipe-3.0.5.min.js"></SCRIPT>
    <SCRIPT src="/ui/src/js/jquery/plugins/photo-swipe/code.photoswipe.jquery-3.0.5"></SCRIPT>

    <META name="GENERATOR" content="MSHTML 11.00.9600.16384">
</HEAD>

<BODY class="common-home">
<!--  Đường dẫn bị gọi bởi tệp template_files/script.js -->
    <P class="hidden" id="gl_path">/ui/home/opencart_53398/</P>
    <DIV class="swipe">
        <DIV class="swipe-menu">
            <UL>
                <LI>
                    <A title="My Account" href="#account/account"><I 
  class="fa fa-user"></I> <SPAN>My Account</SPAN></A>
                </LI>
                <LI>
                    <A href="#account/register"><I 
  class="fa fa-user"></I> Register</A>
                </LI>
                <LI>
                    <A href="#account/login"><I 
  class="fa fa-lock"></I>Login</A>
                </LI>
                <LI>
                    <A title="Wish List" id="wishlist-total2" href="#account/wishlist"><I 
  class="fa fa-heart"></I> <SPAN>Wish List(0)</SPAN> </A>
                </LI>
                <LI>
                    <A title="Shopping Cart" href="#checkout/cart"><I 
  class="fa fa-shopping-cart"></I> <SPAN>Shopping Cart</SPAN></A>
                </LI>
                <LI>
                    <A title="Checkout" href="#checkout/checkout"><I 
  class="fa fa-share"></I> <SPAN>Checkout</SPAN></A>
                </LI>
            </UL>
        </DIV>
    </DIV>
    <DIV id="page">
        <HEADER class="header">
            <DIV class="container">
                <DIV class="row">
                    <DIV class="col-sm-12">
                        <DIV class="logo" id="logo">
                            <A href="/">
                                <IMG title="<?php echo web_name(); ?>" class="img-responsive" alt="<?php echo web_name(); ?>" src="<?php echo web_logo_url(); ?>" width="64" height="64">
                            </A>
                        </DIV>
                        <DIV class="box-right">
                            <DIV class="box-right_inner">
                            
                            	<!-- 
                                <DIV class="box-currency">
                                    <FORM id="currency" action="#common/currency/currency" enctype="multipart/form-data" method="post">
                                        <DIV class="btn-group">
                                            <SPAN class="dropdown-toggle" data-toggle="dropdown">$ 
<SPAN class="hidden-xs hidden-sm hidden-md hidden">Currency</SPAN> </SPAN>
                                            <UL class="dropdown-menu  pull-right">
                                                <LI>
                                                    <BUTTON name="EUR" class="currency-select" type="button">€ 
  Euro</BUTTON>
                                                </LI>
                                                <LI>
                                                    <BUTTON name="GBP" class="currency-select" type="button">£ Pound 
  Sterling</BUTTON>
                                                </LI>
                                                <LI>
                                                    <BUTTON name="USD" class="currency-select" type="button">$ US 
  Dollar</BUTTON>
                                                </LI>
                                            </UL>
                                        </DIV>
                                        <INPUT name="code" type="hidden">
                                        <INPUT name="redirect" type="hidden" value="#common/home">
                                    </FORM>
                                </DIV>
                                
                                <DIV class="box-language">
                                    <FORM id="language" action="#common/language/language" enctype="multipart/form-data" method="post">
                                        <DIV class="btn-group pull-right">
                                            <SPAN class="dropdown-toggle" data-toggle="dropdown"><IMG 
title="English" class="hidden" alt="English" src="/ui/home/opencart_53398/template_files/gb.png"> en <SPAN 
class="hidden-xs hidden-sm hidden-md hidden">Language</SPAN></SPAN>
                                            <UL class="dropdown-menu pull-right">
                                                <LI>
                                                    <A href="http://livedemo00.template-help.com/opencart_53398/en">
                                                        <IMG title="English" class="hidden" alt="English" src="/ui/home/opencart_53398/template_files/gb.png"> English
                                                    </A>
                                                </LI>
                                                <LI>
                                                    <A href="http://livedemo00.template-help.com/opencart_53398/de">
                                                        <IMG title="Deutsch" class="hidden" alt="Deutsch" src="/ui/home/opencart_53398/template_files/de.png"> Deutsch
                                                    </A>
                                                </LI>
                                                <LI>
                                                    <A href="http://livedemo00.template-help.com/opencart_53398/ru">
                                                        <IMG title="Русский" class="hidden" alt="Русский" src="/ui/home/opencart_53398/template_files/ru.png"> Русский
                                                    </A>
                                                </LI>
                                            </UL>
                                        </DIV>
                                        <INPUT name="code" type="hidden">
                                        <INPUT name="redirect" type="hidden" value="#common/home">
                                    </FORM>
                                </DIV>
                                 -->
                                <DIV class="nav" id="top-links">
                                    <UL class="list-inline">
                                        <LI class="first">
                                            <A href="/"><I class="fa fa-home"></I> 
  <SPAN>Trang Chủ</SPAN> </A> </LI>
                                        <!-- 
                                        <LI>
                                            <A title="Wish List" id="wishlist-total" href="#account/wishlist"><I 
  class="fa fa-heart"></I> <SPAN>Wish List <SPAN class="count">0</SPAN> </SPAN> 
  </A> </LI>
                                         -->
                                        <LI class="dropdown">
                                        	<?php if (isset ($_SESSION['CUS_LOGGED'])) { ?>
					                        <A title="My Account" class="dropdown-toggle" href="/account.php" data-toggle="dropdown">
					                        	<I class="fa fa-user"></I> <SPAN class="hidden-xs hidden-sm hidden-md"><?php echo $_SESSION['CUS_FULLNAME'] ?></SPAN> <SPAN class="caret"></SPAN>
					                        </A>
					                        <UL class="dropdown-menu dropdown-menu-left">
					                            <li>
					                            	<a href="/order-history.php"><i class="fa fa-list"></i>&nbsp;Lịch Sử Đơn Hàng</a>
					                            </li>
					                            <li><a href="/logout.php"><i class="fa fa-sign-out"></i>&nbsp;Đăng Thoát</a></li>
					                        </UL>
					                        <?php } else {?>
					                        <A title="My Account" class="dropdown-toggle" href="/account.php" data-toggle="dropdown"><I class="fa fa-user"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Tài Khoản</SPAN> <SPAN class="caret"></SPAN></A>
					                        <UL class="dropdown-menu dropdown-menu-left">
					                            <LI>
					                                <A href="/register.php"><i class="fa fa-user"></i>&nbsp;Đăng Kí</A>
					                            </LI>
					                            <LI>
					                                <A href="/login.php"><i class="fa fa-lock"></i>&nbsp;Đăng Nhập</A>
					                            </LI>
					                        </UL>                        
					                        <?php } ?>
                                            
                                        </LI>
                                        
                                        <LI>
                                            <A title="Shopping Cart" href="/cart.php"><I class="fa fa-shopping-cart"></I> <SPAN>Giỏ Hàng</SPAN> </A>
                                        </LI>
                                        <LI>
                                            <A title="Shopping Cart" href="/product-compare.php"><I class="fa fa-shopping-cart"></I> <SPAN>So Sánh Sản Phẩm</SPAN> </A>
                                        </LI>
                                    </UL>
                                </DIV>
                            </DIV>
                            <DIV class="box-right_inner2">
                                <DIV class="box-cart">
                                <?php include_once("view/view-cart.php");?>
                                    <!-- 
                                    <DIV class="cart" id="cart">
                                        <BUTTON class="dropdown-toggle" type="button" data-toggle="dropdown" data-loading-text="Loading..."><I class="fa fa-shopping-cart"></I> 
<STRONG>Shopping Cart:</STRONG> <SPAN class="cart-total" id="cart-total">0 
item(s) - $0.00</SPAN> <SPAN class="cart-total2" id="cart-total2">0</SPAN> <SPAN 
class="cart-total3" id="cart-total3">0 items</SPAN> </BUTTON>
                                        <UL class="dropdown-menu pull-right">
                                            <LI>
                                                <P class="text-center">Your shopping cart is empty!</P>
                                            </LI>
                                        </UL>
                                    </DIV>
                                     -->
                                </DIV>
                                <A title="Checkout" class="btn btn-home hidden-xs" href="/checkout.php"><SPAN>Checkout</SPAN> 
</A> </DIV>
                        </DIV>
                        <DIV class="clear"></DIV>
                    </DIV>
                </DIV>
            </DIV>
            <DIV class="stuck-menu" id="stuck">
                <DIV class="menu-wrap">
                    <DIV class="container">
                        <DIV class="row">
                            <DIV class="col-sm-9">
                                <DIV class="navigation">
                                    <DIV class="megamenu">
                                        <UL class="sf-menu">
                                        <?php foreach (categoryGetAllForMenuHomePage(5) as $category) { ?>
									        <?php if ($category['children']) { ?>
									        <li class="sf-with-mega"><!-- superfish menu with mega information -->
									          <a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?></a>
									          <ul class="sf-mega">
									            <li class="sf-mega_row">
									              
									              <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
									              
									                <?php foreach ($children as $child) { ?>
									                <DIV class="sf-mega_section" style="width: 25%;">
									              		<A href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></A> 
									                </DIV>
									                <?php } ?>
									                
									                <DIV class="sf-mega_section" style="width: 25%;">
									              		<a href="<?php echo $category['href']; ?>" class="see-all">(xem tất <?php echo $category['name']; ?>)</a>
									              	</DIV>
									              <?php } ?>
									                   
									            </li>
									             
									           </ul>
									        </li>
									     <?php } else { ?>
									        <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
									        <?php } ?>
									     <?php } ?>
									     </UL>
                                        
                                    </DIV>
                                    <SCRIPT>
                                        ;
                                        (function($) {
                                            $(window).load(function() {
                                                var o = $('.sf-menu');
                                                o.superfish();
                                                o.find('li a').each(function() {
                                                    if ($(location).attr('href').indexOf($(this).attr('href')) >= 0) {
                                                        $(this).addClass('active');
                                                        return;
                                                    }
                                                })
                                                if (o.parents('aside').length) {
                                                    var width = $('.container').outerWidth() - $('aside').outerWidth();
                                                    o.find('.sf-mega').each(function() {
                                                        $(this).width(width);
                                                    })
                                                }
                                            });
                                        })(jQuery);
                                    </SCRIPT>
                                </DIV>
                            </DIV>
                            <DIV class="col-sm-3">
                                <DIV class="search" id="search">
                                    <INPUT name="search" type="text" placeholder="Search" value="">
                                    <BUTTON class="button-search" type="button"></BUTTON>
                                </DIV>
                            </DIV>
                        </DIV>
                    </DIV>
                </DIV>
            </DIV>
        </HEADER>
        <DIV class="header_modules"></DIV>
        
        <!-- web content; web_content -->
        <?php include_once($web_content); ?>
        
        <FOOTER>
            <DIV class="container">
                <DIV class="row">
                    <DIV class="col-lg-2 col-md-2 col-sm-2">
                        <DIV class="footer_box">
                            <H5 data-equal-group="2">Thông Tin</H5>
                            <UL class="list-unstyled">
                                <li><a href="#4">Giới Thiệu</a></li>
                                    <li><a href="#6">Thông Tin Giao Hàng</a></li>
                                    <!-- Delivery Information -->
                                    <li><a href="#3">Chính Sách Quyền Riêng Tư</a></li>
                                <li><a href="#5">Điều Khoản Sử Dụng</a></li>
                            </UL>
                        </DIV>
                    </DIV>
                    <DIV class="col-lg-2 col-md-2 col-sm-2">
                        <DIV class="footer_box">
                            <H5 data-equal-group="2">Dịch Vụ Khách Hàng</H5>
                            <UL class="list-unstyled">
                                <li><a href="#">Liên Hệ</a></li>
                                    <li><a href="#">Quy Định Đổi Trả Hàng</a></li>
                                    <!-- Return & Exchange Policy -->
                                    <li><a href="#">Bản Đồ Site</a></li>
                            </UL>
                        </DIV>
                    </DIV>
                    <DIV class="col-lg-2 col-md-2 col-sm-2">
                        <DIV class="footer_box">
                            <H5 data-equal-group="2">Thông Tin Thêm</H5>
                            <UL class="list-unstyled">
                               <li><a href="#">Thương Hiệu</a></li>
                                    <li><a href="#">Phiếu Quà Tặng</a></li>
                                    <!-- Gift Vouchers -->
                                    <li><a href="#">Tiếp Thị Liên Kết</a></li>
                                    <!-- Affiliates -->
                                    <li><a href="#">Sản Phẩm Đặc Biệt</a></li>
                            </UL>
                        </DIV>
                    </DIV>
                    <DIV class="col-lg-2 col-md-2 col-sm-2">
                        <DIV class="footer_box">
                            <H5 data-equal-group="2">Tài Khoản</H5>
                            <UL class="list-unstyled">
                                <li><a href="/account.php">Tài Khoản Của Tôi</a></li>
                                    <li><a href="/order-history.php">Lịch Sử Đơn Hàng</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Thư Thông Báo</a></li>
                                    <!-- Newsletter -->
                            </UL>
                        </DIV>
                    </DIV>
                    <DIV class="col-lg-4 col-md-4 col-sm-4">
                        <DIV class="footer_box">
                            <H5 data-equal-group="2">Theo Dõi</H5>
                            <UL class="social-list list-unstyled">
                                <LI>
                                    <A href="https://www.facebook.com"><I class="fa fa-facebook"></I> 
  </A> </LI>
                                <LI>
                                    <A href="https://twitter.com"><I class="fa fa-twitter"></I> 
  </A> </LI>
                            </UL>
                        </DIV>
                    </DIV>
                </DIV>
            </DIV>
            <DIV class="copyright">
                <!-- 
                <DIV class="container">Powered By
                    <A href="http://www.opencart.com/">OpenCart</A>
                    <BR> Mobile Store © 2017
                </DIV>
                 -->
                
                <DIV class="container">
                    <?php echo web_name(); ?> © <?php echo date('Y')?>
                </DIV>
            </DIV>
        </FOOTER>
    </DIV>
    <SCRIPT src="/ui/home/opencart_53398/template_files/livesearch.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/ui/home/opencart_53398/template_files/script.js" type="text/javascript"></SCRIPT>

    <SCRIPT type="text/javascript" data-cfasync="false">
        /*<![CDATA[*/
        window.olark || (function(c) {
            var f = window,
                d = document,
                l = f.location.protocol == "https:" ? "https:" : "http:",
                z = c.name,
                r = "load";
            var nt = function() {
                f[z] = function() {
                    (a.s = a.s || []).push(arguments)
                };
                var a = f[z]._ = {},
                    q = c.methods.length;
                while (q--) {
                    (function(n) {
                        f[z][n] = function() {
                            f[z]("call", n, arguments)
                        }
                    })(c.methods[q])
                }
                a.l = c.loader;
                a.i = nt;
                a.p = {
                    0: +new Date
                };
                a.P = function(u) {
                    a.p[u] = new Date - a.p[0]
                };

                function s() {
                    a.P(r);
                    f[z](r)
                }
                f.addEventListener ? f.addEventListener(r, s, false) : f.attachEvent("on" + r, s);
                var ld = function() {
                    function p(hd) {
                        hd = "head";
                        return ["<", hd, "></", hd, "><", i, ' onl' + 'oad="var d=', g, ";d.getElementsByTagName('head')[0].", j, "(d.", h, "('script')).", k, "='", l, "//", a.l, "'", '"', "></", i, ">"].join("")
                    }
                    var i = "body",
                        m = d[i];
                    if (!m) {
                        return setTimeout(ld, 100)
                    }
                    a.P(1);
                    var j = "appendChild",
                        h = "createElement",
                        k = "src",
                        n = d[h]("div"),
                        v = n[j](d[h](z)),
                        b = d[h]("iframe"),
                        g = "document",
                        e = "domain",
                        o;
                    n.style.display = "none";
                    m.insertBefore(n, m.firstChild).id = z;
                    b.frameBorder = "0";
                    b.id = z + "-loader";
                    if (/MSIE[ ]+6/.test(navigator.userAgent)) {
                        b.src = "javascript:false"
                    }
                    b.allowTransparency = "true";
                    v[j](b);
                    try {
                        b.contentWindow[g].open()
                    } catch (w) {
                        c[e] = d[e];
                        o = "javascript:var d=" + g + ".open();d.domain='" + d.domain + "';";
                        b[k] = o + "void(0);"
                    }
                    try {
                        var t = b.contentWindow[g];
                        t.write(p());
                        t.close()
                    } catch (x) {
                        b[k] = o + 'd.write("' + p().replace(/"/g, String.fromCharCode(92) + '"') + '");d.close();'
                    }
                    a.P(2)
                };
                ld()
            };
            nt()
        })({
            loader: "static.olark.com/jsclient/loader0.js",
            name: "olark",
            methods: ["configure", "extend", "declare", "identify"]
        });
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('4417-797-10-1102'); /*]]>*/
    </SCRIPT>
    <NOSCRIPT>&lt;a href="https://www.olark.com/site/4417-797-10-1102/contact" 
title="Contact us" target="_blank"&gt;Questions? Feedback?&lt;/a&gt; powered by 
&lt;a href="http://www.olark.com?welcome" title="Olark live chat 
software"&gt;Olark live chat software&lt;/a&gt;</NOSCRIPT>
    <NOSCRIPT>&lt;iframe 
src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" 
style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</NOSCRIPT>
    <SCRIPT>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </SCRIPT>
    <!-- End Google Tag Manager -->
</BODY>

</HTML>