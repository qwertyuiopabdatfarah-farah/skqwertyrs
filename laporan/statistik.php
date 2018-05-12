<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:login_form.php"); 
 }
 else {
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farah Saleh Abdat</title>
    <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
    <script>window.print()</script>
  </head>
  <body>

        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
          <?php 
          include '../config/koneksiDB.php';
          $data_bulan = mysqli_query($koneksi, "SELECT bulan FROM `statistik_pasien` WHERE `tahun` = 2018");
          $jumlah     = mysqli_query($koneksi, "SELECT jumlah_pasien FROM `statistik_pasien` WHERE `tahun`=2018 order by id_statistik asc");
          $result     = mysqli_query($koneksi, "SELECT sum(jumlah_pasien) AS total FROM `statistik_pasien`");
          $data       = mysqli_fetch_assoc($result);
          ?>
          
            <div id="sales-chart">
              <div class="row">
                <div class="col s12 m8 l12">
                  <div id="revenue-chart" class="card">
                    <div class="card-content">
                      <h4 class="header mt-0">Data Ststistik PAsien Rumah Sakit Islam Banjarmasin Tahun 2018
                        <span class="purple-text small text-darken-1 ml-1"></span> 
                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-cyan gradient-shadow right">Total Pasien : <?php echo $data['total']; ?> Orang</a>
                      </h4>
                      <div class="row">
                        <div class="col s12">
                    <div class="sample-chart-wrapper">
                      <canvas id="line-chart-sample" height="120"></canvas>
                    </div>
                  </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
           </div> 
        </section>
      <!-- jQuery Library -->
      <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
      <!-- chartjs -->
      <script type="text/javascript" src="../assets/js/chart.min.js"></script>
      <script type="text/javascript">

              //Sampel Line Chart 
       var LineChartSampleData = {
        labels: [<?php while ($bulan = mysqli_fetch_array($data_bulan)) { echo '"' . $bulan['bulan'] . '",';}?>],
        datasets: [{
         label: "My First dataset",
         fillColor: "rgba(0, 191, 165,0.2)",
         strokeColor: "rgba(0, 191, 165,1)",
         pointColor: "rgba(0, 191, 165,1)",
         pointStrokeColor: "#fff",
         pointHighlightFill: "#fff",
         pointHighlightStroke: "rgba(0, 191, 165,1)",
         data: [<?php while ($berapa = mysqli_fetch_array($jumlah)) { echo '"' . $berapa['jumlah_pasien'] . '",';}?>]
        }]
       };
          window.onload = function() {
          window.LineChartSample = new Chart(document.getElementById("line-chart-sample").getContext("2d")).Line(LineChartSampleData,{
           responsive:true
          });

         };
      </script>
      
      <!--materialize js-->
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
  </body>
</html>
<?php } ?>