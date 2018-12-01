<h2>Daftar Peserta</h2>
<?php

	$koneksi = new mysqli("localhost","root","","db_websdm");
	$filename = "daftar_peserta_magang-(".date('d-m-Y').").xls";
	header("content-disposition: attatchment; filename='$filename'");
	header("content-type: application/vnd.ms-excel");
?>

<table border="1">
	 <tr>
	    <th><center>No</center></th>
	    <th><center>ID</center></th>
	    <th><center>Nama</center></th>
	    <th><center>Tanggal Masuk </center></th>
	    <th><center>Tanggal Keluar</center></th>
	    <th><center>No HP </center></th>                                            
	    <th><center>Instansi </center></th>                                            
	    <th><center>Unit </center></th>
	</tr>

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
    </tr>

    <?php } ?>
</table>