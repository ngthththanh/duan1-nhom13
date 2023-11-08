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
               include "chitietsp.php";
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