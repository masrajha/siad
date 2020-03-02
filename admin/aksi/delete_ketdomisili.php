<?php
include "koneksi.php";
$id=$_GET['id'];


$delete =mysqli_query($connect,"delete from tbl_ketdomisili where id_domisili='$id'");
if($delete){
	header("location:../view_ketdomisili.php?pesan=sukses_delete");
}else{
	header("location:../view_ketdomisili.php?pesan=gagal_delete");
}
?>
