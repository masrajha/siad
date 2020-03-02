        <!-- Start Slider Area -->
        <div class="intro-area">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="">
                    <div class="slider-images">
                        <img src="img/slider/1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="slider-images">
                        <img src="img/slider/2.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="">
                    <div class="slider-images">
                        <img src="img/slider/3.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Appointment Area -->
        <!-- service area start -->
        <div class="welcome-area bg-gray area-padding">
            <div class="container">
                <div class="row">
                    <div class="all-well-services">
                         <?php
                        include"admin/aksi/koneksi.php";
                        $no=1;
                        $q=mysqli_query($connect, "select * from tbl_informasi where jenis_informasi='Pembangunan' order by tgl_informasi DESC LIMIT 3");
                        while($data=mysqli_fetch_assoc($q)){
                        ?>
						<!-- single-well end-->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="well-services">
								<div class="image-overly">
									<div class="image-overly-text">
										<span class="top-icon" ><i class="flaticon-graph-3" ></i></span>
										<div class="well-content">
											<h4><?php echo $data['judul_informasi'];?></h4>
											<p><?php echo substr($data['isi_informasi'],0,50);?></p>
											<a class="service-btn" href="?p=detail_informasi&id=<?php echo $data['id_informasi'];?>">read more</a>
										</div>
									</div>
								</div>
								<div class="services-img">
									<img src="admin/images/gambar_informasi/<?php echo $data['gambar_informasi'];?>" alt="" style="width: 396px;height: 264px">
									<span class="top-icon" ><i class="flaticon-graph-3" ></i></span>
								</div>
								<div class="main-services">
									<div class="well-content">
										<h4><?php echo $data['judul_informasi'];?></h4>
										<p><?php echo substr($data['isi_informasi'],0,50);?></p>
									</div>
								</div>
							</div>
						</div>
						<?php
                    }
                    ?>
					</div>
                </div>
            </div>
        </div>
        <!-- service-area end -->
		<!-- Start Service area -->
		<div class="services-area area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <h3>Layanan Kami</h3>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="all-services">
                    	<!-- Start services -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-services">
								<a class="service-images" href="#"><i class="icon icon-layers"></i></a>
								<div class="service-content">
									<h4>Cepat & Mudah</h4>
									<p>Cepat dalam melayani, Mudah dalam segala urusan.</p>
								</div>
							</div>
						</div>
						<!-- Start services -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-services">
							   <a class="service-images" href="#"><i class="icon icon-apartment"></i></a>
								<div class="service-content">
									<h4>Terdepan dalam Melayani</h4>
						<p>Mengutamakan pelayanan pada masyarakat.</p>
								</div>
							</div>
						</div>
						<!-- Start services -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-services">
								<a class="service-images" href="#"><i class="icon icon-magic-wand"></i></a>
								<div class="service-content">
									<h4>Siaga & Aman</h4>
									<p>Selalu ada untuk masyarakat. Menjaga keamanan dalam lingkungan</p>
								</div>
							</div>
						</div>
						
                    </div>
				</div>
			</div>
		</div>
		<!-- End Service area -->
        <!-- Start Counter Area -->
        <div class="counter-area parallax-blue-bg fix" data-stellar-background-ratio="0.6">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="counter-inner">
                           <h4>Data Penduduk Sampai <span class="color">Hari Ini</span></h4>
                        </div>
                    </div>
                     <?php
                        include"admin/aksi/koneksi.php";
                        $no=1;
                        $q=mysqli_query($connect, "select * from tbl_penduduk");
                        $q1=mysqli_query($connect, "select * from tbl_kk");
                        $q2=mysqli_query($connect, "select * from tbl_penduduk where jk='l' || jk='L'");
                        $q3=mysqli_query($connect, "select * from tbl_penduduk  where jk='p' || jk='P'");

                        ?>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="about-count">
                           <div class="fun-content">
                                <div class="fun_text">
                                    <span class="counter"><?php echo mysqli_num_rows($q);?></span>
                                    <h5>Jumlah Penduduk</h5>
                                </div>
                                <!-- fun_text  -->
                                <div class="fun_text">
                                    <span class="counter"><?php echo mysqli_num_rows($q1);?></span>
                                    <h5>Jumlah KK</h5>
                                </div>
                                <!-- fun_text  -->
                                <div class="fun_text">
                                    <span class="counter"><?php echo mysqli_num_rows($q2);?></span>
                                    <h5>Jumlah Laki-Laki</h5>
                                </div>
                                <!-- fun_text  -->
                                <div class="fun_text">
                                    <span class="counter"><?php echo mysqli_num_rows($q3);?></span>
                                    <h5>Jumlah Perempuan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Row -->
            </div>
        </div>
        <!-- End Counter Area -->
       
        <!--Blog Area Start-->
        <div class="blog-area area-padding">
            <div class="container">
                <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h3>Informasi Terbaru</h3>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                        <?php
                        include"admin/aksi/koneksi.php";
                        $no=1;
                        $q=mysqli_query($connect, "select * from tbl_informasi where jenis_informasi!='Pembangunan' order by tgl_informasi DESC LIMIT 3");
                        while($data=mysqli_fetch_assoc($q)){
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="?p=detail_informasi&id=<?php echo $data['id_informasi'];?>">
                                        <img src="admin/images/gambar_informasi/<?php echo $data['gambar_informasi'];?>" alt="" style="height: 240px">
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
                                        <p><?php echo substr($data['isi_informasi'],0,50);?></p>
                                        <a class="blog-btn" href="?p=detail_informasi&id=<?php echo $data['id_informasi'];?>">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php
                   }
                   ?>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!--End of Blog Area-->