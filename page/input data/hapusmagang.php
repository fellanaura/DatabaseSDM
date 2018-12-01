<?php

	$ID = $_GET['ID'];

	$koneksi->query("delete from tb_input where ID='$ID'");

?>

<script type="text/javascript">
		window.location.href="?page=magang";
</script>
