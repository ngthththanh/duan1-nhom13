<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách đơn hàng</h1>
            <div class="card mb-4">
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
                                    <th>Khach hang</th>
                                    <th>Sản phẩm</th>
                                    <th>Trạng Thái</th>
                                    <th>Hủy đơn hàng</th>
                                    <th></th>
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
                                            <p><?= $bill['trangthai'] ?></p>

                                        </td>
                                        <td>
                                        <a href="<?=$xoadn?>" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng không')">
                                            <button type="button" class="btn">Hủy Đơn Hàng</button>
                                        </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>
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