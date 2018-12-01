-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 08:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_websdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ID` int(50) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `Level` varchar(200) NOT NULL,
  `Foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`ID`, `Username`, `Password`, `Nama`, `Level`, `Foto`) VALUES
(123, 'admin', 'admin', 'admin', 'admin', 'Tri leksana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_batalkunjungan`
--

CREATE TABLE `tb_batalkunjungan` (
  `TanggalKunjungan` date NOT NULL,
  `ID` int(11) NOT NULL,
  `NamaPJ` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_HPPJ` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Berkas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_batalmagang`
--

CREATE TABLE `tb_batalmagang` (
  `TanggalMasuk` date NOT NULL,
  `TanggalKeluar` date NOT NULL,
  `ID` int(20) NOT NULL,
  `Nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_HP` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fakultas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Berkas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_batalmagang`
--

INSERT INTO `tb_batalmagang` (`TanggalMasuk`, `TanggalKeluar`, `ID`, `Nama`, `TTL`, `Alamat`, `Email`, `No_HP`, `Instansi`, `Fakultas`, `Jurusan`, `Unit`, `Berkas`, `Foto`, `Keterangan`) VALUES
('2018-12-17', '2019-03-09', 380035, 'Dimas Fajar Nugroho', 'Bantul', 'Bantul', 'smeanbtl@yahoo.com', '081329288763', 'SMK Negeri 1 Bantul', 'Kelas 11', 'Teknik Komputer Jaringan (TKJ)', 'Kandatel Bantul', 'Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi'),
('2018-12-17', '2019-03-09', 380036, 'Muhammad Latif Prasetyo', 'Bantul', 'Bantul', 'smeanbtl@yahoo.com', '081329288763', 'SMK Negeri 1 Bantul', 'Kelas 11', 'Teknik Komputer Jaringan (TKJ)', 'Kandatel Bantul', 'Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi'),
('2018-12-17', '2019-03-09', 380037, 'Risang Agung Kurniawan', 'Bantul', 'Bantul', 'smeanbtl@yahoo.com', '081329288763', 'SMK Negeri 1 Bantul', 'Kelas 11', 'Teknik Komputer Jaringan (TKJ)', 'Kandatel Bantul', 'Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi'),
('2018-12-17', '2019-03-09', 380038, 'Rizal Fathoni', 'Bantul', 'Bantul', 'smeanbtl@yahoo.com', '081329288763', 'SMK Negeri 1 Bantul', 'Kelas 11', 'Teknik Komputer Jaringan (TKJ)', 'Kandatel Bantul', 'Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi'),
('2018-10-15', '2018-11-30', 380039, 'Thufaila Khansa Naura', 'Yogyakarta', 'JEC', 'thufellanaura@gmail.com', '082322522532', 'Universitas Gadjah Mada', 'Fakultas Teknik', 'Teknik Informatika', 'Network Area & IS Operation Support', 'KTP, KTM, Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_batalpenelitian`
--

CREATE TABLE `tb_batalpenelitian` (
  `TanggalMasuk1` date NOT NULL,
  `TanggalKeluar1` date NOT NULL,
  `ID1` int(20) NOT NULL,
  `Nama1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat1` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_HP1` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fakultas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `JudulPenelitian` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Berkas1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `kode_fakultas` int(20) NOT NULL,
  `nama_fakultas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`kode_fakultas`, `nama_fakultas`) VALUES
(1, 'Kelas 10'),
(2, 'Kelas 11'),
(3, 'Kelas 12'),
(4, 'Fakultas Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_input`
--

CREATE TABLE `tb_input` (
  `TanggalMasuk` date NOT NULL,
  `TanggalKeluar` date NOT NULL,
  `ID` int(20) NOT NULL,
  `Nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_HP` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fakultas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Berkas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_input`
--

INSERT INTO `tb_input` (`TanggalMasuk`, `TanggalKeluar`, `ID`, `Nama`, `TTL`, `Alamat`, `Email`, `No_HP`, `Instansi`, `Fakultas`, `Jurusan`, `Unit`, `Berkas`, `Foto`, `Keterangan`) VALUES
('2018-12-17', '2019-03-09', 13929, 'Dimas Fajar Nugroho', 'Bantul', 'Bantul', 'smeanbtl@yahoo.com', '081329288763', 'SMK Negeri 1 Bantul', 'Kelas 11', 'Teknik Komputer Jaringan (TKJ)', 'Kandatel Bantul', 'Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi'),
('2018-12-17', '2019-03-09', 13948, 'Muhammad Latif Prasetyo', 'Bantul', 'Bantul', 'smeanbtl@yahoo.com', '081329288763', 'SMK Negeri 1 Bantul', 'Kelas 11', 'Teknik Komputer Jaringan (TKJ)', 'Kandatel Bantul', 'Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi'),
('2018-12-17', '2019-03-09', 13978, 'Risang Agung Kurniawan', 'Bantul', 'Bantul', 'smeanbtl@yahoo.com', '081329288763', 'SMK Negeri 1 Bantul', 'Kelas 11', 'Teknik Komputer Jaringan (TKJ)', 'Kandatel Bantul', 'Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi'),
('2018-12-17', '2019-03-09', 13980, 'Rizal Fathoni', 'Bantul', 'Bantul', 'smeanbtl@yahoo.com', '081329288763', 'SMK Negeri 1 Bantul', 'Kelas 11', 'Teknik Komputer Jaringan (TKJ)', 'Kandatel Bantul', 'Surat Permohonan', 'sonia.jpg', 'Ter-Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inputpenelitian`
--

CREATE TABLE `tb_inputpenelitian` (
  `TanggalMasuk1` date NOT NULL,
  `TanggalKeluar1` date NOT NULL,
  `ID1` int(20) NOT NULL,
  `Nama1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TTL1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat1` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_HP1` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fakultas` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `JudulPenelitian` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Berkas1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `kode_instansi` int(20) NOT NULL,
  `nama_instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_instansi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_instansi`
--

INSERT INTO `tb_instansi` (`kode_instansi`, `nama_instansi`, `alamat_instansi`) VALUES
(1, 'Universitas Gadjah Mada', 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281'),
(2, 'Universitas Negeri Yogyakarta', 'Jl. Colombo No.1, Karang Malang, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281'),
(3, 'Universitas Muhammadiyah Yogyakarta', 'Jl. Brawijaya, Geblagan, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55183'),
(4, 'Universitas Islam Indonesia', 'Jalan Kaliurang Km. 14,5, Yogyakarta, Krawitan, Umbulmartani, Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584'),
(5, 'Universitas Pembangunan Nasional', 'Jl. SWK 104 (Lingkar Utara), Condongcatur, Yogyakarta'),
(6, 'Universitas Ahmad Dahlan', 'Jl. Kapas No.9, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta'),
(7, 'Universitas Islam Negeri (UIN) Sunan Kalijaga Yogyakarta', 'Jalan Laksda Adisucipto, Caturtunggal, Depok, Papringan, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta'),
(8, 'Universitas Mercu Buana Yogyakarta', 'Jl. Wates Km. 10 Yogyakarta'),
(9, 'Universitas Kristen Duta Wacana', 'Jl. Dr. Wahidin Sudirohusodo No.5 – 25, Kotabaru, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta'),
(10, 'Sekolah Tinggi Teknologi Telematika Telkom Purwokerto', 'Jl. D. I. Panjaitan No. 128, Purwokerto Kidul, Purwokerto Selatan, Karangreja, Purwokerto Kidul, Purwokerto Sel., Purwokerto, Jawa Tengah'),
(11, 'Telkom University Bandung', 'Jl. Telekomunikasi, Jl. Terusan Buah Batu No.01, Sukapura, Dayeuhkolot, Bandung, Jawa Barat'),
(12, 'Universitas Muhammadiyah Magelang', 'Jl. Tidar No.21, Magersari, Magelang Sel., Kota Magelang, Jawa Tengah'),
(13, 'Universitas Sebelas Maret', 'Jl. Ir. Sutami No.36A, Jebres, Kota Surakarta, Jawa Tengah '),
(14, 'Universitas Brawijaya', 'Jalan Veteran, Ketawanggede, Lowokwaru, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145'),
(15, 'SMK Telkom Makassar', 'Jalan A. P. Pettarani No.4, Gunung Sari, Rappocini, Tidung, Gn. Sari, Rappocini, Kota Makassar, Sulawesi Selatan'),
(16, 'SMK Telkom Banjarbaru', 'Jl. Pangeran Suriansyah No.3, Loktabat Utara, Banjar Baru Utara, Kota Banjar Baru, Kalimantan Selatan'),
(17, 'SMK Telkom Purwokerto', 'Jl. D.I. Panjaitan, Karangreja, Purwokerto Kidul, Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah'),
(18, 'SMK Negeri 1 Bantul', 'Jl. Parangtritis Km 11 Sabdodadi Bantul Bantul Daerah Istimewa Yogyakarta, Dukuh, Sabdodadi, Kec. Bantul, Bantul, Daerah Istimewa Yogyakarta 55715'),
(19, 'SMK Telekomunikasi Tunas Harapan Semarang', 'Jl. Makam Kebo Kanigoro No.1/3, Kadipurwo, Bener, Tengaran, Semarang, Jawa Tengah'),
(20, 'SMK Negeri Pancatengah', 'Jayamukti, Pancatengah, Tasikmalaya, Jawa Barat 46194'),
(21, 'SMK Telekomunikasi Tunas Harapan Salatiga', 'Jl. Umbul Senjoyo I 3 RT 013/05, Salatiga'),
(22, 'Universitas Teknologi Yogyakarta', 'Jalan Ringroad Utara, Jombor, Sendangadi, Mlati, Mlati Krajan, Sendangadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285'),
(23, 'Universitas Atma Jaya Yogyakarta', 'Jl. Babarsari No.44, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281'),
(24, 'Universitas Wiralodra Indramayu', 'Jl. Ir. H Juanda KM. 03, Karanganyar, Indramayu, Karanganyar, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45213'),
(25, 'STTNAS – Sekolah Tinggi Teknologi Nasional Yogyakarta', 'Jalan Babarsari 1, Caturtunggal, Depok, Sleman, Yogyakarta 55281'),
(26, 'SMK PIRI 1 Yogyakarta', 'Jl. Kemuning No.14, Baciro, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55225'),
(27, 'SMKN 1 Sewon Bantul', 'JL. Parangtritis, Rogoitan, Timbulharjo, Kec. Bantul, Bantul, Daerah Istimewa Yogyakarta 55188'),
(28, 'SMK Negeri 2 Sewon', 'Jalan Parangtritis, Kowen I, Timbulharjo, Sewon, Bantul, Daerah Istimewa Yogyakarta 55186'),
(29, 'SMK Negeri 1 Seyegan', 'Jalan Kebonagung, KM. 8,5, Margomulyo, Seyegan, Mriyan, Margomulyo, Seyegan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55561'),
(30, 'SMKN 1 Tinambung', 'Batulaya, Tinambung, Polewali Mandar Regency, West Sulawesi 91412'),
(31, 'SMK Cokroaminoto Pandak', 'Gesikan I, Wijirejo, Pandak, Bantul, Daerah Istimewa Yogyakarta'),
(32, 'SMK Negeri 1 Nanggulan', 'Jl. Gadjah Mada Wijimulyo Daerah Istimewa Yogyakarta, Nanggulan, Sotan, Wijimulyo, Nanggulan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55671');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `kode_jurusan` int(20) NOT NULL,
  `nama_jurusan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
(1, 'Manajemen'),
(2, 'Teknik Informatika'),
(3, 'Ilmu Komunikasi'),
(4, 'Teknik Komputer Jaringan (TKJ)'),
(5, 'Hukum'),
(6, 'Akuntansi'),
(7, 'Teknik Elektro');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kunjungan`
--

CREATE TABLE `tb_kunjungan` (
  `TanggalKunjungan` date NOT NULL,
  `ID` int(11) NOT NULL,
  `NamaPJ` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_HPPJ` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jumlah` int(5) NOT NULL,
  `Berkas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penempatan`
--

CREATE TABLE `tb_penempatan` (
  `kode_penempatan` int(20) NOT NULL,
  `nama_penempatan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuota_penempatan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penempatan`
--

INSERT INTO `tb_penempatan` (`kode_penempatan`, `nama_penempatan`, `kuota_penempatan`) VALUES
(1, 'Wholesale Access Network', 0),
(2, 'War Room', 0),
(3, 'SAS', 0),
(4, 'payment Collection', 0),
(5, 'Network Area & IS Operation Support', 4),
(6, 'Logistik & General Support', 2),
(7, 'Kandatel Sleman', 6),
(8, 'Kandatel Bantul', 6),
(9, 'Human Resource (HR)', 2),
(10, 'CDC', 1),
(11, 'Home Service', 6),
(12, 'Govt & Enterprise Service', 0),
(13, 'Finance', 0),
(14, 'Digital Service & Wi-Fi', 4),
(15, 'Customer Care', 6),
(16, 'CCAN', 2),
(17, 'Business Service', 6),
(18, 'Access Optima & Construction SPV', 5),
(19, 'Access Maintanance & QE', 2),
(20, 'Access & Service Operation', 2),
(21, 'Sekretariat', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_batalkunjungan`
--
ALTER TABLE `tb_batalkunjungan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_batalmagang`
--
ALTER TABLE `tb_batalmagang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_batalpenelitian`
--
ALTER TABLE `tb_batalpenelitian`
  ADD PRIMARY KEY (`ID1`);

--
-- Indexes for table `tb_input`
--
ALTER TABLE `tb_input`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_inputpenelitian`
--
ALTER TABLE `tb_inputpenelitian`
  ADD PRIMARY KEY (`ID1`);

--
-- Indexes for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`kode_instansi`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_penempatan`
--
ALTER TABLE `tb_penempatan`
  ADD PRIMARY KEY (`kode_penempatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tb_batalkunjungan`
--
ALTER TABLE `tb_batalkunjungan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_batalmagang`
--
ALTER TABLE `tb_batalmagang`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380040;

--
-- AUTO_INCREMENT for table `tb_batalpenelitian`
--
ALTER TABLE `tb_batalpenelitian`
  MODIFY `ID1` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_input`
--
ALTER TABLE `tb_input`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13981;

--
-- AUTO_INCREMENT for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `kode_instansi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `kode_jurusan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penempatan`
--
ALTER TABLE `tb_penempatan`
  MODIFY `kode_penempatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
