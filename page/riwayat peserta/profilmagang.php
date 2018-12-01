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

?>

<div class="row">
                    <div class="col-md-12">
                     <h2 style="color: hsl(0, 60%, 50%)"><b>Data Profil Magang/PKL</b></h2>                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
                      <div class="col-md-5">
                        
                    <div class="panel" style="margin-left: 11px; margin-right: -25px;">
                    <div class="panel-heading" style="font-size: 16px;">

                                      
                                    <div class="panel-body">
                                      
            <br/>                                      
            <!-- <center><img class="img-circle" src="images_peserta/<?php echo $tampil['Foto']?>" width="150" height="150" alt="" name="Foto"></center>

            <h4 class="text-center text-primary"><?php echo $tampil['ID'];?></h4>

            <h3 class="profile-username text-center" style="margin-bottom: 25px"><strong><?php echo $tampil['Nama'];?></strong></h3>

            <div class="text-muted text-center" style= "font-size: 16px; margin-top: 15px"><?php echo $tampil['Instansi'];?></div>            
            <div class="text-success text-center" style= "font-size: 16px; margin-top: 11px"><strong><?php echo $tampil['Unit'];?></strong></div> -->

            <img class="img-sphere" src="images_peserta/<?php echo $tampil['Foto']?>" style="margin-top:-48px;margin-left: -31px" width="120" height="230" alt="" name="Foto">
            <img src="assets/img/logo.png" style="margin-bottom:100px;margin-left: 210px;margin-top:-125px;margin-right: -200px;" height="50" width="80" alt="" name="Foto">
                        
            <div class="text" style= "font-size: 18px; margin-top: -165px; margin-left: 95px"><strong>PRAKTEK KERJA LAPANGAN</strong></div> 
            <div class="text" style="font-size: 15px; margin-top: 11px; margin-left: 95px"><strong>Nama : <?php echo $tampil['Nama'];?></strong></div>
            <div class="text" style="font-size: 15px;margin-top: 5px; margin-left: 95px"><strong>Lokasi : WITEL YOGYAKARTA</strong></div> 
            <div class="text" style= "font-size: 15px; margin-top: 6px; margin-left: 95px"><strong>Unit : <?php echo $tampil['Unit'];?></strong></div>
            <div class="text" style= "font-size: 12px; margin-top: 28px; margin-bottom: -16px; margin-left: 95px;border:1px black solid; width:fit-content; width:-webkit-fit-content; width:-moz-fit-content"><strong>BERLAKU : <?php echo $tampil['TanggalMasuk'];?> s/d <?php echo $tampil['TanggalKeluar'];?></strong></div>
            <div class="text" style= "margin-top: -35px; margin-bottom: -18px;margin-left: 326px;border:1px black solid; width:40px; height:35px"></div>                                
                   

                   </div>
                 </div>
           
            </div>
<br>
<br>
          </div>
                     <div class="col-md-7">
                      <div class="panel panel-default" style="margin-left: 20px">
                        <div class="panel-heading" style="font-size: 16px;">
                           <strong>Profil Peserta</strong>
                        </div>

                                      
                                    <div class="panel-body"> 
                                          <div class="col-md-13">

                                            <form method="POST" enctype="multipart/form-data">
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Tanggal Masuk :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TanggalMasuk'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Tanggal Keluar :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TanggalKeluar'];?></pre>
                                            </div>
                                            </div>                                 
                                    
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>ID :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['ID'];?></pre>
                                            </div>
                                            </div> 
                                            
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Nama :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Nama'];?></pre>
                                            </div>
                                            </div> 
                   
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Tempat dan Tanggal Lahir :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TTL'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Alamat :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Alamat'];?></pre>
                                            </div>
                                            </div>  

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Email :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Email'];?></pre>
                                            </div>
                                            </div> 
                                      
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>No Hp :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['No_HP'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Instansi :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Instansi'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Fakultas/Kelas :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Fakultas'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Jurusan :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TTL'];?></pre>
                                            </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Unit</label>
                                            </div>                                            
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Unit'];?></pre></pre>
                                            </div>
                                            </div>
   
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Berkas-Berkas :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Berkas'];?></pre>
                                            </div>
                                            </div>                     
                                           
                                  </form>
                                </div>


                    
                              
                  

                        </div>
                  </div>
            </div>
                 
                 
                