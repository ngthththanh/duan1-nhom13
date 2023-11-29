<?php
function loadall_sanpham_home(){
    $sql="SELECT * FROM sanpham WHERE 1 ORDER BY id_sp desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}function loadall_sanpham_count()
{
    $sql = "SELECT COUNT(*) as total FROM sanpham";
    $result = pdo_query_one($sql);

    return $result['total'];
}

function loadall_sanpham($kyw = "", $iddm = 0, $minPrice = null, $maxPrice = null)
{
    $sql = "SELECT sanpham.*, COUNT(binhluan.id_bl) as soBinhLuan
            FROM sanpham LEFT JOIN binhluan ON binhluan.id_sp = sanpham.id_sp WHERE 1";

    if ($kyw != "") {
        $sql .= " AND sanpham.ten_sp LIKE '%" . $kyw . "%'";
    }

    if ($iddm > 0) {
        $sql .= " AND sanpham.id_dm = '" . $iddm . "'";
    }

    // Thêm điều kiện lọc theo giá
    if ($minPrice !== null) {
        $sql .= " AND sanpham.gia >= " . $minPrice;
    }

    if ($maxPrice !== null) {
        $sql .= " AND sanpham.gia <= " . $maxPrice;
    }

    $sql .= " GROUP BY sanpham.id_sp
            ORDER BY sanpham.id_sp DESC";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function insert_sanpham($tensp, $giasp, $hinh,$mota,$iddm){
    $sql="INSERT INTO sanpham(ten_sp, gia_sp, hinh ,mota, id_dm) VALUES ('$tensp','$giasp', '$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql="DELETE FROM sanpham WHERE id_sp=".$id;
    pdo_execute($sql);
}

function loadone_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE id_sp = $id";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_sanpham($id, $tensp, $iddm, $giasp, $mota, $hinh) {
    if ($hinh != "") {
        $sql = "UPDATE sanpham SET ten_sp = '".$tensp."', id_dm = '".$iddm."', gia_sp = '".$giasp."',  mota = '".$mota."', hinh = '" .$hinh."' WHERE id_sp = ".$id;
    } else {
        $sql = "UPDATE sanpham SET ten_sp = '".$tensp."', id_dm = '".$iddm."', gia_sp = '".$giasp."',  mota = '".$mota."' WHERE id_sp = ".$id;
    }
    pdo_execute($sql);
    // return $sql;
}
function loadall_sanpham_top10(){
    $sql="SELECT * FROM  sanpham WHERE 1 ORDER BY luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_cungloai($id, $iddm){
    $sql = "SELECT * FROM  sanpham WHERE id_dm = $iddm and id_sp <> $id";
    $result = pdo_query($sql);
    return $result;
}

function danhsach_sanpham(){
    $sql = "SELECT * FROM  sanpham";
    $result = pdo_query($sql);
    return $result;
}
function oldimg($id)
{
    $sql = "SELECT hinh FROM sanpham WHERE id_sp =" . $id;
    $result = pdo_query_one($sql);

    if ($result && isset($result['hinh'])) {
        return "../uploads/" . $result['hinh'];
    }

    return null; 
}

function add_sanpham($tendm){
    $sql = "INSERT INTO sanpham (`id_sp`) VALUES ('$tendm')";
    pdo_execute($sql);
}

function phantrang($conn, $table, $limit){
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page=1;
    }
    $sql = "SELECT * FROM $table";
    $ketqua = $conn->query($sql);
    if($ketqua->num_rows>0){
        $tongsotrang = ceil($ketqua->num_rows/$limit);
    }
    if($tongsotrang>1){
        echo '<ul class="phantrang">';
        for($i=0;$i<=$tongsotrang;$i++){
            $active = ($page == $i)? "active" : "";
            echo "<li><a href='user.php?page=$i' class='$active'>$i</a></li>";
        }
        echo "</ul>";
    }
}
?>