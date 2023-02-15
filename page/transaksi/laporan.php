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
<h1>Laporan Data Transaksi</h1>
<br>
<table border="1px" class="tabel"  >
<tr>
    <th>No</th>
    <th>No_faktur</th>
    <th>Kd_barang</th>
    <th>Jumlah_barang</th>
    <th>Jumlah_bayar</th>
    <th>PPN</th>

</tr>';

if (isset($_POST['cetak'])) {


	
	$tgl1 = $_POST['tanggal1'];
	$tgl2 = $_POST['tanggal2'];

	
		
	$no = 1;
	$sql = $koneksi->query("select * from tpembeliandetail where tgl_input between '$tgl1' and '$tgl2' ");
	while ($tampil=$sql->fetch_assoc()) {

	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['No_faktur'].'</td>
			<td align="center">'.$tampil['Kd_barang'].'</td>
			<td align="center">'.$tampil['Jumlah_barang'].'</td>
			<td align="center">'.BuatRp($tampil['Jumlah_bayar']).'.00</td>
			<td align="center">'.BuatRp($tampil['PPN']).'.00</td>
		</tr>
	';
	
}
}else{

$no=1;

$sql = $koneksi->query("select * from tpembeliandetail ");
while ($tampil=$sql->fetch_assoc()) {
	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['No_faktur'].'</td>
			<td align="center">'.$tampil['Kd_barang'].'</td>
			<td align="center">'.$tampil['Jumlah_barang'].'</td>
			<td align="center">'.BuatRp($tampil['Jumlah_bayar']).'.00</td>
			<td align="center">'.BuatRp($tampil['PPN']).'.00</td>
		</tr>
	';
}
}


$content .='


</table>
</page>';

?>
