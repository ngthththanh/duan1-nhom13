<?php
function insert_taikhoan($user, $hoten, $pass, $email)
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
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "' AND pass='" . $pass . "'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function update_taikhoan($id, $hoten, $email, $pass, $sdt, $diachi)
{
    
  
        $sql = "UPDATE taikhoan SET hoten = '" . $hoten . "', pass='" . $pass . "', email='" . $email . "', sdt='" . $sdt . "', diachi='" . $diachi . "' WHERE  id_tk= ".$id;

    
    pdo_execute($sql);
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
function sendMail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);

        return "Gửi email thành công";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}

function sendMailPass($email, $username, $pass)
{
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                                      //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '8e09add39ff510';                     //SMTP username
        $mail->Password   = 'b1fb76b89919fb';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('duanmau@example.com', 'DuAnMau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Người dùng quên mật khẩu';
        $mail->Body    = 'Mật khẩu của bạn là: ' . $pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
