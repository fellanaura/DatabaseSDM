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
                        <h2 style="color: hsl(0, 60%, 50%)"><b>&nbsp;Daftar Unit</b></h2>                       
                    </div>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Daftar Unit</li>
      </ol>
    </section>

 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              </h3></b>
              <h3 class="pull-right" style="text-transform: uppercase; font-size: 17px;">
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
              <li class="active"><a href="#tab_penempatan" data-toggle="tab"><i class=""></i> Penempatan</a></li>
              <li><a href="#tab_instansi" data-toggle="tab"><i class=""></i> Instansi</a></li>
            </ul>

<!-- buat tab penempatan -->
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="tab_penempatan">

        <br>
      <button class="btn btn-primary btn-sm pull-left" data-toggle="modal" data-target="#tambahunit" style="margin-top: 8px;margin-bottom: 8px"><i. class="fa fa-plus" style= "font-size: 14px;">
                              Tambah Unit
                            </button>
 <div class="modal fade" id="tambahunit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                        <input class="form-control" name="kuota_penempatan" type="number" />
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
                    window.location.href="?page=daftar unit";
                </script>
            <?php
        }
    }
?>
</div>
</div>
</div>
</div>
      <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 20px">
                             <b>Daftar Penempatan / Unit</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-penempatan">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama_penempatan <i. class="fa fa-sort"></th>
                                            <th>kuota_penempatan <i. class="fa fa-sort"></th>
                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_penempatan");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>                                  
                                            <td><?php echo $data['nama_penempatan'];?></td>
                                            <td><?php echo $data['kuota_penempatan'];?></td>
                                            <td>

                                                <a href="?page=daftar unit&aksi=ubahpenempatan&kode_penempatan=<?php echo $data['kode_penempatan']; ?>" class="btn btn-info btn-md"><i. class="fa fa-edit"></a>
                                                <a onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="?page=daftar unit&aksi=hapuspenempatan&kode_penempatan=<?php echo $data['kode_penempatan']; ?>" class="btn btn-danger btn-md"><i. class="fa fa-trash"></a>
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
    <!--penutup terakhir tab penempatan-->


<!-- buat tab instansi -->    
    <div class="tab-pane fade" id="tab_instansi">
        <br>

<!-- tabel instansi -->
<button class="btn btn-primary btn-sm pull-left" data-toggle="modal" data-target="#tambahinstansi" style="margin-top: 8px;margin-bottom: 8px"><i. class="fa fa-plus" style= "font-size: 14px;">
                              Tambah Instansi
                            </button>
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
                    window.location.href="?page=daftar unit";
                </script>
            <?php
        }
    }
?>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 20px">
                             <b>Daftar Instansi</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-instansi">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Instansi <i. class="fa fa-sort"></th>
                                            <th>Alamat Instansi <i. class="fa fa-sort"></th>
                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_instansi");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama_instansi'];?></td>
                                            <td><?php echo $data['alamat_instansi'];?></td>
                                            <td>

                                                <a href="?page=daftar unit&aksi=ubahinstansi&kode_instansi=<?php echo $data['kode_instansi']; ?>" class="btn btn-info btn-md"><i. class="fa fa-edit"></a>
                                                <a onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="?page=daftar unit&aksi=hapusinstansi&kode_instansi=<?php echo $data['kode_instansi']; ?>" class="btn btn-danger btn-md"><i. class="fa fa-trash"></a>
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
 <!-- tabel fakultas -->
 <button class="btn btn-primary btn-sm pull-left" data-toggle="modal" data-target="#tambahfakultas" style="margin-top: 80px;margin-bottom: 8px"><i. class="fa fa-plus" style= "font-size: 14px;">
                              Tambah Fakultas
                            </button>
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
                    window.location.href="?page=daftar unit";
                </script>
            <?php
        }
    }
?>
</div>
</div>
</div>
</div>

           
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 20px">
                             <b>Daftar Fakultas</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-fakultas">
                                    <thead>
                                        <tr>
                                            <th>No</th>                                            
                                            <th>Nama Fakultas <i. class="fa fa-sort"></th>
                                            <th>Pengaturan <i. class="fa fa-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_fakultas");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama_fakultas'];?></td>
                                            <td>

                                                <a href="?page=daftar unit&aksi=ubahfakultas&kode_fakultas=<?php echo $data['kode_fakultas']; ?>" class="btn btn-info btn-md"><i. class="fa fa-edit"></a>
                                                <a onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="?page=daftar unit&aksi=hapusfakultas&kode_fakultas=<?php echo $data['kode_fakultas']; ?>" class="btn btn-danger btn-md"><i. class="fa fa-trash"></a>
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

 <!-- tabel jurusan -->
 <button class="btn btn-primary btn-sm pull-left" data-toggle="modal" data-target="#tambahjurusan" style="margin-top: 80px;margin-bottom: 8px"><i. class="fa fa-plus" style= "font-size: 14px;">
                              Tambah Jurusan
                            </button>
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
                    window.location.href="?page=daftar unit";
                </script>
            <?php
        }
    }
?>
</div>
</div>
</div>
</div>

           
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 20px">
                             <b>Daftar Jurusan</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-jurusan">
                                    <thead>
                                        <tr>
                                            <th>No</th>                                            
                                            <th>Nama Jurusan <i. class="fa fa-sort"></th>
                                            <th>Pengaturan <i. class="fa fa-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_jurusan");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>                                   
                                            <td><?php echo $data['nama_jurusan'];?></td>
                                            <td>

                                                <a href="?page=daftar unit&aksi=ubahjurusan&kode_jurusan=<?php echo $data['kode_jurusan']; ?>" class="btn btn-info btn-md"><i. class="fa fa-edit"></a>
                                                <a onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="?page=daftar unit&aksi=hapusjurusan&kode_jurusan=<?php echo $data['kode_jurusan']; ?>" class="btn btn-danger btn-md"><i. class="fa fa-trash"></a>
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
</div>