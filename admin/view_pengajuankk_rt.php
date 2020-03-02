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
                View Pengajuan Kartu Keluarga
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
	        <table class="table table-striped table-bordered table-hover" id="dataTables-example20">
	            <thead>
	                <tr>
	                    <th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Tanggal Lahir</th>
						<th>Tempat Lahir</th>
						<th>Agama</th>
						<th>JK</th>
						<th>Golongan Darah</th>
						<th>Kebangsaan</th>
						<th>Pekerjaan</th>
						<th>Pendidikan</th>
						<th>Status Pernikahan</th>
						<th>Nama RT</th>
						<th>Nama RW</th>
						<th>Tanggal Pengajuan</th>
						<th>Status</th>
						<th>Opsi</th>

	                </tr>
	            </thead>
	            <tbody>
				<?php
				include"aksi/koneksi.php";
				$no=1;
	$rt = $_SESSION['rt'];
				$q=mysqli_query($connect, "select * from tbl_form_kk where id_rt='$rt'");
				while($data=mysqli_fetch_assoc($q)){
				?>
	                <tr >
	                   <td><?php echo $no; ?></td>
						<td><?php echo $data['nik']; ?></td>
						<td><?php echo $data['nama_kk']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['tgl_lahir']; ?></td>
						<td><?php echo $data['tempat_lahir']; ?></td>
						<td><?php echo $data['agama']; ?></td>
						<td><?php echo $data['jk']; ?></td>
						<td><?php echo $data['golongan_darah']; ?></td>
						<td><?php echo $data['kebangsaan']; ?></td>
						<td><?php echo $data['pekerjaan']; ?></td>
						<td><?php echo $data['pendidikan']; ?></td>
						<td><?php echo $data['status_pernikahan']; ?></td>
						<td><?php echo $data['id_rt']; ?></td>
                      <td><?php echo $data['id_rw']; ?></td>
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
                          if($data['verif_rt']=="N"){
                           ?>
                          <a href="aksi/verifikasi_kk_rt.php?id_formkk=<?php echo $data['id_form_kk']; ?>" class="btn btn-info" title="Verifikasi"><i class="fa fa-sign-out"></i></a>
                          <?php
                        } ?>											</td>

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
