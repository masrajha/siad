<?php
include "koneksi.php";
$id_admin_rt=$_GET['id_admin_rt'];


$delete =mysqli_query($connect,"delete from tbl_admin_rt where id_admin_rt='$id_admin_rt'");
if($delete){
	header("location:../view_admin_rt.php?pesan=sukses_delete");
}else{
	header("location:../view_admin_rt.php?pesan=gagal_delete");
}
?>
