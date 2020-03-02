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
                View KK
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example16">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id KK</th>
											<th>No KK</th>
											<th>NIK</th>
											<th>Alamat</th>
											<th>Kode Pos</th>
											<th>Kelurahan</th>
											<th>Kecamatan</th>
											<th>Kabupaten</th>
											<th>Provinsi</th>
                                            <th>Opsi</th>

                                        </tr>
										
                                    </thead>
									
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$q=mysqli_query($connect, "select * from tbl_kk");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
										
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['id_kk']; ?></td>
											<td><?php echo $data['no_kk']; ?></td>
											<td><?php echo $data['nik']; ?></td>
											<td><?php echo $data['alamat']; ?></td>
											<td><?php echo $data['kodepos']; ?></td>
											<td><?php echo $data['kelurahan']; ?></td>
											<td><?php echo $data['kecamatan']; ?></td>
											<td><?php echo $data['kabupaten']; ?></td>
											<td><?php echo $data['provinsi']; ?></td>
                                            <td >

												<a href="form_viewdetailkk.php?no_kk=<?php echo $data['no_kk']; ?>" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</a>
												||
												<a href="view_detailkk.php?no_kk=<?php echo $data['no_kk']; ?>" class="btn btn-info"><i class="fa fa-sign-in"></i> Detail KK</a>
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
