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
                        <h2><b>Riwayat Peserta</b></h2>                        
                    </div>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Riwayat Peserta</li>
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
              <li class="active"><a href="#tab_riwayatmagang" data-toggle="tab"><i class=""></i> Peserta Magang / PKL </a></li>
              <li><a href="#tab_riwayatpenelitian" data-toggle="tab"><i class=""></i> Peserta Penelitian </a></li>
            </ul>
<div id="myTabContent" class="tab-content">
 <!-- tab riwayat magang -->
    <div class="tab-pane fade in active" id="tab_riwayatmagang">
        <!-- <table>
            <tr>
                <td>Tanggal Mulai</td>
                <td>Tanggal Akhir</td>
                <td rowspan="2"></td>
            </tr>
            <tr>
                <td><input type="date" name=""></td>
                <td><input type="date" name=""></td>
            </tr>
        </table> -->
     <form method="post" action="?page=riwayat peserta&aksi=filter">
        <div style="padding-bottom: 80px;">
        <div class="col-lg-3 col_md-6 col-sm-12">
            <label>Tanggal Awal</label>
            <br>
            <input type="date" name="tanggalawal">
        </div>
        <div class="col-lg-3 col_md-6 col-sm-12">
            <label>Tanggal Akhir</label>
            <br>
            <input type="date" name="tanggalakhir">
        </div>
        <div class="col-lg-3 col_md-6 col-sm-12">
            <button type="submit" name="kirim">klik</button>
        </div>
        </div>
    </form>
        
       
<br>
      <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 18px">
                             <b>Data Profil</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-riwayatmagang">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>ID</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Tanggal Masuk</center></th>
                                            <th><center>Tanggal Keluar</center></th>
                                            <th><center>No HP</center></th>                                            
                                            <th><center>Instansi</center></th>                                            
                                            <th><center>Unit</center></th>
                                            <th><center>Foto</center></th>                                                    
                                            <th><center>Detail</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            if(isset ($_POST['kirim'])){

                                               
                                                $tanggalawal = $_POST ['tanggalawal'];
                                                $tanggalakhir = $_POST ['tanggalakhir'];

                                            }

                                            $no=1;

                                            echo "$tanggalawal";

                                            $sql = $koneksi->query("SELECT * FROM `tb_input` WHERE TanggalMasuk and TanggalKeluar BETWEEN '".$tanggalawal."' AND '".$tanggalakhir."' ORDER BY TanggalMasuk AND TanggalKeluar");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID'];?></td>
                                            <td><?php echo $data['Nama'];?></td>
                                            <td><?php echo $data['TanggalMasuk'];?></td>
                                            <td><?php echo $data['TanggalKeluar'];?></td>
                                            <td><?php echo $data['No_HP'];?></td>   
                                            <td><?php echo $data['Instansi'];?></td>                         
                                            <td><?php echo $data['Unit'];?></td>
                                            <td>
                                                <center><img src="images_peserta/<?php echo $data['Foto']?>" width="50" height="50" alt=""></center>
                                            </td>                                                                            
                                            <td>
                                                <center><a href="?page=riwayat peserta&aksi=profilmagang&ID=<?php echo $data['ID']; ?>" class="btn btn-info btn-md"><i. class="fa fa-eye"></i.></a></center>
                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>

<!-- akhir tab magang -->
    </div>

 <!-- tab riwayat penelitian -->
    <div class="tab-pane fade" id="tab_riwayatpenelitian">
             <form method="post" action="?page=riwayat peserta&aksi=filter">
        <div style="padding-bottom: 80px;">
        <div class="col-lg-3 col_md-6 col-sm-12">
            <label>Tanggal Awal</label>
            <br>
            <input type="date" name="tanggalawal1">
        </div>
        <div class="col-lg-3 col_md-6 col-sm-12">
            <label>Tanggal Akhir</label>
            <br>
            <input type="date" name="tanggalakhir1">
        </div>
        <div class="col-lg-3 col_md-6 col-sm-12">
            <button type="submit" name="kirim1">klik</button>
        </div>
        </div>
    </form>
        
       
<br>
      <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 18px">
                             <b>Data Profil</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-riwayatpenelitian">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>ID</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Tanggal Masuk</center></th>
                                            <th><center>Tanggal Keluar</center></th>
                                            <th><center>No HP</center></th>                                            
                                            <th><center>Instansi</center></th>                                            
                                            <th><center>Unit</center></th>
                                            <th><center>Foto</center></th>                                                    
                                            <th><center>Detail</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            if(isset ($_POST['kirim1'])){

                                               
                                                $tanggalawal = $_POST ['tanggalawal1'];
                                                $tanggalakhir = $_POST ['tanggalakhir1'];

                                            }

                                            $no=1;

                                            echo "$tanggalawal1";

                                            $sql = $koneksi->query("SELECT * FROM `tb_inputpenelitian` WHERE TanggalMasuk1 and TanggalKeluar1 BETWEEN '".$tanggalawal1."' AND '".$tanggalakhir1."' ORDER BY TanggalMasuk1 AND TanggalKeluar1");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID1'];?></td>
                                            <td><?php echo $data['Nama1'];?></td>
                                            <td><?php echo $data['TanggalMasuk1'];?></td>
                                            <td><?php echo $data['TanggalKeluar1'];?></td>
                                            <td><?php echo $data['No_HP1'];?></td>   
                                            <td><?php echo $data['Instansi1'];?></td>                         
                                            <td><?php echo $data['JudulPenelitian'];?></td>
                                            <td>
                                                <center><img src="images_peserta/<?php echo $data['Foto1']?>" width="50" height="50" alt=""></center>
                                            </td>                                                                            
                                            <td>
                                                <center><a href="?page=riwayat peserta&aksi=profilpenelitian&ID=<?php echo $data['ID1']; ?>" class="btn btn-info btn-md"><i. class="fa fa-eye"></i.></a></center>
                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
 
<!-- akhir tab penelitian-->
    </div>

    <!-- akhir tab -->
</div>