        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Informasi</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Informasi</li>
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
                        <div class="blog-grid home-blog">
                            <div class="row">
                            	<?php
								include"admin/aksi/koneksi.php";
								$no=1;
								$q=mysqli_query($connect, "select * from tbl_informasi order by tgl_informasi DESC");
								while($data=mysqli_fetch_assoc($q)){
								?>
                            	<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="single-blog">
										<div class="blog-image">
											<a class="image-scale" href="#">
												<img src="admin/images/gambar_informasi/<?php echo $data['gambar_informasi'];?>" alt="">
											</a>
										</div>
										<div class="blog-content">
										   <div class="blog-title">
											   <div class="blog-meta">
													<span class="date-type">
														<?php echo $data['tgl_informasi'];?>
													</span>
												</div>
												<a href="?p=detail_informasi&id=<?php echo $data['id_informasi'];?>">
													<h4><?php echo $data['judul_informasi'];?></h4>
												</a>
											</div>
											<div class="blog-text">
												<p><?php echo substr($data['isi_informasi'],0,300);?></p>
												<a class="blog-btn" href="?p=detail_informasi&id=<?php echo $data['id_informasi'];?>">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<?php
								}
								?>
                            	<!-- End single blog -->
                            	<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="blog-pagination">
									   <ul class="pagination">
										   <li><a href="#">&lt;</a></li>
										   <li class="active"><a href="#">1</a></li>
										   <li><a href="#">2</a></li>
										   <li><a href="#">3</a></li>
										   <li><a href="#">&gt;</a></li>
									   </ul>
									</div>
							   </div>
                            </div>
                        </div>
					</div>
					<!-- End single blog -->
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
										<!-- start single post -->
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