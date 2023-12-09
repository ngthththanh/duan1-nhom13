<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="home-v1.html">Home</a>
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
                        <div class="entry-content">
                            <div class="woocommerce">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Khach hang</th>
                                            <th>Sản phẩm</th>
                                            <th>Phương thức thanh toán</th>
                                            <th>Trạng Thái</th>
                                            <th>Hủy đơn hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listhoadon as $bill) {
                                            extract($bill);
                                            $xoadh = "index.php?act=xoa-dh&id=" . $bill['id'];
                                        ?>
                                            <tr>
                                                <td></td>
                                                <td><?= $bill['id'] ?></td>
                                                <td><?= $bill['hoten'] ?></td>
                                                <td>
                                                    <?php foreach ($bill['products'] as $product) { ?>
                                                        <p><?= $product['tensp'] ?></p>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <p><?= $bill['pttt'] ?></p>
                                                </td>
                                                <td>
                                                    <p><?= $bill['trangthai'] ?></p>

                                                </td>
                                                <td>
                                                <select class="select-trangthai" data-id="<?= $bill['id'] ?>">
                                                <?php foreach ($tatcatrangthai as $trangthai) {  ?>
                                                    <option value="<?= $trangthai['code'] ?>" <?= $bill['trangthai'] == $trangthai['code'] ? 
                                                    'selected' : '' ?>  ><?= $trangthai['name'] ?></option>
                                                <?php } ?>
                                            </select>

                                                </td>
                                            </tr>
                                        <?php } ?>
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