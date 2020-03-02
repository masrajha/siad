<?php
session_start();
include "../admin/aksi/koneksi.php";

$captcha = $_POST['captcha'];

if($_SESSION['Captcha']==$captcha){
	$nik=$_POST['nik'];
	$nama1=$_POST['nama1'];
	$nama2=$_POST['nama2'];
	$namalain=serialize($_POST['namalain']);
	$saksi=serialize($_POST['saksi']);
	$umur=$_POST['umur'];
	$alamat=$_POST['alamat'];
	$hari=$_POST['hari'];
	$tanggal=$_POST['tanggal'];
	$bulan=$_POST['bulan'];
	$tahun=$_POST['tahun'];
	$brg_waris=$_POST['brg_waris'];
	$id_rt=$_POST['id_rt'];
	$id_rw=$_POST['id_rw'];
	$luas=$_POST['luas'];
	$b_timur=$_POST['b_timur'];
	$b_barat=$_POST['b_barat'];
	$b_selatan=$_POST['b_selatan'];
	$b_utara=$_POST['b_utara'];
	$tgl_buat = date('Y-m-d');

	$sql= mysqli_query($connect, "insert into tbl_ketwaris values('','$nik','$nama1','$nama2','$umur','$alamat','$brg_waris','$id_rw','$id_rt','$luas','$b_timur','$b_barat','$b_selatan','$b_utara','$namalain','$saksi','$tgl_buat','N','N','N')");
	if($sql){
		header ("location:../?p=form_ketwaris&pesan=sukses");
	}else{
		header("location:../?p=form_ketwaris&pesan=gagal");
	}
}else{
	header("location:../?p=form_ketwaris&pesan=errorcaptcha");
}
?>
