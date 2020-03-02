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
                View Admin
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example3">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Nama</th>
											<th>Username</th>
											<th>Opsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$q=mysqli_query($connect, "select * from tbl_admin_kelurahan ");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['username']; ?></td>
                                            <td >

												<a href="edit_admin.php?id_admin=<?php echo $data['id_admin']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
												||
												<a href="aksi/delete_admin.php?id_admin=<?php echo $data['id_admin']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
