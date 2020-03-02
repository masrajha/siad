<?php
include "koneksi.php";


$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgl_lahir=$_POST['tgl_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$jk=$_POST['jk'];
$agama=$_POST['agama'];
$golongan_darah=$_POST['golongan_darah'];
$tgl_pengajuan=date('Y-m-d H:i:sa');

$sql= mysqli_query($connect, "insert into tbl_kelahiran values('','$nik','$nama','$alamat','$tgl_lahir','$tempat_lahir','$jk','$agama','$golongan_darah','$tgl_pengajuan')");
if($sql){
	header ("location:../view_kelahiran.php?pesan=sukses");
}else{
	header("location:../view_kelahiran.php?pesan=gagal");
}
?>
