 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Form Keterangan Kematian</h3>
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
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengajuan Surat Keterangan Kematian berhasil disimpan. Silahkan tunggu 3-4 Hari dan silahkan cek di menu pencarian. </div>';
                                    } else if(!empty($_GET['pesan']) && $_GET['pesan']=="gagal"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error . Gagal Simpan. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="errorcaptcha"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Gagal . Captcha Tidak Cocok. </div>';
                                    }
                                ?>
                                <form method="POST" action="aksi/simpan_kematian.php" class="contact-form">
                                    <h3 style="margin-left: 10px">Form Keterangan Kematian</h3>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>NIK</label>
                                        <input type="text" id="nik" class="form-control" name="nik" placeholder="NIK" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama</label>
                                        <input type="text" class="email form-control" id="nama" name="nama"  placeholder="Nama" required data-error="Nama Pemilik Tidak Boleh Kosong" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Alamat</label>
                                        <textarea id="alamat" rows="3" placeholder="Alamat" name="alamat" class="form-control" required data-error="Alamat  Tidak Boleh Kosong"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>RW</label>
										<input type="text" class="form-control" value="" id="id_rw" readonly>
										<select name="id_rw" id="id_rw1" hidden>
                                            <?php
                                            include"admin/aksi/koneksi.php";
                                            $sql = mysqli_query($connect, "select * from tbl_rw");
                                            while($data=mysqli_fetch_assoc($sql)){
                                            ?>
                                            <option value="<?php echo $data['id_rw'];?>"><?php echo $data['nama_rw'];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>RT</label>
										<input type="text" class="form-control" value="" id="id_rt" readonly>
                                        <select name="id_rt" id="id_rt1" hidden>
                                            <?php
                                            include"admin/aksi/koneksi.php";
                                            $sql = mysqli_query($connect, "select * from tbl_rt");
                                            while($data=mysqli_fetch_assoc($sql)){
                                            ?>
                                            <option value="<?php echo $data['id_rt'];?>"><?php echo $data['nama_rt'];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tempat Lahir</label>
                                        <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required data-error="NIK Tidak Boleh Kosong" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="email form-control" name="tgl_lahir" id="tgl_lahir"  placeholder="Nama" required data-error="Nama Pemilik Tidak Boleh Kosong" style="border-radius: 0;margin-bottom: 20px;height: 46px;" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Agama</label>
                                        <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" required data-error="NIK Tidak Boleh Kosong" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="jk" id="jk" placeholder="JK" required data-error="NIK Tidak Boleh Kosong" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Pekerjaan</label>
                                        <input type="text" id="pekerjaan" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tanggal Kematian</label>
                                        <input type="date" id="name" class="form-control" name="tgl_mati" required data-error="Tgl Kematian Tidak Boleh Kosong" style="border-radius: 0;margin-bottom: 20px;height: 46px;">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tempat Kematian</label>
                                        <input type="text" id="name" class="form-control" name="tempat_mati" required data-error="Tempat Kematian Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Penyebab Kematian</label>
                                        <input type="text" id="name" class="form-control" name="sebab_mati" required data-error="Penyebab Kematian Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="captcha/captcha.php" alt="gambar"  style="float:left;margin-right: 15px" /> 
                                        <input type="text" class="form-control" name="captcha" required data-error="Foto Usaha tidak boleh kosong" style="width: 160px" placeholder="Masukkan Captcha">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit"  class="contact-btn">Simpan</button>
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