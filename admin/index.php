<?php 
include "header.php";
if(isset($_GET['act'])&&($_GET['act']!="")){
     $act=$_GET['act'];
     switch($act){
          case "add-dm":
               include "danhmuc/add-dmuc.php";
               break;
          case "list-dm":
               include "danhmuc/list-dmuc.php";
               break;
          case "add-sp":
               include "sanpham/add-spham.php";
               break;
          case "list-sp":
               include "sanpham/list-spham.php";
               break;
          case "chart":
               include "chart.php";
               break;
         case "home":
             include "home.php";
             break;
     
          }
     
}else{
     include "home.php";
}
include "footer.php";
?>