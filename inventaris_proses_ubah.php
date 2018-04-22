<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php 
if (isset($_POST['ubah_inventaris'])) {
   $id_inventaris = $_POST['id_inventaris'];
   $no_inventaris = $_POST["no_inventaris"];
   $id_kamar      = $_POST["id_kamar"];
   $jenis_barang  = $_POST['jenis_barang'];
   $kondisi       = $_POST['kondisi'];
   $jumlah        = $_POST['jumlah'];
   $keterangan    = $_POST['keterangan'];
	
include 'config/koneksiDB.php'; 
$ubah = 'UPDATE inventaris set no_inventaris = "'.$no_inventaris.'",
                               id_kamar      = "'.$id_kamar.'",
                               jenis_barang  = "'.$jenis_barang.'", 
                               kondisi       = "'.$kondisi.'",
                               jumlah        = "'.$jumlah.'", 
                               keterangan    = "'.$keterangan.'"
WHERE id_inventaris="'.$id_inventaris.'"';

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
                  window.location.href = "inventaris_data.php";
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