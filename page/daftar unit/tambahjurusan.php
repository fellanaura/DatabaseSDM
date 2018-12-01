<div class="panel panel-default">
<div class="panel-heading">
                        	TAMBAH JURUSAN
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                	<form method="POST">

                                        <div class="form-group">
                                            <label>Nama Jurusan</label>
                                        <input class="form-control" name="nama_jurusan" />
                                    	</div>

                                    	<div class ="pull-right">
                                    	<button type="submit" name="simpanjurusan" value="simpanjurusan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                    	</div>
                                	</form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_jurusan = $_POST ['kode_jurusan'];
    $nama_jurusan = $_POST ['nama_jurusan'];

	$simpanjurusan = $_POST ['simpanjurusan'];
	$reset = $_POST ['reset'];

	if($simpanjurusan) {
		$sql = $koneksi->query("insert into tb_jurusan(nama_jurusan) values('$nama_jurusan')");
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