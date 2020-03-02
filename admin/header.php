<?php include"aksi/koneksi.php";?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
  <!-- DATATABLE STYLE  -->
    <!-- <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet" />

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style type="text/css">
      .main-nav .dropdown-menu.notify-drop {
  min-width: 330px;
  background-color: #fff;
  min-height: 360px;
  max-height: 360px;
}
.main-nav .dropdown-menu.notify-drop .notify-drop-title {
  border-bottom: 1px solid #e2e2e2;
  padding: 5px 15px 10px 15px;
}
.main-nav .dropdown-menu.notify-drop .drop-content {
  min-height: 280px;
  max-height: 280px;
  overflow-y: scroll;
}
.main-nav .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-track
{
  background-color: #F5F5F5;
}

.main-nav .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar
{
  width: 8px;
  background-color: #F5F5F5;
}

.main-nav .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-thumb
{
  background-color: #ccc;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li {
  border-bottom: 1px solid #e2e2e2;
  padding: 10px 0px 5px 0px;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li:nth-child(2n+0) {
  background-color: #fafafa;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li:after {
  content: "";
  clear: both;
  display: block;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li:hover {
  background-color: #fcfcfc;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li:last-child {
  border-bottom: none;
}
.main-nav main-navnavbar-default .dropdown-menu.notify-drop .allRead {
  margin-right: 7px;
}
.main-nav .dropdown-menu.notify-drop .rIcon {
  float: right;
  color: #999;
}
.main-nav .dropdown-menu.notify-drop .rIcon:hover {
  color: #333;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li a {
  font-size: 12px;
  font-weight: normal;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li {
  font-weight: bold;
  font-size: 11px;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li hr {
  margin: 5px 0;
  width: 70%;
  border-color: #e2e2e2;
}
.main-nav .dropdown-menu.notify-drop .drop-content .pd-l0 {
  padding-left: 0;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li p {
  font-size: 11px;
  color: #666;
  font-weight: normal;
  margin: 3px 0;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li p.time {
  font-size: 10px;
  font-weight: 600;
  top: -6px;
  margin: 8px 0px 0px 0px;
  padding: 0px 3px;
  border: 1px solid #e2e2e2;
  position: relative;
  background-image: linear-gradient(#fff,#f2f2f2);
  display: inline-block;
  border-radius: 2px;
  color: #B97745;
}
.main-nav .dropdown-menu.notify-drop .drop-content > li p.time:hover {
  background-image: linear-gradient(#fff,#fff);
}
.main-nav .dropdown-menu.notify-drop .notify-drop-footer {
  border-top: 1px solid #e2e2e2;
  bottom: 0;
  position: relative;
  padding: 8px 15px;
}
.main-nav .dropdown-menu.notify-drop .notify-drop-footer a {
  color: #777;
  text-decoration: none;
}
.main-nav .dropdown-menu.notify-drop .notify-drop-footer a:hover {
  color: #333;
}
    </style>
    


</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <!--   <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.jpg" />
                </a> -->

            </div>

            <div class="right-div">
              <?php
              if(!empty($_SESSION['username'])){
               ?>
                
                <a href="aksi/logout.php" class="btn btn-danger pull-right">LOG OUT</a>
                <?php
              } ?>
            </div>
        </div>
    </div>
     <nav class="main-nav" role="navigation">
            <div class="container">

                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
              <?php

                if(!empty($_SESSION['username'])){
                  if($_SESSION['level']=="admin"){
              ?>
                            <li class="nav-item"><a href="index.php">Home</a></li>
                             <li class="nav-item dropdown">

                                <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#">Informasi<i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="form_informasi.php">Form Informasi</a></li>
                                  <li><a href="view_informasi.php">View Informasi</a></li>
                                </ul>
                            </li>

                               <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#">Data Pengajuan<i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="view_pengajuankk.php">View Pengajuan KK</a></li>
                                  <li><a href="view_pengajuanktp.php">View Pengajuan KTP</a></li>
                                  <li><a href="view_kelahiran.php">View Pengajuan Kelahiran</a></li>
                                  <li><a href="view_kematian.php">View Pengajuan Kematian</a></li>
                                  <li><a href="view_kettidakmampu.php">View Ket Tidak Mampu</a></li>
                                  <li><a href="view_belumnikah.php">View Ket Belum Menikah</a></li>
                                   <li><a href="view_ketdomisili.php">View Pengajuan Ket Domisili</a></li>
                                   <li><a href="view_sudahnikah.php">View Ket Sudah Menikah</a></li>
                                   <li><a href="view_ketjualbeli.php">View Ket Jual Beli</a></li>
                                   <li><a href="view_ketwaris.php">View Ket Waris</a></li>
                                   <li><a href="view_kethibah.php">View Ket Hibah</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#">Data Penduduk<i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="form_penduduk.php">Input Penduduk</a></li>
                                  <li><a href="view_penduduk.php">View Penduduk</a></li>
                                  <li><a href="form_kk.php">Input KK</a></li>
                                  <li><a href="view_kk.php">View KK</a></li>
                                </ul>
                            </li>

                           <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#">Data RT & RW<i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="form_rt.php">Form RT</a></li>
                                  <li><a href="view_rt.php">View RT</a></li>
                                  <li><a href="form_rw.php">Form RW</a></li>
                                  <li><a href="view_rw.php">View RW</a></li>
                                </ul>
                            </li>


                             <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#"> Input Admin <i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="form_admin_rt.php">Form Admin RT</a></li>
                                  <li><a href="view_admin_rt.php">View Admin RT</a></li>
                                </ul>
                            </li>
                           <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#">Surat Izin<i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="view_suratizin.php">View Surat Izin</a></li>
                                </ul>
                            </li>

              <?php
                  }else if($_SESSION['level']=="lurah"){
                ?>
                <li class="nav-item"><a href="index.php">Home</a></li>
                  <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#">Data Pengajuan<i class="glyphicon glyphicon-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                 <li><a href="view_pengajuankk.php">View Pengajuan KK</a></li>
                                  <li><a href="view_pengajuanktp.php">View Pengajuan KTP</a></li>
                                  <li><a href="view_kelahiran.php">View Pengajuan Kelahiran</a></li>
                                  <li><a href="view_kematian.php">View Pengajuan Kematian</a></li>
                                  <li><a href="view_kettidakmampu.php">View Ket Tidak Mampu</a></li>
                                  <li><a href="view_belumnikah.php">View Ket Belum Menikah</a></li>
                                   <li><a href="view_ketdomisili.php">View Pengajuan Ket Domisili</a></li>
                                   <li><a href="view_sudahnikah.php">View Ket Sudah Menikah</a></li>
                                   <li><a href="view_ketjualbeli.php">View Ket Jual Beli</a></li>
                                   <li><a href="view_ketwaris.php">View Ket Waris</a></li>
                                   <li><a href="view_kethibah.php">View Ket Hibah</a></li>
                                </ul>
                            </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#">Surat Izin<i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="view_suratizin.php">View Surat Izin</a></li>
                    </ul>
                </li>
                <?php
                  }else{
                    ?>
                    <li class="nav-item"><a href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-click="dropdown" data-delay="0" data-close-others="false" href="#">Pengajuan<i class="glyphicon glyphicon-chevron-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="view_pengajuankk_rt.php">View Pembuatan KK</a></li>
                        <li><a href="view_pengajuanktp_rt.php">View Pengajuan KTP</a></li>
                        <li><a href="view_kematian_rt.php">View Kematian</a></li>
                        <li><a href="view_kelahiran_rt.php">View Kelahiran</a></li>
                        <li><a href="view_kettidakmampu.php">View Ket Tidak Mampu</a></li>
                        <li><a href="view_belumnikah.php">View Ket Belum Menikah</a></li>
                        <li><a href="view_ketdomisili.php">View Pengajuan Ket Domisili</a></li>
                        <li><a href="view_sudahnikah.php">View Ket Sudah Menikah</a></li>
                        <li><a href="view_ketjualbeli.php">View Ket Jual Beli</a></li>
                        <li><a href="view_ketwaris.php">View Ket Waris</a></li>
                        <li><a href="view_kethibah.php">View Ket Hibah</a></li>
                      </ul>
                    </li>
                    <?php
                  }
              }else{

              }
              ?>
          </ul>

                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->
