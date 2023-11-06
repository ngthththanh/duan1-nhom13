<?php 
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/thongke.php";
include "../model/binhluan.php";

if(isset($_GET['act'])&&($_GET['act']!="")){
     $act=$_GET['act'];
     switch($act){
          case "add-dm":
               if (isset($_POST['themmoi']) && !empty($_POST['tendm'])) {
                    $tendm = $_POST['tendm'];
                    $result = insert_danhmuc($tendm);
                    if ($result) {
                         
                         header('Location: index.php?act=list-dm');
                         exit;
                    } 
                    // else {
                    //     $error_message = "Failed to insert the category.";
                    // }
               }
               include "danhmuc/add-dmuc.php";
               break;
          case "list-dm":
               $listdanhmuc=loadall_danhmuc();
               include "danhmuc/list-dmuc.php";
               break;
          case'xoa-dm':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
               }
               $listdanhmuc=loadall_danhmuc();
               include "danhmuc/list-dmuc.php";
               break;
          case'sua-dm':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                    $danhmuc=loadone_danhmuc($_GET['id']);
               }
               include "danhmuc/update-dmuc.php";
          break;
          case'update-dm':
               if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tendmuc=$_POST['tendmuc'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tendmuc);
                    $thongbao="cap nhat thanh cong";
               }
               $listdanhmuc=loadall_danhmuc();
               include "danhmuc/list-dmuc.php";
               break;



          case "add-sp":
                           // kieem tra nguoi dung cos click vao add hay ko//
               if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                    // echo "Sorry, there was an error uploading your file.";
                    };
               insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
               $thongbao="Thêm thành công";
               header("Location:index.php?act=list-sp");
               }
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/add-spham.php";
           break;
          case'list-sp':
               if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
               }else{
                    $kyw ='';
                    $iddm = 0;
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham=loadall_sanpham($kyw, $iddm);
               include "sanpham/list-spham.php";
               break;



          
           case'list-tk':
               $listtaikhoan=loadall_taikhoan();
               include "taikhoan/list-tkhoan.php";
               break;
          case 'xoatk':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
               }
               $listkhachhang=loadall_taikhoan("",0);
               include "khachhang/list.php";
               break;
               case 'suatk':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                    $khachhang=loadone_khachhang($_GET['id']);
               }
               include "khachhang/update.php";
               break;
     
               case'updatetk':
               if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
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