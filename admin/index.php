<?php
	session_start();
	if(empty($_SESSION['username'])){
		header("location:form_login.php");
	}
	include'header.php';
?>
    <div class="content-wrapper">
         <div class="container">
             <div class="row">
             				<div class="col-md-6">
								 <div class="col-md-12 col-sm-12 col-xs-12">
										<div class="panel panel-info">
												<div class="panel-heading">
														Jumlah Penduduk
												</div>
												<div class="panel-body">
													<div class="table-responsive">
															 <table class="table table-striped table-bordered table-hover" >
																 <thead>
																	 <tr>
																		 <th>Total</th>

																	 </tr>
																 </thead>
																 <tbody>
																	 <?php
																	 $sqlall = mysqli_query($connect,"select count(*) as jml from tbl_penduduk");

																	 $dtall = mysqli_fetch_assoc($sqlall);
																	 ?>
																	 <tr>

																		 <td><?php echo $dtall['jml'];?></td>
																	 </tr>
																 </tbody>
															 </table>
													 </div>
												 </div>
										</div>
								</div>
								 <div class="col-md-12 col-sm-12 col-xs-12">
										 <div class="panel panel-info">
												 <div class="panel-heading">
														 Data Penduduk Berdasarkan Jenis Kelamin
												 </div>
												 <div class="panel-body">
													 <div class="table-responsive">
																<table class="table table-striped table-bordered table-hover" >
																	<thead>
																		<tr>
																			<th>No</th>
																			<th>Laki-Laki</th>
																			<th>Perempuan</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		$sqljkl = mysqli_query($connect,"select count(jk) as jml_laki from tbl_penduduk where jk='L'");
																		$sqljkw = mysqli_query($connect,"select count(jk) as jml_wanita from tbl_penduduk where jk='P'");
																		$dtjkl = mysqli_fetch_assoc($sqljkl);
																		$dtjkw = mysqli_fetch_assoc($sqljkw);
																		?>
																		<tr>
																			<td>1</td>
																			<td><?php echo $dtjkl['jml_laki'];?></td>
																			<td><?php echo $dtjkw['jml_wanita'];?></td>
																		</tr>
																	</tbody>
																</table>
														</div>
													</div>
										 </div>
								 </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="panel panel-info">
										<div class="panel-heading">
												Data Penduduk Berdasarkan Jenis Kelamin
										</div>
										<div class="panel-body">
											<div id="chartjk" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
										</div>
								</div>
							</div>
							 <div class="col-md-6 col-sm-6 col-xs-12">
									 <div class="panel panel-info">
											 <div class="panel-heading">
													 Data Penduduk Berdasarkan Kategori Usia
											 </div>
											 <div class="panel-body">
												 <div class="table-responsive">
															<table class="table table-striped table-bordered table-hover" >
																<thead>
																	<tr>
																		<th>No</th>
																		<th>Kategori Usia</th>
																		<th>Umur</th>
																	</tr>
																</thead>
																<tbody>
																	<?php
																	$no=1;
																	$sqlusia = mysqli_query($connect,"select case
																		when umur <= 5 then 'Balita (<= 5 Thn)'
																		when umur between  6 and 12 then 'Anak-Anak (6-12 Thn)'
																		when umur between  13 and 21 then 'Remaja (13-21 Thn)'
																		when umur between  22 and 50 then 'Dewasa (22-50 Thn)'
																		when umur > 50 then 'Tua (>=50 Thn)'
																		END as range_umur,
																		count(*) as jumlah
																		from( select TIMESTAMPDIFF(YEAR,tgl_lahir,CURDATE()) as umur from tbl_penduduk) as dummy_tabel group by range_umur order by range_umur");

																	while($dtusia = mysqli_fetch_assoc($sqlusia)){
																	?>
																	<tr>
																		<td><?php echo $no;?></td>
																		<td><?php echo $dtusia['range_umur'];?></td>
																		<td><?php echo $dtusia['jumlah'];?></td>
																	</tr>
																	<?php
																	$no++;
																} ?>
																</tbody>
															</table>
													</div>
												</div>
									 </div>
							 </div>
							  <div class="col-md-6 col-sm-6 col-xs-12">
									<div class="panel panel-info">
											<div class="panel-heading">
													Data Penduduk Berdasarkan Usia
											</div>
											<div class="panel-body">
												<div id="chartusia" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
											</div>
									</div>
							</div>

							<br>
							<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="panel panel-info">
											<div class="panel-heading">
													Kontak Saran
											</div>
											<div class="panel-body">
												<div class="table-responsive">
					                                <table class="table table-striped table-bordered table-hover" id="dataTables-example3">
					                                    <thead>
					                                        <tr>
					                                            <th>No</th>
																<th>Nama</th>
																<th>Email</th>
																<th>Subject</th>
																<th>Pesan</th>

					                                        </tr>
					                                    </thead>
					                                    <tbody>
														<?php
														include"aksi/koneksi.php";
														$no=1;
														$q=mysqli_query($connect, "select * from tbl_kontak ");
														while($data=mysqli_fetch_assoc($q)){
														?>
					                                        <tr >
					                                            <td><?php echo $no; ?></td>
																<td><?php echo $data['nama']; ?></td>
																<td><?php echo $data['email']; ?></td>
																<td><?php echo $data['subject']; ?></td>
																<td><?php echo $data['saran']; ?></td>
					                                            
					                                        </tr>
															<?php $no++;} ?>
					                                    </tbody>
					                                </table>
					                            </div>
											</div>
									</div>
							</div>
							 
						</div>
					
					</div>

    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <?php
		include"footer.php";
	?>
