<?php

if (isset($_POST['simpanpenelitian'])) {
	$TanggalMasuk1 = $_POST['TanggalMasuk1'];
	$TanggalKeluar1 = $_POST['TanggalKeluar1'];
	$ID1 = $_POST['ID1'];
	$Nama1 = $_POST['Nama1'];
	$TTL1 = $_POST['TTL1'];
	$Alamat1 = $_POST['Alamat1'];
	$Email1 = $_POST['Email1'];
	$No_HP1 = $_POST['No_HP1'];
	$Instansi = $_POST['Instansi'];
	$Fakultas = $_POST['Fakultas'];
	$Jurusan = $_POST['Jurusan'];
	$JudulPenelitian = $_POST['JudulPenelitian'];
	$Berkas1 = implode(', ',$_POST['Berkas1']); 

	$folder1 = './images_peserta/';
	$Foto1 = $_FILES ['Foto1']['name'];
	$rename1 = date('Hs').$Foto1;
	$lokasi1 = $_FILES ['Foto1']['tmp_name'];
	$uploadpenelitian = move_uploaded_file($lokasi1, $folder1.$Foto1);
	$Keterangan1 = $_POST['Keterangan1'];

	if ($uploadpenelitian) {
		$sql1 = $koneksi->query("insert into tb_inputpenelitian(TanggalMasuk1, TanggalKeluar1, ID1, Nama1, TTL1, Alamat1, Email1, No_HP1, Instansi, Fakultas, Jurusan, JudulPenelitian, Berkas1, Foto1, Keterangan1) values ('$TanggalMasuk1','$TanggalKeluar1','$ID1','$Nama1','$TTL1','$Alamat1','$Email1','$No_HP1','$Instansi','$Fakultas','$Jurusan','$JudulPenelitian', '$Berkas1', '$Foto1', '$Keterangan1')");
		if ($sql1) {
			?>
			<script type="text/javascript">
            alert ("Data Berhasil Disimpan");
            window.location.href="?page=penelitian";
          </script>
          <?php
		}
	}

}

?>
