-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 06:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `akses_keterangan` varchar(200) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`akses_keterangan`, `hak_akses`) VALUES
('Bagian Keuangan', 1),
('Pegawai', 2),
('Pimpinan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bekerja`
--

CREATE TABLE `bekerja` (
  `id_bekerja` int(11) NOT NULL,
  `bekerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bekerja`
--

INSERT INTO `bekerja` (`id_bekerja`, `bekerja`) VALUES
(1, 'WFO'),
(2, 'WFH');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL,
  `gaji_pokok` double NOT NULL,
  `uang_makan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `gaji_pokok`, `uang_makan`) VALUES
(1, 3500000, 20000),
(2, 2700000, 20000),
(3, 4200000, 20000),
(4, 5200000, 20000),
(5, 4500000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(200) NOT NULL,
  `id_gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `id_gaji`) VALUES
(1, 'IT Support', 2),
(2, 'Staff Keuangan', 2),
(3, 'Junior Programmer', 1),
(4, 'Staff Keuangan', 1),
(5, 'HRD', 3),
(6, 'Customer Service', 2),
(7, 'Office Boy', 2),
(8, 'Analyst', 1),
(9, 'desain grafis', 1),
(10, 'operasional', 2),
(11, 'Pimpinan', 4),
(14, 'Enginer Support', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `id_keterangan` int(11) DEFAULT NULL,
  `id_bekerja` int(11) DEFAULT NULL,
  `status_transfer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `id_pegawai`, `id_jabatan`, `tgl`, `id_keterangan`, `id_bekerja`, `status_transfer`) VALUES
(119, 1, 4, '2021-04-27', 1, 1, NULL),
(120, 14, 4, '2021-04-25', 1, 2, NULL),
(121, 2, 3, '2021-04-25', 3, 1, NULL),
(123, 8, 3, '2021-04-27', 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id_keterangan` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id_keterangan`, `keterangan`) VALUES
(1, 'hadir'),
(2, 'sakit'),
(3, 'alfa');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `nama_pegawai` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tgl_join` date NOT NULL,
  `no_rekening` varchar(200) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `nik`, `nama_pegawai`, `jenis_kelamin`, `alamat`, `no_telp`, `email`, `tgl_join`, `no_rekening`, `id_jabatan`, `status`, `hak_akses`) VALUES
(1, 'ridho123', '21232f297a57a5a743894a0e4a801fc3', '12345', 'Muhammad ridho', 'Laki-Laki', 'jl.bungur', '0812142145', 'ridho@gmail.com', '2021-03-01', '72100021', 4, 'karyawan Tidak Tetap', 1),
(2, 'marvel', '21232f297a57a5a743894a0e4a801fc3', '2222', 'marvel hartanto', 'Laki-Laki', 'jl.bungur senen', '0821556171', 'marvel@gmail.com', '2021-03-01', '72123021', 3, 'karyawan Tidak Tetap', 2),
(8, 'yono123', '21232f297a57a5a743894a0e4a801fc3', '3333', 'yono trisno k', 'Laki-Laki', 'jl.blok a', '0858721181', 'yono123@gmail.com', '2021-04-01', '727112131', 3, 'karyawan tidak tetap', 2),
(9, 'dwico', '21232f297a57a5a743894a0e4a801fc3', '4444', 'Dwico Harti', 'Laki-Laki', 'jl.kemang raya', '08212133191', 'dwicoharti@gmail.com', '2021-04-01', '721718218', 11, 'karyawan tetap', 3),
(14, 'rani123', '21232f297a57a5a743894a0e4a801fc3', '44541', 'rani', 'Perempuan', 'bandung', '0812133131', 'rani12@gmail.com', '2021-04-25', '7212121012', 4, 'karyawan tetap', 1);

-- --------------------------------------------------------

--
-- Table structure for table `potongan`
--

CREATE TABLE `potongan` (
  `id_potongan` int(11) NOT NULL,
  `id_keterangan` int(11) NOT NULL,
  `potongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potongan`
--

INSERT INTO `potongan` (`id_potongan`, `id_keterangan`, `potongan`) VALUES
(1, 3, '150000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`hak_akses`);

--
-- Indexes for table `bekerja`
--
ALTER TABLE `bekerja`
  ADD PRIMARY KEY (`id_bekerja`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `id_gaji` (`id_gaji`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`),
  ADD KEY `id_pegawai` (`id_pegawai`,`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_keterangan` (`id_keterangan`),
  ADD KEY `id_bekerja` (`id_bekerja`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `hak_akses` (`hak_akses`);

--
-- Indexes for table `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`id_potongan`),
  ADD UNIQUE KEY `id_keterangan` (`id_keterangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bekerja`
--
ALTER TABLE `bekerja`
  MODIFY `id_bekerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `potongan`
--
ALTER TABLE `potongan`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `jabatan_ibfk_1` FOREIGN KEY (`id_gaji`) REFERENCES `gaji` (`id_gaji`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `kehadiran_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kehadiran_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kehadiran_ibfk_3` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangan` (`id_keterangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kehadiran_ibfk_4` FOREIGN KEY (`id_bekerja`) REFERENCES `bekerja` (`id_bekerja`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`hak_akses`) REFERENCES `akses` (`hak_akses`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `potongan`
--
ALTER TABLE `potongan`
  ADD CONSTRAINT `potongan_ibfk_1` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangan` (`id_keterangan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
