<?php
  include"koneksi.php";
  $id_pengaduan = $_POST['id_pengaduan'];
  $isi = $_POST['isi'];
  $tgl = date('Y-m-d');

  $insert = mysqli_query($connect,"insert into tbl_bls_pengaduan values('','$id_pengaduan','$isi','$tgl')");
  if($insert){
    header("location:../view_pengaduan.php?pesan=sukses");
  }
?>
