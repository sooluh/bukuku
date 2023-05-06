-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 06 Bulan Mei 2023 pada 10.09
-- Versi server: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `bukuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) NOT NULL,
  `publication` year(4) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `name`, `cover`, `publisher`, `publication`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Jangan Membuat Masalah Kecil Jadi Masalah Besar', 'https://ik.imagekit.io/sooluh/covers/JMMKJMB.jpg?updatedAt=1673686860777', 'Gramedia', 2019, 'Richard Carlson', '2023-05-06 09:28:38', NULL),
(2, 'Halo Koding', 'https://ik.imagekit.io/sooluh/covers/HK.jpg?updatedAt=1673687368241', 'Elmarkazi', 2021, 'Hilman Ramadhan', '2023-05-06 09:30:45', NULL),
(3, 'Beyond the Inspiration', 'https://ik.imagekit.io/sooluh/covers/BTI.png?updatedAt=1673688969796', 'Alfatih Press', 2013, 'Felix Yanwar Siauw', '2023-05-06 09:32:10', NULL),
(4, 'Maaf Tuhan Aku Hampir Menyerah', 'https://ik.imagekit.io/sooluh/covers/MTAHM.jpg?updatedAt=1673688763955', 'Sahima', 2020, 'Alfialghazi', '2023-05-06 09:33:16', NULL),
(5, 'Perbaiki Diri, Perbarui Hati', 'https://ik.imagekit.io/sooluh/covers/PDPH.jpg?updatedAt=1673688961155', 'Checklist', 2019, 'A.R. Shohibul Ulum', '2023-05-06 09:35:17', NULL),
(6, 'Self Healing With Qur\'an', 'https://ik.imagekit.io/sooluh/covers/SHWQ.jpg?updatedAt=1673689104748', 'Syalmahat Publishing', 2022, 'Ummu Kalsum Iqt', '2023-05-06 09:36:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
