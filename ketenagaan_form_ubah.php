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
                  <h4 class="header2">Form Isi Data Ketenagaan Rumah Sakit</h4>
                  <div class="row">
                  <?php
                  include 'config/koneksiDB.php';
                  $id_ketenagaan      = $_GET['id_ketenagaan'];
                  $query         = "SELECT * FROM ketenagaan_rs WHERE id_ketenagaan='$id_ketenagaan'";
                  $hasil         = mysqli_query($koneksi, $query);
                   foreach ($hasil as $data)
                  {
                        $id               = $data['id_ketenagaan'];
                        $id_pegawai       = $data['id_pegawai'];
                        $nama_ketenagaan  = $data['nama_ketenagaan'];
                        $jenis_ketenagaan = $data['jenis_ketenagaan'];
                        $status           = $data['status'];
                        $keterangan       = $data['keterangan'];
                   }

                  ?>
                   
                    <form class="col s12" action="ketenagaan_proses_ubah.php" method="POST">

                     <input type="hidden" name="id_ketenagaan" value="<?php echo $id; ?>"/>   

                      <div class="row">
                        <div class="input-field col s6">
                          <select name="id_pegawai" required="required">
                           <option value="" >.:Pilih Nama Pegawai:.</option>
                           <?php
                           include 'config/koneksiDB.php'; 
                           $qlnya ="SELECT id_pegawai, nama_pegawai FROM pegawai"; 
                           $sqlmenu = mysqli_query($koneksi, $qlnya);
                           while ($datamenu = mysqli_fetch_array($sqlmenu)){
                           if($id_pegawai == $datamenu['id_pegawai'])
                           echo"<option value=$id_pegawai selected> $datamenu[nama_pegawai] </option>";
                           else echo"<option value='$datamenu[id_pegawai]'> $datamenu[nama_pegawai] </option>";
                           }
                           ?>
                           </select>
                           <label for="id_pegawai">Nama Pegawai</label>
                        </div>


                        <div class="input-field col s6">
                          <select name="nama_ketenagaan" required="required"/>
                             <option value="">.:Pilih Status Kamar:.</option>
                                   <?php        
                                    if ($nama_ketenagaan == "Tenaga Medik")
                                         echo "<option value='Tenaga Medik' selected>Tenaga Medik</option>";
                                         else echo "<option value='Tenaga Medik'>Tenaga Medik</option>";

                                    if ($nama_ketenagaan == "Tenaga Paramadik") 
                                         echo "<option value='Tenaga Paramadik' selected>Tenaga Paramadik</option>";
                                         else echo "<option value='Tenaga Paramadik'>Tenaga Paramadik</option>";

                                     if ($nama_ketenagaan == "Tenaga Penunjang Medik") 
                                         echo "<option value='Tenaga Penunjang Medik' selected>Tenaga Penunjang Medik</option>";
                                         else echo "<option value='Tenaga Penunjang Medik'>Tenaga Penunjang Medik</option>";

                                       if ($nama_ketenagaan == "Tenaga Non Medik") 
                                         echo "<option value='Tenaga Non Medik' selected>Tenaga Non Medik</option>";
                                         else echo "<option value='Tenaga Non Medik'>Tenaga Non Medik</option>";


                                         if ($nama_ketenagaan == "Tenaga Keuangan") 
                                         echo "<option value='Tenaga Keuangan' selected>Tenaga Keuangan</option>";
                                         else echo "<option value='Tenaga Keuangan'>Tenaga Keuangan</option>";


                                         if ($nama_ketenagaan == "Tenaga Luar") 
                                         echo "<option value='Tenaga Luar' selected>TTenaga Luar(Ousourcing)</option>";
                                         else echo "<option value='Tenaga Luar'>Tenaga Luar(Ousourcing)tsourcingk</option>";


                                         if ($nama_ketenagaan == "Tenaga Bangunan") 
                                         echo "<option value='Tenaga Bangunan' selected>Tenaga Bangunan</option>";
                                         else echo "<option value='Tenaga Bangunan'>Tenaga Bangunan</option>";


                                         if ($nama_ketenagaan == "Tenaga Konsumsi") 
                                         echo "<option value='Tenaga Konsumsi' selected>Tenaga Konsumsi</option>";
                                         else echo "<option value='Tenaga Konsumsi'>Tenaga Konsumsi</option>";


                                          if ($nama_ketenagaan == "Lain-lain") 
                                         echo "<option value='Lain-lain' selected>Lain-lain</option>";
                                         else echo "<option value='Lain-lain'>Lain-lain</option>";           
                                    ?>
                         </select>
                          <label>Nama Ketenagaan</label>
                        </div>

                      </div>
      
                    <div class="row">
                      <div class="input-field col s6">
                          <input type="text" name="jenis_ketenagaan" required="required" value="<?php echo $jenis_ketenagaan; ?>">
                          <label for="jenis_ketenagaan">Jenis Ketenagaan</label>
                      </div>

                      <div class="input-field col s6">
                          <select name="status" required="required"/>
                             <option value="">.:Pilih Status Kamar:.</option>
                                   <?php        
                                    if ($status == "Aktif")
                                         echo "<option value='Aktif' selected>Aktif</option>";
                                         else echo "<option value='Aktif'>Aktif</option>";

                                    if ($status== "NonAktif") 
                                         echo "<option value='NonAktif' selected>Non Aktif</option>";
                                         else echo "<option value='NonAktif'>Non Aktif</option>";    
                                    ?>
                         </select>
                          <label>Status</label>
                        </div>
                     </div>   



                      <div class="row">
                        <div class="input-field col s12">
                          <textarea name="keterangan" id="message5" class="materialize-textarea" length="120" required="required"><?php echo $keterangan; ?></textarea>
                          <label for="message">Keterangan</label>
                       </div>
                      </div>  


                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="ubah_ketenagaan">Ubah
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
  </body>
</html>
<?php } ?>
                    