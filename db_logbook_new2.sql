-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 03:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_logbook_new2`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_integrasis`
--

CREATE TABLE `api_integrasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bentuk_pelatihans`
--

CREATE TABLE `bentuk_pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bentuk_pelatihans`
--

INSERT INTO `bentuk_pelatihans` (`id`, `kode`, `bentuk_pelatihan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'NKL', 'Non Klasikal', 'Pelatihan yang dilakukan melalui kegiatan yang menekankan pada proses pembelajaran praktik kerja dan/atau pembelajaran di luar kelas', '2021-11-08 18:02:42', '2021-11-13 20:42:00'),
(2, 'KL', 'Klasikal', 'Pelatihan yang dilakukan melalui kegiatan yang menekankan pada proses pembelajaran tatap muka di dalam kelas', '2021-11-08 18:02:57', '2021-11-13 20:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gap_assesments`
--

CREATE TABLE `gap_assesments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perangkat_daerah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `integritas` double(8,2) DEFAULT NULL,
  `kerjasama` double(8,2) DEFAULT NULL,
  `komunikasi` double(8,2) DEFAULT NULL,
  `orientasi` double(8,2) DEFAULT NULL,
  `pelayanan_publik` double(8,2) DEFAULT NULL,
  `pengembangan_diri` double(8,2) DEFAULT NULL,
  `mengelola_perubahan` double(8,2) DEFAULT NULL,
  `pengambilan_keputusan` double(8,2) DEFAULT NULL,
  `perekat_bangsa` double(8,2) DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jpm` double(8,2) DEFAULT NULL,
  `jpm_proyeksi` double(8,2) DEFAULT NULL,
  `saran_pengembangan1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan10` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kekuatan_10` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_penempatan_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_penempatan_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_penempatan_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gap_assesments_potensi`
--

CREATE TABLE `gap_assesments_potensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perangkat_daerah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemampuan_berpikir_kritis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemampuan_berpikir_konseptual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemampuan_berpikir_analitis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sistematika` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketelitian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengambilan_keputusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepatuhan_aturan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komitmen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daya_tahan_kerja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asertiv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adaptasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemampuan_mengarahkan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relasi_sosial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemampuan_kerjasama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_potensi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_assesment` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gap_kinerja_kompetensis`
--

CREATE TABLE `gap_kinerja_kompetensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_standar_pelatihan` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gap_kinerja_sarans`
--

CREATE TABLE `gap_kinerja_sarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_saran` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gap_standars`
--

CREATE TABLE `gap_standars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_standar` bigint(20) UNSIGNED NOT NULL,
  `id_riwayat_diklat` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_riwayat_diklat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `kode_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_kerjas`
--

CREATE TABLE `jabatan_kerjas` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan_kerjas`
--

INSERT INTO `jabatan_kerjas` (`id`, `nama_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Unit Pelayanan Kesehatan', NULL, NULL),
(2, 'Koordinator Penunjang Medik', NULL, NULL),
(3, 'Kepala Subbag Administrasi Umum', NULL, NULL),
(4, 'Koordinator Pelayanan Medik dan Keperawatan', NULL, NULL),
(5, 'Dokter Utama', NULL, NULL),
(6, 'Dokter Gigi Utama', NULL, NULL),
(7, 'Dokter Madya', NULL, NULL),
(8, 'Dokter Gigi Madya', NULL, NULL),
(9, 'Dokter Gigi Muda', NULL, NULL),
(10, 'Perawat Penyelia', NULL, NULL),
(11, 'Perawat Gigi Penyelia', NULL, NULL),
(12, 'Pranata Laboratorium Kesehatan Mahir', NULL, NULL),
(13, 'Radiografer Mahir', NULL, NULL),
(14, 'Apoteker', NULL, NULL),
(15, 'Analis Kepegawaian Pertama', NULL, NULL),
(16, 'Fisioterapis Mahir', NULL, NULL),
(17, 'Bendahara Pengeluaran', NULL, NULL),
(18, 'Perekam Medis Mahir', NULL, NULL),
(19, 'Perawat Mahir', NULL, NULL),
(20, 'Analis Pengelolaan Keuangan APBN Pertama', NULL, NULL),
(21, 'Administrator Kesehatan', NULL, NULL),
(22, 'Pranata Laboratorium Kesehatan Pelaksana', NULL, NULL),
(23, 'Pranata Laboratorium Kesehatan Terampil', NULL, NULL),
(24, 'Perawat', NULL, NULL),
(25, 'Radiografer', NULL, NULL),
(26, 'Perawat Gigi', NULL, NULL),
(27, 'Perekam Medis', NULL, NULL),
(28, 'Nutrisionis Terampil', NULL, NULL),
(29, 'Dokter Pertama', NULL, NULL),
(30, 'Pranata Komputer Pertama', NULL, NULL),
(31, 'Perencana Pertama', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jalur_pelatihans`
--

CREATE TABLE `jalur_pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bentuk` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jalur_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jalur_pelatihans`
--

INSERT INTO `jalur_pelatihans` (`id`, `id_bentuk`, `kode`, `jalur_pelatihan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 2, 'KL01', 'Pelatihan Struktural Kepemimpinan', 'Program peningkatan pengetahuan, keterampilan, dan sikap perilaku PNS untuk memenuhi Kompetensi kepemimpinan melalui proses pembelajaran secara intensif', '2021-11-08 18:03:38', '2021-11-11 10:48:05'),
(2, 2, 'KL02', 'Pelatihan Manajerial', 'Program peningkatan pengetahuan peningkatan pengetahuan, keterampilan dan sikap perilaku PNS untuk memenuhi Kompetensi teknis manajerial bidang kerja melalui proses pembelajaran secara intensif', '2021-11-11 10:11:26', '2021-11-11 10:48:28'),
(3, 2, 'KL03', 'Pelatihan Teknis', 'Program peningkatan pengetahuan, ketrampilan, dan sikap perilaku PNS untuk memenuhi Kompetensi penguasaan substantif bidang kerja melalui proses pembelajaran intensif', '2021-11-11 10:12:06', '2021-11-11 10:49:08'),
(4, 2, 'KL04', 'Pelatihan Fungsional', 'Program peningkatan pengetahuan, ketrampilan, dan sikap perilaku PNS untuk memenuhi Kompetensi bidang tugas yang terkait dengan JF melalui proses pembelajaran secara intensif', '2021-11-11 10:13:05', '2021-11-11 10:49:34'),
(5, 2, 'KL05', 'Pelatihan Sosial Kultural', 'Program peningkatan pengetahuan, ketrampilan, dan sikap perilaku PNS untuk memenuhi Kompetensi Sosial Kultural melalui proses pembelajaran secara intensif', '2021-11-11 10:13:46', '2021-11-11 10:50:00'),
(6, 2, 'KL06', 'Seminar/Konferensi/Sarasehan', 'Pertemuan ilmiah untuk meningkatkan Kompetensi terkait peningkatan kinerja dan karier yang diberikan oleh pakar/praktisi untuk memperoleh pendapat para ahli', '2021-11-11 10:14:32', '2021-11-11 10:50:27'),
(7, 2, 'KL07', 'Workshop atau Lokakarya', 'Pertemuan ilmiah untuk meningkatkan Kompetensi terkait peningkatan kinerja dan karier yang diberikan oleh pakar/praktisi.', '2021-11-11 10:16:14', '2021-11-11 10:54:01'),
(8, 2, 'KL08', 'Kursus', 'Kegiatan pembelajaran terkait suatu pengetahuan atau ketrampilan dalam waktu yang relatif singkat, dan biasanya diberikan oleh lembaga nonformal', '2021-11-11 10:16:56', '2021-11-11 10:54:33'),
(9, 2, 'KL09', 'Penataran', 'Kegiatan pembelajaran untuk meningkatkan pengetahuan dan karakter PNS dalam bidang tertentu dalam rangka peningkatan kinerja organisasi', '2021-11-11 10:17:41', '2021-11-11 10:55:23'),
(10, 2, 'KL10', 'Bimbingan Teknis', 'Pembelajaran dalam rangka memberikan bantuan untuk menyelesaikan persoalan/masalah yang bersifat khusus dan teknis', '2021-11-11 10:18:18', '2021-11-11 10:56:08'),
(11, 2, 'KL11', 'Sosialisasi', 'Kegiatan ilmiah untuk memasyarakatkan sesuatu pengetahuan dan/atau kebijakan agar menjadi lebih dikenal, dipahami, dihayati oleh PNS', '2021-11-11 10:18:56', '2021-11-11 10:56:50'),
(12, 2, 'KL12', 'Jalur klasikal Lainnya', 'Jalur Pengembangan Kompetensi dalam bentuk\r\npelatihan klasikal lainnya', '2021-11-11 10:19:48', '2021-11-11 10:19:48'),
(13, 1, 'NKL01', 'Coaching', 'Pembimbingan peningkatan kinerja melaui pembekalan kemampuan memecahkan permasalahan dengan mengoptimalkan potensi diri', '2021-11-11 10:20:23', '2021-11-11 10:58:22'),
(14, 1, 'NKL02', 'Mentoring', 'Pembimbingan peningkatan kinerja melalui transfer pengetahuan, pengalaman dan keterampilan dari orang yang lebih berpengalaman pada bidang yang sama', '2021-11-11 10:20:52', '2021-11-11 10:58:40'),
(15, 1, 'NKL03', 'E-learning', 'Pengembangan Kompetensi PNS yang dilaksanakan dalam bentuk pelatihan dengan mengoptimalkan penggunaan teknologi informasi dan komunikasi untuk mencapai tujuan pembelajaran dan peningkatan kinerja', '2021-11-11 10:21:20', '2021-11-11 10:59:01'),
(16, 1, 'NKL04', 'Pelatihan Jarak Jauh', 'Proses pembelajran secara terstruktur dengan dipandu oleh penyelenggara pelatihan secara jarak jauh', '2021-11-11 10:22:01', '2021-11-11 10:59:27'),
(17, 1, 'NKL05', 'Detasering (Secondment)', 'Penugasan/ penempatan PNS pada suatu tempat untuk jangka waktu tertentu', '2021-11-11 10:22:42', '2021-11-11 11:00:15'),
(18, 1, 'NKL06', 'Pembelajaran Alam Terbuka (Outbond)', 'Pembelajaran melalui simulasi di alam terbuka', '2021-11-11 10:23:12', '2021-11-11 11:00:49'),
(19, 1, 'NKL07', 'Patok Banding (Benchmarking)', 'Kegiatan untuk me- ngembangkan Kompetensi dengan cara membandingkan dan mengukur suatu kegiatan organisasi lain yang mempunyai karakteristik sejenis', '2021-11-11 10:23:48', '2021-11-11 11:01:24'),
(20, 1, 'NKL08', 'Pertukaran antara PNS dengan pegawai swasta/badan usaha milik negara/ badan usaha milik daerah', 'Kesempatan kepada PNS untuk menduduki jabatan tertentu di sektor swasta sesuai dengan persyaratan kompetensi', '2021-11-11 10:42:02', '2021-11-11 11:01:52'),
(21, 1, 'NKL09', 'Belajar Mandiri (Self Development)', 'Upaya individu PNS untuk mengembangkan kompetensinya melalui proses secara mandiri dengan memanfaatkan sumber pembelajaraan yang tersedia', '2021-11-11 10:42:48', '2021-11-11 11:02:22'),
(22, 1, 'NKL10', 'Komunitas Belajar (Community of Practices)', 'Komunitas belajar adalah suatu perkumpulan beberapa orang PNS yang memiliki tujuan saling menguntungkan untuk berbagi pengetahuan, keterampilan, dan sikap perilaku PNS sehingga mendorong terjadinya proses pembelajaran', '2021-11-11 10:43:52', '2021-11-11 11:02:49'),
(23, 1, 'NKL11', 'Bimbingan di tempat kerja', 'Bimbingan di tempat kerja', '2021-11-11 10:44:21', '2021-11-11 10:44:21'),
(24, 1, 'NKL12', 'Magang/praktik kerja', 'Proses pembelajaran untuk memperoleh dan menguasai keterampilan dengan melibatkan diri dalam proses pekerjaan tanpa atau dengan petunjuk orang yang sudah terampil dalam pekerjaan itu (learning by doing)', '2021-11-11 10:44:59', '2021-11-11 11:03:21'),
(25, 1, 'NKL13', 'Jalur Pengembangan Kompetensi dalam bentuk pelatihan nonklasikal lainnya', 'Jalur Pengembangan Kompetensi dalam bentuk pelatihan nonklasikal lainnya', '2021-11-11 10:45:44', '2021-11-11 10:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelatihans`
--

CREATE TABLE `jenis_pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pelatihans`
--

INSERT INTO `jenis_pelatihans` (`id`, `kode`, `jenis_pelatihan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'T01', 'Pelatihan', 'Pelatihan', '2021-11-09 12:15:48', '2021-11-13 15:10:53'),
(5, 'P02', 'Pendidikan', 'Pengembangan kompetensi yang dilakukan dengan pemberian tugas belajar pada pendidikan formal dalam jenjang pendidikan tinggi sesuai dengan ketentuan peraturan perundang-\r\nundangan', '2021-11-09 12:16:12', '2021-11-13 20:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_jabatans`
--

CREATE TABLE `kegiatan_jabatans` (
  `id_kegiatan_jabatan` int(11) NOT NULL,
  `id_jabatan_kerja` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `angka_kredit` float(10,5) NOT NULL,
  `output` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `mutu` int(11) NOT NULL,
  `waktu` int(11) NOT NULL,
  `biaya` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan_jabatans`
--

INSERT INTO `kegiatan_jabatans` (`id_kegiatan_jabatan`, `id_jabatan_kerja`, `nama_kegiatan`, `angka_kredit`, `output`, `satuan`, `mutu`, `waktu`, `biaya`, `created_at`, `updated_at`) VALUES
(1, 15, 'Mengumpulkan kelengkapan berkas usul penetapan Kartu Isteri/Kartu Suami', 0.03000, 10, 'berkas', 100, 12, 0, '2022-07-11 04:33:50', '2022-07-11 04:33:50'),
(2, 15, 'Mengentri data usul kenaikan pangkat kedalam SAPK', 0.00800, 10, 'Data', 100, 12, 0, '2022-07-11 04:33:50', '2022-07-11 04:33:50'),
(3, 15, 'Mengentri dokumen surat keputusan kenaikan ke dalam SAPK untuk peremajaan data', 0.02000, 5, 'Laporan', 100, 12, 0, '2022-07-11 04:33:49', '2022-07-11 04:33:49'),
(4, 2, 'Melakukan implementasi rancangan integrasi data', 0.05500, 1, 'Layanan', 100, 10, 0, '2022-07-08 03:28:03', '2022-07-08 03:28:03'),
(5, 10, 'Implementasi keperawatan Melakukan intervensi keperawatan (acute & chroniccare ) dalam rangka pemenuhan kebutuhan dasar manusia Pemenuhan kebutuhan pengaturan suhu tubuh Memfasilitasi lingkungan dengan suhu yang sesuai dengan kebutuhan (0.43/Pertindakan)', 0.43000, 30, 'Tindakan', 100, 12, 0, '2022-07-10 21:37:16', '2022-07-10 21:37:16'),
(6, 10, 'Implementasi keperawatan Melakukan intervensi keperawatan (acute & chroniccare )\r\ndalam rangka pemenuhan kebutuhan dasar manusia Tindakan keperawatan yang berkaitan\r\ndengan komunikasi Melakukan komunikasi terapeutik dalam pemberian asuhan keperawatan\r\n(0.05/Pertindakan)', 0.05000, 30, 'Tindakan', 100, 12, 0, '2022-07-11 04:38:32', '2022-07-11 04:38:32'),
(10, 10, 'Implementasi keperawatan Melakukan intervensi keperawatan (acute & chroniccare )\r\ndalam rangka pemenuhan kebutuhan dasar manusia Tindakan keperawatan yang berkaitan\r\ndengan rekreasi Memfasilitasi suasana lingkungan yang tenang dan aman\r\n(0.24/Pertindakan)', 0.24000, 30, 'Tindakan', 100, 12, 0, '2022-07-11 04:39:34', '2022-07-11 04:39:34'),
(15, 10, 'Implementasi keperawatan Melakukan intervensi keperawatan (acute & chroniccare )\r\ndalam rangka pemenuhan kebutuhan dasar manusia Melakukan implementasi keperawatan\r\nyang khusus Melakukan tindakan keperawatan spesifik terkait kasus dan kondisi pasien\r\nManajemen nyeri pada setiap kondisi (0.18/Pertindakan)', 0.18000, 30, 'Tindakan', 100, 12, 0, '2022-07-11 04:39:42', '2022-07-11 04:39:42'),
(16, 10, 'Melakukan dokumentasi proses keperawatan pada tahap Diagnosis keperawatan (0.12/Per\r\npasien)', 0.12000, 50, 'Pasien', 100, 12, 0, '2022-07-11 04:40:33', '2022-07-11 04:40:33'),
(17, 10, 'Melakukan dokumentasi proses keperawatan pada tahap Terampilan tindakan keperawatan\r\n(0.12/Per pasien)', 0.12000, 30, 'Pasien', 100, 12, 0, '2022-07-11 04:40:40', '2022-07-11 04:40:40'),
(18, 10, 'Melakukan perencanaan pelayanan keperawatan Menyusun rencana kegiatan individu\r\nperawat (0.24/Per dokumen harian)', 0.24000, 50, 'Dokumen', 100, 12, 0, '2022-07-11 04:42:22', '2022-07-11 04:42:22'),
(19, 10, 'Melaksanakan kegiatan bantuan/partisipasi kesehatan (0.5/Per kali)', 0.50000, 50, 'Kali', 100, 12, 0, '2022-07-11 04:42:22', '2022-07-11 04:42:22'),
(20, 10, 'Melaksanakan tugas lapangan di bidang kesehatan Melaksanakan penanggulangan\r\npenyakit/wabah tertentu (0.25/Per kali)', 0.25000, 20, 'Kali', 100, 12, 0, '2022-07-11 04:42:22', '2022-07-11 04:42:22'),
(21, 10, 'Mengikuti seminar/lokakarya internasional/nasional sebagai Peserta (1/Kali)', 1.00000, 10, 'Kali', 100, 12, 0, '2022-07-11 04:42:23', '2022-07-11 04:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `log_kegiatans`
--

CREATE TABLE `log_kegiatans` (
  `id_log_kegiatan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `id_master_kegiatan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_kegiatans`
--

INSERT INTO `log_kegiatans` (`id_log_kegiatan`, `id_user`, `tanggal_kegiatan`, `id_master_kegiatan`, `jumlah`, `updated_at`, `created_at`, `keterangan`) VALUES
(1, 1, '2022-07-01', 1, 1, '2022-07-07 10:23:41', '2022-07-07 10:23:41', NULL),
(2, 1, '2022-07-01', 1, 1, '2022-07-07 10:24:50', '2022-07-07 10:24:50', NULL),
(3, 1, '2022-07-23', 1, 1, '2022-07-07 10:27:50', '2022-07-07 10:27:50', NULL),
(4, 1, '2022-07-28', 1, 1, '2022-07-07 10:30:51', '2022-07-07 10:30:51', NULL),
(5, 1, '2022-07-27', 1, 1, '2022-07-07 10:32:39', '2022-07-07 10:32:39', NULL),
(6, 3, '2022-07-01', 1, 1, '2022-07-07 10:33:46', '2022-07-07 10:33:46', NULL),
(7, 3, '2022-07-01', 1, 1, '2022-07-07 10:36:18', '2022-07-07 10:36:18', NULL),
(8, 3, '2022-07-08', 1, 1, '2022-07-07 10:36:49', '2022-07-07 10:36:49', NULL),
(9, 3, '2022-07-19', 1, 1, '2022-07-07 10:44:36', '2022-07-07 10:44:36', NULL),
(10, 3, '2022-07-01', 1, 1, '2022-07-07 20:29:55', '2022-07-07 20:29:55', NULL),
(11, 1, '2022-07-01', 1, 1, '2022-07-11 19:01:32', '2022-07-11 19:01:32', NULL),
(12, 22, '2022-07-01', 22, 1, '2022-07-11 19:05:52', '2022-07-11 19:05:52', NULL),
(13, 22, '2022-07-01', 22, 3, '2022-07-11 21:45:27', '2022-07-11 21:45:27', NULL),
(14, 22, '2022-07-20', 22, 1, '2022-07-11 21:46:33', '2022-07-11 21:46:33', NULL),
(15, 22, '2022-07-01', 21, 1, '2022-07-11 21:49:44', '2022-07-11 21:49:44', NULL),
(16, 22, '2022-07-22', 20, 5, '2022-07-11 21:51:18', '2022-07-11 21:51:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_kegiatans`
--

CREATE TABLE `master_kegiatans` (
  `id_master_kegiatan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_kegiatan_jabatan` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `angka_kredit` float(10,5) DEFAULT NULL,
  `output` int(11) DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `mutu` int(11) DEFAULT NULL,
  `waktu` int(11) DEFAULT NULL,
  `biaya` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_kegiatans`
--

INSERT INTO `master_kegiatans` (`id_master_kegiatan`, `id_user`, `tahun`, `id_kegiatan_jabatan`, `nama_kegiatan`, `angka_kredit`, `output`, `satuan`, `mutu`, `waktu`, `biaya`, `created_at`, `updated_at`) VALUES
(1, 1, 2022, 1, 'Mengumpulkan kelengkapan berkas usul penetapan Kartu Isteri/Kartu Suami', 0.03000, 10, 'berkas', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(2, 3, 2022, 3, '', NULL, NULL, NULL, NULL, NULL, 0, '2022-07-07 20:13:24', '2022-07-07 20:13:24'),
(3, 22, 2022, 15, 'Implementasi keperawatan Melakukan intervensi keperawatan (acute & chroniccare )', 0.18000, 30, 'Tindakan', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(7, 22, 2022, 5, 'Implementasi keperawatan Melakukan intervensi keperawatan (acute & chroniccare ) dalam rangka pemenuhan kebutuhan dasar manusia Pemenuhan kebutuhan pengaturan suhu tubuh Memfasilitasi lingkungan dengan suhu yang sesuai dengan kebutuhan (0.43/Pertindakan)\r\n', 0.43000, 30, 'Tindakan', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(8, 22, 2022, 6, 'Implementasi keperawatan Melakukan intervensi keperawatan (acute & chroniccare )\r\ndalam rangka pemenuhan kebutuhan dasar manusia Tindakan keperawatan yang berkaitan\r\ndengan komunikasi Melakukan komunikasi terapeutik dalam pemberian asuhan keperawatan\r\n(0.05/Pertindakan)', 0.05000, 30, 'Tindakan', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(18, 22, 2022, 10, 'Implementasi keperawatan Melakukan intervensi keperawatan (acute & chroniccare )\r\ndalam rangka pemenuhan kebutuhan dasar manusia Tindakan keperawatan yang berkaitan\r\ndengan rekreasi Memfasilitasi suasana lingkungan yang tenang dan aman\r\n(0.24/Pertindakan)', 0.24000, 30, 'Tindakan', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(19, 22, 2022, 16, 'Melakukan dokumentasi proses keperawatan pada tahap Diagnosis keperawatan (0.12/Per\r\npasien)', 0.12000, 50, 'Pasien', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(20, 22, 2022, 17, 'Melakukan dokumentasi proses keperawatan pada tahap Terampilan tindakan keperawatan\r\n(0.12/Per pasien)', 0.12000, 30, 'Pasien', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(21, 22, 2022, 18, 'Melakukan perencanaan pelayanan keperawatan Menyusun rencana kegiatan individu\r\nperawat (0.24/Per dokumen harian)', 0.24000, 50, 'Dokumen', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(22, 22, 2022, 19, 'Melaksanakan kegiatan bantuan/partisipasi kesehatan (0.5/Per kali)', 0.50000, 50, 'Kali', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(23, 22, 2022, 20, 'Melaksanakan tugas lapangan di bidang kesehatan Melaksanakan penanggulangan\r\npenyakit/wabah tertentu (0.25/Per kali)', 0.25000, 20, 'Kali', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47'),
(24, 22, 2022, 21, 'Mengikuti seminar/lokakarya internasional/nasional sebagai Peserta (1/Kali)', 1.00000, 10, 'Kali', 100, 12, 0, '2022-07-11 18:50:47', '2022-07-11 18:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_08_19_000001_create_perangkat_daerahs_table', 1),
(5, '2019_08_19_000002_create_jabatans_table', 1),
(6, '2019_08_19_000003_create_pegawais_table', 1),
(7, '2019_08_19_000004_create_riwayat_diklats_table', 1),
(8, '2019_08_19_000005_create_penilaians_table', 1),
(9, '2019_08_19_000011_create_penyelengara_pelatihans_table', 1),
(10, '2019_08_19_000012_create_saran_pengembangans_table', 1),
(11, '2019_08_19_000013_create_jenis_pelatihans_table', 1),
(12, '2019_08_19_000014_create_bentuk_pelatihans_table', 1),
(13, '2019_08_19_000020_create_jalur_pelatihans_table', 1),
(14, '2019_08_19_000040_create_nama_pelatihans_table', 1),
(15, '2019_08_19_000060_create_standar_pelatihans_table', 1),
(16, '2019_08_19_000061_create_usulan_pelatihans_table', 1),
(17, '2019_08_19_000070_create_gap_standars_table', 1),
(18, '2021_11_09_021931_create_api_integrasis_table', 1),
(19, '2021_11_13_064528_create_gap_assesments_potensi_table', 1),
(20, '2021_11_23_142706_create_gap_assesments_table', 1),
(21, '2021_11_27_072953_create_gap_kinerja_sarans_table', 1),
(22, '2021_11_27_073006_create_gap_kinerja_kompetensis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nama_pelatihans`
--

CREATE TABLE `nama_pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jenis` bigint(20) UNSIGNED NOT NULL,
  `id_jalur` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nama_pelatihans`
--

INSERT INTO `nama_pelatihans` (`id`, `id_jenis`, `id_jalur`, `kode`, `nama_pelatihan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'T001', 'Pelatihan Pelayanan Publik Berbasis Elektronik', 'Pelatihan Pelayanan Publik Berbasis Elektronik', '2021-11-13 20:43:52', '2021-11-13 20:43:52'),
(2, 1, 3, 'T0002', 'Pelatihan Manajemen Strategi Pengembangan Inovasi Daerah', 'Pelatihan Manajemen Strategi Pengembangan Inovasi Daerah', '2021-11-13 20:44:33', '2021-11-13 20:44:33'),
(3, 1, 3, 'T0003', 'Pelatihan Laporan Kinerja', 'Pelatihan Laporan Kinerja', '2021-11-13 20:45:28', '2021-11-13 20:45:28'),
(4, 1, 3, 'T005', 'Pelatihan Penyusunan Dokumen Rencana Pembangunan Jangka Menengah Daerah (Rpjmd)', 'Pelatihan Penyusunan Dokumen Rencana Pembangunan Jangka Menengah Daerah (Rpjmd)', '2021-11-13 20:46:58', '2021-11-13 20:46:58'),
(5, 1, 10, 'BT_00001', 'Bimbingan Teknis Pengelolaan Pusat Data', 'Bimbingan Teknis Pengelolaan Pusat Data', '2021-11-14 18:13:02', '2021-11-14 18:13:02'),
(6, 1, 2, 'PM_00001', 'Pelatihan PIM IV', 'Pelatihan PIM IV', '2021-11-14 18:15:11', '2021-11-14 18:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaians`
--

CREATE TABLE `penilaians` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eselon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eselon_kd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_jabatan` int(11) NOT NULL,
  `kelas_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_skp` decimal(8,3) NOT NULL,
  `nilai_perilaku` decimal(8,3) NOT NULL,
  `nilai_total` decimal(8,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggara_pelatihans`
--

CREATE TABLE `penyelenggara_pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_daerahs`
--

CREATE TABLE `perangkat_daerahs` (
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perangkat_daerahs`
--

INSERT INTO `perangkat_daerahs` (`kode_opd`, `nama_opd`) VALUES
('1.01.01', 'Dinas Pendidikan'),
('1.02.01', 'Dinas Kesehatan'),
('1.02.02', 'Rumah Sakit Umum Daerah'),
('1.02.03', 'Rumah Sakit Khusus Ibu dan Anak'),
('1.02.04', 'Rumah Sakit Khusus Gigi dan Mulut'),
('1.03.01', 'Dinas Pekerjaan Umum'),
('1.03.02', 'Dinas Cipta Karya, Bina Konstruksi dan Tata Ruang'),
('1.04.01', 'Dinas Perumahan dan Kawasan Permukiman'),
('1.05.01', 'Satuan Polisi Pamong Praja'),
('1.05.02', 'Dinas Kebakaran dan Penanggulangan Bencana'),
('1.06.01', 'Dinas Sosial '),
('2.01.01', 'Dinas Ketenagakerjaan'),
('2.02.01', 'Dinas Pengendalian Penduduk dan Keluarga Berencana'),
('2.03.01', 'Dinas Ketahanan Pangan dan Pertanian'),
('2.05.01', 'Dinas Lingkungan Hidup dan Kebersihan'),
('2.06.01', 'Dinas Kependudukan dan Pencatatan Sipil'),
('2.08.01', 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak'),
('2.09.01', 'Dinas Perhubungan'),
('2.10.01', 'Dinas Komunikasi dan Informatika'),
('2.11.01', 'Dinas Koperasi dan Usaha Kecil dan Menengah'),
('2.12.01', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'),
('2.13.01', 'Dinas Pemuda dan Olahraga'),
('2.16.01', 'Dinas Kebudayaan dan Pariwisata'),
('2.17.01', 'Dinas Arsip dan Perpustakaan'),
('3.06.01', 'Dinas Perdagangan dan Perindustrian'),
('4.01.01', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan'),
('4.02.01', 'Badan Keuangan dan Aset Daerah'),
('4.02.03', 'Badan Pendapatan Daerah'),
('4.03.01', 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia'),
('4.05.02', 'Sekretariat Daerah'),
('4.05.04', 'Sekretariat Dewan Perwakilan Rakyat Daerah'),
('4.05.05', 'Inspektorat Daerah'),
('4.05.06', 'Badan Kesatuan Bangsa dan Politik'),
('4.05.07', 'Kecamatan Sukasari'),
('4.05.08', 'Kecamatan Cidadap'),
('4.05.09', 'Kecamatan Sukajadi'),
('4.05.10', 'Kecamatan Cicendo'),
('4.05.11', 'Kecamatan Andir'),
('4.05.12', 'Kecamatan Coblong'),
('4.05.13', 'Kecamatan Bandung Wetan'),
('4.05.14', 'Kecamatan Sumur Bandung'),
('4.05.15', 'Kecamatan Cibeunying Kidul'),
('4.05.16', 'Kecamatan Cibeunying Kaler'),
('4.05.17', 'Kecamatan Astana Anyar'),
('4.05.18', 'Kecamatan Bojongloa Kaler'),
('4.05.19', 'Kecamatan Bojongloa Kidul'),
('4.05.20', 'Kecamatan Babakan Ciparay'),
('4.05.21', 'Kecamatan Bandung Kulon'),
('4.05.22', 'Kecamatan Regol'),
('4.05.23', 'Kecamatan Lengkong'),
('4.05.24', 'Kecamatan Batununggal'),
('4.05.25', 'Kecamatan Ujungberung'),
('4.05.26', 'Kecamatan Kiaracondong'),
('4.05.27', 'Kecamatan Arcamanik'),
('4.05.28', 'Kecamatan Cibiru'),
('4.05.29', 'Kecamatan Antapani'),
('4.05.30', 'Kecamatan Rancasari'),
('4.05.31', 'Kecamatan Buahbatu'),
('4.05.32', 'Kecamatan Bandung Kidul'),
('4.05.33', 'Kecamatan Gedebage'),
('4.05.34', 'Kecamatan Panyileukan'),
('4.05.35', 'Kecamatan Cinambo'),
('4.05.36', 'Kecamatan Mandalajati');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_diklats`
--

CREATE TABLE `riwayat_diklats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_diklat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_jam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sttp_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sttp_tgl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sttp_pej` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saran_pengembangans`
--

CREATE TABLE `saran_pengembangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_saran_pengembangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `standar_pelatihans`
--

CREATE TABLE `standar_pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nama` bigint(20) UNSIGNED NOT NULL,
  `tingkat_kebutuhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `unit_kerja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `foto`, `level`, `remember_token`, `nip`, `created_at`, `updated_at`, `id_jabatan`, `unit_kerja`, `pangkat`) VALUES
(1, 'admin', 'admin@example.com', '$2y$10$qHSGdrHTOKuLtwyt5/Sn4uvpvheu0/nwKdgNNNBf1dolKuxH/dvPS', 'admin.png', 1, NULL, NULL, '2022-07-06 19:40:10', '2022-07-06 19:52:10', NULL, NULL, NULL),
(2, 'user', 'user@example.com', '$2y$10$XmzNRxJvb7vAESkwq8Rs5OKfBvgfTKNwwbAM3u2u9u8dbxXpf1Ua2', 'user.png', 2, NULL, NULL, '2022-07-06 19:40:10', '2022-07-06 19:52:10', NULL, NULL, NULL),
(3, 'Indra Mustholih, S.Kom', '199406112022031002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 1, NULL, '199406112022031002', '2022-07-06 19:40:10', '2022-07-06 19:52:10', 30, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a\r\n'),
(4, 'drg. Inda Torisia Hatang, MKM', '197307132002122005', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '197307132002122005', NULL, NULL, 1, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Tk.I - IV/b'),
(8, 'Siti Khadijah, S.Si, Apt, MM', '197912262005012003', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '197912262005012003', NULL, NULL, 2, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina-IV/a'),
(9, 'Yuniyati, S.Sos, M.Si', '196505281985032001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '196505281985032001', NULL, NULL, 3, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina-IV/a'),
(10, 'dr. Rini Haryanti', '198003312009122001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198003312009122001', NULL, NULL, 4, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Tk.I - III/d'),
(11, 'dr. Betriza, SpJP', '196302181989122001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '196302181989122001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Utama-IV/e'),
(12, 'dr. D.Wahyuni Sp RM', '195807211988122001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '195807211988122001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Utama Madya-IV/d'),
(13, 'dr. Eviana Roza Kadri', '195806071991032001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '195806071991032001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Utama Madya-IV/d'),
(14, 'drg. Irawan Soediono', '196709141992031003', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '196709141992031003', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Utama Madya-IV/d'),
(15, 'dr. Endriana S. Lubis, MKK, Sp.Ok', '196610242002122001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '196610242002122001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Utama Muda - IV/c'),
(16, 'dr. Sri Mulyani,  SpP', '196703211999032001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '196703211999032001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Utama Muda - IV/c'),
(17, 'dr. Khairunnisa', '197105101999032005', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '197105101999032005', '2022-07-06 19:40:10', NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Utama Muda - IV/c'),
(18, 'dr. Sumita', '196909172002122002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '196909172002122002', '2022-07-06 19:40:10', NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina Tk.I - IV/b'),
(19, 'drg. Surnetty Aqwari', '197202142006042007', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '197202142006042007', '2022-07-06 19:40:10', NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina-IV/a'),
(20, 'drg. Tuti Elvira Nency', '197805242006042005', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '197805242006042005', '2022-07-06 19:40:10', NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pembina-IV/a'),
(21, 'drg. Nurul Puspita Sari, Sp.KG', '198011222010012013', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198011222010012013', '2022-07-06 19:40:10', NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Tk.I-III/d'),
(22, 'Sri Endang Pangestuti, A.Md.Kep', '196507081989032002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 1, NULL, '196507081989032002', '2022-07-06 19:40:10', '2022-07-06 19:52:10', 10, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Tk.I-III/d'),
(23, 'Mika Susianti, A.Md.Kes', '196703051989112001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '196703051989112001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Tk.I-III/d'),
(24, 'Evi Wahyuni, A.Md.Kes', '197110111994032001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '197110111994032001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata - III/c'),
(25, 'Nurasiah, SKM', '197405072000032005', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '197405072000032005', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata - III/c'),
(26, 'Yuni Asri Sembiring, Am.Ak', '198306212006042008', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198306212006042008', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda Tk.I - III/b'),
(27, 'Nurul Ayyumi, A.Md.Rad', '198502012008012002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198502012008012002', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda Tk.I - III/b'),
(28, 'Nur Chasanah, S.Farm Apt.', '199103032019022001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199103032019022001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda Tk.I - III/b'),
(29, 'Alfi Shariati, S.A.P', '198209152008122001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198209152008122001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a'),
(30, 'Tri Tungga Dewi Kusumawati, AMF', '198307312009122001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198307312009122001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a'),
(31, 'Catur Setia Dewi, AMF', '198406222009122002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198406222009122002', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a'),
(32, 'Lestari, A.Md.Kep', '198306212010122004', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198306212010122004', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a'),
(33, 'Ahmad Fauzan, A.Md', '198408202010121002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198408202010121002', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a'),
(34, 'Shinta Indah Pratiwi, A.Md.Kep', '198610272009122003', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198610272009122003', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur Tk.I - II/d'),
(35, 'Indah Stefiastuti Rahayu, S.AP', '198902182010122004', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198902182010122004', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a'),
(36, 'Erni Novita Sari, SKM', '199211072020122003', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199211072020122003', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a'),
(37, 'Citra Sri Martani, Am.Ak', '198009232010122002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198009232010122002', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur Tk.I - II/d'),
(38, 'Anisa Dwi Silvia Fisudurini, Am.Ak', '199201302018012001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199201302018012001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur - II/c'),
(39, 'Eza Pramedia, A.Md.Kep', '199205142018012001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199205142018012001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur - II/c'),
(40, 'Evi Wulandari, A.Md.Kep', '198902242018022001', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '198902242018022001', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur - II/c'),
(41, 'Mohammad Alif Nur Fathoni, A.Md.Rad', '199308252019021002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199308252019021002', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur - II/c'),
(42, 'Yudi Dharmawan, A.Md.KG', '199704092020121002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199704092020121002', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur - II/c'),
(43, 'Fissilmi Kaaffah, A.Md.', '199601242020122006', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199601242020122006', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur - II/c'),
(44, 'Balqis muharamy', '199107262022032002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199107262022032002', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Pengatur - II/c'),
(45, 'dr. Indah Pratiwi', '199207312022032002', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199207312022032002', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda Tk.I - III/b'),
(47, 'Wina Happy Lucky', '199507242022032003', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '199507242022032003', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', 'Penata Muda - III/a\r\n'),
(48, 'Nur Astuti Wijoreni, SKM', '919901202201801201', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '919901202201801201', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(49, 'Septian Edi Prianto', '919880919201801101', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '919880919201801101', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(50, 'Fenny Alvionita, S.Keb, Bd.', '919920327201907201', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '919920327201907201', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(51, 'Akhmad Khaeroni', '1111111111', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '1111111111', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(52, 'Laras Sari Aji Ningrum, S.Farm, Apt', '2222222222', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '2222222222', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(53, 'Benita Puspita Sari, SKM', '3333333333', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '3333333333', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(54, 'Ira Fahmawati Wahyu Sejati, S.Tr. Keb, Bd.', '4444444444', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '4444444444', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(55, 'Titania Aurelly Amry, S.E.', '5555555555', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '5555555555', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(56, 'Ramadhani Nur Fathur R', '6666666666', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '6666666666', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL),
(57, 'Mukhlis, S.Kom', '7777777777', '$2y$10$hwhCZlJse6VhHD8kncdBXeyP6gtrGxoZ2sKkKZLDtWUAwkUwNEle.', 'user.png', 2, NULL, '7777777777', NULL, NULL, NULL, 'Unit Pelayanan Kesehatan Kementerian Kesehatan', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_integrasis`
--
ALTER TABLE `api_integrasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bentuk_pelatihans`
--
ALTER TABLE `bentuk_pelatihans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bentuk_pelatihans_kode_unique` (`kode`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gap_assesments`
--
ALTER TABLE `gap_assesments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gap_assesments_potensi`
--
ALTER TABLE `gap_assesments_potensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gap_kinerja_kompetensis`
--
ALTER TABLE `gap_kinerja_kompetensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gap_kinerja_sarans`
--
ALTER TABLE `gap_kinerja_sarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gap_standars`
--
ALTER TABLE `gap_standars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gap_standars_nip_index` (`nip`),
  ADD KEY `gap_standars_id_standar_index` (`id_standar`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`kode_jabatan`);
ALTER TABLE `jabatans` ADD FULLTEXT KEY `full` (`nama_jabatan`);

--
-- Indexes for table `jabatan_kerjas`
--
ALTER TABLE `jabatan_kerjas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jalur_pelatihans`
--
ALTER TABLE `jalur_pelatihans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jalur_pelatihans_kode_unique` (`kode`),
  ADD KEY `jalur_pelatihans_id_bentuk_index` (`id_bentuk`);

--
-- Indexes for table `jenis_pelatihans`
--
ALTER TABLE `jenis_pelatihans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_pelatihans_kode_unique` (`kode`);

--
-- Indexes for table `kegiatan_jabatans`
--
ALTER TABLE `kegiatan_jabatans`
  ADD PRIMARY KEY (`id_kegiatan_jabatan`);

--
-- Indexes for table `log_kegiatans`
--
ALTER TABLE `log_kegiatans`
  ADD PRIMARY KEY (`id_log_kegiatan`);

--
-- Indexes for table `master_kegiatans`
--
ALTER TABLE `master_kegiatans`
  ADD PRIMARY KEY (`id_master_kegiatan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_pelatihans`
--
ALTER TABLE `nama_pelatihans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_pelatihans_kode_unique` (`kode`),
  ADD KEY `nama_pelatihans_id_jenis_index` (`id_jenis`),
  ADD KEY `nama_pelatihans_id_jalur_index` (`id_jalur`);
ALTER TABLE `nama_pelatihans` ADD FULLTEXT KEY `full` (`nama_pelatihan`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawais_kode_jabatan_index` (`kode_jabatan`),
  ADD KEY `pegawais_kode_opd_index` (`kode_opd`);
ALTER TABLE `pegawais` ADD FULLTEXT KEY `full` (`nama`,`kode_jabatan`);

--
-- Indexes for table `penyelenggara_pelatihans`
--
ALTER TABLE `penyelenggara_pelatihans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penyelenggara_pelatihans_kode_unique` (`kode`);

--
-- Indexes for table `perangkat_daerahs`
--
ALTER TABLE `perangkat_daerahs`
  ADD PRIMARY KEY (`kode_opd`);
ALTER TABLE `perangkat_daerahs` ADD FULLTEXT KEY `full` (`nama_opd`);

--
-- Indexes for table `riwayat_diklats`
--
ALTER TABLE `riwayat_diklats`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `riwayat_diklats` ADD FULLTEXT KEY `full` (`nama_diklat`,`nip`,`nama`,`kode_opd`,`kode_jabatan`);

--
-- Indexes for table `saran_pengembangans`
--
ALTER TABLE `saran_pengembangans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `saran_pengembangans_kode_unique` (`kode`);

--
-- Indexes for table `standar_pelatihans`
--
ALTER TABLE `standar_pelatihans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `standar_pelatihans_kode_opd_index` (`kode_opd`),
  ADD KEY `standar_pelatihans_kode_jabatan_index` (`kode_jabatan`),
  ADD KEY `standar_pelatihans_id_nama_index` (`id_nama`);

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
-- AUTO_INCREMENT for table `api_integrasis`
--
ALTER TABLE `api_integrasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bentuk_pelatihans`
--
ALTER TABLE `bentuk_pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gap_assesments`
--
ALTER TABLE `gap_assesments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gap_assesments_potensi`
--
ALTER TABLE `gap_assesments_potensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gap_kinerja_kompetensis`
--
ALTER TABLE `gap_kinerja_kompetensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gap_kinerja_sarans`
--
ALTER TABLE `gap_kinerja_sarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gap_standars`
--
ALTER TABLE `gap_standars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan_kerjas`
--
ALTER TABLE `jabatan_kerjas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `jalur_pelatihans`
--
ALTER TABLE `jalur_pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jenis_pelatihans`
--
ALTER TABLE `jenis_pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan_jabatans`
--
ALTER TABLE `kegiatan_jabatans`
  MODIFY `id_kegiatan_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `log_kegiatans`
--
ALTER TABLE `log_kegiatans`
  MODIFY `id_log_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_kegiatans`
--
ALTER TABLE `master_kegiatans`
  MODIFY `id_master_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nama_pelatihans`
--
ALTER TABLE `nama_pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyelenggara_pelatihans`
--
ALTER TABLE `penyelenggara_pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_diklats`
--
ALTER TABLE `riwayat_diklats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saran_pengembangans`
--
ALTER TABLE `saran_pengembangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `standar_pelatihans`
--
ALTER TABLE `standar_pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gap_standars`
--
ALTER TABLE `gap_standars`
  ADD CONSTRAINT `gap_standars_id_standar_foreign` FOREIGN KEY (`id_standar`) REFERENCES `standar_pelatihans` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `jalur_pelatihans`
--
ALTER TABLE `jalur_pelatihans`
  ADD CONSTRAINT `jalur_pelatihans_id_bentuk_foreign` FOREIGN KEY (`id_bentuk`) REFERENCES `bentuk_pelatihans` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `nama_pelatihans`
--
ALTER TABLE `nama_pelatihans`
  ADD CONSTRAINT `nama_pelatihans_id_jalur_foreign` FOREIGN KEY (`id_jalur`) REFERENCES `jalur_pelatihans` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nama_pelatihans_id_jenis_foreign` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_pelatihans` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_kode_jabatan_foreign` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatans` (`kode_jabatan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawais_kode_opd_foreign` FOREIGN KEY (`kode_opd`) REFERENCES `perangkat_daerahs` (`kode_opd`) ON UPDATE CASCADE;

--
-- Constraints for table `standar_pelatihans`
--
ALTER TABLE `standar_pelatihans`
  ADD CONSTRAINT `standar_pelatihans_id_nama_foreign` FOREIGN KEY (`id_nama`) REFERENCES `nama_pelatihans` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `standar_pelatihans_kode_jabatan_foreign` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatans` (`kode_jabatan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `standar_pelatihans_kode_opd_foreign` FOREIGN KEY (`kode_opd`) REFERENCES `perangkat_daerahs` (`kode_opd`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
