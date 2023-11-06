
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách tài khoản</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Danh sách tài khoản
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID Tài Khoản</th>
                                <th>Tên Tài Khoản</th>
                                <th>Số Điện Thoại</th>
                                <th>Email</th>
                                <th>Mật Khẩu</th>
                                <th>Địa Chỉ</th>
                                <th>Vai Trò</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>ID Tài Khoản</th>
                                <th>Tên Tài Khoản</th>
                                <th>Số Điện Thoại</th>
                                <th>Email</th>
                                <th>Mật Khẩu</th>
                                <th>Địa Chỉ</th>
                                <th>Vai Trò</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
                                $suatk="index.php?act=suatk&id=".$id_tk;
                                $xoatk="index.php?act=xoatk&id=".$id_tk;
                                # code...
                                echo
                                    '<tr>
                                        <td> <input type="checkbox" name="" id=""></td>
                                        <td>'.$id_tk.'</td>
                                        <td>'.$ten_tk.' </td>                  
                                        <td>'.$sdt.' </td>
                                        <td>'.$email.' </td>
                                        <td>'.$pass.' </td>
                                        <td>'.$diachi.' </td>
                                        <td>'.$vaitro.' </td>
                                        <td> <a href="'.$xoatk.' "><button type="button" class="btn btn-primary">Xóa</button></a></td>
                                    </tr>';
                            }?>   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    