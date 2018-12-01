<?php

	$kode_jurusan = $_GET['kode_jurusan'];

	$sql = $koneksi->query("select * from tb_jurusan where kode_jurusan='$kode_jurusan'");

	$tampil = $sql->fetch_assoc();

	$kode_jurusan = $tampil['kode_jurusan'];

	$nama_jurusan = $tampil['nama_jurusan'];
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
                                            <label>Nama Jurusan</label>
                                        <input class="form-control" name="nama_jurusan" value="<?php echo $tampil['nama_jurusan'];?>"/>
                                    	</div>

                                    	<div class ="pull-right">
                                    	<button type="submit" name="ubahjurusan" value="ubahjurusan" class="btn btn-primary">Ubah</button>
                                    	</div>
                                	</form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_jurusan = $_POST ['kode_jurusan'];
    $nama_jurusan = $_POST ['nama_jurusan'];

	$ubahjurusan = $_POST ['ubahjurusan'];
	

	if($ubahjurusan) {
		$sql = $koneksi->query("update tb_jurusan set nama_jurusan='$nama_jurusan' where kode_jurusan='$kode_jurusan'");
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