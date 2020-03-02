<?php
session_start();
include "../admin/aksi/koneksi.php";

$captcha = $_POST['captcha'];

if($_SESSION['Captcha']==$captcha){
	$nik=$_POST['nik'];
	$nama1=$_POST['nama1'];
	$umur1=$_POST['umur1'];
	$pekerjaan1=$_POST['pekerjaan1'];
	$alamat1=$_POST['alamat1'];
	$nama2=$_POST['nama2'];
	$umur2=$_POST['umur2'];
	$pekerjaan2=$_POST['pekerjaan2'];
	$alamat2=$_POST['alamat2'];
	$hari=$_POST['hari'];
	$tanggal=$_POST['tanggal'];
	$bulan=$_POST['bulan'];
	$tahun=$_POST['tahun'];
	$brg_hibah=$_POST['brg_hibah'];
	$id_rt=$_POST['id_rt'];
	$id_rw=$_POST['id_rw'];
	$luas=$_POST['luas'];
	$u_timur=$_POST['u_timur'];
	$u_barat=$_POST['u_barat'];
	$u_selatan=$_POST['u_selatan'];
	$u_utara=$_POST['u_utara'];
	$b_timur=$_POST['b_timur'];
	$b_barat=$_POST['b_barat'];
	$b_selatan=$_POST['b_selatan'];
	$b_utara=$_POST['b_utara'];
	$tgl_buat = date('Y-m-d');

	$sql= mysqli_query($connect, "insert into tbl_kethibah values('','$nik','$nama1','$umur1','$pekerjaan1','$alamat1','$nama2','$umur2','$pekerjaan2','$alamat2','$hari','$tanggal','$bulan','$tahun','$brg_hibah','$id_rw','$id_rt','$luas','$u_timur','$u_barat','$u_selatan','$u_utara','$b_timur','$b_barat','$b_selatan','$b_utara','$tgl_buat','N','N','N')");
	if($sql){
		header ("location:../?p=form_kethibah&pesan=sukses");
	}else{
		header("location:../?p=form_kethibah&pesan=gagal");
	}
}else{
	header("location:../?p=form_kethibah&pesan=errorcaptcha");
}
?>
