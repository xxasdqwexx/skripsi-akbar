-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 02:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwmtoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya_produksi`
--

CREATE TABLE `biaya_produksi` (
  `id_by` int(11) NOT NULL,
  `byt_produksi` float NOT NULL,
  `byo_produksi` float NOT NULL,
  `bb_produksi` float NOT NULL,
  `bo_produksi` float NOT NULL,
  `biaya_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biaya_produksi`
--

INSERT INTO `biaya_produksi` (`id_by`, `byt_produksi`, `byo_produksi`, `bb_produksi`, `bo_produksi`, `biaya_tgl`) VALUES
(1, 6000000, 5000000, 5000000, 5000000, '2023-01-01'),
(2, 6000000, 6000000, 6000000, 6000000, '2023-05-19'),
(3, 5000000, 5000000, 2000000, 4000000, '2023-04-30'),
(4, 3500000, 3000000, 2500000, 1000000, '2023-03-31'),
(6, 5000000, 1500000, 2000000, 700000, '2023-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_transaksi` char(10) NOT NULL,
  `atas_nama` text NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `bank_tujuan` text NOT NULL,
  `bank_asal` text NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `bukti_bayar` text NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_transaksi` char(10) NOT NULL,
  `no_resi` text NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `Kurir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar1`, `gambar2`, `gambar3`) VALUES
(1, 'Bakso Halus', '1 porsi bakso halus', 22000, 'bakso_halus.png', 'bakso_halus1.png', 'bakso_halus2.png'),
(2, 'Bakso Urat', '1 porsi bakso urat', 25000, 'bakso_urat.jpg', 'bakso_urat1.jpg', 'bakso_urat2.jpg'),
(3, 'Bakso Tenes', '1 porsi bakso tenes', 27000, 'bakso_tenes.jpg', 'bakso_tenes1.jpg', 'bakso_tenes2.jpg'),
(4, 'Bakso Campur', '1 porsi bakso campur', 33000, 'bakso_campur.jpg', 'bakso_campur1.jpg', 'bakso_campur2.jpg'),
(5, 'Mie Pangsit Biasa', '1 porsi mie pangsit biasa', 25000, 'mie_pangsit_biasa.jpg', 'mie_pangsit_biasa1.jpg', 'mie_pangsit_biasa2.jpg'),
(8, 'Mie Pangsit Bakso Campur', '1 porsi mie pangsit bakso campur', 33000, 'mie_pangsit_bakso_campur.png', 'mie_pangsit_bakso_campur1.png', 'mie_pangsit_bakso_campur2.png'),
(10, 'Mie Pangsit Bakso Tenes', '1 porsi mie pangsit bakso tenes', 28000, 'mie_pangsit_bakso_tenes6.jpg', 'mie_pangsit_bakso_tenes7.jpg', 'mie_pangsit_bakso_tenes8.jpg'),
(12, 'Nasi Goreng Biasa', '1 porsi nasi goreng biasa', 22000, 'Nasi_Goreng_Biasa.png', 'Nasi_Goreng_Biasa1.png', 'Nasi_Goreng_Biasa2.png'),
(13, 'Nasi Goreng Telur', '1 porsi nasi goreng telur', 25000, 'nasi_goreng_telur.png', 'nasi_goreng_telur1.png', 'nasi_goreng_telur2.png'),
(14, 'Nasi Goreng Bakso', '1 porsi nasi goreng bakso', 27000, 'nasi_goreng_bakso.png', 'nasi_goreng_bakso1.png', 'nasi_goreng_bakso2.png'),
(16, 'Nasi Goreng Spesial', '1 porsi nasi goreng spesial', 30000, 'nasi_goreng_spesial3.png', 'nasi_goreng_spesial4.png', 'nasi_goreng_spesial5.png'),
(21, 'Mie Goreng Biasa', '1 porsi mie goreng biasa', 22000, 'mie_goreng_biasa12.png', 'mie_goreng_biasa13.png', 'mie_goreng_biasa14.png'),
(23, 'Mie Goreng Bakso', '1 porsi mie goreng bakso\r\n', 25000, 'mie_goreng_bakso3.png', 'mie_goreng_bakso4.png', 'mie_goreng_bakso5.png'),
(24, 'Bakso Goreng', '1 porsi bakso goreng', 20000, 'photo_2023-02-12_09-57-25_(2).jpg', 'photo_2023-02-12_09-57-25_(2)1.jpg', 'photo_2023-02-12_09-57-25_(2)2.jpg'),
(25, 'Es Jeruk', 'Es Jeruk ', 10000, 'photo_2023-02-12_09-57-29.jpg', 'photo_2023-02-12_09-57-291.jpg', 'photo_2023-02-12_09-57-292.jpg'),
(26, 'Teh', 'Teh manis (dingin/panas/manis/tawar)', 6000, 'photo_2023-02-12_09-57-30.jpg', 'photo_2023-02-12_09-57-301.jpg', 'photo_2023-02-12_09-57-302.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` char(10) NOT NULL,
  `id_item` char(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `subtotal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tunai` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `status_transaksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_item`, `id_user`, `nama_produk`, `subtotal`, `harga`, `jumlah`, `tunai`, `tanggal_transaksi`, `status_transaksi`) VALUES
('1677793159', '167779315901', 1, 'Bakso Halus', 44000, 22000, 2, 100000, '2023-03-03 05:39:19', 'Selesai'),
('1677793159', '167779315902', 1, 'Bakso Urat', 50000, 25000, 2, 100000, '2023-03-03 05:39:19', 'Selesai'),
('1677793179', '167779317901', 1, 'Mie Pangsit Biasa', 50000, 25000, 2, 120000, '2023-03-03 05:39:39', 'Selesai'),
('1677793179', '167779317902', 1, 'Mie Pangsit Bakso Campur', 66000, 33000, 2, 120000, '2023-03-03 05:39:39', 'Selesai'),
('1677793211', '167779321101', 1, 'Bakso Halus', 44000, 22000, 2, 132000, '2023-03-03 05:40:11', 'Selesai'),
('1677793211', '167779321102', 1, 'Bakso Tenes', 54000, 27000, 2, 132000, '2023-03-03 05:40:11', 'Selesai'),
('1677793211', '167779321103', 1, 'Mie Pangsit Bakso Campur', 33000, 33000, 1, 132000, '2023-03-03 05:40:11', 'Selesai'),
('1677793277', '167779327701', 1, 'Teh', 12000, 6000, 2, 130000, '2023-03-03 05:41:17', 'Selesai'),
('1677793277', '167779327702', 1, 'Es Jeruk', 20000, 10000, 2, 130000, '2023-03-03 05:41:17', 'Selesai'),
('1677793277', '167779327703', 1, 'Mie Goreng Bakso', 50000, 25000, 2, 130000, '2023-03-03 05:41:17', 'Selesai'),
('1677793277', '167779327704', 1, 'Mie Goreng Biasa', 44000, 22000, 2, 130000, '2023-03-03 05:41:17', 'Selesai'),
('1677793314', '167779331401', 1, 'Mie Pangsit Biasa', 25000, 25000, 1, 100000, '2023-03-03 05:41:54', 'Selesai'),
('1677793314', '167779331402', 1, 'Mie Pangsit Bakso Campur', 33000, 33000, 1, 100000, '2023-03-03 05:41:54', 'Selesai'),
('1677793314', '167779331403', 1, 'Teh', 6000, 6000, 1, 100000, '2023-03-03 05:41:54', 'Selesai'),
('1677793314', '167779331404', 1, 'Es Jeruk', 10000, 10000, 1, 100000, '2023-03-03 05:41:54', 'Selesai'),
('1677793349', '167779334901', 1, 'Mie Goreng Bakso', 25000, 25000, 1, 70000, '2023-03-03 05:42:29', 'Selesai'),
('1677793349', '167779334902', 1, 'Nasi Goreng Bakso', 27000, 27000, 1, 70000, '2023-03-03 05:42:29', 'Selesai'),
('1677793349', '167779334903', 1, 'Teh', 12000, 6000, 2, 70000, '2023-03-03 05:42:29', 'Selesai'),
('1677793383', '167779338301', 1, 'Nasi Goreng Bakso', 27000, 27000, 1, 140000, '2023-03-03 05:43:03', 'Selesai'),
('1677793383', '167779338302', 1, 'Nasi Goreng Spesial', 30000, 30000, 1, 140000, '2023-03-03 05:43:03', 'Selesai'),
('1677793383', '167779338303', 1, 'Nasi Goreng Telur', 25000, 25000, 1, 140000, '2023-03-03 05:43:03', 'Selesai'),
('1677793383', '167779338304', 1, 'Nasi Goreng Biasa', 22000, 22000, 1, 140000, '2023-03-03 05:43:03', 'Selesai'),
('1677793383', '167779338305', 1, 'Mie Pangsit Bakso Tenes', 28000, 28000, 1, 140000, '2023-03-03 05:43:03', 'Selesai'),
('1677793404', '167779340401', 1, 'Mie Pangsit Biasa', 25000, 25000, 1, 50000, '2023-03-03 05:43:24', 'Selesai'),
('1677793404', '167779340402', 1, 'Nasi Goreng Biasa', 22000, 22000, 1, 50000, '2023-03-03 05:43:24', 'Selesai'),
('1677793671', '167779367101', 1, 'Nasi Goreng Spesial', 60000, 30000, 2, 160000, '2023-03-03 05:47:51', 'Selesai'),
('1677793671', '167779367102', 1, 'Nasi Goreng Bakso', 54000, 27000, 2, 160000, '2023-03-03 05:47:51', 'Selesai'),
('1677793671', '167779367103', 1, 'Mie Goreng Biasa', 44000, 22000, 2, 160000, '2023-03-03 05:47:51', 'Selesai'),
('1677793706', '167779370601', 1, 'Teh', 30000, 6000, 5, 165000, '2023-03-03 05:48:26', 'Selesai'),
('1677793706', '167779370602', 1, 'Mie Pangsit Bakso Tenes', 84000, 28000, 3, 165000, '2023-03-03 05:48:26', 'Selesai'),
('1677793706', '167779370603', 1, 'Nasi Goreng Telur', 50000, 25000, 2, 165000, '2023-03-03 05:48:27', 'Selesai'),
('1677793730', '167779373001', 1, 'Nasi Goreng Biasa', 44000, 22000, 2, 100000, '2023-03-03 05:48:50', 'Selesai'),
('1677793730', '167779373002', 1, 'Nasi Goreng Telur', 50000, 25000, 2, 100000, '2023-03-03 05:48:50', 'Selesai'),
('1677793765', '167779376501', 1, 'Teh', 12000, 6000, 2, 70000, '2023-03-03 05:49:25', 'Selesai'),
('1677793765', '167779376502', 1, 'Mie Goreng Bakso', 50000, 25000, 2, 70000, '2023-02-08 05:49:25', 'Selesai'),
('1677793797', '167779379701', 1, 'Nasi Goreng Bakso', 54000, 27000, 2, 115000, '2023-02-08 05:49:57', 'Selesai'),
('1677793797', '167779379702', 1, 'Nasi Goreng Spesial', 60000, 30000, 2, 115000, '2023-03-03 05:49:57', 'Selesai'),
('1677793836', '167779383601', 1, 'Es Jeruk', 20000, 10000, 2, 120000, '2023-03-03 05:50:36', 'Selesai'),
('1677793836', '167779383602', 1, 'Nasi Goreng Spesial', 60000, 30000, 2, 120000, '2023-03-03 05:50:36', 'Selesai'),
('1677793836', '167779383603', 1, 'Nasi Goreng Telur', 25000, 25000, 1, 120000, '2023-03-03 05:50:36', 'Selesai'),
('1677793836', '167779383604', 1, 'Teh', 12000, 6000, 2, 120000, '2023-03-03 05:50:36', 'Selesai'),
('1677793886', '167779388601', 1, 'Bakso Campur', 33000, 33000, 1, 70000, '2023-03-03 05:51:26', 'Selesai'),
('1677793886', '167779388602', 1, 'Bakso Urat', 25000, 25000, 1, 70000, '2023-03-03 05:51:26', 'Selesai'),
('1677793886', '167779388603', 1, 'Teh', 12000, 6000, 2, 70000, '2023-03-03 05:51:26', 'Selesai'),
('1677793917', '167779391701', 1, 'Mie Goreng Bakso', 25000, 25000, 1, 80000, '2023-03-03 05:51:57', 'Selesai'),
('1677793917', '167779391702', 1, 'Nasi Goreng Spesial', 30000, 30000, 1, 80000, '2023-03-03 05:51:57', 'Selesai'),
('1677793917', '167779391703', 1, 'Es Jeruk', 20000, 10000, 2, 80000, '2023-03-03 05:51:57', 'Selesai'),
('1677793946', '167779394601', 1, 'Nasi Goreng Spesial', 30000, 30000, 1, 70000, '2023-02-13 05:52:26', 'Selesai'),
('1677793946', '167779394602', 1, 'Nasi Goreng Bakso', 27000, 27000, 1, 70000, '2023-02-20 05:52:26', 'Selesai'),
('1677793946', '167779394603', 1, 'Teh', 12000, 6000, 2, 70000, '2023-02-13 05:52:26', 'Selesai'),
('1677794026', '167779402601', 1, 'Bakso Goreng', 40000, 20000, 2, 100000, '2023-02-13 05:53:46', 'Selesai'),
('1677794026', '167779402602', 1, 'Nasi Goreng Spesial', 60000, 30000, 2, 100000, '2023-03-03 05:53:46', 'Selesai'),
('1677794072', '167779407201', 1, 'Nasi Goreng Biasa', 22000, 22000, 1, 100000, '2023-03-03 05:54:32', 'Selesai'),
('1677794072', '167779407202', 1, 'Nasi Goreng Telur', 25000, 25000, 1, 100000, '2023-03-03 05:54:33', 'Selesai'),
('1677794072', '167779407203', 1, 'Mie Pangsit Bakso Tenes', 28000, 28000, 1, 100000, '2023-03-03 05:54:33', 'Selesai'),
('1677794072', '167779407204', 1, 'Teh', 24000, 6000, 4, 100000, '2023-03-03 05:54:33', 'Selesai'),
('1677796789', '167779678901', 1, 'Mie Pangsit Bakso Tenes', 28000, 28000, 1, 70000, '2023-03-03 06:39:49', 'Selesai'),
('1677796789', '167779678902', 1, 'Nasi Goreng Biasa', 22000, 22000, 1, 70000, '2023-03-03 06:39:49', 'Selesai'),
('1677796789', '167779678903', 1, 'Es Jeruk', 10000, 10000, 1, 70000, '2023-03-03 06:39:49', 'Selesai'),
('1677796789', '167779678904', 1, 'Teh', 6000, 6000, 1, 70000, '2023-03-03 06:39:49', 'Selesai'),
('1677796874', '167779687401', 1, 'Bakso Goreng', 20000, 20000, 1, 60000, '2023-03-03 06:41:14', 'Selesai'),
('1677796874', '167779687402', 1, 'Mie Goreng Bakso', 25000, 25000, 1, 60000, '2023-03-03 06:41:14', 'Selesai'),
('1677796874', '167779687403', 1, 'Teh', 12000, 6000, 2, 60000, '2023-03-03 06:41:14', 'Selesai'),
('1677796933', '167779693301', 1, 'Nasi Goreng Bakso', 27000, 27000, 1, 60000, '2023-03-03 06:42:13', 'Selesai'),
('1677796933', '167779693302', 1, 'Nasi Goreng Spesial', 30000, 30000, 1, 60000, '2023-03-03 06:42:13', 'Selesai'),
('1677796963', '167779696301', 1, 'Nasi Goreng Spesial', 30000, 30000, 1, 110000, '2023-03-03 06:42:43', 'Selesai'),
('1677796963', '167779696302', 1, 'Nasi Goreng Bakso', 27000, 27000, 1, 110000, '2023-03-03 06:42:43', 'Selesai'),
('1677796963', '167779696303', 1, 'Mie Goreng Biasa', 22000, 22000, 1, 110000, '2023-03-03 06:42:43', 'Selesai'),
('1677796963', '167779696304', 1, 'Es Jeruk', 30000, 10000, 3, 110000, '2023-03-03 06:42:43', 'Selesai'),
('1677796993', '167779699301', 1, 'Mie Goreng Bakso', 25000, 25000, 1, 60000, '2023-03-03 06:43:13', 'Selesai'),
('1677796993', '167779699302', 1, 'Mie Goreng Biasa', 22000, 22000, 1, 60000, '2023-03-03 06:43:13', 'Selesai'),
('1677796993', '167779699303', 1, 'Teh', 12000, 6000, 2, 60000, '2023-03-03 06:43:13', 'Selesai'),
('1677797038', '167779703801', 1, 'Mie Goreng Bakso', 50000, 25000, 2, 50000, '2023-03-03 06:43:58', 'Selesai'),
('1677797068', '167779706801', 1, 'Mie Pangsit Biasa', 25000, 25000, 1, 70000, '2023-03-03 06:44:28', 'Selesai'),
('1677797068', '167779706802', 1, 'Mie Pangsit Bakso Campur', 33000, 33000, 1, 70000, '2023-03-03 06:44:28', 'Selesai'),
('1677797068', '167779706803', 1, 'Teh', 12000, 6000, 2, 70000, '2023-03-03 06:44:28', 'Selesai'),
('1677797184', '167779718403', 1, 'Nasi Goreng Biasa', 704000, 22000, 32, 7000000, '2023-02-21 06:46:24', 'Selesai'),
('1677797184', '167779718406', 1, 'Teh', 318000, 6000, 53, 7000000, '2023-02-09 06:46:24', 'Selesai'),
('1677797184', '167779718407', 1, 'Es Jeruk', 340000, 10000, 34, 7000000, '2023-02-15 06:46:24', 'Selesai'),
('1677797435', '167779743501', 1, 'Mie Goreng Bakso', 775000, 25000, 31, 3200000, '2023-02-21 06:50:35', 'Selesai'),
('1677797435', '167779743503', 1, 'Mie Pangsit Biasa', 825000, 25000, 33, 3200000, '2023-02-14 06:50:35', 'Selesai'),
('1677797498', '167779749801', 1, 'Nasi Goreng Biasa', 924000, 22000, 42, 2900000, '2023-02-17 06:51:38', 'Selesai'),
('1677797498', '167779749803', 1, 'Nasi Goreng Telur', 600000, 25000, 24, 2900000, '2023-02-27 06:51:39', 'Selesai'),
('1677797498', '167779749804', 1, 'Teh', 318000, 6000, 53, 2900000, '2023-03-05 06:51:39', 'Selesai'),
('1677798631', '167779863104', 1, 'Mie Pangsit Biasa', 2075000, 25000, 83, 30000000, '2023-02-16 07:10:31', 'Selesai'),
('1677798631', '167779863105', 1, 'Bakso Campur', 3564000, 33000, 108, 30000000, '2023-02-16 07:10:32', 'Selesai'),
('1677798631', '167779863106', 1, 'Mie Pangsit Bakso Campur', 3861000, 33000, 117, 30000000, '2023-02-16 07:10:32', 'Selesai'),
('1677798631', '167779863107', 1, 'Nasi Goreng Biasa', 3014000, 22000, 137, 30000000, '2023-02-16 07:10:32', 'Selesai'),
('1677799095', '167779909502', 1, 'Nasi Goreng Biasa', 4400000, 22000, 200, 34000000, '2023-03-03 07:18:15', 'Selesai'),
('1677799095', '167779909504', 1, 'Mie Goreng Biasa', 3058000, 22000, 139, 34000000, '2023-03-03 07:18:15', 'Selesai'),
('1677799095', '167779909505', 1, 'Bakso Halus', 6292000, 22000, 286, 34000000, '2023-03-03 07:18:15', 'Selesai'),
('1677799095', '167779909506', 1, 'Bakso Urat', 4450000, 25000, 178, 34000000, '2023-03-03 07:18:15', 'Selesai'),
('1677799095', '167779909507', 1, 'Teh', 3108000, 6000, 518, 34000000, '2023-03-03 07:18:15', 'Selesai'),
('1677799095', '167779909508', 1, 'Es Jeruk', 1510000, 10000, 151, 34000000, '2023-03-03 07:18:15', 'Selesai'),
('1677799095', '167779909509', 1, 'Mie Pangsit Biasa', 25000, 25000, 1, 34000000, '2023-03-03 07:18:15', 'Selesai'),
('1677799095', '167779909510', 1, 'Bakso Campur', 33000, 33000, 1, 34000000, '2023-03-03 07:18:15', 'Selesai'),
('1684260098', '168426009801', 1, 'Bakso Halus', 66000, 22000, 3, 220000, '2023-05-17 02:01:38', 'Selesai'),
('1684260098', '168426009802', 1, 'Bakso Urat', 50000, 25000, 2, 220000, '2023-05-17 02:01:38', 'Selesai'),
('1684558691', '168455869101', 1, 'Bakso Halus', 22000, 22000, 1, 100000, '2023-05-20 12:58:11', 'Selesai'),
('1684558691', '168455869102', 1, 'Bakso Urat', 25000, 25000, 1, 100000, '2023-05-20 12:58:11', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(12) NOT NULL,
  `telepon` text NOT NULL,
  `alamat` text NOT NULL,
  `akses_level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `telepon`, `alamat`, `akses_level`) VALUES
(1, 'admin-akbar', 'admin@gmail.com', 'admin', '62857689998', 'jl. sultan alauddin', 'admin'),
(151, 'admin--a', 'admin2@gmail.com', '1234567', '082762786286', 'jl. rusa', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya_produksi`
--
ALTER TABLE `biaya_produksi`
  ADD PRIMARY KEY (`id_by`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya_produksi`
--
ALTER TABLE `biaya_produksi`
  MODIFY `id_by` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
