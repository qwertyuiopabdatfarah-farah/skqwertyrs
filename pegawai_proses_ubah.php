<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php 
if (isset($_POST['ubah_pegawai'])) {
	$id_pegawai       = $_POST['id_pegawai'];
    $nama_pegawai     = $_POST['nama_pegawai'];
    $jabatan_pegawai  = $_POST['jabatan_pegawai'];
    $jenis_pegawai    = $_POST['jenis_pegawai'];
    $nama_pt          = $_POST['nama_pt'];
    $tgl_lahir        = $_POST['tgl_lahir'];
    $tgl_masuk_kerja  = $_POST['tgl_masuk_kerja'];
    $tgl_keluar_kerja = $_POST['tgl_keluar_kerja'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $agama            = $_POST['agama'];
    $pendidikan_akhir = $_POST['pendidikan_akhir'];
    $no_telepon       = $_POST['no_telepon'];
    $no_telepon_rumah = $_POST['no_telepon_rumah'];
    $kabupaten_kota   = $_POST['kabupaten_kota'];
    $kecamatan        = $_POST['kecamatan'];
    $desa             = $_POST['desa'];
    $rt_rw            = $_POST['rt_rw'];
    $alamat_jln       = $_POST['alamat_jln'];
	
include 'config/koneksiDB.php'; 
$ubah = 'UPDATE pegawai set 
              nama_pegawai     = "'.$nama_pegawai.'",
							jabatan_pegawai  = "'.$jabatan_pegawai.'", 
							jenis_pegawai    = "'.$jenis_pegawai.'",
              nama_pt          = "'.$nama_pt.'",
							tgl_lahir        = "'.$tgl_lahir.'", 
							tgl_masuk_kerja  = "'.$tgl_masuk_kerja.'",
							tgl_keluar_kerja = "'.$tgl_keluar_kerja.'", 
							jenis_kelamin    = "'.$jenis_kelamin.'",
							agama            = "'.$agama.'",
							pendidikan_akhir = "'.$pendidikan_akhir.'", 
							no_telepon       = "'.$no_telepon.'",
							no_telepon_rumah = "'.$no_telepon_rumah.'",
							kabupaten_kota   = "'.$kabupaten_kota.'",
							kecamatan        = "'.$kecamatan.'",
							desa             = "'.$desa.'",
							rt_rw            = "'.$rt_rw.'",
							alamat_jln       = "'.$alamat_jln.'"
WHERE id_pegawai="'.$id_pegawai.'"';

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
                  window.location.href = "pegawai_data.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}

}else{
	echo "<h2><div style='color:red;text-align:center;'>--- Jangan Pernah Datang Kesisni--- </div></h2>";
}

?>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>  
</body>
</html>