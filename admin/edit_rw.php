<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}
	
	include'header.php';
?>
<?php
$id_rw =$_GET['id_rw'];
$q = mysqli_query($connect, "select * from tbl_rw where id_rw='$id_rw'");
$dt = mysqli_fetch_assoc($q);
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                edit rw
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/update_rw.php">

						<div class="form-group">
                        <label>id rw</label>
						<input class="form-control" type="text" name="id_rw" value="<?php echo $dt ['id_rw'];?>" readonly>
                    </div>

					<div class="form-group">

                    <label>nama</label>
					<input class="form-control" type="text" name="nama_rw" value="<?php echo $dt['nama_rw']; ?>" />
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
