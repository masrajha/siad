<?php
include "../admin/aksi/koneksi.php";
$nik = $_POST['nik'];
$sql = mysqli_query($connect,"select * from tbl_penduduk inner join tbl_rw on tbl_penduduk.id_rw=tbl_rw.id_rw inner join tbl_rt on tbl_penduduk.id_rt=tbl_rt.id_rt where nik='$nik'");
$data= mysqli_fetch_assoc($sql);
echo json_encode($data);

?>