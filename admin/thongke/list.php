<div id="layoutSidenav_content">
     <main>
          <div class="container-fluid px-4">
               <h1 class="mt-4">Bảng thống kê theo danh mục sản phẩm</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php?act=chart">Biểu đồ</a></li>
            </ol>

               <div class="card mb-4">
                    <div class="card-header">
                         <i class="fas fa-table me-1"></i>Bảng thống kê theo danh mục sản phẩm

                    </div>
                    <form action="#" method="post">
                         <div class="card-body">
                              <table id="datatablesSimple">
                                   <thead>
                                        <tr>
                                             <th>ID Loại</th>
                                             <th>Tên loại</th>
                                             <th>Số lượng</th>
                                             <th>Gía min</th>
                                             <th>Gía max</th>
                                             <th>Gía trung bình</th>
                                        </tr>
                                   </thead>
                                   <tfoot>
                                        <th>ID Loại</th>
                                        <th>Tên loại</th>
                                        <th>Số lượng</th>
                                        <th>Gía min</th>
                                        <th>Gía max</th>
                                        <th>Gía trung bình</th>
                                   </tfoot>

                                   <?php
                                   foreach ($dsthongke as $thongke) {
                                        extract($thongke);
                                   ?>
                                        <tr>
                                             <td><?php echo $id_dm ?></td>
                                             <td><?php echo $ten_dm ?></td>
                                             <td><?php echo $soluong ?></td>
                                             <td><?php echo number_format($gia_min) ?></td>
                                             <td><?php echo number_format($gia_max) ?></td>
                                             <td><?php echo number_format($gia_avg, 2) ?></td>
                                        </tr>
                                   <?php
                                   }
                                   ?>

                              </table>
                         </div>
                        
                    </form>
               </div>
          </div>