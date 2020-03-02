<?php
include "../admin/aksi/koneksi.php";

$nik=$_POST['nik'];
$isi_pengaduan=$_POST['isi_pengaduan'];
$tgl_pengaduan=date('Y-m-d');

$tmp_foto=$_FILES['gambar_pengaduan']['tmp_name'];
$gambar_pengaduan=$_FILES['gambar_pengaduan']['name'];
$tujuan= '../images/pengaduan/';
$upload=move_uploaded_file($tmp_foto,$tujuan.$gambar_pengaduan);


$sql= mysqli_query($connect, "insert into tbl_pengaduan values('','$nik','$isi_pengaduan','$tgl_pengaduan','$gambar_pengaduan')");
if($sql){
	header ("location:../form_pengaduan.php?pesan=sukses");
}else{
	header("location:../form_pengaduan.php?pesan=gagal");
}
?>
