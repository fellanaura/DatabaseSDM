<?php

	$kode_fakultas = $_GET['kode_fakultas'];

	$sql = $koneksi->query("select * from tb_fakultas where kode_fakultas='$kode_fakultas'");

	$tampil = $sql->fetch_assoc();

	$kode_fakultas = $tampil['kode_fakultas'];

	$nama_fakultas = $tampil['nama_fakultas'];
?>


<div class="panel panel-default">
<div class="panel-heading">
                        	UBAH DATA
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                	<form method="POST">

                                        <div class="form-group">
                                            <label>Nama Fakultas</label>
                                        <input class="form-control" name="nama_fakultas" value="<?php echo $tampil['nama_fakultas'];?>"/>
                                    	</div>

                                    	<div class ="pull-right">
                                    	<button type="submit" name="ubahfakultas" value="ubahfakultas" class="btn btn-primary">Ubah</button>
                                    	</div>
                                	</form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_fakultas = $_POST ['kode_fakultas'];
    $nama_fakultas = $_POST ['nama_fakultas'];

	$ubahfakultas = $_POST ['ubahfakultas'];
	

	if($ubahfakultas) {
		$sql = $koneksi->query("update tb_fakultas set nama_fakultas='$nama_fakultas' where kode_fakultas='$kode_fakultas'");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Diubah");
					window.location.href="?page=daftar unit";
				</script>
			<?php
		}
	}
?>