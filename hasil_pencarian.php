 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Form Pencarian Berkas</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Pencarian Berkas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
                <div class="row">
                    <!-- End contact icon -->
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-xs-12">
                        <?php
                include"admin/aksi/koneksi.php";
                $nik = $_POST['nik'];
                $tgl = $_POST['tgl'];

               
                  $sql1 = mysqli_query($connect,"select * from tbl_kelahiran where no_kk='$nik' and tgl_pengajuan='$tgl'");
                
                  $sql2 = mysqli_query($connect,"select * from tbl_kematian where nik='$nik' and tgl_pengajuan='$tgl'");
                
                  $sql3 = mysqli_query($connect,"select * from tbl_form_kk where nik='$nik' and tgl_pengajuan='$tgl'");
               
                  $sql4 = mysqli_query($connect,"select * from tbl_form_ktp where nik='$nik' and tgl_pengajuan='$tgl'");
               
                  $sql5 = mysqli_query($connect,"select * from tbl_suratizin where nik='$nik' and tgl_pengajuan='$tgl'");
               
                  $sql6 = mysqli_query($connect,"select * from tbl_kettidakmampu where nik='$nik' and tgl_pengajuan='$tgl'");
               
                  $sql7 = mysqli_query($connect,"select * from tbl_ketbelumnikah where nik='$nik' and tgl_pengajuan='$tgl'");
                
                  $sql8 = mysqli_query($connect,"select * from tbl_ketsudahmenikah where nik='$nik' and tgl_pengajuan='$tgl'");
               
                  $sql9 = mysqli_query($connect,"select * from tbl_ketdomisili where nik='$nik' and tgl_pengajuan='$tgl'");
                
                  
                
                  $sql12 = mysqli_query($connect,"select * from tbl_kethibah where nik='$nik' and tgl_buat='$tgl'");
                
                  $sql13 = mysqli_query($connect,"select * from tbl_ketjualbeli where nik='$nik' and tgl_buat='$tgl'");
                
                  $sql14 = mysqli_query($connect,"select * from tbl_ketwaris where nik='$nik' and tgl_buat='$tgl'");

                if( mysqli_num_rows($sql1)>0 ||mysqli_num_rows($sql2)>0 || mysqli_num_rows($sql3)>0 || mysqli_num_rows($sql4)>0 || mysqli_num_rows($sql5)>0 || mysqli_num_rows($sql6)>0 || mysqli_num_rows($sql7)>0 || mysqli_num_rows($sql8)>0 || mysqli_num_rows($sql9)>0 || mysqli_num_rows($sql12)>0 || mysqli_num_rows($sql13)>0 || mysqli_num_rows($sql14)>0){

              ?>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>NIK / NO KK</th>
                        <th>Jenis</th>
                        <th>Tanggal Pengajuan</th>
                        <th>File</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($dt1 = mysqli_fetch_assoc($sql1)){
                        ?>
                        <tr>
                            <td><?php echo $dt1['no_kk'];?></td>
                            <td>Surat Keterangan Kelahiran</td>
                            <td><?php echo $dt1['tgl_pengajuan'];?></td>
                            <td> <a href="laporan/lihat_lap_kelahiran.php?id=<?php echo $dt1['id_kelahiran'];?>" target="_blank">Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                        <?php
                            while($dt2 = mysqli_fetch_assoc($sql2)){
                        ?>
                        <tr>
                            <td><?php echo $dt2['nik'];?></td>
                            <td>Surat Keterangan Kematian</td>
                            <td><?php echo $dt2['tgl_pengajuan'];?></td>
                            <td>   <a href="laporan/lihat_lap.php?id=<?php echo $dt2['id_kematian'];?>" target="_blank" >Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                        <?php
                            while($dt3 = mysqli_fetch_assoc($sql3)){
                        ?>
                        <tr>
                            <td><?php echo $dt3['nik'];?></td>
                            <td>Surat Pengantar KK</td>
                            <td><?php echo $dt3['tgl_pengajuan'];?></td>
                            <td>    <a href="laporan/lihat_lap_kk.php?id=<?php echo $dt3['id_form_kk'];?>" target="_blank" >Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                        <?php
                            while($dt4 = mysqli_fetch_assoc($sql4)){
                        ?>
                        <tr>
                            <td><?php echo $dt4['nik'];?></td>
                            <td>Surat Pengantar KTP</td>
                            <td><?php echo $dt4['tgl_pengajuan'];?></td>
                            <td> <a href="laporan/lihat_lap_ktp.php?id=<?php echo $dt4['id_form_ktp'];?>" target="_blank" >Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                        <?php
                            while($dt5 = mysqli_fetch_assoc($sql5)){
                        ?>
                        <tr>
                            <td><?php echo $dt5['nik'];?></td>
                            <td>Surat Izin Usaha</td>
                            <td><?php echo $dt5['tgl_pengajuan'];?></td>
                            <td> <a href="laporan/lihat_lap_izin.php?id=<?php echo $dt5['id_suratizin'];?>" target="_blank" >Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                        <?php
                            while($dt6 = mysqli_fetch_assoc($sql6)){
                        ?>
                        <tr>
                            <td><?php echo $dt6['nik'];?></td>
                            <td>Surat Keterangan Tidak Mampu</td>
                            <td><?php echo $dt6['tgl_pengajuan'];?></td>
                            <td><a href="laporan/lihat_lap_tidakmampu.php?id=<?php echo $dt6['id'];?>" target="_blank" >Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                         <?php
                            while($dt7 = mysqli_fetch_assoc($sql7)){
                        ?>
                        <tr>
                            <td><?php echo $dt7['nik'];?></td>
                            <td>Surat Ket Belum Nikah</td>
                            <td><?php echo $dt7['tgl_pengajuan'];?></td>
                            <td> <a href="laporan/lihat_lap_belumnikah.php?id=<?php echo $dt7['id'];?>" target="_blank">Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                         <?php
                            while($dt8 = mysqli_fetch_assoc($sql8)){
                        ?>
                        <tr>
                            <td><?php echo $dt8['nik'];?></td>
                            <td>Surat Ket Sudah Menikah</td>
                            <td><?php echo $dt8['tgl_pengajuan'];?></td>
                            <td><a href="laporan/lihat_lap_sudahnikah.php?id=<?php echo $dt8['id'];?>" target="_blank" >Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                           <?php
                            while($dt9 = mysqli_fetch_assoc($sql9)){
                        ?>
                        <tr>
                            <td><?php echo $dt9['nik'];?></td>
                            <td>Surat Ket Domisili</td>
                            <td><?php echo $dt9['tgl_pengajuan'];?></td>
                            <td><a href="laporan/lihat_lap_ketdomisili.php?id=<?php echo $dt9['id_domisili'];?>" target="_blank" >Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>
						
                        <?php
                            
                        ?>
                        
                        <?php
                        
                        ?>

                        <?php
                            while($dt12 = mysqli_fetch_assoc($sql12)){
                        ?>
                        <tr>
                            <td><?php echo $dt12['nik'];?></td>
                            <td>Surat Hibah</td>
                            <td><?php echo $dt12['tgl_buat'];?></td>
                            <td><a href="laporan/lihat_hibah.php?id=<?php echo $dt12['id_kethibah'];?>" target="_blank">Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                        <?php
                            while($dt13 = mysqli_fetch_assoc($sql13)){
                        ?>
                        <tr>
                            <td><?php echo $dt13['nik'];?></td>
                            <td>Surat Ket Jual Beli</td>
                            <td><?php echo $dt13['tgl_buat'];?></td>
                            <td><a href="laporan/lihat_jualbeli.php?id=<?php echo $dt13['id_ketjualbeli'];?>" target="_blank">Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                        <?php
                            while($dt14 = mysqli_fetch_assoc($sql14)){
                        ?>
                        <tr>
                            <td><?php echo $dt14['nik'];?></td>
                            <td>Surat Ket Waris</td>
                            <td><?php echo $dt14['tgl_buat'];?></td>
                            <td><a href="laporan/lihat_waris.php?id=<?php echo $dt14['id_ketwaris'];?>" target="_blank">Download</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
              <?php
                      

            }else{
              echo '<h4>Berkas Tidak ditemukan</h4>';
            } ?>
                
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- Start contact Area -->