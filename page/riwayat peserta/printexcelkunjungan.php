<h2>Daftar Peserta</h2>
<?php

	$koneksi = new mysqli("localhost","root","","db_websdm");
	$filename = "daftar_peserta_kunjungan-(".date('d-m-Y').").xls";
	header("content-disposition: attatchment; filename='$filename'");
	header("content-type: application/vnd.ms-excel");
?>

<table border="1">
	 <tr>
	    <th><center>No</center></th>
	    <th><center>ID</center></th>
	    <th><center>Nama PJ</center></th>
	    <th><center>Tanggal Pelaksanaan </center></th>
	    <th><center>No HP PJ</center></th>                                            
	    <th><center>Instansi </center></th>
	    <th><center>Jumlah </center></th>                                              
	</tr>

	 <?php

        $no=1;

        $sql = $koneksi->query("select * from tb_kunjungan");
		while ($data=$sql->fetch_assoc()){


    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['ID'];?></td>
        <td><?php echo $data['NamaPJ'];?></td>
        <td><?php echo $data['TanggalKunjungan'];?></td>
        <td><?php echo $data['No_HPPJ'];?></td>   
        <td><?php echo $data['Instansi'];?></td>                         
        <td><?php echo $data['Jumlah'];?></td>
    </tr>

    <?php } ?>
</table>