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
                  <h4 class="header2">Form Isi Data Pegawai RS</h4>
                  <div class="row">

                 <form action="pegawai_proses_simpan.php" method="POST" enctype="multipart/form-data">

                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="nip" required="required">
                          <label for="nip">NIP</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="nama_pegawai" required="required">
                          <label for="nama_pegawai">Nama Pegawai</label>
                        </div>
                      </div>


                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="jabatan_pegawai" required="required">
                          <label for="jabatan_pegawai">Jabatan Pegawai</label>
                        </div>
                      </div>


                      <div class="row">

                        <div class="input-field col s6">
                          <input  type="text" name="jenis_pegawai" required="required">
                          <label for="jenis_pegawai">Jenis Pegawai</label>
                        </div>


                        <div class="input-field col s6">
                          <input type="text" class="datepicker" name="tgl_lahir" required="required">
                          <label for="dob">Tanggal Lahir</label>
                        </div>

                      </div>


                    <div class="row">
                        <div class="input-field col s6">
                          <select name="jenis_kelamin" required="required">
                            <option value="" disabled selected>.:Pilih Jenis Kelamin:.</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                          <label>Jenis Kelamin</label>
                        </div>

                        <div class="input-field col s6">
                          <select name="agama" required="required">
                            <option value="" disabled selected>.:Pilih Agama:.</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                          </select>
                          <label>Agama</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="pendidikan_akhir" required="required">
                          <label for="pendidikan_akhir">Pendidikan Akhir</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="kabupaten" required="required">
                          <label for="kabupaten">Kabupaten/Kota</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="kecamatan">
                          <label for="kecamatan">Kecamatan</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="desa">
                          <label for="desa">Desa</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="rt_rw" required="required">
                          <label for="rt_rw">RT dan RW</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="no_telepon" required="required">
                          <label for="no_telepon">No Hp</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="no_telepon_rumah" required="required">
                          <label for="no_telepon_rumah">No Telepon Rumah</label>
                        </div>
                    </div>


                     <div class="row">

                        <div class="input-field col s6">
                          <input  type="text" class="datepicker" name="tgl_masuk_kerja" required="required">
                          <label for="tgl_masuk_kerja">Tanggal Masuk Kerja</label>
                        </div>


                        <div class="input-field col s6">
                          <input type="text" class="datepicker" name="tgl_keluar_kerja">
                          <label for="tgl_keluar_kerja">Tanggal Keluar Kerja</label>
                        </div>

                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <textarea name="alamat_jln" id="message5" class="materialize-textarea" length="120" required="required"></textarea>
                          <label for="message">Alamat Lengkap</label>
                       </div>
                     </div>
                  

                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="simpan_pegawai">Simpan
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