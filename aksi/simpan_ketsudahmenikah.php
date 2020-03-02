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
	$agama=$_POST['agama'];
	$pekerjaan=$_POST['pekerjaan'];
	$namaperempuan=$_POST['namaperempuan'];
	$alamatperempuan=$_POST['alamatperempuan'];
	$tgl_lahirperempuan=$_POST['tgl_lahirperempuan'];
	$tempat_lahirperempuan=$_POST['tempat_lahirperempuan'];
	$agamaperempuan=$_POST['agamaperempuan'];
	$pekerjaanperempuan=$_POST['pekerjaanperempuan'];


	$tgl_pengajuan = date('Y-m-d');
	$sql= mysqli_query($connect, "insert into tbl_ketsudahmenikah values('','$nik','$nama','$alamat','$id_rw','$id_rt','$tgl_lahir','$tempat_lahir','$agama','$pekerjaan','$namaperempuan','$alamatperempuan','$tgl_lahirperempuan','$tempat_lahirperempuan','$agamaperempuan','$pekerjaanperempuan','$tgl_pengajuan','N','N','N')");
	if($sql){
		header ("location:../?p=form_ketsudahnikah&pesan=sukses");
	}else{
		header("location:../?p=form_ketsudahnikah&pesan=gagal");
	}
}else{
	header("location:../?p=form_ketsudahnikah&pesan=errorcaptcha");
}

?>
