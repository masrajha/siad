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
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                View Penduduk
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
                                <table class="table table-bordered table-hover" id="dataTables-example18">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>TTL</th>
											<th>Jenis Kelamin</th>
											<th>Agama</th>
											<th>Golongan Darah</th>
											<th>Pendidikan</th>
											<th>Kebangsaan</th>
											<th>Pekerjaan</th>
											<th>Status Pernikahan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									//$no=1;
									$q=mysqli_query($connect, "select * from tbl_penduduk inner join tbl_rw on tbl_penduduk.id_rw=tbl_rw.id_rw  inner join tbl_rt on tbl_penduduk.id_rt=tbl_rt.id_rt");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
                                            <td><?php echo $data['nik']; ?></td>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['alamat']; ?><br/> RT. <?php echo $data['id_rt']; ?>/ RW. <?php echo $data['id_rw']; ?></td>
											<td><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></td>
											<td><?php echo $data['jk']; ?></td>
											<td><?php echo $data['agama']; ?></td>
											<td><?php echo $data['golongan_darah']; ?></td>
											<td><?php echo $data['pendidikan']; ?></td>
											<td><?php echo $data['kebangsaan']; ?></td>
											<td><?php echo $data['pekerjaan']; ?></td>
											<td><?php echo $data['status_pernikahan']; ?></td>
                                            <td>
												<a href="edit_penduduk.php?id_penduduk=<?php echo $data['id_penduduk']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
												||
												<a href="aksi/delete_penduduk.php?id_penduduk=<?php echo $data['id_penduduk']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
											</td>

                                        </tr>
										<?php } ?>
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
