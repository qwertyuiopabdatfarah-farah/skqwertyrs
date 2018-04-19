<!DOCTYPE html>
<html>
<head>
  <title>Pesan</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['simpan_pegawai'])) {
    $nip              = $_POST["nip"];
    $nama_pegawai     = $_POST['nama_pegawai'];
    $jabatan_pegawai  = $_POST['jabatan_pegawai'];
    $jenis_pegawai    = $_POST['jenis_pegawai'];
    $tgl_lahir        = $_POST['tgl_lahir'];
    $tgl_masuk_kerja  = $_POST['tgl_masuk_kerja'];
    $tgl_keluar_kerja = $_POST['tgl_keluar_kerja'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $agama            = $_POST['agama'];
    $pendidikan_akhir = $_POST['pendidikan_akhir'];
    $kabupaten        = $_POST['kabupaten'];
    $kecamatan        = $_POST['kecamatan'];
    $desa             = $_POST['desa'];
    $rt_rw            = $_POST['rt_rw'];
    $alamat_jln       = $_POST['alamat_jln'];
    $no_telepon       = $_POST['no_telepon'];
    $no_telepon_rumah = $_POST['no_telepon_rumah'];
  
include 'config/koneksiDB.php'; 
$cekdata="SELECT nip FROM pegawai WHERE nip='$nip'";
$ada=mysqli_query($koneksi, $cekdata) or die(mysqli_error());
if(mysqli_num_rows($ada)>0)
{ 
    echo '<script type="text/javascript">
            setTimeout(function () {    
            swal({
              title: "Maaf!",
              text: "Data Sudah Ada",
              type: "error",
              timer: 2000,
              showConfirmButton: true
            }, function(){
                  window.location.href = "pegawai_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
}
else{
$query_simpan = 'INSERT INTO pegawai (nip, 
                                      nama_pegawai, 
                                      jabatan_pegawai, 
                                      jenis_pegawai, 
                                      tgl_lahir, 
                                      tgl_masuk_kerja,
                                      tgl_keluar_kerja,
                                      jenis_kelamin, 
                                      agama, 
                                      pendidikan_akhir, 
                                      kabupaten, 
                                      kecamatan,
                                      desa,
                                      rt_rw,
                                      alamat_jln,
                                      no_telepon,
                                      no_telepon_rumah)
                 VALUES ("'.$nip.'", 
                         "'.$nama_pegawai.'", 
                         "'.$jabatan_pegawai.'",
                         "'.$jenis_pegawai.'", 
                         "'.$tgl_lahir.'",
                         "'.$tgl_masuk_kerja.'", 
                         "'.$tgl_keluar_kerja.'",
                         "'.$jenis_kelamin.'", 
                         "'.$agama.'", 
                         "'.$pendidikan_akhir.'", 
                         "'.$kabupaten.'",
                         "'.$kecamatan.'", 
                         "'.$desa.'",
                         "'.$rt_rw.'",
                         "'.$alamat_jln.'",
                         "'.$no_telepon.'",
                         "'.$no_telepon_rumah.'")';

var_dump($query_simpan);
exit;
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
                  window.location.href = "pegawai_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
  }else{
    echo '<script type="text/javascript">
            setTimeout(function () {    
            swal({
              title: "Maaf!",
              text: "Ada Yang Salah",
              type: "error",
              timer: 2000,
              showConfirmButton: true
            }, function(){
                  window.location.href = "pegawai_form_simpan.php";
            });
            },10); 
            window.setTimeout(function(){ 
            } ,2000); 
            </script>';
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