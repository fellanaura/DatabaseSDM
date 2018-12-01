<?php

	$kode_penempatan = $_GET['kode_penempatan'];

	$koneksi->query("delete from tb_penempatan where kode_penempatan='$kode_penempatan'");

?>

<script type="text/javascript">
		window.location.href="?page=daftar unit";
</script>
