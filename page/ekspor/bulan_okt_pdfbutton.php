<?php
// proses untuk menampilkan file pdf

require_once dirname(__FILE__).'/../../html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include dirname(__FILE__).'/bulan_okt_pdf.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'en');
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content);
    $html2pdf->output('Kas_Bulan_Oktober.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
?>
