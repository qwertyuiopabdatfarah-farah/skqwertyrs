<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farah Saleh Abdat</title>
    <script>window.print()</script>
</head>
<body>
<p align="center"><img src="../config/gambar_tampilan/favicon/kepala_surat.jpg" alt="kepala_surat" style="width:100%"></p>
    <h1><p align="center">Laporan Data Ketenagaan Kerja Rumah Sakit Islam Banjarmasin</p></h1>
        <table style="border-collapse: collapse; width: 100%: text-align: 100px;" border="1px">
            <thead>
                <tr>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nip Pegawai</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Lengkap</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jabatan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jenis Pegawai</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jenis Kelamin</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No Hp/Telepon</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Ketenagaan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jenis Ketenagaan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Status</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Keterangan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Alamat Lengkap</th>
                </tr>
                </tr>
                    <tbody>
                     <?php
                     include '../config/koneksiDB.php';  
                     $query="SELECT pegawai.nip,
                                    pegawai.nama_pegawai, 
                                    pegawai.jabatan_pegawai,
                                    pegawai.jenis_pegawai, 
                                    pegawai.jenis_kelamin,
                                    pegawai.no_telepon,
                                    pegawai.alamat_jln,
                                    pegawai.rt_rw,
                                    pegawai.desa,
                                    pegawai.kecamatan,
                                    pegawai.kabupaten_kota,
                                    ketenagaan_rs.id_ketenagaan, 
                                    ketenagaan_rs.id_pegawai, 
                                    ketenagaan_rs.nama_ketenagaan, 
                                    ketenagaan_rs.jenis_ketenagaan, 
                                    ketenagaan_rs.status, 
                                    ketenagaan_rs.keterangan 
                                    FROM ketenagaan_rs LEFT JOIN pegawai 
                                    ON pegawai.id_pegawai = ketenagaan_rs.id_pegawai";
                      $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
                      {?>
                       <tr style="background-color: #f2f2f2;">  
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['nip']; ?></td> 
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_pegawai']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jabatan_pegawai']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jenis_pegawai']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jenis_kelamin']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['no_telepon']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_ketenagaan']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jenis_ketenagaan']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['status']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['keterangan']); ?></td>
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