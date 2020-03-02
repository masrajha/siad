<?php
include "koneksi.php";
$id_kelahiran=$_GET['id_kelahiran'];


	$update =mysqli_query($connect, "update tbl_kelahiran set verif_rt='Y'  where id_kelahiran='$id_kelahiran'");
	if ($update){
		 header ("location:../view_kelahiran_rt.php?=pesan=suskses_update");
	}else{
		  header ("location:../view_kelahiran_rt.php?=pesan=gagal_update");

	}
?>
