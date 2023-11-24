<?php
function insert_kthuoc($id_sanpham,$tenkthuoc, $slkthuoc)
{
     $sql = "INSERT INTO kich_thuoc(id_sanpham ,ten, so_luong) VALUES('$id_sanpham','$tenkthuoc', '$slkthuoc')";
     pdo_execute($sql);
}
function loadkthuoc_sp($id_sp){
     $sql="SELECT * 
     FROM kich_thuoc
     WHERE id_sanpham = $id_sp";
     $listkthuoc=pdo_query($sql);
     return $listkthuoc;
 }
