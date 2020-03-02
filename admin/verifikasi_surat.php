<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}
	include'header.php';
?>
<?php
$id_suratizin =$_GET['id_suratizin'];
$q = mysqli_query($connect, "select * from tbl_suratizin where id_suratizin='$id_suratizin'");
$dt = mysqli_fetch_assoc($q);
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Verifikasi Surat Izin
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/verifikasi_suratizin.php?ket=<?php echo $_GET['ket'];?>" enctype="multipart/form-data">

						<div class="form-group">
                        <label>ID Surat Izin</label>
						<input class="form-control" type="text" name="id_suratizin" value="<?php echo $dt ['id_suratizin'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>NIK</label>
                    <input class="form-control" type="text" name="nik" value="<?php echo $dt ['nik'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>Nama Usaha</label>
                    <input class="form-control" type="text" name="nama_usaha" value="<?php echo $dt ['nama_usaha'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>Jenis Usaha</label>
                    <input class="form-control" type="text" name="jenis_usaha" value="<?php echo $dt ['jenis_usaha'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>Alamat Usaha</label>
                    <textarea class="form-control" name="alamat_usaha" rows="3" readonly> <?php echo $dt ['alamat_usaha'];?>  </textarea >
					</div>



					<div class="form-group">
                    <label>Gambar Usaha</label><br>
                    <img src="../img/usaha/<?php echo $dt['gambar_usaha'];?>" height="150px"/>
                    </div>

					<div class="form-group">
                    <label>Status Pengajuan</label>
						<select class="form-control" name="status">
							<option value="Y">Terima</option>
							<option value="T">Tolak</option>
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
