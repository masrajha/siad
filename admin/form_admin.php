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
                Form Admin
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='error_kode'){
				echo'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> id Sudah Ada. </div>';
			}
			?>
			
						 

					<form method="POST" action="aksi/simpan_admin.php" enctype="multipart/form-data">
					
					<div class="form-group">
                    <label>Nama Admin</label>
                    <input class="form-control" type="text" name="nama" required/>
                    </div>
					
					<div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" required/>
                    </div>
					
					<div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" required/>
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
