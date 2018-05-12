<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farah Saleh Abdat</title>
    <script>window.print()</script>
</head>
<body>
<p align="center"><img src="../config/gambar_tampilan/favicon/kepala_surat.jpg" alt="kepala_surat" style="width:100%"></p>
    <h1><p align="center">Laporan Data Barang/Inventaris Kamar Rumah Sakit Islam Banjarmasin</p></h1>
        <table style="border-collapse: collapse; width: 100%" border="1px">
            <thead>
                <tr>
                    <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No Inventaris</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Kamar</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Kelas Kamar</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Lokasi</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jenis Barang</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Kondisis</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jumlah</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Keteranagan</th>
                </tr>
                    <tbody>
                     <?php
                     include '../config/koneksiDB.php';  
                     $query="SELECT kamar.nama_kamar, 
                                         kamar.kelas,
                                         kamar.lokasi, 
                                         inventaris.id_inventaris, 
                                         inventaris.no_inventaris, 
                                         inventaris.jenis_barang, 
                                         inventaris.kondisi, 
                                         inventaris.jumlah, 
                                         inventaris.keterangan FROM inventaris LEFT JOIN kamar 
                                         ON kamar.id_kamar = inventaris.id_kamar";
                     $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                     $no=1; //penomoran 
                     while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){?>
                        <tr style="background-color: #f2f2f2;">
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $no++; ?></td>   
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['no_inventaris']; ?></td> 
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_kamar']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['kelas']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['lokasi']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jenis_barang']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['kondisi']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jumlah']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['keterangan']); ?></td>
                        </tr>
                    <?php } ?>
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