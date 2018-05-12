<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php 
if (isset($_POST['ubah_pelayanan'])) {
  $id_pelayanan = $_POST['id_pelayanan'];
  $id_pasien    = $_POST['id_pasien'];
  $id_pegawai   = $_POST['id_pegawai'];
  $id_kamar     = $_POST['id_kamar'];
  $keluhan      = $_POST['keluhan'];
  $diagnosa     = $_POST['diagnosa'];
  $tgl_masuk    = $_POST['tgl_masuk'];
  $tgl_keluar   = $_POST['tgl_keluar'];
  $keterangan   = $_POST['keterangan'];
	
include 'config/koneksiDB.php'; 
//update dokter
$query_update_kamar = 'UPDATE pegawai set jumlah = jumlah-1 WHERE id_pegawai="'.$id_pegawai.'"';
$query = mysqli_query($koneksi, $query_update_kamar);  
//Update Kamar  
$query_update_kamar = 'UPDATE kamar set status = "On" WHERE id_kamar="'.$id_kamar.'"';
$query = mysqli_query($koneksi, $query_update_kamar);
//uppdate Pasien
$query_update_pasien = 'UPDATE pasien set status = "Keluar" WHERE id_pasien="'.$id_pasien.'"';
$query = mysqli_query($koneksi, $query_update_pasien);
$ubah = 'UPDATE pelayanan set 
              id_pasien  = "'.$id_pasien.'",
              id_pegawai = "'.$id_pegawai.'", 
              id_kamar   = "'.$id_kamar.'",
              keluhan    = "'.$keluhan.'",
              diagnosa   = "'.$diagnosa.'",
              tgl_masuk  = "'.$tgl_masuk.'", 
              tgl_keluar = "'.$tgl_keluar.'",
              keterangan = "'.$keterangan.'"
WHERE id_pelayanan="'.$id_pelayanan.'"';

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
                  window.location.href = "pelayanan_pasien_dlm_rawat_inap.php";
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