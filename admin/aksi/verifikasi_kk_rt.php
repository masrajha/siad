<?php
include "koneksi.php";
$id_formkk=$_GET['id_formkk'];


	$update =mysqli_query($connect, "update tbl_form_kk set verif_rt='Y'  where id_form_kk='$id_formkk'");
	if ($update){
		 header ("location:../view_pengajuankk_rt.php?pesan=suskses_update");
	}else{
		  header ("location:../view_pengajuankk_rt.php?pesan=gagal_update");

	}
?>
