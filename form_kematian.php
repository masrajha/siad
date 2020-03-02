 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Form Surat Keterangan Kematian</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Keterangan Kematian</li>
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
                    <!-- End contact icon -->
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
							<?php
                                    if(!empty($_GET['pesan']) && $_GET['pesan']=="sukses"){
                                        echo'<div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengajuan Keterangan Kematian berhasil disimpan. Silahkan tunggu 3-4 Hari dan silahkan cek di menu pencarian.</div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="gagal"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error . Gagal Simpan. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="errorcaptcha"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Gagal . Captcha Tidak Cocok. </div>';
                                    }
                                ?>
                                <form id="contactForm" method="POST" action="" class="contact-form">
                                    <h3 style="margin-left: 10px">Form Surat Kematian</h3>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>NIK</label>
                                        <input type="text" id="nik" class="form-control" name="nik"  placeholder="NIK" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama</label>
                                        <input type="text" class="email form-control" name="nama"  placeholder="Nama" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Tanggal Kematian</label>
                                        <input type="date"  class="form-control" name="tgl_kematian"value="<?php echo date('Y-m-d');?>" required style="border-radius: 0;margin-bottom: 20px;height: 46px;">
                                        
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Tempat Kematian</label>
                                        <textarea id="message" rows="3" placeholder="Tempat Kematian" name="tempat_kematian" class="form-control" required data-error="Tempat Kematian Tidak Boleh Kosong"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Penyebab</label>
                                        <textarea id="message" rows="3" placeholder="Penyebab" class="form-control" required data-error="Penyebab Kematian Harus diisi" name="penyebab"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="captcha/captcha.php" alt="gambar"  style="float:left;margin-right: 15px" /> 
                                        <input type="text" class="form-control" name="captcha" required data-error="Foto Usaha tidak boleh kosong" style="width: 160px" placeholder="Masukkan Captcha">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="contact-btn">Simpan</button>
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