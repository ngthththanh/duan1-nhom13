<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách bình luận</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="?act=binhluan">Thêm sản phẩm</a></li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Danh sách bình luận
                </div>
                <form action="#" method="post">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Sản phẩm</th>
                                    <th>Tài khoản</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Ngày bình luận</th>                     
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Sản phẩm </th>
                                    <th>Tài khoản</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Ngày bình luận</th>                     
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($listbinhluan as $binhluan) {
                                    extract($binhluan);
                                    $suasp="index.php?act=sua-sp&id=".$id_bl;
                                    $xoabl="index.php?act=xoabl&id=".$id_bl;

                                    // $hinhpath ="../uploads/".$hinh;
                                    // if (is_file($hinhpath)) {
                                    //     $hinhsp = "<img src='".$hinhpath."' width=80px'>";
                                    // } else {
                                    //     $hinhsp = "Không có hình";
                                    // }
                                    echo 
                                    '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id_bl.'</td>
                                        <td>'.$ten_sp.' </td>
                                        <td>'.$user.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        <td>
                                        <a href="' . $suasp . '">
                                            <button type="button" class="btn btn-primary">Sửa</button>
                                        </a>
                                        <a href="' . $xoasp . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');">
                                            <button type="button" class="btn btn-primary">Xóa</button>
                                        </a>
                                    </td>                                    </tr>';
}?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>
    