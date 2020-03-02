<?php
include "koneksi.php";
$id_kematian=$_GET['id_kematian'];


$delete =mysqli_query($connect,"delete from tbl_kematian where id_kematian='$id_kematian'");
if($delete){
	header("location:../view_kematian.php?pesan=sukses_delete");
}else{
	header("location:../view_kematian.php?pesan=gagal_delete");
}
?>
