<!-- array hari dan bulan -->
  <SCRIPT LANGUAGE="Javascript">

    // Array of day names
    var dayNames = new Array("Minggu","Senin","Selasa","Rabu",
            "Kamis","Jumat","Sabtu");

    // Array of month Names
    var monthNames = new Array(
    "Januari","Februari","Maret","April","Mei","Juni","Juli",
    "Agustus","September","Oktober","November","Desember");
  </SCRIPT>
<!-- END array hari dan bulan -->
   

    <div class="content-header">
      <div class="col-md-12">
                        <h2 style="color: hsl(0, 60%, 50%)"><b>Input Data Magang/PKL</b></h2>           
                    </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Input Data</li>
      </ol>
    </section>

 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              </h3></b>
              <h3 class="pull-right" style="text-transform: uppercase; font-size: 17px; height: 0px; margin-top:0px">
                <i class="fa fa-calendar">  </i>
                <script language="javascript">
                  var now = new Date();
                  document.write(dayNames[now.getDay()]);
                </script>,  
                <b><script language="javascript">
                  var now = new Date();
                  document.write(now.getDate());
                </script></b>
                <script language="javascript">
                  var now = new Date();
                  document.write(monthNames[now.getMonth()]);
                </script>
                <script language="javascript">
                  var now = new Date();
                  document.write(now.getFullYear());
                </script>
              </h3>
            </div>
            <!-- /.box-header -->
          </div>
          <!-- /.box -->

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
      <div class="row">
                    <div class="col-md-12">                      
                    </div>
                </div>
                
                 <!-- /. ROW  -->
                 <hr />
<!-- tambah unit -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahpenempatan" style="margin-top: 50px;margin-bottom: 8px ; margin-right: 100px; height: 90px;width: 220px; background:#cd5c5c ; border: 0; font-size: 16px; border-radius: 10px"><i. class="fa fa-plus fa-2x" style= "color: #902c2c;"></i.><center>
                              Tambahkan Unit</center>
                            </button>
<!--masukin tabel-->
<div class="modal fade" id="tambahpenempatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH PENEMPATAN / UNIT
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Nama Unit</label>
                                        <input class="form-control" name="nama_penempatan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kuota Unit</label>
                                        <input class="form-control" name="kuota_penempatan" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanpenempatan" value="simpanpenempatan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
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

    $simpanpenempatan = $_POST ['simpanpenempatan'];
    $reset = $_POST ['reset'];

    if($simpanpenempatan) {
        $sql = $koneksi->query("insert into tb_penempatan(nama_penempatan,kuota_penempatan) values('$nama_penempatan','$kuota_penempatan')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=magang";
                </script>
            <?php
        }
    }
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
<!--end tambah unit -->
<!-- tambah instansi -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahinstansi" style="margin-top: 150px;margin-bottom: 8px ; margin-right: -220px; height: 90px;width: 220px; background:#568e90; border: 0; font-size: 16px; border-radius: 10px"><i. class="fa fa-plus fa-2x" style= "color: #263f40;"></i.><center>
                              Tambahkan Instansi</center>
                            </button>
<!--masukin tabel-->
<div class="modal fade" id="tambahinstansi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH INSTANSI
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                        <input class="form-control" name="nama_instansi" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat Instansi</label>
                                        <input class="form-control" name="alamat_instansi" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpaninstansi" value="simpaninstansi" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_instansi = $_POST ['kode_instansi'];
    $nama_instansi = $_POST ['nama_instansi'];
    $alamat_instansi = $_POST ['alamat_instansi'];

    $simpaninstansi = $_POST ['simpaninstansi'];
    $reset = $_POST ['reset'];

    if($simpaninstansi) {
        $sql = $koneksi->query("insert into tb_instansi(nama_instansi,alamat_instansi) values('$nama_instansi','$alamat_instansi')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=magang";
                </script>
            <?php
        }
    }
?>
                                        </div>
                                    </div>
                                </div>
                            </div>

<!--end tambah instansi -->
<!-- tambah fakultas -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahfakultas" style="margin-top: 250px;margin-bottom: 8px ; margin-right: -220px; height: 90px;width: 220px; background:#339960; font-size: 16px; border: 0; border-radius: 10px"><i. class="fa fa-plus fa-2x" style="color:#143d26 "></i.><center>
                              Tambahkan Fakultas</center>
                            </button>

<!--masukin tabel-->
<div class="modal fade" id="tambahfakultas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH FAKULTAS
</div>
<div class="panel-body">
                             <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Nama Fakultas</label>
                                        <input class="form-control" name="nama_fakultas" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanfakultas" value="simpanfakultas" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_fakultas = $_POST ['kode_fakultas'];
    $nama_fakultas = $_POST ['nama_fakultas'];

    $simpanfakultas = $_POST ['simpanfakultas'];
    $reset = $_POST ['reset'];

    if($simpanfakultas) {
        $sql = $koneksi->query("insert into tb_fakultas(nama_fakultas) values('$nama_fakultas')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=magang";
                </script>
            <?php
        }
    }
?>                 </div>
                                    </div>
                                </div>
                            </div>
<!--end tambah fakultas -->
<!-- tambah jurusan -->
<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahjurusan" style="margin-top: 350px;margin-bottom: 8px ; margin-right: -220px; height: 90px;width: 220px; background:#905a75; font-size: 16px; border: 0; border-radius: 10px"><i. class="fa fa-plus fa-2x" style="color: #381929"></i.><center>
                              Tambahkan Jurusan</center>
                            </button>

<!--masukin tabel-->
<div class="modal fade" id="tambahjurusan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
<div class="panel-heading">
                            TAMBAH JURUSAN
</div>
<div class="panel-body">
                             <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">

                                        <div class="form-group">
                                            <label>Nama Jurusan</label>
                                        <input class="form-control" name="nama_jurusan" />
                                        </div>

                                        <div class ="pull-right">
                                        <button type="submit" name="simpanjurusan" value="simpanjurusan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>

<?php

    $kode_jurusan = $_POST ['kode_jurusan'];
    $nama_jurusan = $_POST ['nama_jurusan'];

    $simpanjurusan = $_POST ['simpanjurusan'];
    $reset = $_POST ['reset'];

    if($simpanjurusan) {
        $sql = $koneksi->query("insert into tb_jurusan(nama_jurusan) values('$nama_jurusan')");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=magang";
                </script>
            <?php
        }
    }
?>                 </div>
                                    </div>
                                </div>
                            </div>

<!--end tambah jurusan -->
<div class="row">                
                <div class="col-md-6">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default" style="width: 550px" >
                        <div class="panel-heading"; style= "font-size: 18px; width: 549px">
                             <b>Peserta Aktif</b>
                        </div>
                        <div class="panel-body" style="width: 550px">
                            <div class="table-responsive" style="width: 520px">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-magangaktif">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>ID</center></th>
                                            <th><center style="width: 100px">Nama <i. class="fa fa-sort"></center></th>
                                            <th ><center>Instansi <i. class="fa fa-sort"></center></th>                           
                                            <th><center>Unit <i. class="fa fa-sort"></center></th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;
                                            date_default_timezone_set('Asia/Jakarta');
                                            $hari_ini = date('Y-m-d');

                                            $sql = $koneksi->query("select * from tb_input where TanggalMasuk <= '$hari_ini' and TanggalKeluar >='$hari_ini' ");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID'];?></td>
                                            <td><?php echo $data['Nama'];?></td>                     
                                            <td><?php echo $data['Instansi'];?></td>                       
                                            <td><?php echo $data['Unit'];?></td>                                            
                                        </tr>

                                        <?php } ?>
                                    </tbody>                                
                                </table>                                
                            </div>

                           

                              

                                <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahmagang1" style="margin-top: 8px;margin-bottom: 8px"><i. class="fa fa-plus" style= "font-size: 14px;">
                                Tambah Peserta
                                </button>

                           <div class="modal fade" id="tambahmagang1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                          TAMBAH PESERTA
</div>

        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                  <form method="POST" action="?page=input data&aksi=upload" enctype="multipart/form-data">
                                    <div class = "form-group">
                      <label>Tanggal Masuk : </label>
                                          <input class="form-control" name="TanggalMasuk" type="date" />
                                      </div>

                    <div class = "form-group">
                      <label>Tanggal Keluar : </label>
                                          <input class="form-control" name="TanggalKeluar" type="date" />
                                      </div>

                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="ID" required/>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                        <input class="form-control" name="Nama" required/>
                                      </div>

                                      <div class="form-group">
                                            <label>Tempat dan Tanggal Lahir</label>
                                        <input class="form-control" name="TTL" required/>
                                      </div>

                                      <div class="form-group">
                                            <label>Alamat</label>
                                        <input class="form-control" name="Alamat" required/>
                                      </div>

                                      <div class="form-group">
                                            <label>Email</label>
                                        <input class="form-control" name="Email" required/>
                                      </div>

                                      <div class="form-group">
                                            <label>No Hp</label>
                                        <input class="form-control" name="No_HP" required/>
                                      </div>

                                      <div class="form-group">
                                            <label>Instansi</label>
                                            <select class ="form-control" name="Instansi" required>
                                                <option value='' hidden>- Pilih Instansi-</option>
                                                <?php
                                                $sql_instansi = mysqli_query ($koneksi, "select * from tb_instansi");
                                                while ($data_instansi = mysqli_fetch_array($sql_instansi)) {
                                                    echo '<option value="'.$data_instansi['nama_instansi'].'">'.$data_instansi['nama_instansi'].'</option>';
                                                }

                                                ?>
                                            </select>
                                      </div>

                                        <div class="form-group">
                                            <label>Fakultas/Kelas</label>
                                            <select class ="form-control" name="Fakultas" required>
                                                <option value="" hidden>- Pilih Fakultas / Kelas-</option>
                                                <?php
                                                $sql_fakultas = mysqli_query ($koneksi, "select * from tb_fakultas");
                                                while ($data_fakultas = mysqli_fetch_array($sql_fakultas)) {
                                                    echo '<option value="'.$data_fakultas['nama_fakultas'].'">'.$data_fakultas['nama_fakultas'].'</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>

                                      <div class="form-group">
                                            <label>Jurusan</label>
                                            <select class ="form-control" name="Jurusan" required>
                                                <option value="" hidden>- Pilih Jurusan-</option>
                                                <?php
                                                $sql_jurusan = mysqli_query ($koneksi, "select * from tb_jurusan");
                                                while ($data_jurusan = mysqli_fetch_array($sql_jurusan)) {
                                                    echo '<option value="'.$data_jurusan['nama_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';
                                                }

                                                ?>
                                            </select>
                                      </div>

                                      <div class="form-group">
                                            <label>Unit</label>
                                          <select class ="form-control" name="Unit">
                                                <option value="" hidden>- Pilih Unit-</option>
                                                <?php
                                                $sql_penempatan = mysqli_query ($koneksi, "select * from tb_penempatan");
                                                while ($data_penempatan = mysqli_fetch_array($sql_penempatan)) {
                                                    echo '<option value="'.$data_penempatan['nama_penempatan'].'">'.$data_penempatan['nama_penempatan'].'</option>';
                                                }

                                                ?>
                                            </select>
                                      </div>
                                        
                                        <div class="form-group">
                                            <label>Berkas-Berkas</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas[]" value="KTP" />Fotokopi KTP
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas[]" value="KTM" />Fotokopi KTM
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Berkas[]" value="Surat Permohonan" />Surat Permohonan
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Foto 3x4</label>
                                        <input type="file" class="form-control" name="Foto" />
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <select class ="form-control show-tick" name="Keterangan">
                                                <option value="" hidden>--Pilih Keterangan--</option>
                                                <option value="Ter-Verifikasi">Ter-Verifikasi</option>
                                                <option value="Menunggu">Menunggu</option>
                                                <option value="Belum-Fix">Belum Fix</option>
                                            </select>
                                        </div>

                                      <div class ="pull-right">
                                        <button type="submit" name="simpanmagang" value="simpan" class="btn btn-primary">Simpan</button>
                                      
                                        
                                      </div>
                                  </form>
                                </div>
                            </div>
</div>


  

</div>

<!-- <?php

  if(isset ($_POST['simpanmagang'])){
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
    
    $Foto = $_FILES ['Foto']['name'];
    $lokasi = $_FILES ['Foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images_peserta/".$Foto);

    $Keterangan = $_POST ['Keterangan'];
   
    if($upload) {
  
    $sql = $koneksi->query("insert into tb_input(TanggalMasuk, TanggalKeluar, ID, Nama, TTL, Alamat, Email, No_HP, Instansi, Fakultas, Jurusan, Unit, Berkas, Foto, Keterangan) values ('$TanggalMasuk','$TanggalKeluar','$ID','$Nama','$TTL','$Alamat','$Email','$No_HP','$Instansi','$Fakultas','$Jurusan','$Unit', '$Berkas', '$Foto', '$Keterangan')");
        
    if ($sql) {
      ?>
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan");
          window.location.href="?page=magang";
        </script>
      <?php
    }
    
  }
    }
   

?> -->
</div>
</div>
</div>
</div>
                        </div>
                </div>
</div>
</div>
                                                         
      
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 18px">
                             <b>Daftar Peserta</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-magang">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>ID</center></th>
                                            <th><center style="width: 100px">Nama <i. class="fa fa-sort"></center></th>
                                            <th><center>Email <i. class="fa fa-sort"></center></th>
                                            <th><center>No Hp <i. class="fa fa-sort"></center></th>
                                            <th><center>Instansi <i. class="fa fa-sort"></center></th>
                                            <th><center>Jurusan <i. class="fa fa-sort"></center></th>
                                            <th><center>Unit <i. class="fa fa-sort"></center></th>
                                            <th><center>Berkas</center></th>
                                            <th><center>Foto</center></th>
                                            <th><center>Keterangan <i. class="fa fa-sort"></center></th>                              
                                            <th><center>Pengaturan</center></th>
                                            <th><center>Batal</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_input");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID'];?></td>
                                            <td><?php echo $data['Nama'];?></td>
                                            <td><?php echo $data['Email'];?></td>
                                            <td><?php echo $data['No_HP'];?></td>
                                            <td><?php echo $data['Instansi'];?></td>
                                            <td><?php echo $data['Jurusan'];?></td>
                                            <td><?php echo $data['Unit'];?></td>
                                            <td><?php echo $data['Berkas'];?></td>
                                            <td>
                                                <center><img src="images_peserta/<?php echo $data['Foto']?>" width="50" height="50" alt=""></center>
                                            </td> 
                                            <td>
                                                <center><?php
                                                
                                                if($data['Keterangan']=='Ter-Verifikasi'){
                                                    echo '<a href="" class="btn btn-success btn-sm">Ter-Verifikasi</a>';
                                                }elseif ($data['Keterangan']=='Menunggu'){
                                                    echo '<a href="" class="btn btn-warning btn-sm">Menunggu</a>';
                                                }elseif ($data['Keterangan']=='Belum-Fix'){
                                                    echo '<a href="" class="btn btn-danger btn-sm">Belum-Fix</a>';
                                                }

                                                ?></center>
                                                            
                                            </td>                                                                                 
                                            <td>
                                                <center><a href="?page=input data&aksi=ubahmagang&ID=<?php echo $data['ID']; ?>" class="btn btn-info btn-md"><i. class="fa fa-edit"></a></center>
                                                <center><a onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="?page=input data&aksi=hapusmagang&ID=<?php echo $data['ID']; ?>" class="btn btn-danger btn-md"><i. class="fa fa-trash"></a></center>
                                            </td>
                                            <td>
                                                <center style="padding-top: 15px"><a onclick = "return confirm('Anda Yakin Ingin Membatalkan Peserta ini?')" href="?page=input data&aksi=batalmagang&ID=<?php echo $data['ID']; ?>" class="btn btn-danger btn-md"><i. class="fa fa-close"></a></center>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
</div>
</div> 






        <div class="modal fade" id="quota_penuh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" style="margin-top: -9px" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                                Kuota sudah penuh
                     </div>
                </div>
              </div>
        </div>