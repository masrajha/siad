<?php
include "koneksi.php";

$no_kk=$_POST['no_kk'];
$nik=$_POST['nik'];
$alamat=$_POST['alamat'];
$nama_ibu=$_POST['nama_ibu'];
$nama_ayah=$_POST['nama_ayah'];
$kodepos=$_POST['kodepos'];
$kelurahan=$_POST['kelurahan'];
$kecamatan=$_POST['kecamatan'];
$kabupaten=$_POST['kabupaten'];
$provinsi=$_POST['provinsi'];

$sqlcek = mysqli_query($connect,"select * from tbl_kk where no_kk='$no_kk'");
if(mysqli_num_rows($sqlcek)==0){
	$sql= mysqli_query($connect, "insert into tbl_kk values('','$no_kk','$nik','$alamat','Kepala Keluarga','$nama_ibu','$nama_ayah','$kodepos','$kelurahan','$kecamatan','$kabupaten','$provinsi')");
	if($sql){
		header ("location:../view_kk.php?pesan=sukses");
	}else{
		header("location:../view_kk.php?pesan=gagal");
	}
}else{
	header("location:../view_kk.php?pesan=gagalkk");
}
?>
