<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php 
if (isset($_POST['ubah_ketenagaan'])) {
  $id_ketenagaan    = $_POST['id_ketenagaan'];
  $id_pegawai       = $_POST['id_pegawai'];
  $nama_ketenagaan  = $_POST['nama_ketenagaan'];
  $jenis_ketenagaan = $_POST['jenis_ketenagaan'];
  $status           = $_POST['status'];
  $keterangan       = $_POST['keterangan'];
	
include 'config/koneksiDB.php'; 
$ubah = 'UPDATE ketenagaan_rs set id_pegawai       = "'.$id_pegawai.'",
                                  nama_ketenagaan  = "'.$nama_ketenagaan.'", 
                                  jenis_ketenagaan = "'.$jenis_ketenagaan.'",
                                  status           = "'.$status.'", 
                                  keterangan       = "'.$keterangan.'"
WHERE id_ketenagaan="'.$id_ketenagaan.'"';

$query = mysqli_query($koneksi, $ubah);
if(!$query){
	echo "<h2><div style='color:red;text-align:center;'>--- Ada Yang Salah Cek Querynya--- </div></h2>";
}else{
	echo'
          <script type="text/javascript">
            setTimeout(function () {    
            swal({
              title: "Berhasil !",
              text: "Data Berhasil Diubah",
              type: "success",
              timer: 2000,
              showConfirmButton: true
            }, function(){
                  window.location.href = "ketenagaan_data.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}

}else{
	echo "<h2><div style='color:red;text-align:center;'>--- Opps,, Janagan Kesini Bro--- </div></h2>";
}

?>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>  
</body>
</html>