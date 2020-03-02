<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}
	
	include'header.php';
?>
<?php
$id_informasi =$_GET['id_informasi'];
$q = mysqli_query($connect, "select * from tbl_informasi where id_informasi='$id_informasi'");
$dt = mysqli_fetch_assoc($q);
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit Informasi
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/update_informasi.php" enctype="multipart/form-data">

						<div class="form-group">
                        <label>ID Informasi</label>
						<input class="form-control" type="text" name="id_informasi" value="<?php echo $dt ['id_informasi'];?>" readonly>
                    </div>

					<div class="form-group">
                    <label>Judul Informasi</label>
                    <input class="form-control" type="text" name="judul_informasi" value="<?php echo $dt ['judul_informasi'];?>" required/>
                    </div>
					
					<div class="form-group">
                    <label>Jenis Informasi</label>
                    <input class="form-control" type="text" name="jenis_informasi" value="<?php echo $dt ['jenis_informasi'];?>" required/>
                    </div>
					
					<div class="form-group">
                    <label>Isi Informasi</label>
                    <textarea class="form-control" name="isi_informasi" rows="3"><?php echo $dt ['isi_informasi'];?></textarea>
					</div>
					
					
					
					<div class="form-group">
                    <label>Gambar Informasi</label>
                    <input class="form-control" type="file" name="gambar_informasi"/>
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
