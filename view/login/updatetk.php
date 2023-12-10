<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="index.php">Home</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>Thông tin tài khoản
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
                                            <h2>Thông tin tài khoản</h2>
                                            <form class="register" method="post" action="index.php?act=updatetk&id=<?php echo $id_tk ?>">
                                                <?php
                                                /*  if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                                                    extract($_SESSION['username']);
                                                } */
                                                if (!empty($_SESSION['username'])) {
                                                    extract($_SESSION['username']);
                                                }
                                                ?>

                                                <p class="form-row form-row-wide">
                                                    <label for="reg_password">Username
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" value="<?= $user ?>" id="reg_password" name="password" class="woocommerce-Input woocommerce-Input--text input-text" disabled>
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_password">Password
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="password" value="<?= $pass ?>" id="reg_password" name="password" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_username">Fullname
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" value="<?= $hoten ?>" id="reg_username" name="hoten" class="woocommerce-Input woocommerce-Input--text input-text" required>
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_email">Email address
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="email" value="<?= $email ?>" id="reg_email" name="email" class="woocommerce-Input woocommerce-Input--text input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_username">Phone
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" value="<?php echo $sdt ?>" id="reg_username" name="sdt" class="woocommerce-Input woocommerce-Input--text input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_username">Address
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" value="<?php echo $diachi ?>" id="reg_username" name="diachi" class="woocommerce-Input woocommerce-Input--text input-text">
                                                </p>


                                                <p class="form-row">
                                                    <input type="hidden" name="id" value="<?php if (isset($id_tk) && ($id_tk > 0)) echo $id_tk; ?>">

                                                    <input type="submit" class="woocommerce-Button button" name="capnhat" value="Cập nhật" />
                                                </p>
                                            </form>
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