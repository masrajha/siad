<?php
include "koneksi.php";
$id_rw=$_GET['id_rw'];


$delete =mysqli_query($connect,"delete from tbl_rw where id_rw='$id_rw'");
if($delete){
	header("location:../view_rw.php?pesan=sukses_delete");
}else{
	header("location:../view_rw.php?pesan=gagal_delete");
}
?>
