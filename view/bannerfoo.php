
                    <!-- .home-v10-banner-with-products-carousel -->
                    <section class="section-products-carousel-tabs techmarket-tabs">
    <div class="section-products-carousel-tabs-wrap">
        <header class="section-header">
            <h2 class="section-title">Men Bestsellers Shoes</h2>
            <ul role="tablist" class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link active" href="#tab-59f89f0ad18d70" data-toggle="tab">All Shoes</a></li>
                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0ad18d71" data-toggle="tab">Lifestyle</a></li>
                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0ad18d72" data-toggle="tab">Running</a></li>
                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0ad18d73" data-toggle="tab">Training &amp; Gym</a></li>
                <li class="nav-item"><a class="nav-link " href="#tab-59f89f0ad18d74" data-toggle="tab">Softball</a></li>
            </ul>
        </header>
        <div class="tab-content">
            <div id="tab-59f89f0ad18d70" class="tab-pane active" role="tabpanel">
                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:7,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesPerRow&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:5}}]}">
                    <div class="container-fluid">
                        <div class="woocommerce columns-7">
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
            </div>
        </div>
    </section>
    <!-- .section-products-carousel-tabs -->
    <div class="banners techmarket-banner techmarket-grid-banner-2">
        <div class="row">
            <div class="banner large-banner text-in-center">
                <a href="shop.html">
                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/10-6.jpg ); height: 539px;" class="banner-bg">
                        <div class="caption">
                            <div class="banner-info">
                                <h3 class="title">Be Nicer
                                    <br>For Yourself</h3>
                            </div>
                            <!-- .banner-info -->
                            <span class="banner-action button">Check Now
                                <i class="tm tm-long-arrow-right"></i>
                            </span>
                        </div>
                        <!-- .caption -->
                    </div>
                    <!-- .banner-bg -->
                </a>
            </div>
            <!-- .banner -->
            <div class="banner small-banner text-in-center">
                <a href="shop.html">
                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/10-7.jpg ); height: 273px;" class="banner-bg">
                        <div class="caption">
                            <div class="banner-info">
                                <h3 class="title">&nbsp;</h3>
                            </div>
                            <!-- .banner-info -->
                        </div>
                        <!-- .caption -->
                    </div>
                    <!-- .banner-bg -->
                </a>
            </div>
            <!-- .banner -->
            <div class="banner small-banner text-in-center">
                <a href="shop.html">
                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/10-8.jpg ); height: 273px;" class="banner-bg">
                        <div class="caption">
                            <div class="banner-info">
                                <h3 class="title">&nbsp;</h3>
                            </div>
                            <!-- .banner-info -->
                        </div>
                        <!-- .caption -->
                    </div>
                    <!-- .banner-bg -->
                </a>
            </div>
            <!-- .banner -->
            <div class="banner large-banner text-in-center">
                <a href="shop.html">
                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/10-9.jpg ); height: 544px;" class="banner-bg">
                        <div class="caption">
                            <div class="banner-info">
                                <h3 class="title">&nbsp;</h3>
                            </div>
                            <!-- .banner-info -->
                        </div>
                        <!-- .caption -->
                    </div>
                    <!-- .banner-bg -->
                </a>
            </div>
            <!-- .banner -->
        </div>
        <!-- .row -->
    </div>
                    <!-- .banners -->
    <section class="brands-carousel">
        <h2 class="sr-only">Brands Carousel</h2>
        <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
            <div class="brands">
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>apple</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="assets/images/brands/1.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>bosch</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="assets/images/brands/2.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>cannon</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="assets/images/brands/3.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>connect</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="assets/images/brands/4.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>galaxy</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="assets/images/brands/5.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>gopro</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="assets/images/brands/6.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>handspot</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="assets/images/brands/7.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>kinova</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="assets/images/brands/8.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>nespresso</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="assets/images/brands/9.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>samsung</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="assets/images/brands/10.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>speedway</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="assets/images/brands/11.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
                <div class="item">
                    <a href="shop.html">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>yoko</h4>
                                </div>
                                <!-- /.info -->
                            </figcaption>
                            <img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="assets/images/brands/12.png">
                        </figure>
                    </a>
                </div>
                <!-- .item -->
            </div>
        </div>
        <!-- .col-full -->
    </section>
                   
                </main>
            </div>
                </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>
<!-- #content -->