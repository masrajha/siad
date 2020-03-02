<?php
include "koneksi.php";
$id=$_GET['id'];


$delete =mysqli_query($connect,"delete from tbl_kethibah where id_kethibah='$id'");
if($delete){
	header("location:../view_kethibah.php?pesan=sukses_delete");
}else{
	header("location:../view_kethibah.php?pesan=gagal_delete");
}
?>
