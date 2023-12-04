<?php
function insert_kthuoc($id_sanpham, $tenkthuoc, $slkthuoc)
{
    $sql = "INSERT INTO kich_thuoc(id_sanpham ,ten, so_luong) VALUES('$id_sanpham','$tenkthuoc', '$slkthuoc')";
    pdo_execute($sql);
}
function loadkthuoc_sp($id_sp)
{
    $sql = "SELECT * 
     FROM kich_thuoc
     WHERE id_sanpham = $id_sp";
    $listkthuoc = pdo_query($sql);
    return $listkthuoc;
}
function loadall_kichthuoc()
{
    $sql = "SELECT sanpham.id_sp, sanpham.ten_sp, kich_thuoc.id_sanpham, kich_thuoc.id, kich_thuoc.ten, kich_thuoc.so_luong 
             FROM sanpham 
             LEFT JOIN kich_thuoc ON kich_thuoc.id_sanpham = sanpham.id_sp
             WHERE 
                 kich_thuoc.ten IS NOT NULL AND kich_thuoc.ten != '' AND 
                 kich_thuoc.so_luong IS NOT NULL AND kich_thuoc.so_luong != ''
             GROUP BY kich_thuoc.id
             ORDER BY sanpham.ten_sp ASC"; // Add ORDER BY clause
    $listkichthuoc = pdo_query($sql);

    return $listkichthuoc;
}


function delete_kichthuoc($id)
{
    $sql = "DELETE FROM kich_thuoc WHERE id=" . $id;
    pdo_execute($sql);
}

function loadone_kichthuoc($id)
{
    $sql = "SELECT * FROM kich_thuoc WHERE id = $id";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_kichthuoc($id, $idsp, $ten, $so_luong)
{
    $sql = "UPDATE kich_thuoc SET id_sanpham ='".$idsp."', ten = '" . $ten . "', so_luong = '" . $so_luong . "' WHERE id = " . $id;
    pdo_execute($sql);
}
