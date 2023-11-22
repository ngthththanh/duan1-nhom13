<?php 
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/cart.php";
    $dsdm = loadall_danhmuc(); 
    include "header.php";
    include "../global.php";
    
    $sphome = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    $dmft = loadall_danhmuc_footer();
    $allsp = loadall_sanpham();
    $dstop10 = loadall_sanpham_top10();
if(isset($_GET['act'])&&($_GET['act']!="")){
     $act=$_GET['act'];
     switch($act){
          case "home":
               include "home.php";
               break;
           case 'sanpham':
               if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                   $kyw = $_POST['kyw'];
               } else {
                   $kyw = "";
               }
               
               if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                   $iddm = $_GET['iddm'];
               } else {
                   $iddm = 0;
               }
               
               $dssp = loadall_sanpham($kyw, $iddm);
               $ten_dm = load_ten_dm($iddm);
               
               include "sanpham.php";
               
               break; 
          case "chitietsp":         
               if(isset($_POST['guibinhluan'])){
                    insert_binhluan($_POST['id_sp'], $_POST['noidung']);
                }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $onesanpham = loadone_sanpham($_GET['idsp']);
                    extract($onesanpham);
                    $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $onesanpham['id_dm']);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    $sobinhluan = sobl($_GET['idsp']);
                    $id_sp = $_GET['idsp'];
                    include "chitietsp.php";
                }else{
                    include "shared/404.php";            
                }
               break;
          case 'dangki':
               if (isset($_POST['register']) && ($_POST['register'])) {
                    $user = $_POST['username'];
                    $hoten = $_POST['hoten'];
                    $pass = $_POST['password'];
                    $email = $_POST['email'];
                    
                    // Kiểm tra xem tên người dùng hoặc email đã tồn tại trong cơ sở dữ liệu chưa
                    // $existingUser = checkname($user);
                    // $existingEmail = checkmail($email);
                    
                    // if ($existingEmail) {
                    //      echo "Lỗi: Email đã tồn tại!";
                    // }else  if ($existingUser) {
                    //      echo "Lỗi: Tên người dùng đã tồn tại!";
                    // }
                    if (checkusermail($user, $email)) {
                         echo '<script>alert("Tài khoản hoặc tên ngừi dùng đã tồn tại");</script>';
                    } 
                    else {
                    // Tiếp tục với logic đăng ký
                    insert_taikhoan($user, $hoten, $pass, $email);
                    echo '<script>alert("Đăng kí thành công");</script>';
                    echo "<script>window.location.href='index.php?act=login';</script>";
                    }
               }
               include "login/login-and-register.php";
               break;
          
          case "login":
               if (isset($_POST['login'])) {
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    $checkuser = checkuser($user, $pass);
                    if (is_array($checkuser)) {
                         $_SESSION['username'] = $checkuser;
                         echo '<script>alert("Đăng nhập thành công");</script>';
                         // header('Location:index.php?act=home');
                         echo "<script>window.location.href='index.php?act=home';</script>";
                    } else {
                         echo '<script>alert("Tài khoản không tồn tại");</script>';
                    }
               }
               include "login/login-and-register.php";
               break;
               case "quenmk":
                    if (isset($_POST['guiemail'])) {
                        $email = $_POST['email'];
                        $sendMailMess = sendMail($email);
                    }
                    include "login/login-and-register.php";
               break;
          case 'updatetk':
               if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $user = $_POST['username'];
                    $hoten = $_POST['hoten']; 
                    $pass = $_POST['password'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['diachi'];
                    $taikhoan = update_taikhoan($id, $user,$hoten,$email, $pass, $sdt, $diachi);
                    echo '<script>alert("Cập nhật thành công vui lòng đăng nhập lại");</script>';
                    // unset($_SESSION['username']);
                    // echo "<script>window.location.href='index.php?act=login';</script>";
               }
               include "login/updatetk.php";
               break;
          case "thoat":
               if (isset($_SESSION['username'])) {
                    unset($_SESSION['username']);
               }
               break;
          case "shop":
               include "shop.php";
               break;
          case "gioithieu":
               include "shared/gioithieu.php";
               break;
          case "lienhe":
               include "shared/lienhe.php";
               break;
          case "yeuthich":
               include "shared/danhsachyeuthich.php";
          break;      
          case "giohang":
               include "./cart/giohang.php";
               break;
          case "theodoi":
               include "./cart/theodoidonhang.php";
               break;
          case "404":
               include "./shared/404.php";
               break;
          case "cauhoi":
               include "./shared/cauhoi.php";
               break;
          default:
          include "./shared/cauhoi.php";
               break;
          }
     
}else{
     include "home.php";
}
include "footer.php";
?>