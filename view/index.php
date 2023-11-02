<?php 
include "header.php";
if(isset($_GET['act'])&&($_GET['act']!="")){
     $act=$_GET['act'];
     switch($act){
          case "login":
               include "./login/login.php";
               break;
         case "home":
             include "home.php";
             break;
          case "product-category":
               include "product-category.php";
               break;
          case "viewcart":
               include "./cart/viewcart.php";
               break;
          case "single-product":
               include "single-product.php";
               break;
     
          case "shop":
               include "shop.php";
               break;

          }
     
}else{
     include "home.php";
}
include "footer.php";
?>