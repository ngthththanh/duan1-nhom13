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
    
    $stmt->execute();
    
    $last_id = $conn->lastInsertId();

    return $last_id;
}
function addtocard($iddh, $idpro, $tensp, $img, $dongia, $soluong) {
    // Thêm một trường thời gian để theo dõi khi nào mỗi mục được thêm vào
    $thoigianthem = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO tbl_cart (iddh, idpro, tensp, img, dongia, soluong, ngaybinhdathang)  
            VALUES ('$iddh', '$idpro', '$tensp', '$img', '$dongia', '$soluong', '$thoigianthem')";
    
    pdo_execute($sql);
}

// Ví dụ câu truy vấn SELECT với ORDER BY
$sql_select = "SELECT * FROM tbl_cart ORDER BY ngaybinhdathang DESC";
// Thực hiện câu truy vấn và hiển thị danh sách
// ...

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

function update_trangthai($id, $trangthai)
{
    $sql = "UPDATE tbl_order SET trangthai='" . $trangthai . "'" . " WHERE  id=" . $id;
    pdo_execute($sql);
}


function loadall_hoadon(){
    $sql = "SELECT * FROM tbl_order ";
    $listorder = pdo_query($sql);
    foreach ($listorder as $key => $item) {
        // Sắp xếp sản phẩm theo thời gian thêm mới nhất
        $sql = "SELECT * FROM tbl_cart WHERE iddh = " . $item['id'] . " ORDER BY ngaybinhdathang DESC";
        $listproduct = pdo_query($sql);
        $listorder[$key]['products'] = $listproduct;
    }
    return  $listorder;
}

function delete_donhang($id)
{
    $sql = "DELETE FROM tbl_order WHERE id=". $id;
    pdo_execute($sql);
}
?>


