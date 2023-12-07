<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="index.php">Home</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>
                <a href="#">Shop</a>
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="shop-control-bar">
                        <div class="handheld-sidebar-toggle">
                            <button type="button" class="btn sidebar-toggler">
                                <i class="fa fa-sliders"></i>
                                <span>Filters</span>
                            </button>
                        </div>
                        <!-- .handheld-sidebar-toggle -->
                        <h1 class="woocommerce-products-header__title page-title">Shop</strong></h1>
                        <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                            <li class="nav-item">
                                <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link active">
                                    <i class="tm tm-grid-small"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
                                    <i class="tm tm-grid"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link ">
                                    <i class="tm tm-listing-large"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#list-view" title="List View" data-toggle="tab" class="nav-link ">
                                    <i class="tm tm-listing"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#list-view-small" title="List View Small" data-toggle="tab" class="nav-link ">
                                    <i class="tm tm-listing-small"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- .shop-view-switcher -->
                        <form class="form-techmarket-wc-ppp" method="POST">
                            <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                <option value="-1">Show All</option>
                            </select>
                            <input type="hidden" value="5" name="shop_columns">
                            <input type="hidden" value="15" name="shop_per_page">
                            <input type="hidden" value="right-sidebar" name="shop_layout">
                        </form>

                        <div class="tab-content">
                            <div id="grid" class="tab-pane active" role="tabpanel">
                                <div class="woocommerce columns-7">
                                    <div class="products">
                                        <?php
                                        $i = 0;
                                        foreach ($allsp as $sp) {
                                            extract($sp);
                                            $hinhpath = "../uploads/" . $hinh;
                                            $linksp = "index.php?act=chitietsp&idsp=" . $id_sp;
                                            echo '
                                                        <div class="product first">
                                                        <form action="index.php?act=addcart" method="post">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="' . $linksp . '">
                                                            <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="' . $hinhpath . '">
                                                            <span class="price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"></span>' . number_format($gia_sp) . 'VND</span>
                                                            </span>
                                                            <h2 class="woocommerce-loop-product__title">' . $ten_sp . '</h2>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="hover-area">
                                                        <input type="hidden" name="id" value="' . $id_sp . '">
                                                        <input type="hidden" name="name" value="' . $ten_sp . '">
                                                        <input type="hidden" name="img" value="' . $hinhpath . '">
                                                        <input type="hidden" name="price" value="' . $gia_sp . '">
                                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Thêm vào giỏ hàng</a>
                                                        <a class="add-to-compare-link" href="compare.html">So sánh</a>
                                                            </div>
                                                        <!-- .hover-area -->
                                                    </div>   ';
                                            $i += 1;
                                        } ?>

                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->

                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">

                                    <option value="-1">Show All</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>

                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li>
                                        <span class="page-numbers current">1</span>
                                    </li>

                                    <li><a href="#" class="next page-numbers">→</a></li>
                                </ul>
                                <!-- .page-numbers -->
                            </nav>
                            <!-- .woocommerce-pagination -->

                        </div>
                        <!-- .shop-control-bar-bottom -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>
<!-- #content -->