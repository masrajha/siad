        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Pembangunan Desa</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Pembangunan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- service area start -->
        <div class="welcome-area bg-gray area-padding">
            <div class="container">
                <div class="row">
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
                                            <a class="service-btn" href="?p=detail_pembangunan&id=<?php echo $data['id_informasi'];?>">read more</a>
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
        <!-- service-area end -->
        