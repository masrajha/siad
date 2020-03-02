<?php
session_start();
include "../admin/aksi/koneksi.php";

$captcha = $_POST['captcha'];

if($_SESSION['Captcha']==$captcha){

	$nik=$_POST['nik'];
	$nama_usaha=$_POST['nama_usaha'];
	$jenis_usaha=$_POST['jenis_usaha'];
	$alamat_usaha=$_POST['alamat_usaha'];
	$tgl_pengajuan=date('Y-m-d');

	$tmp_foto=$_FILES['gambar_usaha']['tmp_name'];
	$gambar_usaha=$_FILES['gambar_usaha']['name'];
	$tujuan= '../img/usaha/';
	$upload=move_uploaded_file($tmp_foto,$tujuan.$gambar_usaha);


	$sql= mysqli_query($connect, "insert into tbl_suratizin values('','$nik','$nama_usaha','$jenis_usaha','$alamat_usaha','$tgl_pengajuan','$gambar_usaha','N','N')");
	if($sql){
		header ("location:../?p=form_izinusaha&pesan=sukses");
	}else{
		header("location:../?p=form_izinusaha&pesan=gagal");
	}
}else{
	header("location:../?p=form_izinusaha&pesan=errorcaptcha");
}
?>
