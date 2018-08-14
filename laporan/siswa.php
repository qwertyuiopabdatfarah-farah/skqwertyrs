<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farah Saleh Abdat</title>
    <script>window.print()</script>
</head>
<body>
<p align="center"><img src="../config/gambar_tampilan/favicon/kepala_surat.jpg" alt="kepala_surat" style="width:100%"></p>
    <h1><p align="center">Laporan Data siswa rumah sakit Islam Banjarmasin</p></h1>
        <table style="border-collapse: collapse; width: 100%: text-align: 100px;" border="1px">
            <thead>
                <tr>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Id nis</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">kelas</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">jurusan</th>
                
                </tr>
                </tr>
                    <tbody>
                     <?php
                     include '../config/koneksiDB.php';  
                     $query = "SELECT * FROM siswa ORDER BY id_nis DESC";
                     $result = mysqli_query($koneksi, $query) or die(mysqli_error());
                     $no=1; //penomoran 
                     while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
                    {?>
                       <tr style="background-color: #f2f2f2;"> 
                       <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $no++; ?></td> 
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['id_nis']; ?></td> 
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['kelas']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jurusan']); ?></td>
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