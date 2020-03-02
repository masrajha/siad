<?php
include "koneksi.php";
$id=$_GET['id'];


$delete =mysqli_query($connect,"delete from tbl_ketbelumnikah where id='$id'");
if($delete){
	header("location:../view_belumnikah.php?pesan=sukses_delete");
}else{
	header("location:../view_belumnikah.php?pesan=gagal_delete");
}
?>
