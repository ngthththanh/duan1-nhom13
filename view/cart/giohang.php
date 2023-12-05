<div id="content" class="site-content">
     <div class="col-full">
          <div class="row">
               <nav class="woocommerce-breadcrumb">
                    <a href="index.php">Home</a>
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
                                             <form method="post" action="index.php?act=thanhtoan" class="woocommerce-cart-form">
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
                                                       </thead>
                                                       <tbody>
                                                            <?php
                                                            if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
                                                                 $i = 0;
                                                                 $tong = 0;
                                                                 foreach ($_SESSION['giohang'] as $item) {
                                                                      $tt = $item[3] * $item[4];
                                                                      $tong += $tt;
                                                                      echo ' 
                                                  <tr>
                                                  <td>' . ($i + 1) . '</td>
                                                  <td>   <img src="../uploads/' . $item[2] . '" alt="" width="80"></td>

                                                       <td class="product-remove">
                                                            <a class="remove" href="index.php?act=delcart&i=' . $i . '">×</a>
                                                       </td>
                                                       <td class="product-thumbnail">
                                                       </td>
                                                       <td data-title="Product" class="product-name">
                                                            <div class="media cart-item-product-detail">
                                                                 <a href="single-product-fullwidth.html">
                                                                     
                                                                 </a>
                                                                 <div class="media-body align-self-center">
                                                                      <a href="single-product-fullwidth.html">' . $item[1] . '</a>
                                                                        
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td data-title="Price" class="product-price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                 <span class="woocommerce-Price-currencySymbol">' . $item[3] . '</span>VND
                                                            </span>
                                                       </td>
                                                       <td class="product-quantity" data-title="Quantity">
                                                            <div class="quantity">
                                                                 <label for="quantity-input-1">Quantity</label>
                                                                 <input id="quantity-input-1" type="number" data-id="' . $i . '" data-unit-price="' . $item[3] . '" data-name="' . $item[1] . '" name="cart[e2230b853516e7b05d79744fbd4c9c13][qty]" value="' . $item[4] . '" title="Qty" class="input-text qty text input-quantity" size="4">
                                                            </div>
                                                       </td>
                                                       <td data-title="Total" class="product-subtotal">
                                                            <span class="woocommerce-Price-amount amount">
                                                                 <span class="woocommerce-Price-currencySymbo total-product-' . $i . '">' . $tong . '</span>VND
                                                            </span>
                                                            <a title="Remove this item" class="remove" href="index.php?act=delcart&i=' . $i . '">×</a>
                                                       </td>
                                                  </tr>';
                                                                      $i++;
                                                                 }
                                                            } else {
                                                                 echo '<script>alert("Giỏ hàng có gì đâu mà vào");</script>';
                                                                 header('location:index.php');
                                                            }
                                                            ?>
                                                       </tbody>
                                                  </table>
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

                                             <div class="cart-collaterals">
                                                  <h3>Thông tin đặt hàng</h3>
                                                  <form action="index.php?act=thanhtoan" method="post">
                                                       <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                                                       <table>
                                                            <tr>
                                                                 <td><input type="text" name="hoten" placeholder="Nhập họ tên" required></td>
                                                            </tr>
                                                            <tr>
                                                                 <td><input type="text" name="address" placeholder="Nhập địa chỉ" required></td>
                                                            </tr>
                                                            <tr>
                                                                 <td><input type="email" name="email" placeholder="Nhập email" required></td>
                                                            </tr>
                                                            <tr>
                                                                 <td><input type="text" name="tel" placeholder="Nhập số điện thoại" required></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Phương thức thanh toán <br>
                                                                      <input type="radio" name="pttt" value="1"> Thanh toán khi nhận hàng <br>
                                                                      <input type="radio" name="pttt" value="2"> Thanh toán chuyển khoản <br>
                                                                      <input type="radio" name="pttt" value="3"> Thanh toán ví MoMo <br>
                                                                      <input type="radio" name="pttt" value="4"> Thanh toán online <br>
                                                                 </td>

                                                            </tr>
                                                            <tr>
                                                                 <td><input type="submit" value="thanhtoan" name="thanhtoan"></td>
                                                            </tr>
                                                       </table>
                                                  </form>
                                             </div>
                                             <!-- .cart-collaterals -->
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
<script>
     document.addEventListener("DOMContentLoaded", () => {
          $('.input-quantity').on('change', function() {
               var quantity = $(this).val();
               if (quantity < 1) {
                    quantity = 1;
                    $(this).val(quantity);
               }
               var unitPrice = $(this).data('unit-price');
               var amount = quantity * unitPrice;
               var id = $(this).data('id');
               $('.total-product-' + id).text(amount);
               var params = {
                    addtocart: 1,
                    id: '',
                    name: $(this).data('name'),
                    img: '',
                    soluong: quantity,
                    type: 'update',
                    price: unitPrice
               };
               $.post("index.php?act=addcart", params, function(data, status){
                    
               });
          });
     });
</script>