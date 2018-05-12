-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 11:00 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `14630341`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(21) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Farah Abdat', 'Admin', 'a6b7cc30d968aff9dadabcc877dabd50');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(21) NOT NULL,
  `no_inventaris` varchar(30) NOT NULL,
  `id_kamar` int(21) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `kondisi` varchar(30) NOT NULL,
  `jumlah` varchar(21) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `no_inventaris`, `id_kamar`, `jenis_barang`, `kondisi`, `jumlah`, `keterangan`) VALUES
(1, 'N01', 22, 'AC', 'Hidup', '1', 'Ac Ok'),
(2, 'N03', 22, 'Kursi', 'Baik', '5', 'Kursi Baik');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(21) NOT NULL,
  `no_kamar` varchar(30) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jumlah_tt` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `status` enum('On','Off') DEFAULT 'On',
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `no_kamar`, `nama_kamar`, `kelas`, `jumlah_tt`, `lokasi`, `status`, `keterangan`) VALUES
(3, 'A01', 'Ruang Paviliun Ibnu Sina', 'VVIP A', '2 Tempat Tidur', 'Sebelah barat dekat pintu masu', 'On', 'Kamar ini sudah siap untuk dihuni pasien rumah sakit'),
(4, 'A02', 'Ruang Paviliun Ibnu Sina', 'VVIP C', '3 Tempat Tidur', 'Dekat ruang ICU/ICCU', 'On', 'Kamar siap di huni pasien rumah sakit'),
(5, 'A03', 'Ruang Paviliun Ibnu Sina', 'VVIP', '6 Tempat Tidur', 'Dekat ruang al farabi', 'On', 'Kamar siap di huni pasien'),
(6, 'A04', 'Ruang Al Farabi', 'VVIP B', '9 Tempat Tidur', 'Dekat Ruang Al razi', 'Off', 'Kamar ini sudah siap digunakan pasien'),
(7, 'A05', 'Ruang Al Farabi', 'VVIP C', '3 Tempat Tidur', 'Dekat Ruang Al razi', 'On', 'Kamar ini sudah siap digunakan pasien'),
(8, 'A06', 'Ruang Al Farabi', 'VIP A', '6 Tempat Tidur', 'Dekat ruang al haitam', 'On', 'Kamar ini sudah siap digunakan pasien'),
(9, 'A07', 'Ruang Al Razi', 'VVIP B', '2 Tempat Tidur', 'Dekat ruang al haitam', 'On', 'Kamar ini sudah siap digunakan pasien'),
(10, 'A08', 'Ruang Al Razi', 'VIB', '5 Tempat Tidur', 'Dekat ruang al farabi', 'On', 'Kamar ini siap untuk di gunakan pasien'),
(11, 'A09', 'Ruang Al Razi', '1A', '6 Tempat Tidur', 'Dekat ruang al haitam', 'On', 'Kamar ini siap untuk di gunakan pasien'),
(12, 'A10', ' AL Gazali', 'ICU-ICCU', '8 Tempat Tidur', 'dekat ruang al kindi', 'On', 'Kamar ini siap digunakan pasien'),
(13, 'A11', 'Ruang Al Hataiman', 'II C', '6 Tempat Tidur', 'Dekat Ruang Al razi', 'On', 'Kamar pasien siap di gunakan'),
(14, 'A12', 'Ruang Al Hataiman', 'III B', '6 Tempat Tidur', 'dekat ruang al kindi', 'On', 'Kamar pasien siap di gunakan'),
(15, 'A13', 'Ruang Al Biruni', 'I A', '3 Tempat Tidur', 'Dekat ruang al farabi', 'On', 'Kamar pasien siap di gunakan'),
(16, 'A14', 'Ruang Al Biruni', 'I', '1 Tempat Tidur', 'Dekat ruang al farabi', 'On', 'Kamar pasien siap diguakan'),
(17, 'A15', 'Ruang Al Biruni', 'III B', '4 Tempat Tidur', 'dekat ruang al kindi', 'On', 'Kamar pasien siap diguakan'),
(18, 'A16', 'Ruang Al Biruni', 'II', '10 Tempat Tidur', 'Dekat ruang al farabi', 'On', 'Kamar pasien siap diguakan'),
(19, 'A17', 'Ruang Al Biruni', 'III A', '5 Tempat Tidur', 'Dekat ruang al haitam', 'On', 'Kamar pasien siap digunakan'),
(20, 'A18', 'Ruang Al Biruni', 'I B', '4 Tempat Tidur', 'Dekat ruang al farabi', 'On', 'Kamar pasien siap digunakan'),
(21, 'A19', 'Ruang Al Kindi', 'Neonatus', '15 Tempat Tidur', 'dekat ruang al kindi', 'On', 'Kamar pasien siap digunakan'),
(22, 'K021', 'Ruang Al Pukat', 'V11', '2 Tempat Tidur', 'Dekat ruang al farabi lantai 2', 'On', 'Kamar Ruangan Al Pukat');

-- --------------------------------------------------------

--
-- Table structure for table `ketenagaan_rs`
--

CREATE TABLE `ketenagaan_rs` (
  `id_ketenagaan` int(21) NOT NULL,
  `id_pegawai` int(21) NOT NULL,
  `nama_ketenagaan` varchar(91) NOT NULL,
  `jenis_ketenagaan` varchar(70) NOT NULL,
  `status` enum('Aktif','NonAktif') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ketenagaan_rs`
--

INSERT INTO `ketenagaan_rs` (`id_ketenagaan`, `id_pegawai`, `nama_ketenagaan`, `jenis_ketenagaan`, `status`, `keterangan`) VALUES
(3, 4, 'Tenaga Medik', 'Dokter Gigi', 'Aktif', 'Dokter gigi'),
(4, 5, 'Tenaga Medik', 'Dokter Umum', 'Aktif', 'Dokter Umum'),
(5, 6, 'Tenaga Medik', 'Dokter Kandungan', 'Aktif', 'Dokter Kandungan'),
(6, 7, 'Tenaga Medik', 'Dokter Umum', 'Aktif', 'Dokter Umum'),
(7, 8, 'Tenaga Medik', 'Dokter Kandungan', 'Aktif', 'Dokter Kandungan'),
(8, 9, 'Tenaga Paramadik', 'Perawat', 'Aktif', 'Perawat'),
(9, 10, 'Tenaga Non Medik', 'Satpam', 'Aktif', 'satpam'),
(10, 11, 'Tenaga Non Medik', 'Satpam', 'Aktif', 'Satpam'),
(11, 12, 'Tenaga Paramadik', 'Perawat', 'Aktif', 'Perawat'),
(12, 13, 'Tenaga Non Medik', 'Keuangan', 'Aktif', 'Bagian Keuangan'),
(13, 14, 'Tenaga Medik', 'Dokter Kandungan', 'Aktif', 'Dokter Kandungan'),
(14, 15, 'Tenaga Medik', 'Dokter Jantung', 'Aktif', 'Dokter Jantung'),
(15, 16, 'Tenaga Medik', 'Dokter Umum', 'Aktif', 'Dokter Umum Bagian Tenaga Medik');

-- --------------------------------------------------------

--
-- Table structure for table `log_sms`
--

CREATE TABLE `log_sms` (
  `id_sms` int(21) NOT NULL,
  `id_pasien` int(21) NOT NULL,
  `id_kamar` int(21) NOT NULL,
  `status` enum('Baru','Sudah Terkirim') DEFAULT 'Baru'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_sms`
--

INSERT INTO `log_sms` (`id_sms`, `id_pasien`, `id_kamar`, `status`) VALUES
(1, 3, 3, 'Baru'),
(2, 13, 22, 'Sudah Terkirim');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(21) NOT NULL,
  `no_registerasi` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nama_ibu_kandung` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Budha','Hindu','Protestan') NOT NULL,
  `no_telepon` varchar(21) NOT NULL,
  `no_telepon_lain` varchar(21) NOT NULL,
  `pekerjaan` varchar(31) NOT NULL,
  `alamat_jln` text NOT NULL,
  `kabupaten_kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `rt_rw` varchar(21) NOT NULL,
  `status` enum('Baru','Proses','Keluar') NOT NULL DEFAULT 'Baru'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_registerasi`, `nama_lengkap`, `nama_ibu_kandung`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_telepon`, `no_telepon_lain`, `pekerjaan`, `alamat_jln`, `kabupaten_kota`, `kecamatan`, `desa`, `rt_rw`, `status`) VALUES
(3, 'R01', 'Farah Saleh Abdat', 'Faizah', 'Banjarmasin', '1997-07-15', 'Perempuan', 'Islam', '082253099902', '086736228292', 'Mahasiswi', 'jl akaba no 20', 'Banjarmasin', 'Banjarmasin tengah', '', '13 25', 'Keluar'),
(4, 'R02', 'Huda', 'farah', 'Surabaya', '2018-04-24', 'Perempuan', 'Islam', '0893673839', '08767883721', 'Mahasiswi', 'jl akaba gang ibu', 'banjarmasin', 'Banjarmasin tengah', '', '13 63', 'Keluar'),
(5, 'R03', 'Fakhira', 'huda', 'Banjarmasin', '2018-04-11', 'Perempuan', 'Islam', '0895563887', '0856425678', 'pelajar', 'jl akt', 'Banjarmasin', '', '', '14 16', 'Baru'),
(6, 'R04', 'Hasan', 'huda', 'bati bati', '2018-04-25', 'Perempuan', 'Islam', '0875678563', '0986543789', 'Mahasiswa', 'Jl landasan ulin', 'Bati bati', 'bati bati', '', '13 16', 'Baru'),
(7, 'R05', 'Saleh Abdat', 'farah', 'Surabaya', '2018-04-25', 'Laki-laki', 'Islam', '09567790864', '0896456798', 'wiraswasta', 'jl kayu licin', 'Surabaya', 'surabaya tengah', '', '13 14', 'Keluar'),
(8, 'R06', 'Syafiq', 'Huda', 'Banjarmasin', '2018-04-10', 'Laki-laki', 'Islam', '08675675678', '0813656768', 'Mahasiswi', 'Jl antasan kecil timur', 'Banjarmasin', 'Banjarmasin tengah', '', '14 15', 'Baru'),
(9, 'R07', 'Fawas', 'Huda', 'Banjarmasin', '2018-04-23', 'Perempuan', 'Islam', '08876465765', '0813675876', 'wiraswasta', 'jl kayutangi 2', 'Banjarmasin', 'Banjarmasin timur', '', '12 13', 'Baru'),
(11, 'R09', 'Salsabila', 'Salheh', 'Martapura', '2018-04-02', 'Perempuan', 'Islam', '08134567834', '0864367864', 'Mahasiswi', 'jl raya tengah', 'Martapura', 'Martapura selatan', '', '12 18', 'Baru'),
(12, 'R10', 'Samil', 'Salheh', 'Martapura', '2018-04-01', 'Laki-laki', 'Islam', '0876895646', '0823458765', 'wiraswasta', 'Jl Raya Tengah', 'Martapura', 'Martapura selatan', '', '11 12', 'Baru'),
(13, 'R91', 'Ujang Solihin', 'Ibu Siti', 'Bandung', '2018-04-20', 'Laki-laki', 'Islam', '+6282253099902', '+6282295309990215', 'Mahasiswi', 'Jl. Setia Budi', 'Bandung', 'Cihamples', 'Tenjolaya', 'RT. 04 RW. 01', 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(21) NOT NULL,
  `nip` varchar(21) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `jabatan_pegawai` varchar(30) NOT NULL,
  `status` enum('On','Off') NOT NULL DEFAULT 'On',
  `jenis_pegawai` enum('Permanen','Kontrak','Outsourcing') NOT NULL,
  `nama_pt` varchar(100) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_masuk_kerja` date NOT NULL,
  `tgl_keluar_kerja` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Protestan') NOT NULL,
  `pendidikan_akhir` varchar(30) NOT NULL,
  `no_telepon` varchar(21) NOT NULL,
  `no_telepon_rumah` varchar(21) NOT NULL,
  `kabupaten_kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `rt_rw` varchar(30) DEFAULT NULL,
  `alamat_jln` varchar(30) NOT NULL,
  `jumlah` int(21) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jabatan_pegawai`, `status`, `jenis_pegawai`, `nama_pt`, `tgl_lahir`, `tgl_masuk_kerja`, `tgl_keluar_kerja`, `jenis_kelamin`, `agama`, `pendidikan_akhir`, `no_telepon`, `no_telepon_rumah`, `kabupaten_kota`, `kecamatan`, `desa`, `rt_rw`, `alamat_jln`, `jumlah`) VALUES
(4, 'N01', 'Dr. Farah Abdat', 'Dokter', 'On', 'Permanen', '', '2018-04-15', '2018-04-23', '0000-00-00', 'Perempuan', 'Islam', 'S2, Kedokteran Umum', '087816005252', '05113350717', 'Jakarta', 'Jakarta selatan', '', '11 23', 'Jl pasar raya', 0),
(5, 'N02', 'Dr. Huda Abdat', 'Dokter', 'On', 'Permanen', '', '2018-04-18', '2018-04-23', '0000-00-00', 'Perempuan', 'Islam', 'S3, Kedokteran Kandungan', '0875678563', '0834567245', 'Banjarmasin', 'Banjarmasin tengah', '', '11 15', 'jl kayutangi 2', 0),
(6, 'N03', 'Dr. Saleh Abdat', 'Dokter', 'On', 'Permanen', '', '2018-04-24', '2018-04-01', '0000-00-00', 'Laki-laki', 'Islam', 'D3, Kedokteran umum', '08675675678', '05113350717', 'Banjarmasin', '', '', '12 14', 'Jl antasan kecil timur', 0),
(7, 'N04', 'Dr. Syafiq', 'Dokter', 'On', 'Kontrak', '', '2018-04-01', '2018-04-08', '0000-00-00', 'Laki-laki', 'Islam', 'D3, Kedokteran gigi', '0875678563', '05113350717', 'Surabaya', 'surabaya tengah', '', '10 02', 'Jl kejaksaan tengah', 0),
(8, 'N05', 'Dr. Fakhira', 'Dokter', 'On', 'Kontrak', '', '2018-04-01', '2018-04-15', '0000-00-00', 'Perempuan', 'Islam', 'D3, Kedokteran kandungan', '0875678563', '05113350717', 'Banjarmasin', 'Banjarmasin tengah', '', '10 11', 'jl akaba gang ibu', 1),
(9, 'N06', 'Salsabila, S. Kep', 'Perawat', 'On', 'Kontrak', '', '2018-04-08', '2018-04-01', '0000-00-00', 'Perempuan', 'Islam', 'S kep perawat', '0875678563', '05113350717', 'Banjarmasin', 'Banjarmasin tengah', '', '11 16', 'jl antasan kecil timur', 0),
(10, 'N07', 'Samil, Security', 'Satpam', 'On', 'Outsourcing', 'PT satpam jaya', '2018-04-08', '2018-04-08', '1899-11-23', 'Laki-laki', 'Islam', 'Sma swasta 1', '0875678563', '05113350717', 'Banjarmasin', 'Banjarmasin timur', '', '02 01', 'jl antasan kecil timur', 0),
(11, 'N08', 'Fauzan', 'Satpam', 'On', 'Outsourcing', 'PT sinar jaya', '2018-04-09', '2018-04-08', '0000-00-00', 'Laki-laki', 'Islam', 'Smp swasta 2', '0856576557', '05113350717', 'Banjarmasin', 'Banjarmasin timur', '', '11 15', 'Jl sdn pasar lama 5', 0),
(12, 'N09', 'Nadia', 'Perawat', 'On', 'Kontrak', '', '2018-04-01', '2018-04-15', '0000-00-00', 'Perempuan', 'Islam', 'S Ked keperawatan', '087646789234', '08564687', 'Banjarmasin', 'Banjarmasin tengah', '', '11 15', 'Jl antasan kecil timur', 0),
(13, 'N10', 'Nazwa alya nanda', 'Keuangan', 'On', 'Kontrak', '', '2018-04-08', '2018-04-01', '0000-00-00', 'Perempuan', 'Islam', 'S1 akuntansi', '0856774578', '05113350717', 'Banjarmasin', 'Banjarmasin tengah', '', '11 12', 'jl raya tengah 1', 0),
(14, 'N11', 'Nadin', 'Dokter', 'On', 'Kontrak', '', '2018-04-08', '2018-04-08', '0000-00-00', 'Perempuan', 'Islam', 'S3, kedokteran gigi', '08753567823', '05113350717', 'Banjarmasin', 'Banjarmasin tengah', '', '11 15', 'Jl akaba gang ibu', 0),
(15, 'N12', 'Fidya', 'Dokter', 'On', 'Permanen', '', '2018-04-08', '2018-04-14', '0000-00-00', 'Perempuan', 'Islam', 'S3, Dokter Jantung', '086737896', '0864677875', 'Banjarmasin', 'Banjarmasin tengah', '', '11 15', 'Jl raya tengah ', 0),
(16, 'N021', 'Nasir', 'Dokter', 'On', 'Permanen', '', '2018-04-22', '2018-04-04', '0000-00-00', 'Laki-laki', 'Islam', 'S2, Kedokteran Umum', '+6282253099902', '+6282253099902', 'Banjaarmasin', 'Banjarmasin timur', '', 'RT. 04 RW. 01', 'Jl. Raya ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` int(21) NOT NULL,
  `id_pasien` int(21) NOT NULL,
  `id_pegawai` int(21) NOT NULL,
  `id_kamar` int(21) NOT NULL,
  `keluhan` varchar(30) NOT NULL,
  `diagnosa` varchar(30) DEFAULT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `id_pasien`, `id_pegawai`, `id_kamar`, `keluhan`, `diagnosa`, `tgl_masuk`, `tgl_keluar`, `keterangan`) VALUES
(8, 3, 8, 20, 'Sakit Gigi', 'sa', '2018-04-27', '2018-04-26', 'sudah pulang'),
(9, 7, 8, 6, 'Sakit Gigi', NULL, '2018-04-26', NULL, 'Ok'),
(10, 4, 15, 21, 'dsdsd', 'Sakit Perut Karena MAgg', '2018-04-26', '2018-04-28', 'Dia piulang'),
(11, 13, 16, 22, 'Sakit Perut', 'Sakit Perut Karena MAgg', '2018-04-28', '2018-04-30', 'Pasien Sakit Perut');

-- --------------------------------------------------------

--
-- Table structure for table `statistik_pasien`
--

CREATE TABLE `statistik_pasien` (
  `id_statistik` int(21) NOT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `tahun` int(21) NOT NULL,
  `jumlah_pasien` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statistik_pasien`
--

INSERT INTO `statistik_pasien` (`id_statistik`, `bulan`, `tahun`, `jumlah_pasien`) VALUES
(2, 'Januari', 2018, 4),
(3, 'Februari', 2018, 16),
(4, 'Maret', 2018, 15),
(5, 'April', 2018, 43),
(6, 'Mei', 2018, 10),
(7, 'Juni', 2018, 50),
(8, 'Juli', 2018, 14),
(9, 'Agustus', 2018, 16),
(10, 'September', 2018, 71),
(11, 'Oktober', 2018, 11),
(12, 'November', 2018, 8),
(13, 'Desember', 2018, 51);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD UNIQUE KEY `no_inventaris` (`no_inventaris`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `ketenagaan_rs`
--
ALTER TABLE `ketenagaan_rs`
  ADD PRIMARY KEY (`id_ketenagaan`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `log_sms`
--
ALTER TABLE `log_sms`
  ADD PRIMARY KEY (`id_sms`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `no_registrasi` (`no_registerasi`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nik` (`nip`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_pegawai`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `statistik_pasien`
--
ALTER TABLE `statistik_pasien`
  ADD PRIMARY KEY (`id_statistik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `ketenagaan_rs`
--
ALTER TABLE `ketenagaan_rs`
  MODIFY `id_ketenagaan` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `log_sms`
--
ALTER TABLE `log_sms`
  MODIFY `id_sms` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `statistik_pasien`
--
ALTER TABLE `statistik_pasien`
  MODIFY `id_statistik` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ketenagaan_rs`
--
ALTER TABLE `ketenagaan_rs`
  ADD CONSTRAINT `ketenagaan_rs_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_sms`
--
ALTER TABLE `log_sms`
  ADD CONSTRAINT `log_sms_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_sms_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `pelayanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelayanan_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelayanan_ibfk_4` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
