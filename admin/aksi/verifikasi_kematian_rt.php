<?php
include "koneksi.php";
$id_kematian=$_GET['id_kematian'];


	$update =mysqli_query($connect, "update tbl_kematian set verif_rt='Y'  where id_kematian='$id_kematian'");
	if ($update){
		 header ("location:../view_kematian_rt.php?=pesan=suskses_update");
	}else{
		  header ("location:../view_kematian_rt.php?=pesan=gagal_update");

	}
?>
