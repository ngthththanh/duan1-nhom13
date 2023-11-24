<?php
function taodonhang($madh,$tongdonhang,$pttt,$hoten,$address,$email,$tel){
    $sql="INSERT INTO tbl_order(madh,tongdh,pttt,hoten,address,email,tel) VALUES ('$madh','$tongdonhang', '$pttt', '$hoten', '$address','$email','$tel')";
  return pdo_execute_return_lastInsertId($sql);
}

?>