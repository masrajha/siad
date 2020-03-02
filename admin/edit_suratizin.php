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
                Edit Surat Izin
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/update_suratizin.php" enctype="multipart/form-data">

						<div class="form-group">
                        <label>ID Surat Izin</label>
						<input class="form-control" type="text" name="id_suratizin" value="<?php echo $dt ['id_suratizin'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>NIK</label>
                    <input class="form-control" type="text" name="nik" value="<?php echo $dt ['nik'];?>" required/>
                    </div>
					
					<div class="form-group">
                    <label>Nama Usaha</label>
                    <input class="form-control" type="text" name="nama_usaha" value="<?php echo $dt ['nama_usaha'];?>" required/>
                    </div>
					
					<div class="form-group">
                    <label>Jenis Usaha</label>
                    <input class="form-control" type="text" name="jenis_usaha" value="<?php echo $dt ['jenis_usaha'];?>" required/>
                    </div>
					
					<div class="form-group">
                    <label>Alamat Usaha</label>
                    <textarea class="form-control" name="alamat_usaha" rows="3"><?php echo $dt ['alamat_usaha'];?></textarea>
					</div>
					
					<div class="form-group">
                    <label>Tanggal Pengajuan</label>
                    <input class="form-control" type="date" name="tgl_pengajuan" value="<?php echo $dt ['tgl_pengajuan'];?>" required/>
                    </div>
					
					
					<div class="form-group">
                    <label>Gambar Usaha</label>
                    <input class="form-control" type="file" name="gambar_usaha"/>
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
