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
                  <h4 class="header2">Form Isi Data Pegawai</h4>
                  <div class="row">
                  <?php
                  include 'config/koneksiDB.php';
                  $id_pegawai    = $_GET['id_pegawai'];
                  $query         = "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'";
                  $hasil         = mysqli_query($koneksi, $query);
                   foreach ($hasil as $data)
                  {
                        $id               = $data['id_pegawai'];
                        $nip              = $data['nip'];
                        $nama_pegawai     = $data['nama_pegawai'];
                        $jabatan_pegawai  = $data['jabatan_pegawai'];
                        $jenis_pegawai    = $data['jenis_pegawai'];
                        $nama_pt          = $data['nama_pt'];
                        $tgl_lahir        = $data['tgl_lahir'];
                        $tgl_masuk_kerja  = $data['tgl_masuk_kerja'];
                        $tgl_keluar_kerja = $data['tgl_keluar_kerja'];
                        $jenis_kelamin    = $data['jenis_kelamin'];
                        $agama            = $data['agama'];
                        $pendidikan_akhir = $data['pendidikan_akhir'];
                        $no_telepon       = $data['no_telepon'];
                        $no_telepon_rumah = $data['no_telepon_rumah'];
                        $kabupaten_kota   = $data['kabupaten_kota'];
                        $kecamatan        = $data['kecamatan'];
                        $desa             = $data['desa'];
                        $rt_rw            = $data['rt_rw'];
                        $alamat_jln       = $data['alamat_jln'];
                   }
                  ?>
                   


                    <form class="col s12" action="pegawai_proses_ubah.php" method="POST">

                     <input type="hidden" name="id_pegawai" value="<?php echo $id; ?>"/>   

                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="nip" value="<?php echo $nip; ?>" disabled="disabled">
                          <label for="nip">NIP</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="nama_pegawai" required="required" value="<?php echo $nama_pegawai; ?>">
                          <label for="nama_pegawai">Nama Lengkap Pegawai</label>
                        </div>
                      </div>


                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="jabatan_pegawai" required="required" value="<?php echo $jabatan_pegawai; ?>">
                          <label for="jabatan_pegawai">Jabatan Pegawai</label>
                        </div>
                      </div>


                      <div class="row">

                        <div class="input-field col s6">
                          <input type="text" class="datepicker" name="tgl_lahir" required="required" value="<?php echo $tgl_lahir; ?>">
                          <label for="dob">Tanggal Lahir</label>
                        </div>

                      </div>


                      <div class="row">
                         <div class="input-field col s6">
                          <select name="jenis_pegawai" required="required"/>
                             <option value="">.:Pilih Jenis Pegawai:.</option>
                                   <?php        
                                    if ($jenis_pegawai == "Permanen")
                                         echo "<option value='Permanen' selected>Permanen</option>";
                                         else echo "<option value='Permanen'>Permanen</option>";

                                    if ($jenis_pegawai == "Kontrak") 
                                         echo "<option value='Kontrak' selected>Kontrak</option>";
                                         else echo "<option value='Kontrak'>Kontrak</option>";  

                                    if ($jenis_pegawai == "Outsourcing") 
                                         echo "<option value='Outsourcing' selected>Outsourcing</option>";
                                         else echo "<option value='Outsourcing'>Outsourcing</option>";         
                                    ?>
                         </select>
                          <label>Jenis Pegawai</label>
                        </div>
                       

                        <div class="input-field col s6">
                          <input  type="text" name="nama_pt" value="<?php echo $nama_pt; ?>">
                          <label for="nama_pt">Nama PT Penyalur</label>
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
                        <div class="input-field col s12">
                          <input type="text" name="pendidikan_akhir" required="required" value="<?php echo $pendidikan_akhir; ?>">
                          <label for="pendidikan_akhir">Pendidikan Akhir</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="kabupaten_kota" required="required" value="<?php echo $kabupaten_kota; ?>">
                          <label for="kabupaten_kota">Kabupaten/Kota</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="kecamatan" value="<?php echo $kecamatan; ?>">
                          <label for="kecamatan">Kecamatan</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="desa" value="<?php echo $desa; ?>">
                          <label for="desa">Desa</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="rt_rw" required="required" value="<?php echo $rt_rw; ?>">
                          <label for="rt_rw">RT dan RW</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                          <input type="text" name="no_telepon" required="required" value="<?php echo $no_telepon; ?>">
                          <label for="no_telepon">No Hp</label>
                        </div>

                        <div class="input-field col s6">
                          <input type="text" name="no_telepon_rumah" required="required" value="<?php echo $no_telepon_rumah; ?>">
                          <label for="no_telepon_rumah">No Telepon Rumah</label>
                        </div>
                    </div>


                     <div class="row">

                        <div class="input-field col s6">
                          <input  type="text" class="datepicker" name="tgl_masuk_kerja" required="required" value="<?php echo $tgl_masuk_kerja; ?>">
                          <label for="tgl_masuk_kerja">Tanggal Masuk Kerja</label>
                        </div>


                        <div class="input-field col s6">
                          <input type="text" class="datepicker" name="tgl_keluar_kerja" value="<?php echo $tgl_keluar_kerja; ?>">
                          <label for="tgl_keluar_kerja">Tanggal Keluar Kerja</label>
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
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="ubah_pegawai">Ubah
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
                    