<?php
include "koneksi.php";
$id_informasi=$_GET['id_informasi'];


$delete =mysqli_query($connect,"delete from tbl_informasi where id_informasi='$id_informasi'");
if($delete){
	header("location:../view_informasi.php?pesan=sukses_delete");
}else{
	header("location:../view_informasi.php?pesan=gagal_delete");
}
?>
