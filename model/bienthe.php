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
 function insert_msac($id_sanpham,$tenmsac, $slmsac)
 {
      $sql = "INSERT INTO mausac(id_sanpham ,ten, so_luong) VALUES('$id_sanpham','$tenmsac', '$slmsac')";
      pdo_execute($sql);
 }
 function loadmsac_sp($id_sp){
      $sql="SELECT * 
      FROM mausac
      WHERE id_sanpham = $id_sp";
      $listmsac=pdo_query($sql);
      return $listmsac;
  }
 