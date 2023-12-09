<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Biểu đồ theo danh mục sản phẩm</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="?act=thongke">Bảng thống kê</a></li>
      </ol>
   <div class="row">
        <div class="card-header">
          <i class="fas fa-chart-bar me-1"></i>
          Biểu đồ theo danh mục sản phẩm
        </div>
        <div class="card-body">
          <!-- <canvas id="myChart" ></canvas> -->
          <div id="myChart" style="width:100%; max-width:100%; height:800px;"></div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
  </main>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script defer>
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      // Set Data
      // const data = google.visualization.arrayToDataTable([
      //   ['Contry', 'Mhl'],
      //   ['Italy',54.8],
      //   ['France',48.6],
      //   ['Spain',44.4],
      //   ['USA',23.9],
      //   ['Argentina',14.5]
      // ]);
      const data = google.visualization.arrayToDataTable([
        ['Danh mục', 'Số lượng'],
        <?php
        foreach ($dsthongke as $thongke) {
          extract($thongke);
          echo "['$ten_dm', $soluong],";
        }
        ?>
      ]);

      // Set Options
      const options = {
        title: 'BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC',
        is3D: true
      };

      // Draw
      const chart = new google.visualization.BarChart(document.getElementById('myChart'));
      chart.draw(data, options);

    }
  </script>