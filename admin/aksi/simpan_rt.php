<?php
include "koneksi.php";


$nama_rt=$_POST['nama_rt'];
$id_rw=$_POST['id_rw'];

$sql= mysqli_query($connect, "insert into tbl_rt values('','$nama_rt','$id_rw')");
if($sql){
	header ("location:../view_rt.php?pesan=sukses");
}else{
	header("location:../view_rt.php?pesan=gagal");
}
?>
