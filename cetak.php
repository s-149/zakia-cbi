<?php
error_reporting(0);
include "koneksi.php";
include "rupiah.php";

$page = $_GET['page'];

include "page/".$page."/laporan.php";

require_once('assets/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('exemple.pdf');
?>


