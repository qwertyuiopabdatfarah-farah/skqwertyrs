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
    <title>Human Resource</title>
     <!-- selec2-->
    <link href="assets/css/select2/select2.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="config/gambar_tampilan/favicon/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="apple-touch-icon-precomposed" href="config/gambar_tampilan/favicon/apple-touch-icon-152x152.png">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/select2/select2-materialize.css" type="text/css" rel="stylesheet">
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



  <section id="content">      
    <!--start container-->
      <div class="container">
        <div class="section">
          <div class="divider"></div>
            <!--Form Advance-->
            <div class="row">
              <div class="col s12 m12 l12">
                <div class="card-panel">
                  <h4 class="header2">Form Isi Data Ketenagaan Rumah Sakit</h4>
                  <div class="row">




                    <form class="col s12" action="ketenagaan_proses_simpan.php" method="POST">


                      <div class="row">

                        <div class="input-field col s6">
                          <select name="id_pegawai" class="js-example-basic-sinsgle" required="required">
                           <option value="" selected="selected">.:Pilih Nama Pegawai:.</option>
                            <?php
                            include 'config/koneksiDB.php'; 
                            $mysql = "SELECT * FROM pegawai";
                            $hasil = mysqli_query($koneksi, $mysql);
                            while ($data = mysqli_fetch_array($hasil, MYSQLI_BOTH)){ ?>
                                  <option value="<?php echo $data['id_pegawai']; ?>"><?php echo $data['nama_pegawai']; ?> == <?php echo $data['jabatan_pegawai']; ?></option>
                            <?php } 
                            ?>
                        </select>
                          <label for="id_pegawai">Nama Pegawai</label>
                        </div>

                        <div class="input-field col s6">
                          <select name="nama_ketenagaan" required="required" class="js-example-basic-single">
                            <option value="" disabled selected>.:Pilih Nama Ketenagaan:.</option>
                            <option value="Tenaga Medik">Tenaga Medik</option>
                            <option value="Tenaga Paramadik">Tenaga Paramadik</option>
                            <option value="Tenaga Penunjang Medik">Tenaga Penunjang Medik</option>
                            <option value="Tenaga Non Medik">Tenaga Non Medik</option>
                            <option value="Tenaga Keuangan">Tenaga Keuangan</option>
                            <option value="Tenaga Luar">Tenaga Luar(utsourcing)</option>
                            <option value="Tenaga Bangunan">Tenaga Bangunan</option>
                            <option value="Tenaga Konsumsi">Tenaga Konsumsi</option>
                            <option value="Lain-lain">Lain-lain</option>
                          </select>
                          <label>Nama Ketenagaan</label>
                        </div>

                      </div>
      
                    <div class="row">
                      <div class="input-field col s6">
                          <input type="text" name="jenis_ketenagaan" required="required">
                          <label for="jenis_ketenagaan">Jenis Ketenagaan</label>
                      </div>

                      <div class="input-field col s6">
                          <select name="status" required="required">
                            <option value="" disabled selected>.:Status:.</option>
                            <option value="Aktif">Aktif</option>
                            <option value="NonAktif">Non-Aktif</option>
                          </select>
                          <label>Status</label>
                        </div>
                     </div>   



                      <div class="row">
                        <div class="input-field col s12">
                          <textarea name="keterangan" id="message5" class="materialize-textarea" length="120" required="required"></textarea>
                          <label for="message">Keterangan</label>
                       </div>
                      </div> 


                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="simpan_ketenagaan">Simpan
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
  </section>

     <!-- FOOTER -->
     <?php include 'config/footer.php'; ?>

      <!-- jQuery Library -->
      <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
      <!--angularjs-->
      <script type="text/javascript" src="assets/js/angular.min.js"></script>
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
      <script type="text/javascript" src="assets/js/select2/select2.js"></script>
      
      <script type="text/javascript">
      $(document).ready(function() {
        $(".js-example-basic-singledie").select2();
      });
      </script>
  </body>
</html>
<?php } ?>