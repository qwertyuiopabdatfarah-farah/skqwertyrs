<!DOCTYPE html>
<html>
<head>
  <title>Farah Saleh Abdat</title> 
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['simpan_pelayanan'])) {
  $id_pasien  = $_POST['id_pasien'];
  $id_pegawai = $_POST['id_pegawai'];
  $id_kamar   = $_POST['id_kamar'];
  $keluhan    = $_POST['keluhan'];
  $tgl_masuk  = $_POST['tgl_masuk'];
  $keterangan = $_POST['keterangan'];

include 'config/koneksiDB.php'; 

//Update Jumlah Kamar
$update_kamar_kurang_satu = 'UPDATE kamar set jumlah_tt = jumlah_tt-1 WHERE id_kamar="'.$id_kamar.'"';
$hasil = mysqli_query($koneksi, $update_kamar_kurang_satu);  
//update dokter
$query_update_pegawai = 'UPDATE pegawai set jumlah = jumlah+1 WHERE id_pegawai="'.$id_pegawai.'"';
$hasil = mysqli_query($koneksi, $query_update_pegawai);  
//Update Kamar  
//insert data log sms
//
$query_simpan_sms = 'INSERT INTO log_sms (id_pasien, id_kamar) VALUES ("'.$id_pasien.'","'.$id_kamar.'")';
$hasil = mysqli_query($koneksi, $query_simpan_sms);
//Insert Data pelayanan
//
//Update pasien
$query_update_pasien = 'UPDATE pasien set status = "Proses" WHERE id_pasien="'.$id_pasien.'"';
$hasil = mysqli_query($koneksi, $query_update_pasien);

$query_simpan = 'INSERT INTO pelayanan (id_pasien,
                                        id_pegawai,
                                        id_kamar,
                                        keluhan,
                                        tgl_masuk,
                                        keterangan)
	                VALUES ("'.$id_pasien.'",
                          "'.$id_pegawai.'",
                          "'.$id_kamar.'", 
                          "'.$keluhan.'", 
                          "'.$tgl_masuk.'",
                          "'.$keterangan.'")';

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
                  window.location.href = "pelayanan_form_simpan.php";
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