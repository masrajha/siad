<?php
include "koneksi.php";

$id_rw=$_POST['id_rw'];
$nama_rw=$_POST['nama_rw'];

$sql= mysqli_query($connect, "insert into tbl_rw values('$id_rw','$nama_rw')");
if($sql){
	header ("location:../view_rw.php?pesan=sukses");
}else{
	header("location:../view_rw.php?pesan=gagal");
}
?>
