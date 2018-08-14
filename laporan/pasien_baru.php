<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farah Saleh Abdat</title>
    <script>window.print()</script>
</head>
<body>
<p align="center"><img src="../config/gambar_tampilan/favicon/kepala_surat.jpg" alt="kepala_surat" style="width:100%"></p>
    <h1><p align="center">Laporan Data Pasien Baru Rumah Sakit Islam Banjarmasin</p></h1>
        <table style="border-collapse: collapse; width: 100%: text-align: 100px;" border="1px">
            <thead>
                <tr>
                 <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No Registerasi</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Lengkap</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Ibu Kandung</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Tempat Lahir Pasien</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Tanggal Lahir Pasien</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jenis Kelamin Pasien</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Agama</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No Telepon</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Pekerjaan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Kabupaten/Kota</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Kecamatan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Desa</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Rt RW</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Alamat Jalan</th> 
                </tr>
                </tr>
                    <tbody>
                     <?php
                     include '../config/koneksiDB.php';  
                     $query = "SELECT * FROM pasien  WHERE status = 'Baru' ORDER BY id_pasien DESC";
                     $result = mysqli_query($koneksi, $query) or die(mysqli_error());
                     $no=1; //penomoran 
                     while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
                    {?>
                       <tr style="background-color: #f2f2f2;">  
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $no++; ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['no_registerasi']; ?></td> 
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_lengkap']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_ibu_kandung']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['tempat_lahir']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['tgl_lahir']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jenis_kelamin']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['agama']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['no_telepon']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['pekerjaan']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['kabupaten_kota']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['kecamatan']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['desa']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['rt_rw']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['alamat_jln']); ?></td>
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