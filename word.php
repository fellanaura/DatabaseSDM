<?php

$ID = $_GET['ID'];
$koneksi = new mysqli("localhost","root","","db_websdm");
$sql = $koneksi->query("select * from tb_input where ID='$ID'");
$tampil = $sql->fetch_assoc();
$Nama = $tampil['Nama'];
$Instansi = $tampil['Instansi'];

include "docxtemplate.class.php";

$docx = new docxtemplate('aaa.docx');
$docx->set('nama', $tampil['Nama']);
$docx->set('jeniskelamin', 'wanita');
$docx->set('tgllahir', '03/05/98');
$docx->set('alamat', 'Srikaloka');
$docx->set('today', date('d-m-Y'));

$docx->saveAs("".date('Y')." - PKL ".$Nama." (".$Instansi.").docx");;

$filename = "".date('Y')." - PKL ".$Nama." (".$Instansi.").docx";


header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename='$filename'");
readfile("".date('Y')." - PKL ".$Nama." (".$Instansi.").docx");

?>