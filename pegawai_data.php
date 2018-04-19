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
                <h4 class="header">Data Pegawai Rumah Sakit</h4>
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                        <thead>
                        <tr>
                        <th> No </th>
                        <th> NIP </th>
                        <th> Nama Pegawai RS </th>
                        <th> Jabatan Pegawai</th>
                        <th> Jenis Pegawai </th>
                        <th style="width:100px;text-align: center;"> Aksi </th>
                        </tr>
                        </thead>
                       <tbody>
                        <?php
                        include 'config/koneksiDB.php';  
                        $query="SELECT * FROM pegawai";
                        $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                        $no=1; //penomoran 
                        while ($data = mysqli_fetch_array($result, MYSQLI_BOTH)){
                        ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nip']; ?></td>  
                        <td><?php echo $data['nama_pegawai']; ?></td>  
                        <td><?php echo $data['jabatan_pegawai']; ?></td> 
                        <td><?php echo $data['jenis_pegawai']; ?></td>
                        <td style="width:100px;text-align: center;">
                        <a class='waves-effect waves-light modal-trigger' href='#modal2<?php echo $data['id_pegawai']; ?>'>|Detail|</a>
                        <?php echo "
                        <a href='pegawai_form_ubah.php?id_pegawai=$data[id_pegawai]'>|Ubah|</a>
                        <a href='pegawai_proses_hapus.php?id_pegawai=$data[id_pegawai]' onclick=\"return confirm('Anda yakin akan menghapus data ?')\">|Hapus|</a>";
                        ?>
                        </td> 
                        </tr>  

                            <!-- Awal Modal -->
                            <div id="modal2<?php echo $data['id_pegawai']; ?>" class="modal modal-fixed-footer">
                                  <div class="modal-content">
                                    <h4>Data Pegawai Rumah Sakit</h4>
                                          <ul class="collection">
                                          <li class="collection-item">NIP : <?php echo $data['nip']; ?></li>
                                          <li class="collection-item">Nama : <?php echo $data['nama_pegawai']; ?></li>
                                          <li class="collection-item">Jabatan : <?php echo $data['jabatan_pegawai']; ?></li>
                                          <li class="collection-item">Jenis : <?php echo $data['jenis_pegawai']; ?></li>
                                          <li class="collection-item">Tanggal Lahir : <?php echo $data['tgl_lahir']; ?></li>
                                          <li class="collection-item">Tanggal Masuk Kerja : <?php echo $data['tgl_masuk_kerja']; ?></li>
                                          <li class="collection-item">Tanggal Keluar Kerja : <?php echo $data['tgl_keluar_kerja']; ?></li>
                                          <li class="collection-item">Jenis Kelamin : <?php echo $data['jenis_kelamin']; ?></li>
                                          <li class="collection-item">Agama : <?php echo $data['agama']; ?></li>
                                          <li class="collection-item">Pendidikan Terakhir : <?php echo $data['pendidikan_akhir']; ?></li>
                                          <li class="collection-item">No Telepon :  <?php echo $data['no_telepon']; ?></li>
                                          <li class="collection-item">No Telepon Rumah: <?php echo $data['no_telepon_rumah']; ?></li>
                                           <li class="collection-item">Alamat Jalan : <?php echo $data['alamat_jln']; ?></li>
                                          <li class="collection-item">Kabupaten/Koata : <?php echo $data['kabupaten_kota']; ?></li>
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