<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['simpan_statistik'])) {
    $bulan         = $_POST['bulan'];
    $tahun         = $_POST['tahun'];
    $jumlah_pasien = $_POST['jumlah_pasien'];


include 'config/koneksiDB.php'; 
$cekdata = "SELECT bulan, tahun FROM statistik_pasien WHERE bulan='$bulan' AND tahun='$tahun'";
$ada     = mysqli_query($koneksi, $cekdata) or die(mysqli_error());
if(mysqli_num_rows($ada)>0)
{ 
    echo'
          <script type="text/javascript">
            setTimeout(function () {    
            swal({
              title: "Maaf!",
              text: "Data Sudah Ada",
              type: "error",
              timer: 2000,
              showConfirmButton: true
            }, function(){
                  window.location.href = "statistik_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}
else{
$query_simpan = 'INSERT INTO statistik_pasien (bulan,
                                     tahun,
                                     jumlah_pasien)
                  VALUES ("'.$bulan.'",
                         "'.$tahun.'",
                         "'.$jumlah_pasien.'")';

$hasil = mysqli_query($koneksi, $query_simpan);
if($hasil){
    echo'
          <script type="text/javascript">
            setTimeout(function () {    
            swal({
              title: "Berhasil !",
              text: "Data Berhasil Disimpan",
              type: "success",
              timer: 2000,
              showConfirmButton: true
            }, function(){
                  window.location.href = "statistik_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
  }else{
    echo "<h2><div style='color:red;text-align:center;'>--- Ada Yang Salah Cek Querynya--- </div></h2>";
  }
 }

}else{
  echo "<h2><div style='color:red;text-align:center;'>--- 404 Forbiden, SILAHKAN KEMBALI--- </div></h2>";
 }
?>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>  
</body>
</html>