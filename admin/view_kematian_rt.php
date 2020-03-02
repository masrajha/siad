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
                View Kematian
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example9">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Kematian</th>
											<th>NIK</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Tanggal Kematian</th>
											<th>Tempat Kematian</th>
											<th>Penyebab</th>
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
									$q=mysqli_query($connect, "select * from tbl_kematian inner join tbl_penduduk on tbl_kematian.nik=tbl_penduduk.nik where tbl_kematian.id_rt='$rt'");
									while($data=mysqli_fetch_assoc($q)){
									?>
                    <tr >
                      <td><?php echo $no; ?></td>
                      <td><?php echo $data['id_kematian']; ?></td>
											<td><?php echo $data['nik']; ?></td>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['alamat']; ?></td>
											<td><?php echo $data['tgl_kematian']; ?></td>
											<td><?php echo $data['tempat_kematian']; ?></td>
											<td><?php echo $data['penyebab']; ?></td>
											<td><?php echo date('d F Y', strtotime($data['tgl_pengajuan'])); ?></td>
											 <td><?php if($data['verif_rt']=="N"){
												echo '<label class="label label-info">Belum Diverifikasi</label>';
											}else if($data['verif_rt']=="Y"){
												echo '<label class="label label-success">Diterima</label>';
												}else{
													echo '<label class="label label-danger">Ditolak</label>';
												}
												?>
											</td>

                      <td >
                          <?php
                          if($data['verif_rt']=="N"){
                           ?>
											    <a href="aksi/verifikasi_kematian_rt.php?id_kematian=<?php echo $data['id_kematian']; ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Verifikasi</a>
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
