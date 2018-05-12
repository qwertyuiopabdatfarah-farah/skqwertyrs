<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['simpan_pasien'])) {
  $no_registerasi   = $_POST["no_registerasi"];
  $nama_lengkap     = $_POST['nama_lengkap'];
  $nama_ibu_kandung = $_POST['nama_ibu_kandung'];
  $tempat_lahir     = $_POST['tempat_lahir'];
  $tgl_lahir        = $_POST['tgl_lahir'];
  $jenis_kelamin    = $_POST['jenis_kelamin'];
  $agama            = $_POST['agama'];
  $no_telepon       = $_POST['no_telepon'];
  $no_telepon_lain  = $_POST['no_telepon_lain'];
  $pekerjaan        = $_POST['pekerjaan'];
  $kabupaten_kota   = $_POST['kabupaten_kota'];
  $kecamatan        = $_POST['kecamatan'];
  $desa             = $_POST['desa'];
  $rt_rw            = $_POST['rt_rw'];
  $alamat_jln       = $_POST['alamat_jln'];
	

include 'config/koneksiDB.php'; 
$cekdata = "select no_registerasi from pasien where no_registerasi='$no_registerasi'";
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
                  window.location.href = "pasien_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}
else{
$query_simpan = 'INSERT INTO pasien (no_registerasi,
                                     nama_lengkap,
                                     nama_ibu_kandung,
                                     tempat_lahir,
                                     tgl_lahir,
                                     jenis_kelamin,
                                     agama, 
                                     no_telepon, 
                                     no_telepon_lain, 
                                     pekerjaan, 
                                     kabupaten_kota, 
                                     kecamatan, desa, 
                                     rt_rw, 
                                     alamat_jln)
	                VALUES ("'.$no_registerasi.'",
	                       "'.$nama_lengkap.'",
                         "'.$nama_ibu_kandung.'", 
	                       "'.$tempat_lahir.'", 
	                       "'.$tgl_lahir.'",
	                       "'.$jenis_kelamin.'",
	                       "'.$agama.'", 
	                       "'.$no_telepon.'", 
	                       "'.$no_telepon_lain.'",
	                       "'.$pekerjaan.'", 
	                       "'.$kabupaten_kota.'", 
	                       "'.$kecamatan.'", 
	                       "'.$desa.'", 
	                       "'.$rt_rw.'", 
	                       "'.$alamat_jln.'")';

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
                  window.location.href = "pasien_form_simpan.php";
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