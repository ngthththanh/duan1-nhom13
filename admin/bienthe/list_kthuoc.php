<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách kích thước</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="?act=add-kthuoc">Thêm kích thước</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Danh sách kích thước
                </div>
                <form action="#" method="post">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Tên sản phẩm </th>
                                    <th>Kích thước</th>
                                    <th>Số lượng</th>                
                        
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Kích thước</th>
                                    <th>Số lượng</th>
                        
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($listkichthuoc as $kichthuoc) {
                                    extract($kichthuoc);
                                    $suakt="index.php?act=sua-kt&id=".$id;
                                    $xoakt="index.php?act=xoa-kt&id=".$id;
                                    echo 
                                    '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$ten_sp.' </td>
                                        <td>'.$ten.'</td>
                                        <td>'.$so_luong.'</td>        
                                        <td><a href="'.$suakt.'"><button type="button" class="btn">Sửa</button></a>
                                        <a href="'.$xoakt.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');"><button type="button" class="btn">Xóa</button></a></td>
                                    </tr>';
                                }?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>
    