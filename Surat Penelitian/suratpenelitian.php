<?php

$ID1 = $_GET['ID1'];
$koneksi = new mysqli("localhost","root","","db_websdm");
$sql = $koneksi->query("select * from tb_inputpenelitian where ID1='$ID1'");
$tampil = $sql->fetch_assoc();

$Nama1 = $tampil['Nama1'];
$ID1 = $tampil['ID1'];
$Instansi = $tampil['Instansi'];
$Fakultas = $tampil['Fakultas'];
$Jurusan = $tampil['Jurusan'];
$JudulPenelitian = $tampil['JudulPenelitian'];
$TanggalMasuk1 = $tampil['TanggalMasuk1'];
$tglmsk = explode("-", $TanggalMasuk1);

if ($tglmsk[1] = "1") {
	$tglmsk[1] = "Januari";
}elseif ($tglmsk[1] = "2") {
	$tglmsk[1] = "Februari";
}elseif ($tglmsk[1] = "3") {
	$tglmsk[1] = "Maret";
}elseif ($tglmsk[1] = "4") {
	$tglmsk[1] = "April";
}elseif ($tglmsk[1] = "5") {
	$tglmsk[1] = "Mei";
}elseif ($tglmsk[1] = "6") {
	$tglmsk[1] = "Juni";
}elseif ($tglmsk[1] = "7") {
	$tglmsk[1] = "Juli";
}elseif ($tglmsk[1] = "8") {
	$tglmsk[1] = "Agustus";
}elseif ($tglmsk[1] = "9") {
	$tglmsk[1] = "September";
}elseif ($tglmsk[1] = "10") {
	$tglmsk[1] = "Oktober";
}elseif ($tglmsk[1] = "11") {
	$tglmsk[1] = "November";
}elseif ($tglmsk[1] = "12") {
	$tglmsk[1] = "Desember";
}


$TanggalKeluar1 = $tampil['TanggalKeluar1'];
$tglklr = explode("-", $TanggalKeluar1);

if ($tglklr[1] = "1") {
	$tglklr[1] = "Januari";
}elseif ($tglklr[1] = "2") {
	$tglklr[1] = "Februari";
}elseif ($tglklr[1] = "3") {
	$tglklr[1] = "Maret";
}elseif ($tglklr[1] = "4") {
	$tglklr[1] = "April";
}elseif ($tglklr[1] = "5") {
	$tglklr[1] = "Mei";
}elseif ($tglklr[1] = "6") {
	$tglklr[1] = "Juni";
}elseif ($tglklr[1] = "7") {
	$tglklr[1] = "Juli";
}elseif ($tglklr[1] = "8") {
	$tglklr[1] = "Agustus";
}elseif ($tglklr[1] = "9") {
	$tglklr[1] = "September";
}elseif ($tglklr[1] = "10") {
	$tglklr[1] = "Oktober";
}elseif ($tglklr[1] = "11") {
	$tglklr[1] = "November";
}elseif ($tglklr[1] = "12") {
	$tglklr[1] = "Desember";
}


$sql1 = $koneksi->query("select * from tb_instansi where nama_instansi='$Instansi' ");
$tampil1 = $sql1->fetch_assoc();

$alamat_instansi = $tampil1['alamat_instansi'];

include "docxtemplate.class.php";

$docx = new docxtemplate('suratpenelitian.docx');
$docx->set('today',  date('d-F-Y'));
$docx->set('Fakultas', $tampil['Fakultas']);
$docx->set('Instansi', $tampil['Instansi']);
$docx->set('Jurusan', $tampil['Jurusan']);
$docx->set('alamat_instansi', $tampil1['alamat_instansi']);
$docx->set('Nama1', $tampil['Nama1']);
$docx->set('ID1', $tampil['ID1']);
$docx->set('TanggalMasuk1', "".$tglmsk[2]." ".$tglmsk[1]." ".$tglmsk[0]."");
$docx->set('TanggalKeluar1', "".$tglklr[2]." ".$tglklr[1]." ".$tglklr[0]."");
$docx->set('JudulPenelitian', $tampil['JudulPenelitian']);
$docx->saveAs("".date('Y')." - Penelitian ".$Nama1." (".$Instansi.").docx");

$filename = "".date('Y')." - Penelitian ".$Nama1." (".$Instansi.").docx";

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename='$filename'");
readfile("".date('Y')." - Penelitian ".$Nama1." (".$Instansi.").docx");

?>