<?php

function taodonhang($madh,$tongdonhang,$pttt,$hoten,$address,$email,$tell){

    $conn = pdo_get_connection();
    
    $sql="INSERT INTO tbl_order(madh,tongdonhang,pttt,hoten,address,email,tell)  
    VALUES (:madh,:tongdonhang,:pttt,:hoten,:address,:email,:tell)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':madh', $madh);
    $stmt->bindParam(':tongdonhang', $tongdonhang);
    $stmt->bindParam(':pttt', $pttt);
    $stmt->bindParam(':hoten', $hoten);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tell', $tell);
    $stmt->bindParam(':tell', $tell);
    $stmt->execute();
    
    $last_id = $conn->lastInsertId();

    return $last_id;
}
function addtocard($iddh,$idpro,$tensp,$img,$dongia,$soluong){
    $sql="INSERT INTO tbl_cart(iddh,idpro,tensp,img,dongia,soluong)  
    values ('$iddh','$idpro','$tensp','$img','$dongia','$soluong')";
    pdo_execute($sql);
   
   



}
function getshowcart($iddh){

    $sql = "SELECT * FROM tbl_cart WHERE iddh = :iddh";

    $stmt = pdo_get_connection()->prepare($sql);

    $stmt->bindParam(':iddh', $iddh);

    $stmt->execute();

    $result = $stmt->fetchAll();

    return $result;

}
function getorderinfor($iddh){

    $sql = "SELECT * FROM tbl_order WHERE id = :iddh";

    $stmt = pdo_get_connection()->prepare($sql);

    $stmt->bindParam(':iddh', $iddh);

    $stmt->execute();

    $result = $stmt->fetchAll();

    return $result;

}


function loadall_bill(){
    $sql = "SELECT * FROM tbl_cart";
    $listbill=pdo_query($sql);
    return  $listbill;
}
function loadall_hoadon(){
    $sql = "SELECT * FROM tbl_cart ";
    $listhoadon=pdo_query($sql);
    return  $listhoadon;
}
?>


