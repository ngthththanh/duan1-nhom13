<?php
function load_thongke_sanpham_danhmuc()
{
    $sql = "SELECT dm.id_dm, dm.ten_dm, COUNT(*) 'soluong', MIN(gia_sp) 'gia_min', MAX(gia_sp) 'gia_max', AVG(gia_sp) 'gia_avg' FROM danhmuc dm JOIN sanpham sp ON dm.id_dm=sp.id_dm GROUP BY dm.id_dm, dm.ten_dm ORDER BY soluong DESC";
    return pdo_query($sql);
}
