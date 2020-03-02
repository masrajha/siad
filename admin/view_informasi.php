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
                View Informasi
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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Informasi</th>
								<th>Judul Informasi</th>
								<th>Jenis Informasi</th>
								<th>Isi Informasi</th>
								<th>Tanggal Informasi</th>
								<th>Gambar Informasi</th>
								<th>Opsi</th>

                            </tr>
                        </thead>
                        <tbody>
						<?php
						include"aksi/koneksi.php";
						$no=1;
						$q=mysqli_query($connect, "select * from tbl_informasi ");
						while($data=mysqli_fetch_assoc($q)){
						?>
                            <tr >
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['id_informasi']; ?></td>
								<td><?php echo $data['judul_informasi']; ?></td>
								<td><?php echo $data['jenis_informasi']; ?></td>
								<td><?php echo $data['isi_informasi']; ?></td>
								<td><?php echo $data['tgl_informasi']; ?></td>
								<td><img src="images/gambar_informasi/<?php echo $data['gambar_informasi'];?>" width="100px"></td>
                                <td >

									<a href="edit_informasi.php?id_informasi=<?php echo $data['id_informasi']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
									||
									<a href="aksi/delete_informasi.php?id_informasi=<?php echo $data['id_informasi']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
