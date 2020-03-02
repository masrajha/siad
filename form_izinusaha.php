 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Form Surat Izin Usaha</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Izin Usaha</li>
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
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengajuan izin usaha berhasil disimpan. Silahkan tunggu 3-4 Hari dan silahkan cek di menu pencarian. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="gagal"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error . Gagal Simpan. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="errorcaptcha"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Gagal . Captcha Tidak Cocok. </div>';
                                    }
                                ?>
                                <form  method="POST" action="aksi/simpan_suratizin.php" class="contact-form" enctype="multipart/form-data">
                                    <h3 style="margin-left: 10px">Form Izin Usaha</h3>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>NIK</label>
                                        <input type="text" id="nik" class="form-control" name="nik" placeholder="NIK" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama Pemilik Usaha</label>
                                        <input type="text" class="email form-control" name="nama_usaha"  placeholder="Nama Pemilik Usaha" required data-error="Nama Pemilik Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Jenis Usaha</label>
                                        <select class="form-control" name="jenis_usaha" style="border-radius: 0;margin-bottom: 20px;height: 46px;">
                                            <option>--Pilihan--</option>
											<option value="Peternakan">Peternakan</option>
                                            <option value="Perdagangan">Perdagangan</option>
                                            <option value="Hiburan">Hiburan</option>
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Alamat Usaha</label>
                                        <textarea id="message" rows="3" placeholder="Alamat Usaha" name="alamat_usaha" class="form-control" required data-error="Alamat Usaha Tidak Boleh Kosong"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Gambar Usaha</label>
                                        <input type="file" class="email form-control" name="gambar_usaha" required data-error="Foto Usaha tidak boleh kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="captcha/captcha.php" alt="gambar"  style="float:left;margin-right: 15px" /> 
                                        <input type="text" class="form-control" name="captcha" required data-error="Foto Usaha tidak boleh kosong" style="width: 160px" placeholder="Masukkan Captcha" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" class="contact-btn">Simpan</button>
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