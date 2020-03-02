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
        <div class="panel panel-info">
            <div class="panel-heading">
                Form Kematian
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='error_kode'){
				echo'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> id Sudah Ada. </div>';
			}
			?>
			
						 

					<form method="POST" action="aksi/simpan_kematian.php" enctype="multipart/form-data">
					
					<div class="form-group">
                    <label>NIK</label>
                    <input class="form-control" type="text" name="nik" required/>
                    </div>
					
					<div class="form-group">
                    <label>Tanggal Kematian</label>
                    <input class="form-control" type="date" name="tgl_kematian" required/>
                    </div>
					
					
					<div class="form-group">
                    <label>Tempat Kematian</label>
                    <input class="form-control" type="text" name="tempat_kematian" required/>
                    </div>
					
					<div class="form-group">
                    <label>Penyeban</label>
                    <input class="form-control" type="text" name="penyebab" required/>
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
