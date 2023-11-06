

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách danh mục</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="?act=add-dm">Thêm danh mục</a></li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Danh sách danh mục
                </div>
                <form action="#" method="post">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Tên Danh Mục</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Tên Danh Mục</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm="index.php?act=sua-dm&id=".$id_dm;
                                $xoadm="index.php?act=xoa-dm&id=".$id_dm;
                                echo 
                                '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id_dm.'</td>
                                    <td>'.$ten_dm.' </td>
                                    <td><a href="'. $suadm.' "> <button type="button" class="btn btn-primary">Sửa</button></a> <a href="'.$xoadm.' "><button type="button" class="btn btn-primary">Xóa</button></a></td>
                                </tr>';
                            }?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </main>
               