<div class="panel panel-default">
<div class="panel-heading">
                        	TAMBAH INSTANSI
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                	<form method="POST">

                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                        <input class="form-control" name="nama_instansi" />
                                    	</div>

                                    	<div class="form-group">
                                            <label>Alamat Instansi</label>
                                        <input class="form-control" name="alamat_instansi" />
                                    	</div>

                                    	<div class ="pull-right">
                                    	<button type="submit" name="simpaninstansi" value="simpaninstansi" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                    	</div>
                                	</form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_instansi = $_POST ['kode_instansi'];
    $nama_instansi = $_POST ['nama_instansi'];
    $alamat_instansi = $_POST ['alamat_instansi'];

	$simpaninstansi = $_POST ['simpaninstansi'];
	$reset = $_POST ['reset'];

	if($simpaninstansi) {
		$sql = $koneksi->query("insert into tb_instansi(nama_instansi,alamat_instansi) values('$nama_instansi','$alamat_instansi')");
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