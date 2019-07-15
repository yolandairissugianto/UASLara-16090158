-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 15 Jul 2019 pada 05.37
-- Versi server: 5.7.24
-- Versi PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

DROP TABLE IF EXISTS `beritas`;
CREATE TABLE IF NOT EXISTS `beritas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `gambar`, `judul`, `isi_berita`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'berita/q9ctIgn5lo2PHddznTHciqvdGwLycsWinjd9sI5p.jpeg', 'Lomba LKS Tingkat Nasional', 'SLAWI - Sebanyak 63 sekolah menengah kejuruan (SMK) se- Kabupaten Tegal adu kompetensi dalam Lomba Keterampilan Siswa (LKS) tahun 2018 yang diselenggarakan di empat SMK pada Sabtu (15/9).\r\n\r\nKegiatan yang memperlombakan 13 mata lomba itu dimaksudkan mengukur keberhasilan proses belajar di SMK. Dalam kegiatan itu, dibuka oleh Kasubbag Tata Usaha Balai Pengendali Pendidikan Menengah dan Khusus (BP2MK) Jateng, Nuriman. Selain itu, acara tersebut juga dihadiri Musyawarah Kerja Kepala Sekolah (MKKS) SMK Kabupaten Tegal, para guru SMK, siswa dan lainnya.\r\n\r\nPembukaan LKS juga dimeraihkan dengan penampilan tarian tradisional dan penampilan kesenian lain. Sekretaris LKS Kabupaten Tegal, Ali Saefudin mengatakan, LKS tingkat Kabupaten Tegal tahun 2018 yang merupakan agenda tahunan MMKS SMK Kabupaten Tegal bertujuan untuk mencari siswa terbaik di kompetensi keahlian masing-masing untuk mewakili Kabupaten Tegal dalam LKS tingkat Provinsi Jateng.', '2019-07-14 01:05:14', '2019-07-14 11:28:55', NULL),
(2, 'berita/4zpFAeCE0nV2rkhBzGKM6EJXaPHuve9xHcP2oYG7.jpeg', 'Meraih Juara Tingkat Provinsi Jawa Tengah', 'Pada hari Senin, 27 agustus 2018, setelah upacara bendera diumumkan bahwa perwakilan dari SMK Negeri 1 Slawi yaitu atas nama Darojatul Aliyah kelas XI TKJ 2 berhasil meraih Juara III Pidato / Ceramah Agama Islam pada MAPSI Tingkat Prov. Jateng di Semarang. Selamat untuk SMK Negeri 1 Slawi.', '2019-07-14 01:06:24', '2019-07-14 11:30:55', NULL),
(3, 'berita/XSHPT5JnUZKX4UdglE1n3CybdP4xLbUSxVhHGurs.png', 'Melaksanakan Doa Bersama Sebelum Ujian', 'Pada hari Jumat, 16 Maret 2018, semua siswa siswi kls XII SMK Negeri 1 Slawi mengadakan kegiatan istigosah dan doa bersama. Kegiatan ini bertujuan untuk memohon kepada Allah SWT agar diberi kelancaran, kemudahan, dan diberikan hasil yang terbaik dalam menghadapi ujian-ujian ke depannya.', '2019-07-14 12:07:09', '2019-07-14 12:08:02', '2019-07-14 12:08:02'),
(4, 'berita/D9c6zJNChRJ7Sel5vgH2t1X3MkXGIM2vuNoe5eH0.png', 'Melaksanakan Doa Bersama Sebelum Ujian', 'Pada hari Jumat, 16 Maret 2018, semua siswa siswi kls XII SMK Negeri 1 Slawi mengadakan kegiatan istigosah dan doa bersama. Kegiatan ini bertujuan untuk memohon kepada Allah SWT agar diberi kelancaran, kemudahan, dan diberikan hasil yang terbaik dalam menghadapi ujian-ujian ke depannya.', '2019-07-14 12:22:10', '2019-07-14 12:23:08', '2019-07-14 12:23:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

DROP TABLE IF EXISTS `gurus`;
CREATE TABLE IF NOT EXISTS `gurus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nip` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('laki_laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pengampu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gurus_nip_unique` (`nip`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `nip`, `gambar`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `pengampu`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1234567895', NULL, 'Sri Rejeki', 'perempuan', 'Tegal', '1976-01-21', 'Matematika', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_07_042432_create_beritas_table', 1),
(4, '2019_05_24_050129_create_gurus_table', 1),
(5, '2019_06_29_030053_create_siswas_table', 1),
(6, '2019_06_29_031137_create_pesans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesans`
--

DROP TABLE IF EXISTS `pesans`;
CREATE TABLE IF NOT EXISTS `pesans` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pesans_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesans`
--

INSERT INTO `pesans` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Vesta henin', 'vestah@gmail.com', 'Sekolahnya bagus, hanya saja lahan parkir kurang memadai', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

DROP TABLE IF EXISTS `siswas`;
CREATE TABLE IF NOT EXISTS `siswas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nis` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('laki_laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `siswas_nis_unique` (`nis`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `nis`, `gambar`, `nama`, `jk`, `kelas`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1234567895', '1563129127.png', 'Yolanda Iris Sugianto', 'perempuan', 'XII PM 3', 'Purbayasa', '2019-07-14 01:08:45', '2019-07-14 11:32:07', NULL),
(2, '1234567890', '1563129148.png', 'Vesta Henindya', 'perempuan', 'XII AK 2', 'Purbayasa', '2019-07-14 01:14:14', '2019-07-14 11:32:28', NULL),
(3, '1234567899', '1563131370.png', 'Arkan Huzain', 'laki_laki', 'X AK 1', 'Talang', '2019-07-14 12:09:30', '2019-07-14 12:10:13', '2019-07-14 12:10:13'),
(4, '1234567891', '1563132272.png', 'Arkan Huzain', 'laki_laki', 'X AP 1', 'Talang', '2019-07-14 12:24:32', '2019-07-14 12:25:47', '2019-07-14 12:25:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$Lo3qWd4STy6HJDVrfR3vsujNKLOfoTeiVTeRzgqzx5hHt/epPBDz6', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
