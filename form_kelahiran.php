 <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Form Kelahiran</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Beranda</li>
                                <li>Form Kelahiran</li>
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
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Pengajuan surat kelahiran berhasil disimpan. Silahkan tunggu 3-4 Hari dan silahkan cek di menu pencarian. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="gagal"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error . Gagal Simpan. </div>';
                                    }else if(!empty($_GET['pesan']) && $_GET['pesan']=="errorcaptcha"){
                                        echo'<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Gagal . Captcha Tidak Cocok. </div>';
                                    }
                                ?>
                                <form  method="POST" action="aksi/simpan_kelahiran.php" class="contact-form">
                                    <h3 style="margin-left: 10px">Form Keterangan Kelahiran</h3>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>NO KK</label>
                                        <input type="text" id="nik" class="form-control" name="nokk" placeholder="Nomor KK" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama</label>
                                        <input type="text" class="email form-control" name="nama"  placeholder="Nama" required data-error="Nama Pemilik Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Alamat</label>
                                        <textarea id="message" rows="3" placeholder="Alamat" name="alamat" class="form-control" required data-error="Alamat  Tidak Boleh Kosong"></textarea>
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
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tempat Lahir</label>
                                        <input type="text" id="name" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required data-error="NIK Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="email form-control" name="tgl_lahir"  placeholder="Tanggal Lahir" required data-error="Nama Pemilik Tidak Boleh Kosong" style="border-radius: 0;margin-bottom: 20px;height: 46px;">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jk" style="border-radius: 0;margin-bottom: 10px;height: 44px;">
                                            <option>--pilihan--</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama Ayah</label>
                                        <input type="text" class="email form-control" name="nm_ayah"  placeholder="Nama Ayah" required data-error="Nama Ayah Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Nama Ibu</label>
                                        <input type="text" class="email form-control" name="nm_ibu"  placeholder="Nama Ibu" required data-error="Nama Ibu Tidak Boleh Kosong">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Anak ke</label>
                                        <input type="text" class="email form-control" name="anak_ke"  placeholder="Anak Ke" required data-error="Anak ke Tidak Boleh Kosong">
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