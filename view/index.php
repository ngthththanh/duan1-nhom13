<?php
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/binhluan.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../model/bienthe.php";
include "../model/donhang.php";
$dsdm = loadall_danhmuc();
include "header.php";
include "../global.php";
$sphome = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dmft = loadall_danhmuc_footer();
$dmft2 = loadall_danhmuc_footer2();
$allsp = loadall_sanpham();
$dstop10 = loadall_sanpham_top10();
$listhoadon = loadall_hoadon();
$tatcatrangthai = [
     ['code' => 'choxuly', 'name' => 'Đang chờ xử lý '],
     ['code' => 'daxacnhan', 'name' => 'Đã xác nhận'],
     ['code' => 'dangvanchuyen', 'name' => 'Đang vận chuyển'],
     ['code' => 'hoanthanhdonhang', 'name' => 'Hoàn thành đơn hàng'],
     ['code' => 'huydonhang', 'name' => 'Hủy đơn hàng']

];
if (isset($_GET['act']) && ($_GET['act'] != "")) {
     $act = $_GET['act'];
     switch ($act) {
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
               if (isset($_POST['guibinhluan'])) {
                    insert_binhluan($_POST['id_sp'], $_POST['noidung']);
               }
               if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                    $onesanpham = loadone_sanpham($_GET['idsp']);
                    // Kiểm tra xem có dữ liệu sản phẩm và không phải là null hay không
                    if ($onesanpham !== null && is_array($onesanpham)) {
                         extract($onesanpham);
                         $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $onesanpham['id_dm']);
                         $listbinhluan = loadall_binhluan($_GET['idsp']);
                         $sobinhluan = sobl($_GET['idsp']);
                         $id_sp = $_GET['idsp'];
                         $listkthuoc = loadkthuoc_sp($id_sp);
                         include "chitietsp.php";
                    } else {
                         include "shared/404.php";
                    }
               } else {
                    include "shared/404.php";
               }
               break;
          case 'dangki':
               if (isset($_POST['register']) && ($_POST['register'])) {
                    $user = $_POST['username'];
                    $hoten = $_POST['hoten'];
                    $pass = $_POST['password'];
                    $email = $_POST['email'];

                    // Check if the email is valid
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                         echo '<script>alert("Lỗi: Email không hợp lệ!");</script>';
                         echo "<script>window.location.href='index.php?act=login';</script>";
                         exit();
                    }

                    // Check if the password contains both letters and numbers and is at least 6 characters long
                    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/', $pass)) {
                         echo '<script>alert("Lỗi: Mật khẩu phải chứa ít nhất một chữ và một số, và dài ít nhất 6 ký tự!");</script>';
                         echo "<script>window.location.href='index.php?act=login';</script>";
                         exit();
                    }

                    // Check if the username or email already exists in the database
                    if (checkusermail($user, $email)) {
                         echo '<script>alert("Lỗi: Tài khoản hoặc tên người dùng đã tồn tại!");</script>';
                         echo "<script>window.location.href='index.php?act=login';</script>";
                    } else {
                         // Check if the username contains whitespace
                         if (strpos($user, ' ') !== false) {
                              echo '<script>alert("Lỗi: Tên người dùng không được chứa khoảng trắng!");</script>';
                              echo "<script>window.location.href='index.php?act=login';</script>";
                              exit();
                         }

                         // Continue with the registration logic
                         insert_taikhoan($user, $hoten, $pass, $email);
                         echo '<script>alert("Đăng ký thành công");</script>';
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

               if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $user = $_POST['username'];
                    $hoten = $_POST['hoten'];
                    $pass = $_POST['password'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['diachi'];

                    // Kiểm tra xem email có hợp lệ không
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                         echo '<script>alert("Lỗi: Email không hợp lệ!");</script>';
                         // Có thể thêm chuyển hướng hoặc các xử lý khác tùy thuộc vào yêu cầu của bạn
                    }

                    // Kiểm tra xem số điện thoại có đúng định dạng không
                    if (!preg_match('/^0[0-9]{9}$/', $sdt)) {
                         echo '<script>alert("Lỗi: Số điện thoại không hợp lệ!");</script>';
                         // Có thể thêm chuyển hướng hoặc các xử lý khác tùy thuộc vào yêu cầu của bạn
                    }

                    // Tiếp tục với logic cập nhật tài khoản nếu không có lỗi
                    $taikhoan = update_taikhoan($id, $user, $hoten, $email, $pass, $sdt, $diachi);
                    echo '<script>alert("Cập nhật thành công, vui lòng đăng nhập lại!");</script>';
                    // unset($_SESSION['username']);
                    // echo "<script>window.location.href='index.php?act=login';</script>";
               }

               include "login/updatetk.php";
               break;
          case "thoat":
               session_unset();
               if (isset($_SESSION['username'])) {
                    unset($_SESSION['username']);
               }
               break;
          case "addcart":
               if (isset($_SESSION['username'])) {
                    if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                         $id_sp = $_POST['id'];
                         $ten_sp = $_POST['name'];
                         $hinh = $_POST['img'];
                         if (isset($_POST['soluong'])) {
                              $sl = $_POST['soluong'];
                         } else {
                              $sl = 1;
                         }
                         $fg = 0;
                         $i = 0;
                         $gia_sp = $_POST['price'];
                         $kichthuoc = $_POST['kichthuoc'];

                         foreach ($_SESSION['giohang'] as $item) {
                              if ($item[1] == $ten_sp) {
                                   if (!empty($_POST['type']) && $_POST['type'] == 'update') {
                                        $slnew = $sl;
                                   } else {
                                        $slnew = $sl + $item[4];
                                   }
                                   $_SESSION['giohang'][$i][4] = $slnew;
                                   $fg = 1;
                                   break;
                              }
                              $i++;
                         }
                         if ($fg == 0) {
                              $item = array($id_sp, $ten_sp, $hinh, $gia_sp, $sl, $kichthuoc);
                              $_SESSION['giohang'][] = $item;
                         }

                         // Khởi tạo 1 mảng con trước khi đưa vào giỏ hàng

                         header('location:index.php?act=giohang');
                    }
                    include "cart/giohang.php";
               } else {
                    echo '<script>alert("Vui lòng đăng nhập");</script>';
               }
               include "home.php";
               break;
          case "delcart":
               if (isset($_GET['i']) && ($_GET['i'] > 0)) {
                    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0))
                         array_splice($_SESSION['giohang'], $_GET['i'], 1);
               } else {
                    if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
               }
               if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                    header('location:index.php?act=giohang');
               } else {
                    header('location:index.php');
               }
               break;
          case 'thanhtoan':
               if (isset($_POST['thanhtoan'])) {
                    $tongdonhang = $_POST['tongdonhang'];
                    $hoten = $_POST['hoten'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $tell = $_POST['tel'];

                    // Kiểm tra số điện thoại
                    if (!preg_match('/^\d{10}$/', $tell)) {
                         // Định dạng số điện thoại không hợp lệ
                         echo '<script>alert("Số điện thoại không hợp lệ. Vui lòng nhập một số điện thoại có 10 chữ số.");</script>';
                         include "cart/giohang.php";
                    } else {
                         // Kiểm tra địa chỉ email
                         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              // Định dạng địa chỉ email không hợp lệ
                              echo '<script>alert("Địa chỉ email không hợp lệ. Vui lòng nhập một địa chỉ email hợp lệ.");</script>';
                              include "cart/giohang.php";
                         } else {
                              $pttt = $_POST['pttt'];

                              // Tạo mã đơn hàng
                              $madh = "shopbh" . rand(0, 999999);
                              // Tạo đơn hàng và lấy ID đơn hàng
                              $iddh = taodonhang($madh, $tongdonhang, $pttt, $hoten, $address, $email, $tell);
                              $_SESSION['iddh'] = $iddh;

                              // Thêm sản phẩm vào đơn hàng
                              if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                                   foreach ($_SESSION['giohang'] as $item) {
                                        addtocard($iddh, $item[0], $item[1], $item[2], $item[3], $item[4]);
                                   }
                                   unset($_SESSION['giohang']);
                              }

                              // Bao gồm hoadon.php
                              include "cart/hoadon.php";
                         }
                    }
               }
               break;

          case 'suatrangthaidonhang':
               if (isset($_POST['id']) && isset($_POST['trangthai'])) {
                    update_trangthai($_POST['id'], $_POST['trangthai']);
               }

               break;
          case 'insert_vnpay':
               if (isset($_POST['insert_vnpay']) && $_POST['insert_vnpay']) {
                    $vnp_Amount = $_POST['vnp_Amount'];
                    $vnp_BankCode = $_POST['vnp_BankCode'];
                    $vnp_BankTranNo = $_POST['vnp_BankTranNo'];
                    $vnp_CardType = $_POST['vnp_CardType'];
                    $vnp_OrderInfo = $_POST['vnp_OrderInfo'];
                    $vnp_PayDate = $_POST['vnp_PayDate'];
                    $vnp_ResponseCode = $_POST['vnp_ResponseCode'];
                    $vnp_TmnCode = $_POST['vnp_TmnCode'];
                    $vnp_TransactionNo = $_POST['vnp_TransactionNo'];
                    $vnp_TransactionStatus = $_POST['vnp_TransactionStatus'];
                    $vnp_TxnRef = $_POST['vnp_TxnRef'];
                    $vnp_SecureHash = $_POST['vnp_SecureHash'];
                    // bill

                    $madh = "shopbh" . rand(0, 999999);
                    $amount = $_POST['amount'];
                    $hoten = $_POST['hoten'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    // $tell = $_POST['tel'];
                    $iddh = taodonhang($madh, $amount, 'VNPAY', $hoten, $address, $email, '', date('d/m/y'));
                    $_SESSION['iddh'] = $iddh;
                    if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                         foreach ($_SESSION['giohang'] as $item) {
                              addtocard($iddh, $item[0], $item[1], $item[2], $item[3], $item[4]);
                         }
                         unset($_SESSION['giohang']);
                    }
                    insert_vnpay($vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_ResponseCode, $vnp_TmnCode, $vnp_TransactionNo, $vnp_TransactionStatus, $vnp_TxnRef, $vnp_SecureHash);
                    header('location: ./index.php?act=dathang');
               }
               break;
          case "dathang":
               include "cart/thongtindonhang.php";
               break;
          case "ttdh":
               include "cart/thongtindonhang.php";
               break;
          case 'xoa-dh':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_donhang($_GET['id']);
               }
               $listhoadon = loadall_hoadon();
               include "cart/thongtindonhang.php";
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
               include "cart/giohang.php";
               break;
          case "theodoi":
               include "cart/theodoidonhang.php";
               break;
          case "404":
               include "shared/404.php";
               break;
          case "cauhoi":
               include "shared/cauhoi.php";
               break;
          default:
               include "shared/cauhoi.php";
               break;
     }
} else {
     include "home.php";
}
include "footer.php";
