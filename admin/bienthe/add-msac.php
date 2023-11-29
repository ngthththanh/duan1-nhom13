<div id="layoutSidenav_content">
     <main>
     <div class="container-fluid px-4">
          <h1 class="mt-4">Thêm mới màu sắc</h1>
          <div class="card mb-4">
               <div class="card-body">
                    <form action="index.php?act=add-msac" method="POST">
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Chọn sản phẩm</label>
                              <select id="id_sanpham" name="id_sanpham">
                                   <?php foreach ($listsanpham as $sanpham){
                                   extract($sanpham);
                                   echo '<option value="'.$id_sp.'">'.$ten_sp.'</option>';
                                   }?>
                              </select>
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Màu</label>
                              <input type="text" class="form-control" id="exampleInputText" name="tenmsac" required>
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Số lượng</label>
                              <input type="text" class="form-control" id="exampleInputText" name="slmsac" required>
                         </div>
                         <button type="submit" class="btn btn-primary"name="themmau">Submit</button>
                    </form>
               </div>
          </div>
          <!-- <div style="height: 100vh"></div>
          <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div> -->
     </div>
     </main>