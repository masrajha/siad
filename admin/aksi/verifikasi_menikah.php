<?php
include "koneksi.php";
$id=$_GET['id'];
$ket=$_GET['ket'];

	if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_pengantarnikah set verif_admin='Y'  where id='$id'");
	}else{
		$update =mysqli_query($connect, "update tbl_pengantarnikah set verif_rt='Y'  where id='$id'");
	}
	if ($update){
		 header ("location:../view_menikah.php?pesan=suskses_update");
	}else{
		  header ("location:../view_menikah.php?pesan=gagal_update");

	}
?>
