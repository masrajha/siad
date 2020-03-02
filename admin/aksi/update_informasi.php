<?php
include "koneksi.php";
$id_informasi=$_POST['id_informasi'];
$judul_informasi=$_POST['judul_informasi'];
$jenis_informasi=$_POST['jenis_informasi'];
$isi_informasi=$_POST['isi_informasi'];
$tgl_informasi=date('Y-m-d H:i:sa');


$tmp_foto=$_FILES['gambar_informasi']['tmp_name'];
$gambar_informasi=$_FILES['gambar_informasi']['name'];
$tujuan= '../images/gambar_informasi/';



if(empty($tmp_foto)){ 
	$update =mysqli_query($connect, "update tbl_informasi set judul_informasi='$judul_informasi', jenis_informasi='$jenis_informasi', isi_informasi='$isi_informasi', tgl_informasi='$tgl_informasi'  where id_informasi='$id_informasi'");
	if ($update){
		 header ("location:../view_informasi.php?=pesan=suskses_update");
	}else{
		  header ("location:../view_informasi.php?=pesan=gagal_update");
		  
	}
}else{
	$sql = mysqli_query($connect,"select * from tbl_informasi where id_informasi='$id_informasi'");
	$data = mysqli_fetch_assoc($sql);
	if(file_exists($tujuan.$data['gambar_informasi'])) unlink($tujuan.$data['gambar_informasi']);
	$upload = move_uploaded_file($tmp_foto,$tujuan.$gambar_informasi);
	$update =mysqli_query($connect, "update tbl_informasi set judul_informasi='$judul_informasi', jenis_informasi='$jenis_informasi', isi_informasi='$isi_informasi', tgl_informasi='$tgl_informasi', gambar_informasi='$gambar_informasi' where id_informasi='$id_informasi'");
	if ($update){
		 header ("location:../view_informasi.php?=pesan=suskses_update");
	}else{
		  header ("location:../view_informasi.php?=pesan=gagal_update");
		  
	}
}

?>

