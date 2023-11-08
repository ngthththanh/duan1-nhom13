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
               if (isset($_POST['themmoi'])) {
                    $tendm = $_POST['tendm'];
                    insert_danhmuc($tendm);
                    $thongbao='<script>
                    var thongbao = new Object();
                    thongbao.name = "Bạn đã thêm danh mục thành công.";
               
                    thongbao.intro = function() {
                    alert("Bạn đã thêm danh mục thành công");
                    }     
                    thongbao.intro();
                    </script>';
               // echo "<script>window.location.href='index.php?act=list-dm';</script>";
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
                    $danhmuc = loadone_danhmuc($_GET['id']);
               }
               include "danhmuc/update-dmuc.php";
          break;
          case'update-dm':
               if(isset($_POST['capnhat'])){
                    $tendm=$_POST['tendm'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tendm);
               }
               $listdanhmuc=loadall_danhmuc();
               include "danhmuc/list-dmuc.php";
               break;

          case "add-sp":
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/add-spham.php";
               if(isset($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    $mota=$_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                    // echo "Sorry, there was an error uploading your file.";
                    };
                    insert_sanpham($tensp,$giasp,$hinh,$size, $soluong,$mota,$iddm);
                    $thongbao = '<script>
                    var thongbao = new Object();
                    thongbao.name = "Bạn đã thêm sản phẩm thành công.";
        
                    thongbao.intro = function() {
                        alert("Bạn đã thêm sản phẩm thành công.");
                    }
                    thongbao.intro();
                </script>';
                    // header("Location: index.php?act=list-sp");
                    // echo "<script>window.location.href='index.php?act=list-sp';</script>";
               }  
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

          case'xoa-sp':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
               }
               $listsanpham=loadall_sanpham("",0);
               include "sanpham/list-spham.php";
               break;
          case'sua-sp':
          if(isset($_GET['id'])&&($_GET['id']>0)){
               $sanpham=loadone_sanpham($_GET['id']);

          }
          // $listsanpham = loadall_sanpham();
          $listdanhmuc=loadall_danhmuc();
          include "sanpham/update-spham.php";
          break;
          case 'update-sp':
               if (isset($_POST['capnhat'])) {
                   $iddm = $_POST['iddm'];
                   $tensp = $_POST['tensp'];
                   $hinh = $_FILES['hinh']['name'];
                   $giasp = $_POST['giasp'];
                   $size = $_POST['size'];
                   $soluong = $_POST['soluong'];
                   $mota = $_POST['mota'];
                   $id = $_POST['id'];
                   $target_dir = "../uploads/";
                   $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                   if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                   } else {
                   }
                   $listsanpham = update_sanpham($id, $tensp, $iddm, $giasp, $size, $soluong, $mota, $hinh);
                   echo $listsanpham;

               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham=loadall_sanpham();
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