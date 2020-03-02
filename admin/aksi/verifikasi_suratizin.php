<?php
include "koneksi.php";
$id_suratizin=$_POST['id_suratizin'];
$status=$_POST['status'];
$ket=$_GET['ket'];
if($ket=="admin"){
		$update =mysqli_query($connect, "update tbl_suratizin set status_admin='$status'  where id_suratizin='$id_suratizin'");
}else{
	$update =mysqli_query($connect, "update tbl_suratizin set status_lurah='$status'  where id_suratizin='$id_suratizin'");
}

if ($update){
	 header ("location:../view_suratizin.php?=pesan=suskses_update");
}else{
	  header ("location:../view_suratizin.php?=pesan=gagal_update");
	  
}
?>

