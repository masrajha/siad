<?php
include "koneksi.php";
$id=$_GET['id'];


$delete =mysqli_query($connect,"delete from tbl_ketsudahmenikah where id='$id'");
if($delete){
	header("location:../view_sudahnikah.php?pesan=sukses_delete");
}else{
	header("location:../view_sudahnikah.php?pesan=gagal_delete");
}
?>
