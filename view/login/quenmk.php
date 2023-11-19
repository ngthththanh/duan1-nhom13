<div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="index.php">Home</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Quên mật khẩu
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="type-page hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="customer-login-form">
                                                <div id="customer_login" class="u-columns col2-set">
                                                    <div class="u-column1 col-1">
                                                        <h2>Quên mật khẩu</h2>
                                                        <form method="post" action="?act=quenmk" class="woocomerce-form woocommerce-form-login login">
                                                           
                                                            <p class="form-row form-row-wide">
                                                                <label for="username">Email address
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <input type="email" class="input-text" name="email" id="username" value="" required />
                                                                <span class="form-message <?=$message_true != '' ? 'text-success' : 'text-danger';?>"><?=$message_true;?><?=$message_false;?></span>
                                                            </p>
                                                            <p class="form-row">
                                                                <input class="woocommerce-Button button" type="submit" value="Gửi" name="quenmk">
                                                                <label for="rememberme" class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me
                                                                </label>
                                                            </p>
                                                       
                                                        </form>
                                                        <!-- .woocommerce-form-login -->
                                                    </div>
                                                    <!-- .col-1 -->
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
            
            