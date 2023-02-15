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
<h1>Laporan Data Barang</h1>
<br>
<table border="1px" class="tabel"  >
<tr>
    <th>No</th>
    <th>Kd_barang</th>
    <th>Nama_barang</th>
    <th>Jumlah_barang</th>
    <th>Satuan</th>
    <th>Harga</th>

</tr>';

if (isset($_POST['cetak'])) {

	$tgl1 = $_POST['tanggal1'];
	$tgl2 = $_POST['tanggal2'];

	$no = 1;
	$sql = $koneksi->query("select * from tbarang where tgl_input between '$tgl1' and '$tgl2' ");
	while ($tampil=$sql->fetch_assoc()) {

	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['Kd_barang'].'</td>
			<td align="center">'.$tampil['Nama_barang'].'</td>
			<td align="center">'.$tampil['Jumlah_barang'].'</td>
			<td align="center">'.$tampil['Satuan'].'</td>
			<td align="center">'.BuatRp($tampil['Harga']).'.00</td>
		</tr>
	';
	
}
}else{

$no=1;

$sql = $koneksi->query("select * from tbarang ");
while ($tampil=$sql->fetch_assoc()) {
	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['Kd_barang'].'</td>
			<td align="center">'.$tampil['Nama_barang'].'</td>
			<td align="center">'.$tampil['Jumlah_barang'].'</td>
			<td align="center">'.$tampil['Satuan'].'</td>
			<td align="center">'.BuatRp($tampil['Harga']).'.00</td>
		</tr>
	';
}
}


$content .='


</table>
</page>';

?>
