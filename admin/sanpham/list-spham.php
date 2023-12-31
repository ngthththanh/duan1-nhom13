<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách sản phẩm</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="?act=add-sp">Thêm sản phẩm</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Danh sách sản phẩm
                </div>
             
                <form action="#" method="post">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Tên </th>
                                    <th>Hình</th>
                                    <th>Giá</th>                
                                    <th>Mô tả</th>
                                    <th colspan="2">Thêm biến thể</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Hình</th>
                                    <th>Giá</th>
                                    <th>Mô Tả</th>
                                    <th colspan="2">Thêm biến thể</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $suasp="index.php?act=sua-sp&id=".$id_sp;
                                    $xoasp="index.php?act=xoa-sp&id=".$id_sp;
                                    $addkt="index.php?act=add-kthuoc&id=".$id_sp;
                                  
                                    $hinhpath ="../uploads/".$hinh;
                                    if (is_file($hinhpath)) {
                                        $hinhsp = "<img src='".$hinhpath."' width=80px'>";
                                    } else {
                                        $hinhsp = "Không có hình";
                                    }
                                    echo 
                                    '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id_sp.'</td>
                                        <td>'.$ten_sp.' </td>
                                        <td>'.$hinhsp.'</td>
                                        <td>'.number_format($gia_sp).'VND</td>        
                                        <td>'.$mota.'</td>
                                        <td><a href="'.$addkt.'"><button type="button" class="btn">Thêm kích thước</button></a></td>
                                        <td><a href="'.$suasp.'"><button type="button" class="btn">Sửa</button></a>
                                        <a href="'.$xoasp.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');"><button type="button" class="btn">Xóa</button></a></td>
                                    </tr>';
                                }?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>
    