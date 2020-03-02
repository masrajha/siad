<?php
include "koneksi.php";
$id_kelahiran=$_GET['id_kelahiran'];


$delete =mysqli_query($connect,"delete from tbl_kelahiran where id_kelahiran='$id_kelahiran'");
if($delete){
	header("location:../view_kelahiran.php?pesan=sukses_delete");
}else{
	header("location:../view_kelahiran.php?pesan=gagal_delete");
}
?>
