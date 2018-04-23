<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['kirim_sms'])) {
  $id_sms           = $_POST['id_sms'];
  $no_registerasi   = $_POST['no_registerasi'];
  $nama_lengkap     = $_POST['nama_lengkap'];
  $no_telepon       = $_POST['no_telepon'];
  $nama_ibu_kandung = $_POST['nama_ibu_kandung'];
  $tempat_lahir     = $_POST['tempat_lahir'];
  $tgl_lahir        = $_POST['tgl_lahir'];
  $jenis_kelamin    = $_POST['jenis_kelamin'];
  $alamat_jln       = $_POST['alamat_jln'];




//https://control.txtlocal.co.uk/docs/api/code/post/
//https://platform.clickatell.com/messages/http/send?apiKey=Uv0_5Cy7Sc-GW9YjgdZL7g==&to=6285351644655&content=Hai
$username        = "erwinlocalhost90@gmail.com";
$hash            = "511b9e794a09aa0c3b0e8b857cb2a5cbe8e6c6ff40f5aea3510437abd84c4145";
$test            = "0";
$sender          = "API Test";
$no_registerasis = urlencode($no_registerasi);

$data = "username=".$username."&hash=".$hash."&message=".$no_registerasis."&sender=".$sender."&numbers=".$no_telepon."&test=".$test;
$ch = curl_init('http://api.txtlocal.com/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);


include 'config/koneksiDB.php'; 
//update log sms
$sms_update = 'UPDATE log_sms set status = "Sudah Terkirim" WHERE id_sms="'.$id_sms.'"';
$hasil = mysqli_query($koneksi, $sms_update);  
if($hasil){
		echo'
          <script type="text/javascript">
            setTimeout(function () {    
            swal({
              title: "Berhasil !",
              text: "Berhasil Terkirim",
              type: "success",
              timer: 2000,
              showConfirmButton: true
            }, function(){
                  window.location.href = "sms_data.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
	}else{
		echo "<h2><div style='color:red;text-align:center;'>--- Ada Yang Salah Cek Querynya--- </div></h2>";
	}

}else{
	echo "<h2><div style='color:red;text-align:center;'>--- 404 Forbiden, SILAHKAN KEMBALI--- </div></h2>";
 }
?>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>  
</body>
</html>