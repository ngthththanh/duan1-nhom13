<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli("localhost", "username", "password", "demo");
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Xử lý tải lên hình ảnh
if (isset($_POST['submit'])) {
    $ten_san_pham = $_POST['ten_san_pham'];
    $mo_ta = $_POST['mo_ta'];
    
    $sql = "INSERT INTO san_pham (ten, mo_ta) VALUES ('$ten_san_pham', '$mo_ta')";
    if ($conn->query($sql) === TRUE) {
        $san_pham_id = $conn->insert_id;

        if (!empty($_FILES['hinh_anh']['name'])) {
            $target_dir = "uploads/";
            $ten_hinh = basename($_FILES['hinh_anh']['name']);
            $target_path = $target_dir . $ten_hinh;

            if (move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $target_path)) {
                $sql = "INSERT INTO hinh_anh (san_pham_id, ten_hinh) VALUES ($san_pham_id, '$ten_hinh')";
                $conn->query($sql);
            }
        }
    }
}

// Đóng kết nối
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tải lên hình ảnh cho sản phẩm</title>
</head>
<body>
    <h1>Tải lên hình ảnh cho sản phẩm</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="ten_san_pham">Tên sản phẩm:</label>
        <input type="text" name="ten_san_pham" id="ten_san_pham"><br>

        <label for="mo_ta">Mô tả:</label>
        <textarea name="mo_ta" id="mo_ta"></textarea><br>

        <label for="hinh_anh">Chọn hình ảnh:</label>
        <input type="file" name="hinh_anh" id="hinh_anh"><br>

        <input type="submit" name="submit" value="Tải lên">
    </form>
</body>
</html>
