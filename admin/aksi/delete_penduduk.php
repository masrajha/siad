<?php
include "koneksi.php";
$id_penduduk=$_GET['id_penduduk'];


$delete =mysqli_query($connect,"delete from tbl_penduduk where id_penduduk='$id_penduduk'");
if($delete){
	header("location:../view_penduduk.php?pesan=sukses_delete");
}else{
	header("location:../view_penduduk.php?pesan=gagal_delete");
}
?>
