<?php include "banner.php"; ?>
<section class="section-products-carousel-tabs tab-wrap carousel-tab-wrap">
    <div class="section-products-carousel-tabs-wrap">
        <header class="section-header">
            <h2 class="section-title">Shop New Arrivals 2017</h2>
            <ul role="tablist" class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link active" href="#tab-59f89f0ac71c90" data-toggle="tab">All Shoes</a></li>
                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0ac71c91" data-toggle="tab">Men</a></li>
                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0ac71c92" data-toggle="tab">Women</a></li>
                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0ac71c93" data-toggle="tab">Boys</a></li>
                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0ac71c94" data-toggle="tab">Girls</a></li>
            </ul>
        </header>
        <div class="tab-content">
            <div id="tab-59f89f0ac71c90" class="tab-pane active" role="tabpanel">
                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                    <div class="container-fluid">
                        <div class="woocommerce columns-5">
                            <div class="products">
                                <?php
                                $i = 0;
                                foreach ($sphome as $sp) {
                                    extract($sp);
                                    $hinhpath ="../uploads/".$hinh;
                                    $linksp = "index.php?act=chitietsp&idsp=".$id_sp;
                                    echo '
                                    <div class="product">
                                    <a href="' . $linksp . '" class="woocommerce-LoopProduct-link">
                                        <img src="' . $hinhpath. '" class="wp-post-image" width="300" height="300" alt="ko co anh">
                                        <span class="price">
                                            <ins>
                                                <span class="amount">' . $gia_sp . '</span>
                                            </ins>
                                        </span>
                                            <!-- /.price -->
                                        <h2 class="woocommerce-loop-product__title">' . $ten_sp . '</h2>
                                    </a>
                                    
                                    <div class="hover-area">
                                        <input type="hidden" name="id" value="'.$id_sp.'">
                                        <input type="hidden" name="name" value="'.$ten_sp.'">
                                        <input type="hidden" name="img" value="'.$hinhpath.'">
                                        <input type="hidden" name="price" value="'.$gia_sp.'">
                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                        <a class="add-to-compare-link" href="compare.html">Compare</a>
                                    </div>
                                    </div>';
                                    $i+=1;
                                }?>
                            </div>
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .container-fluid -->
                </div>
                <!-- .products-carousel -->
            </div>
            <!-- .tab-pane -->
            <div id="tab-59f89f0ac71c91" class="tab-pane " role="tabpanel">
                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                    <div class="container-fluid">
                        <div class="woocommerce columns-5">
                            <div class="products">
                                <?php
                                $i = 0;
                                foreach ($sphome as $sp) {
                                    extract($sp);
                                    $hinhpath ="../uploads/".$hinh;
                                    $linksp = "index.php?act=chitietsp&idsp=".$id_sp;
                                    echo '
                                    <div class="product">
                                    <a href="' . $linksp . '" class="woocommerce-LoopProduct-link">
                                        <img src="' . $hinhpath. '" class="wp-post-image" width="300" height="300" alt="ko co anh">
                                        <span class="price">
                                            <ins>
                                                <span class="amount">' . $gia_sp . '</span>
                                            </ins>
                                        </span>
                                            <!-- /.price -->
                                        <h2 class="woocommerce-loop-product__title">' . $ten_sp . '</h2>
                                    </a>
                                    
                                    <div class="hover-area">
                                        <input type="hidden" name="id" value="'.$id_sp.'">
                                        <input type="hidden" name="name" value="'.$ten_sp.'">
                                        <input type="hidden" name="img" value="'.$hinhpath.'">
                                        <input type="hidden" name="price" value="'.$gia_sp.'">
                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                        <a class="add-to-compare-link" href="compare.html">Compare</a>
                                    </div>
                                    </div>';
                                    $i+=1;
                                }?>                    
                            </div>
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .container-fluid -->
                </div>
                <!-- .products-carousel -->
            </div>
            <!-- .tab-pane -->
            <div id="tab-59f89f0ac71c92" class="tab-pane " role="tabpanel">
                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                    <div class="container-fluid">
                        <div class="woocommerce columns-5">
                            <div class="products">    
                                <?php
                                $i = 0;
                                foreach ($sphome as $sp) {
                                    extract($sp);
                                    $hinhpath ="../uploads/".$hinh;
                                    $linksp = "index.php?act=chitietsp&idsp=".$id_sp;
                                    echo '
                                    <div class="product">
                                    <a href="' . $linksp . '" class="woocommerce-LoopProduct-link">
                                        <img src="' . $hinhpath. '" class="wp-post-image" width="300" height="300" alt="ko co anh">
                                        <span class="price">
                                            <ins>
                                                <span class="amount">' . $gia_sp . '</span>
                                            </ins>
                                        </span>
                                            <!-- /.price -->
                                        <h2 class="woocommerce-loop-product__title">' . $ten_sp . '</h2>
                                    </a>
                                    
                                    <div class="hover-area">
                                        <input type="hidden" name="id" value="'.$id_sp.'">
                                        <input type="hidden" name="name" value="'.$ten_sp.'">
                                        <input type="hidden" name="img" value="'.$hinhpath.'">
                                        <input type="hidden" name="price" value="'.$gia_sp.'">
                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                        <a class="add-to-compare-link" href="compare.html">Compare</a>
                                    </div>
                                    </div>';
                                    $i+=1;
                                }?>      
                            </div>
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .container-fluid -->
                </div>
                <!-- .products-carousel -->
            </div>
            <!-- .tab-pane -->
            <div id="tab-59f89f0ac71c94" class="tab-pane " role="tabpanel">
                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                    <div class="container-fluid">
                        <div class="woocommerce columns-5">
                            <div class="products">    
                                <?php
                                $i = 0;
                                foreach ($sphome as $sp) {
                                    extract($sp);
                                    $hinhpath ="../uploads/".$hinh;
                                    $linksp = "index.php?act=chitietsp&idsp=".$id_sp;
                                    echo '
                                    <div class="product">
                                    <a href="' . $linksp . '" class="woocommerce-LoopProduct-link">
                                        <img src="' . $hinhpath. '" class="wp-post-image" width="300" height="300" alt="ko co anh">
                                        <span class="price">
                                            <ins>
                                                <span class="amount">' . $gia_sp . '</span>
                                            </ins>
                                        </span>
                                            <!-- /.price -->
                                        <h2 class="woocommerce-loop-product__title">' . $ten_sp . '</h2>
                                    </a>
                                    
                                    <div class="hover-area">
                                        <input type="hidden" name="id" value="'.$id_sp.'">
                                        <input type="hidden" name="name" value="'.$ten_sp.'">
                                        <input type="hidden" name="img" value="'.$hinhpath.'">
                                        <input type="hidden" name="price" value="'.$gia_sp.'">
                                        <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                        <a class="add-to-compare-link" href="compare.html">Compare</a>
                                    </div>
                                    </div>';
                                    $i+=1;
                                }?>
                            </div>
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .container-fluid -->
                </div>
                <!-- .products-carousel -->
            </div>
            <!-- .tab-pane -->
        </div>
        <!-- .tab-content -->
    </div>
</section>
<div class="fullwidth-notice stretch-full-width">
    <div class="col-full">
        <p class="message">Download our new app today! Dont miss our mobile-only offers and shop with Android Play.</p>
    </div>
    <!-- .col-full -->
</div>
<!-- .fullwidth-notice -->
<div class="home-v10-banner-with-products-carousel row stretch-full-width">
    <div class="banner column-1">
        <a href="shop.html">
            <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/10-5.jpg ); height: 724px;" class="banner-bg">
                <div class="caption">
                    <div class="banner-info">
                        <h3 class="title">
                            <span>Be</span>Active</h3>
                    </div>
                    <!-- .banner-info -->
                </div>
                <!-- .caption -->
            </div>
            <!-- .banner-bg -->
        </a>
    </div>
                        <!-- .banner -->
    <section class="section-products-carousel column-2">
        <header class="section-header"> </header>
        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
            <div class="container-fluid">
                <div class="woocommerce columns-2">
                    <div class="products">
                        <?php
                        $i = 0;
                        foreach ($sphome as $sp) {
                            extract($sp);
                            $hinhpath ="../uploads/".$hinh;
                            $linksp = "index.php?act=chitietsp&idsp=".$id_sp;
                            echo '
                            <div class="product">
                            <a href="' . $linksp . '" class="woocommerce-LoopProduct-link">
                                <img src="' . $hinhpath. '" class="wp-post-image" width="300" height="300" alt="ko co anh">
                                <span class="price">
                                    <ins>
                                        <span class="amount">' . $gia_sp . '</span>
                                    </ins>
                                </span>
                                    <!-- /.price -->
                                <h2 class="woocommerce-loop-product__title">' . $ten_sp . '</h2>
                            </a>
                            
                            <div class="hover-area">
                                <input type="hidden" name="id" value="'.$id_sp.'">
                                <input type="hidden" name="name" value="'.$ten_sp.'">
                                <input type="hidden" name="img" value="'.$hinhpath.'">
                                <input type="hidden" name="price" value="'.$gia_sp.'">
                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                <a class="add-to-compare-link" href="compare.html">Compare</a>
                            </div>
                            </div>';
                            $i+=1;
                        }?>                              
                    </div>
                </div>
                <!-- .woocommerce-->
            </div>
            <!-- .container-fluid -->
        </div>
                <!-- .products-carousel -->
    </section>
</div>
<?php include "bannerfoo.php"; ?>