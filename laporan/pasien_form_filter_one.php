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
    <meta name="msapplication-TileImage" content="../images/favicon/mstile-144x144.png">
    <link rel="apple-touch-icon-precomposed" href="config/gambar_tampilan/favicon/apple-touch-icon-152x152.png">
    <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/custom.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">    
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
                <h4 class="header">Data Pasien</h4>
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                        <thead>
                        <tr>
                        <th> No </th>
                        <th> No Registrasi </th>
                        <th> Nama Lengkap </th>
                        <th> Tempat Lahir </th>
                        <th> Tanggal Lahir </th>
                        <th> Jenis Kelamin </th>
                        <th style="width:100px;text-align: center;"> Aksi </th>
                        </tr>
                        </thead>
                       <tbody>
                        <?php
                        include '../config/koneksiDB.php';  
                        $query="SELECT * FROM pasien ORDER BY id_pasien DESC";
                        $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                        $no=1; //penomoran 
                        while ($data = mysqli_fetch_array($result, MYSQLI_BOTH)){
                        ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['no_registerasi']; ?></td>  
                        <td><?php echo $data['nama_lengkap']; ?></td>  
                        <td><?php echo $data['tempat_lahir']; ?></td> 
                        <td><?php echo $data['tgl_lahir']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>   
                        <td style="width:100px;text-align: center;">
                        <a class='waves-effect waves-light modal-trigger' href='#modal2<?php echo $data['id_pasien']; ?>'>|Detail|</a>
                        <?php echo "
                        <a href='pasien_form_ubah.php?id_pasien=$data[id_pasien]'>|Ubah|</a>
                        <a href='pasien_proses_hapus.php?id_pasien=$data[id_pasien]' onclick=\"return confirm('Anda yakin akan menghapus data ?')\">|Hapus|</a>";
                        ?>
                        </td> 
                        </tr>  

                            <!-- Awal Modal -->
                            <div id="modal2<?php echo $data['id_pasien']; ?>" class="modal modal-fixed-footer">
                                  <div class="modal-content">
                                    <h4>Data Pasien</h4>
                                          <ul class="collection">
                                          <li class="collection-item">No Registrasi : <?php echo $data['no_registerasi']; ?></li>
                                          <li class="collection-item">Nama Lengkap : <?php echo $data['nama_lengkap']; ?></li>
                                          <li class="collection-item">Tempat Lahir : <?php echo $data['tempat_lahir']; ?></li>
                                          <li class="collection-item">Tanggal Lahir : <?php echo $data['tgl_lahir']; ?></li>
                                          <li class="collection-item">Jenis Kelamin : <?php echo $data['jenis_kelamin']; ?></li>
                                          <li class="collection-item">Agama : <?php echo $data['agama']; ?></li>
                                          <li class="collection-item">No Telepon : <?php echo $data['no_telepon']; ?></li>
                                          <li class="collection-item">No Telepon Lain : <?php echo $data['no_telepon_lain']; ?></li>  
                                          <li class="collection-item">Nama Ibu Kandung : <?php echo $data['nama_ibu_kandung']; ?></li>
                                          <li class="collection-item">Pekerjaan : <?php echo $data['pekerjaan']; ?></li>
                                          <li class="collection-item">Alamat :  <?php echo $data['alamat_jln']; ?></li>
                                          <li class="collection-item">Kabupaten/Kota : <?php echo $data['kabupaten_kota']; ?></li>
                                          <li class="collection-item">Kecamatan : <?php echo $data['kecamatan']; ?></li>
                                          <li class="collection-item">Desa : <?php echo $data['desa']; ?></li>
                                          <li class="collection-item">Rt/Rw : <?php echo $data['rt_rw']; ?></li>
                                          </ul>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="javascript:;" class="modal-action modal-close waves-effect waves-green btn-flat ">Tutup</a>
                                  </div>
                              </div>
                             <!-- Akhir Modal --> 
                             
                        <?php
                        }
                        ?>
                   </tbody>
                    </table>
                    <br/><br/><br/>
                    <!--Form Advance-->
            <div class="row">
              <div class="col s12 m12 l12">
                <div class="card-panel">
                  <h4 class="header2">Filter Laporan Data Pasien</h4>
                  <div class="row">

                    <form class="col s12" action="pasien_filter_one.php" method="POST">

                    <div class="row">
                        <div class="input-field col s12">
                          <input type="text" name="no_registerasi" required="required">
                          <label for="no_registerasi">No Registrasi</label>
                        </div>
                      </div>   

                     <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="filter_one">Cari Data
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                   </div>
              </form>

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
    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
      <!--materialize js-->
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
      <!--prism-->
    <script type="text/javascript" src="../assets/js/prism.js"></script>
      <!--scrollbar-->
    <script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../assets/js/data-tables.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../assets/js/plugins.js"></script>
    <!--modal JS-->
    <script type="text/javascript">
      $(function() {
          $('.modal').modal();
          //$('#modal2').modal('open');
          //$('#modal2').modal('close');
      });
    </script>
   <!-- Custom -->
    <script type="text/javascript" src="../assets/js/custom-script.js"></script>
  </body>
</html>
<?php } ?>