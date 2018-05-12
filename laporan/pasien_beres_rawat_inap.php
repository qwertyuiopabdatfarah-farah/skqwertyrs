<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farah Saleh Abdat</title>
    <script>window.print()</script>
</head>
<body>
<p align="center"><img src="../config/gambar_tampilan/favicon/kepala_surat.jpg" alt="kepala_surat" style="width:100%"></p>
    <h1><p align="center">Laporan Data Pasien Beres Rawat Inap Rumah Sakit Islam Banjarmasin</p></h1>
        <table style="border-collapse: collapse; width: 100%: text-align: 100px;" border="1px">
            <thead>
                <tr>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No Registerasi</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Lengkap</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nip Dokter</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Dokter Pemeriksa</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Tempat Lahir Pasien</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Tanggal Lahir Pasien</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jenis Kelamin Pasien</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Agama</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No Telepon</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Pekerjaan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Keluhan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Diagnosa</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Tgl Masuk</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Tgl Keluar</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Alamat Jalan</th> 
                </tr>
                </tr>
                    <tbody>
                     <?php
                     include '../config/koneksiDB.php';  
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
                                         WHERE pelayanan.diagnosa IS NOT NULL AND pelayanan.tgl_keluar IS NOT NULL AND pasien.status='Keluar'";
                                        $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                
                                        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                            ?>
                       <tr style="background-color: #f2f2f2;">  
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['no_registerasi']; ?></td> 
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_lengkap']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nip']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_pegawai']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['tempat_lahir']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['tgl_lahir']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jenis_kelamin']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['agama']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['no_telepon']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['pekerjaan']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['keluhan']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['diagnosa']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['tgl_masuk']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['tgl_keluar']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['alamat_jln']); ?>, <?php echo ucwords($row['rt_rw']); ?>, <?php echo ucwords($row['desa']); ?>, <?php echo ucwords($row['kecamatan']); ?>, <?php echo ucwords($row['kabupaten_kota']); ?></td>
                        </tr>
                     <?php
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
        <td align="center">Banjarmasin, <?php echo $tgl;?><br>RUMAH SAKIT ISLAM BANJARMASIN <br>KALIMANTAN SELATAN
    </tr>
</table>
</body>
</html>