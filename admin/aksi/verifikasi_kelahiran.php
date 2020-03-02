<?php
include "koneksi.php";
$id_kelahiran=$_GET['id_kelahiran'];
$ket=$_GET['ket'];

	if($ket=="admin"){
	$update =mysqli_query($connect, "update tbl_kelahiran set verif_admin='Y'  where id_kelahiran='$id_kelahiran'");
	}else{
		$update =mysqli_query($connect, "update tbl_kelahiran set verif_lurah='Y'  where id_kelahiran='$id_kelahiran'");
	}
	if ($update){
		 header ("location:../view_kelahiran.php?=pesan=suskses_update");
	}else{
		  header ("location:../view_kelahiran.php?=pesan=gagal_update");

	}
?>
