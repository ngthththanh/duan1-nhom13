<?php 
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../uploads/".$hinh;
$hinhsp = (is_file($hinhpath)) ? $hinhpath : "Không có hình";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Cập nhật mới sản phẩm</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="?act=list-sp">Danh sách sản phẩm</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="index.php?act=update-sp" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="iddm">
                                <option class="option" value="0">Danh Mục Sản Phẩm</option>
                                <?php foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $s = ($id_dm == $sanpham['id_dm']) ? "selected" : "";
                                    echo '<option value="'.$id_dm.'" '.$s.'>'.$ten_dm.'</option>';
                                }?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" id="exampleInputText" name="tensp" value="<?=$ten_sp?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Giá Sản Phẩm</label>
                            <input type="text" class="form-control" id="exampleInputText" name="giasp" value="<?=$gia_sp?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Hình Ảnh Sản Phẩm</label>
                            <input type="file" class="form-control" id="exampleInputText" name="hinh" onchange="previewImage(this)">
                            <img id="imagePreview" src="<?=$hinhsp?>" alt="Image Preview" style="max-width: 100%; max-height: 200px; margin-top: 10px;">
                        </div>
                        <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Kích Cỡ Sản Phẩm</label>
                              <input type="number" class="form-control" id="exampleInputText" min="35" max="42" name="size" value="<?=$size?>">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Số Lượng Sản Phẩm</label>
                              <input type="number" class="form-control" id="exampleInputText" min="0" name="soluong"  value="<?=$soluong?>"> 
                         </div>
                         <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Mô Tả Sản Phẩm</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mota"><?=$mota?></textarea>
                         </div>
                        <input type="hidden" name="id" value="<?=$id_sp?>">
                        <button type="submit" class="btn btn-primary" name="capnhat">Submit</button>
                    </form>
                 

<!-- Your existing code to display the list of categories goes here -->

                </div>
                <?php
                         if (isset($_GET['success']) && $_GET['success'] == 1) {
                         echo '<div class="alert alert-success" role="alert">Cập nhật danh mục thành công!</div>';
                         }
                         ?>
            </div>
        </div>
    </main>
<script>
function previewImage(input) {
    var preview = document.getElementById('imagePreview');
    var file = input.files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    };

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = '<?=$hinhsp?>';
    }
}
</script>
