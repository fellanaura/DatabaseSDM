<?php

	$ID = $_GET['ID'];

	$koneksi->query("delete from tb_kunjungan where ID='$ID'");

?>

<script type="text/javascript">
		window.location.href="?page=kunjungan";
</script>
