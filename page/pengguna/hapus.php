<?php

	$ambil = $koneksi->query("select * from tb_user where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['foto'];

	if (file_exists("images/pengguna/$foto")) {
		unlink("images/pengguna/$foto");
	}

	$koneksi->query("delete from tb_user where id='$_GET[id]'");



?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=pengguna";
</script>