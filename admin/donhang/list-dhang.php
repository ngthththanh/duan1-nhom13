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
                                    <th>Sản phẩm</th>
                                    <th>Hình Sản Phẩm</th>
                                    <th>Đơn Giá</th>
                                    <th>Trạng Thái</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Sản phẩm</th>
                                    <th>Hình Sản Phẩm</th>
                                    <th>Đơn Giá</th>
                                    <th>Trạng Thái</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($listhoadon as $bill) {
                                    extract($bill);
                                    echo
                                    '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>' . $id . '</td>
                                        <td>' . $tensp . ' </td>
                                        <td><img src="../uploads/' . $img . '" alt="" width="80"></td>
                                        <td>' . $soluong . '</td>
                                        <td>' . $dongia . '</td>
                                            <td></td>                              
                                    </tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>