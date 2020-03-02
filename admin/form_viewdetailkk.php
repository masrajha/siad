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
                Form View detail KK
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='error_kode'){
				echo'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> id Sudah Ada. </div>';
			}
			?>



					<form method="POST" action="aksi/simpan_viewdetailkk.php" enctype="multipart/form-data">

					<div class="form-group">
                    <label>No KK </label>
                    <input class="form-control" type="text" name="no_kk" value='<?php echo $_GET['no_kk'];?>' readonly/>
                    </div>

					<div class="form-group">
                    <label>NIK</label>
                    <input class="form-control" type="text" name="nik" />
                    </div>

					<div class="form-group">
                    <label>Status Hubungan</label>
										<select class="form-control select2" name="status_hubungan">
										    <option value="Kepala Keluarga">Kepala Keluarga</option>
											<option value="Istri">Istri</option>
											<option value="Anak">Anak</option>
											<option value="Lainnya">Lainnya</option>
										</select>
                    </div>


					<div class="form-group">
                    <label>Nama Ibu</label>
                    <input class="form-control" type="text" name="nama_ibu" required/>
                    </div>

					<div class="form-group">
                    <label>Nama Ayah</label>
                    <input class="form-control" type="text" name="nama_ayah" required/>
                    </div>



                    <button type="submit" class="btn btn-info">Simpan</button>
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
