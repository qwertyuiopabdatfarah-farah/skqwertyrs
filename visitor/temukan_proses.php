<!DOCTYPE html>
<html lang="en">
<head>
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
    <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/custom.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/sweetalert.css" type="text/css" rel="stylesheet">
  </head>
  <body style="background-image: url('../assets/images/front-tampilan/back.jpg');">
    <!-- Start Page Loading -->
    
    <!-- End Page Loading -->
  <div class="container"> 
    <div id="login-page" class="row card-panel" style="width: 100%;height: 600px; background:rgba(255,255,255, 0.5); margin: 0 auto; margin-top: 20px;">
      <div class="col s12">
         <?php
         if (isset($_POST['cari'])) {
              $no_registerasi = $_POST['no_registerasi'];
               include '../config/koneksiDB.php';  
                        $query = "SELECT pasien.nama_lengkap,
                                         pasien.no_registerasi,
                                         pasien.nama_ibu_kandung, 
                                         pegawai.nama_pegawai, 
                                         kamar.nama_kamar,
                                         kamar.lokasi, 
                                         pelayanan.id_pelayanan, 
                                         pelayanan.keluhan, 
                                         pelayanan.diagnosa, 
                                         pelayanan.tgl_masuk,
                                         pelayanan.tgl_keluar, 
                                         pelayanan.keterangan 
                                         FROM pelayanan 
                                         LEFT JOIN pasien 
                                         ON pasien.id_pasien = pelayanan.id_pasien
                                         LEFT JOIN pegawai 
                                         ON pegawai.id_pegawai = pelayanan.id_pegawai
                                         LEFT JOIN kamar ON Kamar.id_kamar = pelayanan.id_kamar WHERE pasien.no_registerasi LIKE '%$no_registerasi%'"; 
                                      
                        $result = mysqli_query($koneksi, $query) or die(mysqli_error());
                        if (mysqli_num_rows($result) > 0) {
                        $no=1; //penomoran 
                        while ($data = mysqli_fetch_array($result, MYSQLI_BOTH)){
                        ?> 
                     <div class="modal-content">
                      <h4>Hasil Data Pasien yang Anda Cari</h4>
                          <ul class="collection">
                              <li class="collection-item">Nama Lengkap Pasien : <?php echo $data['nama_lengkap']; ?></li>
                              <li class="collection-item">Nama Dokter Pemeriksa : <?php echo $data['nama_pegawai']; ?></li>
                              <li class="collection-item">Nama Kamar : <?php echo $data['nama_kamar']; ?></li>
                              <li class="collection-item">Lokasi Kamar : <?php echo $data['lokasi']; ?></li>
                              <li class="collection-item">Keluha : <?php echo $data['keluhan']; ?></li>
                              <li class="collection-item">Diagnosa : <?php echo $data['diagnosa']; ?></li>
                              <li class="collection-item">Tanggal Masuk RS : <?php echo $data['tgl_masuk']; ?></li>
                              <li class="collection-item">Tanggal Keluar RS : <?php echo $data['tgl_keluar']; ?></li>
                              <li class="collection-item">Keterangan : <?php echo $data['keterangan']; ?></li>
                           </ul>
                           <div class="modal-footer">
                                <a href="temukan-pasien.php" class="waves-effect waves-light btn gradient-45deg-purple-deep-cyan gradient-shadow right">Kembali</a>
                            </div>
                    </div>
                 </div> 
            </div>
        </div>   
            <?php
                }
               }else{
                      echo '<script type="text/javascript">
                                setTimeout(function () {    
                                  swal({
                                  title: "Gagal Ditemukan !",
                                  text: "Data Tidak Ada",
                                  type: "error",
                                  timer: 2000,
                                  showConfirmButton: true
                                  }, function(){
                                  window.location.href = "temukan-pasien.php";
                                  });
                                  },10); 
                                  window.setTimeout(function(){ 
                                  } ,2000); 
                                  </script>';
                               }
                     }else{
                        header('Location: temukan-pasien.php');
                     }                    
                      ?>
      <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../assets/js/sweetalert.min.js"></script>
      <!-- jQuery Library -->
      <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
      <!--materialize js-->
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
     
    
     
  </body>
</html>