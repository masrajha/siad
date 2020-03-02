<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}
	
	include'header.php';
?>
<?php
$id_kelahiran =$_GET['id_kelahiran'];
$q = mysqli_query($connect, "select * from tbl_kelahiran where id_kelahiran='$id_kelahiran'");
$dt = mysqli_fetch_assoc($q);
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit Kelahiran
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/update_kelahiran.php">

						<div class="form-group">
                        <label>ID Kelahiran</label>
						<input class="form-control" type="text" name="id_kelahiran" value="<?php echo $dt ['id_kelahiran'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>NIK</label>
					<input class="form-control" type="text" name="nik" value="<?php echo $dt['nik']; ?>" readonly>
                    </div>
					
					<div class="form-group">
                    <label>Nama</label>
					<input class="form-control" type="text" name="nama" value="<?php echo $dt['nama']; ?>" />
                    </div>
					
					<div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"></textarea>
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
				  <label>Jenis Kelamin</label>
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
