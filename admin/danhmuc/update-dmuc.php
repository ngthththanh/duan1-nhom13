
<?php if(is_array($danhmuc)){
          extract($danhmuc);
}?>
<div id="layoutSidenav_content">
     <main>
     <div class="container-fluid px-4">
          <h1 class="mt-4">Cập nhật danh mục</h1>
          <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item"><a href="?act=list-dm">Danh sách danh mục</a></li>
          </ol>
          <div class="card mb-4">
               <div class="card-body">
                    <form action="index.php?act=sua-dm" method="POST">
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">ID Danh Mục</label>
                              <input type="text" class="form-control" id="exampleInputText" disabled>   
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Tên Danh Mục</label>
                              <input type="text" class="form-control" id="exampleInputText" name="tendm" id="" value="<?php if(isset($ten_dm)&&($ten_dm!="")) echo $ten_dm?>">
                         </div>
                         <input type="hidden" name="id"value="<?php if(isset($id_dm)&&($id_dm>0)) echo $id_dm; ?>">
                         <button type="submit" class="btn btn-primary" name="capnhat">Update</button>
                    </form>
               </div>
          </div>
          <!-- <div style="height: 100vh"></div>
          <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div> -->
     </div>
     </main>