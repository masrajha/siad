 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Form Keterangan Waris</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Surat Keterangan Waris</li>
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
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengajuan Keterangan Waris berhasil disimpan. Silahkan tunggu 3-4 Hari dan silahkan cek di menu pencarian. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="gagal"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error . Gagal Simpan. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="errorcaptcha"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Gagal . Captcha Tidak Cocok. </div>';
                                    }
                                ?>
                                <form  method="POST" action="aksi/simpan_ketwaris.php" class="contact-form">
                                    <h3 style="margin-left: 10px">Form Keterangan Waris</h3>
                                    <h5 style="margin-left: 10px">Penanggung Jawab</h5>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>NIK</label>
                                        <input type="text" id="nik" class="email form-control" name="nik" placeholder="NIK" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <h5 style="margin-left: 10px">Pewaris</h5>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Nama</label>
                                        <input type="text" class="email form-control" name="nama1" placeholder="Nama Pewaris" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                
                                    <h5 style="margin-left: 10px">Penerima Waris</h5>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama</label>
                                        <input type="text" class="email form-control" name="nama2" placeholder="Nama Penerima Waris" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Umur</label>
                                        <input type="text" class="email form-control" name="umur"  placeholder="Umur" required data-error="Umur Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Alamat</label>
                                        <textarea id="alamate" rows="3" placeholder="Alamat" name="alamat" class="form-control" required data-error="Alamat  Tidak Boleh Kosong"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <h5 style="margin-left: 10px">Isi</h5>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Barang Waris</label>
                                        <input type="text" class="email form-control" name="brg_waris"  placeholder="Barang Warisan" required data-error="Barang Warisan Tidak Boleh Kosong">
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
                                        <input type="text" class="email form-control" name="luas" placeholder="Luas" required data-error="Luas Tidak Boleh Kosong">
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
                                        <input type="text" id="pekerjaan" class="form-control" name="b_selatan" placeholder="Batas Selatan" required data-error="Batas Selatan Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Sebelah Utara</label>
                                        <input type="text" id="pekerjaan" class="form-control" name="b_utara" placeholder="Batas Utara" required data-error="Batas Utara Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <h5 style="margin-left: 10px">Ahli Waris Lain</h5>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>1. Nama </label>
                                        <input type="text" class="email form-control" name="namalain[]" placeholder="Nama Waris Lain" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>2. Nama </label>
                                        <input type="text" class="email form-control" name="namalain[]" placeholder="Nama Waris Lain" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>3. Nama </label>
                                        <input type="text" class="email form-control" name="namalain[]" placeholder="Nama Waris Lain" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>4. Nama </label>
                                        <input type="text" class="email form-control" name="namalain[]" placeholder="Nama Waris Lain" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <h5 style="margin-left: 10px">Saksi</h5>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>1. Nama </label>
                                        <input type="text" class="email form-control" name="saksi[]" placeholder="Saksi" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>2. Nama </label>
                                        <input type="text" class="email form-control" name="saksi[]" placeholder="Saksi" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>3. Nama </label>
                                        <input type="text" class="email form-control" name="saksi[]" placeholder="Saksi" required data-error="Nama Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>4. Nama </label>
                                        <input type="text" class="email form-control" name="saksi[]" placeholder="Saksi" required data-error="Nama Tidak Boleh Kosong">
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