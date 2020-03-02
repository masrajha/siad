<?php
include "../admin/aksi/koneksi.php";
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$id_rw=$_POST['id_rw'];
$id_rt=$_POST['id_rt'];
$tgl_lahir=$_POST['tgl_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$jk=$_POST['jk'];
$pekerjaan=$_POST['pekerjaan'];
$status=$_POST['status'];
$orangtua=$_POST['orangtua'];
$namapasangan=$_POST['namapasangan'];

$tgl_pengajuan = date('Y-m-d');
$sql= mysqli_query($connect, "insert into tbl_pengantarnikah values('','$nik','$nama','$id_rw','$id_rt','$tempat_lahir','$tgl_lahir','$pekerjaan','$alamat','$orangtua','$jk','$status','$namapasangan','$tgl_pengajuan','N','N','N')");
if($sql){
	header ("location:../?p=form_menikah&pesan=sukses");
}else{
	header("location:../?p=form_menikah&pesan=gagal");
}
?>
