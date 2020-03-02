<?php
date_default_timezone_set('Asia/Jakarta');
$host='localhost';
$user='root';
$pw='';
$db='sipuwebi_siad';
$connect = mysqli_connect($host,$user,$pw,$db);
//or die ('gagal koneksi');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
