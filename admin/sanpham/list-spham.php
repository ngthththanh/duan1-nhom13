

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
                                                <th>Size</th>
                                                <th>Sô Lượng</th>                     
                                                <th>Mô tả</th>
                                                <th>Lươt Xem</th>
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
                                                <th>Size</th>
                                                <th>Sô Lượng</th>
                                                <th>Mô Tả</th>
                                                <th>Lươt Xem</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach ($listsanpham as $sanpham) {
                                                extract($sanpham);
                                                $suasp="index.php?act=sua-sp&id=".$id_sp;
                                                $xoasp="index.php?act=xoa-sp&id=".$id_sp;
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
                                                    <td>'.$size.'</td>
                                                    <td>'.$soluong.'</td>
                                                    <td>'.$gia_sp.'</td>
                                                    <td>'.$mota.'</td>
                                                    <td>'.$luotxem.'</td>
                                                    <td><a href="'. $suasp.' "> <button type="button" class="btn btn-primary">Sửa</button></a> <a href="'.$xoasp.' "><button type="button" class="btn btn-primary">Xóa</button></a></td>
                                                </tr>';
                                            }?>
                                        </tbody>
                                    </table>
                                </div>
                           </form>
                        </div>
                    </div>
                </main>
               