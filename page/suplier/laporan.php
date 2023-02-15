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
<h1>Laporan Data Supplier</h1>
<br>
<table border="1px" class="tabel"  >
<tr>
    <th>No</th>
    <th>Kd_supplier</th>
    <th>Nama_supplier</th>
    <th>Alamat</th>
    <th>Email</th>
    <th>Tlp</th>
    <th>Website</th>

</tr>';

if (isset($_POST['cetak'])) {


	
	$tgl1 = $_POST['tanggal1'];
	$tgl2 = $_POST['tanggal2'];

	
		
	$no = 1;
	$sql = $koneksi->query("select * from tsupplier where tgl_input between '$tgl1' and '$tgl2' ");
	while ($tampil=$sql->fetch_assoc()) {

	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['Kd_supplier'].'</td>
			<td align="center">'.$tampil['Nama_supplier'].'</td>
			<td align="center">'.$tampil['Alamat'].'</td>
			<td align="center">'.$tampil['Email'].'</td>
			<td align="center">'.$tampil['Tlp'].'</td>
		</tr>
	';
	
}
}else{

$no=1;

$sql = $koneksi->query("select * from tsupplier ");
while ($tampil=$sql->fetch_assoc()) {
	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['Kd_supplier'].'</td>
			<td align="center">'.$tampil['Nama_supplier'].'</td>
			<td align="center">'.$tampil['Alamat'].'</td>
			<td align="center">'.$tampil['Email'].'</td>
			<td align="center">'.$tampil['Tlp'].'</td>
		</tr>
	';
}
}


$content .='


</table>
</page>';

?>
