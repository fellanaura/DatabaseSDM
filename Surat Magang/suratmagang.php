<?php

$ID = $_GET['ID'];
$koneksi = new mysqli("localhost","root","","db_websdm");
$sql = $koneksi->query("select * from tb_input where ID='$ID'");
$tampil = $sql->fetch_assoc();

$Nama = $tampil['Nama'];
$ID = $tampil['ID'];
$Instansi = $tampil['Instansi'];
$Fakultas = $tampil['Fakultas'];
$Jurusan = $tampil['Jurusan'];
$Unit = $tampil['Unit'];
$TanggalMasuk = $tampil['TanggalMasuk'];
$tglmsk = explode("-", $TanggalMasuk);

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


$TanggalKeluar = $tampil['TanggalKeluar'];
$tglklr = explode("-", $TanggalKeluar);

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

$docx = new docxtemplate('suratmagang.docx');
$docx->set('today',  date('d-F-Y'));
$docx->set('Fakultas', $tampil['Fakultas']);
$docx->set('Instansi', $tampil['Instansi']);
$docx->set('Jurusan', $tampil['Jurusan']);
$docx->set('alamat_instansi', $tampil1['alamat_instansi']);
$docx->set('Nama', $tampil['Nama']);
$docx->set('ID', $tampil['ID']);
$docx->set('TanggalMasuk', "".$tglmsk[2]." ".$tglmsk[1]." ".$tglmsk[0]."");
$docx->set('TanggalKeluar', "".$tglklr[2]." ".$tglklr[1]." ".$tglklr[0]."");
$docx->set('Unit', $tampil['Unit']);
$docx->saveAs("".date('Y')." - PKL ".$Nama." (".$Instansi.").docx");

$filename = "".date('Y')." - PKL ".$Nama." (".$Instansi.").docx";


header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename='$filename'");
readfile("".date('Y')." - PKL ".$Nama." (".$Instansi.").docx");

?>