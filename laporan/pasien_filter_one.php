<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Pasien</title>
    <script>window.print()</script>
</head>
<body>
<p align="center"><img src="../config/gambar_tampilan/favicon/kepala_surat.jpg" alt="kepala_surat" style="width:100%"></p>
    <h1><p align="center">Laporan Data Pasien Rumah Sakit Islam Banjarmasin</p></h1>
        <table style="border-collapse: collapse; width: 100%">
            <thead>
            <tr> 
               <th style=" background-color: #699FF0; color: white; "> Data Pasien </th>
               <th style=" background-color: #699FF0; color: white; "> Keterangan </th>
               </tr>
                </tr>
                    <tbody>
                     <?php
                     include '../config/koneksiDB.php'; 
                     if (isset($_POST['filter_one'])) {
                     $tgl_masuk = $_POST['tgl_masuk']; 
                     $query="SELECT pasien.nama_lengkap,
                                         pasien.no_registerasi,
                                         pasien.nama_ibu_kandung, 
                                         pasien.tempat_lahir,
                                         pasien.tgl_lahir,
                                         pasien.jenis_kelamin,
                                         pasien.agama,
                                         pasien.no_telepon,
                                         pasien.pekerjaan,
                                         pasien.alamat_jln,
                                         pasien.kabupaten_kota,
                                         pasien.kecamatan,
                                         pasien.desa,
                                         pegawai.nama_pegawai,
                                         pegawai.nip,
                                         pasien.rt_rw,
                                         kamar.nama_kamar,
                                         kamar.lokasi,          
                                         pelayanan.id_pelayanan, 
                                         pelayanan.keluhan, 
                                         pelayanan.diagnosa, 
                                         pelayanan.tgl_masuk,
                                         pelayanan.tgl_keluar, 
                                         pelayanan.keterangan 
                                         FROM pelayanan 
                                         LEFT JOIN pasien 
                                         ON pasien.id_pasien = pelayanan.id_pasien
                                         LEFT JOIN pegawai 
                                         ON pegawai.id_pegawai = pelayanan.id_pegawai
                                         LEFT JOIN kamar ON Kamar.id_kamar = pelayanan.id_kamar
                                         WHERE pelayanan.diagnosa IS NOT NULL AND pelayanan.tgl_keluar IS NOT NULL AND pasien.no_registerasi = '$no_registerasi'";
                                         $result = mysqli_query($koneksi, $query) or die(mysqli_error());
                                         if (mysqli_num_rows($result) > 0) {
                                         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                         ?>
                       <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> No Registrasi </th> 
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['no_registerasi']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Nama Lengkap </th> 
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['nama_lengkap']; ?></td>
                        </tr>
                        
                         <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Nip Dokter </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['nip']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Nama Dokter Pemeriksa </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['nama_pegawai']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Nama Kamar </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['nama_kamar']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Lokasi Kamar </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['lokasi']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Keluhan </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['keluhan']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Diagnosa </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['diagnosa']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Tanggal Masuk RS </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['tgl_masuk']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Tanggal Keluar RS</th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['tgl_keluar']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Keteranagan </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['keterangan']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Tempat Lahir </th> 
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['tempat_lahir']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Tanggal Lahir </th> 
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['tanggal_lahir']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Jenis Kelamin </th> 
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['jenis_kelamin']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Agama </th> 
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['agama']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> No HP </th> 
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['no_telepon']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Pekerjaan </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['pekerjaan']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Alamat Jalan </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['alamat_jln']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Kota </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['kabupaten_kota']; ?></td>
                        </tr>


                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Kecamatan </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['kecamatan']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> Desa </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['desa']; ?></td>
                        </tr>

                        <tr style="background-color: #f2f2f2;"> 
                         <th style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"> RT/RW </th>
                         <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['rt_rw']; ?></td>
                        </tr>

                         
                     <?php
                     }
               }else{
                      echo "<h2><div style='color:red;text-align:center;'>--- Data yang Anda Cari Tidak Ada, SILAHKAN KEMBALI--- </div></h2>";
                               }
                     }else{
                        echo "<h2><div style='color:red;text-align:center;'>--- 404 Forbiden, SILAHKAN KEMBALI--- </div></h2>";
                     }                    
                      ?>
                    </tbody>
                </table>
        </div></p>
    <br><br>    
    <?php 
    $tgl = date('l, d-m-Y');
    ?>
    <table width="80%" align="right" border="0">
    <tr>
        <td width="20%"></td>
        <td align="center">BANJARMASIN, <?php echo $tgl;?><br>PENGEMBANGAN TEKNOLOGI INFORMASI DAN KOMUNIKASI (PTIK) ULM <br>KALIMANTAN SELATAN
        <br>KASUBAG<br>
        <img src="kepala_surat/ttd.png" alt="TandataTangan">
        <br/>
        EKA SETYA WIJAYA <br/>
        <hr width="20%"></hr>
        NIP. 12345678910</td>
    </tr>
</table>
</body>
</html>