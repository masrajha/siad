<?php
include "koneksi.php";
$id=$_GET['id'];
$ket=$_GET['ket'];

	if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_ketbelumnikah set verif_admin='Y'  where id='$id'");
	}else if($ket=="lurah"){
		$update =mysqli_query($connect, "update tbl_ketbelumnikah set verif_lurah='Y'  where id='$id'");
	}else{
		$update =mysqli_query($connect, "update tbl_ketbelumnikah set verif_rt='Y'  where id='$id'");
	}
	if ($update){
		 header ("location:../view_belumnikah.php?pesan=suskses_update");
	}else{
		  header ("location:../view_belumnikah.php?pesan=gagal_update");

	}
?>