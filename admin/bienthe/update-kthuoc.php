<?php if (is_array($kichthuoc)) {
     extract($kichthuoc);
} ?>
<div id="layoutSidenav_content">
     <main>
          <div class="container-fluid px-4">
               <h1 class="mt-4">Cập nhật kích thước</h1>
               <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="?act=list-kthuoc">Danh sách kích thước</a></li>
               </ol>
               <div class="card mb-4">
                    <div class="card-body">
                         <form action="index.php?act=update-kt" method="POST">
                              <div class="mb-3">
                                   <label for="exampleInputText" class="form-label">Chọn sản phẩm</label>
                                   <select id="id_sanpham" name="id_sanpham" disabled>
                                        <?php foreach ($listsanpham as $sanpham) {
                                             extract($sanpham);
                                             $s = ($id_sp == $kichthuoc['id_sanpham']) ? "selected" : "";
                                             echo '<option value="' . $id_sp . '" ' . $s . '>' . $ten_sp . '</option>';
                                        } ?>
                                   </select>
                              </div>
                              <div class="mb-3">
                                   <label for="sizeSelect" class="form-label">Size</label>
                                   <select class="form-select" id="kthuoc" name="tenkthuoc" disabled>
                                        <option value="37" <?= ($ten == '37') ? 'selected' : '' ?>>37</option>
                                        <option value="38" <?= ($ten == '38') ? 'selected' : '' ?>>38</option>
                                        <option value="39" <?= ($ten == '39') ? 'selected' : '' ?>>39</option>
                                        <option value="40" <?= ($ten == '40') ? 'selected' : '' ?>>40</option>
                                        <!-- Thêm các size khác nếu cần -->
                                   </select>
                              </div>
                              <div class="mb-3">
                                   <label for="exampleInputText" class="form-label">Số lượng</label>
                                   <input type="number" min="1" class="form-control" id="exampleInputText" name="slkthuoc" required value="<?= $so_luong ?>">
                              </div>
                              <input type="hidden" name="id" value="<?= $id ?>">
                              <button type="submit" class="btn btn-primary" name="capnhat">Submit</button>
                         </form>
                    </div>
               </div>
               <!-- <div style="height: 100vh"></div>
          <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div> -->
          </div>
     </main>