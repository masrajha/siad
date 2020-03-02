<?php
include "koneksi.php";

$judul_informasi=$_POST['judul_informasi'];
$jenis_informasi=$_POST['jenis_informasi'];
$isi_informasi=$_POST['isi_informasi'];
$tgl_informasi=date('Y-m-d H:i:sa');

$tmp_foto=$_FILES['gambar_informasi']['tmp_name'];
$gambar_informasi=$_FILES['gambar_informasi']['name'];
$tujuan= '../images/gambar_informasi/';
$upload=move_uploaded_file($tmp_foto,$tujuan.$gambar_informasi);


$sql= mysqli_query($connect, "insert into tbl_informasi values('','$judul_informasi','$jenis_informasi','$isi_informasi','$tgl_informasi','$gambar_informasi')");
if($sql){
	header ("location:../view_informasi.php?pesan=sukses");
}else{
	header("location:../view_informasi.php?pesan=gagal");
}
?>
