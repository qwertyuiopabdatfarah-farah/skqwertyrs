-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2018 at 01:24 PM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 'n01', 1, 'Ac', 'Baguds', '1 Iyem', 'scasc');

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
(1, 'n01', 'bleke', '2', 'e', '', 'Off', 'd'),
(2, 'n02', 'bleke222', '2', 'e', '', 'Off', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `ketenagaan_rs`
--

CREATE TABLE `ketenagaan_rs` (
  `id_ketenagaan` int(21) NOT NULL,
  `id_pegawai` int(21) NOT NULL,
  `nama_ketenagaan` enum('Tenaga Medik','Tenaga Paramadik','Tenaga Penunjang Medik','Tenaga Non Medik') NOT NULL,
  `jenis_ketenagaan` varchar(70) NOT NULL,
  `status` enum('Aktif','NonAktif') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ketenagaan_rs`
--

INSERT INTO `ketenagaan_rs` (`id_ketenagaan`, `id_pegawai`, `nama_ketenagaan`, `jenis_ketenagaan`, `status`, `keterangan`) VALUES
(2, 1, 'Tenaga Paramadik', 'Dokter Tetap Umum', 'NonAktif', 'Kontrak');

-- --------------------------------------------------------

--
-- Table structure for table `log_sms`
--

CREATE TABLE `log_sms` (
  `id_sms` int(21) NOT NULL,
  `id_pasien` int(21) NOT NULL,
  `id_kamar` int(21) NOT NULL,
  `isi_pesan` text,
  `status` enum('New','Old') DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `status` enum('Baru','Keluar') NOT NULL DEFAULT 'Baru'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_registerasi`, `nama_lengkap`, `nama_ibu_kandung`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_telepon`, `no_telepon_lain`, `pekerjaan`, `alamat_jln`, `kabupaten_kota`, `kecamatan`, `desa`, `rt_rw`, `status`) VALUES
(2, '1234', 'Farah Saleh Abdat', '', 'Bandung', '2018-04-20', 'Perempuan', 'Islam', '0853526446551', '0853526446551', 'Sutradara PT. Indonesia', 'Jl. Raya Belok Kekanan', 'Banjarmasin', 'Ciwidey 01', '', '', 'Baru');

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
(1, 'n01', 'Farah Saeleh', 'Dokter', 'On', 'Kontrak', '', '2018-04-13', '2018-04-19', '2018-04-20', 'Laki-laki', 'Islam', 'S1', '085352644655', '085352644655', 'Banjarmasin', 'Ciwidey', 'Rawabogo', 'Rt. 02. Rw. 09', 'Jl.  Naringul', 4),
(3, 'n02', 'Farah Saeleh', 'Dokter', 'On', 'Kontrak', '', '2018-04-13', '2018-04-19', '2018-04-20', 'Laki-laki', 'Islam', 'S1', '085352644655', '085352644655', 'Banjarmasin', 'Ciwidey', 'Rawabogo', 'Rt. 02. Rw. 09', 'Jl.  Naringul', 4);

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
(2, 2, 3, 1, 'Ok', NULL, '2018-04-20', NULL, 'Coba');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(21) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `email`, `password`) VALUES
(1, 'erwin', 'erwin', 'erwin@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ketenagaan_rs`
--
ALTER TABLE `ketenagaan_rs`
  MODIFY `id_ketenagaan` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_sms`
--
ALTER TABLE `log_sms`
  MODIFY `id_sms` int(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `pelayanan_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
