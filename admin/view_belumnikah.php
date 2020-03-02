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
                View Keterangan Belum Menikah
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
          <table class="table table-striped table-bordered table-hover" id="dataTables-example5">
              <thead>
                  <tr>
                      <th>No</th>
											<th>NIK</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Tanggal Lahir</th>
											<th>Tempat Lahir</th>
											<th>JK</th>
											<th>Agama</th>
											<th>Pekerjaan</th>
                      <th>Status</th>
											<th>Tanggal Pengajuan</th>
											<th>Opsi</th>

                  </tr>
              </thead>
              <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
                  if($_SESSION['level']=="admin" || $_SESSION['level']=="lurah"){
                    
                    $q=mysqli_query($connect, "select * from tbl_ketbelumnikah");
                  }else{
                    $rt = $_SESSION['rt'];
                    $q=mysqli_query($connect, "select * from tbl_ketbelumnikah where id_rt='$rt'");
                  }
                  
									while($data=mysqli_fetch_assoc($q)){
									?>
                  <tr >
                      <td><?php echo $no; ?></td>
											<td><?php echo $data['nik']; ?></td>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['alamat']; ?></td>
											<td><?php echo $data['tgl_lahir']; ?></td>
											<td><?php echo $data['tempat_lahir']; ?></td>
											<td><?php echo $data['jk']; ?></td>
											<td><?php echo $data['agama']; ?></td>
                      <td><?php echo $data['pekerjaan']; ?></td>
                      <td><?php
                        if($_SESSION['level']=='admin'){
                            if($data['verif_admin']=="N"){
                                echo '<label class="label label-info">Belum Diverifikasi</label>';
                            }else if($data['verif_admin']=="Y"){
                                echo '<label class="label label-success">Sudah Diverifikasi</label>';
                            }else if($data['verif_admin']=="T"){
                                echo '<label class="label label-danger">Ditolak</label>';
                            }
                        }else if($_SESSION['level']=='lurah'){
                            if($data['verif_lurah']=="N"){
                              echo '<label class="label label-info">Belum Diverifikasi</label>';
                            }else if($data['verif_lurah']=="Y"){
                              echo '<label class="label label-success">Sudah Diverifikasi</label>';
                            }else if($data['verif_lurah']=="T"){
                              echo '<label class="label label-danger">Ditolak</label>';
                            }
                        }else{
                            if($data['verif_rt']=="N"){
                              echo '<label class="label label-info">Belum Diverifikasi</label>';
                            }else if($data['verif_rt']=="Y"){
                              echo '<label class="label label-success">Sudah Diverifikasi</label>';
                            }else if($data['verif_rt']=="T"){
                              echo '<label class="label label-danger">Ditolak</label>';
                            }
                        }
                       ?></td>
                      <td><?php echo date('d F Y', strtotime($data['tgl_pengajuan']));;
												 ?></td>
                      <td >
                      <?php
                         if($_SESSION['level']=='admin'){
                      ?>
                      <a href="aksi/delete_belumnikah.php?id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        <?php
                      }
                        if($data['verif_rt']=="N" && $_SESSION['level']!='admin'){
                         ?>
                        <a href="aksi/verifikasi_belumnikah.php?id=<?php echo $data['id']; ?>&ket=rt" class="btn btn-info" title="Verifikasi"><i class="fa fa-sign-out"></i></a>
                        <?php
                      }else if($data['verif_admin']=="N" && $_SESSION['level']=='admin'){
                         ?>
                        <a href="aksi/verifikasi_belumnikah.php?id=<?php echo $data['id']; ?>&ket=admin" class="btn btn-info" title="Verifikasi"><i class="fa fa-sign-out"></i></a>
                        <?php
                      }else if($data['verif_lurah']=="N" && $data['verif_admin']=="Y" && $_SESSION['level']=='lurah'){
                         ?>
                        <a href="aksi/verifikasi_belumnikah.php?id=<?php echo $data['id']; ?>&ket=lurah" class="btn btn-info" title="Verifikasi"><i class="fa fa-sign-out"></i></a>
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
