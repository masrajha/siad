<?php
include "koneksi.php";
$id_formktp=$_GET['id_formktp'];


	$update =mysqli_query($connect, "update tbl_form_ktp set verif_rt='Y'  where id_form_ktp='$id_formktp'");
	if ($update){
		 header ("location:../view_pengajuanktp_rt.php?pesan=suskses_update");
	}else{
		  header ("location:../view_pengajuanktp_rt.php?pesan=gagal_update");

	}
?>
