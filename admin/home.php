<div id="layoutSidenav_content">
     <main>
          <div class="container-fluid px-4">
               <h1 class="mt-4">Dashboard</h1>
               <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
               </ol>
               <div class="row">
                    <div class="col-xl-3 col-md-6">
                         <div class="card bg-primary text-white mb-4">

                              <div class="card-body">Danh mục</div>

                              <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link" href="?act=list-dm">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                         <div class="card bg-warning text-white mb-4">
                              <div class="card-body">Sản phẩm</div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link" href="?act=list-sp">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                         <div class="card bg-success text-white mb-4">
                              <div class="card-body">Tài khoản</div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link" href="?act=list-tk">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                         <div class="card bg-danger text-white mb-4">
                              <div class="card-body">Bình luận</div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                   <a class="small text-white stretched-link" href="?act=binhluan">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row">

                    <div class="card-body">
                         <div id="myChart" style="width:100%; max-width:100%; height:600px;"></div>
                    </div>
               </div>
          </div>
     </main>
</div>
     <script src="https://www.gstatic.com/charts/loader.js"></script>
     <script>
          google.charts.load('current', {
               'packages': ['corechart']
          });
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

               // Set Data
               const data = google.visualization.arrayToDataTable([
                    ['Tháng', 'Doanh Thu'],
                    <?php
                    foreach ($dsthongke as $thongke) {
                         extract($thongke);
                         echo "['$thang', $total],";
                    }
                    ?>
               ]);

               // Set Options
               const options = {
                    title: 'Thống kê doanh thu theo tháng'
               };

               // Draw
               const chart = new google.visualization.LineChart(document.getElementById('myChart'));
               chart.draw(data, options);

          }
     </script>