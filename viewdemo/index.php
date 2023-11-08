<?php 
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/cart.php"; 
    include "header.php";
    include "assets/global.php";
    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    $allsp = loadall_sanpham();
    $dstop10 = loadall_sanpham_top10();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "sanphamdm":
                include "view/sanphamdm.php";
                break;
                case "dmsanpham":
                    include "view/dmsanpham.php";
                    break;
            case "sanpham":
                if(isset($_POST['kyw']) && $_POST['kyw']!=""){
                    $kyw = $_POST['kyw'];

                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm= $_GET['iddm'];
                   
                }else{
                    $iddm=0;
                     
                }
                $dssp = loadall_sanpham($kyw, $iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            case "sanphamct":
                if(isset($_POST['guibinhluan'])){
                    insert_binhluan($_POST['id_pro'], $_POST['noidung']);
                }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $onesanpham = loadone_sanpham($_GET['idsp']);
                    extract($onesanpham);
                    $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $onesanpham['id_dmuc']);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    $id_pro = $_GET['idsp'];
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";            
                }
                break;
                // case 'xoabl';
                // if (isset($_SESSION['user_name'])) {
                
                //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //         delete_binhluan($_GET['id']);
                //     }
                // }  
                // header("Location: index.php?act=sanphamct");              
                // break;
            case "dangki":
                if(isset($_POST['dangki']) && ($_POST['dangki']!="")&& !empty($_POST['email']) && !empty($_POST['user']) && !empty($_POST['pass'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    insert_taikhoan($email, $user,$pass);
                    $thongbaodk = "Đăng kí thành công";
                    header("Location: index.php");
                } else {
                    $thongbaodk = "Đăng kí không thành công";
                }
            include "view/login/dangki.php";
            break;
            case "dangnhap": 
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $user = $_POST['user']; 
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user,$pass); 
                    if(is_array($checkuser)){
                        $_SESSION['user_name'] = $checkuser;
                        $thongbaodn = "Đăng nhập thành công";
                        header("Location:index.php");
                    }else{
                        $thongbaodn = "Đăng nhập không thành công";
                    }
                }
                include "view/home.php";
                break;
                break;
            case 'suatk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $khachhang=loadone_khachhang($_GET['id']);
                    }
                    include "view/login/update.php";
                    break;
            case "updatetk":
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $user_name = $_POST['user']; 
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $tel = $_POST['tel'];
                        $address = $_POST['address'];
                        $id = $_POST['id'];
                        $taikhoan = update_taikhoan($id,$user_name,$email,$pass,$tel, $address);
                        unset($_SESSION['user_name']);
                        header("Location:index.php");
                }
                include "view/login/update.php";
                break;
            case "dangxuat":
                if (isset($_SESSION['user_name'])) {
                    unset($_SESSION['user_name']);
                }
                include "view/home.php";
                break;
            case "quenmk":
                if (isset($_POST['guiemail']) && $_POST['guiemail']) {
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                        if(is_array($checkemail)){
                        $thongbaomk = "Tên đăng nhập của bạn là:".$checkemail['user_name']."<br>"."Mật khẩu của bạn là: ".$checkemail['pass'];
                    
                        }else{
                        $thongbaomk = "Email không tồn tại";
                        }
                }
                include "view/login/quenmk.php";
                break;
            case "viewcart":
                include "view/cart/viewcart.php";
                break;
            case "addtocart":
                if (isset($_POST['addtocart']) && $_POST['addtocart']){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $img = $_POST['img'];
                    $soluong = 1;
                    $ttien= $soluong * $price;
                    $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                    array_push($_SESSION['mycart'],$spadd);             
                }
                include "view/cart/viewcart.php";
                break;
            case 'delcart':
                if (isset($_GET['idcart'])) {
                    $idcart = $_GET['idcart'];
                    // Tạo một giỏ hàng mới và chỉ bao gồm các sản phẩm không bị xóa
                    $newCart = [];
                    foreach ($_SESSION['mycart'] as $key => $cart) {
                        if ($key != $idcart) {
                            $newCart[] = $cart;
                        }
                    }
                    // Gán giỏ hàng mới cho $_SESSION['mycart']
                    $_SESSION['mycart'] = $newCart;
                } else {
                    $_SESSION['mycart'] = [];
                }
                header("Location: index.php?act=viewcart");
                break;
            case "bill":
                include "view/cart/bill.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>