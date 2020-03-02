<?php
include "koneksi.php";


$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];


$sql= mysqli_query($connect, "insert into tbl_admin_kelurahan values('','$nama','$username','$password')");
if($sql){
	header ("location:../view_admin.php?pesan=sukses");
}else{
	header("location:../view_admin.php?pesan=gagal");
}
?>
