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
                View Surat Izin
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example26">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>NIK</th>
											<th>Nama Usaha</th>
											<th>Jenis Usaha</th>
											<th>Alamat Usaha</th>
											<th>Tanggal Pengajuan</th>
											<th>Foto</th>
											<th>Status</th>
											<th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$q=mysqli_query($connect, "select * from tbl_suratizin order by tgl_pengajuan desc");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
											<td><?php echo $data['nik']; ?></td>
											<td><?php echo $data['nama_usaha']; ?></td>
											<td><?php echo $data['jenis_usaha']; ?></td>
											<td><?php echo $data['alamat_usaha']; ?></td>
											<td><?php echo date('d F Y', strtotime($data['tgl_pengajuan'])); ?></td>
											<td class="text-center"><img src="../img/usaha/<?php echo $data['gambar_usaha'];?>" height="50px" class=""></td>
                                            <td><?php if($data['status_admin']=="N"){
												echo '<label class="label label-info">Belum Diverifikasi</label>';
												}else if($data['status_admin']=="Y"){
												echo '<label class="label label-success">Diterima</label>';
												}else{
													echo '<label class="label label-danger">Ditolak</label>';
												}
												?>
											</td>
											<td >

												
												<a href="aksi/delete_suratizin.php?id_suratizin=<?php echo $data['id_suratizin']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
												
												<?php
													if($_SESSION['level']=="admin" && $data['status_admin']=="N"){
												?>
												<a href="verifikasi_surat.php?id_suratizin=<?php echo $data['id_suratizin']; ?>&ket=admin" class="btn btn-info"><i class="fa fa-sign-out"></i> View</a>
												<?php
												}else if($_SESSION['level']=="lurah" && $data['status_admin']=="Y" && $data['status_lurah']=="N"){
												?>
												<a href="verifikasi_surat.php?id_suratizin=<?php echo $data['id_suratizin']; ?>&ket=lurah" class="btn btn-info"><i class="fa fa-sign-out"></i> View</a>
												<?php
												}  
												?>
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
