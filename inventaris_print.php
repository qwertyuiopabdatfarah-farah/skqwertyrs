<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Pegawai</title>
    <script>window.print()</script>
</head>
<body>
<p align="center"><img src="kepala_surat/kepala_surat.jpg" alt="kepala_surat" style="width:100%"></p>
    <h1><p align="center">Laporan Data Pegawai</p></h1>
        <table style="border-collapse: collapse; width: 100%">
            <thead>
                <tr>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No</th>
                <th style=" text-align: left; background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nip</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Nama Pegawai</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jenis Kelamin</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Agama</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Tanggal Lahir</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">No Telepon</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Email Pegawai</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Jabatan</th>
                <th style=" text-align: left;background-color: #699FF0; color: white; border-bottom:1px dotted #000712">Alamat</th>
                </tr>
                    <tbody>
                    
                     <?php
                     include 'config/koneksiDB.php';  
                     $query="SELECT * FROM tbl_pegawai";
                     $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                     $no=1; //penomoran 
                     while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){?>
                        <tr style="background-color: #f2f2f2;">
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $no++; ?></td>   
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['nip']; ?></td> 
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['nama_pegawai']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jenis_kelamin']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['agama']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['tgl_lahir']; ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['no_tlp']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo $row['email']; ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['jabatan']); ?></td>
                        <td style="text-align: left;padding: 8px; border-bottom:1px dotted #000712"><?php echo ucwords($row['alamat']); ?></td>
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