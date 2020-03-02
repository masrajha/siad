<?php
session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}

	include'header.php';
?>
<?php
$id_admin =$_GET['id_admin'];
$q = mysqli_query($connect, "select * from tbl_admin_kelurahan where id_admin='$id_admin'");
$dt = mysqli_fetch_assoc($q);
?>
<div class="content-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit Admin
            </div>
            <div class="panel-body">

					<form role="form" method="post" action="aksi/update_admin.php">
					
					<div class="form-group">
                    <label>Id Admin</label>
					<input class="form-control" type="text" name="id_admin" value="<?php echo $dt['id_admin']; ?>" readonly/>
                    </div>

					<div class="form-group">
                    <label>Nama Admin</label>
					<input class="form-control" type="text" name="nama" value="<?php echo $dt['nama']; ?>" />
                    </div>
					
					<div class="form-group">
                    <label>Username</label>
					<input class="form-control" type="text" name="username" value="<?php echo $dt['username']; ?>" />
                    </div>
					
					<div class="form-group">
                    <label>Password</label>
					<input class="form-control" type="password" name="password" value="<?php echo $dt['password']; ?>" />
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
