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
                <h4 class="header">Data Admin</h4>
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                        <thead>
                        <tr>
                        <th> No </th>
                        <th> Nama admin </th>
                        <th> Username </th>
                        <th style="width:100px;text-align: center;"> Aksi </th>
                        </tr>
                        </thead>
                       <tbody>
                        <?php
                        include 'config/koneksiDB.php';  
                        $query = "SELECT * FROM admin ORDER BY id_admin DESC";
                        $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                        $no=1; //penomoran 
                        while ($data = mysqli_fetch_array($result, MYSQLI_BOTH)){
                        ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>  
                        <td><?php echo $data['username']; ?></td>  
                        <td style="width:100px;text-align: center;">
                        <?php echo "
                        <a href='admin_form_ubah.php?id_admin=$data[id_admin]'>|Ubah|</a>
                        <a href='admin_proses_hapus.php?id_admin=$data[id_admin]' onclick=\"return confirm('Anda yakin akan menghapus data ?')\">|Hapus|</a>";
                        ?>
                        </td> 
                        </tr> 
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