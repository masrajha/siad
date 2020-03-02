<?php
include "koneksi.php";
$id=$_GET['id'];
$ket=$_GET['ket'];

	if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_ketdomisili set verif_admin='Y'  where id_domisili='$id'");
	}else if($ket=="lurah"){
		$update =mysqli_query($connect, "update tbl_ketdomisili set verif_lurah='Y'  where id_domisili='$id'");
	}else{
		$update =mysqli_query($connect, "update tbl_ketdomisili set verif_rt='Y'  where id_domisili='$id'");
	}
	if ($update){
		 header ("location:../view_ketdomisili.php?pesan=suskses_update");
	}else{
		  header ("location:../view_ketdomisili.php?pesan=gagal_update");

	}
?>
