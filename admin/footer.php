<section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2019 |<a href="" target="_blank"  > Designed by : Gusti</a>
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  <!-- DATATABLE SCRIPTS  -->
<!--     <script src="assets/js/dataTables/jquery.dataTables.js"></script>
 -->    
 <script src="assets/datatables/datatables.min.js"></script>


 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<!--     <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
 -->    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
 
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script>


// Build the chart
Highcharts.chart('chartjk', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Data Penduduk Berdasarkan Jenis Kelamin'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.1f}</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: false
      },
      showInLegend: true
    }
  },
  <?php
    $sqljkl = mysqli_query($connect,"select count(jk) as jml_laki from tbl_penduduk where jk='L'");
    $sqljkw = mysqli_query($connect,"select count(jk) as jml_wanita from tbl_penduduk where jk='P'");
    $dtjkl = mysqli_fetch_assoc($sqljkl);
    $dtjkw = mysqli_fetch_assoc($sqljkw);
    ?>
  series: [{
    name: 'JK',
    colorByPoint: true,
    data: [{
      name: 'Laki-Laki',
      y: <?php echo $dtjkl['jml_laki'];?>,
      sliced: true,
      selected: true
    }, {
      name: 'Perempuan',
      y: <?php echo $dtjkw['jml_wanita'];?>
    }]
  }]
});

// Build the chart
Highcharts.chart('chartusia', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Data Penduduk Berdasarkan Usia'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.1f}</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: false
      },
      showInLegend: true
    }
  },
 
  series: [{
    name: 'Usia',
    colorByPoint: true,
    data: [
    <?php
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
    {
      name: '<?php echo $dtusia['range_umur'];?>',
      y: <?php echo $dtusia['jumlah'];?>
    },
    <?php
    }
    ?>
    ]
  }]
});

</script>
<script type="text/javascript">
$(document).ready(function() {
    var table = $('#dataTables-example1').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example2').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example3').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example4').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example5').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example6').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example7').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example8').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example9').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example10').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example11').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example12').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example13').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example14').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example15').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );

$(document).ready(function() {
    var table = $('#dataTables-example16').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example17').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example18').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example19').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example20').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example21').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example22').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example23').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example24').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example25').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
$(document).ready(function() {
    var table = $('#dataTables-example26').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>
  </body>
</html>
