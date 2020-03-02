<?php
include "koneksi.php";
$id=$_GET['id'];


$delete =mysqli_query($connect,"delete from tbl_ketjualbeli where id_ketjualbeli='$id'");
if($delete){
	header("location:../view_ketjualbeli.php?pesan=sukses_delete");
}else{
	header("location:../view_ketjualbeli.php?pesan=gagal_delete");
}
?>
