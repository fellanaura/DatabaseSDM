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
                        <h2 style="color: hsl(0, 60%, 50%)"><b>Riwayat Peserta Magang/PKL</b></h2> 
                    </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Riwayat Peserta Magang/PKL</li>
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


<div id="myTabContent" class="tab-content">
 <!-- tab riwayat magang -->
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
        
     <form method="post" action="?page=riwayatmagangfilter">
        <div style="padding-bottom: 80px;">
        <div class="col-lg-3 col_md-6 col-sm-12">
            <label>Tanggal Awal</label>
            <br>
            <input type="date" name="tanggalawal" class="fa fa-calendar">
        </div>
        <div class="col-lg-3 col_md-6 col-sm-12">
            <label>Tanggal Akhir</label>
            <br>
            <input type="date" name="tanggalakhir" class="fa fa-calendar">
        </div>
        <div class="col-lg-3 col_md-6 col-sm-12">
             <button type="submit" name="kirim" style="margin-top: 30px; background: #8b0000; border: 0px; border-radius: 5px;font-size:16px; color: #F8F8FF; margin-left: -50px; width: 70px; height: 24px">Filter</button>
        </div>
        </div>
    </form>
        
<a href="./page/riwayat peserta/printexcelmagang.php" class="btn btn-default pull-right" style="background: #8b0000; color: #fff; margin-bottom: 10px" target="blank"><i. class="fa fa-print"></i.> ExploreToExcel</a>      
<br>
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
                                            <th><center>Nama <i. class="fa fa-sort"></center></th>
                                            <th><center>Tanggal Masuk <i. class="fa fa-sort"></center></th>
                                            <th><center>Tanggal Keluar <i. class="fa fa-sort"></center></th>
                                            <th><center>No HP <i. class="fa fa-sort"></center></th>                                            
                                            <th><center>Instansi <i. class="fa fa-sort"></center></th>                                            
                                            <th><center>Unit <i. class="fa fa-sort"></center></th>
                                            <th><center>Foto</center></th>                                                    
                                            <th><center>Detail</center></th>
                                            <th><center>Print Surat</center></th>
                                            <th><center>Print ID Card</center></th>
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

                                            <td>
                                                <center><a href="./Surat Magang/suratmagang.php?ID=<?=$data['ID']; ?>" class="btn btn-warning btn-md"><i. class="fa fa-print"></i.></a></center>
                                            </td>

                                            <td>
                                                <center><a href="./page/riwayat peserta/cocardmagang.php?ID=<?=$data['ID']; ?>" target="blank" class="btn btn-primary btn-md"><i. class="fa fa-print"></i.></a></center>
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

<!-- akhir tab magang -->
    </div>