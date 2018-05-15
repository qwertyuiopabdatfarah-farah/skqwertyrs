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
          //Pasien Baru Masuk
          $semua_data     = mysqli_query($koneksi, "SELECT COUNT(id_pasien) AS `semua` FROM pasien");
          $pasien_semua   = mysqli_fetch_assoc($semua_data);          

          //Pasien Baru Masuk
          $data_baru_masuk     = mysqli_query($koneksi, "SELECT COUNT(id_pasien) AS `jumlah_masuk` FROM pasien WHERE status = 'Baru'");
          $pasien_baru_masuk   = mysqli_fetch_assoc($data_baru_masuk);
          //Pasien Proses Inap
          $data_proses     = mysqli_query($koneksi, "SELECT COUNT(id_pasien) AS `jumlah_proses` FROM pasien WHERE status = 'Proses'");
          $pasien_proses   = mysqli_fetch_assoc($data_proses);
          //Pasien Beres Rawat Inap
          $data_keluar     = mysqli_query($koneksi, "SELECT COUNT(id_pasien) AS `jumlah_keluar` FROM pasien WHERE status = 'Keluar'");
          $pasien_keluar   = mysqli_fetch_assoc($data_keluar);

          ?>
          
            <div id="sales-chart">
              <div class="row">
                <div class="col s12 m8 l12">
                  <div id="revenue-chart" class="card">
                    <div class="card-content">
                      <h4 class="header mt-0">Data Ststistik Pasien Rumah Sakit Islam Banjarmasin
                        <span class="purple-text small text-darken-1 ml-1"></span> 
                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-cyan gradient-shadow right">Total Semua Pasien : <?php echo $pasien_semua['semua']; ?>  Orang</a>
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
        labels: ['Pasien Baru Masuk', 'Pasien Sedang Rawat Inap', 'Pasien Sudah Rawat Inap'],
        datasets: [{
         label: "My First dataset",
         fillColor: "rgba(0, 191, 165,0.2)",
         strokeColor: "rgba(0, 191, 165,1)",
         pointColor: "rgba(0, 191, 165,1)",
         pointStrokeColor: "#fff",
         pointHighlightFill: "#fff",
         pointHighlightStroke: "rgba(0, 191, 165,1)",
         data: ['<?php echo $pasien_baru_masuk['jumlah_masuk']; ?>', '<?php echo $pasien_proses['jumlah_proses']; ?>', '<?php echo $pasien_keluar['jumlah_keluar']; ?>']
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