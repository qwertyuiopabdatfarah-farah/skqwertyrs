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
                  <h4 class="header2">Form Isi Data Pasien</h4>
                  <div class="row">
                  <?php
                  include 'config/koneksiDB.php';
                  $id_pasien     = $_GET['id_pasien'];
                  $query         = "SELECT * FROM pasien WHERE id_pasien='$id_pasien'";
                  $hasil         = mysqli_query($koneksi, $query);
                   foreach ($hasil as $data)
                  {
                        $id               = $data['id_pasien'];
                        $no_registerasi   = $data['no_registerasi'];
                        $nama_lengkap     = $data['nama_lengkap'];
                        $nama_ibu_kandung = $data['nama_ibu_kandung'];
                        $tempat_lahir     = $data['tempat_lahir'];
                        $tgl_lahir        = $data['tgl_lahir'];
                        $jenis_kelamin    = $data['jenis_kelamin'];
                        $agama            = $data['agama'];
                        $no_telepon       = $data['no_telepon'];
                        $no_telepon_lain  = $data['no_telepon_lain'];
                        $pekerjaan        = $data['pekerjaan'];
                        $alamat_jln       = $data['alamat_jln'];
                        $kabupaten_kota   = $data['kabupaten_kota'];
                        $kecamatan        = $data['kecamatan'];
                        $desa             = $data['desa'];
                        $rt_rw            = $data['rt_rw'];
                   }
                  ?>
                   


                    <form class="col s12" action="pasien_proses_ubah.php" method="POST">

                     <input type="hidden" name="id_pasien" value="<?php echo $id; ?>"/>   


                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="no_registerasi" disabled="disabled" value="<?php echo $no_registerasi; ?>" />
                          <label for="no_registerasi">No Registrasi</label>
                        </div>
                      </div>


                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" required="required" />
                          <label for="nama_lengkap">Nama Lengkap</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="nama_ibu_kandung" value="<?php echo $nama_ibu_kandung; ?>" required="required">
                          <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
                        </div>
                      </div>


                      <div class="row">

                        <div class="input-field col s6">
                          <input  type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" required="required" />
                          <label for="tempat_lahir">Tempat Lahir</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" class="datepicker" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" required="required" />
                          <label for="dob">Tanggal Lahir</label>
                        </div>

                      </div>


                    <div class="row">

                        <div class="input-field col s6">
                          <select name="jenis_kelamin" required="required"/>
                             <option value="">.:Pilih Jenis Kelamin:.</option>
                                   <?php        
                                    if ($jenis_kelamin == "Laki-laki")
                                         echo "<option value='Laki-laki' selected>Laki-laki</option>";
                                         else echo "<option value='Laki-laki'>Laki-laki</option>";

                                    if ($jenis_kelamin== "Perempuan") 
                                         echo "<option value='Perempuan' selected>Perempuan</option>";
                                         else echo "<option value='Perempuan'>Perempuan</option>";    
                                    ?>
                         </select>
                          <label>Jenis Kelamin</label>
                        </div>

                        <div class="input-field col s6">
                          <select name="agama" required="required"/>
                             <option value="">.:Pilih Agama:.</option>
                                   <?php        
                                    if ($agama == "Islam")
                                         echo "<option value='Islam' selected>Islam</option>";
                                         else echo "<option value='Islam'>Islam</option>";

                                    if ($agama == "Kristen") 
                                         echo "<option value='Kristen' selected>Kristen</option>";
                                         else echo "<option value='Kristen'>Kristen</option>";  

                                    if ($agama == "Budha") 
                                         echo "<option value='Budha' selected>Budha</option>";
                                         else echo "<option value='Budha'>Budha</option>"; 


                                     if ($agama == "Hindu") 
                                         echo "<option value='Hindu' selected>Hindu</option>";
                                         else echo "<option value='Hindu'>Hindu</option>"; 

                                      if ($agama == "Protestan") 
                                         echo "<option value='Protestan' selected>Protestan</option>";
                                         else echo "<option value='Protestan'>Protestan</option>";                
                                    ?>

                          </select>
                          <label>Agama</label>
                        </div>

                    </div>


                      
                      <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="no_telepon" value="<?php echo $no_telepon; ?>" required="required" />
                          <label for="no_telepon">No Telepon 1</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="no_telepon_lain" value="<?php echo $no_telepon_lain; ?>" required="required" />
                          <label for="no_telepon_lain">No Telepon 2</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>" required="required" />
                          <label for="pekerjaan">Pekerjaan</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="kabupaten_kota" value="<?php echo $kabupaten_kota; ?>" />
                          <label for="kabupaten_kota">Kabupaten/Kota</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="kecamatan" value="<?php echo $kecamatan; ?>" />
                          <label for="kecamatan">Kecamatan</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="desa" value="<?php echo $desa; ?>" />
                          <label for="desa">Desa</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="rt_rw" value="<?php echo $rt_rw; ?>" />
                          <label for="rt_rw">RT dan RW</label>
                        </div>
                    </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <textarea name="alamat_jln" id="message5" class="materialize-textarea" length="120" required="required"><?php echo $alamat_jln; ?></textarea>
                          <label for="message">Alamat Lengkap</label>
                       </div>
                      </div> 


                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="ubah_pasien">Ubah
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
                    