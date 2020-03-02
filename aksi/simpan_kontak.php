<?php

include "../admin/aksi/koneksi.php";
$nama=$_POST['nama'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$pesan=$_POST['pesan'];

$sql= mysqli_query($connect, "insert into tbl_kontak values('','$nama','$email','$subject','$pesan')");
if($sql){
	header ("location:../?p=kontak&pesan=sukses");
}else{
	header("location:../?p=kontak&pesan=gagal");
}

?>