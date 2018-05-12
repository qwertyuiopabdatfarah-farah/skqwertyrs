<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['simpan_ketenagaan'])) {
  $id_pegawai       = $_POST["id_pegawai"];
  $nama_ketenagaan  = $_POST["nama_ketenagaan"];
  $jenis_ketenagaan = $_POST['jenis_ketenagaan'];
  $status           = $_POST['status'];
  $keterangan       = $_POST['keterangan'];
 	

include 'config/koneksiDB.php'; 
$cekdata = "SELECT id_pegawai FROM ketenagaan_rs WHERE id_pegawai='$id_pegawai'";
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
                  window.location.href = "ketenagaan_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}
else{
$query_simpan = 'INSERT INTO ketenagaan_rs (id_pegawai,
                                            nama_ketenagaan,
                                            jenis_ketenagaan,
                                            status,
                                            keterangan)
	                VALUES ("'.$id_pegawai.'",
	                       "'.$nama_ketenagaan.'", 
	                       "'.$jenis_ketenagaan.'", 
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
                  window.location.href = "ketenagaan_form_simpan.php";
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