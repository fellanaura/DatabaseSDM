<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>

<?php
        
        session_start();        
        $koneksi = new mysqli("localhost","root","","db_websdm");
        $tbmagang = "SELECT * FROM orders ORDER BY order_number desc";
        $riwayatmagang = mysqli_query($conn, $query);

if (isset ($_SESSION['admin']) || isset ($_SESSION['user'])) {

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- <head>
    <meta charset="UTF-8">
    <title>Date Range Search with jQuery DatePicker using Ajax, PHP & MySQL | softAOX Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head> -->

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Database SDM</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom : 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png"  class="user-image img-responsive" height="90" width="90" style ="margin-top: -10px"/></a> 
            </div>
  <div style="color: white; /*warna tulisan admin*/
padding: 15px 50px 10px 50px;
float: right;
font-size: 14px;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Bantuan">Bantuan</button>

    <div class="modal fade" id="Bantuan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="margin-top: -13px; margin-right: -5px;font-size: 24px" aria-hidden="true"><b>&times;</b></button>
        <div class="modal-body" style="color: black;font-size: 0px">
            <h3><center><b>PANDUAN PENGGUNAAN</b></center></h3>
            <h4><b>DATA TABEL</b></h4>
                <p align=justify>&nbsp;1. <img src="assets/img/showentries.png" height="35px"> : Jika ingin menentukan jumlah tampilan data yang akan ditampilkan pada satu halaman data tabel<br/>
                &nbsp;2. <img src="assets/img/sort.png" height="35px"> : Jika akan mengurutkan data pada tabel maka pengguna dapat menggunakan fungsi ascending dan descending. Ascending <br/>
                &nbsp;3. <img src="assets/img/search.png" height="35px"> : Pengguna dapat mencari data secara efektif dengan memasukkan kata kunci data <br/>
                &nbsp;4. <img src="assets/img/previous-next.png" height="35px"> : Jika ingin memindahkan halaman tabel. Next akan memindahkan halaman dari halaman sekarang ke halaman selanjutnya, sedangkan fungsi Previous akan memindahkan dari halaman sekarang ke halaman sebelumnya <br/>
                </p>
            <h4><b>INPUT DATA</b></h4>
                <p align=justify>&nbsp;<u>1. Peserta Magang/PKL</u><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peserta Aktif : Peserta yang sedang aktif melaksanakan PKL.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/tambahpeserta.png" height="35px"> : Untuk menambahkan data peserta.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Tanggal Masuk : Tanggal mulai yang diajukan peserta.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Tanggal Keluar : Tanggal selesai yang diajukan peserta.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. ID : Nomor ID peserta, bisa berupa nomor KTP, KTM, atau SIM.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Unit : Diisi berdasarkan dimana peserta ditempatkan. Apabila belum mengetahui dengan pasti, maka <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bisa dikosongkan terlebih dahulu.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e. Berkas-Berkas : Diisi tanda check(v) apabila peserta sudah melampirkan berkas-berkas yang dibutuhkan. <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f. Foto 3x4 : Memasukkan foto peserta ke dalam sistem untuk memudahkan pembuatan Co Card. <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g. Keterangan : "Ter-Verifikasi" dipilih ketika persyaratan peserta sudah lengkap dan tanggal pelaksanaan<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;serta unit sudah ditetapkan. "Menunggu" dipilih ketika terdapat beberapa persyaratan yang belum <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lengkap dan menunggu konfirmasi dari peserta apabila ada perubahan. "Belum Fix" dipilih ketika peserta<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; belum bisa melaksanakan PKL pada waktu yang diinginkan.<br/>
                &nbsp;&nbsp;&nbsp;-<img src="assets/img/tambahunit.png" height="50px">: Untuk menambahkan penempatan/unit apa saja yang terdapat pada PT Telkom, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yogyakarta.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-<img src="assets/img/tambahinstansi.png" height="50px"> : Untuk menambahkan instansi peserta yang pernah melaksanakan PKL.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-<img src="assets/img/tambahfakultas.png" height="50px"> : Untuk menambahkan fakultas peserta yang pernah melaksanakan PKL.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-<img src="assets/img/tambahjurusan.png" height="50px"> : Untuk menambahkan jurusan peserta yang pernah melaksanakan PKL.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Kode Unit/Instansi/Fakultas/Jurusan : Digunakan sebagai ID, isi bebas asal tidak sama satu dengan yang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lain.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Kuota Unit : Diisi berdasarkan kuota masing-masing unit, memudahkan saat melakukan penempatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peserta.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daftar Peserta : Menampilkan data peserta yang sudah diinputkan sebelumya.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/edit.png" height="25px"> pada tabel pengaturan : Untuk mengedit/memperbarui data.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/hapus.png" height="28px"> pada tabel pengaturan : Untuk menghapus data.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/batal.png" height="30px"> pada Tabel Batal : Untuk peserta yang dibatalkan .<br/>
                &nbsp;<u>2. Peserta Penelitian</u><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perbedaan dengan Magang yaitu pada Judul, berisi judul penelitian yang diajukan peserta.<br/></p>
                &nbsp;<p><u>3. Peserta Kunjungan</u></br>
                &nbsp;&nbsp;&nbsp;&nbsp;- Tambah Peserta :  </br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Tanggal Kunjungan : Tanggal berlangsungnya kunjungan (1 hari).</br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. ID PJ : Nomor ID penanggung jawab kunjungan, bisa berupa nomor KTP, KTM, atau SIM.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Nama PJ : Nama lengkap penanggung jawab kunjungan (1 orang saja).<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. No HP PJ : Nomor lengkap penanggung jawab kunjungan yang dapat dihubungi.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e. Jumlah Peserta : Jumlah peserta yang akan mengikuti kunjungan.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f. Foto 3x4 : Memasukkan foto penanggung jawab kunjungan ke dalam sistem.<br/>
            </p>
            <h4><b>RIWAYAT PESERTA</b></h4>
                <p align=justify>&nbsp;&nbsp;&nbsp;Data Profil : Berisi data peserta yang diinputkan. Paling kanan terdapat tombol biru yang apabila diklik akan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;menampilkan data lengkap dari peserta.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;Detail : Menampilkan profil lengkap peserta Magang, Penelitian dan Kunjungan.<br/>
                &nbsp;&nbsp;&nbsp;Surat : Surat untuk peserta Magang/Penelitian setelah peserta sudah terverifikasi dan seluruh piahk sudah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; menyetujui.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;Filter : Menyaring data berdasarkan tanggal yang ditentukan melalui Tanggal Awal dan Tanggal Akhir.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;ExploreToExcel : Mengunduh dan menyimpan data peserta menggunakan format Ms. Excel.<br/></p>  
              <h4><b>DAFTAR UNIT</b></h4>
              <p align=justify>&nbsp;&nbsp;&nbsp;1. Tab Penempatan : </br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/tambahunitt.png" height=40px"> : Untuk menambahkan unit penempatan.<br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Daftar Penempatan/Unit : Berisi daftar unit/penempatan yang sudah tersimpan.<br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/edit.png" height="25px"> pada tabel pengaturan : Untuk mengedit/memperbarui data unit.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/hapus.png" height="28px"> pada tabel pengaturan : Untuk menghapus data unit.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;2. Tab Instansi : <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. Instansi </br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/tambahinstansii.png" height=35px"> : Untuk menambahkan Instansi dengan mengisi Kode, Nama dan Alamat.<br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Daftar Penempatan/Unit : Berisi daftar Instansi yang sudah tersimpan.<br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/edit.png" height="25px"> pada tabel pengaturan : Untuk mengedit/memperbarui data instansi.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/hapus.png" height="28px"> pada tabel pengaturan : Untuk menghapus data instansi.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b. Fakultas </br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/tambahfakultass.png" height=35px"> : Untuk menambahkan Fakultas dengan mengisi Kode, Nama/Kelas.<br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Daftar Fakultas : Berisi daftar Fakultas yang sudah tersimpan.<br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/edit.png" height="25px"> pada tabel pengaturan : Untuk mengedit/memperbarui data Fakultas.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/hapus.png" height="28px"> pada tabel pengaturan : Untuk menghapus data Fakultas.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c. Jurusan </br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/tambahjurusann.png" height=35px"> : Untuk menambahkan Instansi dengan mengisi Kode dan Nama.<br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Daftar Jurusan : Berisi daftar Jurusan yang sudah tersimpan.<br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/edit.png" height="25px"> pada tabel pengaturan : Untuk mengedit/memperbarui data Jurusan.<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <img src="assets/img/hapus.png" height="28px"> pada tabel pengaturan : Untuk menghapus data Jurusan.<br/>    

                  
              </p>         
          </div>
        </div>
      </div>
    </div>
  </div> 

<a href="logout.php" type="button" class="btn btn-danger">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                                    <li class="text-center">
                    <?php

                        if($_SESSION['admin']){
                            $user = $_SESSION['admin'];
                        }elseif ($_SESSION['user']) {
                            $user = $_SESSION['user'];
                        }

                        $sql = $koneksi->query("select * from tb_admin where id='$user'");

                        $data = $sql->fetch_assoc();

                    ?>
                    <br/>
                    <br/>
                    <img class="img-circle" src="images_admin/<?php echo $data['Foto'];?>" width="150" height="150" alt="user"/>
                    <br/>
                    <br/>
                    <br/>
                    </li>
				
					 <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit fa-2x"></i> Input Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=magang">Peserta Magang/PKL</a>
                            </li>
                            <li>
                                <a href="?page=penelitian">Peserta Penelitian</a>
                            </li>
                            <li>
                                <a href="?page=kunjungan">Peserta Kunjungan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-history fa-2x"></i> Riwayat Peserta<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=riwayatmagang">Peserta Magang/PKL</a>
                            </li>
                            <li>
                                <a href="?page=riwayatpenelitian">Peserta Penelitian</a>
                            </li>
                            <li>
                                <a href="?page=riwayatkunjungan">Peserta Kunjungan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-times fa-2x"></i> Riwayat Batal<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=batal&aksi=batalmagang">Peserta Magang/PKL</a>
                            </li>
                            <li>
                                <a href="?page=batal&aksi=batalpenelitian">Peserta Penelitian</a>
                            </li>
                            <li>
                                <a href="?page=batal&aksi=batalkunjungan">Peserta Kunjungan</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a  href="?page=daftar unit"><i class="fa fa-th-list fa-2x"></i> Daftar Unit</a>
                    </li>

                    <li>
                        <a  href="?page=daftar admin"><i class="fa fa-user fa-2x"></i> Daftar Admin</a>
                    </li>   
  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
          <div class="content-wrapper">

    </section>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                     <?php

                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];

                            if ($page == "dashboard") {
                                if ($aksi == "") {
                                    include "page/dashboard/index.php";
                                }
                            }

                            if ($page == "input data") {
                                if ($aksi == "") {
                                    include "page/input data/input data.php";
                                }
                                elseif ($aksi=="upload") {
                                    include "page/input data/uploadpeserta.php";
                                }
                                elseif ($aksi=="uploadpenelitian") {
                                    include "page/input data/uploadpenelitian.php";
                                }
                                elseif ($aksi=="uploadkunjungan") {
                                    include "page/input data/uploadkunjungan.php";
                                }
                                elseif ($aksi=="tambahmagang") {
                                    include "page/input data/tambahmagang.php";
                                }
                                elseif ($aksi=="ubahmagang") {
                                    include "page/input data/ubahmagang.php";
                                }
                                elseif ($aksi=="ubahkunjungan") {
                                    include "page/input data/ubahkunjungan.php";
                                }
                                elseif ($aksi=="hapusmagang") {
                                    include "page/input data/hapusmagang.php";
                                    }
                                elseif ($aksi=="hapuskunjungan") {
                                    include "page/input data/hapuskunjungan.php";
                                }
                                elseif ($aksi=="tambahpenelitian") {
                                    include "page/input data/tambahpenelitian.php";
                                }
                                elseif ($aksi=="ubahpenelitian") {
                                    include "page/input data/ubahpenelitian.php";
                                }
                                elseif ($aksi=="hapuspenelitian") {
                                    include "page/input data/hapuspenelitian.php";
                                }
                                elseif ($aksi=="tambahunitpenempatan") {
                                    include "page/input data/tambahunitpenempatan.php";
                                }
                                elseif ($aksi=="tambahunitinstansi") {
                                    include "page/input data/tambahunitinstansi.php";
                                }
                                elseif ($aksi=="tambahunitfakultas") {
                                    include "page/input data/tambahunitfakultas.php";
                                }
                                elseif ($aksi=="tambahunitjurusan") {
                                    include "page/input data/tambahunitjurusan.php";
                                }
                                elseif ($aksi=="tambahunitinstansi1") {
                                    include "page/input data/tambahunitinstansi1.php";
                                }
                                elseif ($aksi=="tambahunitfakultas1") {
                                    include "page/input data/tambahunitfakultas1.php";
                                }
                                elseif ($aksi=="tambahunitjurusan1") {
                                    include "page/input data/tambahunitjurusan1.php";
                                }
                                elseif ($aksi=="batalmagang") {
                                    include "page/input data/batalmagang.php";
                                }
                                elseif ($aksi=="batalpenelitian") {
                                    include "page/input data/batalpenelitian.php";
                                }
                                elseif ($aksi=="batalkunjungan") {
                                    include "page/input data/batalkunjungan.php";
                                }
                            }
                            elseif ($page == "riwayat peserta") {
                                if ($aksi == "") {
                                    include "page/riwayat peserta/riwayat peserta.php";
                                }
                                elseif ($aksi == "profilmagang") {
                                    include "page/riwayat peserta/profilmagang.php";
                                }
                                elseif ($aksi == "profilpenelitian") {
                                    include "page/riwayat peserta/profilpenelitian.php";
                                }
                                elseif ($aksi == "profilkunjungan") {
                                    include "page/riwayat peserta/profilkunjungan.php";
                                }
                                elseif ($aksi == "filter") {
                                    include "page/riwayat peserta/riwayatfilter.php";
                                }
                            }
                            elseif ($page == "batal") {
                                if ($aksi == "batalmagang") {
                                    include "page/batal/batalmagang.php";
                                }
                                elseif ($aksi == "batalpenelitian") {
                                    include "page/batal/batalpenelitian.php";
                                }
                                elseif ($aksi == "batalkunjungan") {
                                    include "page/batal/batalkunjungan.php";
                                }
                                elseif ($aksi == "batalmagangfilter") {
                                    include "page/batal/batalmagangfilter.php";
                                }
                                elseif ($aksi == "batalpenelitianfilter") {
                                    include "page/batal/batalpenelitianfilter.php";
                                }
                                elseif ($aksi == "batalkunjunganfilter") {
                                    include "page/batal/batalkunjunganfilter.php";
                                }
                                elseif ($aksi == "profilbatalmagang") {
                                    include "page/batal/profilbatalmagang.php";
                                }
                                elseif ($aksi == "profilbatalpenelitian") {
                                    include "page/batal/profilbatalpenelitian.php";
                                }
                                elseif ($aksi == "profilbatalkunjungan") {
                                    include "page/batal/profilbatalkunjungan.php";
                                }
                            }
                            elseif ($page == "daftar unit") {
                                if ($aksi == "") {
                                    include "page/daftar unit/daftar unit.php";
                                }
                                elseif ($aksi == "tambahpenempatan") {
                                   include "page/daftar unit/tambahpenempatan.php";
                                }
                                elseif ($aksi == "ubahpenempatan") {
                                   include "page/daftar unit/ubahpenempatan.php";
                                }
                                elseif ($aksi == "hapuspenempatan") {
                                   include "page/daftar unit/hapuspenempatan.php";
                                }
                                elseif ($aksi == "tambahinstansi") {
                                   include "page/daftar unit/tambahinstansi.php";
                                }
                                elseif ($aksi == "ubahinstansi") {
                                   include "page/daftar unit/ubahinstansi.php";
                                }
                                elseif ($aksi == "hapusinstansi") {
                                   include "page/daftar unit/hapusinstansi.php";
                                }
                                elseif ($aksi == "tambahfakultas") {
                                   include "page/daftar unit/tambahfakultas.php";
                                }
                                elseif ($aksi == "ubahfakultas") {
                                   include "page/daftar unit/ubahfakultas.php";
                                }
                                elseif ($aksi == "hapusfakultas") {
                                   include "page/daftar unit/hapusfakultas.php";
                                }
                                elseif ($aksi == "tambahjurusan") {
                                   include "page/daftar unit/tambahjurusan.php";
                                }
                                elseif ($aksi == "ubahjurusan") {
                                   include "page/daftar unit/ubahjurusan.php";
                                }
                                elseif ($aksi == "hapusjurusan") {
                                   include "page/daftar unit/hapusjurusan.php";
                                }
                            }
                            elseif ($page == "daftar admin") {
                                if ($aksi == "") {
                                    include "page/daftar admin/daftar admin.php";
                                }
                                elseif ($aksi == "tambahadmin") {
                                   include "page/daftar admin/tambahadmin.php";
                                }
                                elseif ($aksi == "ubahadmin") {
                                   include "page/daftar admin/ubahadmin.php";
                                }
                                elseif ($aksi == "hapusadmin") {
                                   include "page/daftar admin/hapusadmin.php";
                                }
                            }
                            elseif ($page == "magang") {
                                if ($saksi == "") {
                                    include "page/input data/tambahmagang.php";
                                }
                            }
                            elseif ($page == "penelitian") {
                                if ($saksi == "") {
                                    include "page/input data/tambahpenelitian.php";
                                }
                            }
                            elseif ($page == "riwayatmagang") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatmagang.php";
                                }
                            } 
                            elseif ($page == "riwayatmagangfilter") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatmagangfilter.php";
                                }
                            } 
                            elseif ($page == "riwayatpenelitian") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatpenelitian.php";
                                }
                            } 
                            elseif ($page == "riwayatpenelitianfilter") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatpenelitianfilter.php";
                                }
                            }
                            elseif ($page == "riwayatkunjungan") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatkunjungan.php";
                                }
                            }
                            elseif ($page == "riwayatkunjunganfilter") {
                                if ($saksi == "") {
                                    include "page/riwayat peserta/riwayatkunjunganfilter.php";
                                }
                            }
                            elseif ($page == "") {                                
                                    include "home.php";
                            }
                            elseif ($page == "kunjungan") {                                
                                    include "page/input data/tambahkunjungan.php";
                            }          
                     ?>


                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->

    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-magang').dataTable();
                $('#dataTables-penelitian').dataTable();
                $('#dataTables-penempatan').dataTable();
                $('#dataTables-instansi').dataTable();
                $('#dataTables-fakultas').dataTable();
                $('#dataTables-jurusan').dataTable();
                $('#dataTables-magang1').dataTable();
                $('#dataTables-penelitian1').dataTable();
                $('#dataTables-riwayatmagang').dataTable();
                $('#dataTables-riwayatpenelitian').dataTable();
                $('#dataTables-magangaktif').dataTable();
                $('#dataTables-penelitianaktif').dataTable();
                $('#dataTables-pkldash').dataTable();
                $('#dataTables-penelitiandash').dataTable();
                $('#dataTables-kunjunganaktif').dataTable();
                $('#dataTables-kunjungan').dataTable();
            });
    </script>
         <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script type ="text/javascript">
        new Morris.Bar({
                element: 'bar',
                /*var graphData= [
                {mapname: 'Magang/PKL', value: <?php echo $total_magang[$i];?>, count: <?php echo $total_magang[$i];?>},
                {mapname: 'Penelitian', value: <?php echo $total_penelitian[$i];?>, count: <?php echo $total_penelitian[$i];?>},
                {mapname: 'Kunjungan', value: <?php echo $total_kunjungan[$i];?>, count: <?php echo $total_kunjungan[$i];?>}
                ],*/
                data: [
                <?php
                for ($i=0; $i < $jumlah ; $i++) {  ?>
                    {
                    y: '<?php echo $tahun[$i];?>',
                    a: <?php echo $total_magang[$i];?>,
                    b: <?php echo $total_penelitian[$i];?>,
                    c: <?php echo $total_kunjungan[$i];?>
                    },
                <?php } ?>
                /*{
                    y: '2018',
                    a: <?php echo $totalmagang18;?>,
                    b: <?php echo $totalpenelitian18;?>
                },*//*, {
                    y: '2019',
                    a: <?php echo $totalmagang19;?>,
                    b: <?php echo $totalpenelitian19;?>
                }, {
                    y: '2019',
                    a: <?php echo $totalmagang19;?>,
                    b: <?php echo $totalpenelitian19;?>
                }*/],                
                xkey: 'y',
                ykeys: ['a','b','c'],
                labels: ['<strong>Magang/PKL</strong>', '<strong>Penelitian</strong>', '<strong>Kunjungan</strong>'],
                hideHover: false,
                resize: true
            });
        </script>

        <script type="text/javascript">
        new Morris.Donut({
                element: 'donutMagang',
                data: [
                <?php
                for ($i=0; $i < $jumlah2 ; $i++) {  ?>
                    {
                    label: '<?php echo $instansi[$i];?>',
                    value: <?php echo $total_instansi[$i];?>                    
                    },
                <?php } ?>

                {
                    /*label: "Universitas Gadjah Mada",
                    value: <?php echo $totalinstansi;?>
                }, {
                    label: "Universitas Negeri Yogyakarta",
                    value: <?php echo $totalinstansi2;?>
                }, {
                    label: "Universitas Muhammadiyah Yogyakarta",
                    value: <?php echo $totalinstansi3;?>
                }, {
                    label: "Universitas Islam Indonesia",
                    value: <?php echo $totalinstansi4;?>*/
                }],
                resize: true
            });

        </script>  

        <script type="text/javascript">
        new Morris.Donut({
                element: 'donutpenelitian',
                data: [
                /*<?php
                for ($i=0; $i < $jumlah2 ; $i++) {  ?>
                    {
                    label: '<?php echo $instansi[$i];?>',
                    value: <?php echo $total_instansi[$i];?>                    
                    },
                <?php } ?>*/

                {
                    label: "Universitas Gadjah Mada",
                    value: <?php echo $totalinstansia;?>
                }, {
                    label: "Universitas Negeri Yogyakarta",
                    value: <?php echo $totalinstansib;?>
                }, {
                    label: "Universitas Muhammadiyah Yogyakarta",
                    value: <?php echo $totalinstansic;?>
                }, {
                    label: "Universitas Islam Indonesia",
                    value: <?php echo $totalinstansid;?>
                }],
                resize: true
            });

        </script>       
</body>
</html>
<?php

    }else{
        header("location:login.php");
    }
?>


