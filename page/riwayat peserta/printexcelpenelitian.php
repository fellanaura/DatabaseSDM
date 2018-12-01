<h2>Daftar Peserta</h2>
<?php

	$koneksi = new mysqli("localhost","root","","db_websdm");
	$filename = "daftar_peserta_penelitian-(".date('d-m-Y').").xls";
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
	    <th><center>Judul Penelitian </center></th>
	</tr>

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
        <td><?php echo $data['TanggalKeluar1'];?></td>
        <td><?php echo $data['No_HP1'];?></td>   
        <td><?php echo $data['Instansi'];?></td>                         
        <td><?php echo $data['JudulPenelitian'];?></td>
    </tr>

    <?php } ?>
</table>