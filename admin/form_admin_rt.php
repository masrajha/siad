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
                Form Admin RT
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='error_kode'){
				echo'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> id Sudah Ada. </div>';
			}
			?>



					<form method="POST" action="aksi/simpan_admin_rt.php" enctype="multipart/form-data">

					<div class="form-group">
                    <label>NIK Admin</label>
                    <input class="form-control" type="text" name="nik" placeholder="NIK" required/>
          </div>

					<div class="form-group">
                    <label>Nama Admin</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama" required/>
          </div>

					<div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" required/>
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

                    <button type="submit" class="btn btn-primary">Simpan</button>
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
