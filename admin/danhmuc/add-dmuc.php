<div id="layoutSidenav_content">
     <main>
     <div class="container-fluid px-4">
          <h1 class="mt-4">Thêm mới danh mục</h1>
          <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item"><a href="?act=list-dm">Danh sách danh mục</a></li>
          </ol>
          <div class="card mb-4">
               <div class="card-body">
                    <form action="index.php?act=add-dm" method="POST">
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">ID Danh Mục</label>
                              <input type="text" class="form-control" id="exampleInputText" disabled>   
                         </div>
                         <div class="mb-3">
                              <label for="exampleInputText" class="form-label">Tên Danh Mục</label>
                              <input type="text" class="form-control" id="exampleInputText" name="tendm">
                         </div>
                    
                         <button type="submit" class="btn btn-primary"name="themmoi">Submit</button>
                    </form>
               </div>
          </div>
          <!-- <div style="height: 100vh"></div>
          <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div> -->
     </div>
     </main>