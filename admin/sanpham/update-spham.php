<div id="layoutSidenav_content">
     <main>
     <div class="container-fluid px-4">
          <h1 class="mt-4">Thêm mới sản phẩm</h1>
          <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item"><a href="?act=list-sp">Danh sách sản phẩm</a></li>
          </ol>
          <div class="card mb-4">
               <div class="card-body">
                    <form action="index.php?act=add-sp" method="post" enctype="multipart/form-data">
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Danh Mục</label>
                              <select class="form-select" aria-label="Default select example" name="iddm">
                                   <option value="0">Danh Mục Sản Phẩm</option>
                                   <?php foreach ($listdanhmuc as $danhmuc){
                                   extract($danhmuc);
                                   echo '<option value="'.$id_dm.'">'.$ten_dm.'</option>';
                                   }?>
                              </select>
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Tên Sản Phẩm</label>
                              <input type="text" class="form-control" id="exampleInputText" name="tensp">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Giá Sản Phẩm</label>
                              <input type="text" class="form-control" id="exampleInputText" name="giasp">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Hình Ảnh Sản Phẩm</label>
                              <input type="file" class="form-control" id="exampleInputText" name="hinh">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Kích Cỡ Sản Phẩm</label>
                              <input type="number" class="form-control" id="exampleInputText" min="35" max="42" name="size">
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Số Lượng Sản Phẩm</label>
                              <input type="number" class="form-control" id="exampleInputText" min="0" name="soluong"> 
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Mô Tả Sản Phẩm</label>
                              <input type="text" class="form-control" id="exampleInputText" name="mota">
                         </div> 
                         <button type="submit" class="btn btn-primary" name="themmoi">Submit</button>
                    </form>
               </div>
          </div>
          <!-- <div style="height: 100vh"></div>
          <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div> -->
     </div>
     </main>