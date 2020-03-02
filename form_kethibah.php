 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Form Keterangan Hibah</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Surat Keterangan Hibah</li>
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
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengajuan Keterangan Hibah berhasil disimpan. Silahkan tunggu 3-4 Hari dan silahkan cek di pencarian. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="gagal"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error . Gagal Simpan. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="errorcaptcha"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Gagal . Captcha Tidak Cocok. </div>';
                                    }
                                ?>
                                <form  method="POST" action="aksi/simpan_kethibah.php" class="contact-form">
                                    <h3 style="margin-left: 10px">Form Keterangan Hibah</h3>
                                    <h5 style="margin-left: 10px">Pengangung Jawab</h5>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>NIK</label>
                                        <input type="text" id="nik" class="email form-control" name="nik" placeholder="NIK" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <h5 style="margin-left: 10px">Pihak Pertama</h5>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama</label>
                                        <input type="text" class="email form-control" name="nama1" placeholder="Nama" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Umur</label>
                                        <input type="text" class="email form-control" name="umur1"  placeholder="Umur" required data-error="Umur Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Pekerjaan</label>
                                        <input type="text" id="pekerjaan" class="form-control" name="pekerjaan1" placeholder="Pekerjaan" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Alamat</label>
                                        <textarea id="alamate" rows="3" placeholder="Alamat" name="alamat1" class="form-control" required data-error="Alamat  Tidak Boleh Kosong"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <h5 style="margin-left: 10px">Pihak Kedua</h5>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama</label>
                                        <input type="text" class="email form-control" name="nama2" placeholder="Nama" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Umur</label>
                                        <input type="text" class="email form-control" name="umur2"  placeholder="Umur" required data-error="Umur Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Pekerjaan</label>
                                        <input type="text" id="pekerjaan" class="form-control" name="pekerjaan2" placeholder="Pekerjaan" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Alamat</label>
                                        <textarea id="alamate" rows="3" placeholder="Alamat" name="alamat2" class="form-control" required data-error="Alamat  Tidak Boleh Kosong"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <h5 style="margin-left: 10px">Isi</h5>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label>Hari</label>
                                        <input type="text" class="email form-control" name="hari" placeholder="Hari" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label>Tanggal</label>
                                        <input type="text" class="email form-control" name="tanggal"  placeholder="Tanggal" required data-error="Tanggal Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label>Bulan</label>
                                        <input type="text" class="email form-control" name="bulan"  placeholder="Bulan" required data-error="Bulan Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label>Tahun</label>
                                        <input type="text" class="email form-control" name="tahun"  placeholder="Tahun" required data-error="Umur Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Barang Hibah</label>
                                        <input type="text" class="email form-control" name="brg_hibah"  placeholder="Barang Hibah" required data-error="Umur Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                  
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>RW</label>
                                        <select class="form-control" name="id_rw" style="border-radius: 0;margin-bottom: 20px;height: 46px;">
                                            <option>--pilihan--</option>
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
                                        <select class="form-control" name="id_rt" style="border-radius: 0;margin-bottom: 20px;height: 46px;">
                                            <option>--pilihan--</option>
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
                                    <h5 style="margin-left: 10px">Ukuran</h5>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Luas</label>
                                        <input type="text" class="email form-control" name="luas" placeholder="Luas" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Ukuran Sebelah Timur</label>
                                        <input type="text" class="email form-control" name="u_timur" placeholder="Ukuran Sebalah Timur" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label> Ukuran Sebelah Barat</label>
                                        <input type="text" class="email form-control" name="u_barat"  placeholder="Ukuran Sebelah Barat" required data-error="Umur Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Ukuran Sebelah Selatan</label>
                                        <input type="text" id="pekerjaan" class="form-control" name="u_selatan" placeholder="Ukuran Sebelah Selatan" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Ukuran Sebelah Utara</label>
                                        <input type="text" id="pekerjaan" class="form-control" name="u_utara" placeholder="Ukuran Sebelah Utara" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <h5 style="margin-left: 10px">Batas-Batas</h5>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Sebelah Timur</label>
                                        <input type="text" class="email form-control" name="b_timur" placeholder="Batas Timur" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Sebelah Barat</label>
                                        <input type="text" class="email form-control" name="b_barat"  placeholder="Batas Barat" required data-error="Umur Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Sebelah Selatan</label>
                                        <input type="text" id="pekerjaan" class="form-control" name="b_selatan" placeholder="Batas Selatan" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Sebelah Utara</label>
                                        <input type="text" id="pekerjaan" class="form-control" name="b_utara" placeholder="Batas Utara" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="captcha/captcha.php" alt="gambar"  style="float:left;margin-right: 15px" /> 
                                        <input type="text" class="form-control" name="captcha" required data-error="Foto Usaha tidak boleh kosong" style="width: 160px" placeholder="Masukkan Captcha">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
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