<?php
 
$content ='

<style type="text/css">
	
	.tabel{border-collapse: collapse;}
	.tabel th{padding: 8px 5px;  background-color:  #cccccc;  }
	.tabel td{padding: 8px 5px;     }
</style>


';


 $content .= '
<page>
<h1>Laporan Data Pembelian</h1>
<br>
<table border="1px" class="tabel"  >
<tr>
    <th>No</th>
    <th>No_faktur</th>
    <th>Kd_supplier</th>
    <th>Tgl_beli</th>
    <th>Total_beli</th>
    <th>Total_bayar</th>

</tr>';
	
	// $tgl1 = $_GET['tanggal1'];
	// $tgl2 = $_GET['tanggal2'];

	
		
	$no = 1;
	$sql = $koneksi->query("select * from tpembelianmaster where Tgl_beli between '$tgl1' and '$tgl2' ");
	while ($tampil=$sql->fetch_assoc()) {

	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['No_faktur'].'</td>
			<td align="center">'.$tampil['Kd_supplier'].'</td>
			<td align="center">'.$tampil['Tgl_beli'].'</td>
			<td align="center">'.BuatRp($tampil['Total_beli']).'.00</td>
			<td align="center">'.BuatRp($tampil['Total_bayar']).'.00</td>
		</tr>
	';
	
}


$content .='


</table>
</page>';

?>
