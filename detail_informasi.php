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
                                <h3>Detail Informasi</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Detail Informasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!--Blog Area Start-->
        <div class="blog-page-area area-padding">
            <div class="container">
                <div class="row">
                    <!-- Start single blog -->
					<div class="col-md-8 col-sm-8 col-xs-12">
					   <!-- single-blog start -->
						<article class="blog-post-wrapper">
							<div class="blog-banner">
								<a href="#" class="blog-images">
									<img src="admin/images/gambar_informasi/<?php echo $dt['gambar_informasi'];?>" alt="">
								</a>
								<div class="blog-content">
									<div class="blog-meta">
										<span class="date-type">
											<?php echo $dt['tgl_informasi'];?>
										</span>
									</div>
									<a href="#"><h4><?php echo $dt['judul_informasi'];?></h4></a>
									<p><?php echo $dt['isi_informasi'];?></p>
								</div>
							</div>
						</article>
						<div class="clear"></div>
						
					</div>
					<!-- End main column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="left-head-blog">
							<div class="left-blog-page">
								<!-- search option start -->
								<form action="#">
									<div class="blog-search-option">
										<input type="text" placeholder="Search...">
										<button class="button" type="submit">
											<i class="fa fa-search"></i>
										</button>
									</div>
								</form>
								<!-- search option end -->
							</div>
							<div class="left-blog-page">
								<!-- recent start -->
								<div class="left-blog">
									<h4>recent post</h4>
									<div class="recent-post">
										<?php
										include"admin/aksi/koneksi.php";
										$no=1;
										$q1=mysqli_query($connect, "select * from tbl_informasi order by tgl_informasi DESC LIMIT 4");
										while($data=mysqli_fetch_assoc($q1)){
										?>
										<!-- start single post -->
										<div class="recent-single-post">
											<div class="post-img">
												<a href="#">
													<img src="admin/images/gambar_informasi/<?php echo $data['gambar_informasi'];?>" alt="" style="width: 120px;height: 70px">
												</a>
											</div>
											<div class="pst-content">
												<p><a href="?p=detail_informasi&id=<?php echo $data['id_informasi'];?>"><?php echo $data['judul_informasi'];?></a></p>
											</div>
										</div>
										<!-- End single post -->
								<?php
							}
							?>
									</div>
								</div>
								<!-- recent end -->
							</div>
							
						</div>
					</div>
					<!-- End left sidebar -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!--End of Blog Area-->