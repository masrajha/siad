<?php
include "koneksi.php";
$id=$_GET['id'];
$ket=$_GET['ket'];

	if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_ketwaris set verif_admin='Y'  where id_ketwaris='$id'");
	}else if($ket=="lurah"){
		$update =mysqli_query($connect, "update tbl_ketwaris set verif_lurah='Y'  where id_ketwaris='$id'");
	}else{
		$update =mysqli_query($connect, "update tbl_ketwaris set verif_rt='Y'  where id_ketwaris='$id'");
	}
	if ($update){
		 header ("location:../view_ketwaris.php?pesan=suskses_update");
	}else{
		  header ("location:../view_ketwaris.php?pesan=gagal_update");

	}
?>