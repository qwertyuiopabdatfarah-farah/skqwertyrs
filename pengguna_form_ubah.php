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
                  <h4 class="header2">Form Isi Data Pelayanan Paien</h4>
                  <div class="row">
                   <?php
                  include 'config/koneksiDB.php';
                  $id_pelayanan  = $_GET['id_pelayanan'];
                  $query         = "SELECT * FROM pelayanan WHERE id_pelayanan='$id_pelayanan'";
                  $hasil         = mysqli_query($koneksi, $query);
                   foreach ($hasil as $data)
                  {
                        $id         = $data['id_pelayanan'];
                        $id_pasien  = $data['id_pasien'];
                        $id_pegawai = $data['id_pegawai'];
                        $id_kamar   = $data['id_kamar'];
                        $keluhan    = $data['keluhan'];
                        $diagnosa   = $data['diagnosa'];
                        $tgl_masuk  = $data['tgl_masuk'];
                        $tgl_keluar = $data['tgl_keluar'];
                        $keterangan = $data['keterangan'];
                   }
                ?> 
                    <form class="col s12" action="pelayanan_proses_ubah.php" method="POST">

                      <input type="hidden" name="id_pelayanan" value="<?php echo $id; ?>"/> 

                      <div class="row">
                        <div class="input-field col s6">
                          <select name="id_pasien" required="required">
                           <option value="" >.:Nama Pasien:.</option>
                           <?php
                           include 'config/koneksiDB.php'; 
                           $qlnya ="SELECT id_pasien, nama_lengkap FROM pasien"; 
                           $sqlmenu = mysqli_query($koneksi, $qlnya);
                           while ($datamenu = mysqli_fetch_array($sqlmenu)){
                           if($id_pasien == $datamenu['id_pasien'])
                           echo"<option value='$id_pasien' selected> $datamenu[nama_lengkap] </option>";
                           else echo"<option value='$datamenu[id_pasien]'> $datamenu[nama_lengkap]</option>";
                           }
                           ?>
                           </select>
                           <label for="id_pasien">Nama Pasien</label>
                        </div>
                        
                        <div class="input-field col s6">
                          <select name="id_pegawai" required="required">
                           <option value="" >.:Nama Dokter:.</option>
                           <?php
                           include 'config/koneksiDB.php'; 
                           $qlnya ="SELECT id_pegawai, nama_pegawai FROM pegawai"; 
                           $sqlmenu = mysqli_query($koneksi, $qlnya);
                           while ($datamenu = mysqli_fetch_array($sqlmenu)){
                           if($id_pegawai == $datamenu['id_pegawai'])
                           echo"<option value='$id_pegawai' selected> $datamenu[nama_pegawai] </option>";
                           else echo"<option value='$datamenu[id_pegawai]'> $datamenu[nama_pegawai]</option>";
                           }
                           ?>
                           </select>
                           <label for="id_pegawai">Nama Dokter</label>
                        </div>
                    </div>
      
                    <div class="row">
                      <div class="input-field col s12">
                          <select name="id_kamar" required="required">
                           <option value="" >.:Nama Kamar:.</option>
                           <?php
                           include 'config/koneksiDB.php'; 
                           $qlnya ="SELECT id_kamar, nama_kamar, kelas FROM kamar"; 
                           $sqlmenu = mysqli_query($koneksi, $qlnya);
                           while ($datamenu = mysqli_fetch_array($sqlmenu)){
                           if($id_kamar == $datamenu['id_kamar'])
                           echo"<option value='$id_kamar' selected> $datamenu[kelas] == $datamenu[nama_kamar] </option>";
                           else echo"<option value='$datamenu[id_kamar]'> $datamenu[kelas] == $datamenu[nama_kamar]</option>";
                           }
                           ?>
                           </select>
                           <label for="id_kamar">Nama Kamar</label>
                        </div>


                     </div>   

                      

                      <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="keluhan" required="required" value="<?php echo $keluhan; ?>">
                          <label for="keluhan">Keluhan Penyakit</label>
                        </div>
                        
                        <div class="input-field col s6">
                          <input type="text" name="diagnosa" required="required" value="<?php echo $diagnosa; ?>">
                          <label for="diagnosa">Diagnosa Penyakit</label>
                        </div>
                      </div>


                      <div class="row">
                      <div class="input-field col s6">
                          <input type="text" class="datepicker" name="tgl_masuk" required="required" value="<?php echo $tgl_masuk; ?>">
                          <label for="dob">Tanggal Masuk</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" class="datepicker" name="tgl_keluar" required="required" value="<?php echo $tgl_keluar; ?>">
                          <label for="dob">Tanggal Keluar</label>
                        </div>
                      </div> 

                      <div class="row">
                        <div class="input-field col s6">
                          <textarea name="keterangan" id="message5" class="materialize-textarea" length="120" required="required"><?php echo $keterangan; ?></textarea>
                          <label for="message">Keterangan</label>
                       </div>
                     </div>


                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="ubah_pelayanan">Ubah
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
        $(".js-example-basic-single").select2();
      });
      </script>
  </body>
</html>
<?php } ?>