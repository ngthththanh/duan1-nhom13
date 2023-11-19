<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="index.php">Home</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>Đăng kí
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="type-page hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="customer-login-form">
                                    <div id="customer_login" class="u-columns col2-set">
                                        <!-- .col-1 -->
                                        <div class="u-column2 col-2">
                                            <h2>Đăng kí</h2>
                                            <form class="register" method="post" action="index.php?act=dangki">
                                                <p class="before-register-text">
                                                    Create a new account today to reap the benefits of a personalized shopping experience. Praesent placerat, est sed aliquet finibus.
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_email">Email address
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="email" value="" id="reg_email" name="email" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_username">Fullname
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" value="" id="reg_username" name="hoten" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_username">Username
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" value="" id="reg_username" name="username" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <label for="reg_password">Password
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="password" id="reg_password" name="password" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" class="woocommerce-Button button" name="register" value="Đăng kí" />
                                                </p>
                                                <div class="register-benefits">
                                                    <h3>Đăng ký ngay hôm nay và bạn sẽ có thể:</h3>
                                                    <ul>
                                                        <li>Tăng tốc theo cách của bạn thông qua thanh toán</li>
                                                        <li>Theo dõi đơn hàng của bạn một cách dễ dàng</li>
                                                        <li>Giữ một bản ghi tất cả các giao dịch mua hàng của bạn</li>
                                                    </ul>
                                                </div>
                                            </form>
                                            <?php
                                        
                                        if(isset($thongbao) && ($thongbao != "")) {
                                            echo '<div class="alert alert-success" role="alert">' . $thongbao . '</div>';
                                        }
                                         ?>
                                            <!-- .register -->
                                        </div>
                                        <!-- .col-2 -->
                                    </div>
                                    <!-- .col2-set -->
                                </div>
                                <!-- .customer-login-form -->
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