<?php
include "koneksi.php";


$nama=$_POST['nama'];
$username=$_POST['nik'];
$password=md5($_POST['password']);
$id_rt = $_POST['id_rt'];

$sql= mysqli_query($connect, "insert into tbl_admin_rt values('','$nama','$username','$password','$id_rt')");
if($sql){
	header ("location:../view_admin_rt.php?pesan=sukses");
}else{
	header("location:../view_admin_rt.php?pesan=gagal");
}
?>
