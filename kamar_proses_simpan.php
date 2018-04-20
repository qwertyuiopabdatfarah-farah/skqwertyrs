<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['simpan_kamar'])) {
  $no_kamar     = $_POST["no_kamar"];
  $nama_kamar   = $_POST["nama_kamar"];
  $kelas        = $_POST['kelas'];
  $jumlah_orang = $_POST['jumlah_orang'];
  $lokasi       = $_POST['lokasi'];
  $status       = $_POST['status'];
  $keterangan   = $_POST['keterangan'];
	

include 'config/koneksiDB.php'; 
$cekdata = "select no_kamar from kamar where no_kamar='$no_kamar'";
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
                  window.location.href = "kamar_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}
else{
$query_simpan = 'INSERT INTO kamar (no_kamar,
                                     nama_kamar,
                                     kelas,
                                     jumlah_orang,
                                     lokasi,
                                     status, 
                                     keterangan)
	                VALUES ("'.$no_kamar.'",
	                       "'.$nama_kamar.'", 
	                       "'.$kelas.'", 
	                       "'.$jumlah_orang.'",
	                       "'.$lokasi.'",
	                       "'.$status.'", 
	                       "'.$keterangan.'")';

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
                  window.location.href = "kamar_form_simpan.php";
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