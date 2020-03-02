<?php
include "koneksi.php";
$id_formktp=$_GET['id_formktp'];
$ket = $_GET['ket'];

	if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_form_ktp set verif_admin='Y'  where id_form_ktp='$id_formktp'");

	}else if($ket=="lurah"){
			$update =mysqli_query($connect, "update tbl_form_ktp set verif_lurah='Y'  where id_form_ktp='$id_formktp'");
	}
	if ($update){
		 header ("location:../view_pengajuanktp.php?pesan=suskses_update");
	}else{
		  header ("location:../view_pengajuanktp.php?pesan=gagal_update");

	}
?>
