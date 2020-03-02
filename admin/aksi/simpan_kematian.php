<?php
include "koneksi.php";


$nik=$_POST['nik'];
$tgl_kematian=$_POST['tgl_kematian'];
$tempat_kematian=$_POST['tempat_kematian'];
$penyebab=$_POST['penyebab'];
$tgl_pengajuan=date('Y-m-d H:i:sa');

$sql= mysqli_query($connect, "insert into tbl_kematian values('','$nik','$tgl_kematian','$tempat_kematian','$penyebab','$tgl_pengajuan')");
if($sql){
	header ("location:../view_kematian.php?pesan=sukses");
}else{
	header("location:../view_kematian.php?pesan=gagal");
}
?>
