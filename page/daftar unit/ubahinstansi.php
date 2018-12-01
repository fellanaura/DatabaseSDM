<?php

	$kode_instansi = $_GET['kode_instansi'];

	$sql = $koneksi->query("select * from tb_instansi where kode_instansi='$kode_instansi'");

	$tampil = $sql->fetch_assoc();

	$kode_instansi = $tampil['kode_instansi'];

	$nama_instansi = $tampil['nama_instansi'];

	$alamat_instansi = $tampil['alamat_instansi'];
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
                                            <label>Nama Instansi</label>
                                        <input class="form-control" name="nama_instansi" value="<?php echo $tampil['nama_instansi'];?>"/>
                                    	</div>

                                    	<div class="form-group">
                                            <label>Alamat Instansi</label>
                                        <input class="form-control" name="alamat_instansi" value="<?php echo $tampil['alamat_instansi'];?>" />
                                    	</div>

                                    	<div class ="pull-right">
                                    	<button type="submit" name="ubahinstansi" value="ubahinstansi" class="btn btn-primary">Ubah</button>
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

	$ubahinstansi = $_POST ['ubahinstansi'];
	

	if($ubahinstansi) {
		$sql = $koneksi->query("update tb_instansi set nama_instansi='$nama_instansi', alamat_instansi='$alamat_instansi' where kode_instansi='$kode_instansi'");
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