<?php
include "koneksi.php";
$id_kematian=$_POST['id_kematian'];
$nik=$_POST['nik'];
$tgl_kematian=$_POST['tgl_kematian'];
$tempat_kematian=$_POST['tempat_kematian'];
$penyebab=$_POST['penyebab'];


$update=mysqli_query($connect,"update tbl_kematian set nik='$nik', tgl_kematian='$tgl_kematian', tempat_kematian='$tempat_kematian', penyebab='$penyebab' where id_kematian='$id_kematian'");
if ($update){
	header ("location:../view_kematian.php?update=sukses_update");
}else{
	header ("location:../view_kematian.php?update=gagal_update");
}

?>
