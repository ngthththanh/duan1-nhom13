<?php
function insert_danhmuc($tendm){
    $sql="INSERT INTO danhmuc(ten_dm) VALUES('$tendm')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM danhmuc WHERE id_dm=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="SELECT * FROM danhmuc ORDER BY id_dm desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="SELECT * FROM danhmuc WHERE id_dm=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tendm){
    $sql = "UPDATE danhmuc SET ten_dm = '" . $tendm . "' WHERE id_dm = " . $id;
    pdo_execute($sql);
}

function load_ten_dm($iddm){
    if($iddm>0){
        $sql="SELECT * FROM danhmuc WHERE id_dm =".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $ten_dm;
    }else{
        return "";
    }
}

?>