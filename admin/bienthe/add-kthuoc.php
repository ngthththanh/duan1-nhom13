<div id="layoutSidenav_content">
     <main>
          <div class="container-fluid px-4">
               <h1 class="mt-4">Thêm kích thước</h1>
               <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="?act=list-kthuoc">Danh sách kích thước</a></li>
               </ol>

               <div class="card mb-4">
                    <div class="card-body">
                         <form action="index.php?act=add-kthuoc" method="POST">
                              <div class="mb-3">
                                   <label for="exampleInputText" class="form-label">Chọn sản phẩm</label>
                                   <select id="id_sanpham" name="id_sanpham">
                                   <option value="0">Danh mục sản phẩm</option>
                                        <?php foreach ($listsanpham as $sanpham) {
                                             extract($sanpham);
                                             echo '<option value="' . $id_sp . '">' . $ten_sp . '</option>';
                                        } ?>
                                   </select>
                              </div>
                              <div class="mb-3">
                                   <label for="sizeSelect" class="form-label">Size</label>
                                   <select class="form-select" id="kthuoc" name="tenkthuoc" required>
                                        <option value="0">Chọn kích thước</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                   </select>
                              </div>

                              <div class="mb-3">
                                   <label for="exampleInputText" class="form-label">Số lượng</label>
                                   <input type="number" class="form-control" id="exampleInputText" name="slkthuoc" required min="1">
                              </div>
                              <button type="submit" class="btn btn-primary" name="themmoi">Submit</button>
                         </form>
                    </div>
               </div>
          </div>
     </main>