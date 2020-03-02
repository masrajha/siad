<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}

	include'header.php';
?>
<div id="print">
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                View Kelahiran
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='sukses_update'){
				echo'<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data berhasil diverifikasi. </div>';
			}else if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='gagal'){
				echo' <div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> data gagal disimpan. </div>';
			}
			?>
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Kelahiran</th>
											<th>No KK</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Tanggal Lahir</th>
											<th>Tempat Lahir</th>
											<th>JK</th>
											<th>Agama</th>
											<th>Golongan Darah</th>
											<th>Tanggal Pengajuan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$q=mysqli_query($connect, "select * from tbl_kelahiran where verif_rt='Y'");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['id_kelahiran']; ?></td>
											<td><?php echo $data['no_kk']; ?></td>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['alamat']; ?></td>
											<td><?php echo $data['tgl_lahir']; ?></td>
											<td><?php echo $data['tempat_lahir']; ?></td>
											<td><?php echo $data['jk']; ?></td>
											<td><?php echo $data['agama']; ?></td>
											<td><?php echo $data['golongan_darah']; ?></td>

											<td><?php echo date('d F Y', strtotime($data['tgl_pengajuan'])); ?></td>


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
</div>
<script>

            function printDiv(divName) {
               var printContents = document.getElementById(divName).innerHTML;
               var originalContents = document.body.innerHTML;

               document.body.innerHTML = printContents;

               window.print();

               document.body.innerHTML = originalContents;
            }
            window.onload = printDiv('print');
        </script>
<?php
	include"footer.php";
?>
