<?php
session_start();
include "../admin/aksi/koneksi.php";

$captcha = $_POST['captcha'];

if($_SESSION['Captcha']==$captcha){
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$jk=$_POST['jk'];
	$agama=$_POST['agama'];
	$pekerjaan=$_POST['pekerjaan'];
	$id_rw=$_POST['id_rw'];
	$id_rt=$_POST['id_rt'];

	$tgl_pengajuan = date('Y-m-d');

	$sql= mysqli_query($connect, "insert into tbl_ketbelumnikah values('','$nik','$nama','$alamat','$id_rw','$id_rt','$tempat_lahir','$tgl_lahir','$agama','$jk','$pekerjaan','$tgl_pengajuan','N','N','N')");
	if($sql){
		header ("location:../?p=form_ketbelummenikah&pesan=sukses");
	}else{
		header("location:../?p=form_ketbelummenikah&pesan=gagal");
	}
}else{
	header("location:../?p=form_ketbelummenikah&pesan=errorcaptcha");
}
?>
