-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 08:47 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `surat_ijindokter` varchar(255) NOT NULL,
  `jam_praktek` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `surat_ijindokter`, `jam_praktek`) VALUES
(1, 'Dr. Amok Sp.A.', '001A', '08.00 WIB - 14.00 WIB'),
(2, 'Dr. Eyeng S.Kg.', '002B', '09.00 WIB - 15.00 WIB'),
(3, 'Dr. Ukhti ', '003C', '10.00 WIB - 16.00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golobat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golobat`, `nama_obat`) VALUES
(1, 'Obat Keras');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1677761080),
('m130524_201442_init', 1677761083),
('m190124_110200_add_verification_token_column_to_user_table', 1677761083);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `jumlah_obat` int(25) NOT NULL,
  `id_golobat` int(11) NOT NULL,
  `harga_obat` int(25) NOT NULL,
  `stok_obat` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jumlah_obat`, `id_golobat`, `harga_obat`, `stok_obat`) VALUES
(1, 'Oskadon', 1, 1, 5000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `umur_pasien` int(10) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `umur_pasien`, `alamat_pasien`) VALUES
(1, 'Rasid', 20, 'Desa Kejuruan Sang Timur, Kab. Malang'),
(2, 'Kadir', 34, 'Jl. Raya Lenteng No. 17, Kab. Sumenep');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `tgl_transaksi` varchar(255) NOT NULL,
  `nominal_tagihan` int(25) NOT NULL,
  `tot_tagihan` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `tgl_transaksi`, `nominal_tagihan`, `tot_tagihan`) VALUES
(1, '03 Maret 2023', 5000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `nama_tindakan`) VALUES
(1, 'Pembersihan Gigi Karang'),
(2, 'Panas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'cRscAJ_UZ8Bl3m7QK4dMG56lXZUH1J3q', '$2y$13$6l24Aua.R7heQ9HVOm0wWuuNw1zwf7hOUyjHGuBAy8vI/ulGoCUa2', NULL, 'admin@gmail.com', 10, 1677765222, 1677765222, 's8xsEHZaMDbdfhf3Qo-busgLxyPjmZrM_1677765222');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kab_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `provinsi`, `kab_kota`) VALUES
(1, 'Jawa Timur', 'Sumenep'),
(2, 'Jawa Timur', 'Surabaya'),
(3, 'Jawa Timur', 'Malang'),
(4, 'Jawa Tengah', 'Solo'),
(5, 'Jawa Tengah', 'Yogyakarta'),
(6, 'Jawa Barat', 'Bandung'),
(7, 'Jawa Barat', 'Bogor'),
(8, 'Jawa Barat', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_klinik`
--

CREATE TABLE `wilayah_klinik` (
  `id_wilayahklinik` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `nama_klinik` varchar(255) NOT NULL,
  `alamat_klinik` varchar(255) NOT NULL,
  `nomer_telpklinik` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah_klinik`
--

INSERT INTO `wilayah_klinik` (`id_wilayahklinik`, `id_wilayah`, `nama_klinik`, `alamat_klinik`, `nomer_telpklinik`) VALUES
(1, 1, 'Klinik Sumenep', 'Jl. Raya Sumenep', 2147483647),
(2, 5, 'Klinik Yogyakarta', 'Jl. Raya Yogyakarta', 2147483647),
(3, 6, 'Klinik Bandung', 'Jl. Raya Bandung', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golobat`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- Indexes for table `wilayah_klinik`
--
ALTER TABLE `wilayah_klinik`
  ADD PRIMARY KEY (`id_wilayahklinik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wilayah_klinik`
--
ALTER TABLE `wilayah_klinik`
  MODIFY `id_wilayahklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
