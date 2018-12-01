<?php
	
  $TanggalMasuk = $_POST ['TanggalMasuk'];
  $TanggalKeluar = $_POST ['TanggalKeluar'];
  $ID = $_POST ['ID'];
  $Nama = $_POST ['Nama'];
  $TTL = $_POST ['TTL'];
  $Alamat = $_POST ['Alamat'];
  $Email = $_POST ['Email'];
  $No_HP = $_POST ['No_HP'];
  $Instansi = $_POST ['Instansi'];
  $Fakultas = $_POST ['Fakultas'];
  $Jurusan = $_POST ['Jurusan'];
  $Unit = $_POST ['Unit'];
  $Berkas = implode(', ' , $_POST ['Berkas']);
  $folder = './images_peserta/';
  $Keterangan = $_POST ['Keterangan'];
  $batalmagang = $_GET['batalmagang'];

	$ID = $_GET['ID'];


    
	$sql = $koneksi->query("INSERT INTO tb_batalmagang(TanggalMasuk, TanggalKeluar, Nama, TTL, Alamat, Email, NO_HP, Instansi, Fakultas, Jurusan, Unit, Berkas, Foto, Keterangan) SELECT TanggalMasuk, TanggalKeluar, Nama, TTL, Alamat, Email, NO_HP, Instansi, Fakultas, Jurusan, Unit, Berkas, Foto, Keterangan FROM tb_input WHERE ID='$ID'");
	$sql1 = $koneksi->query("delete from tb_input where ID='$ID'");
?>

				<script type="text/javascript">
                    alert ("Peserta Berhasil dibatalkan");
                    window.location.href="?page=magang";
                </script>
