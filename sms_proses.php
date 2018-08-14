<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
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

//Jika Habis kuotanya pake akun ini
//$api_key    = "b994112a";
//$api_secret = "5iEZLdwVIl0inwMx";
//$to         = "+6285351644655";
//$from       = "+6282253099902";  

$api_key    = "22fea0f2";
$api_secret = "cjlz1ZaBTSfJ01ar";
$to         =  $no_telepon;
$from       = '+6285351644655';
$text       = "No Registrasi = {$no_registerasi} Nama Lengkap = {$nama_lengkap} Nama Ibu Kandung = {$nama_ibu_kandung} Tempat Lahir = {$tempat_lahir} Jenis Kelamin = {$jenis_kelamin} Alamat = {$alamat_jln}";

/*https://rest.nexmo.com/sms/json?api_key=22fea0f2&api_secret=cjlz1ZaBTSfJ01ar&to=%2B6282253099902&from=%2B6285351644655&text=Ini+Adalah+SMS+Gate+Way*/

$url = "https://rest.nexmo.com/sms/json?";
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'api_key='.$api_key.'&api_secret='.$api_secret.'&to='.$to.'&from='.$from.'&text='.urlencode($text));
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
$results = curl_exec($curlHandle);
curl_close($curlHandle);

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