<?php

	$kode_penempatan = $_GET['kode_penempatan'];

	$sql = $koneksi->query("select * from tb_penempatan where kode_penempatan='$kode_penempatan'");

	$tampil = $sql->fetch_assoc();

	$kode_penempatan = $tampil['kode_penempatan'];

	$nama_penempatan = $tampil['nama_penempatan'];

	$kuota_penempatan = $tampil['kuota_penempatan'];
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
                                            <label>Nama Unit</label>
                                        <input class="form-control" name="nama_penempatan" value="<?php echo $tampil['nama_penempatan'];?>"/>
                                    	</div>

                                    	<div class="form-group">
                                            <label>Kuota Unit</label>
                                        <input class="form-control" name="kuota_penempatan" value="<?php echo $tampil['kuota_penempatan'];?>" />
                                    	</div>

                                    	<div class ="pull-right">
                                    	<button type="submit" name="ubahpenempatan" value="ubahpenempatan" class="btn btn-primary">Ubah</button>
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

	$ubahpenempatan = $_POST ['ubahpenempatan'];
	

	if($ubahpenempatan) {
		$sql = $koneksi->query("update tb_penempatan set nama_penempatan='$nama_penempatan', kuota_penempatan='$kuota_penempatan' where kode_penempatan='$kode_penempatan'");
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