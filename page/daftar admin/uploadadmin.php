<?php

  if(isset ($_POST['simpanadmin'])){
  $ID = $_POST ['ID'];
  $Nama = $_POST ['Nama'];
  $Username = $_POST ['Username'];
  $Password = $_POST ['Password'];
  $Nama = $_POST ['Nama'];
  $Level = $_POST ['Level'];
      $folder = './images_admin/';
      $Foto = $_FILES ['Foto']['name'];
      $rename = date('Hs').$Foto;
      $lokasi = $_FILES ['Foto']['tmp_name'];
      $upload = move_uploaded_file($lokasi,$folder.$Foto);

      $Keterangan = $_POST ['Keterangan'];
     
      if($upload) {
    
      $sql = $koneksi->query("insert into tb_admin(ID, Username, Password, Nama, Level, Foto) values('$ID','$Username','$Password','$Nama','$Level','$Foto')");
          
          if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=daftar admin";
        </script>
      <?php
    }
  }
}
?>