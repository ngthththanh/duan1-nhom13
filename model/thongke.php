<?php
function load_thongke_sanpham_danhmuc()
{
    $sql = "SELECT dm.id_dm, dm.ten_dm, COUNT(*) 'soluong', MIN(gia_sp) 'gia_min', MAX(gia_sp) 'gia_max', AVG(gia_sp) 'gia_avg' FROM danhmuc dm JOIN sanpham sp ON dm.id_dm=sp.id_dm GROUP BY dm.id_dm, dm.ten_dm ORDER BY soluong DESC";
    return pdo_query($sql);
}
function thongkespbanchay($bd,$kt){
    $sql="SELECT
    sanpham.id_sp,
    sanpham.ten_sp,
    sanpham.hinh,
    COUNT(*) as soluong,
    sanpham.gia_sp
  FROM
    tbl_cart
    JOIN `tbl_order`ON tbl_order.id =tbl_cart.iddh
    JOIN sanpham ON sanpham.id_sp = tbl_cart.idpro
  WHERE
    ngaybinhdathang BETWEEN '" . $bd . "' AND '" . $kt . "' 
  GROUP BY sanpham.id_sp, sanpham.ten_sp 
  ORDER BY `soluong` desc;
";
  return pdo_query($sql);
}
function doanhthu(){
  $sql="SELECT
  MONTH(ngaybinhdathang) as thang,
  SUM(tbl_order.tongdonhang) as total
FROM
tbl_cart join tbl_order on tbl_order.id=tbl_cart.iddh
WHERE
  YEAR(ngaybinhdathang) = 2023
GROUP BY thang
ORDER BY thang;";
  return pdo_query($sql);
}

