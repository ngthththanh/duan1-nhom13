<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Techmarket HTML</title>
    <link rel="stylesheet" type="text/css" href="../view/assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/bootstrap-grid.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/bootstrap-reboot.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/font-techmarket.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/slick.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/techmarket-font-awesome.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/slick-style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/animate.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/css.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../view/assets/css/colors/blue.css" media="all" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
</head>

<body class="woocommerce-active page-template-template-homepage-v10  single-product full-width extended">
    <div id="page" class="hfeed site">
        <div class="top-bar top-bar-v2">
            <div class="col-full">
                <?php
                if (isset($_SESSION['username'])) {
                    extract($_SESSION['username']);?>
                <ul id="menu-top-bar-left" class="nav menu-top-bar-left">
                    <li class="menu-item animate-dropdown">
                        <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">TechMarket eCommerce &#8211; Always free delivery</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Quality Guarantee of products" href="shop.html">Quality Guarantee of products</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Fast returnings program" href="track-your-order.html">Fast returnings program</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="No additional fees" href="contact-v2.html">No additional fees</a>
                    </li>
                </ul>
                    <!-- .nav -->
                    <ul id="menu-top-bar-right" class="nav menu-top-bar-right">
                        <li class="hidden-sm-down menu-item animate-dropdown">
                            <a title="Track Your Order" href="track-your-order.html">
                                <i class="tm tm-order-tracking"></i>Track Your Order</a>
                        </li>
                        <?php if (isset($_SESSION['username'])) {?>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-487 animate-dropdown dropdown">
                            <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                                <i class="tm tm-login-register"></i>Xin chào <?php echo $_SESSION['username']['hoten'] ?>
                                <span class="caret"></span>
                            </a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-491 animate-dropdown">
                                    <a href="?act=updatetk">Thông tin cá nhân</a>
                                </li>
                                <?php if( $phanquyen==1){
                                    echo '<li class="hidden-sm-down menu-item animate-dropdown">
                                    <a  href="../admin/index.php">Đăng Nhập Admin</a></li>';
                                }?>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-490 animate-dropdown">
                                    <a title="" href="javascript:void(0);" onclick="logout()">Đăng Xuất</a>
                                    <script>
                                    function logout() {
                                        if (confirm('Bạn có chắc muốn đăng xuất?')) {
                                            var xhr = new XMLHttpRequest();
                                            xhr.open('GET', 'index.php?act=thoat', true);
                                            xhr.onreadystatechange = function() {
                                                if (xhr.readyState == 4 && xhr.status == 200) {
                                                    window.location.href = 'index.php';
                                                }
                                            };
                                            xhr.send();
                                        }
                                    }
                                    </script>
                                </li>
                            </ul>
                        </li>
                        <!-- .dropdown-menu -->
                        <?php } ?>
                            <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                            <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
                    </ul>
                    <?php } else { ?>
                    <ul id="menu-top-bar-left" class="nav menu-top-bar-left">
                        <li class="menu-item animate-dropdown">
                            <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">TechMarket eCommerce &#8211; Always free delivery</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Quality Guarantee of products" href="shop.html">Quality Guarantee of products</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Fast returnings program" href="track-your-order.html">Fast returnings program</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="No additional fees" href="contact-v2.html">No additional fees</a>
                        </li>
                    </ul>
                    <!-- .nav -->
                    <ul id="menu-top-bar-right" class="nav menu-top-bar-right">
                        <li class="hidden-sm-down menu-item animate-dropdown">
                            <a title="Track Your Order" href="track-your-order.html">
                                <i class="tm tm-order-tracking"></i>Kiểm tra đơn hàng</a>
                        </li>
                        <!-- <li class="menu-item">
                            <a title="My Account" href="index.php?act=">
                                <i class="tm tm-login-registe"></i>Đăng ký
                            </a>
                        </li> -->
                        <li class="menu-item">
                            <a title="My Account" href="index.php?act=login">
                                <i class="tm tm-login-registe"></i>Đăng nhập</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
            <!-- .col-full -->
        </div>
        <header id="masthead" class="site-header header-v8" style="background-image: none; ">
            <div class="col-full desktop-only">
                <div class="techmarket-sticky-wrap">
                    <div class="row">
                        <div class="site-branding">
                            <a href="index.php" class="custom-logo-link" rel="home">
                                <svg data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.34 26.64">
                                    <defs>
                                        <style>
                                            .cls-h1 {
                                                fill: #ffffff
                                            }

                                            .cls-h2 {
                                                fill: #6dc4b4
                                            }
                                        </style>
                                    </defs>
                                    <title>Shoe-logo</title>
                                    <polygon class="cls-h1" points="158.76 2.79 158.76 11.05 157.94 11.05 157.94 2.79 157.94 2.74 157.94 2.1 162.34 2.1 162.34 2.79 158.76 2.79"></polygon>
                                    <rect class="cls-h1" x="154.31" y="2.1" width="2.84" height="0.69"></rect>
                                    <rect class="cls-h1" x="148.96" y="5.99" width="2.87" height="0.69"></rect>
                                    <polygon class="cls-h1" points="147.85 11.05 147.12 11.05 147.12 2.1 147.82 2.1 147.91 2.1 153.25 2.1 153.25 2.76 147.91 2.76 147.91 10.39 153.33 10.39 153.33 11.05 147.91 11.05 147.85 11.05"></polygon>
                                    <polygon class="cls-h1" points="140.69 7.46 141.27 6.92 145.75 11.03 144.62 11.03 140.69 7.46"></polygon>
                                    <polygon class="cls-h1" points="139.12 11.03 138.32 11.03 138.32 2.09 139.12 2.09 139.12 6.77 144.01 2.32 145.08 2.32 139.12 7.82 139.12 11.03"></polygon>
                                    <path class="cls-h1" d="M136.81,11.56h-1s-0.4-.32-0.58-0.48l-1.1-1c-0.2-.19-0.56-0.54-0.56-0.54V8.92a2.91,2.91,0,0,0,2.9-2.35A2.75,2.75,0,0,0,133.8,3.3H130.6v8.26h-0.82v-9h4.09a3.45,3.45,0,0,1,.61,6.82C135.24,10.12,136.81,11.56,136.81,11.56Z" transform="translate(-0.33 -0.51)"></path>
                                    <polygon class="cls-h1" points="126.37 3.76 122.32 8.5 125.34 8.5 125.34 9.16 121.76 9.16 120.14 11.05 119.21 11.05 126.87 2.05 127.19 2.05 127.19 11.05 126.37 11.05 126.37 3.76"></polygon>
                                    <polygon class="cls-h1" points="117.31 3.72 114.05 7.08 114.05 7.11 114.04 7.1 114.03 7.11 114.03 7.08 110.77 3.72 110.77 11.05 109.97 11.05 109.97 2.05 110.24 2.05 114.04 5.98 117.85 2.05 118.11 2.05 118.11 11.05 117.31 11.05 117.31 3.72"></polygon>
                                    <ellipse class="cls-h2" cx="115.12" cy="19.94" rx="5.15" ry="5.18"></ellipse>
                                    <path class="cls-h1" d="M5.22,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,.33,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24H4.48a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,7.31,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2A15.74,15.74,0,0,1,3,12.83,6,6,0,0,1,1,7.94,6.49,6.49,0,0,1,2.18,4.12,7.86,7.86,0,0,1,5.57,1.47a12.71,12.71,0,0,1,5.12-1A12.18,12.18,0,0,1,16,1.58a8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24H16.35a1.1,1.1,0,0,1-1.11-.67,2.87,2.87,0,0,0-1.44-2,5.71,5.71,0,0,0-3.11-.8,5.71,5.71,0,0,0-3.2.78A2.54,2.54,0,0,0,6.33,7.83,2.41,2.41,0,0,0,6.92,9.5a4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,5.22,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M22.24,26.52A0.86,0.86,0,0,1,22,25.89V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,22.86.88h3.4a0.89,0.89,0,0,1,.92.92v9.51H38V1.8a0.9,0.9,0,0,1,.26-0.67A0.86,0.86,0,0,1,38.89.88h3.44a0.84,0.84,0,0,1,.65.26,0.94,0.94,0,0,1,.24.67V25.89a0.89,0.89,0,0,1-.24.63,0.84,0.84,0,0,1-.65.26H38.89A0.88,0.88,0,0,1,38,25.89V16H27.19v9.88a0.86,0.86,0,0,1-.26.63,0.9,0.9,0,0,1-.67.26h-3.4A0.85,0.85,0,0,1,22.24,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M47.4,24.59Q44.58,22,44.44,17q0-1.07,0-3.15t0-3.18q0.15-4.92,3-7.55A11.16,11.16,0,0,1,55.28.51a11.17,11.17,0,0,1,7.79,2.63q2.9,2.63,3.05,7.55,0.07,2.15.07,3.18T66.12,17q-0.15,5-3,7.58t-7.86,2.55Q50.21,27.15,47.4,24.59Zm11.8-3.22a6.66,6.66,0,0,0,1.55-4.55q0.07-2.22.07-3t-0.07-3A6.58,6.58,0,0,0,59.16,6.3a5.83,5.83,0,0,0-7.81,0,6.45,6.45,0,0,0-1.55,4.53q0,1.07,0,3t0,3a6.5,6.5,0,0,0,1.54,4.53A5.93,5.93,0,0,0,59.2,21.38Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M67.56,26.52a0.86,0.86,0,0,1-.26-0.63V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,68.19.88H84.51a0.89,0.89,0,0,1,.93.92V4.28a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.48H83.69a0.89,0.89,0,0,1,.93.92V14.9a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.7H84.8a0.94,0.94,0,0,1,.67.24,0.84,0.84,0,0,1,.26.65v2.52a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H68.19A0.85,0.85,0,0,1,67.56,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M90,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,85.1,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24h3.37a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,92.07,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2a15.74,15.74,0,0,1-6.4-2.74,6,6,0,0,1-2-4.88,6.49,6.49,0,0,1,1.18-3.83,7.86,7.86,0,0,1,3.39-2.65,12.71,12.71,0,0,1,5.12-1,12.18,12.18,0,0,1,5.31,1.07,8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24h-3.52A1.1,1.1,0,0,1,100,7.57a2.87,2.87,0,0,0-1.44-2,6.72,6.72,0,0,0-6.31,0,2.54,2.54,0,0,0-1.17,2.26,2.41,2.41,0,0,0,.59,1.67,4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,90,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                </svg>
                            </a>
                            <!-- /.custom-logo-link -->
                        </div>
                        <!-- /.site-branding -->
                        <!-- ============================================================= End Header Logo ============================================================= -->
                        <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
                            <ul id="menu-primary-menu" class="nav yamm">
                                <li class="sale-clr yamm-fw menu-item animate-dropdown">
                                    <a title="Super deals" href="index.php?act=gioithieu">Giới Thiệu</a>
                                </li>
                                <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                    <a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Danh Mục<span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown">
                                            <a title="Wishlist" href="">Danh Mục</a>
                                        </li>
                                    <?php
                                        foreach($dsdm as $dm){
                                        extract($dm);
                                        $linkdm="index.php?act=sanpham&iddm=".$id_dm;
                                        echo '<li  class="menu-item animate-dropdown"><a href="'.$linkdm.'">'.$ten_dm.'</a></li>';
    
                                    }?>
                                    </ul>
                                    <!-- .dropdown-menu -->
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="Logitech Sale" href="?act=shop">Sản Phẩm</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="Logitech Sale" href="?act=lienhe">Liên Hệ</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="Headphones Sale" href="product-category.html">Khác</a>
                                </li>
                                <li class="techmarket-flex-more-menu-item dropdown">
                                    <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                    <ul class="overflow-items dropdown-menu"></ul>
                                </li>
                            </ul>
                            <!-- .nav -->
                        </nav>
                    </div>
                    <!-- /.row -->
                </div>
                <p></p>
                <!-- .techmarket-sticky-wrap -->
                <div class="row align-items-center">
                    <div id="departments-menu" class="dropdown departments-menu">
                        <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="tm tm-departments-thin"></i>
                            <span>Danh Mục</span>
                        </button>
                        <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                            <?php
                                foreach($dsdm as $dm){
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id_dm;
                                    echo '<li><a href="'.$linkdm.'">'.$ten_dm.'('.$soLuongSanPham.')</a></li>';

                                }
                            ?>
                        </ul>      
                    </div>
                    <!-- .departments-menu -->
                    <form class="navbar-search" method="post" action="index.php?act=sanpham">
                        <label class="sr-only screen-reader-text" for="search" name="kyw">Tìm kiếm:</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="kyw" placeholder="Tìm kiếm: " />
                          
                            <!-- .input-group-addon -->
                            <div class="input-group-btn input-group-append">
                                <input type="hidden" id="search-param" value="product" />
                                <button type="submit" class="btn btn-primary" name="timkiem">
                                    <i class="fa fa-search"></i>
                                    <span class="search-btn">Tìm kiếm</span>
                                </button>
                            </div>
                            <!-- .input-group-btn -->
                        </div>
                        <!-- .input-group -->
                    </form>
                    <!-- .navbar-search -->
                    <ul class="header-compare nav navbar-nav">
                        <li class="nav-item">
                            <a href="compare.html" class="nav-link">
                                <i class="tm tm-compare"></i>
                                <span id="top-cart-compare-count" class="value">3</span>
                            </a>
                        </li>
                    </ul>
                    <!-- .header-compare -->
                    <ul class="header-wishlist nav navbar-nav">
                        <li class="nav-item">
                            <a href="index.php?act=yeuthich" class="nav-link">
                                <i class="tm tm-favorites"></i>
                                <span id="top-cart-wishlist-count" class="value">3</span>
                            </a>
                        </li>
                    </ul>
                    <!-- .header-wishlist -->
                    <ul id="site-header-cart" class="site-header-cart menu">
                        <li class="animate-dropdown dropdown ">
                            <a class="cart-contents" href="index.php?act=addcart" data-toggle="dropdown" title="View your shopping cart">
                                <i class="tm tm-shopping-bag"></i>
                                <span class="count">2</span>
                                <span class="amount">
                                    <span class="price-label">
                                    <?php
                                        if (isset($_SESSION['username'])) {
                                            echo $user;
                                        } else {
                                            echo '<a href="index.php?act=login">Login</a> <br>';
                                        }
                                    ?>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li>
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>
                                                    <a href="single-product-sidebar.html">
                                                        <img src="assets/images/products/mini-cart1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">XONE Wireless Controller&nbsp;
                                                    </a>
                                                    <span class="quantity">1 ×
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>64.99</span>
                                                    </span>
                                                </li>
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="">×</a>
                                                    <a href="single-product-sidebar.html">
                                                        <img src="assets/images/products/mini-cart2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">Gear Virtual Reality 3D with Bluetooth Glasses&nbsp;
                                                    </a>
                                                    <span class="quantity">1 ×
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>72.00</span>
                                                    </span>
                                                </li>
                                            </ul>
                                            <!-- .cart_list -->
                                            <p class="woocommerce-mini-cart__total total">
                                                <strong>Subtotal:</strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>136.99</span>
                                            </p>
                                            <p class="woocommerce-mini-cart__buttons buttons">
                                                <a href="index.php?act=giohang" class="button wc-forward">View cart</a>
                                                <a href="index.php?act=theodoi" class="button checkout wc-forward">Checkout</a>
                                            </p>
                                        </div>
                                        <!-- .widget_shopping_cart_content -->
                                    </div>
                                    <!-- .widget_shopping_cart -->
                                </li>
                            </ul>
                            <!-- .dropdown-menu-mini-cart -->
                        </li>
                    </ul>
                    <!-- .site-header-cart -->
                </div>
                <!-- /.row -->
            </div>
            <!-- .col-full -->
            <div class="col-full handheld-only">
                <div class="handheld-header">
                    <div class="row">
                        <div class="site-branding">
                            <a href="index.php" class="custom-logo-link" rel="home">
                                <svg data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.34 26.64">
                                    <defs>
                                        <style>
                                            .cls-h1 {
                                                fill: #ffffff
                                            }

                                            .cls-h2 {
                                                fill: #6dc4b4
                                            }
                                        </style>
                                    </defs>
                                    <title>Shoe-logo</title>
                                    <polygon class="cls-h1" points="158.76 2.79 158.76 11.05 157.94 11.05 157.94 2.79 157.94 2.74 157.94 2.1 162.34 2.1 162.34 2.79 158.76 2.79"></polygon>
                                    <rect class="cls-h1" x="154.31" y="2.1" width="2.84" height="0.69"></rect>
                                    <rect class="cls-h1" x="148.96" y="5.99" width="2.87" height="0.69"></rect>
                                    <polygon class="cls-h1" points="147.85 11.05 147.12 11.05 147.12 2.1 147.82 2.1 147.91 2.1 153.25 2.1 153.25 2.76 147.91 2.76 147.91 10.39 153.33 10.39 153.33 11.05 147.91 11.05 147.85 11.05"></polygon>
                                    <polygon class="cls-h1" points="140.69 7.46 141.27 6.92 145.75 11.03 144.62 11.03 140.69 7.46"></polygon>
                                    <polygon class="cls-h1" points="139.12 11.03 138.32 11.03 138.32 2.09 139.12 2.09 139.12 6.77 144.01 2.32 145.08 2.32 139.12 7.82 139.12 11.03"></polygon>
                                    <path class="cls-h1" d="M136.81,11.56h-1s-0.4-.32-0.58-0.48l-1.1-1c-0.2-.19-0.56-0.54-0.56-0.54V8.92a2.91,2.91,0,0,0,2.9-2.35A2.75,2.75,0,0,0,133.8,3.3H130.6v8.26h-0.82v-9h4.09a3.45,3.45,0,0,1,.61,6.82C135.24,10.12,136.81,11.56,136.81,11.56Z" transform="translate(-0.33 -0.51)"></path>
                                    <polygon class="cls-h1" points="126.37 3.76 122.32 8.5 125.34 8.5 125.34 9.16 121.76 9.16 120.14 11.05 119.21 11.05 126.87 2.05 127.19 2.05 127.19 11.05 126.37 11.05 126.37 3.76"></polygon>
                                    <polygon class="cls-h1" points="117.31 3.72 114.05 7.08 114.05 7.11 114.04 7.1 114.03 7.11 114.03 7.08 110.77 3.72 110.77 11.05 109.97 11.05 109.97 2.05 110.24 2.05 114.04 5.98 117.85 2.05 118.11 2.05 118.11 11.05 117.31 11.05 117.31 3.72"></polygon>
                                    <ellipse class="cls-h2" cx="115.12" cy="19.94" rx="5.15" ry="5.18"></ellipse>
                                    <path class="cls-h1" d="M5.22,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,.33,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24H4.48a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,7.31,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2A15.74,15.74,0,0,1,3,12.83,6,6,0,0,1,1,7.94,6.49,6.49,0,0,1,2.18,4.12,7.86,7.86,0,0,1,5.57,1.47a12.71,12.71,0,0,1,5.12-1A12.18,12.18,0,0,1,16,1.58a8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24H16.35a1.1,1.1,0,0,1-1.11-.67,2.87,2.87,0,0,0-1.44-2,5.71,5.71,0,0,0-3.11-.8,5.71,5.71,0,0,0-3.2.78A2.54,2.54,0,0,0,6.33,7.83,2.41,2.41,0,0,0,6.92,9.5a4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,5.22,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M22.24,26.52A0.86,0.86,0,0,1,22,25.89V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,22.86.88h3.4a0.89,0.89,0,0,1,.92.92v9.51H38V1.8a0.9,0.9,0,0,1,.26-0.67A0.86,0.86,0,0,1,38.89.88h3.44a0.84,0.84,0,0,1,.65.26,0.94,0.94,0,0,1,.24.67V25.89a0.89,0.89,0,0,1-.24.63,0.84,0.84,0,0,1-.65.26H38.89A0.88,0.88,0,0,1,38,25.89V16H27.19v9.88a0.86,0.86,0,0,1-.26.63,0.9,0.9,0,0,1-.67.26h-3.4A0.85,0.85,0,0,1,22.24,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M47.4,24.59Q44.58,22,44.44,17q0-1.07,0-3.15t0-3.18q0.15-4.92,3-7.55A11.16,11.16,0,0,1,55.28.51a11.17,11.17,0,0,1,7.79,2.63q2.9,2.63,3.05,7.55,0.07,2.15.07,3.18T66.12,17q-0.15,5-3,7.58t-7.86,2.55Q50.21,27.15,47.4,24.59Zm11.8-3.22a6.66,6.66,0,0,0,1.55-4.55q0.07-2.22.07-3t-0.07-3A6.58,6.58,0,0,0,59.16,6.3a5.83,5.83,0,0,0-7.81,0,6.45,6.45,0,0,0-1.55,4.53q0,1.07,0,3t0,3a6.5,6.5,0,0,0,1.54,4.53A5.93,5.93,0,0,0,59.2,21.38Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M67.56,26.52a0.86,0.86,0,0,1-.26-0.63V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,68.19.88H84.51a0.89,0.89,0,0,1,.93.92V4.28a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.48H83.69a0.89,0.89,0,0,1,.93.92V14.9a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.7H84.8a0.94,0.94,0,0,1,.67.24,0.84,0.84,0,0,1,.26.65v2.52a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H68.19A0.85,0.85,0,0,1,67.56,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M90,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,85.1,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24h3.37a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,92.07,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2a15.74,15.74,0,0,1-6.4-2.74,6,6,0,0,1-2-4.88,6.49,6.49,0,0,1,1.18-3.83,7.86,7.86,0,0,1,3.39-2.65,12.71,12.71,0,0,1,5.12-1,12.18,12.18,0,0,1,5.31,1.07,8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24h-3.52A1.1,1.1,0,0,1,100,7.57a2.87,2.87,0,0,0-1.44-2,6.72,6.72,0,0,0-6.31,0,2.54,2.54,0,0,0-1.17,2.26,2.41,2.41,0,0,0,.59,1.67,4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,90,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                </svg>
                            </a>
                            <!-- /.custom-logo-link -->
                        </div>
                        <!-- /.site-branding -->
                        <!-- ============================================================= End Header Logo ============================================================= -->
                        <div class="handheld-header-links">
                            <ul class="columns-3">
                                <li class="my-account">
                                    <a href="login-and-register.html" class="has-icon">
                                        <i class="tm tm-login-register"></i>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="wishlist.html" class="has-icon">
                                        <i class="tm tm-favorites"></i>
                                        <span class="count">3</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="compare.html" class="has-icon">
                                        <i class="tm tm-compare"></i>
                                        <span class="count">3</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .columns-3 -->
                        </div>
                        <!-- .handheld-header-links -->
                    </div>
                    <!-- /.row -->
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                                <button class="btn navbar-toggler" type="button">
                                    <i class="tm tm-departments-thin"></i>
                                    <span>Menu</span>
                                </button>

                                <!-- .handheld-navigation -->
                                <div class="site-search">
                                    <div class="widget woocommerce widget_product_search">
                                        <form role="search" method="get" class="woocommerce-product-search" action="home-v1.html">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                                            <input type="submit" value="Search" />
                                            <input type="hidden" name="post_type" value="product" />
                                        </form>
                                    </div>
                                    <!-- .widget -->
                                </div>
                                <!-- .site-search -->
                                <a class="handheld-header-cart-link has-icon" href="cart.html" title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    <span class="count">2</span>
                                </a>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->
                </div>
                <!-- .handheld-header -->
            </div>
            <!-- .handheld-only -->
        </header>
        <p></p>
        <!-- .header-v1 -->
        <!-- ============================================================= Header End ============================================================= -->