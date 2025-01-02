-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Jan 2025 pada 10.47
-- Versi server: 8.0.30
-- Versi PHP: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agenda_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `image`, `title`, `description`, `agenda_date`, `created_at`, `updated_at`) VALUES
(2, 'agenda_images/1735803702_6772bc2a30f6c.jpg', 'Gotong Royong banjir', 'ayo bekerja', '2025-01-04', '2025-01-02 00:41:42', '2025-01-02 00:41:42'),
(3, 'agenda_images/1735803743_67723d7c8ed66.jpg', 'Main main ke kantor desa1', 'Desa sebagai sub sistem Kabupaten/Kota yang merupakan pelaksana pemerintahan, kemasyarakatan, serta pembangunan. Desa merupakan lapisan yang bersentuhan langsung dengan masyarakat. Desa Tangsimekar terletak 37 KM dari Soreang, ibu kota Kabupaten Bandung, atau sekitar 33 KM di sebelah Tenggara Kota Bandung. Secara topografis Desa Tangsimekar merupakan daerah yang relatif datar yang memiliki ketinggian 700 meter di atas permukaan laut, dengan curah hujan rata-rata 781 mm/tahun dengan suhu udara berkisar 20oC hingga 31oC.  Desa Tangsimekar merupakan salah satu dari 12 (dua belas) desa yang berada di wilayah Kecamatan Paseh Kabupaten Bandung Jawa Barat.\r\n\r\nDesa Tangsimekar merupakan salah satu desa dari 12 (dua belas) desa lainnya yang ada di lingkup Kecamatan Paseh. Jumlah penduduk yang ada di Desa Tangsimekar berdasarkan laporan mobilitas penduduk (MobDuk) Kabupaten Bandung bulan September 2024 ialah 9.389 jiwa dengan sebaran laki-laki sebanyak 4.785 jiwa dan perempuan sebanyak 4.604 jiwa.', '2025-01-29', '2025-01-02 00:42:23', '2025-01-02 01:11:37'),
(4, 'agenda_images/1735805549_6773dacdf3016.jpg', 'coba coba', 'esa Tangsimekar merupakan salah satu desa dari 12 (dua belas) desa lainnya yang ada di lingkup Kecamatan Paseh. Jumlah penduduk yang ada di Desa Tangsimekar berdasarkan laporan mobilitas penduduk (MobDuk) Kabupaten Bandung bulan September 2024 ialah 9.389 jiwa dengan sebaran laki-laki sebanyak 4.785 jiwa dan perempuan sebanyak 4.604 jiwa.', '2025-01-02', '2025-01-02 01:12:29', '2025-01-02 01:12:29'),
(5, 'agenda_images/1735805563_images (11).jpg', 'coba lagi', 'esa Tangsimekar merupakan salah satu desa dari 12 (dua belas) desa lainnya yang ada di lingkup Kecamatan Paseh. Jumlah penduduk yang ada di Desa Tangsimekar berdasarkan laporan mobilitas penduduk (MobDuk) Kabupaten Bandung bulan September 2024 ialah 9.389 jiwa dengan sebaran laki-laki sebanyak 4.785 jiwa dan perempuan sebanyak 4.604 jiwa.', '2025-01-02', '2025-01-02 01:12:43', '2025-01-02 01:12:43'),
(6, 'agenda_images/1735805587_man-7433287_1280.jpg', 'aaaa', 'aaaaaaaaaaa', '2025-01-02', '2025-01-02 01:13:07', '2025-01-02 01:13:07'),
(7, 'agenda_images/1735805601_images (10).jpg', 'coba', 'esa Tangsimekar merupakan salah satu desa dari 12 (dua belas) desa lainnya yang ada di lingkup Kecamatan Paseh. Jumlah penduduk yang ada di Desa Tangsimekar berdasarkan laporan mobilitas penduduk (MobDuk) Kabupaten Bandung bulan September 2024 ialah 9.389 jiwa dengan sebaran laki-laki sebanyak 4.785 jiwa dan perempuan sebanyak 4.604 jiwa.', '2025-01-02', '2025-01-02 01:13:21', '2025-01-02 01:13:21'),
(8, 'agenda_images/1735805613_images (9).jpg', 'coba', 'sdfs', '2025-01-02', '2025-01-02 01:13:33', '2025-01-02 01:13:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelompok_umur`
--

CREATE TABLE `data_kelompok_umur` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laki_laki` int NOT NULL,
  `perempuan` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kelompok_umur`
--

INSERT INTO `data_kelompok_umur` (`id`, `jenis_kelompok`, `laki_laki`, `perempuan`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Balita (0-5 tahun)', 601, 583, 1184, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(2, 'Anak-Anak (6-17 tahun)', 1553, 1467, 3020, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(3, 'Dewasa (18-50 tahun)', 1226, 1163, 2389, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(4, 'Tua (50-120 tahun)', 1437, 1359, 2796, '2024-12-31 23:53:51', '2024-12-31 23:53:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kependudukan_agama`
--

CREATE TABLE `data_kependudukan_agama` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laki_laki` int NOT NULL DEFAULT '0',
  `perempuan` int NOT NULL DEFAULT '0',
  `jumlah` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kependudukan_agama`
--

INSERT INTO `data_kependudukan_agama` (`id`, `jenis_kelompok`, `laki_laki`, `perempuan`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Islam', 4614, 4484, 9089, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(2, 'Kristen Katholik', 78, 51, 129, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(3, 'Kristen Protestan', 93, 69, 162, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(4, 'Hindu', 0, 0, 0, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(5, 'Budha', 0, 0, 0, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(6, 'Konghucu', 0, 0, 0, '2024-12-31 23:53:51', '2024-12-31 23:53:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pekerjaan`
--

CREATE TABLE `data_pekerjaan` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laki_laki` int NOT NULL,
  `perempuan` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_pekerjaan`
--

INSERT INTO `data_pekerjaan` (`id`, `jenis_kelompok`, `laki_laki`, `perempuan`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'BELUM/TIDAK BEKERJA', 553, 609, 1162, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(2, 'MENGURUS RUMAH TANGGA', 0, 1518, 1518, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(3, 'PELAJAR/MAHASISWA', 927, 857, 1784, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(4, 'PENSIUNAN', 0, 0, 0, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(5, 'PEGAWAI NEGERI SIPIL (PNS)', 61, 47, 108, '2024-12-31 23:53:51', '2024-12-31 23:53:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_persebaran_penduduk`
--

CREATE TABLE `data_persebaran_penduduk` (
  `id` bigint UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `male` int NOT NULL,
  `female` int NOT NULL,
  `total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_persebaran_penduduk`
--

INSERT INTO `data_persebaran_penduduk` (`id`, `group`, `male`, `female`, `total`, `created_at`, `updated_at`) VALUES
(1, '001', 281, 215, 496, NULL, NULL),
(2, '002', 315, 262, 577, NULL, NULL),
(3, '003', 258, 253, 511, NULL, NULL),
(4, '004', 291, 296, 587, NULL, NULL),
(5, '005', 582, 574, 1156, NULL, NULL),
(6, '006', 282, 283, 565, NULL, NULL),
(7, '007', 335, 308, 643, NULL, NULL),
(8, '008', 319, 326, 645, NULL, NULL),
(9, '009', 198, 196, 394, NULL, NULL),
(10, '010', 370, 383, 753, NULL, NULL),
(11, '011', 415, 405, 820, NULL, NULL),
(12, '012', 215, 195, 410, NULL, NULL),
(13, '013', 356, 347, 703, NULL, NULL),
(14, '014', 263, 249, 512, NULL, NULL),
(15, '015', 305, 312, 617, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id`, `document`, `title`, `category`, `type`, `created_at`, `updated_at`) VALUES
(1, '1735810544-CV_Muhammad_Rizki (15).pdf', 'test123', 'ahhhh', 'RPJM', '2025-01-02 02:29:13', '2025-01-02 02:53:39'),
(2, '1735811255-CV_Muhammad_Rizki (15).pdf', 'test lagi', 'apalah ini', 'APB', '2025-01-02 02:44:40', '2025-01-02 02:47:35'),
(3, '1735811309-Sertifikat Juara Inovasi Teknologi Mutakhir-halaman-10.pdf', 'cobaan', 'dicobain', 'Rencana Kerja & Anggaran', '2025-01-02 02:48:29', '2025-01-02 02:48:29'),
(4, '1735811373-zj0idsEum1.pdf', 'well', 'uhuk uhuk', 'Produk Hukum', '2025-01-02 02:49:33', '2025-01-02 02:49:33'),
(5, '1735811440-CV_Muhammad_Rizki (15).pdf', 'uaghhhh123', 'wel wel wel wil', 'Transparansi Anggaran', '2025-01-02 02:50:05', '2025-01-02 02:53:53'),
(7, '1735812037-zj0idsEum1.pdf', 'uhiy', 'Kepala Desa', 'Transparansi Anggaran', '2025-01-02 03:00:37', '2025-01-02 03:13:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(2, 'gallery_images/1735716839_images (6).jpg', 'desa diserang pain', '2025-01-01 00:33:59', '2025-01-01 00:33:59'),
(3, 'gallery_images/1735716904_images (7).jpg', 'Pengeroyokan lansia oleh anak muda', '2025-01-01 00:35:04', '2025-01-01 00:35:04'),
(4, 'gallery_images/1735716939_images (8).jpg', 'Pelaku Praktik Santet', '2025-01-01 00:35:39', '2025-01-01 00:35:39'),
(5, 'gallery_images/1735743367_6773dacdf3016.jpg', 'Musang pak dodi lepas', '2025-01-01 00:37:01', '2025-01-01 07:56:07'),
(6, 'gallery_images/1735743528_B8NsykTCQAEOlUl.jpg', 'Genting!!', '2025-01-01 07:58:48', '2025-01-01 07:58:48'),
(7, 'gallery_images/1735743622_Screenshot 2024-12-27 234504.png', 'Ngantuk boss', '2025-01-01 08:00:22', '2025-01-01 08:00:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(100, '2025_01_01_065224_add_title_to_galleries_table', 2),
(101, '2014_10_12_000000_create_users_table', 3),
(102, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(103, '2019_08_19_000000_create_failed_jobs_table', 3),
(104, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(105, '2024_12_25_134702_create_data_persebaran_penduduk_table', 3),
(106, '2024_12_26_035501_create_population_data_table', 3),
(107, '2024_12_26_052750_create_data_kependudukan_agama_table', 3),
(108, '2024_12_26_061116_create_pendidikan_terakhir_table', 3),
(109, '2024_12_26_065150_create_data_pekerjaan_table', 3),
(110, '2024_12_26_070452_create_data_kelompok_umur_table', 3),
(111, '2024_12_30_145005_create_news_table', 3),
(112, '2025_01_01_045744_create_galleries_table', 3),
(113, '2025_01_01_074740_create_village_instruments_table', 4),
(115, '2025_01_02_065203_create_agenda_table', 5),
(116, '2025_01_02_082024_create_documents_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `news`, `description`, `date`, `created_at`, `updated_at`) VALUES
(2, 'news_images/1735715595_67723d7c8ed66.jpg', 'waduh part 2', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'kacau', '2025-01-31', '2025-01-01 00:13:15', '2025-01-01 05:29:58'),
(3, 'news_images/1735715617_6772bc2a30f6c.jpg', 'banjir', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'banjir', '2025-01-01', '2025-01-01 00:13:37', '2025-01-01 00:24:11'),
(4, 'news_images/1735715635_6773dacdf3016.jpg', 'pak ampun pak', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'pak', '2025-01-01', '2025-01-01 00:13:55', '2025-01-01 00:25:58'),
(5, 'news_images/1735716416_WhatsApp Image 2024-12-20 at 09.20.54.jpeg', 'waduuuh capekk', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'oke mantap', '2025-01-16', '2025-01-01 00:26:56', '2025-01-01 00:26:56'),
(6, 'news_images/1735716534_04-50-51-images.jpg', 'siap, mantappp', 'namespace App\\Http\\Controllers;\r\n\r\nuse App\\Models\\News;\r\n\r\nclass HomeController extends Controller\r\n{\r\n    public function index()\r\n    {\r\n        // Ambil semua data berita dari database\r\n        $news = News::orderBy(\'date\', \'desc\')->get(); // Ambil semua berita, urutkan berdasarkan tanggal\r\n        return view(\'home\', compact(\'news\'));\r\n    }\r\n}', 'aghhhhhhhhhhhhhh', '2025-01-08', '2025-01-01 00:28:54', '2025-01-01 00:28:54'),
(7, 'news_images/1735716616_08-42-28-cPbsk0.jpg', 'oke sip', '<?php\r\n\r\nuse Illuminate\\Support\\Facades\\Route;\r\nuse App\\Http\\Controllers\\MonografiController;\r\nuse App\\Http\\Controllers\\DataPersebaranPendudukController;\r\nuse App\\Http\\Controllers\\PopulationDataController;\r\nuse App\\Http\\Controllers\\DataKependudukanAgamaController;\r\nuse App\\Http\\Controllers\\PendidikanTerakhirController;\r\nuse App\\Http\\Controllers\\DataPekerjaanController;\r\nuse App\\Http\\Controllers\\DataKelompokUmurController;\r\nuse App\\Http\\Controllers\\DashboardController;\r\nuse App\\Http\\Controllers\\AuthController;\r\nuse App\\Http\\Controllers\\NewsController;\r\nuse App\\Http\\Controllers\\GalleryController;\r\nuse App\\Http\\Controllers\\HomeController;\r\n/*\r\n|--------------------------------------------------------------------------\r\n| Web Routes\r\n|--------------------------------------------------------------------------\r\n|\r\n| Here is where you can register web routes for your application. These\r\n| routes are loaded by the RouteServiceProvider and all of them will\r\n| be assigned to the \"web\" middleware group. Make something great!\r\n|\r\n*/\r\n\r\n\r\n\r\nRoute::get(\'/\', [HomeController::class, \'index\']);\r\n\r\nRoute::get(\'/agenda\', function () {\r\n    return view(\'agenda\');\r\n});\r\n\r\nRoute::get(\'/dashboard\', function () {\r\n    return view(\'dashboard\');\r\n});\r\n\r\nRoute::get(\'/demografi\', function () {\r\n    return view(\'demografi\');\r\n});\r\n\r\nRoute::get(\'/kades\', function () {\r\n    return view(\'kades\');\r\n});\r\n\r\nRoute::get(\'/layanan\', function () {\r\n    return view(\'layanan\');\r\n});\r\n\r\nRoute::get(\'/lembaga_detail\', function () {\r\n    return view(\'lembaga_detail\');\r\n});\r\n\r\nRoute::get(\'/lembaga\', function () {\r\n    return view(\'lembaga\');\r\n});\r\n\r\n\r\nRoute::get(\'/monografi_dashboard\', function () {\r\n    return view(\'monografi_dashboard\');\r\n});\r\n\r\nRoute::get(\'/monografi\', [MonografiController::class, \'show\'])->name(\'monografi\');\r\n\r\n\r\nRoute::get(\'/pemerintahan\', function () {\r\n    return view(\'pemerintahan\');\r\n});\r\n\r\n\r\nRoute::get(\'/perangkat_desa\', function () {\r\n    return view(\'perangkat_desa\');\r\n});\r\n\r\nRoute::get(\'/produkhukum\', function () {\r\n    return view(\'produkhukum\');\r\n});\r\nRoute::get(\'/profile\', function () {\r\n    return view(\'profile\');\r\n});\r\nRoute::get(\'/berita\', function () {\r\n    return view(\'berita\');\r\n});\r\nRoute::get(\'/transparansi\', function () {\r\n    return view(\'transparansi\');\r\n});\r\nRoute::get(\'/login\', [AuthController::class, \'showLoginForm\'])->name(\'login\');\r\nRoute::post(\'/login\', [AuthController::class, \'login\']);\r\nRoute::post(\'/logout\', [AuthController::class, \'logout\'])->name(\'logout\');\r\nRoute::get(\'/admin/dashboard\', [DashboardController::class, \'index\'])\r\n    ->name(\'dashboard\')\r\n    ->middleware(\'auth\');\r\n\r\nRoute::view(\'/admin/kades\', \'admin.kades\')->name(\'kades\');\r\nRoute::view(\'/admin/perangkat-desa\', \'admin.perangkat-desa\')->name(\'perangkat-desa\');\r\nRoute::view(\'/admin/struktur\', \'admin.struktur\')->name(\'struktur\');\r\nRoute::view(\'/admin/pemerintahan\', \'admin.pemerintahan\')->name(\'pemerintahan\');\r\nRoute::view(\'/admin/agenda\', \'admin.agenda\')->name(\'agenda\');\r\nRoute::view(\'/admin/produk-hukum\', \'admin.produk-hukum\')->name(\'produk-hukum\');\r\nRoute::view(\'/admin/transparansi\', \'admin.transparansi\')->name(\'transparansi\');\r\n\r\n\r\nRoute::get(\'/admin/monografi\', [MonografiController::class, \'index\'])->name(\'admin.monografi\');\r\nRoute::post(\'/data-persebaran\', [DataPersebaranPendudukController::class, \'store\'])->name(\'data-persebaran.store\');\r\nRoute::get(\'/data-persebaran/{id}/edit\', [DataPersebaranPendudukController::class, \'edit\'])->name(\'data-persebaran.edit\');\r\nRoute::put(\'/data-persebaran/{id}\', [DataPersebaranPendudukController::class, \'update\'])->name(\'data-persebaran.update\');\r\nRoute::delete(\'/data-persebaran/{id}\', [DataPersebaranPendudukController::class, \'destroy\'])->name(\'data-persebaran.destroy\');\r\n\r\n\r\nRoute::get(\'/data-populasi\', [PopulationDataController::class, \'index\'])->name(\'population.index\');\r\nRoute::post(\'/data-populasi\', [PopulationDataController::class, \'store\'])->name(\'population.store\');\r\nRoute::get(\'/data-populasi/{id}/edit\', [PopulationDataController::class, \'edit\'])->name(\'population.edit\');\r\nRoute::put(\'/data-populasi/{id}\', [PopulationDataController::class, \'update\'])->name(\'population.update\');\r\nRoute::delete(\'/data-populasi/{id}\', [PopulationDataController::class, \'destroy\'])->name(\'population.destroy\');\r\n\r\n\r\nRoute::get(\'/data-agama\', [DataKependudukanAgamaController::class, \'index\'])->name(\'agama.index\');\r\nRoute::post(\'/data-agama\', [DataKependudukanAgamaController::class, \'store\'])->name(\'agama.store\'); \r\nRoute::get(\'/data-agama/{id}/edit\', [DataKependudukanAgamaController::class, \'edit\'])->name(\'agama.edit\'); \r\nRoute::put(\'/data-agama/{id}\', [DataKependudukanAgamaController::class, \'update\'])->name(\'agama.update\'); \r\nRoute::delete(\'/data-agama/{id}\', [DataKependudukanAgamaController::class, \'destroy\'])->name(\'agama.destroy\'); \r\n\r\nRoute::get(\'/data-pendidikan\', [PendidikanTerakhirController::class, \'index\'])->name(\'pendidikan_terakhir.index\');\r\nRoute::post(\'/data-pendidikan\', [PendidikanTerakhirController::class, \'store\'])->name(\'pendidikan_terakhir.store\');\r\nRoute::get(\'/data-pendidikan/{id}/edit\', [PendidikanTerakhirController::class, \'edit\'])->name(\'pendidikan_terakhir.edit\');\r\nRoute::put(\'/data-pendidikan/{id}\', [PendidikanTerakhirController::class, \'update\'])->name(\'pendidikan_terakhir.update\');\r\nRoute::delete(\'/data-pendidikan/{id}\', [PendidikanTerakhirController::class, \'destroy\'])->name(\'pendidikan_terakhir.destroy\');\r\n\r\nRoute::get(\'/data-pekerjaan\', [DataPekerjaanController::class, \'index\'])->name(\'data_pekerjaan.index\');\r\nRoute::post(\'/data-pekerjaan\', [DataPekerjaanController::class, \'store\'])->name(\'data_pekerjaan.store\');\r\nRoute::get(\'/data-pekerjaan/{id}/edit\', [DataPekerjaanController::class, \'edit\'])->name(\'data_pekerjaan.edit\');\r\nRoute::put(\'/data-pekerjaan/{id}\', [DataPekerjaanController::class, \'update\'])->name(\'data_pekerjaan.update\');\r\nRoute::delete(\'/data-pekerjaan/{id}\', [DataPekerjaanController::class, \'destroy\'])->name(\'data_pekerjaan.destroy\');\r\n\r\nRoute::get(\'/data-kelompok-umur\', [DataKelompokUmurController::class, \'index\'])->name(\'data_kelompok_umur.index\');\r\nRoute::post(\'/data-kelompok-umur\', [DataKelompokUmurController::class, \'store\'])->name(\'data_kelompok_umur.store\');\r\nRoute::get(\'/data-kelompok-umur/{id}/edit\', [DataKelompokUmurController::class, \'edit\'])->name(\'data_kelompok_umur.edit\');\r\nRoute::put(\'/data-kelompok-umur/{id}\', [DataKelompokUmurController::class, \'update\'])->name(\'data_kelompok_umur.update\');\r\nRoute::delete(\'/data-kelompok-umur/{id}\', [DataKelompokUmurController::class, \'destroy\'])->name(\'data_kelompok_umur.destroy\');\r\n\r\n\r\n\r\nRoute::prefix(\'berita\')->group(function () {\r\n    Route::get(\'/\', [NewsController::class, \'index\'])->name(\'news.index\'); // Menampilkan daftar berita\r\n    Route::get(\'/create\', [NewsController::class, \'create\'])->name(\'news.create\'); // Form tambah berita\r\n    Route::post(\'/\', [NewsController::class, \'store\'])->name(\'news.store\'); // Simpan berita baru\r\n    Route::get(\'/{news}\', [NewsController::class, \'show\'])->name(\'news.show\'); // Menampilkan detail berita\r\n    Route::get(\'/{news}/edit\', [NewsController::class, \'edit\'])->name(\'news.edit\'); // Form edit berita\r\n    Route::put(\'/{news}\', [NewsController::class, \'update\'])->name(\'news.update\'); // Update berita\r\n    Route::delete(\'/{news}\', [NewsController::class, \'destroy\'])->name(\'news.destroy\'); // Hapus berita\r\n\r\n});\r\n\r\nRoute::prefix(\'gallery\')->group(function () {\r\n    Route::get(\'/\', [GalleryController::class, \'index\'])->name(\'gallery.index\');\r\n    Route::get(\'/create\', [GalleryController::class, \'create\'])->name(\'gallery.create\');\r\n    Route::post(\'/\', [GalleryController::class, \'store\'])->name(\'gallery.store\');\r\n    Route::get(\'/{gallery}/edit\', [GalleryController::class, \'edit\'])->name(\'gallery.edit\');\r\n    Route::put(\'/{gallery}\', [GalleryController::class, \'update\'])->name(\'gallery.update\');\r\n    Route::delete(\'/{gallery}\', [GalleryController::class, \'destroy\'])->name(\'gallery.destroy\');\r\n});', 'coy kapan beresnya ini', '2025-01-01', '2025-01-01 00:29:55', '2025-01-01 00:30:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_terakhir`
--

CREATE TABLE `pendidikan_terakhir` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laki_laki` int NOT NULL,
  `perempuan` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikan_terakhir`
--

INSERT INTO `pendidikan_terakhir` (`id`, `jenis_kelompok`, `laki_laki`, `perempuan`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Tidak/Belum Sekolah', 481, 489, 970, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(2, 'Belum Tamat SD/Sederajat', 619, 687, 1306, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(3, 'Tamat SD/Sederajat', 793, 865, 1658, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(4, 'SLTP/Sederajat', 881, 807, 1688, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(5, 'SLTA/Sederajat', 1765, 1536, 3301, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(6, 'Diploma I/II', 0, 0, 0, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(7, 'Akademi/Diploma III/Sarjana Muda', 101, 113, 214, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(8, 'Diploma IV/Strata I', 128, 98, 226, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(9, 'Strata II', 17, 9, 26, '2024-12-31 23:53:51', '2024-12-31 23:53:51'),
(10, 'Strata III', 0, 0, 0, '2024-12-31 23:53:51', '2024-12-31 23:53:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `population_data`
--

CREATE TABLE `population_data` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `population_data`
--

INSERT INTO `population_data` (`id`, `jenis_kelompok`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Laki-Laki', 4785, NULL, NULL),
(2, 'Perempuan', 4604, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', NULL, '$2y$10$5S7aWYkcn7ixMjyHkMq1EefNU50O9L8P9eD43RQeWW.Jae.nbuvki', NULL, '2024-12-31 23:53:51', '2024-12-31 23:53:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `village_instruments`
--

CREATE TABLE `village_instruments` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `village_instruments`
--

INSERT INTO `village_instruments` (`id`, `image`, `category`, `position`, `name`, `description`, `facebook`, `instagram`, `email`, `created_at`, `updated_at`) VALUES
(1, '1735752059_attachment-1655193331732.jpeg', 'Struktur Desa', 'Kepala Desa', 'Ajad Sudrajad the mighty Duck', 'Didi Supendi adalah seorang kepala desa yang berdedikasi, menjabat sejak tahun 2019 hingga 2027. Selama masa kepemimpinannya, Didi telah berkomitmen untuk meningkatkan kesejahteraan masyarakat desanya melalui berbagai program pembangunan infrastruktur, pendidikan, dan pemberdayaan ekonomi lokal. Dengan pendekatan yang inklusif dan aspiratif, ia berhasil membangun hubungan yang harmonis antara pemerintah desa dan masyarakat.', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'johndoe@example.com', '2025-01-01 01:22:53', '2025-01-01 23:20:18'),
(2, '1735740301_images (8).jpg', 'Struktur Desa', 'Ketua BPD', 'Jupri', '123 akskaskakdas kasdkaksdak', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 04:53:53', '2025-01-01 07:05:01'),
(4, '1735740437-artworks-000108220596-0ywrb1-t500x500.jpg', 'Struktur Desa', 'Sekretaris Desa', 'musang', 'Sekretaris DesaSekretaris DesaSekretaris Desa', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 07:07:17', '2025-01-01 07:07:17'),
(5, '1735747607-images (1).png', 'Sekretaris', 'Sekretaris', 'Ujang Atang', 'Sekretaris Sekretaris', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 09:06:47', '2025-01-01 23:22:24'),
(6, '1735747658-download (1).jpg', 'Kaur', 'Kaur Perencanaan', 'Abdul Rohman L', 'Kaur PerencanaanKaur Perencanaan', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 09:07:38', '2025-01-01 23:23:10'),
(7, '1735750446-download (2).jpg', 'Kaur', 'Kaur Keuangan', 'Neni Tania', 'Kucing GarongKucing GarongKucing Garong', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 09:54:06', '2025-01-01 23:23:37'),
(8, '1735794062-images (9).jpg', 'Struktur Desa', 'Kaur Perencanaan', 'mamat the dragon slayer', 'Kaur PerencanaanKaur Perencanaan', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:01:02', '2025-01-01 22:01:02'),
(9, '1735794122-man-7433287_1280.jpg', 'Struktur Desa', 'Kaur Keuangan', 'Iwan the lover man', 'Kaur KeuanganKaur Keuangan', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:02:02', '2025-01-01 22:02:02'),
(10, '1735794194-images (10).jpg', 'Struktur Desa', 'Kaur Tata Usaha & Umum', 'Celsi the silent killer', 'Kaur Tata Usaha & UmumKaur Tata Usaha & Umum', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:03:14', '2025-01-01 22:03:14'),
(11, '1735794264-seorang-petani-di-oku-timur-ditangkap-karena-menghilangkan-nyawa-orang.jpg', 'Struktur Desa', 'Kasie Pemerintahan', 'Irawan Just a regular man', 'Kasie PemerintahanKasie Pemerintahan', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:04:24', '2025-01-01 22:04:24'),
(12, '1735794407-images (11).jpg', 'Struktur Desa', 'Staff Kasie Pemerintahan', 'ranger biru', 'Staff Kasie PemerintahanStaff Kasie Pemerintahan', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:06:47', '2025-01-01 22:06:47'),
(13, '1735794591-6773dacdf3016.jpg', 'Struktur Desa', 'Kasie Pelayanan', 'Rangga Iwan M', 'Rangga Iwan MRangga Iwan M', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:09:51', '2025-01-01 22:09:51'),
(14, '1735796159_man-7433287_1280.jpg', 'Struktur Desa', 'Kasie Kesra', 'Guntur Alpiani', 'Guntur AlpianiGuntur Alpiani', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:11:47', '2025-01-01 22:35:59'),
(18, '1735794962-images (9).jpg', 'Struktur Desa', 'Kadus I', 'Ajang Supriatna', 'Ajang Supriatna', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:16:02', '2025-01-01 22:16:02'),
(19, '1735794998-man-7433287_1280.jpg', 'Struktur Desa', 'Kadus II', 'Fauzan Abdul M. S', 'Fauzan Abdul M. SFauzan Abdul M. S', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:16:38', '2025-01-01 22:16:38'),
(20, '1735795039-images (10).jpg', 'Struktur Desa', 'Kadus III', 'Irpan Taopan', 'Kadus III', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:17:19', '2025-01-01 22:17:19'),
(21, '1735795069-seorang-petani-di-oku-timur-ditangkap-karena-menghilangkan-nyawa-orang.jpg', 'Struktur Desa', 'Kadus IV', 'Hendri Hidayana', 'Hendri Hidayana', 'https://www.facebook.com/your.username', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 22:17:49', '2025-01-01 22:17:49'),
(22, '1735799058-man-7433287_1280.jpg', 'Kaur', 'Kaur Tata Usaha & Umum', 'Herul Soleh', 'Herul Soleh Herul Soleh', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 23:24:18', '2025-01-01 23:24:18'),
(23, '1735799147-images (9).jpg', 'Kasie', 'Kasie Pemerintahan', 'ahmad', 'Kasie Pemerintahan Kasie Pemerintahan', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 23:25:47', '2025-01-01 23:25:47'),
(24, '1735799188-images (10).jpg', 'Kasie', 'Staff Kasie Pemerintahan', 'Tomi Irpan Sopian', 'Tomi Irpan Sopian Tomi Irpan Sopian', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 23:26:28', '2025-01-01 23:26:28'),
(25, '1735800504_attachment-1655193331732.jpeg', 'Kadus', 'Kadus dus', 'Kadus', 'Kadus dus', 'https://facebook.com/johndoe', 'https://instagram.com/johndoe', 'mrizki135790@gmail.com', '2025-01-01 23:27:19', '2025-01-01 23:48:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kelompok_umur`
--
ALTER TABLE `data_kelompok_umur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kependudukan_agama`
--
ALTER TABLE `data_kependudukan_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pekerjaan`
--
ALTER TABLE `data_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_persebaran_penduduk`
--
ALTER TABLE `data_persebaran_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `population_data`
--
ALTER TABLE `population_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `village_instruments`
--
ALTER TABLE `village_instruments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_kelompok_umur`
--
ALTER TABLE `data_kelompok_umur`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_kependudukan_agama`
--
ALTER TABLE `data_kependudukan_agama`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_pekerjaan`
--
ALTER TABLE `data_pekerjaan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_persebaran_penduduk`
--
ALTER TABLE `data_persebaran_penduduk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `population_data`
--
ALTER TABLE `population_data`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `village_instruments`
--
ALTER TABLE `village_instruments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
