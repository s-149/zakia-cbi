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
<h1>Laporan Data Pengguna</h1>
<br>
<table border="1px" class="tabel"  >
<tr>
    <th>No</th>
    <th>Username</th>
    <th>Nama</th>
    <th>Level</th>
    <th>Foto</th>

</tr>';

if (isset($_POST['cetak'])) {


	
	$tgl1 = $_POST['tanggal1'];
	$tgl2 = $_POST['tanggal2'];

	
		
	$no = 1;
	$sql = $koneksi->query("select * from tb_user where tgl_input between '$tgl1' and '$tgl2' ");
	while ($tampil=$sql->fetch_assoc()) {

	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['username'].'</td>
			<td align="center">'.$tampil['nama'].'</td>
			<td align="center">'.$tampil['level'].'</td>
			<td align="center"><img src="images/pengguna/'.$tampil['foto'].'" width="75" height="50"></td>
		</tr>
	';
	
}
}else{

$no=1;

$sql = $koneksi->query("select * from tb_user ");
while ($tampil=$sql->fetch_assoc()) {
	$content .='
		<tr>
			<td align="center">'.$no++.'</td>
			<td align="center">'.$tampil['username'].'</td>
			<td align="center">'.$tampil['nama'].'</td>
			<td align="center">'.$tampil['level'].'</td>
			<td align="center"><img src="images/pengguna/'.$tampil['foto'].'" width="75" height="50"></td>
		</tr>
	';
}
}


$content .='


</table>
</page>';

?>
