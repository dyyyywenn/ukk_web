-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2021 pada 05.10
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 'Laskar Pelangi.jpg', '2021-10-31 06:56:54', '2021-10-31 06:56:54'),
(5, 'Sang Pemimpin', 'Andrea Hirata', 'Bentang Pustaka', 'Sang Pemimpin.jpg', '2021-10-31 06:58:17', '2021-10-31 06:58:17'),
(6, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia', 'Negeri 5 Menara.jpg', '2021-10-31 06:59:23', '2021-10-31 06:59:23'),
(10, 'Jejak Langkah', 'Pramoedya Ananta Toer', 'Lentera Dipantara', 'Jejak Langkah.jpg', '2021-11-01 13:36:45', '2021-11-01 13:36:45'),
(11, 'Anak Semua Bangsa', 'Pramoedya Ananta Toer', 'Hasta Mitra', 'Anak Semua Bangsa.jpg', '2021-11-01 13:37:39', '2021-11-01 13:37:39'),
(12, 'Garis Waktu', 'Fiersa Besari', 'Media Kita', 'Garis Waktu.jpg', '2021-11-01 13:41:39', '2021-11-01 13:41:39'),
(13, 'Arah Langkah', 'Fiersa Besari', 'Media Kita', 'Arah Langkah.jpg', '2021-11-01 13:43:27', '2021-11-01 13:43:27'),
(15, 'Ayat-ayat cinta', 'Habiburrahman El S', 'Republika', 'Ayat-ayat cinta.jpg', '2021-11-09 03:43:24', '2021-11-09 03:43:24'),
(18, 'Cantik itu Luka', 'Eka Kurniawan', 'Penerbit Jendela', 'Cantik itu Luka.jpg', '2021-11-09 06:06:06', '2021-11-09 06:06:06'),
(19, 'Mantappu Jiwa', 'Jerome Polin Sijabat', 'Gramedia Pustaka Utama', 'Mantappu Jiwa.jpg', '2021-11-10 03:37:37', '2021-11-10 03:37:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Wendy Noer Isnaeni', 'dywenbusiness@gmail.com', NULL, '$2y$10$ptr8wMF56TJx2iIhkkQouuylbZrXHlKl1W1LYBVSMXXlTXcKxSSHy', NULL, '2021-10-30 08:45:30', '2021-10-30 08:45:30', 1),
(2, 'dywen', 'wndynr@gmail.com', NULL, '$2y$10$1/yg3i6fnHAn4iX6QufH5eoMekOkswqRDUaY5km4WzjHf8Bh51Ehu', NULL, '2021-10-30 08:45:51', '2021-10-30 08:45:51', 2),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$a8Y/GnpAJ9qL2T0PvufIluw8w18tB8rVLteHcuWd3F9OYweXfODHa', NULL, '2021-11-08 20:28:09', '2021-11-08 20:28:09', 2),
(4, 'admin2', 'admin2@gmail.com', NULL, '$2y$10$/jQDHbrhIevmKANAwLqpr.95wVHwYGbNIOAO5.lAyk.UcqaeoIiuK', NULL, '2021-11-08 20:35:52', '2021-11-08 20:35:52', 2),
(5, 'admin3', 'admin3@gmail.com', NULL, '$2y$10$3B60LFP8JkAKmL47k89uA.qcegxo/E9VHNJbWtPhJeYrVmH3eZ5pG', NULL, '2021-11-08 20:36:52', '2021-11-08 20:36:52', 2),
(6, 'admin4', 'admin4@gmail.com', NULL, '$2y$10$Fogb4cC1PsIeUEN.KeLL0OO511SjrdQkWdSi/m8OhIsd6HJKFhANi', NULL, '2021-11-08 23:07:05', '2021-11-08 23:07:05', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
