<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Kamar</title>
    <script>window.print()</script>
</head>
<body>
<p align="center"><img src="../config/gambar_tampilan/favicon/kepala_surat.jpg" alt="kepala_surat" style="width:100%"></p>
    <h1><p align="center">Laporan Data Kamar Kosong Rumah Sakit Islam Banjarmasin</p></h1>
        <table style="border-collapse: collapse; width: 100%;" border="1px">
            <thead>
                <tr>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No Kamar</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Kamar</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Kelas</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jumlah Tempat Tidur</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Lokasi</th>
                </tr>
                </tr>
                    <tbody>
                     <?php
                     include '../config/koneksiDB.php';  
                      $query="SELECT * FROM kamar WHERE status = 'On' ORDER BY id_kamar DESC";
                      $result=mysqli_query($koneksi, $query) or die(mysqli_error());

                      while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
                      {?>
                       <tr style="background-color: #f2f2f2;">  
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['no_kamar']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_kamar']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['kelas']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jumlah_tt']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['lokasi']); ?></td>
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