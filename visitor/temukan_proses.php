<?php
                        include 'config/koneksiDB.php';  
                        $query = "SELECT pasien.nama_lengkap,
                                         pasien.no_registerasi,
                                         pasien.nama_ibu_kandung, 
                                         pegawai.nama_pegawai, 
                                         kamar.nama_kamar, 
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
                                         LEFT JOIN kamar
                                         ON Kamar.id_kamar = pelayanan.id_kamar";
                        $result=mysqli_query($koneksi, $query) or die(mysqli_error());
                        $no=1; //penomoran 
                        while ($data = mysqli_fetch_array($result, MYSQLI_BOTH)){
                        ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama_lengkap']; ?></td>  
                        <td><?php echo $data['nama_pegawai']; ?></td>  
                        <td><?php echo $data['nama_kamar']; ?></td> 
                        <td><?php echo $data['keluhan']; ?></td>
                        <td style="width:100px;text-align: center;">
                        <a class='waves-effect waves-light modal-trigger' href='#modal2<?php echo $data['id_pelayanan']; ?>'>|Detail|</a>
                        <?php echo "
                        <a href='pelayanan_form_ubah.php?id_pelayanan=$data[id_pelayanan]'>|Ubah|</a>";
                        ?>
                        </td> 
                        </tr>  

                      <!-- Awal Modal -->
                      <div id="modal2<?php echo $data['id_pelayanan']; ?>" class="modal modal-fixed-footer">
                          <div class="modal-content">
                               <h4>Data Pelayanan Pasien Rumah Sakit</h4>
                                <ul class="collection">
                                  <li class="collection-item">Nama Lengkap Pasien : <?php echo $data['nama_lengkap']; ?></li>
                                  <li class="collection-item">Nama Dokter Pemeriksa : <?php echo $data['nama_pegawai']; ?></li>
                                  <li class="collection-item">Nama Kamar : <?php echo $data['nama_kamar']; ?></li>
                                  <li class="collection-item">Keluha : <?php echo $data['keluhan']; ?></li>
                                  <li class="collection-item">Diagnosa : <?php echo $data['diagnosa']; ?></li>
                                  <li class="collection-item">Tanggal Masuk RS : <?php echo $data['tgl_masuk']; ?></li>
                                  <li class="collection-item">Tanggal Keluar RS : <?php echo $data['tgl_keluar']; ?></li>
                                  <li class="collection-item">Keterangan : <?php echo $data['keterangan']; ?></li>
                                 </ul>
                              </div>
                                  <div class="modal-footer">
                                    <a href="javascript:;" class="modal-action modal-close waves-effect waves-green btn-flat ">Tutup</a>
                                  </div>
                              </div>
                             <!-- Akhir Modal --> 
                        <?php
                        }
                        ?>