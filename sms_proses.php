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



//kalsel 2 009
//https://control.txtlocal.co.uk/docs/api/code/post/
//https://platform.clickatell.com/messages/http/send?apiKey=Uv0_5Cy7Sc-GW9YjgdZL7g==&to=6285351644655&content=Hai
//https://www.textlocal.com/signup/
// Akunnya.
$username = "abdatfarah@gmail.com";  //yang diganti kalau daftar baru
$hash = "f1eb85615e2f1a29afb569d2e00423e8959d3c56c3998d48a2cd2539b51da236";//ini yang diganti kalau daftar baru

//variabel 0
$test    = "0";
//nomer telepon penerima SMS berdasarkan pasien yang sdah terdaftar
$numbers = $no_telepon; 
$sender  = "API Test";
$message = "No Registrasi = {$no_registerasi} Nama Lengkap = {$nama_lengkap} Nama Ibu Kandung = {$nama_ibu_kandung} Tempat Lahir = {$tempat_lahir} Jenis Kelamin = {$jenis_kelamin} Alamat = {$alamat_jln}";

$message = urlencode($message);


$message = urlencode($message);
$data    = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
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