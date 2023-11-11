<?php 
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/cart.php"; 
    include "header.php";

    include "global.php";
    $sphome = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    $allsp = loadall_sanpham();
//     $dstop10 = loadall_sanpham_top10();
if(isset($_GET['act'])&&($_GET['act']!="")){
     $act=$_GET['act'];
     switch($act){
          case "home":
               include "home.php";
               break;
          case "chitietsp":
               // if(isset($_POST['guibinhluan'])){
               //      insert_binhluan($_POST['id_pro'], $_POST['noidung']);
               //  }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $onesanpham = loadone_sanpham($_GET['idsp']);
                    extract($onesanpham);
                    // $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $onesanpham['id_dmuc']);
                    // $binhluan = loadall_binhluan($_GET['idsp']);
                    $id_sp = $_GET['idsp'];
                    include "view/chitietsp.php";
                }else{
                    include "shared/404.php";            
                }
                break;
          case "gioithieu":
               include "gioithieu.php";
               break;
          case "lienhe":
               include "lienhe.php";
               break;
          case "yeuthich":
               include "danhsachyeuthich.php";
          break;

          case "login":
               include "./login/login.php";
               break;

          case "product-category":
               include "product-category.php";
               break;
          case "giohang":
               include "./cart/giohang.php";
               break;
          case "theodoi":
               include "./cart/theodoidonhang.php";
               break;
     

          }
     
}else{
     include "home.php";
}
include "footer.php";
?>