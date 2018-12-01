<div class="panel panel-default">
<div class="panel-heading">
                        	TAMBAH FAKULTAS
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                	<form method="POST">

                                        <div class="form-group">
                                            <label>Nama Fakultas</label>
                                        <input class="form-control" name="nama_fakultas" />
                                    	</div>

                                    	<div class ="pull-right">
                                    	<button type="submit" name="simpanfakultas" value="simpanfakultas" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                    	</div>
                                	</form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_fakultas = $_POST ['kode_fakultas'];
    $nama_fakultas = $_POST ['nama_fakultas'];

	$simpanfakultas = $_POST ['simpanfakultas'];
	$reset = $_POST ['reset'];

	if($simpanfakultas) {
		$sql = $koneksi->query("insert into tb_fakultas(nama_fakultas) values('$nama_fakultas')");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Disimpan");
					window.location.href="?page=daftar unit";
				</script>
			<?php
		}
	}
?>