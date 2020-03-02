<?php
include "koneksi.php";
$id_suratizin=$_POST['id_suratizin'];
$nik=$_POST['nik'];
$nama_usaha=$_POST['nama_usaha'];
$jenis_usaha=$_POST['jenis_usaha'];
$alamat_usaha=$_POST['alamat_usaha'];
$tgl_pengajuan=date('Y-m-d H:i:sa');


$tmp_foto=$_FILES['gambar_usaha']['tmp_name'];
$gambar_usaha=$_FILES['gambar_usaha']['name'];
$tujuan= '../images/usaha/';



if(empty($tmp_foto)){ 
	$update =mysqli_query($connect, "update tbl_suratizin set nik='$nik', nama_usaha='$nama_usaha', jenis_usaha='$jenis_usaha', alamat_usaha='$alamat_usaha', tgl_pengajuan='$tgl_pengajuan'  where id_suratizin='$id_suratizin'");
	if ($update){
		 header ("location:../view_suratizin.php?=pesan=suskses_update");
	}else{
		  header ("location:../view_suratizin.php?=pesan=gagal_update");
		  
	}
}else{
	$sql = mysqli_query($connect,"select * from tbl_suratizin where id_suratizin='$id_suratizin'");
	$data = mysqli_fetch_assoc($sql);
	if(file_exists($tujuan.$data['gambar_usaha'])) unlink($tujuan.$data['gambar_usaha']);
	$upload = move_uploaded_file($tmp_foto,$tujuan.$gambar_usaha);
	$update =mysqli_query($connect, "update tbl_suratizin set nik='$nik', nama_usaha='$nama_usaha', jenis_usaha='$jenis_usaha', alamat_usaha='$alamat_usaha', tgl_pengajuan='$tgl_pengajuan', gambar_usaha='$gambar_usaha'  where id_suratizin='$id_suratizin'");
	if ($update){
		 header ("location:../view_suratizin.php?=pesan=suskses_update");
	}else{
		  header ("location:../view_suratizin.php?=pesan=gagal_update");
		  
	}
}

?>

