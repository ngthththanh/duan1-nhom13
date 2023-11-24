<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <?php extract($onesanpham); ?>
            <nav class="woocommerce-breadcrumb">
                <a href="index.php">Home</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span><a href="?act=shop">Shop
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span><?php echo "$ten_sp" ?>
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="product">
                        <div class="single-product-wrapper">
                            <div class="product-images-wrapper thumb-count-4">
                                <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                    <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                            <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                            <div data-thumb="assets/images/products/sm-card-1.jpg" class="woocommerce-product-gallery__image">
                                                <a href="#" tabindex="0">
                                                    <?php
                                                    $hinhsp = $img_path . $hinh;
                                                    echo '<img width="600" height="600" src="' . $hinhsp . '" class="attachment-shop_single size-shop_single wp-post-image" alt="">;'
                                                    ?>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- .woocommerce-product-gallery -->
                                    </div>
                                </div>

                            </div>
                            <!-- .product-images-wrapper -->
                            <div class="summary entry-summary">
                                <div class="single-product-header">
                                    <h1 class="product_title entry-title"><?php echo "$ten_sp" ?></h1>
                                    <a class="add-to-wishlist" href="wishlist.html"> Add to Wishlist</a>
                                </div>
                                <div class="rating-and-sharing-wrapper">
                                    <div class="woocommerce-product-rating">
                                        <div class="star-rating">
                                            <span style="width:100%">Rated
                                                <strong class="rating">5.00</strong> out of 5 based on
                                                <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">1</span> customer review)</a>
                                    </div>
                                </div>
                                <!-- .rating-and-sharing-wrapper -->
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li><?= $mota ?></li>

                                    </ul>
                                </div>
                                <!-- so luong san pham -->
                                <div id="bienthe1"></div>
                                <!-- .woocommerce-product-details__short-description -->
                            </div>
                            <!-- .entry-summary -->
                            <div class="product-actions-wrapper">
                                <div class="product-actions">
                                    <div class="availability">
                                        Availability:
                                        <p class="stock in-stock">1000 in stock</p>
                                    </div>
                                    <!-- .availability -->
                                    <div class="additional-info">
                                        <i class="tm tm-free-delivery"></i>Item with
                                        <strong>Free Delivery</strong>
                                    </div>
                                    <!-- .additional-info -->
                                    <p class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span><?php echo "$gia_sp" ?>VND</span>
                                    </p>
                                    <!-- .price -->
                                    <form class="variations_form cart" action="index.php?act=addcart" method="post">
                                        <table class="variations">
                                            <tbody>
                                                <tr>
                                                    <td class="label">
                                                        <label for="pa_screen-size">Kích Thước</label>
                                                    </td>
                                                    <td class="value">
                                                        <select onchange="soLuong1()" id="kichThuoc" data-show_option_none="yes" data-attribute_name="attribute_pa_screen-size" name="attribute_pa_screen-size" class="" id="pa_screen-size">
                                                            <option value="">Chọn kích thước</option>
                                                            <?php foreach ($listkthuoc as $kthuoc) {
                                                                extract($kthuoc);
                                                                echo '<option value="' . $so_luong . '">' . $ten . '</option>';
                                                            } ?>
                                                        </select>
                                                    </td>
                                                    <td class="label">
                                                        <label for="pa_screen-size">Màu Sắc</label>
                                                    </td>
                                                    <td class="value">
                                                        <select onchange="soLuong1()" id="kichThuoc" data-show_option_none="yes" data-attribute_name="attribute_pa_screen-size" name="attribute_pa_screen-size" class="" id="pa_screen-size">
                                                            <option value="">Chọn màu sắc</option>
                                                            <?php foreach ($listmsac as $msac) {
                                                                extract($msac);
                                                                echo '<option value="' . $so_luong . '">' . $ten . '</option>';
                                                            } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="single_variation_wrap">
                                            <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                <div class="quantity">
                                                    <label for="quantity-input">Quantity</label>
                                                    <input id="quantity-input" type="number" name="soluong" value="1" title="Qty" class="input-text qty text" size="4">
                                                    <input type="hidden" name="id" value="<?= $id_sp ?>">
                                                    <input type="hidden" name="name" value="<?= $ten_sp ?>">
                                                    <input type="hidden" name="img" value="'<?= $hinhsp ?>">
                                                    <input type="hidden" name="price" value="<?= $gia_sp ?>">
                                                </div>
                                                <a class="button add_to_cart_button" href="#" rel="nofollow"><input type="submit" value="Thêm vào giỏ hàng" name="addcart"></a>
                                                <input type="hidden" value="2471" name="addtocart">
                                                <input type="hidden" value="2471" name="product_id">
                                                <input type="hidden" value="0" class="variation_id" name="variation_id">
                                            </div>
                                        </div>
                                        <!-- .single_variation_wrap -->
                                    </form>
                                    <!-- .variations_form -->
                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                </div>
                                <!-- .product-actions -->
                            </div>
                            <!-- .product-actions-wrapper -->
                        </div>
                        <!-- .single-product-wrapper -->
                        <div class="techmarket-tabs techmarket-tabs-wrapper wc-tabs-wrapper">
                            <!-- .techmarket-tab -->
                            <div id="tab-reviews" class="techmarket-tab">
                                <div class="tab-content">
                                    <div class="techmarket-advanced-reviews" id="reviews">
                                        <div class="advanced-review row">
                                            <div class="advanced-review-rating">
                                                <?php foreach ($sobinhluan as $value) :
                                                    extract($value);
                                                ?>
                                                    <h2 class="based-title">Review (<?= $soBinhLuan ?>)</h2>
                                                <?php endforeach; ?>
                                                <div class="avg-rating">
                                                    <span class="avg-rating-number">5.0</span>
                                                    <div title="Rated 5.0 out of 5" class="star-rating">
                                                        <span style="width:100%"></span>
                                                    </div>
                                                </div>
                                                <!-- /.avg-rating -->
                                                <div class="rating-histogram">
                                                    <div class="rating-bar">
                                                        <div title="Rated 5 out of 5" class="star-rating">
                                                            <span style="width:100%"></span>
                                                        </div>
                                                        <div class="rating-count">1</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:100%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="rating-bar">
                                                        <div title="Rated 4 out of 5" class="star-rating">
                                                            <span style="width:80%"></span>
                                                        </div>
                                                        <div class="rating-count zero">0</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:0%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="rating-bar">
                                                        <div title="Rated 3 out of 5" class="star-rating">
                                                            <span style="width:60%"></span>
                                                        </div>
                                                        <div class="rating-count zero">0</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:0%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="rating-bar">
                                                        <div title="Rated 2 out of 5" class="star-rating">
                                                            <span style="width:40%"></span>
                                                        </div>
                                                        <div class="rating-count zero">0</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:0%"></span>
                                                        </div>
                                                    </div>
                                                    <div class="rating-bar">
                                                        <div title="Rated 1 out of 5" class="star-rating">
                                                            <span style="width:20%"></span>
                                                        </div>
                                                        <div class="rating-count zero">0</div>
                                                        <div class="rating-percentage-bar">
                                                            <span class="rating-percentage" style="width:0%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.rating-histogram -->
                                            </div>
                                            <!-- /.advanced-review-rating -->
                                            <div class="advanced-review-comment">
                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                        <div class="comment-respond" id="respond">
                                                            <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                            <form novalidate="" class="comment-form" id="commentform" action="index.php?act=chitietsp&idsp=<?= $id_sp ?>" method="POST">
                                                                <?php if (isset($_SESSION['username'])) {
                                                                    $user = $_SESSION['username']; ?>
                                                                    <div class="comment-form-rating">
                                                                        <label>Your Rating</label>
                                                                        <p class="stars" id="user-rating">
                                                                            <span>
                                                                                <a href="#" class="star-1">1</a>
                                                                                <a href="#" class="star-2">2</a>
                                                                                <a href="#" class="star-3">3</a>
                                                                                <a href="#" class="star-4">4</a>
                                                                                <a href="#" class="star-5">5</a>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your Review</label>
                                                                        <textarea aria-required="true" rows="8" cols="45" name="noidung" id="comment"></textarea>
                                                                    </p>
                                                                    <p class="form-submit">
                                                                        <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
                                                                        <input type="submit" value="Add Review" class="submit" id="submit" name="guibinhluan">
                                                                    </p>
                                                                <?php } else { ?>
                                                                    <div>
                                                                        <?php
                                                                        echo '<a href="?act=login"><h6 style="color:red;">** Đăng nhập để bình luận</h6></a>';
                                                                        ?>
                                                                    </div>
                                                                <?php } ?>
                                                            </form>
                                                            <!-- /.comment-form -->
                                                        </div>
                                                        <!-- /.comment-respond -->
                                                    </div>
                                                    <!-- /#review_form -->
                                                </div>
                                                <!-- /#review_form_wrapper -->
                                            </div>
                                            <!-- /.advanced-review-comment -->
                                        </div>
                                        <!-- /.advanced-review -->
                                        <div id="comments">
                                            <?php foreach ($listbinhluan as $binhluan) :
                                                extract($binhluan);
                                            ?>
                                                <ol class="commentlist">
                                                    <li id="li-comment-83" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                        <div class="comment_container" id="comment-83">
                                                            <div class="comment-text">
                                                                <div class="star-rating">
                                                                    <span>
                                                                        Rated <strong class="rating"></strong> out of 5
                                                                    </span>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong itemprop="author" class="woocommerce-review__author">
                                                                        <?= $user ?>
                                                                    </strong>
                                                                    <span class="woocommerce-review__dash">&ndash;</span>
                                                                    <time datetime="2017-06-21T08:05:40+00:00" itemprop="datePublished" class="woocommerce-review__published-date">
                                                                        <?= $ngaybinhluan ?>
                                                                    </time>
                                                                </p>
                                                                <div class="description">
                                                                    <p><?= $noidung ?></p>
                                                                </div>
                                                                <!-- /.description -->
                                                            </div>
                                                            <!-- /.comment-text -->
                                                        </div>
                                                        <!-- /.comment_container -->
                                                    </li>
                                                    <!-- /.comment -->
                                                </ol>
                                            <?php endforeach; ?>
                                            <!-- /.commentlist -->
                                        </div>
                                        <!-- /#comments -->
                                    </div>
                                    <!-- /.techmarket-advanced-reviews -->
                                </div>
                                <!-- .tab-content -->
                            </div>
                            <!-- .techmarket-tab -->
                        </div>
                        <!-- .techmarket-tabs -->
                        <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                            <section class="related">
                                <header class="section-header">
                                    <h2 class="section-title">Related products</h2>
                                    <nav class="custom-slick-nav"></nav>
                                </header>
                                <!-- .section-header -->
                                <div class="products">
                                    <?php foreach ($sanphamcl as $sanphamcl) {
                                        extract($sanphamcl);
                                        $hinhsp = $img_path . $hinh;
                                        $linksp = "index.php?act=chitietsp&idsp=" . $id_sp;
                                        echo '
                                    <div class="product">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                        </div>
                                        <a href="' . $linksp . '" class="woocommerce-LoopProduct-link">
                                            <img src="' . $hinhsp . '" width="224" height="197" class="wp-post-image" alt="">
                                            <span class="price">
                                                <ins>
                                                    <span class="amount"> </span>
                                                </ins>
                                                <span class="amount">' . $gia_sp . '</span>
                                            </span>
                                            <!-- /.price -->
                                            <h2 class="woocommerce-loop-product__title">' . $ten_sp . '</h2>
                                        </a>
                                        <div class="hover-area">
                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                        </div>
                                    </div>';
                                    }; ?>
                                </div>
                            </section>
                        </div>
                </main>
            </div>
        </div>
    </div>
    <script>
        function soLuong1() {
            var x = document.getElementById("kichThuoc").value;
            document.getElementById("bienthe1").innerHTML = "So luong: " + x;
        }
    </script>