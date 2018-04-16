<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php 
if (isset($_POST['ubah_pasien'])) {
	$id_pasien       = $_POST['id_pasien'];
	$nama_lengkap    = $_POST['nama_lengkap'];
	$tempat_lahir    = $_POST['tempat_lahir'];
	$tgl_lahir       = $_POST['tgl_lahir'];
	$jenis_kelamin   = $_POST['jenis_kelamin'];
	$agama           = $_POST['agama'];
	$no_telepon      = $_POST['no_telepon'];
	$no_telepon_lain = $_POST['no_telepon_lain'];
	$pekerjaan       = $_POST['pekerjaan'];
	$alamat_jln      = $_POST['alamat_jln'];
	$kabupaten_kota  = $_POST['kabupaten_kota'];
	$kecamatan       = $_POST['kecamatan'];
	$desa            = $_POST['desa'];
	$rt_rw           = $_POST['rt_rw'];
	
include 'config/koneksiDB.php'; 
$ubah = 'UPDATE pasien set  nama_lengkap    = "'.$nama_lengkap.'",
							tempat_lahir    = "'.$tempat_lahir.'", 
							tgl_lahir       = "'.$tgl_lahir.'",
							jenis_kelamin   = "'.$jenis_kelamin.'", 
							agama           = "'.$agama.'",
							no_telepon      = "'.$no_telepon.'",
							no_telepon_lain = "'.$no_telepon_lain.'",
							pekerjaan       = "'.$pekerjaan.'",
							alamat_jln      = "'.$alamat_jln.'",
							kabupaten_kota  = "'.$kabupaten_kota.'",
							kecamatan       = "'.$kecamatan.'",
							desa            = "'.$desa.'",
							rt_rw           = "'.$rt_rw.'"
WHERE id_pasien="'.$id_pasien.'"';

$query = mysqli_query($koneksi, $ubah);
if(!$query){
	echo "Gagal Diubah";
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
                  window.location.href = "pasien_data.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}

}else{
	echo "<h2><div style='color:red;text-align:center;'>--- Ada Yang Salah Cek Querynya--- </div></h2>";
}

?>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>  
</body>
</html>