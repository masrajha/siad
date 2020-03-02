<?php
include "koneksi.php";
$id_detailkk=$_GET['id_detailkk'];
$no_kk=$_GET['no_kk'];

$delete =mysqli_query($connect,"delete from tbl_detailkk where id_detailkk='$id_detailkk'");
if($delete){
	header("location:../view_detailkk.php?pesan=sukses_delete&no_kk=$no_kk");
}else{
	header("location:../view_detailkk.php?pesan=gagal_delete");
}
?>
