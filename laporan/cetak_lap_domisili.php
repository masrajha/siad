
<style>
.header {border-bottom:solid 2px #black; height:85px; width:90%; margin:auto; margin-bottom:20px;}
.header img {max-width:10px!important;max-height:20px!important; float:left; }
.header h3{text-align:center; margin:auto;padding:1px!important;}
.header p {text-align:center; margin:auto;}
table{
  margin:0 auto;
  width:100%;
  border-collapse:collapse;
  font-family: times,serif;
  margin-left: 30px;
  font-size: 16px;
 }
 td,th{
   padding: 4px 20px;
 }
.box{
	padding-left:50px;

}


</style>
<?php
  $id = $_GET['id'];


  $sql = mysqli_query($connect,"select * from tbl_ketdomisili inner join tbl_rw on tbl_ketdomisili.id_rw=tbl_rw.id_rw inner join tbl_rt on tbl_ketdomisili.id_rt=tbl_rt.id_rt where id_domisili='$id'");
  $dt = mysqli_fetch_assoc($sql);

  $bln = (int) substr($dt['tgl_pengajuan'], 5,2);
  $romawi = array("","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII");
?>
<table style="width:100%">
  <tr>
      <td>
          <img src="../img/logo/lg.jpg" style="margin-left:63px;width:80px">
        </td>

      <td>
          <p style="font-size:18px;text-align:center;margin-bottom: 3px"><b>PEMERINTAH KABUPATEN PRINGSEWU</b>  <br/><b>KECAMATAN PAGELARAN UTARA</b> </p>
          <p style="font-size:20px;text-align:center;font-weight: bold;margin-top: 0px;margin-bottom: 2px"><b>DESA FAJAR BARU</b></p>
        </td>
    </tr>

</table>
<hr style="border:2px">
<u><i style="font-size:14px;text-align:center;margin-left: 150px">Alamat: Desa Fajar Baru, Kecamatan Pagelaran Utara, Kabupaten Pringsewu  35375</i></u>
<br />
<!-- /.dropdown js__dropdown -->
<h4 style="font-size:18px;text-align:center;font-family:times;margin-bottom: 1px">SURAT KETERANGAN DOMISILI</h4>
<h4 style="font-size:14px;text-align:center;margin-top:0px">NO : 470/ 00<?php echo $id;?>/ 05 / 2009/ <?php echo $romawi[$bln];?>/<?php echo date('Y');?></h4>
<p style="margin-left:30px;font-family:times;font-size:16px">Yang bertanda tangan dibawah ini Kepala Pekon Fajar Baru Kecamatan Pagelaran Utara Kabupaten Pringsewu menerangkan bahwa :</p>
<table border="0"   style="width:100%;border:1px solid #000" >
  <tbody>
   <tr>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td><?php echo $dt['nama'];?></td>
    </tr>
   <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $dt['jk'];?></td>
    </tr>
  
    <tr>
      <td>Tempat, Tanggal Lahir</td>
      <td>:</td>
      <td><?php echo $dt['tempat_lahir'].",".date('d-m-Y', strtotime($dt['tgl_lahir']));?></td>
    </tr>
  
    <tr>
      <td>Kewarganegaraan</td>
      <td>:</td>
      <td>WNI</td>
    </tr>
    
    <tr>
      <td>Pekerjaan</td>
      <td>:</td>
      <td><?php echo $dt['pekerjaan'];?></td>
    </tr>
      <tr>
      <td>NO KTP</td>
      <td>:</td>
      <td><?php echo $dt['nik'];?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $dt['alamat'];?></td>
    </tr>
  </tbody>
</table>

<p style="margin-left:30px;font-family:times;font-size:16px">Bahwa nama tersebut diatas adalah benar berdomisili di pekon kami  Pekon Fajar Baru Kecamatan Pagelaran Utara  Kabupaten Pringsewu. </p>
<p style="margin-left:30px;font-family:times;font-size:16px">Surat keterangan ini di minta oleh yang bersangkutan untuk keperluan <b>IDENTITAS DIRI</b>.</p>
<p style="margin-left:30px;font-family:times;font-size:16px">Demikian surat keterangan ini dibuat dengan sebenarnya  agar dapat  dipergunakan seperlunya.</p>
<p style="margin-left:400px;margin-top:50px;margin-bottom:5px;font-family:times;font-size:16px"> Dikeluarkan Di : Fajar Baru, <?php echo date("d-m-Y");?></p>
<p style="margin-left:400px;margin-top:50px;margin-bottom:5px;font-family:times;font-size:16px"> Pada Tanggal : <?php echo date("d-m-Y");?></p>
  <p style="margin-left:450px;font-family:times;font-size:16px"> Kepala Desa Fajar Baru</p>
   <?php
  if($dt['verif_lurah']=="Y"){
  ?>
  <img src="../img/ttd.png" style="margin-left:450px;width:140px"><br>
  <?php
}
?>
 <b style="margin-left:450px;font-family:times;font-size:16px">ARJUNA</b>
