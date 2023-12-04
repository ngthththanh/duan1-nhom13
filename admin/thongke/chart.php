<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Charts</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Charts</li>
      </ol>


      <div class="row">

        <div class="card-header">
          <i class="fas fa-chart-bar me-1"></i>
          Bar Chart Example
        </div>
        <div class="card-body"><canvas id="myChart" width="100%" height="50"></canvas></div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
  </main>
    <script>
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