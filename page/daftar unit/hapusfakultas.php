<?php

	$kode_fakultas = $_GET['kode_fakultas'];

	$koneksi->query("delete from tb_fakultas where kode_fakultas='$kode_fakultas'");

?>

<script type="text/javascript">
		window.location.href="?page=daftar unit";
</script>
