<?php
include "koneksi.php";
$id_rw=$_POST['id_rw'];
$nama_rw=$_POST['nama_rw'];



$update=mysqli_query($connect,"update tbl_rw set id_rw='$id_rw', nama_rw='$nama_rw'   where id_rw='$id_rw'");
if ($update){
	header ("location:../view_rw.php?update=sukses_update");
}else{
	header ("location:../view_rw.php?update=gagal_update");
}

?>
