
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
  $id = $_GET['id'];

  $sql = mysqli_query($connect,"select * from tbl_ketwaris inner join tbl_rw on tbl_ketwaris.id_rw=tbl_rw.id_rw inner join tbl_rt on tbl_ketwaris.id_rt=tbl_rt.id_rt where id_ketwaris='$id'");
  $dt = mysqli_fetch_assoc($sql);
  $bln = (int) substr($dt['tgl_buat'], 5,2);
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
<u><i style="font-size:12px;text-align:center;margin-left: 150px">Alamat: Desa Fajar Baru, Kecamatan Pagelaran Utara, Kabupaten Pringsewu  35451</i></u>
<br />
<!-- /.dropdown js__dropdown -->
<h4 style="font-size:18px;text-align:center;font-family:times;margin-bottom: 1px"><u>SURAT PERNYATAAN AHLI WARIS</u></h4>
<h4 style="font-size:12px;text-align:center;margin-top:0px">NO : 470/ 00<?php echo $id;?>/ 05 / 2009/ <?php echo $romawi[$bln];?>/<?php echo date('Y');?></h4>
<p style="margin-left:30px;font-family:times">Kami yang bertanda tangan di bawah ini, para ahli waris dari almarhum, <?php echo $dt['nama1'];?>. Dengan ini menyatakan bahwa almarhum meninggalkan sebidang <?php echo $dt['brg_waris'];?> yang terleteak di : Pekon Fajar Baru RT/RW <?php echo $dt['nama_rw'];?>/<?php echo $dt['nama_rt'];?> Kecamatan Pagelaran Utara Kabupaten Pringsewu Luas <?php echo $dt['luas'];?> M2.  Dengan ini kami para ahli waris sepakat dan tidak ada paksaan dari pihak lain, untuk menyerahkan warisan tanah tersebut kepada salah satu saudara kami : <?php echo $dt['nama2'];?> umur <?php echo $dt['umur'];?> Tahun untuk memilikinya. Demikianlah surat pernyataan ini kami buat dengan sebenarnya, dan dapat dipergunakan seperlunya.</p>
<table>
  <tbody>
    <tr>
      <td style="width: 350px">
      Fajar Baru, <?php echo $dt['tgl_buat'];?><br>
      Ahli Waris Yang Menerima<br>
      <br>
      <br>
      <br>
      <br>
      <b><?php echo $dt['nama2'];?></b>
      </td>
      <td>
        Kami Para Ahli Waris<br>
        <?php
        $namalain= unserialize($dt['namalain']);
        $jml = count($namalain);
        for ($i=0; $i < $jml; $i++) { 
          $no = $i + 1;
          if($namalain[$i]!="" && $namalain[$i]!="-"){
            echo $no.'.'.$namalain[$i].'<br>';
          }
        }
      ?>
      </td>
    </tr>
    
  </tbody>
</table>
<p style="margin-left:30px;font-family:times">Saksi- Saksi :</p>
<table>
  <tbody>
  <?php
    $saksi= unserialize($dt['saksi']);
    $jml = count($saksi);
    for ($i=0; $i < $jml; $i++) { 
      $no = $i + 1;
      if($namalain[$i]!="" && $namalain[$i]!="-"){
  ?>
    <tr>
      <td><?php echo $no;?>.<?php echo $saksi[$i];?></td>
    </tr>
    <?php
    }
  }
  ?>
  </tbody>
</table>
<p style="margin-left:30px;font-family:times">Dengan batas-batas :</p>
<table>
  <tbody>
    <tr>
      <td>Sebelah Timur</td>
      <td>:</td>
      <td><?php echo $dt['b_timur'];?></td>
    </tr>
    <tr>
      <td>Sebelah Barat</td>
      <td>:</td>
      <td><?php echo $dt['b_barat'];?></td>
    </tr>
    <tr>
      <td>Sebelah Selatan</td>
      <td>:</td>
      <td><?php echo $dt['b_selatan'];?></td>
    </tr>
    <tr>
      <td>Sebelah Utara</td>
      <td>:</td>
      <td><?php echo $dt['b_utara'];?></td>
    </tr>
  </tbody>
</table>

<p style="margin-left:450px;font-family:times"> Kepala Pekon Fajar Baru</p>
  <?php
  if($dt['verif_lurah']=="Y"){
  ?>
  <img src="../img/ttd.png" style="margin-left:450px;width:140px"><br>
  <?php
}
?>
 <b style="margin-left:450px;font-family:times">ARJUNA</b>
