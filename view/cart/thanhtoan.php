<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="home-v1.html">Home</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>
                Checkout
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div class="content-area" id="primary">
                <main class="site-main" id="main">
                    <div class="type-page hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-info">Returning customer? <a data-toggle="collapse" href="#login-form" aria-expanded="false" aria-controls="login-form" class="showlogin">Click here to login</a>
                                </div>
                                <div class="collapse" id="login-form">
                                    <form method="post" class="woocomerce-form woocommerce-form-login login">
                                        <p class="before-login-text">
                                            Vestibulum lacus magna, faucibus vitae dui eget, aliquam fringilla. In et commodo elit. Class aptent taciti sociosqu ad litora.
                                        </p>
                                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                        <p class="form-row form-row-first">
                                            <label for="username">Username or email
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" id="username" name="username" class="input-text">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="password">Password
                                                <span class="required">*</span>
                                            </label>
                                            <input type="password" id="password" name="password" class="input-text">
                                        </p>
                                        <div class="clear"></div>
                                        <p class="form-row">
                                            <input type="submit" value="Login" name="login" class="button">
                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                <input type="checkbox" value="forever" id="rememberme" name="rememberme" class="woocommerce-form__input woocommerce-form__input-checkbox">
                                                <span>Remember me</span>
                                            </label>
                                        </p>
                                        <p class="lost_password">
                                            <a href="#">Lost your password?</a>
                                        </p>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                                <!-- .collapse -->
                                <div class="woocommerce-info">Have a coupon? <a data-toggle="collapse" href="#checkoutCouponForm" aria-expanded="false" aria-controls="checkoutCouponForm" class="showlogin">Click here to enter your code</a>
                                </div>
                                <div class="collapse" id="checkoutCouponForm">
                                    <form method="post" class="checkout_coupon">
                                        <p class="form-row form-row-first">
                                            <input type="text" value="" id="coupon_code" placeholder="Coupon code" class="input-text" name="coupon_code">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <input type="submit" value="Apply coupon" name="apply_coupon" class="button">
                                        </p>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                                <!-- .collapse -->
                                <form action="index.php?act=thanhtoan" class="checkout woocommerce-checkout" method="post" name="checkout">
                                    <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                                    <div id="customer_details" class="col2-set">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Billing Details</h3>
                                                <form action="" method="post"></form>
                                                <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                            <label class="" for="billing_first_name">Họ Tên
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="" placeholder="" id="billing_first_name" name="hoten" class="input-text ">
                                                        </p>
                                                      
                                                        <div class="clear"></div>
                                                        
                                                        <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                            <label class="" for="billing_last_name">Địa chỉ
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="" placeholder="" id="billing_last_name" name="address" class="input-text ">
                                                        </p>
                                                        <div class="clear"></div>
                                            
                                                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                            <label class="" for="billing_phone">Phone
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="tel" value="" placeholder="" id="billing_phone" name="tel" class="input-text ">
                                                        </p>
                                                        <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                            <label class="" for="billing_email">Email Address
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="email" value="" placeholder="" id="billing_email" name="email" class="input-text ">
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                </form> 
                                            </div>
                                            <!-- .woocommerce-billing-fields -->
                                            <div class="woocommerce-account-fields">
                                                <p class="form-row form-row-wide woocommerce-validated">
                                                    <label class="collapsed woocommerce-form__label woocommerce-form__label-for-checkbox checkbox" data-toggle="collapse" data-target="#createLogin" aria-controls="createLogin">
                                                        <input type="checkbox" value="1" name="createaccount" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                        <span>Create an account?</span>
                                                    </label>
                                                </p>
                                                <div class="create-account collapse" id="createLogin">
                                                    <p data-priority="" id="account_password_field" class="form-row validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                        <label class="" for="account_password">Account password
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="password" value="" placeholder="Password" id="account_password" name="account_password" class="input-text ">
                                                    </p>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <!-- .woocommerce-account-fields -->
                                        </div>
                                        <!-- .col-1 -->
                                        <div class="col-2">
                                            
                                            <!-- .woocommerce-shipping-fields -->
                                            <div class="woocommerce-additional-fields">
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p id="order_comments_field" class="form-row notes">
                                                        <label class="" for="order_comments">Order notes</label>
                                                        <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea>
                                                    </p>
                                                </div>
                                                <!-- .woocommerce-additional-fields__field-wrapper-->
                                            </div>
                                            <!-- .woocommerce-additional-fields -->
                                        </div>
                                        <!-- .col-2 -->
                                    </div>
                                    <!-- .col2-set -->
                                    <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                    <div class="woocommerce-checkout-review-order" id="order_review">
                                        <div class="order-review-wrapper">
                                            <h3 class="order_review_heading">Your Order</h3>
                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 ×</strong> 55" KU6470 6 Series UHD Crystal Colour HDR Smart TV&nbsp;
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">£</span>627.99</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 ×</strong> 4K Action Cam GPS&nbsp;
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">£</span>219.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 ×</strong> Bluetooth on-ear PureBass Headphones&nbsp;
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">£</span>99.95</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 ×</strong> Band Fitbit Flex&nbsp;
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">£</span>17.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>Giảm giá</th>
                                                        <td>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">£</span>963.94</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Tổng</th>
                                                        <td>
                                                            <strong>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">£</span>963.94</span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <!-- /.woocommerce-checkout-review-order-table -->
                                            <div class="woocommerce-checkout-payment" id="payment">
                                                <ul class="wc_payment_methods payment_methods methods">
                                                    <li class="wc_payment_method payment_method_bacs">
                                                        <input type="radio" data-order_button_text="" checked="checked" value="1" name="pttt" class="input-radio" id="payment_method_bacs">
                                                        <label for="payment_method_bacs">Thanh toán bằng tiền mặt</label>
                                                        
                                                    </li>
                                                    <li class="wc_payment_method payment_method_cheque">
                                                        <input type="radio" data-order_button_text="" value="2" name="pttt" class="input-radio" id="payment_method_cheque">
                                                        <label for="payment_method_cheque">Thanh toán bằng ví điện tử </label>
                                                        
                                                    </li>
                                                    <li class="wc_payment_method payment_method_cod">
                                                        <input type="radio" data-order_button_text="" value="3" name="pttt" class="input-radio" id="payment_method_cod">
                                                        <label for="payment_method_cod">Thanh toán bằng tài khoản ngân hàng </label>
                                                        
                                                    </li>
                                                </ul>
                                                <div class="form-row place-order">
                                                    <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                            <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                            <span>Tôi đã đọc và chấp nhận các  <a class="woocommerce-terms-and-conditions-link" href="terms-and-conditions.html">điều khoản &amp;  điều kiện </a></span>
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="hidden" value="1" name="terms-field">
                                                    </p>
                                                    <a href="order-received.html" class="button wc-forward text-center"><input type="submit" value="Thanh Toán" name="thanhtoan"></a>
                                                </div>
                                            </div>
                                            <!-- /.woocommerce-checkout-payment -->
                                        </div>
                                        <!-- /.order-review-wrapper -->
                                    </div>
                                    <!-- .woocommerce-checkout-review-order -->
                                </form>
                                <!-- .woocommerce-checkout -->
                            </div>
                            <!-- .woocommerce -->
                        </div>
                        <!-- .entry-content -->
                    </div>
                    <!-- #post-## -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>