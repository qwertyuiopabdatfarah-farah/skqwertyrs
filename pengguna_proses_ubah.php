<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php 
if (isset($_POST['ubah_pengguna'])) {
    $id_pengguna    = $_POST['id_pengguna'];
	$nama           = $_POST['nama'];
	$username       = $_POST['username'];
	$email          = $_POST['email'];
	
include 'config/koneksiDB.php'; 
$ubah = 'UPDATE pengguna set nama     = "'.$nama.'",
							 username = "'.$username.'",
							 email    = "'.$email.'"
WHERE id_pengguna="'.$id_pengguna.'"';

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
                  window.location.href = "pengguna_data.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}

}else{
	echo "<h2><div style='color:red;text-align:center;'>--- Janagan Kesisni --- </div></h2>";
}

?>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>  
</body>
</html>