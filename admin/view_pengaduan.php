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
        <div class="panel panel-info">
            <div class="panel-heading">
                View Pengaduan
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='sukses'){
				echo'<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Berhasil dikirim. </div>';
			}else if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='gagal'){
				echo' <div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data gagal disimpan. </div>';
			}
			?>
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example19">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Pengaduan</th>
											<th>NIK</th>
											<th>Isi Pengaduan</th>
											<th>Tanggal Pengaduan</th>
											<th>Gambar Pengaduan</th>
											<th>Status Tanggapan</th>
											<th>Opsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$q=mysqli_query($connect, "select * from tbl_pengaduan order by tgl_pengaduan DESC");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['id_pengaduan']; ?></td>
											<td><?php echo $data['nik']; ?></td>
											<td><?php echo $data['isi_pengaduan']; ?></td>
											<td><?php echo $data['tgl_pengaduan']; ?></td>
											<td><img src="../images/pengaduan/<?php echo $data['gambar_pengaduan'];?>" width="100px"></td>
											<td>
												<?php
													$id=$data['id_pengaduan'];
													$sql1 = mysqli_query($connect,"select * from tbl_bls_pengaduan where id_pengaduan='$id'");
													if(mysqli_num_rows($sql1)>0){
														echo '<label class="label label-info">Sudah</label>';
													}else{
														echo '<label class="label label-danger">Belum</label>';
													}
												?>
											</td>
                                            <td >
												<a href="aksi/delete_pengaduan.php?id_pengaduan=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
												<button class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $data['id_pengaduan']; ?>"><i class="fa fa-envelope" ></i> Balas</button>
											</td>

                                        </tr>
										<?php $no++;} ?>
                                    </tbody>
                                </table>
                            </div>
														<?php
														include"aksi/koneksi.php";
														$no=1;
														$q=mysqli_query($connect, "select * from tbl_pengaduan order by tgl_pengaduan DESC");
														while($data=mysqli_fetch_assoc($q)){
														?>
														<!-- Modal -->
														<div class="modal fade" id="myModal<?php echo $data['id_pengaduan']; ?>" role="dialog">
															<div class="modal-dialog">

																<!-- Modal content-->
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																		<h4 class="modal-title">Balas Pengaduan</h4>
																	</div>
																	<div class="modal-body">
																	<form method="post" action="aksi/simpan_bls.php">
													          <input class="form-control" type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan'];?>" required/>

																		<div class="form-group">
													                    <label>Isi Balasan</label>
													                    <textarea class="form-control" name="isi" rows="3"></textarea>

																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																		<button type="submit" class="btn btn-default">Simpan</button>
																	</div>
																</div>
																</form>
															</div>
														</div>
													<?php
												} ?>
             </div>
        </div>
    </div>
	</div>
	</div>
</div>
<?php
	include"footer.php";
?>
