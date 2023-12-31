<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách đơn hàng</h1>
            <div class="card nb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Danh sách đơn hàng
                </div>
                <form action="#" method="post">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Khách hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Trạng Thái</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Khách hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Trạng Thái</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($listhoadon as $bill) {
                                    extract($bill);
                                ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $bill['id'] ?></td>
                                        <td><?= $bill['hoten'] ?></td>
                                        <td>
                                            <?php foreach ($bill['products'] as $product) { ?>
                                                <p>Tên sản phẩm: <?= $product['tensp'] ?></p>
                                                <p>Số lượng: <?= $product['soluong'] ?></p>
                                                <p>Giá: <?= $product['dongia'] ?></p>
                                               
                                                <p>HÌnh ảnh: <img src="../uploads/<?= $product['img'] ?>" alt="" width="80"></p>
                                            <?php } ?>
                                        </td>
                                        <td>
                                        <?php foreach ($bill['products'] as $product) { ?>
                                            <p><?= $product['ngaybinhdathang'] ?></p>
                                            <?php } ?>
                                        </td>
                                        <td><?= $bill['pttt'] ?></td>
                                        <td>
                                            <select class="select-trangthai" data-id="<?= $bill['id'] ?>">
                                                <?php foreach ($tatcatrangthai as $trangthai) {  ?>
                                                    <option value="<?= $trangthai['code'] ?>" <?= $bill['trangthai'] == $trangthai['code'] ? 
                                                    'selected' : '' ?>  ><?= $trangthai['name'] ?></option>
                                                <?php } ?>
                                            </select>

                                        </td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
    <script>
        $(document.body).on('change',".select-trangthai",function (e) {
   
            var optVal = $(this).find('option:selected').val();
         var params = {
                    id: $(this).data('id'),
                    trangthai: optVal
               };
               $.post("index.php?act=suatrangthaidonhang", params, function(data, status){
                    
               });
});
</script>

