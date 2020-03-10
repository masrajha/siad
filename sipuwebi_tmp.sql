-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2020 at 10:33 AM
-- Server version: 5.7.29-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipuwebi_tmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_kelurahan`
--

CREATE TABLE `tbl_admin_kelurahan` (
  `id_admin` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_kelurahan`
--

INSERT INTO `tbl_admin_kelurahan` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Agung H', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_rt`
--

CREATE TABLE `tbl_admin_rt` (
  `id_admin_rt` int(6) NOT NULL,
  `nama_rt` varchar(50) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_rt` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_rt`
--

INSERT INTO `tbl_admin_rt` (`id_admin_rt`, `nama_rt`, `username`, `password`, `id_rt`) VALUES
(1, 'AbdiGusti', '181005200895006', '827ccb0eea8a706c4c34a16891f84e7b', 12),
(4, 'Sarjono', '1810050206790002', '827ccb0eea8a706c4c34a16891f84e7b', 13),
(5, 'Mulyadi', '1810052405690001', '827ccb0eea8a706c4c34a16891f84e7b', 10),
(6, 'Yeye Af', '1810052602850005', '827ccb0eea8a706c4c34a16891f84e7b', 8),
(7, 'Feri Irawan', '1810050306780003', '827ccb0eea8a706c4c34a16891f84e7b', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailkk`
--

CREATE TABLE `tbl_detailkk` (
  `id_detailkk` int(6) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nik` char(16) NOT NULL,
  `status_hubungan` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_kk`
--

CREATE TABLE `tbl_form_kk` (
  `id_form_kk` int(6) NOT NULL,
  `nik` char(16) NOT NULL DEFAULT '0',
  `nama_kk` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `agama` char(10) NOT NULL,
  `jk` char(1) NOT NULL,
  `golongan_darah` char(2) NOT NULL,
  `kebangsaan` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `id_rt` int(6) NOT NULL,
  `id_rw` int(6) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `verif_rt` char(1) NOT NULL,
  `verif_admin` char(1) NOT NULL,
  `verif_lurah` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_form_kk`
--

INSERT INTO `tbl_form_kk` (`id_form_kk`, `nik`, `nama_kk`, `alamat`, `tgl_lahir`, `tempat_lahir`, `agama`, `jk`, `golongan_darah`, `kebangsaan`, `pekerjaan`, `pendidikan`, `status_pernikahan`, `nama_ayah`, `nama_ibu`, `id_rt`, `id_rw`, `tgl_pengajuan`, `verif_rt`, `verif_admin`, `verif_lurah`) VALUES
(6, '1810091105900001', 'Nasir', 'Jln.Merdeka', '1990-11-05', 'pamenang', 'islam', 'l', '', 'WNI', 'perdagangan', 'tamat sd', 'kawin', '', '', 8, 23, '2019-04-28', 'Y', 'Y', 'Y'),
(7, '1801070905990013', 'ginanjar', 'umbul kates', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 8, 23, '2019-11-29', 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_ktp`
--

CREATE TABLE `tbl_form_ktp` (
  `id_form_ktp` int(6) NOT NULL,
  `nik` char(16) NOT NULL DEFAULT '0',
  `nama_kk` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `agama` char(10) NOT NULL,
  `jk` char(1) NOT NULL,
  `golongan_darah` char(2) NOT NULL,
  `kebangsaan` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `id_rt` int(6) NOT NULL,
  `id_rw` int(6) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `verif_rt` char(1) NOT NULL,
  `verif_admin` char(1) NOT NULL,
  `verif_lurah` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id_informasi` int(10) NOT NULL,
  `judul_informasi` text NOT NULL,
  `jenis_informasi` varchar(50) NOT NULL,
  `isi_informasi` text NOT NULL,
  `tgl_informasi` datetime NOT NULL,
  `gambar_informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_kelahiran` int(6) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jk` char(1) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `verif_rt` char(1) NOT NULL,
  `verif_admin` char(1) NOT NULL,
  `verif_lurah` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id_kematian` int(6) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jk` char(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `tgl_kematian` date NOT NULL,
  `tempat_kematian` varchar(50) NOT NULL,
  `penyebab` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `verif_rt` char(1) NOT NULL,
  `verif_admin` char(1) NOT NULL,
  `verif_lurah` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kematian`
--

INSERT INTO `tbl_kematian` (`id_kematian`, `nik`, `nama`, `alamat`, `id_rw`, `id_rt`, `tempat_lahir`, `tgl_lahir`, `agama`, `jk`, `pekerjaan`, `tgl_kematian`, `tempat_kematian`, `penyebab`, `tgl_pengajuan`, `verif_rt`, `verif_admin`, `verif_lurah`) VALUES
(1, '1810050201460002', 'martak', 'Fajar Baru 4', 23, 8, 'banyumas', '1946-02-01', 'islam', 'L', 'buruh tani/perkebunan', '2019-07-15', 'Fajar Baru', 'Sakit', '2019-07-17', 'Y', 'Y', 'Y'),
(3, '1810052703680001', 'Cik Han', 'Fajar Baru RT/RW 001/005', 27, 14, 'Fajar Baru', '1968-03-27', 'Islam', 'L', 'Petani/Pekebun', '2018-03-31', 'Fajar Baru', 'Sakit', '2019-07-20', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketbelumnikah`
--

CREATE TABLE `tbl_ketbelumnikah` (
  `id` int(11) NOT NULL,
  `nik` char(16) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `id_rw` int(11) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `verif_rt` char(1) DEFAULT NULL,
  `verif_admin` char(1) DEFAULT NULL,
  `verif_lurah` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ketbelumnikah`
--

INSERT INTO `tbl_ketbelumnikah` (`id`, `nik`, `nama`, `alamat`, `id_rw`, `id_rt`, `tempat_lahir`, `tgl_lahir`, `agama`, `jk`, `pekerjaan`, `tgl_pengajuan`, `verif_rt`, `verif_admin`, `verif_lurah`) VALUES
(4, '1810054203700003', 'itawati', 'Fajar Baru', 23, 8, 'fajar baru', '1970-02-03', 'islam', 'p', 'mengurus rumah tangg', '2019-04-29', 'Y', 'Y', 'Y'),
(6, '1810053012770004', 'Hartono', 'Fajar Baru RT/RW 001/005', 27, 14, 'Minanga', '1977-12-30', 'Islam', 'L', 'Petani/Pekebun', '2019-07-20', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketdomisili`
--

CREATE TABLE `tbl_ketdomisili` (
  `id_domisili` int(6) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `verif_rt` char(1) NOT NULL,
  `verif_admin` char(1) NOT NULL,
  `verif_lurah` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kethibah`
--

CREATE TABLE `tbl_kethibah` (
  `id_kethibah` int(11) NOT NULL,
  `nik` char(18) DEFAULT NULL,
  `nama1` varchar(50) DEFAULT NULL,
  `umur1` int(11) DEFAULT NULL,
  `pekerjaan1` varchar(50) DEFAULT NULL,
  `alamat1` varchar(100) DEFAULT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `umur2` int(11) DEFAULT NULL,
  `pekerjaan2` varchar(50) DEFAULT NULL,
  `alamat2` varchar(100) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `brg_hibah` tinytext,
  `id_rw` int(11) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `luas` varchar(50) DEFAULT NULL,
  `u_timur` varchar(50) DEFAULT NULL,
  `u_barat` varchar(50) DEFAULT NULL,
  `u_selatan` varchar(50) DEFAULT NULL,
  `u_utara` varchar(50) DEFAULT NULL,
  `b_timur` varchar(100) DEFAULT NULL,
  `b_barat` varchar(100) DEFAULT NULL,
  `b_selatan` varchar(100) DEFAULT NULL,
  `b_utara` varchar(100) DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL,
  `verif_rt` char(1) DEFAULT NULL,
  `verif_admin` char(1) DEFAULT NULL,
  `verif_lurah` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketjualbeli`
--

CREATE TABLE `tbl_ketjualbeli` (
  `id_ketjualbeli` int(11) NOT NULL,
  `nik` char(18) DEFAULT NULL,
  `nama1` varchar(50) DEFAULT NULL,
  `umur1` int(11) DEFAULT NULL,
  `pekerjaan1` varchar(50) DEFAULT NULL,
  `alamat1` varchar(50) DEFAULT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `umur2` varchar(50) DEFAULT NULL,
  `pekerjaan2` varchar(50) DEFAULT NULL,
  `alamat2` varchar(50) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `id_rw` int(11) DEFAULT NULL,
  `dijual` varchar(100) DEFAULT NULL,
  `nominal` char(50) DEFAULT NULL,
  `timur` varchar(50) DEFAULT NULL,
  `barat` varchar(50) DEFAULT NULL,
  `selatan` varchar(50) DEFAULT NULL,
  `utara` varchar(50) DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL,
  `verif_rt` char(1) DEFAULT NULL,
  `verif_admin` char(1) DEFAULT NULL,
  `verif_lurah` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketsudahmenikah`
--

CREATE TABLE `tbl_ketsudahmenikah` (
  `id` int(6) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `nama_perempuan` varchar(50) NOT NULL,
  `alamat_perempuan` varchar(100) NOT NULL,
  `tgl_lahirperempuan` date NOT NULL,
  `tempat_lahirperempuan` varchar(100) NOT NULL,
  `agamaperempuan` varchar(20) NOT NULL,
  `pekerjaanperempuan` varchar(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `verif_rt` char(1) NOT NULL,
  `verif_admin` char(1) NOT NULL,
  `verif_lurah` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kettidakmampu`
--

CREATE TABLE `tbl_kettidakmampu` (
  `id` int(11) NOT NULL,
  `nik` char(16) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `id_rw` int(11) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `verif_rt` char(1) DEFAULT NULL,
  `verif_admin` char(1) DEFAULT NULL,
  `verif_lurah` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketwaris`
--

CREATE TABLE `tbl_ketwaris` (
  `id_ketwaris` int(11) NOT NULL,
  `nik` char(18) NOT NULL,
  `nama1` varchar(50) DEFAULT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `brg_waris` varchar(50) DEFAULT NULL,
  `id_rw` int(11) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `luas` varchar(50) DEFAULT NULL,
  `b_timur` varchar(50) DEFAULT NULL,
  `b_barat` varchar(50) DEFAULT NULL,
  `b_selatan` varchar(50) DEFAULT NULL,
  `b_utara` varchar(50) DEFAULT NULL,
  `namalain` tinytext,
  `saksi` tinytext,
  `tgl_buat` date DEFAULT NULL,
  `verif_rt` char(50) DEFAULT NULL,
  `verif_admin` char(50) DEFAULT NULL,
  `verif_lurah` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `id_kk` int(6) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nik` char(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status_hubungan` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `kodepos` char(6) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `provinsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `saran` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lurah`
--

CREATE TABLE `tbl_lurah` (
  `id_lurah` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lurah`
--

INSERT INTO `tbl_lurah` (`id_lurah`, `nama`, `username`, `password`) VALUES
(1, 'Arjuna', 'lurah', '04960f28e4129aac5bdc9da32056560d');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id_notif` int(11) NOT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `link_rt` varchar(50) DEFAULT NULL,
  `link_all` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id_penduduk` int(6) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jk` char(1) NOT NULL,
  `agama` char(10) NOT NULL,
  `golongan_darah` char(2) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `kebangsaan` char(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `id_rt` int(6) NOT NULL,
  `id_rw` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rt`
--

CREATE TABLE `tbl_rt` (
  `id_rt` int(6) NOT NULL,
  `nama_rt` varchar(50) NOT NULL,
  `id_rw` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rw`
--

CREATE TABLE `tbl_rw` (
  `id_rw` int(6) NOT NULL,
  `nama_rw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rw`
--

INSERT INTO `tbl_rw` (`id_rw`, `nama_rw`) VALUES
(23, '001'),
(24, '002'),
(25, '003'),
(26, '004'),
(27, '005');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suratizin`
--

CREATE TABLE `tbl_suratizin` (
  `id_suratizin` int(6) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `alamat_usaha` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `gambar_usaha` text NOT NULL,
  `status_admin` char(2) NOT NULL,
  `status_lurah` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_kelurahan`
--
ALTER TABLE `tbl_admin_kelurahan`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_admin_rt`
--
ALTER TABLE `tbl_admin_rt`
  ADD PRIMARY KEY (`id_admin_rt`);

--
-- Indexes for table `tbl_detailkk`
--
ALTER TABLE `tbl_detailkk`
  ADD PRIMARY KEY (`id_detailkk`);

--
-- Indexes for table `tbl_form_kk`
--
ALTER TABLE `tbl_form_kk`
  ADD PRIMARY KEY (`id_form_kk`);

--
-- Indexes for table `tbl_form_ktp`
--
ALTER TABLE `tbl_form_ktp`
  ADD PRIMARY KEY (`id_form_ktp`);

--
-- Indexes for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`),
  ADD UNIQUE KEY `nik` (`no_kk`);

--
-- Indexes for table `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `tbl_ketbelumnikah`
--
ALTER TABLE `tbl_ketbelumnikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ketdomisili`
--
ALTER TABLE `tbl_ketdomisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indexes for table `tbl_kethibah`
--
ALTER TABLE `tbl_kethibah`
  ADD PRIMARY KEY (`id_kethibah`);

--
-- Indexes for table `tbl_ketjualbeli`
--
ALTER TABLE `tbl_ketjualbeli`
  ADD PRIMARY KEY (`id_ketjualbeli`);

--
-- Indexes for table `tbl_ketsudahmenikah`
--
ALTER TABLE `tbl_ketsudahmenikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kettidakmampu`
--
ALTER TABLE `tbl_kettidakmampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ketwaris`
--
ALTER TABLE `tbl_ketwaris`
  ADD PRIMARY KEY (`id_ketwaris`);

--
-- Indexes for table `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_lurah`
--
ALTER TABLE `tbl_lurah`
  ADD PRIMARY KEY (`id_lurah`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `tbl_rt`
--
ALTER TABLE `tbl_rt`
  ADD PRIMARY KEY (`id_rt`);

--
-- Indexes for table `tbl_rw`
--
ALTER TABLE `tbl_rw`
  ADD PRIMARY KEY (`id_rw`);

--
-- Indexes for table `tbl_suratizin`
--
ALTER TABLE `tbl_suratizin`
  ADD PRIMARY KEY (`id_suratizin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_kelurahan`
--
ALTER TABLE `tbl_admin_kelurahan`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin_rt`
--
ALTER TABLE `tbl_admin_rt`
  MODIFY `id_admin_rt` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_detailkk`
--
ALTER TABLE `tbl_detailkk`
  MODIFY `id_detailkk` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_form_kk`
--
ALTER TABLE `tbl_form_kk`
  MODIFY `id_form_kk` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_form_ktp`
--
ALTER TABLE `tbl_form_ktp`
  MODIFY `id_form_ktp` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id_kelahiran` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  MODIFY `id_kematian` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_ketbelumnikah`
--
ALTER TABLE `tbl_ketbelumnikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_ketdomisili`
--
ALTER TABLE `tbl_ketdomisili`
  MODIFY `id_domisili` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kethibah`
--
ALTER TABLE `tbl_kethibah`
  MODIFY `id_kethibah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ketjualbeli`
--
ALTER TABLE `tbl_ketjualbeli`
  MODIFY `id_ketjualbeli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ketsudahmenikah`
--
ALTER TABLE `tbl_ketsudahmenikah`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kettidakmampu`
--
ALTER TABLE `tbl_kettidakmampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ketwaris`
--
ALTER TABLE `tbl_ketwaris`
  MODIFY `id_ketwaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kk`
--
ALTER TABLE `tbl_kk`
  MODIFY `id_kk` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lurah`
--
ALTER TABLE `tbl_lurah`
  MODIFY `id_lurah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id_penduduk` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rt`
--
ALTER TABLE `tbl_rt`
  MODIFY `id_rt` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rw`
--
ALTER TABLE `tbl_rw`
  MODIFY `id_rw` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_suratizin`
--
ALTER TABLE `tbl_suratizin`
  MODIFY `id_suratizin` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
