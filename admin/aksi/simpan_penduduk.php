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
$pendidikan=$_POST['pendidikan'];
$kebangsaan=$_POST['kebangsaan'];
$pekerjaan=$_POST['pekerjaan'];
$status_pernikahan=$_POST['status_pernikahan'];
$id_rt=$_POST['id_rt'];
$id_rw=$_POST['id_rw'];

$sqlcek = mysqli_query($connect,"select * from tbl_penduduk where nik='$nik'");
if(mysqli_num_rows($sqlcek)==0){
	$sql= mysqli_query($connect, "insert into tbl_penduduk values ('','$nik','$nama','$alamat','$tgl_lahir','$tempat_lahir','$jk','$agama','$golongan_darah','$pendidikan','$kebangsaan','$pekerjaan','$status_pernikahan','$id_rt','$id_rw')");
	if($sql){
		header ("location:../view_penduduk.php?pesan=sukses");
	}else{
		header("location:../view_penduduk.php?pesan=gagal");
	}
}else{
	header("location:../view_penduduk.php?pesan=gagalnik");
}
?>
