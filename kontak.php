 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Kontak Kami</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Kontak Kami</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-head">
                            <h3>Hubungi Kami</h3>
                            <p>Anda dapat mengirim pesan tentang pelayanan dan layanan kami.</p>
                            <div class="contact-icon">
								<div class="contact-inner">
									<h5>Location :</h5>
									<a href="#"><i class="fa fa-map"></i><span>Alamat: desa fajar baru, kecamatan pagelaran utara, kabupaten pringsewu </span></a>
									<a href="#"><i class="fa fa-phone"></i><span>0822-8041-1752</span></a>
									<a href="#"><i class="fa fa-envelope"></i><span>fajarbaru@gmail.com</span></a>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php
                            if(!empty($_GET['pesan']) && $_GET['pesan']=="sukses"){
                                echo'<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pesan berhasil disimpan </div>';
                            }else if(!empty($_GET['pesan']) && $_GET['pesan']=="gagal"){
                                echo'<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error . Gagal Simpan. </div>';
                            }
                        ?>
                        <div class="contact-form">
                            <div class="row">
                                <form  method="POST" action="aksi/simpan_kontak.php" class="contact-form">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" name="nama" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" name="email" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" name="pesan" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" class="contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- Start contact Area -->