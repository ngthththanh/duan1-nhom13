<?php
function load_thongke_sanpham_danhmuc()
{
    $sql = "SELECT dm.id_dmuc, dm.name, COUNT(*) 'soluong', MIN(price) 'gia_min', MAX(price) 'gia_max', AVG(price) 'gia_avg' FROM danhmuc dm JOIN sanpham sp ON dm.id_dmuc=sp.id_dmuc GROUP BY dm.id_dmuc, dm.name ORDER BY soluong DESC";
    return pdo_query($sql);
}
