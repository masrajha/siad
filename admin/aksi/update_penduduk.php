<?php
include "koneksi.php";
$id_penduduk=$_POST['id_penduduk'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgl_lahir=$_POST['tgl_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$jk=$_POST['jk'];
$agama=$_POST['agama'];
$golongan_darah=$_POST['golongan_darah'];
$telpon=$_POST['telpon'];
$pendidikan=$_POST['pendidikan'];
$kebangsaan=$_POST['kebangsaan'];
$pekerjaan=$_POST['pekerjaan'];
$status_pernikahan=$_POST['status_pernikahan'];
$id_rt=$_POST['id_rt'];
$id_rw=$_POST['id_rw'];

$update=mysqli_query ($connect, "update tbl_penduduk set nik='$nik', nama='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', jk='$jk', agama='$agama', golongan_darah='$golongan_darah', pendidikan='$pendidikan', kebangsaan='$kebangsaan', pekerjaan='$pekerjaan', status_pernikahan='$status_pernikahan', id_rt='$id_rt', id_rw='$id_rw'  where id_penduduk='$id_penduduk'");
if ($update){
	header ("location:../view_penduduk.php?update=sukses_update");
}else{
	header ("location:../view_penduduk.php?update=gagal_update");
}

?>
