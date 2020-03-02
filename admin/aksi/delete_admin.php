<?php
include "koneksi.php";
$id_admin=$_GET['id_admin'];


$delete =mysqli_query($connect,"delete from tbl_admin_kelurahan where id_admin='$id_admin'");
if($delete){
	header("location:../view_admin.php?pesan=sukses_delete");
}else{
	header("location:../view_admin.php?pesan=gagal_delete");
}
?>
