<?php
include "../admin/aksi/koneksi.php";
$nik=$_POST['nik'];
$no_kk=$_POST['no_kk'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$id_rw=$_POST['id_rw'];
$id_rt=$_POST['id_rt'];
$tgl_lahir=$_POST['tgl_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$jk=$_POST['jk'];
$agama=$_POST['agama'];
$kebangsaan=$_POST['kebangsaan'];
$pekerjaan=$_POST['pekerjaan'];
$status_nikah=$_POST['status_pernikahan'];
$desa_pindah=$_POST['desa_pindah'];
$kec_pindah=$_POST['kec_pindah'];
$kab_pindah=$_POST['kab_pindah'];
$prov_pindah=$_POST['prov_pindah'];
$alasan_pindah=$_POST['alasan_pindah'];
$jml_keluarga=$_POST['jml_keluarga'];


$tgl_pengajuan = date('Y-m-d');
$sql= mysqli_query($connect, "insert into tbl_ketpindah values('','$nik','$nama','$no_kk','$tgl_lahir','$tempat_lahir','$jk','$agama','$kebangsaan','$status_nikah','$pekerjaan','$alamat','$id_rt','$id_rw','$desa_pindah','$kec_pindah','$kab_pindah','$prov_pindah','$alasan_pindah','$jml_keluarga','$tgl_pengajuan','N','N','N')");
if($sql){
	header ("location:../?p=form_ketpindah&pesan=sukses");
}else{
	header("location:../?p=form_ketpindah&pesan=gagal");
}
?>
