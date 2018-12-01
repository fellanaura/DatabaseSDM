<?php

    $ID = $_GET['ID'];

    $sql = $koneksi->query("select * from tb_input where ID='$ID'");

    $tampil = $sql->fetch_assoc();    

    $Instansi = $tampil['Instansi'];

    $Fakultas = $tampil['Fakultas'];

    $Jurusan = $tampil['Jurusan'];

    $Unit = $tampil['Unit'];

    $Berkas = $tampil['Berkas'];   

    $Foto = $tampil['Foto'];

    $Keterangan = $tampil['Keterangan'];

    $checked = explode(', ',$tampil['Berkas']);

?>


<div class="panel panel-default">
<div class="panel-heading">
                            UBAH DATA
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" enctype="multipart/form-data">
                                        <div class = "form-group">
                                            <label>Tanggal Masuk : </label>
                                            <input class="form-control" name="TanggalMasuk" type="date" value="<?php echo $tampil['TanggalMasuk'];?>" />
                                        </div>

                                        <div class = "form-group">
                                            <label>Tanggal Keluar : </label>
                                            <input class="form-control" name="TanggalKeluar" type="date" value="<?php echo $tampil['TanggalKeluar'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="ID" value="<?php echo $tampil['ID'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                        <input class="form-control" name="Nama" value="<?php echo $tampil['Nama'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat dan Tanggal Lahir</label>
                                        <input class="form-control" name="TTL" value="<?php echo $tampil['TTL'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                        <input class="form-control" name="Alamat" value="<?php echo $tampil['Alamat'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                        <input class="form-control" name="Email" value="<?php echo $tampil['Email'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>No Hp</label>
                                        <input class="form-control" name="No_HP" value="<?php echo $tampil['No_HP'];?>" />
                                        </div>

                                         <div class="form-group">
                                            <label>Instansi</label>
                                            <select class ="form-control" name="Instansi">
                                                <option value='<?php echo $Instansi;?>'><?php echo $Instansi;?></option>
                                                <?php
                                                $sql_instansi = mysqli_query ($koneksi, "select * from tb_instansi");
                                                while ($data_instansi = mysqli_fetch_array($sql_instansi)) {
                                                    if ($data_instansi['nama_instansi'] != $Instansi) {
                                                        echo '<option value="'.$data_instansi['nama_instansi'].'">'.$data_instansi['nama_instansi'].'</option>';
                                                    }

                                                    else {

                                                    }

                                                }

                                                ?>
                                            </select>
                                      </div>

                                        <div class="form-group">
                                            <label>Fakultas / Kelas</label>
                                            <select class ="form-control" name="Fakultas">
                                                <option value='<?php echo $Fakultas;?>'><?php echo $Fakultas;?></option>
                                                <?php
                                                $sql_fakultas = mysqli_query ($koneksi, "select * from tb_fakultas");
                                                while ($data_fakultas = mysqli_fetch_array($sql_fakultas)) {
                                                    if ($data_fakultas['nama_fakultas'] != $Fakultas) {
                                                        echo '<option value="'.$data_fakultas['nama_fakultas'].'">'.$data_fakultas['nama_fakultas'].'</option>';
                                                    }

                                                    else {

                                                    }

                                                }

                                                ?>
                                            </select>
                                      </div>
                                       

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class ="form-control" name="Jurusan">
                                                <option value='<?php echo $Jurusan;?>'><?php echo $Jurusan;?></option>
                                                <?php
                                                $sql_jurusan = mysqli_query ($koneksi, "select * from tb_jurusan");
                                                while ($data_jurusan = mysqli_fetch_array($sql_jurusan)) {
                                                    if ($data_jurusan['nama_jurusan'] != $Jurusan) {
                                                        echo '<option value="'.$data_jurusan['nama_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';
                                                    }

                                                    else {

                                                    }

                                                }

                                                ?>
                                            </select>
                                      </div>
                                      <div class="form-group">
                                            <label>Unit</label>
                                            <select class ="form-control" name="Unit">
                                                <option value='<?php echo $Unit;?>'><?php echo $Unit;?></option>
                                                <?php
                                                $sql_unit = mysqli_query ($koneksi, "select * from tb_penempatan");
                                                while ($data_unit = mysqli_fetch_array($sql_unit)) {
                                                    if ($data_unit['nama_penempatan'] != $Unit) {
                                                        echo '<option value="'.$data_unit['nama_penempatan'].'">'.$data_unit['nama_penempatan'].'</option>';
                                                    }

                                                    else {

                                                    }

                                                }

                                                ?>
                                            </select>
                                      </div>

                                        <div class="form-group">                                            
                                            <label>Berkas-Berkas</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas[]" value="KTP" <?php in_array('KTP', $checked) ? print "checked" : ""; ?>>Fotokopi KTP<br>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas[]" value="KTM" <?php in_array('KTM', $checked) ? print "checked" : ""; ?>>Fotokopi KTM<br>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas[]" value="Surat Permohonan" <?php in_array('Surat Permohonan', $checked) ? print "checked" : ""; ?>>Surat Permohonan<br>
                                                </label>
                                            </div>

                                        </div>                                       

                                        <div class="form-group">
                                            <label>Ganti Foto</label>
                                            <br/>
                                            <br/>                                                                           
                                                <img src="images_peserta/<?php echo $tampil['Foto']?>" width="80" height="80" style="margin-left:10px" alt="" name="Foto">
                                        </div>
                                        <br/>

                                        <div class="form-group">                                           
                                        <input type="file" class="form-control" name="Foto" />
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <select class ="form-control" name="Keterangan">
                                                <option value="" <?php if ($Keterangan=='') {echo "selected";}?>hidden>--Pilih Keterangan--</option>
                                                <option value="Ter-Verifikasi" <?php if ($Keterangan=='Ter-Verifikasi') {echo "selected";}?>>Ter-Verifikasi</option>
                                                <option value="Menunggu" <?php if ($Keterangan=='Menunggu') {echo "selected";}?>>Menunggu</option>
                                                <option value="Belum-Fix" <?php if ($Keterangan=='Belum-Fix') {echo "selected";}?>>Belum Fix</option>
                                            </select>
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="Ubah" value="Ubah" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    if(isset ($_POST['Ubah'])){
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
    $Berkas = implode(', ', $_POST['Berkas']);       
    $Foto = $_FILES ['Foto']['name'];
    $lokasi = $_FILES ['Foto']['tmp_name'];
    $Keterangan = $_POST ['Keterangan'];


    if(!empty($lokasi)) {
        $upload = move_uploaded_file($lokasi, "images_peserta/".$Foto);        

        $sql = $koneksi->query("update tb_input set TanggalMasuk='$TanggalMasuk', TanggalKeluar='$TanggalKeluar', ID='$ID', Nama='$Nama', TTL='$TTL', Alamat='$Alamat', Email='$Email', No_HP='$No_HP', Instansi='$Instansi', Fakultas='$Fakultas', Jurusan='$Jurusan', Unit='$Unit', Berkas = '$Berkas', Foto='$Foto', Keterangan = '$Keterangan' where ID ='$ID'");
        
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=magang";
                </script>
            <?php
        }   
    }else{         
        $upload = move_uploaded_file($lokasi, "images_peserta/".$Foto);
        $sql = $koneksi->query("update tb_input set TanggalMasuk='$TanggalMasuk', TanggalKeluar='$TanggalKeluar', ID='$ID', Nama='$Nama', TTL='$TTL', Alamat='$Alamat', Email='$Email', No_HP='$No_HP', Instansi='$Instansi', Fakultas='$Fakultas', Jurusan='$Jurusan', Unit='$Unit', Berkas = '$Berkas', Keterangan = '$Keterangan' where ID ='$ID'");   

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=magang";
                </script>
            <?php
        }
    }
}    

?>