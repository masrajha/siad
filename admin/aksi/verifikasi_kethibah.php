<?php
include "koneksi.php";
$id=$_GET['id'];
$ket=$_GET['ket'];

	if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_kethibah set verif_admin='Y'  where id_kethibah='$id'");
	}else if($ket=="lurah"){
		$update =mysqli_query($connect, "update tbl_kethibah set verif_lurah='Y'  where id_kethibah='$id'");
	}else{
		$update =mysqli_query($connect, "update tbl_kethibah set verif_rt='Y'  where id_kethibah='$id'");
	}
	if ($update){
		 header ("location:../view_kethibah.php?pesan=suskses_update");
	}else{
		  header ("location:../view_kethibah.php?pesan=gagal_update");

	}
?>