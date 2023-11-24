<div id="layoutSidenav_content">
     <main>
     <div class="container-fluid px-4">
          <h1 class="mt-4">Thêm mới kích thước</h1>
          <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item"><a href="?act=list-kthuoc">Danh sách kích thước</a></li>
          </ol>
          <div class="card mb-4">
               <div class="card-body">
                    <form action="index.php?act=add-kthuoc" method="POST">
                         <!-- <div class="mb-3">
                              <label for="exampleInputText" class="form-label">ID Danh Mục</label>
                              <input type="text" class="form-control" id="exampleInputText" disabled required>   
                         </div> -->
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
                              <label for="exampleInputText" class="form-label">Size</label>
                              <input type="text" class="form-control" id="exampleInputText" name="tenkthuoc" required>
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Số lượng</label>
                              <input type="text" class="form-control" id="exampleInputText" name="slkthuoc" required>
                         </div>
                         <button type="submit" class="btn btn-primary"name="themmoi">Submit</button>
                    </form>
               </div>
               <?php
               if(isset($thongbao) && ($thongbao != "")) {
                   echo '<div class="alert alert-success" role="alert">' . $thongbao . '</div>';
               }
               ?>
          </div>
          <!-- <div style="height: 100vh"></div>
          <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div> -->
     </div>
     </main>