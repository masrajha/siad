<?php
include "koneksi.php";
$id_pengaduan=$_GET['id_pengaduan'];


$delete =mysqli_query($connect,"delete from tbl_pengaduan where id_pengaduan='$id_pengaduan'");
if($delete){
	header("location:../view_pengaduan.php?pesan=sukses_delete");
}else{
	header("location:../view_pengaduan.php?pesan=gagal_delete");
}
?>
