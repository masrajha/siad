<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}
	
	include'header.php';
?>
<?php
$id_kematian =$_GET['id_kematian'];
$q = mysqli_query($connect, "select * from tbl_kematian where id_kematian='$id_kematian'");
$dt = mysqli_fetch_assoc($q);
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit Kematian
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/update_kematian.php">

						<div class="form-group">
                        <label>ID Kematian</label>
						<input class="form-control" type="text" name="id_kematian" value="<?php echo $dt ['id_kematian'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>NIK</label>
					<input class="form-control" type="text" name="nik" value="<?php echo $dt['nik']; ?>" readonly>
                    </div>
					
					<div class="form-group">
                    <label>Tanggal Kematian</label>
					<input class="form-control" type="text" name="tgl_kematian" value="<?php echo $dt['tgl_kematian']; ?>" />
                    </div>
					
					<div class="form-group">
                    <label>Tempat Kematian</label>
					<input class="form-control" type="text" name="tempat_kematian" value="<?php echo $dt['tempat_kematian']; ?>" />
                    </div>
					
					<div class="form-group">
                    <label>Penyebab</label>
					<input class="form-control" type="text" name="penyebab" value="<?php echo $dt['penyebab']; ?>" />
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
