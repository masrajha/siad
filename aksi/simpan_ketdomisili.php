<?php
session_start();
include "../admin/aksi/koneksi.php";

$captcha = $_POST['captcha'];

if($_SESSION['Captcha']==$captcha){
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$id_rw=$_POST['id_rw'];
	$id_rt=$_POST['id_rt'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$jk=$_POST['jk'];
	$pekerjaan=$_POST['pekerjaan'];

	$tgl_pengajuan = date('Y-m-d');
	$sql= mysqli_query($connect, "insert into tbl_ketdomisili values('','$nik','$nama','$alamat','$id_rw','$id_rt','$tgl_lahir','$tempat_lahir','$jk','$pekerjaan','$tgl_pengajuan','N','N','N')");
	if($sql){
		header ("location:../?p=form_ketdomisili&pesan=sukses");
	}else{
		header("location:../?p=form_ketdomisili&pesan=gagal");
	}
}else{
	header("location:../?p=form_ketdomisili&pesan=errorcaptcha");
}
?>
