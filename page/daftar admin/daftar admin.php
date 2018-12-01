<div class="row">
                    <div class="col-md-12">
                        <h2 style="color: hsl(0, 60%, 50%)"><b>&nbsp;Daftar Admin</b></h2>                      
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"; style= "font-size: 18px">
                             <b>Daftar Admin</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" ID="dataTables-admin">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>ID</center></th>
                                            <th><center>Nama</center></th>                                            
                                            <th><center>Level</center></th>
                                            <th><center>Foto</center></th>
                                            <th><center>Keterangan</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no=1;

                                            $sql = $koneksi->query("select * from tb_admin");

                                            while ($data=$sql->fetch_assoc()){

                                        ?>
                                        <tr>
                                            <td><center><?php echo $no++; ?></center></td>
                                            <td><?php echo $data['ID'];?></td>
                                            <td><?php echo $data['Nama'];?></td>                                            
                                            <td><?php echo $data['Level'];?></td>                                            
                                            <td>
                                                <center><img src="images_admin/<?php echo $data['Foto']?>" width="50" height="50" alt=""></center>
                                            </td>
                                            <td>
                                                <center><a href="?page=daftar admin&aksi=ubahadmin&ID=<?php echo $data['ID']; ?>" class="btn btn-info btn-md" style="margin-left: 10px; margin-right:10px"><i. class="fa fa-edit"></a>
                                                <a onclick = "return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="?page=daftar admin&aksi=hapusadmin&ID=<?php echo $data['ID']; ?>" class="btn btn-danger btn-md" style="margin-right:10px"><i. class="fa fa-trash"></a></center>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <a href="?page=daftar admin&aksi=tambahadmin" class="btn btn-primary btn-sm pull-right" style="margin-top: 8px; "><i. class="fa fa-plus" style= "font-size: 14px">Tambah Admin</a>
                        </div>
                    </div>
                </div>
</div>