<?PHP ob_start(); // buka library laporan
//koneksi
include"../admin/aksi/koneksi.php";
include(dirname(__FILE__).'/cetak_jualbeli.php');// memanggil file laporan
$content = ob_get_clean();

// conversion HTML => PDF
require_once(dirname(__FILE__).'./../html2pdf/html2pdf.class.php');
try
{
$html2pdf = new HTML2PDF('P','A4', 'fr', false, 'ISO-8859-15');
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
$html2pdf->Output('jualbeli.pdf');//output laporan setelah di download
}
catch(HTML2PDF_exception $e) { echo $e; }?>
