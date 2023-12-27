<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="content" class="site-content">
     <div class="col-full">
          <div class="row">
               <nav class="woocommerce-breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="delimiter">
                         <i class="tm tm-breadcrumbs-arrow-right"></i>Theo dõi đơn hàng
                    </span>

               </nav>
               <!-- .woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                         <div class="type-page hentry">
                              <header class="entry-header">
                                   <div class="page-header-caption">
                                        <h1 class="entry-title"> Theo dõi đơn hàng</h1>
                                   </div>
                              </header>
                        <!-- .entry-header -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="type-page hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <table id="datatablesSimple">
                                                <thead>
                                                    <tr>

                                                        <th style="width: 50px;">ID</th>
                                                        <th style="width: 250px;">Khách hàng</th>
                                                        <th>Sản phẩm</th>
                                                        <th style="width: 200px;">Phương thức thanh toán</th>
                                                        <th style="width: 300px;">Ngày Đặt</th>
                                                        <th style="width: 150px;">Trạng Thái</th>
                                                        <!-- <th>Hủy đơn hàng</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php 
                                                    if (isset($_SESSION['username']) ) { 
                                                               ?>
                                                                    <?php foreach ($listhoadon as $bill) {
                                                                        extract($bill);
                                                                        $xoadh = "index.php?act=xoa-dh&id=" . $bill['id'];
                                                                    ?>
                                                                        <tr>
                                                                            <td><?= $bill['id'] ?></td>
                                                                            <td><?= $bill['hoten'] ?></td>
                                                                            <td>
                                                                                <?php foreach ($bill['products'] as $product) { ?>
                                                                                    <p style="display: flex; gap:10px ;"><img src="../uploads/<?= $product['img'] ?>" alt="" width="60"><?= $product['tensp'] . 'x' . $product['soluong'] ?></p>
                                                                                <?php } ?>
                                                                            </td>
                                                                            <td>
                                                                                <p><?= $bill['pttt'] ?></p>
                                                                            </td>
                                                                            <td>
                
                                                                                <p style="display: flex; gap:10px ;"><?= $product['ngaybinhdathang'] ?></p>
                
                                                                            </td>
                                                                            <td>
                                                                                <p><?= $bill['trangthai'] ?></p>
                
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                               <?php }
                                                
                                                   ?>
                                                </tbody>
                                            </table>
                                            <!-- .track_order -->
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
        <script>
            $(document.body).on('change', ".select-trangthai", function(e) {

                var optVal = $(this).find('option:selected').val();
                var params = {
                    id: $(this).data('id'),
                    trangthai: optVal
                };
                $.post("index.php?act=suatrangthaidonhang", params, function(data, status) {

                });


            });
        </script>