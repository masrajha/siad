<?php
session_start();
include "../admin/aksi/koneksi.php";

$captcha = $_POST['captcha'];

if($_SESSION['Captcha']==$captcha){
	$nokk=$_POST['nokk'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$id_rw=$_POST['id_rw'];
	$id_rt=$_POST['id_rt'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$jk=$_POST['jk'];
	$nm_ayah=$_POST['nm_ayah'];
	$nm_ibu=$_POST['nm_ibu'];
	$anak_ke=$_POST['anak_ke'];

	$tgl_pengajuan = date('Y-m-d');
	$sql= mysqli_query($connect, "insert into tbl_kelahiran values('','$nokk','$nama','$alamat','$id_rw','$id_rt','$tgl_lahir','$tempat_lahir','$jk','$nm_ayah','$nm_ibu','$anak_ke','$tgl_pengajuan','N','N','N')");
	if($sql){
		header ("location:../?p=form_kelahiran&pesan=sukses");
	}else{
		header("location:../?p=form_kelahiran&pesan=gagal");
	}
}else{
	header("location:../?p=form_kelahiran&pesan=errorcaptcha");
}
?>
