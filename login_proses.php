<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php 

@$username = $_POST['username']; 
@$password = md5($_POST['password']); 
@$sql      = "SELECT * FROM pengguna WHERE username='$username' and password='$password'";
include 'config/koneksiDB.php'; 
@$result   = mysqli_query($koneksi, $sql); 
@$count    = mysqli_num_rows($result); 
if($count==1){ 
  @$datalogin = mysqli_fetch_array($result, MYSQLI_ASSOC);
  session_start(); 
  @$_SESSION['id_pengguna'] = $datalogin['id_pengguna'];
  @$_SESSION['nama']        = $datalogin['nama'];
  @$_SESSION['username']    = $datalogin['username'];
  @$_SESSION['email']       = $datalogin['email'];
  header('Location: dashboard.php');     
}
 else{
        echo'
          <script type="text/javascript">
            setTimeout(function () {    
            swal({
              title: "Maaf!",
              text: "Gagal Masuk, Salah Autentikasi",
              type: "error",
              timer: 2000,
              showConfirmButton: true
            }, function(){
                  window.location.href = "login_form.php";
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