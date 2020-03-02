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
                View Detail Kartu Keluarga
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
			<?php
									include"aksi/koneksi.php";
									$no=1;
									$no_kk=$_GET['no_kk'];
									$q=mysqli_query($connect, "select * from tbl_kk inner join tbl_penduduk on tbl_kk.nik=tbl_penduduk.nik inner join tbl_rw on tbl_penduduk.id_rw=tbl_rw.id_rw inner join tbl_rt on tbl_penduduk.id_rt=tbl_rt.id_rt where tbl_kk.no_kk='$no_kk'");
									$data=mysqli_fetch_assoc($q);
									
									?>
									<center><h3>NO KK : <?php echo $no_kk;?></h3></center>
			<table class="table table-hover">
				<tr>
					<td>Nama Kepala Keluarga</td>
					<td>:</td>
					<td><?php echo $data['nama'];?></td>
					<td>Kecamatan</td>
					<td>:</td>
					<td><?php echo $data['kecamatan'];?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo $data['alamat'];?></td>
					<td>Kabupaten</td>
					<td>:</td>
					<td><?php echo $data['kabupaten'];?></td>
				</tr>
				<tr>
					<td>RT/RW</td>
					<td>:</td>
					<td><?php echo $data['nama_rt'].'/'.$data['nama_rw'];?></td>
					<td>Kode Pos</td>
					<td>:</td>
					<td><?php echo $data['kodepos'];?></td>
				</tr>
				<tr>
					<td>Desa/Kelurahan</td>
					<td>:</td>
					<td><?php echo $data['kelurahan'];?></td>
					<td>Porvinsi</td>
					<td>:</td>
					<td><?php echo $data['provinsi'];?></td>
				</tr>
			</table>
				<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Nama</th>
											<th>NIK</th>
											<th>JK</th>
											<th>Tempat Lahir</th>
											<th>Tanggal Lahir</th>
											<th>Agama</th>
											<th>Pendidikan</th>
                                            <th>Opsi</th>

                                        </tr>
										
                                    </thead>
									
                                    <tbody>
									
                                
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$no_kk=$_GET['no_kk'];
									$q=mysqli_query($connect, "select * from tbl_detailkk inner join tbl_penduduk on tbl_detailkk.nik=tbl_penduduk.nik where tbl_detailkk.no_kk='$no_kk'");
									while($dt=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
										
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $dt['nama']; ?></td>
											<td><?php echo $dt['nik']; ?></td>
											<td><?php echo $dt['jk']; ?></td>
											<td><?php echo $dt['tempat_lahir']; ?></td>
											<td><?php echo $dt['tgl_lahir']; ?></td>
											<td><?php echo $dt['agama']; ?></td>
											<td><?php echo $dt['pendidikan']; ?></td>
                                            <td >

												<a href="aksi/delete_detailkk.php?id_detailkk=<?php echo $dt['id_detailkk']; ?>&no_kk=<?php echo $no_kk;?>" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a>
											
											</td>
											

                                        </tr>
										<?php $no++;} ?>
                                    </tbody>
                                </table>
                            </div>
		<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Jenis Pekerjaan</th>
											<th>Status Perkawinan</th>
											<th>Hubungan Keluarga</th>
											<th>Kewarganegaraan</th>
											<th>Nama Ayah</th>
											<th>Nama Ibu</th>
											<th></th>
                                           

                                        </tr>
										
                                    </thead>
									
                                    <tbody>
									<?php
									include"aksi/koneksi.php";
									$no=1;
									$no_kk=$_GET['no_kk'];
									$q=mysqli_query($connect, "select * from tbl_detailkk inner join tbl_penduduk on tbl_detailkk.nik=tbl_penduduk.nik where tbl_detailkk.no_kk='$no_kk'");
									while($data=mysqli_fetch_assoc($q)){
									?>
                                        <tr >
										
                                            <td><?php echo $no; ?></td>
											<td><?php echo $data['pekerjaan']; ?></td>
                                            <td><?php echo $data['status_pernikahan']; ?></td>
											<td><?php echo $data['status_hubungan']; ?></td>
											<td><?php echo $data['kebangsaan']; ?></td>
											<td><?php echo $data['nama_ayah']; ?></td>
											<td><?php echo $data['nama_ibu']; ?></td>
                                            <td >

												
											
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
