<?php
	
  $TanggalKunjungan = $_POST ['TanggalKunjungan'];
  $NamaPJ = $_POST ['NamaPJ'];
  $No_HPPJ = $_POST ['No_HPPJ'];
  $Instansi = $_POST ['Instansi'];
  $Jumlah = $_POST ['Jumlah'];
  $Berkas = implode(', ' , $_POST ['Berkas']);

  $folder = './images_peserta/';
  $Foto = $_FILES ['Foto']['name'];
  $rename = date('Hs').$Foto;
  $lokasi = $_FILES ['Foto']['tmp_name'];
  $uploadkunjungan = move_uploaded_file($lokasi,$folder.$Foto);

  $Keterangan = $_POST ['Keterangan'];

	$ID = $_GET['ID'];


    
	$sql = $koneksi->query("INSERT INTO tb_batalkunjungan(TanggalKunjungan, ID, NamaPJ, No_HPPJ, Instansi, Jumlah, Berkas, Foto, Keterangan) SELECT TanggalKunjungan, ID, NamaPJ, No_HPPJ, Instansi, Jumlah, Berkas, Foto, Keterangan FROM tb_kunjungan where ID='$ID'");
	$sql1 = $koneksi->query("delete from tb_kunjungan where ID='$ID'");
?>

				<script type="text/javascript">
                    alert ("Peserta Berhasil dibatalkan");
                    window.location.href="?page=kunjungan";
                </script>
