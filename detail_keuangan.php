   <?php
    include"admin/aksi/koneksi.php";
    $no=1;
    $id = $_GET['id'];
    $q=mysqli_query($connect, "select * from tbl_informasi WHERE id_informasi='$id' order by tgl_informasi DESC");
    $dt = mysqli_fetch_assoc($q);
    ?>
   <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Detail Keuangan</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Detail Keuangan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start project Area -->
        <div class="project-single area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="project-inner">
                            <div class="project-image">
                                <img src="admin/images/gambar_informasi/<?php echo $dt['gambar_informasi'];?>" alt="">
                            </div>
                        </div>
                    </div>
 
                    <!-- End Column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="project-details">
                            <h4><?php echo $dt['judul_informasi'];?></h4>
                            <p><?php echo $dt['isi_informasi'];?></p>
						</div>
					</div>
					<!-- End single page -->
                </div>
            </div>
            <!-- End main content -->
        </div>
		<!-- End portfolio Area -->