<!-- .header-v1 -->
<!-- ============================================================= Header End ============================================================= -->

<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">

            <!-- .woocommerce-breadcrumb -->

            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="page hentry">

                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-order">

                                    <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Thank you. Your order has been received.</p>

                                    <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                                        <li class="woocommerce-order-overview__order order">
                                            Mã số đơn hàng:<strong><?= $iddh ?></strong>
                                        </li>
                                    </ul>
                                    <!-- .woocommerce-order-overview -->
                                    <section class="woocommerce-order-details">
                                        <h2 class="woocommerce-order-details__title">Chi tiết đặt hàng</h2>
                                        <?php
                                        if (isset($_SESSION['iddh']) && ($_SESSION['iddh'] > 0)) {


                                            $getshowcart =  getshowcart($iddh);


                                            if ((isset($getshowcart) && count($getshowcart) > 0)) {
                                                echo '<table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                    <thead>
                        <tr>
                            <th class="woocommerce-table__product-name product-name">STT</th>
                            <th class="woocommerce-table__product-name product-name">Product</th>
                            <th class="woocommerce-table__product-name product-name">Hình</th>
                            <th class="woocommerce-table__product-table product-total">Total</th>
                        </tr>
                    </thead>';
                                                $i = 0;
                                                $tong = 0;
                                                foreach ($getshowcart as $item) {

                                                    $tt = $item['soluong'] * $item['dongia'];
                                                    $tong = $tong + $tt;
                                                    echo '  <tbo>
                        <tr class="woocommerce-table__line-item order_item">
                        <td class="woocommerce-table__product-total product-total">
                            <span class="woocommerce-Price-amount amount">' . ($i + 1) . '</span>  
                        </td>
                            <td class="woocommerce-table__product-name product-name">
                                <a href="single-product-fullwidth.html">' . $item['tensp'] . '</a> 
                                <strong class="product-quantity">× ' . $item['soluong'] . '</strong>
                            </td>

                            <td class="woocommerce-table__product-total product-total">
                                <span class="woocommerce-Price-amount amount"><img src="../uploads/' . $item['img'] . '" alt="" width="80px"></span>  
                            </td>
                            <td class="woocommerce-table__product-total product-total">
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">VND</span>' . $tt . '</span>  
                            </td>

                        </tr>

                       
                    </tbo dy>';
                                                    $i++;
                                                }
                                                echo '  <tfoot>
                <tr>
                    <th scope="row">Phí :</th>
                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">VND</span>35000</span>&nbsp;<small class="shipped_via">via Normal Delivery</small></td>
                </tr>
                <tr>
                    <th scope="row">Tổng:</th>
                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">VND</span>' . $tong . '</span></td>
                </tr>
            </tfoot>';
                                                echo  '</table>      
            ';
                                            }
                                        } else {
                                            echo "gio hang rong";
                                        }

                                        ?>
                                        <!-- .woocommerce-table -->
                                    </section>
                                    <!-- .woocommerce-order-details -->
                                    <div class="cart-collaterals">
                                        <?php if (isset($_SESSION['iddh']) && ($_SESSION['iddh'] > 0)) {
                                            $getorderinfor = getorderinfor($_SESSION['iddh']);
                                            if (count($getorderinfor) > 0) {
                                        ?>
                                                <form action="index.php?act=dathang" method="post">
                                                    <h3>Thông tin đặt hàng</h3>
                                                    <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                                                    <table>
                                                        <tr>
                                                            <td> Mã đơn hàng : <?= $getorderinfor[0]['madh'] ?> <br></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Tên người nhận : <?= $getorderinfor[0]['hoten'] ?> <br></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Địa chỉ giao hàng : <?= $getorderinfor[0]['address'] ?> <br></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Email người nhận <?= $getorderinfor[0]['email'] ?> <br></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Số điện thoại người nhận: <?= $getorderinfor[0]['tell'] ?> <br></td>
                                                        </tr>
                                                        <tr>
                                                            <td> Phương thức thanh toán:
                                                                <?php switch ($getorderinfor[0]['pttt']) {
                                                                    case '1':
                                                                        $txtmess = "Thanh toán khi nhận hàng ";
                                                                    case '2':
                                                                        $txtmess = "Thanh toán chuyển khoản";
                                                                    case '3':
                                                                        $txtmess = "Thanh toán ví MoMo";
                                                                    case '4':
                                                                        $txtmess = "Thanh toán online";
                                                                        break;

                                                                    default:
                                                                        $txtmess = "Quý khách chưa chọn pttt";
                                                                        break;
                                                                }
                                                                echo $txtmess; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="submit" value="Kiểm tra" name="dathang"></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                        <?php

                                            }
                                        } ?>

                                    </div>
                                    <!-- .cart-collaterals -->


                                </div>
                                <!-- .woocommerce-order -->
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