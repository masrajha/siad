<?php
include "koneksi.php";
$id_kelahiran=$_POST['id_kelahiran'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgl_lahir=$_POST['tgl_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$jk=$_POST['jk'];
$agama=$_POST['agama'];
$golongan_darah=$_POST['golongan_darah'];



$update=mysqli_query($connect,"update tbl_kelahiran set nik='$nik', nama='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', jk='$jk', agama='$agama', golongan_darah='$golongan_darah' where id_kelahiran='$id_kelahiran'");
if ($update){
	header ("location:../view_kelahiran.php?update=sukses_update");
}else{
	header ("location:../view_kelahiran.php?update=gagal_update");
}

?>
