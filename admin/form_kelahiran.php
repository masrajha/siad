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
                Form Kelahiran
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='error_kode'){
				echo'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> id Sudah Ada. </div>';
			}
			?>
			
						 

					<form method="POST" action="aksi/simpan_kelahiran.php" enctype="multipart/form-data">
					
					<div class="form-group">
                    <label>NIK</label>
                    <input class="form-control" type="text" name="nik" />
                    </div>
					
					<div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama" required/>
                    </div>
					
					<div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"></textarea>
					</div>
					
					<div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl_lahir" required/>
                    </div>
					
					<div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempat_lahir" required/>
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
