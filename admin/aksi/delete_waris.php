<?php
include "koneksi.php";
$id=$_GET['id'];


$delete =mysqli_query($connect,"delete from tbl_ketwaris where id_ketwaris='$id'");
if($delete){
	header("location:../view_ketwaris.php?pesan=sukses_delete");
}else{
	header("location:../view_ketwaris.php?pesan=gagal_delete");
}
?>
