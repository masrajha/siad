<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}

	include'header.php';
?>
<?php
$id_penduduk =$_GET['id_penduduk'];
$q = mysqli_query($connect, "select * from tbl_penduduk where id_penduduk='$id_penduduk'");
$dt = mysqli_fetch_assoc($q);
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit Penduduk
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/update_penduduk.php">

					<div class="form-group">
                        <label>ID Penduduk</label>
						<input class="form-control" type="text" name="id_penduduk" value="<?php echo $dt ['id_penduduk'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>NIK</label>
					<input class="form-control" type="text" name="nik" value="<?php echo $dt ['nik'];?>"/>
                    </div>

					<div class="form-group">
                    <label>Nama</label>
					<input class="form-control" type="text" name="nama" value="<?php echo $dt['nama']; ?>" />
                    </div>

					<div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"><?php echo $dt['alamat']; ?></textarea>
					</div>

					<div class="form-group">
                    <label>Tanggal Lahir</label>
					<input class="form-control" type="text" name="tgl_lahir" value="<?php echo $dt['tgl_lahir']; ?>" />
                    </div>

					<div class="form-group">
                    <label>Tempat Lahir</label>
					<input class="form-control" type="text" name="tempat_lahir" value="<?php echo $dt['tempat_lahir']; ?>" />
                    </div>

					<div class="form-group">
				  <label> Jenis Kelamin</label>
					<select class="form-control select2" name="jk">
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
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

					<div class="form-group">
				  <label>Pendidikan</label>
					<select class="form-control select2" name="pendidikan">
						<option value="Tidak Lulus SD">Tidak Lulus SD</option>
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
					<input class="form-control" type="text" name="kebangsaan" value="<?php echo $dt['kebangsaan']; ?>" />
                    </div>

					<div class="form-group">
                    <label>Pekerjaan</label>
					<input class="form-control" type="text" name="pekerjaan" value="<?php echo $dt['pekerjaan']; ?>" />
                    </div>

					<div class="form-group">
                    <label>Status Pernikahan</label>
					<input class="form-control" type="text" name="status_pernikahan" value="<?php echo $dt['status_pernikahan']; ?>" />
                    </div>


					<div class="form-group">
                        <label>Id RT</label>

					<select class="form-control select2" name="id_rt">
					<?php
					$sql = mysqli_query($connect, "select * from tbl_rt");
					while($data=mysqli_fetch_assoc($sql)){
					?>
					<option value="<?php echo $data['id_rt'];?>"><?php echo $data['id_rt'];?></option>
					<?php
					}
					?>
					</select>
                    </div>

					<div class="form-group">
                        <label>Id RW</label>

					<select class="form-control select2" name="id_rw">
					<?php
					$sql = mysqli_query($connect, "select * from tbl_rw");
					while($data=mysqli_fetch_assoc($sql)){
					?>
					<option value="<?php echo $data['id_rw'];?>"><?php echo $data['id_rw'];?></option>
					<?php
					}
					?>
					</select>
                    </div>


                    <button type="submit" class="btn btn-info">Simpan </button>
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
