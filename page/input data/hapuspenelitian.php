<?php

	$ID1 = $_GET['ID1'];

	$koneksi->query("delete from tb_inputpenelitian where ID1='$ID1'");

?>

<script type="text/javascript">
		window.location.href="?page=penelitian";
</script>
