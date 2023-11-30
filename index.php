<?php  
    session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    // header("Location:admin/index.php");
    if(isset($_SESSION['username'])){
        if($_SESSION['username']['role'] == "1"){
            header("Location:admin/index.php");
        }elseif($_SESSION['username']['role'] == "2") {
            header("Location:view/index.php");
        }
    }else {
        header("Location:view/index.php");
    }
?>