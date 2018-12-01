<?php

	$ID = $_GET['ID'];

	$sql = $koneksi->query("select * from tb_admin where ID='$ID'");

	$tampil = $sql->fetch_assoc();
		
	$Level = $tampil['Level'];

	$Foto = $tampil['Foto'];
?>

<div class="panel panel-default">
<div class="panel-heading">
                        	UBAH ADMIN
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                	<form method="POST" enctype="multipart/form-data">
										<div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="ID" value="<?php echo $tampil['ID'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="Username" value="<?php echo $tampil['Username'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="Password" value="<?php echo $tampil['Password'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                        <input class="form-control" name="Nama" value="<?php echo $tampil['Nama'];?>"/>
                                    	</div>
                                        
                                        <div class="form-group">
                                            <label>Level</label>
                                        	<select class ="form-control" name="Level">
                                                <option value="admin" <?php if ($Level=='admin') {echo "selected";}?>>Admin</option>
                                                <option value="user" <?php if ($Level=='user') {echo "selected";}?>>User</option>                                                
                                            </select>
                                    	</div>        

                                    	<div class="form-group">
                                            <label>Ganti Foto</label>
                                            <br/>
                                            <br/>                                                                           
                                                <img src="images_admin/<?php echo $tampil['Foto']?>" width="80" height="80" style="margin-left:10px" alt="" name="Foto">                                
                                        </div>
                                        <br/>

                                        <div class="form-group">                                           
                                        <input type="file" class="form-control" name="Foto" />
                                        </div>
                                   	
                                    	<div class ="pull-right">
                                    	<button type="submit" name="Ubah1" value="Ubah1" class="btn btn-primary">Ubah</button
                                    	</div>
                                	</form>
                                </div>
                            </div>
</div>
</div>

<?php
	
	if(isset ($_POST['Ubah1'])){
    $ID = $_POST ['ID'];
    $Username = $_POST ['Username'];
    $Password = $_POST ['Password'];
	$Nama = $_POST ['Nama'];	
	$Level = $_POST ['Level'];
	$Foto = $_FILES ['Foto']['name'];
    $lokasi = $_FILES ['Foto']['tmp_name'];
    

    if(!empty($lokasi)) {
        $upload = move_uploaded_file($lokasi, "images_admin/".$Foto);
	
		$sql = $koneksi->query("update tb_admin set ID='$ID', Username='$Username', Password='$Password', Nama='$Nama', Level='$Level', Foto='$Foto' where ID ='$ID'");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Diubah");
					window.location.href="?page=daftar admin";
				</script>
			<?php
		}
	}else{

        $upload = move_uploaded_file($lokasi, "images_admin/".$Foto);
    
        $sql = $koneksi->query("update tb_admin set ID='$ID', Username='$Username', Password='$Password', Nama='$Nama', Level='$Level' where ID ='$ID'");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=daftar admin";
                </script>
            <?php
        }
    }
}
?>