<?php
session_start();
include "../admin/aksi/koneksi.php";

$captcha = $_POST['captcha'];

if($_SESSION['Captcha']==$captcha){

	$nik			=$_POST['nik'];
	$nama			=$_POST['nama'];
	$alamat			=$_POST['alamat'];
	$tgl_lahir		=$_POST['tgl_lahir'];
	$tempat_lahir	=$_POST['tempat_lahir'];
	$agama			=$_POST['agama'];
	$jk				=$_POST['jk'];
	$golongan_darah	=$_POST['golongan_darah'];
	$kebangsaan		=$_POST['kebangsaan'];
	$pekerjaan		=$_POST['pekerjaan'];
	$pendidikan		=$_POST['pendidikan'];
	$status_pernikahan	=$_POST['status_pernikahan'];

	$id_rt=$_POST['id_rt'];
	$id_rw=$_POST['id_rw'];
	$tgl_pengajuan=date('Y-m-d');

	$sql= mysqli_query($connect, "insert into tbl_form_ktp values('','$nik','$nama','$alamat','$tgl_lahir','$tempat_lahir','$agama','$jk','$golongan_darah','$kebangsaan','$pekerjaan','$pendidikan','$status_pernikahan','$id_rt','$id_rw','$tgl_pengajuan','N','N','N')");
	if($sql){
		header ("location:../?p=form_pengajuanktp&pesan=sukses");
	}else{
		header("location:../?p=form_pengajuanktp&pesan=gagal");
	}
}else{
	header("location:../?p=form_pengajuanktp&pesan=errorcaptcha");	
}
?>
