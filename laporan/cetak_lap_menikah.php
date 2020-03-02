
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
  font-size: 14px;
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


  $sql = mysqli_query($connect,"select * from tbl_pengantarnikah inner join tbl_rw on tbl_pengantarnikah.id_rw=tbl_rw.id_rw inner join tbl_rt on tbl_pengantarnikah.id_rt=tbl_rt.id_rt where id='$id'");
  $dt = mysqli_fetch_assoc($sql);
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
<u><i style="font-size:12px;text-align:center;margin-left: 150px">Alamat: Desa Fajar Baru, Kecamatan Pagelaran Utara, Kabupaten Pringsewu  35451</i></u>
<br />
<!-- /.dropdown js__dropdown -->
<h4 style="font-size:18px;text-align:center;font-family:times;margin-bottom: 1px"><u>SURAT KETERANGAN UNTUK NIKAH</u></h4>
<h4 style="font-size:12px;text-align:center;margin-top:0px">NO : 470/ 00<?php echo $id;?>/ 05 / 2009/ <?php echo $romawi[$bln];?>/<?php echo date('Y');?></h4>
<p style="margin-left:30px;font-family:times;font-size:14px">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa  : </p>
<table border="0"   style="width:100%;border:1px solid #000" >
  <tbody>
     <tr>
      <td>1. NIK</td>
      <td>:</td>
      <td><?php echo $dt['nik'];?></td>
    </tr>
    <tr>
      <td>2. Nama</td>
      <td>:</td>
      <td><?php echo $dt['nama'];?></td>
    </tr>
    <tr>
      <td>3. Tempat, Tanggal Lahir</td>
      <td>:</td>
      <td><?php echo $dt['tempat_lahir'].",".$dt['tgl_lahir'];?></td>
    </tr>
     <tr>
      <td>4. Pekerjaan</td>
      <td>:</td>
      <td><?php echo $dt['pekerjaan'];?></td>
    </tr>
     <tr>
      <td>5. Alamat</td>
      <td>:</td>
      <td><?php echo $dt['alamat'];?></td>
    </tr>
    <tr>
      <td>6. RT/RW</td>
      <td>:</td>
      <td><?php echo $dt['nama_rt'];?>/<?php echo $dt['nama_rw'];?></td>
    </tr>
     <tr>
      <td>7. Bin/Binti</td>
      <td>:</td>
      <td><?php echo $dt['orangtua'];?></td>
    </tr>
   
    <tr>
      <td>a.Jika Pria, terangkan<br>
          Jejaka,Duda atau Beristri</td>
      <td>:
      </td>
      <td> <?php
          if($dt['jk']=="Laki-Laki"){
        ?>
        <?php echo $dt['status'];?>
        <?php
      }
      ?></td>
    </tr>
     <tr>
      <td>b.Jika Wanita, terangkan<br>
          Perawan,atau Janda</td>
      <td>:
      </td>
      <td>
        <?php
          if($dt['jk']=="Perempuan"){
        ?>
        <?php echo $dt['status'];?>
        <?php
      }
      ?>
        </td>
    </tr>
  </tbody>
</table>
<p style="margin-left:30px;font-family:times">Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan dengan seperlunya.</p>

<p style="margin-left:450px;margin-top:50px;margin-bottom:5px;font-family:times"> Fajar Baru, <?php echo date("d-m-Y");?></p>
  <p style="margin-left:450px;font-family:times"> Kepala Desa Fajar Baru</p>
 <?php
  if($dt['verif_lurah']=="Y"){
  ?>
  <img src="../img/ttd.png" style="margin-left:450px;width:140px"><br>
  <?php
}
?> <b style="margin-left:450px;font-family:times">A.BAHRIS</b>
