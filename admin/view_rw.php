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
                View RW
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='sukses'){
				echo'<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data tersimpan. </div>';
			}else if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='gagal'){
				echo' <div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data gagal disimpan. </div>';
			}else if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='sukses_delete'){
				echo'<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data berhasil dihapus. </div>';
			}else if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='gagal_hapus'){
				echo' <div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data gagal disimpan. </div>';
			}else if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='sukses_update'){
				echo'<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data berhasil diupdate. </div>';
			}else if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='gagal_update'){
				echo' <div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data gagal disimpan. </div>';
			}
			?>
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example24">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id RW</th>
											<th>RW</th>
                                            <th>Opsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$q=mysqli_query($connect, "select * from tbl_rw");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['id_rw']; ?></td>
											<td><?php echo $data['nama_rw']; ?></td>
                                            <td >

												<a href="edit_rw.php?id_rw=<?php echo $data['id_rw']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
												||
												<a href="aksi/delete_rw.php?id_rw=<?php echo $data['id_rw']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
