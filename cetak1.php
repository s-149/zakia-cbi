<?php
error_reporting(0);
include "koneksi.php";
include "rupiah.php";

$page = $_GET['page'];

$tgl1 = $_GET['tanggal1'];
$tgl2 = $_GET['tanggal2'];


include "page/".$page."/laporan1.php";

require_once('assets/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('exemple.pdf');
?>


