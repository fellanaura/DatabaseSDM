<?php

  $ID = $_GET['ID'];

  $sql = $koneksi->query("select * from tb_kunjungan where ID='$ID'");

  $tampil = $sql->fetch_assoc();    

  $Instansi = $tampil['Instansi'];

  $Fakultas = $tampil['Jumlah'];

  $Berkas = $tampil['Berkas'];    
    
  $Foto = $tampil['Foto'];

?>

<div class="row">
                    <div class="col-md-12">
                     <h2 style="color: hsl(0, 60%, 50%)"><b>Data Profil Kunjungan</b></h2>                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
                      
                     <div class="col-md-9">
                      <div class="panel panel-default" style="margin-left: 20px">
                        <div class="panel-heading" style="font-size: 16px;">
                           <strong>Profil Penanggung Jawab</strong>
                        </div>

                                      
                                    <div class="panel-body"> 
                                          <div class="col-md-13">

                                            <form method="POST" enctype="multipart/form-data">
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>Tanggal Kunjungan :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['TanggalKunjungan'];?></pre>
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
                                                      <label>Nama PJ :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['NamaPJ'];?></pre>
                                            </div>
                                            </div>  
                                      
                                            <div class="row" style="padding-bottom: 5px">
                                                <div class="col-md-4" style="margin-top: 9px;">
                                                      <label>No Hp PJ :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['No_HPPJ'];?></pre>
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
                                                      <label>Jumlah Peserta :</label>
                                            </div>
                                            <div class="col-md-8">
                                                <pre><?php echo $tampil['Jumlah'];?></pre>
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
                 
                 
                