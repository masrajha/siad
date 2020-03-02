<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}

	include'header.php';
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                View Keterangan Pindah
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='sukses'){
				echo'<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data tersimpan. </div>';
			}else if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='gagal'){
				echo' <div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data gagal disimpan. </div>';
			}
			?>
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example13">
              <thead>
                  <tr>
                      <th>No</th>
											<th>NIK</th>
                      <th>Nama</th>
											<th>No KK</th>
											<th>Tanggal Lahir</th>
											<th>Tempat Lahir</th>
											<th>JK</th>
											<th>Agama</th>
                      <th>Kebangsaan</th>
                      <th>Status Pernikahan</th>
											<th>Pekerjaan</th>
                      <th>Alamat Asal</th>
                      <th>Desa Tujuan</th>
                      <th>Kecamatan Tujuan</th>
                      <th>Kabupaten Tujuan</th>
                      <th>Provinsi Tujuan</th>
                      <th>Alasan Pindah</th>
                      <th>Jumlah Keluarga</th>
                      <th>Status</th>
											<th>Tgl Pengajuan</th>
											<th>Opsi</th>

                  </tr>
              </thead>
              <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
                  if($_SESSION['level']=="admin" || $_SESSION['level']=="lurah"){
                    
                    $q=mysqli_query($connect, "select * from tbl_ketpindah");
                  }else{
                    $rt = $_SESSION['rt'];
                    $q=mysqli_query($connect, "select * from tbl_ketpindah where id_rt='$rt'");
                  }
                  
									while($data=mysqli_fetch_assoc($q)){
									?>
                  <tr >
                      <td><?php echo $no; ?></td>
											<td><?php echo $data['nik']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['no_kk']; ?></td>
											<td><?php echo $data['tgl_lahir']; ?></td>
											<td><?php echo $data['tempat_lahir']; ?></td>
											<td><?php echo $data['jk']; ?></td>
                      <td><?php echo $data['agama']; ?></td>
                      <td><?php echo $data['kebangsaan']; ?></td>
                      <td><?php echo $data['status_pernikahan']; ?></td>
                      <td><?php echo $data['pekerjaan']; ?></td>
                      <td><?php echo $data['alamat_asal']; ?></td>
                      <td><?php echo $data['desa_pindah']; ?></td>
                      <td><?php echo $data['kec_pindah']; ?></td>
                      <td><?php echo $data['kab_pindah']; ?></td>
                      <td><?php echo $data['prov_pindah']; ?></td>
                      <td><?php echo $data['alasan_pindah']; ?></td>
                      <td><?php echo $data['jml_keluarga']; ?></td>
                      <td><?php
                        if($data['verif_rt']=="N"){
                          echo '<label class="label label-info">Belum Diverifikasi</label>';
                        }else if($data['verif_rt']=="Y"){
                          echo '<label class="label label-success">Sudah Diverifikasi</label>';
                        }else if($data['verif_rt']=="T"){
                          echo '<label class="label label-danger">Ditolak</label>';
                        }
                       ?></td>
                      <td><?php echo date('d F Y', strtotime($data['tgl_pengajuan'])); ?></td>
                      <td >
                        <?php
                        if($data['verif_rt']=="N" && $_SESSION['level']!='admin'){
                         ?>
                        <a href="aksi/verifikasi_ketpindah.php?id=<?php echo $data['id']; ?>&ket=rt" class="btn btn-info" title="Verifikasi"><i class="fa fa-sign-out"></i></a>
                        <?php
                      }else if($data['verif_admin']=="N" && $_SESSION['level']=='admin'){
                         ?>
                        <a href="aksi/verifikasi_ketpindah.php?id=<?php echo $data['id']; ?>&ket=admin" class="btn btn-info" title="Verifikasi"><i class="fa fa-sign-out"></i></a>
                        <?php
                      }else if($data['verif_lurah']=="N" && $_SESSION['level']=='lurah'){
                         ?>
                        <a href="aksi/verifikasi_ketpindah.php?id=<?php echo $data['id']; ?>&ket=lurah" class="btn btn-info" title="Verifikasi"><i class="fa fa-sign-out"></i></a>
                        <?php
                      } ?>
                      </td>

                    </tr>
										<?php $no++;} ?>
                      </tbody>
                  </table>
              </div>

             </div>
        </div>
    </div>
	</div>
	</div>
</div>
<?php
	include"footer.php";
?>
