<?php
include "koneksi.php";
$id=$_GET['id'];
$ket=$_GET['ket'];

	if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_ketjualbeli set verif_admin='Y'  where id_ketjualbeli='$id'");
	}else if($ket=="lurah"){
		$update =mysqli_query($connect, "update tbl_ketjualbeli set verif_lurah='Y'  where id_ketjualbeli='$id'");
	}else{
		$update =mysqli_query($connect, "update tbl_ketjualbeli set verif_rt='Y'  where id_ketjualbeli='$id'");
	}
	if ($update){
		 header ("location:../view_ketjualbeli.php?pesan=suskses_update");
	}else{
		  header ("location:../view_ketjualbeli.php?pesan=gagal_update");

	}
?>