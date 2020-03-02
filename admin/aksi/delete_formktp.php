<?php
include "koneksi.php";
$id_formktp=$_GET['id_formktp'];


$delete =mysqli_query($connect,"delete from tbl_form_ktp where id_form_ktp='$id_formktp'");
if($delete){
	header("location:../view_pengajuanktp.php?pesan=sukses_delete");
}else{
	header("location:../view_pengajuanktp.php?pesan=gagal_delete");
}
?>
