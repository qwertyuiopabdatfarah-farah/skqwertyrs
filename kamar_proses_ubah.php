<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php 
if (isset($_POST['ubah_kamar'])) {
	$id_kamar     = $_POST['id_kamar'];
	$nama_kamar   = $_POST['nama_kamar'];
	$kelas        = $_POST['kelas'];
	$jumlah_tt    = $_POST['jumlah_tt'];
	$lokasi       = $_POST['lokasi'];
	$status       = $_POST['status'];
	$keterangan   = $_POST['keterangan'];
	
include 'config/koneksiDB.php'; 
$ubah = 'UPDATE kamar set   nama_kamar   = "'.$nama_kamar.'",
							kelas        = "'.$kelas.'", 
							jumlah_tt    = "'.$jumlah_tt.'",
							lokasi       = "'.$lokasi.'", 
							status       = "'.$status.'",
							keterangan   = "'.$keterangan.'"
WHERE id_kamar="'.$id_kamar.'"';

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
                  window.location.href = "kamar_data.php";
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