<?php
                                
                                <?php echo count($_SESSION['giohang']) ?>
                                $tong = 0;
                                                if((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)){
                                                    $i = 0;
                                                    $tong = 0;
                                                    foreach ($_SESSION['giohang'] as $item) {
                                                        $tt = $item[3] * $item[4];
                                                        $tong += $tt;
                                                        echo '<li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>
                                                        <a href="single-product-sidebar.html">
                                                            <img src="../uploads/' . $item[2] . '" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">XONE Wireless Controller&nbsp;
                                                        </a>
                                                        <span class="quantity">' . $item[4] . ' ×
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>' . $item[3] . '</span>
                                                        </span>
                                                    </li>';
                                                    }
                                                }
                                                 ?>