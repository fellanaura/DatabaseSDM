<?php

    $ID1 = $_GET['ID1'];

    $sql = $koneksi->query("select * from tb_inputpenelitian where ID1='$ID1'");

    $tampil = $sql->fetch_assoc();    

    $Instansi = $tampil['Instansi'];

    $Fakultas = $tampil['Fakultas'];

    $Jurusan = $tampil['Jurusan'];

    $JudulPenelitian = $tampil['JudulPenelitian'];

    $Berkas1 = $tampil['Berkas1'];   

    $Foto1 = $tampil['Foto1'];

    $Keterangan1 = $tampil['Keterangan1'];

    $checked1 = explode(', ',$tampil['Berkas1']);

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
                                            <input class="form-control" name="TanggalMasuk1" type="date" value="<?php echo $tampil['TanggalMasuk1'];?>" />
                                        </div>

                                        <div class = "form-group">
                                            <label>Tanggal Keluar : </label>
                                            <input class="form-control" name="TanggalKeluar1" type="date" value="<?php echo $tampil['TanggalKeluar1'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="ID1" value="<?php echo $tampil['ID1'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                        <input class="form-control" name="Nama1" value="<?php echo $tampil['Nama1'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat dan Tanggal Lahir</label>
                                        <input class="form-control" name="TTL1" value="<?php echo $tampil['TTL1'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                        <input class="form-control" name="Alamat1" value="<?php echo $tampil['Alamat1'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                        <input class="form-control" name="Email1" value="<?php echo $tampil['Email1'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>No Hp</label>
                                        <input class="form-control" name="No_HP1" value="<?php echo $tampil['No_HP1'];?>" />
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
                                            <label>Judul Penelitian</label>
                                        <input class="form-control" name="JudulPenelitian" value="<?php echo $tampil['JudulPenelitian'];?>"/>
                                        </div>

                                        <div class="form-group">                                            
                                            <label>Berkas-Berkas</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas1[]" value="KTP" <?php in_array('KTP', $checked1) ? print "checked" : ""; ?>>Fotokopi KTP
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas1[]" value="KTM" <?php in_array('KTM', $checked1) ? print "checked" : ""; ?>>Fotokopi KTM
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas1[]" value="Surat Permohonan" <?php in_array('Surat Permohonan', $checked1) ? print "checked" : ""; ?>>Surat Permohonan
                                                </label>
                                            </div>

                                        </div>                                       

                                        <div class="form-group">
                                            <label>Ganti Foto</label>
                                            <br/>
                                            <br/>                                                                           
                                                <img src="images_peserta/<?php echo $tampil['Foto1']?>" width="80" height="80" style="margin-left:10px" alt="" name="Foto1">
                                        </div>
                                        <br/>

                                        <div class="form-group">                                           
                                        <input type="file" class="form-control" name="Foto1" />
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <select class ="form-control" name="Keterangan1">
                                                <option value="" <?php if ($Keterangan1=='') {echo "selected";}?>>--Pilih Keterangan--</option>
                                                <option value="Ter-Verifikasi" <?php if ($Keterangan1=='Ter-Verifikasi') {echo "selected";}?>>Ter-Verifikasi</option>
                                                <option value="Menunggu" <?php if ($Keterangan1=='Menunggu') {echo "selected";}?>>Menunggu</option>
                                                <option value="Belum Fix" <?php if ($Keterangan1=='Belum Fix') {echo "selected";}?>>Belum Fix</option>
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
    $Berkas1 = implode(', ', $_POST['Berkas1']);       
    $Foto1 = $_FILES ['Foto1']['name'];
    $lokasi = $_FILES ['Foto1']['tmp_name'];
    $Keterangan1 = $_POST ['Keterangan1'];


    if(!empty($lokasi)) {
        $upload = move_uploaded_file($lokasi, "images_peserta/".$Foto1);        

        $sql = $koneksi->query("update tb_inputpenelitian set TanggalMasuk1='$TanggalMasuk1', TanggalKeluar1='$TanggalKeluar1', ID1='$ID1', Nama1='$Nama1', TTL1='$TTL1', Alamat1='$Alamat1', Email1='$Email1', No_HP1='$No_HP1', Instansi='$Instansi', Fakultas='$Fakultas', Jurusan='$Jurusan', JudulPenelitian='$JudulPenelitian', Berkas1 = '$Berkas1', Foto1='$Foto1', Keterangan1 = '$Keterangan1' where ID1 ='$ID1'");
        
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=penelitian";
                </script>
            <?php
        }   
    }else{         
        $upload = move_uploaded_file($lokasi, "images_peserta/".$Foto1);
        $sql = $koneksi->query("update tb_inputpenelitian set TanggalMasuk1='$TanggalMasuk1', TanggalKeluar1='$TanggalKeluar1', ID1='$ID1', Nama1='$Nama1', TTL1='$TTL1', Alamat1='$Alamat1', Email1='$Email1', No_HP1='$No_HP1', Instansi='$Instansi', Fakultas='$Fakultas', Jurusan='$Jurusan', JudulPenelitian='$JudulPenelitian', Berkas1 = '$Berkas1', Keterangan1 = '$Keterangan1' where ID1 ='$ID1'");   

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=penelitian";
                </script>
            <?php
        }
    }
}    

?>