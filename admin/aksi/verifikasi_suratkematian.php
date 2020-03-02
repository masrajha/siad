<?php
include "koneksi.php";
$id_kematian=$_GET['id_kematian'];
$ket = $_GET['ket'];
	
	if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_kematian set verif_admin='Y'  where id_kematian='$id_kematian'");
	}else{
		$update =mysqli_query($connect, "update tbl_kematian set verif_lurah='Y'  where id_kematian='$id_kematian'");
	}
	if ($update){
		 header ("location:../view_kematian.php?=pesan=suskses_update");
	}else{
		  header ("location:../view_kematian.php?=pesan=gagal_update");

	}
?>
