<?php
function insert_taikhoan($user,$hoten, $pass, $email)
{
    $sql = "INSERT INTO taikhoan (user, hoten, pass, email) VALUES ('$user', '$hoten','$pass', '$email')";
    pdo_execute($sql);
}
// function checkuser($user, $pass)
// {
//     $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
//     $taikhoan = pdo_query_one($sql);
//     return $taikhoan;
// }
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='$user' AND pass='$pass'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}



function update_taikhoan($id, $user,$hoten,$email, $pass, $sdt, $diachi)
{
    $sql = "UPDATE taikhoan SET user='" . $user . "', hoten = '".$hoten."', pass='" . $pass . "', email='" . $email . "', sdt='" . $sdt . "', diachi='" . $diachi . "' WHERE  id_tk=" . $id;
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email = '" . $email . "'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id_tk desc";
    $listkhachhang = pdo_query($sql);
    return $listkhachhang;
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id_tk=" . $id;
    pdo_execute($sql);
}
function loadone_khachhang($id)
{
    $sql = "SELECT * FROM taikhoan WHERE id_tk=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
