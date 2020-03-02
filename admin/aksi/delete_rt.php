<?php
include "koneksi.php";
$id_rt=$_GET['id_rt'];


$delete =mysqli_query($connect,"delete from tbl_rt where id_rt='$id_rt'");
if($delete){
	header("location:../view_rt.php?pesan=sukses_delete");
}else{
	header("location:../view_rt.php?pesan=gagal_delete");
}
?>
