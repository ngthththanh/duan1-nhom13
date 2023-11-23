<div id="content" class="site-content">
     <div class="col-full">
     <div class="row">
          <nav class="woocommerce-breadcrumb">
               <a href="home-v1.html">Home</a>
               <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
               </span>
               Cart
          </nav>
          <!-- .woocommerce-breadcrumb -->
          <div id="primary" class="content-area">
               <main id="main" class="site-main">
                    <div class="type-page hentry">
                         <div class="entry-content">
                         <div class="woocommerce">
                              <div class="cart-wrapper">
                                   <form method="post" action="#" class="woocommerce-cart-form">
                                        <?php 
                                        if((isset($_SESSION['giohang'])) && (count($_SESSION['giohang'])>0)){
                                             echo '
                                             <table class="shop_table shop_table_responsive cart">
                                             <thead>
                                             <tr>
                                             <th class="product-remove">&nbsp;</th>
                                             <th class="product-thumbnail">&nbsp;</th>
                                             <th class="product-name">STT</th>
                                             <th class="product-name">Hình</th>
                                             <th class="product-name">Product</th>
                                             <th class="product-price">Price</th>
                                             <th class="product-quantity">Quantity</th>
                                             <th class="product-subtotal">Total</th>
                                         </tr>
                                             </thead>';
                                             $i=0;
                                             $tong=0;
                                             foreach ($_SESSION['giohang'] as $item) {
                                                  $tt=$item[3] * $item[4];
                                                  $tong+=$tt;
                                                  echo ' <tbody>
                                                  <tr>
                                                  <td>'.($i+1).'</td>
                                                  <td>'.$item[2].'</td>

                                                       <td class="product-remove">
                                                            <a class="remove" href="index.php?act=delcart&i='.$i.'">×</a>
                                                       </td>
                                                       <td class="product-thumbnail">
                                                            <a href="single-product-fullwidth.html">
                                                                 <img width="180" height="180" alt="" class="wp-post-image" src="uploads/'.$item[2].'">
                                                            </a>
                                                       </td>
                                                       <td data-title="Product" class="product-name">
                                                            <div class="media cart-item-product-detail">
                                                                 <a href="single-product-fullwidth.html">
                                                                      <img width="180" height="180" alt="" class="wp-post-image" src="'.$item[2].'">
                                                                 </a>
                                                                 <div class="media-body align-self-center">
                                                                      <a href="single-product-fullwidth.html">'.$item[1].'</a>
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td data-title="Price" class="product-price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                 <span class="woocommerce-Price-currencySymbol">'.$item[3].'</span>VND
                                                            </span>
                                                       </td>
                                                       <td class="product-quantity" data-title="Quantity">
                                                            <div class="quantity">
                                                                 <label for="quantity-input-1">Quantity</label>
                                                                 <input id="quantity-input-1" type="number" name="cart[e2230b853516e7b05d79744fbd4c9c13][qty]" value="'.$item[4].'" title="Qty" class="input-text qty text" size="4">
                                                            </div>
                                                       </td>
                                                       <td data-title="Total" class="product-subtotal">
                                                            <span class="woocommerce-Price-amount amount">
                                                                 <span class="woocommerce-Price-currencySymbol">'.$tong.'</span>VND
                                                            </span>
                                                            <a title="Remove this item" class="remove" href="index.php?act=delcart&i='.$i.'">×</a>
                                                       </td>
                                                  </tr>
                                                 
                                                  </tbody>';
                                                  $i++;
                                             }
                                            
                                      echo  '</table>';
                                             
                                        }
                                        ?>
                                         
                                         <tr>
                                                                <td class="actions" colspan="6">
                                                                    <div class="coupon">
                                                                        <label for="coupon_code">Coupon:</label>
                                                                        <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                                        <input type="submit" value="Apply coupon" name="apply_coupon" class="button">
                                                                        <input type="submit" value="Update cart" name="update_cart" class="button">
                                                                    </div>
                                                                    
                                                                </td>
                                                            </tr>
                                                            
                                                    
                                               
                                        
                                        <!-- .shop_table shop_table_responsive -->
                                   </form>
                                   <!-- .woocommerce-cart-form -->
                                   <?php 
                          echo        ' <div class="cart-collaterals">
                                        <div class="cart_totals">
                                             <h2>Cart totals</h2>
                                             <table class="shop_table shop_table_responsive">
                                             <tbody>
                                                  <tr class="cart-subtotal">
                                                       <th>Subtotal</th>
                                                       <td data-title="Subtotal">
                                                            <span class="woocommerce-Price-amount amount">
                                                                 <span class="woocommerce-Price-currencySymbol"></span>'.$tong.'</span>VND
                                                       </td>
                                                  </tr>
                                                  <tr class="shipping">
                                                       <th>Shipping</th>
                                                       <td data-title="Shipping">Flat rate</td>
                                                  </tr>
                                                  <tr class="order-total">
                                                       <th>Total</th>
                                                       <td data-title="Total">
                                                            <strong>
                                                                 <span class="woocommerce-Price-amount amount">
                                                                 <span class="woocommerce-Price-currencySymbol"></span>'.$tong.'</span>VND
                                                            </strong>
                                                       </td>
                                                  </tr>
                                             </tbody>
                                             </table>
                                             <!-- .shop_table shop_table_responsive -->
                                             <div class="wc-proceed-to-checkout">
                                        
                                              
                                             <!-- .wc-proceed-to-checkout -->
                                             <a class="checkout-button button alt wc-forward" href="">
     Proceed to checkout</a>
                                             <a class="back-to-shopping" href="index.php">Back to Shopping</a>
                                             </div>
                                             <!-- .wc-proceed-to-checkout -->
                                        </div>
                                        <!-- .cart_totals -->
                                   </div>
                                   <!-- .cart-collaterals --> ';

                                   ?>
                              </div>
                              <!-- .cart-wrapper -->
                         </div>
                         <!-- .woocommerce -->
                         </div>
                         <!-- .entry-content -->
                    </div>
                    <!-- .hentry -->
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
<div class="col-full">
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
     <!-- .brands-carousel -->
</div>