<?php
include "koneksi.php";
$id_rt=$_POST['id_rt'];
$nama_rt=$_POST['nama_rt'];
$id_rw=$_POST['id_rw'];


$update=mysqli_query($connect,"update tbl_rt set nama_rt='$nama_rt', id_rw='$id_rw'  where id_rt='$id_rt'");
if ($update){
	header ("location:../view_rt.php?update=sukses_update");
}else{
	header ("location:../view_rt.php?update=gagal_update");
}

?>
