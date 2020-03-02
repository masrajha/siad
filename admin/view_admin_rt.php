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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example4">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Nama</th>
                      <th>Username</th>
											<th>RT</th>
											<th>Opsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$q=mysqli_query($connect, "select tbl_admin_rt.*,tbl_rt.nama_rt as nm from tbl_admin_rt inner join tbl_rt on tbl_admin_rt.id_rt=tbl_rt.id_rt");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
											<td><?php echo $data['nama_rt']; ?></td>
											<td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['nm']; ?></td>
                                            <td >

												<a href="aksi/delete_admin_rt.php?id_admin_rt=<?php echo $data['id_admin_rt']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
