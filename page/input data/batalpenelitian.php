<?php
	
  $TanggalMasuk1 = $_POST ['TanggalMasuk1'];
  $TanggalKeluar1 = $_POST ['TanggalKeluar1'];
  $ID1 = $_POST ['ID1'];
  $Nama1 = $_POST ['Nama1'];
  $TTL1 = $_POST ['TTL1'];
  $Alamat1 = $_POST ['Alamat1'];
  $Email1 = $_POST ['Email1'];
  $No_HP1 = $_POST ['No_HP1'];
  $Instansi = $_POST ['Instansi'];
  $Fakultas = $_POST ['Fakultas'];
  $Jurusan = $_POST ['Jurusan'];
  $JudulPenelitian = $_POST ['JudulPenelitian'];
  $Berkas1 = implode(', ' , $_POST ['Berkas1']);
  $folder = './images_peserta/';
  $Keterangan1 = $_POST ['Keterangan1'];

	$ID1 = $_GET['ID1'];


    
	$sql = $koneksi->query("INSERT INTO tb_batalpenelitian(TanggalMasuk1, TanggalKeluar1, Nama1, TTL1, Alamat1, Email1, NO_HP1, Instansi, Fakultas, Jurusan, JudulPenelitian, Berkas1, Foto1, Keterangan1) SELECT TanggalMasuk1, TanggalKeluar1, Nama1, TTL1, Alamat1, Email1, NO_HP1, Instansi, Fakultas, Jurusan, JudulPenelitian, Berkas1, Foto1, Keterangan1 FROM tb_inputpenelitian where ID1='$ID1'");
	$sql1 = $koneksi->query("delete from tb_inputpenelitian where ID1='$ID1'");
?>

				<script type="text/javascript">
                    alert ("Peserta Berhasil dibatalkan");
                    window.location.href="?page=penelitian";
                </script>
