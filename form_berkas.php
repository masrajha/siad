 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Form Pencarian Berkas</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Pencarian Berkas</li>
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
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengaujuan izin usaha berhasil disimpan. Silahkan tunggu 3-4 Hari dan silahkan cek di pencarain surat pada menu surat. </div>';
                                    }
                                ?>
                                <form  method="POST" action="?p=hasil_pencarian" class="contact-form" enctype="multipart/form-data">
                                    <h3 style="margin-left: 10px">Form Pencarian Berkas</h3>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <label>NIK/NO KK</label>
                                        <input type="text" id="nik" class="form-control" name="nik" placeholder="NIK" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                   <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label>Tanggal Pengajuan</label>
                                        <input type="date" id="name" class="form-control" name="tgl" placeholder="NIK" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="contact-btn">Cari</button>
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