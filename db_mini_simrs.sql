-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2025 at 03:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mini_simrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_transaksi` varchar(50) DEFAULT NULL,
  `nama_tindakan` varchar(255) NOT NULL,
  `harga` double(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `no_transaksi`, `nama_tindakan`, `harga`, `qty`, `subtotal`, `created_at`, `updated_at`) VALUES
(9, 'TRX000002', 'perban', 1000.00, 1, 1000.00, NULL, NULL),
(10, 'TRX000002', 'rawat luka', 2000.00, 1, 2000.00, NULL, NULL),
(11, 'TRX000002', 'new tindakan', 200.00, 4, 800.00, NULL, NULL),
(12, 'TRX000003', 'perban', 1000.00, 1, 1000.00, NULL, NULL),
(13, 'TRX000003', 'jait luka', 3000.00, 9, 27000.00, NULL, NULL),
(14, 'TRX000004', 'Pemeriksaan Poli Gigi', 10000.00, 1, 10000.00, NULL, NULL),
(15, 'TRX000004', 'Irigasi Gigi', 12000.00, 1, 12000.00, NULL, NULL),
(16, 'TRX000004', 'Pencabutan Gigi Sulung Injeksi', 2000.00, 1, 2000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_dokter` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `kode_dokter`, `nama_dokter`) VALUES
(3, 'D01', 'drg. Strange bin Sumardi, Sp.BM'),
(4, 'D02', 'dr. Anjaini');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id` int(11) NOT NULL,
  `kode_dokter` varchar(50) DEFAULT NULL,
  `kode_poli` varchar(50) DEFAULT NULL,
  `hari_praktek` varchar(50) DEFAULT NULL,
  `jam_prakter` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id`, `kode_dokter`, `kode_poli`, `hari_praktek`, `jam_prakter`) VALUES
(1, 'D01', 'MAT', 'senin', '08:00'),
(2, 'D01', 'MAT', 'selasa', '08:00'),
(3, 'D01', 'MAT', 'rabu', '08:00'),
(4, 'D01', 'MAT', 'senin', '11:00'),
(5, 'D02', 'UM', 'jumat', '08:00'),
(6, 'D02', 'UM', 'selasa', '10:00'),
(7, 'D02', 'UM', 'rabu', '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_registrasikunjungan` varchar(255) NOT NULL,
  `no_rm` varchar(255) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `jam_kunjungan` varchar(25) DEFAULT NULL,
  `no_antrian` int(11) DEFAULT NULL,
  `kode_dokter` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `instalasi` varchar(255) NOT NULL,
  `penjamin_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `no_registrasikunjungan`, `no_rm`, `tanggal_kunjungan`, `jam_kunjungan`, `no_antrian`, `kode_dokter`, `poli`, `instalasi`, `penjamin_id`) VALUES
(3, 'REG000002', '1115', '2025-11-22', '09:00', 1, 'D01', 'GIG', 'IGD', '2'),
(4, 'REG000003', '1111', '2025-11-25', '09:00', 1, 'D02', 'UM', 'Rawat Inap', '4'),
(5, 'REG000004', '1111', '2025-11-21', '09:00', 1, 'D01', 'UM', 'IGD', '2'),
(6, 'REG000005', '1115', '2025-11-17', '11:00', 1, 'D01', 'GIG', 'Rawat Jalan', '2'),
(7, 'REG000006', '1115', '2025-11-17', '11:00', 2, 'D01', 'GIG', 'Rawat Jalan', '2'),
(8, 'REG000007', '1113', '2025-11-17', '11:00', 3, 'D01', 'GIG', 'Rawat Jalan', '2'),
(9, 'REG000008', '1115', '2025-11-25', '10:00', 1, 'D02', 'UM', 'Rawat Jalan', '3'),
(10, 'REG000009', '1115', '2025-11-25', '10:00', 2, 'D02', 'UM', 'Rawat Jalan', '2'),
(11, 'REG000010', '1115', '2025-11-17', '11:00', 4, 'D01', 'GIG', 'Rawat Jalan', '3'),
(12, 'REG000011', '1115', '2025-12-01', '11:00', 1, 'D01', 'GIG', 'Rawat Jalan', '3'),
(13, 'REG000012', '1115', '2025-12-09', '10:00', 1, 'D02', 'UM', 'Rawat Jalan', '2'),
(14, 'REG000013', '1115', '2025-12-23', '10:00', 1, 'D02', 'UM', 'Rawat Jalan', '2'),
(15, 'REG000014', '1115', '2025-12-19', '08:00', 1, 'D02', 'UM', 'Rawat Jalan', '1'),
(16, 'REG000015', '1115', '2025-12-01', '08:00', 1, 'D01', 'GIG', 'Rawat Jalan', '2'),
(17, 'REG000016', '1115', '2025-11-26', '10:00', 1, 'D02', 'UM', 'Rawat Jalan', '1'),
(18, 'REG000017', '1122', '2025-11-24', '11:00', NULL, 'D01', 'GIG', 'Rawat Jalan', '2');

-- --------------------------------------------------------

--
-- Table structure for table `master_odontogram`
--

CREATE TABLE `master_odontogram` (
  `id` int(11) NOT NULL,
  `kode` varchar(40) DEFAULT NULL,
  `arti` varchar(250) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `kategori` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2025_11_20_003600_create_pasien_table', 1),
(5, '2025_11_20_003712_create_kunjungan_table', 1),
(6, '2025_11_20_003723_create_dokter_table', 1),
(7, '2025_11_20_003736_create_poli_table', 1),
(8, '2025_11_20_003753_create_penjamin_table', 1),
(9, '2025_11_20_003809_create_transaksi_table', 1),
(10, '2025_11_20_003850_create_detail_transaksi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_rm` varchar(255) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `no_rm`, `nama_pasien`, `tanggal_lahir`, `jenis_kelamin`, `alamat`) VALUES
(1, '1111', 'Carolyn', '2025-11-20', 'Perempuan', 'gurah'),
(2, '1113', 'Caroline', '2025-11-20', 'Laki - Laki', 'gurah'),
(4, '1115', 'Abigail', '2025-09-09', 'Laki - Laki', 'Gurah'),
(7, '1122', 'Jhon Doe', '2025-09-09', 'Laki - Laki', 'Gurah');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjamin`
--

CREATE TABLE `penjamin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penjamin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjamin`
--

INSERT INTO `penjamin` (`id`, `nama_penjamin`) VALUES
(1, 'BPJS'),
(2, 'BPJS TK'),
(3, 'UMUM'),
(4, 'Astra Life');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_poli` varchar(255) NOT NULL,
  `nama_poli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `kode_poli`, `nama_poli`) VALUES
(1, 'MAT', 'Poli Mata'),
(2, 'UM', 'Poli UMUM'),
(3, 'GIG', 'Poli GIGI');

-- --------------------------------------------------------

--
-- Table structure for table `rm_diagnosa`
--

CREATE TABLE `rm_diagnosa` (
  `id` bigint(20) NOT NULL,
  `no_registrasikunjungan` varchar(100) DEFAULT NULL,
  `no_rm` varchar(100) DEFAULT NULL,
  `diagnosa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rm_diagnosa`
--

INSERT INTO `rm_diagnosa` (`id`, `no_registrasikunjungan`, `no_rm`, `diagnosa`) VALUES
(1, 'REG000010', '1115', 'Gigi keropos'),
(2, 'REG000017', '1122', 'test diagnosa'),
(3, 'REG000002', '1115', 'Gigi Sakit, Gusi Bengkak'),
(4, 'REG000007', '1113', 'Pulpitis');

-- --------------------------------------------------------

--
-- Table structure for table `rm_odontogram`
--

CREATE TABLE `rm_odontogram` (
  `id` bigint(20) NOT NULL,
  `no_registrasikunjungan` varchar(200) DEFAULT NULL,
  `no_rm` varchar(50) DEFAULT NULL,
  `tgl_pemeriksaan` date DEFAULT NULL,
  `occulusi` varchar(50) DEFAULT NULL,
  `torus_palatinus` varchar(50) DEFAULT NULL,
  `torus_madibularis` varchar(50) DEFAULT NULL,
  `palatum` varchar(50) DEFAULT NULL,
  `diastema` varchar(50) DEFAULT NULL,
  `ket_diastema` text DEFAULT NULL,
  `gigi_anomali` varchar(50) DEFAULT NULL,
  `ket_gigi_anomali` text DEFAULT NULL,
  `lain_lain` text DEFAULT NULL,
  `input_d` varchar(20) DEFAULT NULL,
  `input_m` varchar(20) DEFAULT NULL,
  `input_f` varchar(20) DEFAULT NULL,
  `gambar_odontogram` longtext DEFAULT NULL,
  `keterangan_odontogram` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rm_odontogram`
--

INSERT INTO `rm_odontogram` (`id`, `no_registrasikunjungan`, `no_rm`, `tgl_pemeriksaan`, `occulusi`, `torus_palatinus`, `torus_madibularis`, `palatum`, `diastema`, `ket_diastema`, `gigi_anomali`, `ket_gigi_anomali`, `lain_lain`, `input_d`, `input_m`, `input_f`, `gambar_odontogram`, `keterangan_odontogram`) VALUES
(1, 'REG000017', '1122', '2025-11-24', 'Normal Bite', 'Tidak Ada', 'Tidak Ada', 'Dalam', 'Tidak Ada', 'asdf', 'Tidak Ada', 'asdf', 'asdf wdasfasdf', '3', '3', '2', '{\"teeth\":[{\"code\":\"COF\",\"pos\":\"85-M\"},{\"code\":\"NVT\",\"pos\":\"83\"},{\"code\":\"NON\",\"pos\":\"82\"},{\"code\":\"UNE\",\"pos\":\"81\"},{\"code\":\"ARROW_TOP_LEFT\",\"pos\":\"36\"},{\"code\":\"NON\",\"pos\":\"41\"},{\"code\":\"RCT\",\"pos\":\"72\"},{\"code\":\"IPX\",\"pos\":\"23\"},{\"code\":\"IPX\",\"pos\":\"27\"}],\"bridges\":[{\"name\":\"BRIDGE\",\"startVert\":[{\"x\":\"221.875\",\"y\":\"301.875\"},{\"x\":\"282.5\",\"y\":\"362.5\"}],\"endVert\":[{\"x\":\"363.125\",\"y\":\"301.875\"},{\"x\":\"423.75\",\"y\":\"362.5\"}],\"options\":{\"strokeStyle\":\"#555\"}}]}', '[{\"nomor_gigi\":18,\"keterangan\":null},{\"nomor_gigi\":17,\"keterangan\":null},{\"nomor_gigi\":16,\"keterangan\":null},{\"nomor_gigi\":15,\"keterangan\":null},{\"nomor_gigi\":14,\"keterangan\":null},{\"nomor_gigi\":13,\"keterangan\":null},{\"nomor_gigi\":12,\"keterangan\":null},{\"nomor_gigi\":11,\"keterangan\":null},{\"nomor_gigi\":21,\"keterangan\":null},{\"nomor_gigi\":22,\"keterangan\":null},{\"nomor_gigi\":23,\"keterangan\":\"ipx\"},{\"nomor_gigi\":24,\"keterangan\":null},{\"nomor_gigi\":25,\"keterangan\":null},{\"nomor_gigi\":26,\"keterangan\":null},{\"nomor_gigi\":27,\"keterangan\":\"ipx\"},{\"nomor_gigi\":28,\"keterangan\":null},{\"nomor_gigi\":38,\"keterangan\":null},{\"nomor_gigi\":37,\"keterangan\":null},{\"nomor_gigi\":36,\"keterangan\":\"test\"},{\"nomor_gigi\":35,\"keterangan\":null},{\"nomor_gigi\":34,\"keterangan\":null},{\"nomor_gigi\":33,\"keterangan\":null},{\"nomor_gigi\":32,\"keterangan\":null},{\"nomor_gigi\":31,\"keterangan\":null},{\"nomor_gigi\":41,\"keterangan\":\"non\"},{\"nomor_gigi\":42,\"keterangan\":null},{\"nomor_gigi\":43,\"keterangan\":\"\"},{\"nomor_gigi\":44,\"keterangan\":null},{\"nomor_gigi\":45,\"keterangan\":null},{\"nomor_gigi\":46,\"keterangan\":null},{\"nomor_gigi\":47,\"keterangan\":null},{\"nomor_gigi\":48,\"keterangan\":null},{\"nomor_gigi\":55,\"keterangan\":null},{\"nomor_gigi\":54,\"keterangan\":null},{\"nomor_gigi\":53,\"keterangan\":null},{\"nomor_gigi\":52,\"keterangan\":null},{\"nomor_gigi\":51,\"keterangan\":null},{\"nomor_gigi\":61,\"keterangan\":null},{\"nomor_gigi\":62,\"keterangan\":null},{\"nomor_gigi\":63,\"keterangan\":null},{\"nomor_gigi\":64,\"keterangan\":null},{\"nomor_gigi\":65,\"keterangan\":null},{\"nomor_gigi\":85,\"keterangan\":\"cof\"},{\"nomor_gigi\":84,\"keterangan\":null},{\"nomor_gigi\":83,\"keterangan\":\"nvt\"},{\"nomor_gigi\":82,\"keterangan\":\"non\"},{\"nomor_gigi\":81,\"keterangan\":\"une\"},{\"nomor_gigi\":71,\"keterangan\":null},{\"nomor_gigi\":72,\"keterangan\":\"rct\"},{\"nomor_gigi\":73,\"keterangan\":null},{\"nomor_gigi\":74,\"keterangan\":null},{\"nomor_gigi\":75,\"keterangan\":null}]'),
(2, 'REG000015', '1115', '2025-12-01', 'Normal Bite', 'Tidak Ada', 'Tidak Ada', 'Dalam', 'Tidak Ada', 'test', 'Tidak Ada', 'test', 'test test', '9', '1', '0', '{\"teeth\":[{\"code\":\"CARIES\",\"pos\":\"81-B\"},{\"code\":\"NON\",\"pos\":\"47\"},{\"code\":\"COF\",\"pos\":\"53-B\"},{\"code\":\"COF\",\"pos\":\"62-T\"},{\"code\":\"POC\",\"pos\":\"72\"},{\"code\":\"POC\",\"pos\":\"18\"},{\"code\":\"POC\",\"pos\":\"28\"},{\"code\":\"RRX\",\"pos\":\"11\"},{\"code\":\"MIS\",\"pos\":\"24\"},{\"code\":\"MIS\",\"pos\":\"25\"}],\"bridges\":[{\"name\":\"BRIDGE\",\"startVert\":[{\"x\":\"816.875\",\"y\":\"301.875\"},{\"x\":\"877.5\",\"y\":\"362.5\"}],\"endVert\":[{\"x\":\"1028.75\",\"y\":\"301.875\"},{\"x\":\"1089.375\",\"y\":\"362.5\"}],\"options\":{\"strokeStyle\":\"#555\"}}]}', '[{\"nomor_gigi\":18,\"keterangan\":\"poc\"},{\"nomor_gigi\":17,\"keterangan\":null},{\"nomor_gigi\":16,\"keterangan\":null},{\"nomor_gigi\":15,\"keterangan\":null},{\"nomor_gigi\":14,\"keterangan\":null},{\"nomor_gigi\":13,\"keterangan\":null},{\"nomor_gigi\":12,\"keterangan\":null},{\"nomor_gigi\":11,\"keterangan\":\"rrx\"},{\"nomor_gigi\":21,\"keterangan\":null},{\"nomor_gigi\":22,\"keterangan\":null},{\"nomor_gigi\":23,\"keterangan\":null},{\"nomor_gigi\":24,\"keterangan\":\"mis\"},{\"nomor_gigi\":25,\"keterangan\":\"mis\"},{\"nomor_gigi\":26,\"keterangan\":null},{\"nomor_gigi\":27,\"keterangan\":null},{\"nomor_gigi\":28,\"keterangan\":\"poc\"},{\"nomor_gigi\":38,\"keterangan\":null},{\"nomor_gigi\":37,\"keterangan\":\"\"},{\"nomor_gigi\":36,\"keterangan\":null},{\"nomor_gigi\":35,\"keterangan\":null},{\"nomor_gigi\":34,\"keterangan\":null},{\"nomor_gigi\":33,\"keterangan\":null},{\"nomor_gigi\":32,\"keterangan\":null},{\"nomor_gigi\":31,\"keterangan\":null},{\"nomor_gigi\":41,\"keterangan\":null},{\"nomor_gigi\":42,\"keterangan\":null},{\"nomor_gigi\":43,\"keterangan\":null},{\"nomor_gigi\":44,\"keterangan\":null},{\"nomor_gigi\":45,\"keterangan\":null},{\"nomor_gigi\":46,\"keterangan\":null},{\"nomor_gigi\":47,\"keterangan\":\"non\"},{\"nomor_gigi\":48,\"keterangan\":null},{\"nomor_gigi\":55,\"keterangan\":null},{\"nomor_gigi\":54,\"keterangan\":null},{\"nomor_gigi\":53,\"keterangan\":\"cof\"},{\"nomor_gigi\":52,\"keterangan\":null},{\"nomor_gigi\":51,\"keterangan\":null},{\"nomor_gigi\":61,\"keterangan\":null},{\"nomor_gigi\":62,\"keterangan\":\"cof\"},{\"nomor_gigi\":63,\"keterangan\":null},{\"nomor_gigi\":64,\"keterangan\":null},{\"nomor_gigi\":65,\"keterangan\":null},{\"nomor_gigi\":85,\"keterangan\":null},{\"nomor_gigi\":84,\"keterangan\":null},{\"nomor_gigi\":83,\"keterangan\":null},{\"nomor_gigi\":82,\"keterangan\":null},{\"nomor_gigi\":81,\"keterangan\":\"car\"},{\"nomor_gigi\":71,\"keterangan\":null},{\"nomor_gigi\":72,\"keterangan\":\"poc\"},{\"nomor_gigi\":73,\"keterangan\":null},{\"nomor_gigi\":74,\"keterangan\":null},{\"nomor_gigi\":75,\"keterangan\":null}]'),
(3, 'REG000014', '1115', '2025-12-31', 'Normal Bite', 'Tidak Ada', 'Tidak Ada', 'Dalam', 'Ada', 'test edit', 'Ada', 'test edit', 'test edit lain lain', '7', '1', '2', '{\"teeth\":[{\"code\":\"AMF\",\"pos\":\"45-M\"},{\"code\":\"POC\",\"pos\":\"44\"},{\"code\":\"POC\",\"pos\":\"44\"},{\"code\":\"IPX\",\"pos\":\"32\"},{\"code\":\"POC\",\"pos\":\"35\"},{\"code\":\"CFR\",\"pos\":\"21\"},{\"code\":\"MIS\",\"pos\":\"55\"},{\"code\":\"FMC\",\"pos\":\"31\"},{\"code\":\"UNE\",\"pos\":\"65\"},{\"code\":\"POC\",\"pos\":\"81\"},{\"code\":\"ARROW_TOP_TURN_LEFT\",\"pos\":\"75\"},{\"code\":\"CFR\",\"pos\":\"28\"}],\"bridges\":[{\"name\":\"BRIDGE\",\"startVert\":[{\"x\":\"816.875\",\"y\":\"301.875\"},{\"x\":\"877.5\",\"y\":\"362.5\"}],\"endVert\":[{\"x\":\"958.125\",\"y\":\"301.875\"},{\"x\":\"1018.75\",\"y\":\"362.5\"}],\"options\":{\"strokeStyle\":\"#555\"}}]}', '[{\"nomor_gigi\":18,\"keterangan\":null},{\"nomor_gigi\":17,\"keterangan\":null},{\"nomor_gigi\":16,\"keterangan\":null},{\"nomor_gigi\":15,\"keterangan\":null},{\"nomor_gigi\":14,\"keterangan\":null},{\"nomor_gigi\":13,\"keterangan\":null},{\"nomor_gigi\":12,\"keterangan\":null},{\"nomor_gigi\":11,\"keterangan\":null},{\"nomor_gigi\":21,\"keterangan\":\"cfr\"},{\"nomor_gigi\":22,\"keterangan\":null},{\"nomor_gigi\":23,\"keterangan\":null},{\"nomor_gigi\":24,\"keterangan\":null},{\"nomor_gigi\":25,\"keterangan\":null},{\"nomor_gigi\":26,\"keterangan\":null},{\"nomor_gigi\":27,\"keterangan\":null},{\"nomor_gigi\":28,\"keterangan\":\"cfr\"},{\"nomor_gigi\":38,\"keterangan\":null},{\"nomor_gigi\":37,\"keterangan\":null},{\"nomor_gigi\":36,\"keterangan\":\"brd\"},{\"nomor_gigi\":35,\"keterangan\":\"poc\"},{\"nomor_gigi\":34,\"keterangan\":\"brd\"},{\"nomor_gigi\":33,\"keterangan\":null},{\"nomor_gigi\":32,\"keterangan\":\"ipx\"},{\"nomor_gigi\":31,\"keterangan\":\"fmc\"},{\"nomor_gigi\":41,\"keterangan\":null},{\"nomor_gigi\":42,\"keterangan\":null},{\"nomor_gigi\":43,\"keterangan\":null},{\"nomor_gigi\":44,\"keterangan\":\"poc\"},{\"nomor_gigi\":45,\"keterangan\":\"amf\"},{\"nomor_gigi\":46,\"keterangan\":null},{\"nomor_gigi\":47,\"keterangan\":null},{\"nomor_gigi\":48,\"keterangan\":null},{\"nomor_gigi\":55,\"keterangan\":\"mis\"},{\"nomor_gigi\":54,\"keterangan\":null},{\"nomor_gigi\":53,\"keterangan\":null},{\"nomor_gigi\":52,\"keterangan\":null},{\"nomor_gigi\":51,\"keterangan\":null},{\"nomor_gigi\":61,\"keterangan\":null},{\"nomor_gigi\":62,\"keterangan\":null},{\"nomor_gigi\":63,\"keterangan\":null},{\"nomor_gigi\":64,\"keterangan\":null},{\"nomor_gigi\":65,\"keterangan\":\"une\"},{\"nomor_gigi\":85,\"keterangan\":null},{\"nomor_gigi\":84,\"keterangan\":null},{\"nomor_gigi\":83,\"keterangan\":null},{\"nomor_gigi\":82,\"keterangan\":null},{\"nomor_gigi\":81,\"keterangan\":\"poc\"},{\"nomor_gigi\":71,\"keterangan\":null},{\"nomor_gigi\":72,\"keterangan\":null},{\"nomor_gigi\":73,\"keterangan\":null},{\"nomor_gigi\":74,\"keterangan\":null},{\"nomor_gigi\":75,\"keterangan\":\"text\"}]'),
(4, 'REG000010', '1115', '2025-11-17', 'Cross Bite', 'Sedang', 'Sisi Kanan', 'Sedang', 'Ada', 'input baru', 'Ada', 'input baru edit', 'input baru', '7', '0', '0', '{\"teeth\":[{\"code\":\"CARIES\",\"pos\":\"41-B\"},{\"code\":\"CFR\",\"pos\":\"81\"},{\"code\":\"RRX\",\"pos\":\"72\"},{\"code\":\"MIS\",\"pos\":\"52\"},{\"code\":\"POC\",\"pos\":\"44\"},{\"code\":\"POC\",\"pos\":\"35\"},{\"code\":\"POC\",\"pos\":\"36\"},{\"code\":\"COF\",\"pos\":\"11-B\"},{\"code\":\"COF\",\"pos\":\"13-T\"}],\"bridges\":[{\"name\":\"BRIDGE\",\"startVert\":[{\"x\":\"816.875\",\"y\":\"301.875\"},{\"x\":\"877.5\",\"y\":\"362.5\"}],\"endVert\":[{\"x\":\"1028.75\",\"y\":\"301.875\"},{\"x\":\"1089.375\",\"y\":\"362.5\"}],\"options\":{\"strokeStyle\":\"#555\"}}]}', '[{\"nomor_gigi\":18,\"keterangan\":null},{\"nomor_gigi\":17,\"keterangan\":null},{\"nomor_gigi\":16,\"keterangan\":null},{\"nomor_gigi\":15,\"keterangan\":null},{\"nomor_gigi\":14,\"keterangan\":null},{\"nomor_gigi\":13,\"keterangan\":\"cof\"},{\"nomor_gigi\":12,\"keterangan\":null},{\"nomor_gigi\":11,\"keterangan\":null},{\"nomor_gigi\":21,\"keterangan\":null},{\"nomor_gigi\":22,\"keterangan\":null},{\"nomor_gigi\":23,\"keterangan\":null},{\"nomor_gigi\":24,\"keterangan\":null},{\"nomor_gigi\":25,\"keterangan\":null},{\"nomor_gigi\":26,\"keterangan\":null},{\"nomor_gigi\":27,\"keterangan\":null},{\"nomor_gigi\":28,\"keterangan\":null},{\"nomor_gigi\":38,\"keterangan\":null},{\"nomor_gigi\":37,\"keterangan\":\"\"},{\"nomor_gigi\":36,\"keterangan\":\"poc\"},{\"nomor_gigi\":35,\"keterangan\":\"poc\"},{\"nomor_gigi\":34,\"keterangan\":null},{\"nomor_gigi\":33,\"keterangan\":null},{\"nomor_gigi\":32,\"keterangan\":null},{\"nomor_gigi\":31,\"keterangan\":null},{\"nomor_gigi\":41,\"keterangan\":\"car\"},{\"nomor_gigi\":42,\"keterangan\":null},{\"nomor_gigi\":43,\"keterangan\":null},{\"nomor_gigi\":44,\"keterangan\":\"poc\"},{\"nomor_gigi\":45,\"keterangan\":null},{\"nomor_gigi\":46,\"keterangan\":null},{\"nomor_gigi\":47,\"keterangan\":null},{\"nomor_gigi\":48,\"keterangan\":null},{\"nomor_gigi\":55,\"keterangan\":null},{\"nomor_gigi\":54,\"keterangan\":null},{\"nomor_gigi\":53,\"keterangan\":null},{\"nomor_gigi\":52,\"keterangan\":\"mis\"},{\"nomor_gigi\":51,\"keterangan\":null},{\"nomor_gigi\":61,\"keterangan\":null},{\"nomor_gigi\":62,\"keterangan\":null},{\"nomor_gigi\":63,\"keterangan\":null},{\"nomor_gigi\":64,\"keterangan\":null},{\"nomor_gigi\":65,\"keterangan\":null},{\"nomor_gigi\":85,\"keterangan\":null},{\"nomor_gigi\":84,\"keterangan\":null},{\"nomor_gigi\":83,\"keterangan\":null},{\"nomor_gigi\":82,\"keterangan\":null},{\"nomor_gigi\":81,\"keterangan\":\"cfr\"},{\"nomor_gigi\":71,\"keterangan\":null},{\"nomor_gigi\":72,\"keterangan\":\"rrx\"},{\"nomor_gigi\":73,\"keterangan\":null},{\"nomor_gigi\":74,\"keterangan\":null},{\"nomor_gigi\":75,\"keterangan\":null}]'),
(5, 'REG000002', '1115', '2025-11-23', 'Cross Bite', 'Kecil', 'Sisi Kanan', 'Sedang', 'Tidak Ada', 'test', 'Tidak Ada', 'test', 'test', '3', '2', '3', '{\"teeth\":[{\"code\":\"CARIES\",\"pos\":\"41-B\"},{\"code\":\"FMC\",\"pos\":\"31\"},{\"code\":\"NON\",\"pos\":\"82\"},{\"code\":\"ANO\",\"pos\":\"46\"},{\"code\":\"AMF\",\"pos\":\"51-B\"},{\"code\":\"FIS\",\"pos\":\"61-T\"},{\"code\":\"FIS\",\"pos\":\"65-M\"},{\"code\":\"NVT\",\"pos\":\"13\"},{\"code\":\"ARROW_BOTTOM_RIGHT\",\"pos\":\"44\"}],\"bridges\":[{\"name\":\"BRIDGE\",\"startVert\":[{\"x\":\"816.875\",\"y\":\"301.875\"},{\"x\":\"877.5\",\"y\":\"362.5\"}],\"endVert\":[{\"x\":\"1028.75\",\"y\":\"301.875\"},{\"x\":\"1089.375\",\"y\":\"362.5\"}],\"options\":{\"strokeStyle\":\"#555\"}}]}', '[{\"nomor_gigi\":18,\"keterangan\":null},{\"nomor_gigi\":17,\"keterangan\":null},{\"nomor_gigi\":16,\"keterangan\":null},{\"nomor_gigi\":15,\"keterangan\":null},{\"nomor_gigi\":14,\"keterangan\":null},{\"nomor_gigi\":13,\"keterangan\":\"nvt\"},{\"nomor_gigi\":12,\"keterangan\":null},{\"nomor_gigi\":11,\"keterangan\":null},{\"nomor_gigi\":21,\"keterangan\":null},{\"nomor_gigi\":22,\"keterangan\":null},{\"nomor_gigi\":23,\"keterangan\":null},{\"nomor_gigi\":24,\"keterangan\":null},{\"nomor_gigi\":25,\"keterangan\":null},{\"nomor_gigi\":26,\"keterangan\":null},{\"nomor_gigi\":27,\"keterangan\":null},{\"nomor_gigi\":28,\"keterangan\":null},{\"nomor_gigi\":38,\"keterangan\":null},{\"nomor_gigi\":37,\"keterangan\":\"\"},{\"nomor_gigi\":36,\"keterangan\":null},{\"nomor_gigi\":35,\"keterangan\":null},{\"nomor_gigi\":34,\"keterangan\":null},{\"nomor_gigi\":33,\"keterangan\":null},{\"nomor_gigi\":32,\"keterangan\":null},{\"nomor_gigi\":31,\"keterangan\":\"fmc\"},{\"nomor_gigi\":41,\"keterangan\":\"car\"},{\"nomor_gigi\":42,\"keterangan\":null},{\"nomor_gigi\":43,\"keterangan\":null},{\"nomor_gigi\":44,\"keterangan\":\"\"},{\"nomor_gigi\":45,\"keterangan\":null},{\"nomor_gigi\":46,\"keterangan\":\"uno\"},{\"nomor_gigi\":47,\"keterangan\":null},{\"nomor_gigi\":48,\"keterangan\":null},{\"nomor_gigi\":55,\"keterangan\":null},{\"nomor_gigi\":54,\"keterangan\":null},{\"nomor_gigi\":53,\"keterangan\":null},{\"nomor_gigi\":52,\"keterangan\":null},{\"nomor_gigi\":51,\"keterangan\":\"amf\"},{\"nomor_gigi\":61,\"keterangan\":\"fis\"},{\"nomor_gigi\":62,\"keterangan\":null},{\"nomor_gigi\":63,\"keterangan\":null},{\"nomor_gigi\":64,\"keterangan\":null},{\"nomor_gigi\":65,\"keterangan\":\"fis\"},{\"nomor_gigi\":85,\"keterangan\":null},{\"nomor_gigi\":84,\"keterangan\":null},{\"nomor_gigi\":83,\"keterangan\":null},{\"nomor_gigi\":82,\"keterangan\":\"non\"},{\"nomor_gigi\":81,\"keterangan\":null},{\"nomor_gigi\":71,\"keterangan\":null},{\"nomor_gigi\":72,\"keterangan\":null},{\"nomor_gigi\":73,\"keterangan\":null},{\"nomor_gigi\":74,\"keterangan\":null},{\"nomor_gigi\":75,\"keterangan\":null}]'),
(6, 'REG000007', '1113', '2025-11-28', 'Cross Bite', 'Sedang', 'Sisi Kanan', 'Sedang', 'Ada', 'Testing Diastema', 'Ada', 'Testing Gigi Anomali', 'Testing Lain Lain', '6', '3', '2', '{\"teeth\":[{\"code\":\"NON\",\"pos\":\"13\"},{\"code\":\"UNE\",\"pos\":\"31\"},{\"code\":\"CARIES\",\"pos\":\"43-B\"},{\"code\":\"CFR\",\"pos\":\"45\"},{\"code\":\"MIS\",\"pos\":\"62\"},{\"code\":\"MIS\",\"pos\":\"63\"},{\"code\":\"AMF\",\"pos\":\"82-T\"},{\"code\":\"AMF\",\"pos\":\"55-M\"},{\"code\":\"COF\",\"pos\":\"22-B\"},{\"code\":\"NON\",\"pos\":\"75\"},{\"code\":\"ARROW_TOP_RIGHT\",\"pos\":\"46\"},{\"code\":\"ARROW_TOP_TURN_RIGHT\",\"pos\":\"37\"},{\"code\":\"RRX\",\"pos\":\"12\"},{\"code\":\"FRM_ACR\",\"pos\":\"26\"}],\"bridges\":[]}', '[{\"nomor_gigi\":18,\"keterangan\":null},{\"nomor_gigi\":17,\"keterangan\":null},{\"nomor_gigi\":16,\"keterangan\":null},{\"nomor_gigi\":15,\"keterangan\":null},{\"nomor_gigi\":14,\"keterangan\":null},{\"nomor_gigi\":13,\"keterangan\":\"non\"},{\"nomor_gigi\":12,\"keterangan\":\"rrx\"},{\"nomor_gigi\":11,\"keterangan\":null},{\"nomor_gigi\":21,\"keterangan\":null},{\"nomor_gigi\":22,\"keterangan\":\"cof\"},{\"nomor_gigi\":23,\"keterangan\":null},{\"nomor_gigi\":24,\"keterangan\":null},{\"nomor_gigi\":25,\"keterangan\":null},{\"nomor_gigi\":26,\"keterangan\":\"prd / fld\"},{\"nomor_gigi\":27,\"keterangan\":null},{\"nomor_gigi\":28,\"keterangan\":null},{\"nomor_gigi\":38,\"keterangan\":null},{\"nomor_gigi\":37,\"keterangan\":\"\"},{\"nomor_gigi\":36,\"keterangan\":null},{\"nomor_gigi\":35,\"keterangan\":null},{\"nomor_gigi\":34,\"keterangan\":null},{\"nomor_gigi\":33,\"keterangan\":null},{\"nomor_gigi\":32,\"keterangan\":null},{\"nomor_gigi\":31,\"keterangan\":\"une\"},{\"nomor_gigi\":41,\"keterangan\":null},{\"nomor_gigi\":42,\"keterangan\":null},{\"nomor_gigi\":43,\"keterangan\":\"car\"},{\"nomor_gigi\":44,\"keterangan\":null},{\"nomor_gigi\":45,\"keterangan\":\"cfr\"},{\"nomor_gigi\":46,\"keterangan\":\"\"},{\"nomor_gigi\":47,\"keterangan\":null},{\"nomor_gigi\":48,\"keterangan\":null},{\"nomor_gigi\":55,\"keterangan\":\"amf\"},{\"nomor_gigi\":54,\"keterangan\":null},{\"nomor_gigi\":53,\"keterangan\":null},{\"nomor_gigi\":52,\"keterangan\":null},{\"nomor_gigi\":51,\"keterangan\":null},{\"nomor_gigi\":61,\"keterangan\":null},{\"nomor_gigi\":62,\"keterangan\":\"mis\"},{\"nomor_gigi\":63,\"keterangan\":\"mis\"},{\"nomor_gigi\":64,\"keterangan\":null},{\"nomor_gigi\":65,\"keterangan\":null},{\"nomor_gigi\":85,\"keterangan\":null},{\"nomor_gigi\":84,\"keterangan\":null},{\"nomor_gigi\":83,\"keterangan\":null},{\"nomor_gigi\":82,\"keterangan\":\"amf\"},{\"nomor_gigi\":81,\"keterangan\":null},{\"nomor_gigi\":71,\"keterangan\":null},{\"nomor_gigi\":72,\"keterangan\":null},{\"nomor_gigi\":73,\"keterangan\":null},{\"nomor_gigi\":74,\"keterangan\":null},{\"nomor_gigi\":75,\"keterangan\":\"non\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `rm_pemeriksaan_fisik`
--

CREATE TABLE `rm_pemeriksaan_fisik` (
  `id` bigint(20) NOT NULL,
  `no_registrasikunjungan` varchar(60) DEFAULT NULL,
  `no_rm` varchar(60) DEFAULT NULL,
  `keluhan_utama` text DEFAULT NULL,
  `spo` varchar(100) DEFAULT NULL,
  `suhu` varchar(100) DEFAULT NULL,
  `nadi` varchar(100) DEFAULT NULL,
  `pernafasaan` varchar(100) DEFAULT NULL,
  `sistolik` varchar(100) DEFAULT NULL,
  `diastolik` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rm_pemeriksaan_fisik`
--

INSERT INTO `rm_pemeriksaan_fisik` (`id`, `no_registrasikunjungan`, `no_rm`, `keluhan_utama`, `spo`, `suhu`, `nadi`, `pernafasaan`, `sistolik`, `diastolik`) VALUES
(1, 'REG000010', '1115', 'keluhan utama', '1', '2', '3', '4', '5', '6'),
(2, 'REG000017', '1122', 'test', '2', '3', '4', '5', '6', '7'),
(3, 'REG000002', '1115', 'test', '1', '2', '3', '4', '5', '6'),
(4, 'REG000007', '1113', 'Gigi lubang saat dipakai makan. baru mengeluh sakit', '95', '36', '80', '20', '110', '80');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `no_registrasikunjungan` varchar(255) NOT NULL,
  `total_harga` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `no_transaksi`, `no_registrasikunjungan`, `total_harga`) VALUES
(2, 'TRX000002', 'REG000010', 3800.00),
(3, 'TRX000003', 'REG000004', 28000.00),
(4, 'TRX000004', 'REG000010', 24000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@test.id', NULL, '$2y$10$ELCwQbY23s.jL7/STAStfOr1aYkYIrqrePw38p3j/Re.oXycCMyXa', NULL, '2025-11-19 18:03:23', '2025-11-19 18:03:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dokter_kode_dokter_unique` (`kode_dokter`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kunjungan_no_registrasikunjungan_unique` (`no_registrasikunjungan`);

--
-- Indexes for table `master_odontogram`
--
ALTER TABLE `master_odontogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pasien_no_rm_unique` (`no_rm`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penjamin`
--
ALTER TABLE `penjamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `poli_kode_poli_unique` (`kode_poli`);

--
-- Indexes for table `rm_diagnosa`
--
ALTER TABLE `rm_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rm_odontogram`
--
ALTER TABLE `rm_odontogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rm_pemeriksaan_fisik`
--
ALTER TABLE `rm_pemeriksaan_fisik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaksi_no_transaksi_unique` (`no_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `master_odontogram`
--
ALTER TABLE `master_odontogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjamin`
--
ALTER TABLE `penjamin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rm_diagnosa`
--
ALTER TABLE `rm_diagnosa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rm_odontogram`
--
ALTER TABLE `rm_odontogram`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rm_pemeriksaan_fisik`
--
ALTER TABLE `rm_pemeriksaan_fisik`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
