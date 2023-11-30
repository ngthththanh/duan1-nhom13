<div  id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách đơn hàng</h1>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Danh sách đơn hàng
                </div>
                <div class="card-body">

                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Hình</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Hình</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($listhoadon as $bill)
                                extract($bill);
                            echo
                            '<tr>
                                <td>' . $id . '</td>
                                <td>' . $tensp . '</td>
                                <td><img src="../uploads/' . $img . '" alt="" width="80"></td>
                                <td>' . $soluong . '<td>
                                <td>' . $dongia . '</td>
                                <td>Đợi xử </td>
                            </tr>';
                            ?>
                            <!-- Thêm các dòng dữ liệu khác tại đây -->
                        </tbody>
                    </table>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </div>
        </div>
    </main>