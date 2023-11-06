<?php
function insert_taikhoan($email,$tentk,$pass){
$sql="INSERT INTO `taikhoan` ( `email`, `ten_tk`, `pass`) VALUES ( '$email', '$tentk','$pass'); ";
pdo_execute($sql);
}
function checkuser($tentk,$pass) {
$sql="SELECT * FROM taikhoan WHERE ten_tk='".$tentk."' and pass='".$pass."'";
$taikhoan = pdo_query_one($sql);
return $taikhoan;
}
function update_taikhoan($id, $tentk, $email, $pass, $sdt, $diachi){
$sql = "UPDATE taikhoan SET ten_tk='".$tentk."', pass='".$pass."', email='".$email."', sdt='".$sdt."', diachi='".$diachi."' WHERE  id_tk=".$id;
pdo_execute($sql);
}
function checkemail($email) {
$sql="SELECT * FROM taikhoan WHERE email = '".$email."'";
$taikhoan = pdo_query_one($sql);
return $taikhoan;
}
function loadall_taikhoan(){
$sql="SELECT * FROM taikhoan ORDER BY id_tk desc";
$listkhachhang=pdo_query($sql);
return $listkhachhang;
}
function delete_taikhoan($id){
$sql="DELETE FROM taikhoan WHERE id_tk=".$id;
pdo_execute($sql);
}
function loadone_khachhang($id){
$sql="SELECT * FROM taikhoan WHERE id_tk=".$id;
$dm=pdo_query_one($sql);
return $dm;
}
?>
