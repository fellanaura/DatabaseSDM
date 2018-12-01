<div class="panel panel-default">
<div class="panel-heading">
                        	TAMBAH PENEMPATAN / daftar unit
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                	<form method="POST">

                                        <div class="form-group">
                                            <label>Nama daftar unit</label>
                                        <input class="form-control" name="nama_penempatan" />
                                    	</div>

                                    	<div class="form-group">
                                            <label>Kuota daftar unit</label>
                                        <input class="form-control" name="kuota_penempatan" />
                                    	</div>

                                    	<div class ="pull-right">
                                    	<button type="submit" name="simpanpenempatan" value="simpanpenempatan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                    	</div>
                                	</form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_penempatan = $_POST ['kode_penempatan'];
    $nama_penempatan = $_POST ['nama_penempatan'];
    $kuota_penempatan = $_POST ['kuota_penempatan'];

	$simpanpenempatan = $_POST ['simpanpenempatan'];
	$reset = $_POST ['reset'];

	if($simpanpenempatan) {
		$sql = $koneksi->query("insert into tb_penempatan(nama_penempatan,kuota_penempatan) values('$nama_penempatan','$kuota_penempatan')");
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
