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
                Form Informasi
            </div>
            <div class="panel-body">
							<?php
			if(!empty ($_GET ['pesan'])&& $_GET ['pesan']=='error_kode'){
				echo'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> id Sudah Ada. </div>';
			}
			?>

				<form method="POST" action="aksi/simpan_informasi.php" enctype="multipart/form-data">

					<div class="form-group">
                        <label>Judul Informasi</label>
                        <input class="form-control" type="text" name="judul_informasi" required/>
                    </div>

					<div class="form-group">
                        <label>Kategori Informasi</label>
                        <select class="form-control" name="jenis_informasi">
                            <option>--Pilihan--</option>
                            <option value="Berita">Berita</option>
                            <option value="Agenda">Agenda</option>
                            <option value="Pengumuman">Pengumuman</option>
                            <option value="Pembangunan">Pembangunan</option>
                            <option value="Keuangan">Keuangan</option>
                        </select>
                    </div>

					<div class="form-group">
                        <label>Isi Informasi</label>
                        <textarea class="form-control" name="isi_informasi" rows="3" id="isi_info"></textarea>
						<script type="text/javascript">CKEDITOR.replace('isi_info')</script>

					</div>

					<div class="form-group">
                        <label>Gambar Informasi</label>
                        <input class="form-control" type="file" name="gambar_informasi" required/>
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
