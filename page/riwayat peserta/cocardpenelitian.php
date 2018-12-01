<?php

$ID1 = $_GET['ID1'];
$koneksi = new mysqli("localhost","root","","db_websdm");
$sql = $koneksi->query("select * from tb_inputpenelitian where ID1 ='$ID1'");
$tampil = $sql->fetch_assoc();
$Nama1 = $tampil['Nama1'];
$Instansi = $tampil['Instansi'];
$TanggalMasuk1 = $tampil['TanggalMasuk1'];
$tglmsk = explode("-", $TanggalMasuk1);

if ($tglmsk[1] = "1") {
	$tglmsk[1] = "Jan";
}elseif ($tglmsk[1] = "2") {
	$tglmsk[1] = "Feb";
}elseif ($tglmsk[1] = "3") {
	$tglmsk[1] = "Mar";
}elseif ($tglmsk[1] = "4") {
	$tglmsk[1] = "Apr";
}elseif ($tglmsk[1] = "5") {
	$tglmsk[1] = "Mei";
}elseif ($tglmsk[1] = "6") {
	$tglmsk[1] = "Jun";
}elseif ($tglmsk[1] = "7") {
	$tglmsk[1] = "Jul";
}elseif ($tglmsk[1] = "8") {
	$tglmsk[1] = "Agt";
}elseif ($tglmsk[1] = "9") {
	$tglmsk[1] = "Sep";
}elseif ($tglmsk[1] = "10") {
	$tglmsk[1] = "Okt";
}elseif ($tglmsk[1] = "11") {
	$tglmsk[1] = "Nov";
}elseif ($tglmsk[1] = "12") {
	$tglmsk[1] = "Des";
}

$TanggalKeluar1 = $tampil['TanggalKeluar1'];
$tglklr = explode("-", $TanggalKeluar1);

if ($tglklr[1] = "1") {
	$tglklr[1] = "Jan";
}elseif ($tglklr[1] = "2") {
	$tglklr[1] = "Feb";
}elseif ($tglklr[1] = "3") {
	$tglklr[1] = "Mar";
}elseif ($tglklr[1] = "4") {
	$tglklr[1] = "Apr";
}elseif ($tglklr[1] = "5") {
	$tglklr[1] = "Mei";
}elseif ($tglklr[1] = "6") {
	$tglklr[1] = "Jun";
}elseif ($tglklr[1] = "7") {
	$tglklr[1] = "Jul";
}elseif ($tglklr[1] = "8") {
	$tglklr[1] = "Agt";
}elseif ($tglklr[1] = "9") {
	$tglklr[1] = "Sep";
}elseif ($tglklr[1] = "10") {
	$tglklr[1] = "Okt";
}elseif ($tglklr[1] = "11") {
	$tglklr[1] = "Nov";
}elseif ($tglklr[1] = "12") {
	$tglklr[1] = "Des";
}

include "docxtemplate.class.php";

$docx = new docxtemplate('IDpenelitian.docx');
$docx->set('Nama1', $tampil['Nama1']);
$docx->set('TanggalMasuk1', "".$tglmsk[2]." ".$tglmsk[1]." ".$tglmsk[0]."");
$docx->set('TanggalKeluar1', "".$tglklr[2]." ".$tglklr[1]." ".$tglklr[0]."");
$docx->set('Instansi', $tampil['Instansi']);

$docx->saveAs("ID Card - ".date('Y')." - Penelitian ".$Nama1." (".$Instansi.").docx");
$filename = "ID Card - ".date('Y')." - Penelitian ".$Nama1." (".$Instansi.").docx";

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename='$filename'");
readfile("ID Card - ".date('Y')." - Penelitian ".$Nama1." (".$Instansi.").docx");

?>