<div class="panel panel-default">
<div class="panel-heading">
                        	TAMBAH ADMIN
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                	<form method="POST" enctype="multipart/form-data">
										<div class="form-group">                                            
                                            <label>ID</label>
                                            <input class="form-control" name="ID" />
                                        </div>

                                        <div class="form-group">                                            
                                            <label>Username</label>
                                            <input class="form-control" name="Username" />
                                        </div>

                                        <div class="form-group">                                            
                                            <label>Password</label>
                                            <input type="Password" class="form-control" name="Password" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                        <input class="form-control" name="Nama" />
                                    	</div>
                                        
                                    	<div class="form-group">
                                            <label>Level</label>
                                        	<select class ="form-control" name="Level">
                                                <option value="">--Pilih Level--</option>
                                                <option value="admin">admin</option>
                                                <option value="user">user</option>                                          
                                            </select>
                                    	</div>

                                        <div class="form-group">
                                            <label>Foto 3x4</label>
                                        <input type="file" class="form-control" name="Foto" />
                                        </div>
                                    	                                    	
                                    	<div class ="pull-right">
                                    	<button type="submit" name="simpanmagang" value="simpan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-basic">Reset</button>
                                    	</div>
                                	</form>
                                </div>
                            </div>
</div>
</div>

<?php
	
    if(isset ($_POST['simpanmagang'])){
	$ID = $_POST ['ID'];
    $Username = $_POST ['Username'];
    $Password = $_POST ['Password'];
	$Nama = $_POST ['Nama'];	
	$Level = $_POST ['Level'];

    $Foto = $_FILES ['Foto']['name'];
    $lokasi = $_FILES ['Foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images_admin/".$Foto);

    if($upload) {

		$sql = $koneksi->query("insert into tb_admin(ID, Username, Password, Nama, Level, Foto) values('$ID','$Username','$Password','$Nama','$Level','$Foto')");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Disimpan");
					window.location.href="?page=daftar admin";
				</script>
			<?php
		}
	}
}
?>