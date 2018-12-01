<?php

	$ID = $_GET['ID'];

	$koneksi->query("delete from tb_admin where ID='$ID'");

?>

<script type="text/javascript">
		window.location.href="?page=daftar admin";
</script>
