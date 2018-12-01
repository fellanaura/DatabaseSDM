<?php

	$kode_jurusan = $_GET['kode_jurusan'];

	$koneksi->query("delete from tb_jurusan where kode_jurusan='$kode_jurusan'");

?>

<script type="text/javascript">
		window.location.href="?page=daftar unit";
</script>
