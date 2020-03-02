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
                Form Penduduk
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='gagalnik'){
				echo'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> NIK Sudah Ada. </div>';
			}
			?>

				<form method="POST" action="aksi/simpan_penduduk.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
			                    <label>NIK</label>
			                    <input class="form-control" type="text" name="nik" placeholder="NIK" required/>
		                    </div>

							<div class="form-group">
			                    <label>Nama</label>
			                    <input class="form-control" type="text" name="nama" required placeholder="Nama Penduduk"/>
		                    </div>

							<div class="form-group">
			                    <label>Alamat</label>
			                    <textarea class="form-control" name="alamat" rows="3" placeholder="ALamat"></textarea>
							</div>

							<div class="form-group">
			                    <label>Tanggal Lahir</label>
			                    <input class="form-control" type="date" name="tgl_lahir" required />
		                    </div>

							<div class="form-group">
			                    <label>Tempat Lahir</label>
			                    <input class="form-control" type="text" name="tempat_lahir" required placeholder="Tempat Lahir"/>
		                    </div>

							<div class="form-group">
							  <label>Jenis Kelamin</label>
								<select class="form-control select2" name="jk">
									<option value="L">Laki-Laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
							  <label>Agama</label>
								<select class="form-control select2" name="agama">
									<option value="Islam">Islam</option>
									<option value="Katolik">Katolik</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
								</select>
							</div>

							<div class="form-group">
							  <label>Golongan Darah</label>
								<select class="form-control select2" name="golongan_darah">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="AB">AB</option>
									<option value="O">O</option>
								</select>
							</div>

						</div>
						<div class="col-md-6">
							
							<div class="form-group">
							   <label>Pendidikan</label>
								<select class="form-control select2" name="pendidikan">
									<option value="Tidak Lulus SD">Tidak Lulus SD</option>
									<option value="Belum Sekolah">Belum Sekolah</option>
									<option value="Lulus SD">Lulus SD</option>
									<option value="Lulus SMP">Lulus SMP</option>
									<option value="Lulus SMA">Lulus SMA</option>
									<option value="Lulus S1">Lulus S1</option>
									<option value="Lulus S2">Lulus S2</option>
									<option value="Lulus S3">Lulus S3</option>
								</select>
							</div>

							<div class="form-group">
				            <label>Kebangasaan</label>
								<select class="form-control select2" name="kebangsaan">
									<option value="WNI">Warga Negara Indonesia</option>
									<option value="WNA">Warna Negara Asing</option>
								</select>
			       			</div>

							<div class="form-group">
			                    <label>Pekerjaan</label>
			                    <input class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan" required/>
			         		 </div>

							<div class="form-group">
					    		<label>Status Pernikahan</label>
								<select class="form-control select2" name="status_pernikahan">
									<option value="Belum Kawin">Belum Kawin</option>
									<option value="Kawin">Kawin</option>
									<option value="Pernah Kawin">Pernah Kawin</option>
								</select>
					        </div>

							<div class="form-group">
			                    <label>RT</label>
								<select class="form-control select2" name="id_rt">
									<?php
									$sql = mysqli_query($connect, "select * from tbl_rt");
									while($data=mysqli_fetch_assoc($sql)){
									?>
									<option value="<?php echo $data['id_rt'];?>"><?php echo $data['nama_rt'];?></option>
									<?php
									}
									?>
								</select>
							</div>

							<div class="form-group">
			                    <label>RW</label>
								<select class="form-control select2" name="id_rw">
									<?php
									$sql = mysqli_query($connect, "select * from tbl_rw");
									while($data=mysqli_fetch_assoc($sql)){
									?>
									<option value="<?php echo $data['id_rw'];?>"><?php echo $data['nama_rw'];?></option>
									<?php
									}
									?>
								</select>
							</div>
			                <button type="submit" class="btn btn-primary" style="float:right">Simpan</button>
						</div>
					</div>
                </form>

             </div>
        </div>
    </div>
	</div>
	</div>
</div>
<?php
	include"footer.php";
?>
