<?php

    $sql = $koneksi->query("select * from tb_input");

    while ($tampil = $sql->fetch_assoc()){
        $totalmagang = $sql->num_rows;
    }

    $sqlp = $koneksi->query("select * from tb_inputpenelitian");

    while ($tampil = $sqlp->fetch_assoc()){
        $totalpenelitian = $sqlp->num_rows;
    }

    /*$sql1 = $koneksi->query("select * from tb_inputpenelitian where TanggalKeluar1 between '2018-01-01' and '2018-12-31'");

    while ($tampil = $sql1->fetch_assoc()){
        $totalpenelitian18 = $sql1->num_rows;
    }

    $sql3 = $koneksi->query("select * from tb_input where TanggalKeluar between '2018-01-01' and '2018-12-31'");

    while ($tampil = $sql3->fetch_assoc()){
        $totalmagang18 = $sql3->num_rows;
    }*/

    $coba = $koneksi->query("SELECT  distinct YEAR(TanggalKeluar) FROM tb_input order by TanggalKeluar asc");
    $jumlah = mysqli_num_rows($coba);

    for ($i=0; $i < $jumlah ; $i++) { 
        $tahun_array = mysqli_fetch_array($coba);
        $tahun[$i] = $tahun_array['YEAR(TanggalKeluar)'];

    }

    for ($i=0; $i < $jumlah ; $i++) { 

        $query = $koneksi->query("select * from tb_input where YEAR(TanggalKeluar)=$tahun[$i]");
        $total_magang[$i] = mysqli_num_rows($query);

        $query2 = $koneksi->query("select * from tb_inputpenelitian where YEAR(TanggalKeluar1)=$tahun[$i]");
        $total_penelitian[$i] = mysqli_num_rows($query2);

        $query3 = $koneksi->query("select * from tb_kunjungan where YEAR(TanggalKunjungan)=$tahun[$i]");
        $total_kunjungan[$i] = mysqli_num_rows($query3);  
    }

    $coba2 = $koneksi->query("SELECT distinct Instansi FROM tb_input");
    $jumlah2 = mysqli_num_rows($coba2);

    for ($i=0; $i < $jumlah2 ; $i++) { 
        $instansi_array = mysqli_fetch_array($coba2);
        $instansi[$i] = $instansi_array['Instansi'];
    }

    for ($i=0; $i < $jumlah2 ; $i++) { 

        $query4 = $koneksi->query("select * from tb_input where Instansi=$instansi[$i]");
        $total_instansi[$i] = mysqli_num_rows($query4);         
    }

    /*$sql2 = $koneksi->query("select * from tb_input where Instansi ='Universitas Gadjah Mada'");

    while ($tampil = $sql2->fetch_assoc()){
        $totalinstansi = $sql2->num_rows;
    }

    $sql10 = $koneksi->query("select * from tb_input where Instansi ='Universitas Negeri Yogyakarta'");

    while ($tampil = $sql10->fetch_assoc()){
        $totalinstansi2 = $sql10->num_rows;
    }

    $sql11 = $koneksi->query("select * from tb_input where Instansi ='Universitas Muhammadiyah Yogyakarta'");

    while ($tampil = $sql11->fetch_assoc()){
        $totalinstansi3 = $sql11->num_rows;
    }

    $sql12 = $koneksi->query("select * from tb_input where Instansi ='Universitas Islam Indonesia'");

    while ($tampil = $sql12->fetch_assoc()){
        $totalinstansi4 = $sql12->num_rows;
    }*/

    $sqla = $koneksi->query("select * from tb_inputpenelitian where Instansi ='Universitas Gadjah Mada'");

    while ($tampil = $sqla->fetch_assoc()){
        $totalinstansia = $sqla->num_rows;
    }

    $sqlb = $koneksi->query("select * from tb_inputpenelitian where Instansi ='Universitas Negeri Yogyakarta'");

    while ($tampil = $sqlb->fetch_assoc()){
        $totalinstansib = $sqlb->num_rows;
    }

    $sqlc = $koneksi->query("select * from tb_inputpenelitian where Instansi ='Universitas Muhammadiyah Yogyakarta'");

    while ($tampil = $sqlc->fetch_assoc()){
        $totalinstansic = $sqlc->num_rows;
    }

    $sqld = $koneksi->query("select * from tb_inputpenelitian where Instansi ='Universitas Islam Indonesia'");

    while ($tampil = $sqld->fetch_assoc()){
        $totalinstansid = $sqld->num_rows;
    }

?>

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
                        <h2><b>Dashboard</b></h2>                        
                    </div>
      
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
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary text-center no-boder bg-color-green ">
                    <div class="panel-body">
              <div class="row">
                <div class="col-xs-6"> <i class="fa fa-briefcase fa-4x" style="margin-top: 13px"></i></div>
                <div class="col-xs-6">
                  <div class="text-temp" style="font-size: 25px; margin-left:-23px"><div class="number count to" data from="0" data to="125" dataspeeds="15" data-fresh-interval="20"></div><b><?php echo $totalmagang;?></b> Peserta 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer back-footer-green" style="font-size: 16px">
                           Magang/PKL</div>
          </div>
          
        </div>
                    <div class="col-md-3">
                        <div class="panel panel-primary text-center no-boder bg-color-red ">
          
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6"> <i class="fa fa-search fa-4x" style="margin-top: 10px"></i></div>
                <div class="col-xs-6">
                  <div class="text-temp" style="font-size: 25px; margin-left:-23px"><div class="number count to" data from="0" data to="125" dataspeeds="15" data-fresh-interval="20"></div><b><?php echo $totalpenelitian;?></b> Peserta</div>                  
                </div>
              </div>
            </div>
            <div class="panel-footer back-footer-red" style="font-size: 16px">
                            Penelitian</div>
          </div>
          
        </div>
    </div>

             <div class="row"> 
                    
                      
                               <div class="col-md-12 col-sm-12 col-xs-12">                     
                    <div class="panel panel-success">
                        <div class="panel-heading"; style= "font-size: 16px">
                             <b>Rekap Jumlah Peserta</b>
                        </div>
                        <div class="panel-body">
                            <div id="bar"></div>
                        </div>
                    </div>            
                </div>
            </div>

            <div class="row">        
                    <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-danger"; style= "font-size: 16px">
                        <div class="panel-heading">
                            <b>Rekap Instansi Magang/PKL</b>
                        </div>
                        <div class="panel-body">
                            <div id="donutMagang"></div>
                        </div>
                    </div>            
                </div>
            
            
                    <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-danger"; style= "font-size: 16px">
                        <div class="panel-heading">
                            <b>Rekap Instansi Penelitian</b>
                        </div>
                        <div class="panel-body">
                            <div id="donutpenelitian"></div>
                        </div>
                    </div>            
                </div>
            </div>
                          

           <div class="row"> 
                    
                      
                               <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Rekap Peserta Magang/PKL</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-pkldash">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>ID</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Tgl Masuk</center></th>
                                            <th><center>Instansi</center></th>                           
                                            <th><center>Unit</center></th>                                            
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
                                            <td><?php echo $data['Instansi'];?></td>                       
                                            <td><?php echo $data['Unit'];?></td>                                            
                                        </tr>

                                        <?php } ?>
                                    </tbody>                                
                                </table>                                
                            </div>                                
                        </div>
                    </div>            
                </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Rekap Peserta Penelitian</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-penelitiandash">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>ID</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Tgl Masuk</center></th>
                                            <th><center>Instansi</center></th>                           
                                            <th><center>Judul</center></th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_inputpenelitian");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['ID1'];?></td>
                                            <td><?php echo $data['Nama1'];?></td>
                                            <td><?php echo $data['TanggalMasuk1'];?></td>                     
                                            <td><?php echo $data['Instansi'];?></td>                       
                                            <td><?php echo $data['JudulPenelitian'];?></td>                                            
                                        </tr>

                                        <?php } ?>
                                    </tbody>                                
                                </table>                                
                            </div>                                
                        </div>
                    </div>            
                </div> 
                
           </div>                   

                                    