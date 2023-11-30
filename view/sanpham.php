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
                        <h1 class="woocommerce-products-header__title page-title"><?= $ten_dm ?></strong></h1>
                        <!-- .shop-view-switcher -->
                        <form class="form-techmarket-wc-ppp" method="POST">
                            <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                <option value="20">Show 20</option>
                                <option value="40">Show 40</option>
                                <option value="-1">Show All</option>
                            </select>
                            <input type="hidden" value="5" name="shop_columns">
                            <input type="hidden" value="15" name="shop_per_page">
                            <input type="hidden" value="right-sidebar" name="shop_layout">
                        </form>
                        <!-- .form-techmarket-wc-ppp -->
                        <form method="get" class="woocommerce-ordering">
                            <select class="orderby" name="orderby">
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option selected="selected" value="date">Sort by newness</option>
                                <option value="price-asc">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                            <input type="hidden" value="5" name="shop_columns">
                            <input type="hidden" value="15" name="shop_per_page">
                            <input type="hidden" value="right-sidebar" name="shop_layout">

                            <!-- Add new input fields for price -->
                            <label for="min_price">Min Price:</label>
                            <input type="text" id="min_price" name="min_price" value="<?php echo isset($_GET['min_price']) ? $_GET['min_price'] : ''; ?>" placeholder="Min Price">

                            <label for="max_price">Max Price:</label>
                            <input type="text" id="max_price" name="max_price" value="<?php echo isset($_GET['max_price']) ? $_GET['max_price'] : ''; ?>" placeholder="Max Price">

                            <button type="button" onclick="applyFilters()">Apply Filters</button>
                        </form>
                        </form>

                        <!-- .woocommerce-ordering -->
                        <nav class="techmarket-advanced-pagination">
                            <form class="form-adv-pagination" method="post">
                                <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
                            </form> of 5<a href="#" class="next page-numbers">→</a>
                        </nav>
                        <!-- .techmarket-advanced-pagination -->
                    </div>
                    <!-- .shop-control-bar -->
                    <div class="tab-content">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="woocommerce columns-7">
                                <div class="products">

                                    <?php
                                    $i = 0;
                                    foreach ($dssp as $sp) {
                                        extract($sp);
                                        $hinhpath = "../uploads/" . $hinh;
                                        $linksp = "index.php?act=chitietsp&idsp=" . $id_sp;
                                        echo '
                                                        <div class="product first">
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
                                                        <a class="button add_to_cart_button" href="index.php?act=addcart" rel="nofollow">Thêm vào giỏ hàng</a>
                                                        <a class="add-to-compare-link" href="compare.html">So sánh</a>
                                                        </div>
                                                        <!-- .hover-area --> 
                                                    </div>
                                                    ';
                                        $i += 1;
                                    } ?>

                                </div>
                                <!-- .products -->
                            </div>
                            <!-- .woocommerce -->
                        </div>

                        <div class="shop-control-bar-bottom">
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                    <option value="20">Show 20</option>
                                    <option value="40">Show 40</option>
                                    <option value="-1">Show All</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .form-techmarket-wc-ppp -->
                            <p class="woocommerce-result-count">
                                <!-- Showing 1&ndash;15 of 73 results -->
                            </p>
                            <!-- .woocommerce-result-count -->
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li>
                                        <span class="page-numbers current">1</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">2</a></li>
                                    <li><a href="#" class="page-numbers">3</a></li>
                                    <li><a href="#" class="page-numbers">4</a></li>
                                    <li><a href="#" class="page-numbers">5</a></li>
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

<script>
    function applyFilters() {
        var form = document.getElementById('filterForm');
        var minPrice = document.getElementById('min_price').value;
        var maxPrice = document.getElementById('max_price').value;

        // Here, you can add validation for minPrice and maxPrice if needed

        // Use AJAX to send the form data to the server
        var xhr = new XMLHttpRequest();
        var url = form.action + '?' + 'min_price=' + minPrice + '&max_price=' + maxPrice;

        xhr.open('GET', url, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response if needed
                console.log(xhr.responseText);
                // You can update the page content or perform other actions based on the response
            }
        };

        xhr.send();
    }
</script>