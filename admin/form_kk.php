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
                Form Kartu Keluarga
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='gagalkk'){
				echo'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No KK Sudah Ada. </div>';
			}
			?>



				<form method="POST" action="aksi/simpan_kk.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor KK</label>
                                <input class="form-control" type="text" name="no_kk" placeholder="No KK" required/>
                            </div>

                            <div class="form-group">
                                <label>NIK</label>
                                <input class="form-control" type="text" name="nik" placeholder="NIK" required/>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat"></textarea>
                            </div>


                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input class="form-control" type="text" name="nama_ibu" placeholder="Nama Ibu" required/>
                            </div>

                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input class="form-control" type="text" name="nama_ayah" Placeholder="Nama Ayah" required/>
                            </div>

                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Pos</label>
                                <input class="form-control" type="text" name="kodepos" placeholder="Kode Pos" required/>
                            </div>
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <input class="form-control" type="text" name="kelurahan" placeholder="Kelurahan" required/>
                            </div>

                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan" required/>
                            </div>

                            <div class="form-group">
                                <label>Kabupaten</label>
                                <input class="form-control" type="text" name="kabupaten" placeholder="Kabupaten" required/>
                            </div>

                            <div class="form-group">
                                <label>Provinsi</label>
                                <input class="form-control" type="text" name="provinsi" placeholder="Provinsi" required/>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
                        </div>
                    </div>
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
