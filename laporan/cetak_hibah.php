
<style>
.header {border-bottom:solid 2px #black; height:80px; width:90%; margin:auto; margin-bottom:10px;}
.header img {max-width:10px!important;max-height:20px!important; float:left; }
.header h3{text-align:center; margin:auto;padding:1px!important;}
.header p {text-align:center; margin:auto;}
table{
  margin:0 auto;
  width:100%;
  border-collapse:collapse;
  font-family: times,serif;
  margin-left: 30px;
  font-size: 12px;
 }
 td,th{
   padding: 4px 20px;
 }
.box{
	padding-left:50px;

}


</style>
<?php
  include"../admin/aksi/koneksi.php";
  $id = $_GET['id'];

  $sql = mysqli_query($connect,"select * from tbl_kethibah inner join tbl_rw on tbl_kethibah.id_rw=tbl_rw.id_rw inner join tbl_rt on tbl_kethibah.id_rt=tbl_rt.id_rt where id_kethibah='$id'");
  $dt = mysqli_fetch_assoc($sql);
  $bln = (int) substr($dt['tgl_buat'], 5,2);
  $romawi = array("","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII");
?>
<table style="width:100%;margin-top:0px">
  <tr>
      <td>
          <img src="../img/logo/lg.jpg" style="margin-left:63px;width:50px">
        </td>

      <td>
          <p style="font-size:16px;text-align:center;margin-bottom: 3px"><b>PEMERINTAH KABUPATEN PRINGSEWU</b>  <br/><b>KECAMATAN PAGELARAN UTARA</b> </p>
          <p style="font-size:18px;text-align:center;font-weight: bold;margin-top: 0px;margin-bottom: 2px"><b>DESA FAJAR BARU</b></p>
        </td>
    </tr>

</table>
<hr style="border:2px">
<u><i style="font-size:12px;text-align:center;margin-left: 150px">Alamat: Desa Fajar Baru, Kecamatan Pagelaran Utara, Kabupaten Pringsewu  35375</i></u>
<br />
<!-- /.dropdown js__dropdown -->
<h4 style="font-size:14px;text-align:center;font-family:times;margin-bottom: 1px"><u>SURAT KETERANGAN HIBAH TANAH</u></h4>
<h4 style="font-size:12px;text-align:center;margin-top:0px">NO : 470/ 00<?php echo $id;?>/ 05 / 2009/ <?php echo $romawi[$bln];?>/<?php echo date('Y');?></h4>
<p style="margin-left:30px;font-family:times">Yang bertanda tangan dibawah ini :</p>
<table border="0"   style="width:100%;border:1px solid #000" >
  <tbody>
    <tr>
      <td>1.</td>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td><?php echo $dt['nama1'];?></td>
    </tr>
    <tr>
      <td></td>
      <td>Umur</td>
      <td>:</td>
      <td><?php echo $dt['umur1'];?></td>
    </tr>
    <tr>
      <td></td>
      <td>Pekerjaan</td>
      <td>:</td>
      <td><?php echo $dt['pekerjaan1'];?></td>
    </tr>
    <tr>
      <td></td>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $dt['alamat1'];?></td>
    </tr>
    <tr>
      <td></td>
      <td>Selanjutnya disebut pihak   Pertama (I)</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
<table border="0"   style="width:100%;border:1px solid #000" >
<tbody>
    
    <tr>
      <td>2.</td>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td><?php echo $dt['nama2'];?></td>
    </tr>
    <tr>
      <td></td>
      <td>Umur</td>
      <td>:</td>
      <td><?php echo $dt['umur2'];?></td>
    </tr>
    <tr>
      <td></td>
      <td>Pekerjaan</td>
      <td>:</td>
      <td><?php echo $dt['pekerjaan2'];?></td>
    </tr>
    <tr>
      <td></td>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $dt['alamat2'];?></td>
    </tr>
    <tr>
      <td></td>
      <td>Selanjutnya disebut pihak   <b>Pertama (II)</b></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
<p style="margin-left:30px;font-family:times">Pada hari ini <?php echo $dt['hari'];?> tanggal <?php echo $dt['tanggal'];?> bulan <?php echo $dt['bulan'];?> tahun <?php echo $dt['tahun'];?>, Pihak Pertama (I) menyatakan telah menyerahkan/menghibahkan <?php echo $dt['brg_hibah'];?> beserta tanam tumbuhnya kepada Pihak Kedua (II) yang terletak di lingkungan RT. <?php echo $dt['nama_rt'];?> .RW. <?php echo $dt['nama_rw'];?>. Pekon Fajarbaru Kec.Pagelaran utara Kab.Pringsewu.</p>
<p style="margin-left:30px;font-family:times">Adapun ukuran tanah tersebut  sebagai berikut :</p>
<table>
  <tbody>
    <tr>
      <td>Lebar sebelah Barat</td>
      <td>:</td>
      <td><?php echo $dt['u_barat'];?> Meter</td>
      <td>Lebar sebelah Timur</td>
      <td>:</td>
      <td><?php echo $dt['u_timur'];?> Meter</td>
    </tr>
    <tr>
      <td>Panjang sebelah Utara</td>
      <td>:</td>
      <td><?php echo $dt['u_utara'];?> Meter</td>
      <td>Panjang sebelah selatan</td>
      <td>:</td>
      <td><?php echo $dt['u_selatan'];?> Meter</td>
    </tr>
    <tr>
      <td>Luas</td>
      <td>:</td>
      <td><?php echo $dt['luas'];?> M<sup>2</sup></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
<p style="margin-left:30px;font-family:times">Dengan batas-batas :</p>
<table>
  <tbody>
    <tr>
      <td>Sebelah Timur berbatasan dengan</td>
      <td>:</td>
      <td><?php echo $dt['b_timur'];?> </td>
    </tr>
    <tr>
      <td>Sebelah Barat berbatasan dengan</td>
      <td>:</td>
      <td><?php echo $dt['b_barat'];?> </td>
    </tr>
    <tr>
      <td>Sebelah Selatan berbatasan dengan</td>
      <td>:</td>
      <td><?php echo $dt['b_selatan'];?> </td>
    </tr>
    <tr>
      <td>Sebelah Utara berbatasan dengan</td>
      <td>:</td>
      <td><?php echo $dt['b_utara'];?> </td>
    </tr>
  </tbody>
</table>
<p style="margin-left:30px;font-family:times">Pihak Pertama (I) telah memberikan keterangan bahwa tanah tersebut saya kuasai secara terus  menerus serta  tidak dalam sengketa, tidak dijadikan/menjadi jaminan hutang, dan tidak pernah digugat atau dipermasalahkan pihak lain.</p>
<p style="margin-left:30px;font-family:times">Demikian Surat Keterangan Hibah Tanah ini saya buat dengan sebenarnya, dalam keadaan sadar sehat jasmani dan rohani dan tidak ada unsur paksaan dari pihak manapun</p>
<p style="margin-left:30px;font-family:times">Apabila dikemudian hari ada pihak lain yang menggugat tanah tersebut saya Pihak Pertama (I) bersedia  bertanggung jawab sepenuhnya.</p>
<p style="margin-left:450px;margin-top:20px;margin-bottom:5px;font-family:times">Fajar Baru, <?php echo date("d-m-Y");?></p>

<p style="margin-left:450px;font-family:times"> Kepala Pekon Fajar Baru</p>
  <?php
  if($dt['verif_lurah']=="Y"){
  ?>
  <img src="../img/ttd.png" style="margin-left:450px;width:100px"><br>
  <?php
}
?>
 <b style="margin-left:450px;font-family:times">ARJUNA</b>
