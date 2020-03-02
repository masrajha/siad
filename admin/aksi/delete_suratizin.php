<?php
include "koneksi.php";
$id_suratizin=$_GET['id_suratizin'];


$delete =mysqli_query($connect,"delete from tbl_suratizin where id_suratizin='$id_suratizin'");
if($delete){
	header("location:../view_suratizin.php?pesan=sukses_delete");
}else{
	header("location:../view_suratizin.php?pesan=gagal_delete");
}
?>
