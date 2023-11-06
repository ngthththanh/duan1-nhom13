<?php 
    function loadall_binhluan($id){
        $sql = " SELECT binhluan.id, binhluan.noidung, taikhoan.user_name, binhluan.ngaybinhluan, sanpham.pro_name FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.user_id = taikhoan.user_id
            LEFT JOIN sanpham ON binhluan.pro_id = sanpham.pro_id
            WHERE  sanpham.pro_id = $id";     
            $sql .= " GROUP BY binhluan.id
                    ORDER BY binhluan.id DESC";
            
        $listbinhluan =  pdo_query($sql);
        return $listbinhluan;
    }
    function insert_binhluan($idpro, $noidung){
        $date = date('Y-m-d');
        $id_user = $_SESSION['user_name']['user_id'];
        $sql = " INSERT INTO `binhluan`(`noidung`, `user_id`, `pro_id`, `ngaybinhluan`) 
            VALUES ('$noidung','$id_user','$idpro','$date');
        ";
        
        pdo_execute($sql);
    }
    function delete_binhluan($id){
        $sql="DELETE FROM binhluan WHERE id=".$id;
        pdo_execute($sql);
    }
    function load_binhluan(){
        $sql = " SELECT binhluan.id, binhluan.noidung, taikhoan.user_name, binhluan.ngaybinhluan, sanpham.pro_name FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.user_id = taikhoan.user_id
            LEFT JOIN sanpham ON binhluan.pro_id = sanpham.pro_id
            WHERE  1";     
            $sql .= " GROUP BY binhluan.id
                    ORDER BY binhluan.id DESC";
            
        $listbinhluan =  pdo_query($sql);
        return $listbinhluan;
    }
?>