<?php

	$kode_instansi = $_GET['kode_instansi'];

	$koneksi->query("delete from tb_instansi where kode_instansi='$kode_instansi'");

?>

<script type="text/javascript">
		window.location.href="?page=daftar unit";
</script>
