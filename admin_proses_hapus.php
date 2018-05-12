<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include 'config/koneksiDB.php'; 
$id_admin = $_GET['id_admin'];
$sql 	       = 'DELETE FROM admin WHERE id_admin="'.$id_admin.'"';
$berhasil	   = mysqli_query($koneksi,$sql);
if(!$berhasil){
	echo "<h2><div style='color:red;text-align:center;'>--- Ada Yang Salah Cek Querynya--- </div></h2>";
}else{
echo '<script type="text/javascript">
            setTimeout(function () {    
            swal({
              title: "Berhasil !",
              text: "Data Berhasil Dihapus",
              type: "success",
              timer: 2000,
              showConfirmButton: true
            }, function(){
                  window.location.href = "admin_data.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}
?>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>  
</body>
</html>