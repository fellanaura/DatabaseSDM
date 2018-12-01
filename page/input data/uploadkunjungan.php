<?php

  if(isset ($_POST['simpankunjungan'])){
  $TanggalKunjungan = $_POST ['TanggalKunjungan'];
  $ID = $_POST ['ID'];
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
     
      if($uploadkunjungan) {
    
      $sql = $koneksi->query("insert into tb_kunjungan(TanggalKunjungan, ID, NamaPJ, No_HPPJ, Instansi, Jumlah, Berkas, Foto, Keterangan) values ('$TanggalKunjungan','$ID','$NamaPJ','$No_HPPJ','$Instansi','$Jumlah','$Berkas', '$Foto', '$Keterangan')");
          
      if ($sql) {
        ?>
          <script type="text/javascript">
            alert ("Data Berhasil Disimpan");
            window.location.href="?page=kunjungan";
          </script>
        <?php
      }   
    }
  }
?>