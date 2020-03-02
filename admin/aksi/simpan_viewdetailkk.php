<?php
include "koneksi.php";
$no_kk=$_POST['no_kk'];
$nik=$_POST['nik'];
$status_hubungan=$_POST['status_hubungan'];
$nama_ibu=$_POST['nama_ibu'];
$nama_ayah=$_POST['nama_ayah'];


$sql= mysqli_query($connect, "insert into tbl_detailkk values ('','$no_kk','$nik','$status_hubungan','$nama_ibu','$nama_ayah')");
if($sql){
	header ("location:../view_detailkk.php?pesan=sukses&no_kk=$no_kk");
}else{
	header("location:../form_viewdetailkk.php?pesan=gagal");
}
?>
