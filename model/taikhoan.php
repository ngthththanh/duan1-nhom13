<?php
function insert_taikhoan($user,$hoten, $pass, $email)
{
    $sql = "INSERT INTO taikhoan (user, hoten, pass, email) VALUES ('$user', '$hoten','$pass', '$email')";
    pdo_execute($sql);
}
function checkname($user)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "'";
    $taikhoan = pdo_query($sql);
    return $taikhoan;
}
function checkusermail($user, $email)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' OR email='" . $email . "'";
    $taikhoan = pdo_query($sql);
    return $taikhoan;
}

function checklogin($email, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE email='".$email."' AND pass='".$pass."'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
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


function sendMailPass($email, $user, $pass) {
    require '../../PHPMailer/src/Exception.php';
    require '../../PHPMailer/src/PHPMailer.php';
    require '../../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ngthththanh2003@gmail.com';                     //SMTP username
        $mail->Password   = 'ngthththanh';                    //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('ngthththanh2003@gmail.com', 'Shop Shose');
        $mail->addAddress($email, $user);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New password';
        $mail->Body    = 'Your new password is: ' .$pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
