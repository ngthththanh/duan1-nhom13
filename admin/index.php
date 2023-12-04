<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username']['phanquyen'] == "2") {
     header('location:../view/index.php');
}
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/thongke.php";
include "../model/binhluan.php";
include "../model/bienthe.php";
include "../model/donhang.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
     $act = $_GET['act'];
     switch ($act) {
          case "home":
               $listdanhmuc = loadall_danhmuc();
               include "home.php";
               break;
          case "add-dm":
               if (isset($_POST['themmoi'])) {
                    $tendm = $_POST['tendm'];
                    insert_danhmuc($tendm);
                    echo '<script>alert("Bạn đã thêm danh mục thành công.");</script>';
                    // echo "<script>window.location.href='index.php?act=list-dm';</script>";
               }
               include "danhmuc/add-dmuc.php";
               break;
          case "list-dm":
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list-dmuc.php";
               break;

          case 'xoa-dm':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
               }
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list-dmuc.php";
               break;
          case 'sua-dm':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $danhmuc = loadone_danhmuc($_GET['id']);
               }
               include "danhmuc/update-dmuc.php";
               break;
          case 'update-dm':
               if (isset($_POST['capnhat'])) {
                    $tendm = $_POST['tendm'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tendm);
                    echo '<script>alert("Bạn đã cập nhật danh mục thành công.");</script>';
               }

               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list-dmuc.php";
               break;

          case "add-sp":
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/add-spham.php";
               if (isset($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $uploadOk = 1;

                    // Kiểm tra xem tệp tải lên có phải là hình ảnh không
                    $check = getimagesize($_FILES["hinh"]["tmp_name"]);
                    if ($check === false) {
                         echo '<script>alert("Tệp không phải là hình ảnh.");</script>';
                         $uploadOk = 0;
                    }

                    // Cho phép chỉ định định dạng tệp hình ảnh
                    $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
                    $uploaded_extension = strtolower(pathinfo($hinh, PATHINFO_EXTENSION));
                    if (!in_array($uploaded_extension, $allowed_extensions)) {
                         echo '<script>alert("Định dạng tệp không hợp lệ. Vui lòng tải lên một tệp hình ảnh hợp lệ.");</script>';
                         $uploadOk = 0;
                    }

                    if ($uploadOk == 0) {
                         echo '<script>alert("Xin lỗi, tệp của bạn không được tải lên.");</script>';
                    } else {
                         // Di chuyển tệp đã tải lên vào thư mục đích
                         if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                              // Tệp đã được tải lên thành công
                              // Thêm sản phẩm vào cơ sở dữ liệu
                              insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                              echo '<script>alert("Bạn đã thêm sản phẩm thành công.");</script>';
                         } else {
                              // Lỗi khi tải lên tệp
                              echo '<script>alert("Xin lỗi, có lỗi khi tải lên tệp của bạn.");</script>';
                         }
                    }
               }
               break;
          case 'list-sp':
               if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
               } else {
                    $kyw = '';
                    $iddm = 0;
               }
               $listsanpham = loadall_sanpham();
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/list-spham.php";
               break;

          case 'xoa-sp':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
               }
               $listsanpham = loadall_sanpham("", 0);
               include "sanpham/list-spham.php";
               break;
          case 'sua-sp':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
               }
               // $listsanpham = loadall_sanpham();
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/update-spham.php";
               break;
          case 'update-sp':
               if (isset($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $hinh = $_FILES['hinh']['name'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $id = $_POST['id'];
                    $oldImagePath = oldimg($id);
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         if ($oldImagePath && file_exists($oldImagePath)) {
                              unlink($oldImagePath);
                         }
                    } else {
                    }
                    $listsanpham = update_sanpham($id, $tensp, $iddm, $giasp, $mota, $hinh);
                    echo '<script>alert("Bạn đã cập nhật danh mục thành công.");</script>';
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham = loadall_sanpham();
               include "sanpham/list-spham.php";
               break;
               case 'add-kthuoc':
                    if (isset($_POST['themmoi'])) {
                         $id_sanpham = $_POST['id_sanpham'];
                         $tenkthuoc = $_POST['tenkthuoc'];
                         $slkthuoc = $_POST['slkthuoc'];
                         insert_kthuoc($id_sanpham, $tenkthuoc, $slkthuoc);
                         echo '<script>alert("Bạn đã thêm bien the kich thuoc thành công.");</script>';
                         // echo "<script>window.location.href='index.php?act=list-dm';</script>";
                    }
                    $listsanpham = loadall_sanpham();
                    include "bienthe/add-kthuoc.php";
                    break;
               case 'list-kthuoc':
                    $listkichthuoc = loadall_kichthuoc();
                    include "bienthe/list_kthuoc.php";
                    break;
               case 'sua-kt':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                         $kichthuoc = loadone_kichthuoc($_GET['id']);
                    }
                    $listsanpham = loadall_sanpham();
                    $listkichthuoc = loadall_kichthuoc();
                    include "bienthe/update-kthuoc.php";
                    break;
               case 'update-kt':
                    if (isset($_POST['capnhat'])) {
                         $idsp= $_POST['id_sanpham'];
                         $ten = $_POST['tenkthuoc'];
                         $so_luong = $_POST['slkthuoc'];
                         $id = $_POST['id'];
                         $listkichthuoc = update_kichthuoc($id, $idsp, $ten, $so_luong);
                         echo '<script>alert("Bạn đã cập nhật danh mục thành công.");</script>';
                    }
                    $listkichthuoc = loadall_kichthuoc();
                    $listsanpham = loadall_sanpham();
                    include "bienthe/list_kthuoc.php";
                    break;
     
               case 'xoa-kt':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                         delete_kichthuoc($_GET['id']);
                    }
                    $listkichthuoc = loadall_kichthuoc();
                    include "bienthe/list_kthuoc.php";
                    break;
          case 'list-tk':
               $listtaikhoan = loadall_taikhoan();
               include "taikhoan/list-tkhoan.php";
               break;
          case 'xoatk':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
               }
               $listkhachhang = loadall_taikhoan("", 0);
               include "taikhoan/list-tkhoan.php";
               break;
          case 'suatk':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $khachhang = loadone_khachhang($_GET['id']);
               }
               include "khachhang/update.php";
               break;

          case 'updatetk':
               if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $user_name = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $id = $_POST['id'];
                    $role = $_POST['role'];
                    // $tk = update_tk($id,$user_name,$email,$tel,$pass, $address,$role);
                    header("Location:index.php?act=updatetk");
               }
               include "khachhang/list.php";
               break;
          case "binhluan":
               $listbinhluan = load_binhluan(0);
               include "binhluan/list-bluan.php";
               break;
          case "list-dh":
               $listhoadon = loadall_hoadon($id);
               include "donhang/list-dhang.php";
               break;
          case 'xoabl';
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
               }
               $listbinhluan = load_binhluan(0);
               include "binhluan/list-bluan.php";
               break;
          case "home":
               include "home.php";
               break;
               //quan ly bien the
          
          case "thongke":
               $dsthongke = load_thongke_sanpham_danhmuc();
               include "thongke/list.php";
               break;
          case "chart":
               $dsthongke = load_thongke_sanpham_danhmuc();
               include "thongke/chart.php";
               break;
          print_r($dsthongke); die;
               // case 'list-kthuoc':
               //      include "kichthuoc/list-kthuoc.php";
               //      break;
     }
} else {
     include "home.php";
}

include "footer.php";
