<?php
include "koneksi.php";
$id_formkk=$_GET['id_formkk'];


$delete =mysqli_query($connect,"delete from tbl_form_kk where id_form_kk='$id_formkk'");
if($delete){
	header("location:../view_pengajuankk.php?pesan=sukses_delete");
}else{
	header("location:../view_pengajuankk.php?pesan=gagal_delete");
}
?>
