<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}

	include'header.php';
?>
<?php
$id_rt =$_GET['id_rt'];
$q = mysqli_query($connect, "select * from tbl_rt where id_rt='$id_rt'");
$dt = mysqli_fetch_assoc($q);
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit RT
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/update_rt.php">

						<div class="form-group">
                        <label>ID RT</label>
						<input class="form-control" type="text" name="id_rt" value="<?php echo $dt ['id_rt'];?>" readonly>
                    </div>

					<div class="form-group">

                    <label>Nama RT</label>
					<input class="form-control" type="text" name="nama_rt" value="<?php echo $dt['nama_rt']; ?>" />
                    </div>

					<div class="form-group">
                        <label>ID RW</label>

					<select class="form-control select2" name="id_rw">
					<?php
					$sql = mysqli_query($connect, "select * from tbl_rw");
					while($data=mysqli_fetch_assoc($sql)){
					?>
					<option value="<?php echo $data['id_rw'];?>"><?php echo $data['nama_rw'];?></option>
					<?php
					}
					?>
					</select>
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
