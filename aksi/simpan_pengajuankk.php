<?php
session_start();
include "../admin/aksi/koneksi.php";

$captcha = $_POST['captcha'];

if($_SESSION['Captcha']==$captcha){
	$nik=$_POST['nik'];
	$nama_kk=$_POST['nama_kk'];
	$alamat=$_POST['alamat'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$agama=$_POST['agama'];
	$jk=$_POST['jk'];
	$golongan_darah=$_POST['golongan_darah'];
	$kebangsaan=$_POST['kebangsaan'];
	$pekerjaan=$_POST['pekerjaan'];
	$pendidikan=$_POST['pendidikan'];
	$status_pernikahan=$_POST['status_pernikahan'];
	$nama_ayah=$_POST['nama_ayah'];
	$nama_ibu=$_POST['nama_ibu'];
	$id_rt=$_POST['id_rt'];
	$id_rw=$_POST['id_rw'];
	$tgl_pengajuan=date('Y-m-d');

	$sql= mysqli_query($connect, "insert into tbl_form_kk values('','$nik','$nama_kk','$alamat','$tgl_lahir','$tempat_lahir','$agama','$jk','$golongan_darah','$kebangsaan','$pekerjaan','$pendidikan','$status_pernikahan','$nama_ayah','$nama_ibu','$id_rt','$id_rw','$tgl_pengajuan','N','N','N')");
	if($sql){
		header ("location:../?p=form_pengajuankk&pesan=sukses");
	}else{
		header("location:../?p=form_pengajuankk&pesan=gagal");
	}
}else{
	header("location:../?p=form_pengajuankk&pesan=errorcaptcha");
}
?>
