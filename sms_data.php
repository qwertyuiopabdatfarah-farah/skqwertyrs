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
    <link href="assets/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">    
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

   <!-- END HEADER --> 
  <?php include 'config/header.php'; ?>
  <!-- END MENU -->
  <?php include 'config/menu.php'; ?>
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <div class="section">
              <div class="divider"></div>
              <!--DataTables example-->
              <div id="table-datatables">
                <h4 class="header">Kirim Pemberitahuan</h4>
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                        <thead>
                        <tr>
                        <th> No </th>
                        <th> No Registerasi </th>
                        <th> Nama Lengkap </th>
                        <th> Status SMS </th>
                        <th style="width:100px;text-align: center;"> Aksi </th>
                        </tr>
                        </thead>
                       <tbody>
                        <?php
                        include 'config/koneksiDB.php';  
                        $query="SELECT pasien.no_registerasi, pasien.nama_lengkap, pasien.nama_ibu_kandung, pasien.tempat_lahir, pasien.tgl_lahir, pasien.jenis_kelamin, pasien.no_telepon, pasien.alamat_jln, pasien.kabupaten_kota, kamar.nama_kamar, kamar.kelas, kamar.lokasi, log_sms.id_sms, log_sms.status FROM log_sms LEFT JOIN pasien ON pasien.id_pasien = log_sms.id_pasien LEFT JOIN kamar ON kamar.id_kamar = log_sms.id_kamar ORDER BY log_sms.id_sms DESC";
                        $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                        $no=1; //penomoran 
                        while ($data = mysqli_fetch_array($result, MYSQLI_BOTH)){
                        ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['no_registerasi']; ?></td>  
                        <td><?php echo $data['nama_lengkap']; ?></td>
                        <td style="color: red"><?php echo $data['status']; ?></td>      
                        <td style="width:100px;text-align: center;">
                        <a class='waves-effect waves-light modal-trigger' href='#modal2<?php echo $data['id_sms']; ?>'>|Detail|</a>
                        </td> 
                        </tr>  

                            <!-- Awal Modal -->
                            <div id="modal2<?php echo $data['id_sms']; ?>" class="modal modal-fixed-footer">
                                  <div class="modal-content">
                                    <h4>Kirim Pemberitahuan</h4>
                                     <form action="sms_proses.php" method="POST">
                                          <input type="hidden" name="id_sms" value="<?php echo $data['id_sms']; ?>">
                                            No Registrasi :  <input type="text" name="no_registerasi" value="<?php echo $data['no_registerasi']; ?>">
                                            Nama Lengkpa :  <input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>">
                                            Nama Ibu :  <input type="text" name="nama_ibu_kandung" value="<?php echo $data['nama_ibu_kandung']; ?>">
                                            Tempat Lahir :  <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>">
                                            Tanggal Lahir :  <input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
                                            Jenis Kelamin :  <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>">
                                            No Hp :  <input type="text" name="no_telepon" value="<?php echo $data['no_telepon']; ?>">
                                            Alamat Jl :  <input type="text" name="alamat_jln" value="<?php echo $data['alamat_jln']; ?>">
                                            Kota :  <input type="text" name="kabupaten_kota" value="<?php echo $data['kabupaten_kota']; ?>">
                                            Nama Kamar :  <input type="text" name="nama_kamar" value="<?php echo $data['nama_kamar']; ?>">
                                            Kelas Kamar :  <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>">
                                            Lokasi :  <input type="text" name="lokasi" value="<?php echo $data['lokasi']; ?>">
                                                
                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="kirim_sms">Kirim Pemberitahuan
                                   <i class="material-icons right">send</i>
                                   </button>
                                  </div>
                               </form> 
                              </div>
                             <!-- Akhir Modal --> 
                             
                        <?php
                        }
                        ?>
                   </tbody>
                    </table>
                  </div>
                </div>
              </div>
            <br>
          <div class="divider"></div>
             
        </div>
      </div>
          <!--end container-->
        </section>

    <?php include 'config/footer.php'; ?>
      <!-- jQuery Library -->
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
      <!--materialize js-->
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <!--prism-->
    <script type="text/javascript" src="assets/js/prism.js"></script>
      <!--scrollbar-->
    <script type="text/javascript" src="assets/js/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="assets/js/data-tables.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <!--modal JS-->
    <script type="text/javascript">
      $(function() {
          $('.modal').modal();
          //$('#modal2').modal('open');
          //$('#modal2').modal('close');
      });
    </script>
   <!-- Custom -->
    <script type="text/javascript" src="assets/js/custom-script.js"></script>
  </body>
</html>
<?php } ?>