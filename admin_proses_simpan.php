<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['simpan_admin'])) {
  $nama     = $_POST["nama"];
  $username = $_POST['username'];
  $password = md5($_POST['password']);


include 'config/koneksiDB.php'; 
$cekdata = "select username from admin where username='$username'";
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
                  window.location.href = "admin_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}
else{
$query_simpan = 'INSERT INTO admin (nama,
                                     username,
                                     password)
	                VALUES ("'.$nama.'",
	                       "'.$username.'",
	                       "'.$password.'")';

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
                  window.location.href = "admin_form_simpan.php";
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