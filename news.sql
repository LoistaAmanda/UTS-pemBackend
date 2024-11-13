-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2024 pada 15.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnewsdigital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `published_at` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `description`, `content`, `url`, `url_image`, `published_at`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Kenaikan Harga BBM Global', 'Rina Puspita', 'Harga BBM dunia terus meningkat akibat ketidakstabilan politik.', 'Pengaruhnya terasa hingga dalam negeri, menaikkan biaya transportasi.', 'https://energynews.com/kenaikan-bbm', 'https://energynews.com/images/bbm.jpg', '2024-11-13 07:00:00', 'energy', '2024-11-13 01:19:21', '2024-11-13 01:19:21'),
(3, 'Kemajuan Infrastruktur Jalan Tol', 'Dina Rahma', 'Pemerintah mempercepat pembangunan jalan tol di pulau Jawa.', 'Proyek ini diharapkan mengurangi kemacetan dan waktu tempuh.', 'https://infranews.com/jalan-tol', 'https://infranews.com/images/tol.jpg', '2024-11-13 09:00:00', 'infrastructure', '2024-11-13 01:20:25', '2024-11-13 01:20:25'),
(4, 'Indonesia Lolos ke Piala Asia', 'Loista Amanda Noviar', 'Tim nasional sepak bola Indonesia berhasil lolos ke Piala Asia.', 'Pertandingan terakhir berhasil dimenangkan dengan skor 3-1.', 'https://sportsnews.com/piala-asia', 'https://sportsnews.com/images/piala-asia.jpg', '2024-11-13 10:00:00', 'sport', '2024-11-13 07:35:55', '2024-11-13 07:53:52'),
(5, 'Pasar Saham Global Menurun', 'Ahmad Fauzi', 'Indeks pasar saham mengalami penurunan akibat ketidakpastian ekonomi global.', 'Investor khawatir akan adanya resesi global yang mempengaruhi banyak sektor.', 'https://financenews.com/pasar-saham', 'https://financenews.com/images/saham.jpg', '2024-11-13 09:00:00', 'finance', '2024-11-13 07:36:22', '2024-11-13 07:36:22'),
(6, 'Pasar Saham Global Menurun', 'Ahmad Fauzi', 'Indeks pasar saham mengalami penurunan akibat ketidakpastian ekonomi global.', 'Investor khawatir akan adanya resesi global yang mempengaruhi banyak sektor.', 'https://financenews.com/pasar-saham', 'https://financenews.com/images/saham.jpg', '2024-11-13 09:00:00', 'finance', '2024-11-13 07:36:44', '2024-11-13 07:36:44'),
(7, 'Atlet Indonesia Raih Emas di Kejuaraan Dunia', 'Budi Santoso', 'Atlet angkat besi Indonesia berhasil meraih medali emas di kejuaraan dunia.', 'Medali emas ini menjadi kebanggaan bagi Indonesia di kancah internasional.', 'https://sportsnews.com/kejuaraan-dunia', 'https://sportsnews.com/images/angkat-besi.jpg', '2024-11-13 12:00:00', 'sport', '2024-11-13 07:37:11', '2024-11-13 07:37:11'),
(8, 'Pengembangan Obat Baru untuk Diabetes', 'Dr. Riza Fahmi', 'Para peneliti mengembangkan obat baru yang efektif untuk diabetes.', 'Obat ini sedang diuji klinis dan diharapkan siap dalam beberapa tahun.', 'https://healthnews.com/obat-diabetes', 'https://healthnews.com/images/diabetes.jpg', '2024-11-13 14:00:00', 'health', '2024-11-13 07:37:36', '2024-11-13 07:37:36'),
(9, 'Indonesia Siap Jadi Tuan Rumah Kejuaraan Dunia Atletik', 'Andi Mahendra', 'Indonesia akan menjadi tuan rumah kejuaraan dunia atletik tahun depan.', 'Pemerintah sedang mempersiapkan infrastruktur dan fasilitas untuk acara ini.', 'https://sportsnews.com/kejuaraan-dunia-atletik', 'https://sportsnews.com/images/atletik.jpg', '2024-11-13 18:00:00', 'sport', '2024-11-13 07:48:49', '2024-11-13 07:48:49'),
(10, 'Inovasi Teknologi di Dunia Pertanian', 'Bagus Santoso', 'Teknologi modern diterapkan untuk meningkatkan hasil panen petani.', 'Para petani mulai menggunakan drone untuk memantau lahan.', 'https://agriupdate.com/teknologi-pertanian', 'https://agriupdate.com/images/pertanian.jpg', '2024-11-13 11:00:00', 'agriculture', '2024-11-13 07:51:11', '2024-11-13 07:51:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
