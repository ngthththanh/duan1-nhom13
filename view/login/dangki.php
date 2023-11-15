<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="home-v1.html">Home</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>My Account
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
                                            <h2>Register</h2>
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
                                                    <input type="submit" class="woocommerce-Button button" name="register" value="Register" />
                                                </p>
                                                <div class="register-benefits">
                                                    <h3>Sign up today and you will be able to:</h3>
                                                    <ul>
                                                        <li>Speed your way through checkout</li>
                                                        <li>Track your orders easily</li>
                                                        <li>Keep a record of all your purchases</li>
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