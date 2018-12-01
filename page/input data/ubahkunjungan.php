<?php

    $ID = $_GET['ID'];

    $sql = $koneksi->query("select * from tb_kunjungan where ID='$ID'");

    $tampil = $sql->fetch_assoc();    

    $Instansi = $tampil['Instansi'];

    $Jumlah = $tampil['Jumlah'];

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
                                            <label>Tanggal Kunjungan : </label>
                                            <input class="form-control" name="TanggalKunjungan" type="date" value="<?php echo $tampil['TanggalKunjungan'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="ID" value="<?php echo $tampil['ID'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                        <input class="form-control" name="NamaPJ" value="<?php echo $tampil['NamaPJ'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>No Hp</label>
                                        <input class="form-control" name="No_HPPJ" value="<?php echo $tampil['No_HPPJ'];?>" />
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
                                            <label>Jumlah Peserta</label>
                                        <input class="form-control" name="Jumlah" value="<?php echo $tampil['Jumlah'];?>" />
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
    $TanggalMasuk = $_POST ['TanggalKunjungan'];
    $ID = $_POST ['ID'];
    $NamaPJ = $_POST ['NamaPJ'];
    $No_HPPJ = $_POST ['No_HPPJ'];
    $Jumlah = $_POST ['Jumlah'];
    $Berkas = implode(', ', $_POST['Berkas']);       
    $Foto = $_FILES ['Foto']['name'];
    $lokasi = $_FILES ['Foto']['tmp_name'];
    $Keterangan = $_POST ['Keterangan'];


    if(!empty($lokasi)) {
        $upload = move_uploaded_file($lokasi, "images_peserta/".$Foto);        

        $sql = $koneksi->query("update tb_kunjungan set TanggalKunjungan='$TanggalKunjungan', ID='$ID', NamaPJ='$NamaPJ', No_HPPJ='$No_HPPJ', Instansi='$Instansi', Jumlah='$Jumlah', Berkas = '$Berkas', Foto='$Foto', Keterangan = '$Keterangan' where ID ='$ID'");
        
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=kunjungan";
                </script>
            <?php
        }   
    }else{         
        $upload = move_uploaded_file($lokasi, "images_peserta/".$Foto);
        $sql = $koneksi->query("update tb_kunjungan set TanggalKunjungan='$TanggalKunjungan', ID='$ID', NamaPJ='$NamaPJ', No_HPPJ='$No_HPPJ', Instansi='$Instansi', Jumlah='$Jumlah', Berkas = '$Berkas', Foto='$Foto', Keterangan = '$Keterangan' where ID ='$ID'");   

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=kunjungan";
                </script>
            <?php
        }
    }
}    

?>