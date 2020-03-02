<?php
include "koneksi.php";
$id_admin=$_POST['id_admin'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];



$update=mysqli_query($connect,"update tbl_admin_kelurahan set nama='$nama', username='$username', password='$password' where id_admin='$id_admin'");
if ($update){
	header ("location:../view_admin.php?update=sukses_update");
}else{
	header ("location:../view_admin.php?update=gagal_update");
}

?>
