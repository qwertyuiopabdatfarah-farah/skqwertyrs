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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template">
    <title>Farah Saleh Abdat</title>
    <!-- Favicons-->
    <link rel="icon" href="config/gambar_tampilan/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="apple-touch-icon-precomposed" href="config/gambar_tampilan/favicon/apple-touch-icon-152x152.png">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/custom.css" type="text/css" rel="stylesheet">
    <link href="assets/css/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="assets/css/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="assets/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
     <!-- HEADER -->      
  <?php include 'config/header.php'; ?>  
  
  <!--MENU --> 
  <?php include 'config/menu.php'; ?>
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
          <?php 
          include 'config/koneksiDB.php';
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
     <?php include 'config/footer.php'; ?>
      <!-- jQuery Library -->
      <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
      <!-- chartjs -->
      <script type="text/javascript" src="assets/js/chart.min.js"></script>
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
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <!--prism-->
      <script type="text/javascript" src="assets/js/prism.js"></script>
      <!--scrollbar-->
      <script type="text/javascript" src="assets/js/perfect-scrollbar.min.js"></script>
      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
      <script type="text/javascript" src="assets/js/plugins.js"></script>
      <!--custom-script.js - Add your own theme custom JS-->
      <script type="text/javascript" src="assets/js/custom-script.js"></script>
      <script type="text/javascript" src="assets/js/dashboard-ecommerce.js"></script>
  </body>
</html>
<?php } ?>